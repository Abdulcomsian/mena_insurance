<?php

namespace App\Http\Controllers;

use App\Models\BoardOfDirector;
use App\Models\CompanyDetail;
use App\Models\CountryInformation;
use App\Models\ReqForSancStatus;
use App\Models\Subscription;
use App\Models\Shareholder;
use App\Notifications\NewSanctionRequestForAdmin;
use App\Notifications\SanctionRequestEmail;
use App\User;
use App\Utils\SanctionRequestStatus;
use App\Utils\SanctionsType;
use App\Utils\Status;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Validator;

class CompanyDetailController extends Controller
{
    public function __construct()
    {
        $this->middleware(['auth','verified'],['except' => ['liveSearch','show','searchAllResult','searchAll']]);
    }

    //Show sanction search history to user
    public function showSanctionStatusHistory(){
        $sanctions = ReqForSancStatus::with(['company'=>function($company){
          $company->select('id','company_name','country');
        }])
            ->where('user_id',Auth::id())
            ->orderBy('id','desc')
            ->get();
        return view('screens.sanctions-history',compact('sanctions'));
    }
    //Save request for sanction status of company
    private function saveSanctionRequest($all_fields,$total_sanctions,$sub){
        $sub['remaining_sanctions'] = $sub->remaining_sanctions - $total_sanctions;
        $sub['used_sanctions'] = $sub->used_sanctions + $total_sanctions;
        $sub->save();
        $all_fields['sanctions'] = $total_sanctions;
        return ReqForSancStatus::create($all_fields);
    }

    //Sanction request from user
    public function sanctionRequest(Request $request){
        $validator = Validator::make($request->all(), [
            'company_id' => 'required|exists:company_detail,id',
            'sanctions_type' => 'required',
        ],[
           'company_id.*' => 'The company details is required'
        ]);

        if ($request->sanctions_type == SanctionsType::CompanywithselectedBoardsofDirector){
            $validator = Validator::make($request->all(), [
                'board_of_directors' => 'required|array|min:1',
            ],[
               'board_of_directors.*' => 'Select at least one board of director'
            ]);
        }
        if ($validator->fails()) {
            toastError($validator->errors()->first());
            return back();
        }

        try {
            $all_fields = $request->except('_token');
            $all_fields['user_id'] = Auth::id();
            $all_fields['status'] = SanctionRequestStatus::Pending;
            $sub = Auth::user()->subscription;
            $sanction_request =  null;
            if(isset($sub) && $sub->remaining_sanctions > 0){
                if ($all_fields['sanctions_type'] == SanctionsType::Searchcompany) {
                    $total_sanctions = 1;
                    if ($sub->remaining_sanctions >= $total_sanctions){
                        $sanction_request = self::saveSanctionRequest($all_fields,$total_sanctions,$sub);
                    }else{
                        toastInfo('Your do not have sufficient sanctions to perform this operation, buy more sanctions !');
                        return back();
                    }
                }
                elseif ($all_fields['sanctions_type'] == SanctionsType::FullcompanywithBoardsofDirector){
                    //Count all board of directors for this company
                    $directors_list = BoardOfDirector::where('company_id',$request->company_id)
                        ->pluck('id');
                    $total_sanctions = count($directors_list)+1; //Add 1 for company search
                    if ($sub->remaining_sanctions >= $total_sanctions){
                        $all_fields['board_of_directors'] = json_encode($directors_list);
                        $sanction_request = self::saveSanctionRequest($all_fields,$total_sanctions,$sub);
                    }else{
                        toastInfo('Your do not have sufficient sanctions to perform this operation, buy more sanctions !');
                        return back();
                    }
                }
                elseif ($all_fields['sanctions_type'] == SanctionsType::CompanywithselectedBoardsofDirector){
                    $total_sanctions = count($request->board_of_directors) + 1; //Add 1 for company search

                    if ($sub->remaining_sanctions >= $total_sanctions){
                        $all_fields['board_of_directors'] = json_encode($request->board_of_directors);
                        $sanction_request = self::saveSanctionRequest($all_fields,$total_sanctions,$sub);
                    }else{
                        toastInfo('Your do not have sufficient sanctions to perform this operation, buy more sanctions !');
                        return back();
                    }
                }
                toastSuccess('Your request is successfully submitted for "Sanction Result"');
                $company_details = CompanyDetail::where('id',$request->company_id)
                    ->select('company_name','country')
                    ->first();

                Auth::user()->notify(new SanctionRequestEmail($company_details));

                $admins = User::where('type','Admin')->get();
                foreach ($admins as $admin){
                    $admin->notify(new NewSanctionRequestForAdmin($company_details));
                }
                return back();
            }else{
                toastInfo('You do not have sufficient sanctions to perform this operation, buy sanctions !');
                return back();
            }
        }catch (\Exception $exception){
            toastError('Something went wrong, try again');
            return back();
        }

    }

    //Check user sanctions balanced
    public function checkSanctionsBalanced(Request $request){
        try {
            $total_sanctions_required = $request->total_sanctions;
            $sub = Auth::user()->subscription;
            $result = false;
            if (isset($sub) && ($sub->remaining_sanctions >= $total_sanctions_required)){
                $result = true;
            }
            return response()->json($result);
        }catch (\Exception $exception){
            return response()->json(false);
        }

    }

    //Get list of board of directors when click on search status modal
    public function getDirectors(Request $request){
        $data = BoardOfDirector::where('company_id',$request->company_id)
            ->select('id','designation','name')
            ->orderby('designation','asc')
            ->get();
        return response()->json($data);
    }

    //Get list of companies when click on countries in checkboxes of full search page
    private function basicSearchQuery(){
        $query = DB::table('company_detail')
                ->where('status',Status::Active)
                ->select('id', 'country', 'company_name', 'company_type','company_website')
                ->orderby('country','asc');
        return $query;
    }

    //Get list of board of directors
    private function getListOfDirectors($companies){
        $query =  BoardOfDirector::join('company_detail','board_of_director.company_id','=','company_detail.id')
            ->whereIn('company_id',$companies)
            ->select(
                'board_of_director.id as b_o_d_id',
                'designation',
                'name',
                'company_detail.id as company_id',
                'company_detail.company_name as company_name',
                'company_detail.country as country'
            )
            ->orderby('name','asc')
            ->paginate(30,['*'],'people');
        return $query;
    }
    public function searchAllResult(Request $request){
        if ($request->filled('country') && $request['country'][0] == '0') {
            $companies = self::basicSearchQuery()->paginate(30);
            $companies_ids = self::basicSearchQuery()->pluck('id');
            if (count($companies_ids) > 0 ){
                $peoples = self::getListOfDirectors($companies_ids);
            }
//            $peoples->setPageName('people');
            $peoples->appends(['country' => $request['country']]);
            $companies->appends(['country' => $request['country']]);
        }
        elseif ($request->filled('country') && $request['company_name'] == null){
            $companies = self::basicSearchQuery()->whereIn('country', $request['country'])
                ->paginate(30);
            $companies_ids = self::basicSearchQuery()->whereIn('country', $request['country'])->pluck('id');
            if (count($companies_ids) > 0 ){
                $peoples = self::getListOfDirectors($companies_ids);
            }
            $peoples->appends(['country' => $request['country']]);
            $companies->appends(['country' => $request['country']]);
        }
        elseif ($request->filled('country') && $request->filled('company_name')){
            $companies = self::basicSearchQuery()->whereIn('country', $request['country'])
                ->where('company_name', 'like', '%' . $request['company_name'] . '%')
                ->paginate(30);
            $companies_ids = self::basicSearchQuery()
                ->whereIn('country', $request['country'])
                ->where('company_name', 'like', '%' . $request['company_name'] . '%')
                ->pluck('id');
            if (count($companies_ids) > 0 ){
                $peoples = self::getListOfDirectors($companies_ids);
            }
            $peoples->appends(['country' => $request['country'],'company_name' =>$request['company_name']]);
            $companies->appends(['country' => $request['country'],'company_name' =>$request['company_name']]);
        }
        elseif($request->filled('country') && $request->filled('company_name') && $request->filled('company_type')){
            $companies = self::basicSearchQuery()->whereIn('country', $request['country'])
                ->whereIn('company_type',  $request['company_type'])
                ->where('company_name', 'like', '%' . $request['company_name'] . '%')
                ->paginate(30);
            $companies_ids = self::basicSearchQuery()
                ->whereIn('country', $request['country'])
                ->whereIn('company_type',  $request['company_type'])
                ->pluck('id');
            if (count($companies_ids) > 0 ){
                $peoples = self::getListOfDirectors($companies_ids);
            }
            $peoples->appends(['country' => $request['country'],'company_name' =>$request['company_name'],'company_type' =>$request['company_type']]);
            $companies->appends(['country' => $request['country'],'company_name' =>$request['company_name'],'company_type' =>$request['company_type']]);
        }
        elseif($request->filled('company_type') && $request->filled('company_name')){
            $companies = self::basicSearchQuery()
                ->whereIn('company_type',  $request['company_type'])
                ->where('company_name', 'like', '%' . $request['company_name'] . '%')
                ->paginate(30);
            $companies_ids = self::basicSearchQuery()
                ->whereIn('company_type',  $request['company_type'])
                ->where('company_name', 'like', '%' . $request['company_name'] . '%')
                ->pluck('id');
            if (count($companies_ids) > 0 ){
                $peoples = self::getListOfDirectors($companies_ids);
            }
            $peoples->appends(['company_name' =>$request['company_name'],'company_type' =>$request['company_type']]);
            $companies->appends(['company_name' =>$request['company_name'],'company_type' =>$request['company_type']]);
        }
        elseif ($request->filled('company_name')){
            $companies = self::basicSearchQuery()
                ->where('company_name', 'like', '%' . $request['company_name'] . '%')
                ->paginate(30);
            $companies_ids = self::basicSearchQuery()
                ->where('company_name', 'like', '%' . $request['company_name'] . '%')
                ->pluck('id');
            if (count($companies_ids) > 0 ){
                $peoples = self::getListOfDirectors($companies_ids);
            }
            $peoples->appends(['company_name' => $request['company_name']]);
            $companies->appends(['company_name' => $request['company_name']]);
        }
        elseif($request->filled('company_type')){
            $companies = self::basicSearchQuery()
                ->whereIn('company_type',  $request['company_type'])
                ->paginate(30);
            $companies_ids = self::basicSearchQuery()->whereIn('company_type',  $request['company_type'])->pluck('id');
            if (count($companies_ids) > 0 ){
                $peoples = self::getListOfDirectors($companies_ids);
            }
            $peoples->appends(['company_type' => $request['company_type']]);
            $companies->appends(['company_type' => $request['company_type']]);
        }
        else{
            $companies = [];
            $peoples = [];
        }


        $request = $request->all();
        $countries = CountryInformation::select('country_name')
            ->orderby('country_name','asc')
            ->get();
        $companies_types = DB::table('company_detail')
            ->select( 'company_type')
            ->whereNotNull('company_type')
            ->where('company_type', '<>', '')
            ->orderby('company_type','asc')
            ->distinct()
            ->get();
        return view('screens.search-all-companies',compact('countries',
            'companies',
            'request',
        'companies_types',
        'peoples'
        ));

    }

    public function liveSearch(Request $request){
        try{
            if ($request->country == 'All'){
                $data = DB::table('company_detail')
                    ->select('id', 'country', 'company_name')
                    ->where('company_name', 'like', '%' . $request['query'] . '%')
                    ->get();
            }
            else{
                $data = DB::table('company_detail')
                    ->select('id', 'country', 'company_name')
                    ->where('country', '=', $request->country)
                    ->where('company_name', 'like', '%' . $request['query'] . '%')
                    ->get();
            }

            return response()->json($data);
        }catch (\Exception $exception) {
          return response()->json('');
        }
    }

    public function show($id){
        try {
            $company_detail = CompanyDetail::where('id',$id)->with(['board_of_directors','company_accounting','market_share'])->first();
            //market share satestics
            $market_share_satestics=[];
            if(isset($company_detail['market_share']->id))
            {
            $market_share_satestics=Shareholder::where('market_share_id',$company_detail['market_share']->id)->get();
            }
            $dollar_rate = CountryInformation::where('country_name',$company_detail->country)->pluck('rate_in_dollar')->first();
            $res = preg_replace("/[^0-9\s]/", "", $company_detail->market_share->paid_up_shares);
            $dollar_rate = (float)$res * (float)$dollar_rate;
            $already_request_for_sanction = false;
            if (Auth::check()){
                $already_request_for_sanction = ReqForSancStatus::where('user_id',Auth::id())
                    ->where('company_id',$id)
                    ->where('status',SanctionRequestStatus::Pending)
                    ->exists();
            }
            return view('screens.company-detail',compact('company_detail','dollar_rate','already_request_for_sanction','market_share_satestics'));
        }catch (\Exception $exception){
            return $exception->getMessage();
        }
    }

}

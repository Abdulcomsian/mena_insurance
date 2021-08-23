<?php

namespace App\Http\Controllers;

use App\Models\BoardOfDirector;
use App\Models\CompanyDetail;
use App\Models\CountryInformation;
use App\Models\ReqForSancStatus;
use App\Models\Subscription;
use App\Utils\SanctionRequestStatus;
use App\Utils\SanctionsType;
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

    public function searchAll(){
        $countries = CountryInformation::select('country_name')
            ->orderby('country_name','asc')
            ->get();
        $companies = DB::table('company_detail')
            ->select('id', 'country', 'company_name', 'company_type','company_website')
            ->orderby('country','asc')
            ->paginate(30);

        return view('screens.search-all-companies',compact('countries','companies'));

    }

    private function saveSanctionRequest($all_fields,$total_sanctions,$sub){
        $sub['remaining_sanctions'] = $sub->remaining_sanctions - $total_sanctions;
        $sub['used_sanctions'] = $sub->used_sanctions + $total_sanctions;
        $sub->save();
        ReqForSancStatus::create($all_fields);
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
            if(isset($sub) && $sub->remaining_sanctions > 0){
                if ($all_fields['sanctions_type'] == SanctionsType::Searchcompany) {
                    $total_sanctions = 1;
                    if ($sub->remaining_sanctions >= $total_sanctions){
                        self::saveSanctionRequest($all_fields,$total_sanctions,$sub);
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
                        self::saveSanctionRequest($all_fields,$total_sanctions,$sub);
                    }else{
                        toastInfo('Your do not have sufficient sanctions to perform this operation, buy more sanctions !');
                        return back();
                    }
                }
                elseif ($all_fields['sanctions_type'] == SanctionsType::CompanywithselectedBoardsofDirector){
                    $total_sanctions = count($request->board_of_directors) + 1; //Add 1 for company search

                    if ($sub->remaining_sanctions >= $total_sanctions){
                        $all_fields['board_of_directors'] = json_encode($request->board_of_directors);
                        self::saveSanctionRequest($all_fields,$total_sanctions,$sub);
                    }else{
                        toastInfo('Your do not have sufficient sanctions to perform this operation, buy more sanctions !');
                        return back();
                    }
                }

                toastSuccess('Your request is successfully submitted for "Sanction Result"');
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

    //Get list of board of directors when click on search status modal
    public function getDirectors(Request $request){
        $data = BoardOfDirector::where('company_id',$request->company_id)
            ->select('id','designation','name')
            ->orderby('designation','asc')
            ->get();
        return response()->json($data);
    }

    //Get list of companies when click on countries in checkboxes of full search page
    public function searchAllResult(Request $request){
        if ($request->has('country')){
            $companies = DB::table('company_detail')
                ->select('id', 'country', 'company_name', 'company_type','company_website')
                ->whereIn('country', $request['country'])
                ->orderby('country','asc')
                ->paginate(30);
            $companies->appends(['country' => $request['country']]);

        }else{
            $companies = [];
        }

        $request = $request->all();
        $countries = CountryInformation::select('country_name')
            ->orderby('country_name','asc')
            ->get();
        return view('screens.search-all-companies',compact('countries',
            'companies',
            'request'
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
            return view('screens.company-detail',compact('company_detail','dollar_rate','already_request_for_sanction'));
        }catch (\Exception $exception){
            return $exception->getMessage();
        }
    }

}

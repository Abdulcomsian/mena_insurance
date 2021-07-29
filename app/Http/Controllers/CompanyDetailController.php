<?php

namespace App\Http\Controllers;

use App\Models\CompanyDetail;
use App\Models\CountryInformation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompanyDetailController extends Controller
{
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
            return view('screens.company-detail',compact('company_detail','dollar_rate'));
        }catch (\Exception $exception){
            return $exception->getMessage();
        }
    }

}

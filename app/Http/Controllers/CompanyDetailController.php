<?php

namespace App\Http\Controllers;

use App\Models\CompanyDetail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class CompanyDetailController extends Controller
{
    public function liveSearch(Request $request){
        $data = DB::table('company_detail')
            ->select('id','country','company_name')
            ->where('country','=',$request->country)
            ->where('company_name', 'like','%' . $request['query'] . '%')
            ->get();
        return response()->json($data);
    }

    public function show($id){
        $company_detail = CompanyDetail::where('id',$id)->with(['board_of_directors','company_accounting','market_share'])->first();
//        dd($company_detail);
        return view('screens.company-detail',compact('company_detail'));
    }

}

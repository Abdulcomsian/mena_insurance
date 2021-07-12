<?php

namespace App\Http\Controllers;

use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use phpDocumentor\Reflection\Types\True_;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('/home');
    }

    public function liveSearch(Request $request){
        $data = DB::table('company_detail')
            ->select('id','country','company_name')
            ->where('country','=',$request->country)
            ->where('company_name', 'like','%' . $request['query'] . '%')
            ->get();
        return response()->json($data);
    }
}

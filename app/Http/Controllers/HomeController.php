<?php

namespace App\Http\Controllers;

use App\Models\Package;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use mysql_xdevapi\Exception;
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
        try {
            $packages = Package::where('status','active')
                ->orderby('id','asc')
                ->get();
            return view('screens.home',compact('packages'));
        }catch (\Exception $exception){
            return $exception->getMessage();
        }
    }

    public function telrCurlTesting(){
        dump('Here in controller');
    }

}

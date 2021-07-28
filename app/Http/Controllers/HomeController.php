<?php

namespace App\Http\Controllers;

use App\Models\CountryInformation;
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
//     $this->middleware(['auth','verified']);
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
            $countries  = CountryInformation::orderby('country_name','asc')->get();
            return view('screens.home',compact('packages','countries'));
        }catch (\Exception $exception){
            return 'Something went wrong';
        }
    }

    public function telrCurlTesting(){
        dump('Here in controller');
    }

}

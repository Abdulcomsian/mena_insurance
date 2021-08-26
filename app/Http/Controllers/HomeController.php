<?php

namespace App\Http\Controllers;

use App\Models\CountryInformation;
use App\Models\Package;
use App\Utils\Status;
use Carbon\Carbon;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
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
        if (Auth::check()){
            if (Auth::user()->email_verified_at == null){
                session()->flash('message','Please Verify Your Email Address');
                return redirect('/must-verify-email');
            }else{
                $packages = Package::where('status',Status::Active)
                    ->whereDate('start_date', '<=', Carbon::now())
                    ->whereDate('end_date', '>=', Carbon::now())
                    ->orderby('sanctions','asc')
                    ->limit(3)
                    ->get();
                $countries  = CountryInformation::orderby('country_name','asc')->get();
                return view('screens.home',compact('packages','countries'));
            }
        }else{
            $packages = Package::where('status',Status::Active)
                ->whereDate('start_date', '<=', Carbon::now())
                ->whereDate('end_date', '>=', Carbon::now())
                ->orderby('sanctions','asc')
                ->limit(3)
                ->get();
            $countries  = CountryInformation::orderby('country_name','asc')->get();
            return view('screens.home',compact('packages','countries'));
        }
    }

    public function about(){
        if (Auth::check()){
            if (Auth::user()->email_verified_at == null){
                session()->flash('message','Please Verify Your Email Address');
                return redirect('/must-verify-email');
            }else{
                return view('screens.contact');
            }
        }else{
            return view('screens.contact');
        }
    }

    public function contact(){
        if (Auth::check()){
            if (Auth::user()->email_verified_at == null){
                session()->flash('message','Please Verify Your Email Address');
                return redirect('/must-verify-email');
            }else{
                return view('screens.contact');
            }
        }else{
            return view('screens.contact');
        }
    }

}

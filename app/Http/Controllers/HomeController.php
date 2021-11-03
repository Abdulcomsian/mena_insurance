<?php

namespace App\Http\Controllers;

use App\Jobs\AddSearchJob;
use App\Models\BoardOfDirector;
use App\Models\CountryInformation;
use App\Models\Package;
use App\Traits\SanctionMethods;
use App\Utils\AddSearchType;
use App\Utils\SanctionsType;
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
    use SanctionMethods;
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
    public function TestingApi(){
        $directors_list = BoardOfDirector::select('id','name')
            ->where('company_id','37')
            ->get();
        dump($directors_list);
        foreach ($directors_list as $b_o_d){
            $data = [
                'sanctionRequestId' => 45,
                'name' => $b_o_d->name,
                'type' => AddSearchType::Individual,
            ];
            $this->AddSearch($data);
//            dd($data);
            //Run job for board of director name
//            AddSearchJob::dispatch($data,AddSearchType::Individual);
        }
//        $this->AddSearch($data);
    }

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
                return view('screens.about');
            }
        }else{
            return view('screens.about');
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

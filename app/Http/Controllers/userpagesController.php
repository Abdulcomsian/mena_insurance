<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Subscription;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class userpagesController extends Controller
{
    //
    public function subcription()
    {
        $user_id = Auth::user()->id;
         $subscription = Subscription::where('user_id', '=', $user_id)->get();

        return view('screens.subscription', compact("subscription"));
    }

    public function account()
    {
        $user_id = auth()->user()->id;

        $users = User::where('id', '=', $user_id)->first();
        $countries = Country::all();
        return view('screens.account-setting', compact("users", "countries"));
    }

    public  function update_account(Request $request){

        $user->company_name = $request->company_name;
    }
}

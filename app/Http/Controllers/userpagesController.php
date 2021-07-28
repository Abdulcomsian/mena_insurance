<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Subscription;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;

class userpagesController extends Controller
{
    //
    public function subcription()
    {
        $user_id = Auth::user()->id;
         $subscription = Subscription::where('user_id', '=', $user_id)->first();
        return view('screens.subscription', compact("subscription"));
    }

    public function account()
    {
        $countries = Country::all();
        return view('screens.account-setting', compact("countries"));
    }

    public  function update_account(Request $request,$id){
        try {
            $request->validate([
                'name' => ['required', 'string', 'max:255'],
                'email' => ['required', 'string', 'email', 'max:255'],
            ]);
            if(isset($request->password)){
                $request->validate([
                    'password' => ['required', 'string', 'min:8', 'confirmed'],
                ]);
                unset($request['password_confirmation'],$request['_token']);
                $request['password'] = Hash::make($request['password']);
                User::where('id',decrypt($id))->update($request->all());
            }
            else{
                unset($request['password'],$request['password_confirmation'],$request['_token']);
                User::where('id',decrypt($id))->update($request->all());
            }
            return redirect()->route('account')->with('success','Profile Updated Successfully!');
        }catch (\Exception $exception){
            return redirect()->route('account')->with('danger','Something went wrong');
        }
    }

    public function history(){
        $transactions = Transaction::with('package')->where('user_id',Auth::id())->orderby('id','desc')->get();
        return view('screens.renewal-history' ,compact('transactions'));
    }
}

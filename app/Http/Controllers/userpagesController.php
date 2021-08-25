<?php

namespace App\Http\Controllers;

use App\Models\Country;
use App\Models\Subscription;
use App\Models\Transaction;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rule;

class userpagesController extends Controller
{
    public function __construct()
    {
         $this->middleware(['auth','verified']);
    }
    //
    public function subcription()
    {
        $user_id = Auth::user()->id;
        $subscription = Subscription::where('user_id', '=', $user_id)->first();
        $transactions = Transaction::with('package')
            ->where('user_id',Auth::id())
            ->where('status','Paid')
            ->orderby('id','desc')->get();
        return view('screens.subscription', compact("subscription","transactions"));
    }

    public function account()
    {
        $countries = Country::all();
        return view('screens.account-setting', compact("countries"));
    }

    public  function update_account(Request $request,$id){
        $decrypt_id = decrypt($id);
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', Rule::unique('users')->ignore($decrypt_id)],
            'address' => ['required', 'max:255'],
            'company_name' => ['required', 'max:255'],
            'office_number' => ['required', 'max:255'],
            'mobile_number' => ['required', 'string', 'max:255'],
            'vat_number' => ['nullable','numeric'],
            'country_id' => ['required', 'max:255'],
        ],[
            'country_id.required' => 'The country field is required',
        ]);
        if(isset($request->password)){
            $request->validate([
                'password' => ['required', 'string', 'min:8', 'confirmed'],
            ]);
            unset($request['password_confirmation'],$request['_token']);
            $request['password'] = Hash::make($request['password']);
        }
        else{
            unset($request['password'],$request['password_confirmation'],$request['_token']);
        }

        try {
            User::where('id',$decrypt_id)->update($request->all());

            toastr()->success('Profile Updated Successfully!');
            return redirect()->route('account');//->with('success','Profile Updated Successfully!');
        }catch (\Exception $exception){
            toastr()->error('System is busy, try again');
            return redirect()->route('account');//->with('danger','Something went wrong');
        }
    }

    public function history(){
        $transactions = Transaction::with('package')->where('user_id',Auth::id())->orderby('id','desc')->get();
        return view('screens.renewal-history' ,compact('transactions'));
    }
}

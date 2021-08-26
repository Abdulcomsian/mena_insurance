<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }
    protected function authenticated(Request $request, $user)
    {
        if ($user->type == 'System User'){

            if ($user->email_verified_at == null){
                Auth::logout();
                session()->flash('message','Please Verify Your Email Address');
                return redirect('/must-verify-email');
            }
            if ($user->status == 'Active'){
                    $user->last_login_at = now();
                    $user->save();
            }else{
                toastr()->error('Your Account is Inactive');
                return redirect('/login');
            }
        }else{
            toastr()->error('These credentials do not match our records.');
            Auth::logout();
            return redirect('/login');
        }

    }
}

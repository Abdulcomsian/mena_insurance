<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Mail\WelcomeUser;
use App\Notifications\WelcomeEmail;
use App\Providers\RouteServiceProvider;
use App\User;
use Carbon\Carbon;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Auth\Events\Verified;
use Illuminate\Foundation\Auth\VerifiesEmails;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class VerificationController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Email Verification Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling email verification for any
    | user that recently registered with the application. Emails may also
    | be re-sent if the user didn't receive the original email message.
    |
    */

    use VerifiesEmails;

    /**
     * Where to redirect users after verification.
     *
     * @var string
     */
//    protected $redirectTo = RouteServiceProvider::HOME;
    protected $redirectTo = '/thanks-for-registration';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
//        $this->middleware('auth');
        $this->middleware('signed')->only('verify');
        $this->middleware('throttle:6,1')->only('verify', 'resend');
    }

    public function verify(Request $request)
    {
        $user = User::find($request->route('id'));

        if (!hash_equals((string) $request->route('hash'), sha1($user->getEmailForVerification()))) {
            throw new AuthorizationException;
        }

        if ($user->markEmailAsVerified())
            event(new Verified($user));

        return redirect($this->redirectPath())->with('verified', true);
    }

//    public function verify_email($id, Request $request)
//    {
//        $user = User::where(['id' => $id])->first();
//        if ($user->verified == 0) {
//            $expiry_time = $request->expires+82800;
//
//            if(time()>$expiry_time){
//                $message = "Your activation key is Expired!.";
//                toastr()->error($message, 'Verification Unsuccessful');
//                return redirect('/verification-failed');
//            }else
//
//                $current_date_time = Carbon::now()->toDateTimeString(); // Produces something like "2019-03-11 12:25:00"
//            $user->verified = 1;
//            $user->email_verified_at = $current_date_time;
//            #$user->verifyToken=NULL;
//            $user->save();
//            Mail::to($user->email)->send(new WelcomeEmail($user));
//            $message = "Thank you for Verifying your email. Please login and keep using Evateach.";
//            toastr()->success($message);
//            return redirect('/verification-success');
//        } else {
//            $message = "This Account is Already Verified. Please login and keep using Evateach.";
//            toastr()->error($message);
//            return redirect('/login');
//        }
//    }

//    protected function verified(Request $request)
//    {
//        toastr()->info('You,ve successfully verified your email!');
//        Auth::user()->notify(new WelcomeEmail());
//    }

}

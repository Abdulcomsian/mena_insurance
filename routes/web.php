<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', 'HomeController@index');

Route::get('/contact', function () {
    return view('screens.contact');
});
Route::get('/about', function () {
    return view('screens.about');
});
// Route::get('/login2', function () {
//     return view('screens.login');
// });
// Route::get('/registers', function () {
//     //$countries = Countries::all();
//     $countries = ["Pakistna", "India", "China"];
//     return view('auth.register')->with("countries", $countries);
// });
Route::get('/forgot', function () {
    return view('screens.forgot');
});
Route::get('/conformation', function () {
    return view('screens.payment-confromation');
});
// ['middleware' => 'auth']
Route::get('/search', function () {
    return view('screens.search-place');
});

Route::get('/search-all', function () {
    return view('screens.search-all-companies');
});
// Route::get('/subcription', function () {
//     return view('screens.subscription');
// });
Route::get('subscription', 'userpagesController@subcription')->name('subscription');
Route::get('account', 'userpagesController@account')->name('account');
Route::post('account-update/{id}', 'userpagesController@update_account')->name('update_account');

// Route::get('account', function () {
//     return view('screens.account-setting');
// });
//Route::get('/history', function () {
//    return view('screens.renewal-history');
//});
Route::get('history', 'userpagesController@history')->name('history');

Route::get('/payment', function () {
    return view('screens.add-card');
});

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

//By Assad Yaqoob
Route::get('live_search', 'CompanyDetailController@liveSearch')->name('live_search');
Route::get('company_detail/{id}','CompanyDetailController@show')->name('companydetail.show');

Route::get('transaction-create/{id}','TransactionController@create')->name('transaction.create');
Route::view('transaction-success-loading','screens.transaction-success-loading');
Route::view('transaction-decline-loading','screens.transaction-decline-loading');
Route::view('transaction-cancel-loading','screens.transaction-cancel-loading');
Route::get('transaction-success','TransactionController@success')->name('transaction.success');
Route::get('transaction-decline','TransactionController@decline')->name('transaction.decline');
Route::get('transaction-cancel','TransactionController@cancel')->name('transaction.cancel');

Route::view('cancel-payment','screens.payment-cancel');
Route::view('decline-payment','screens.payment-decline');
Route::view('success-payment','screens.payment-success');

Route::get('checkout/{id}','TransactionController@paymentCheckout')->name('checkout');

Route::get('/terms-condition', function () {
    return view('screens.terms');
});
Route::get('/privacy-policy', function () {
    return view('screens.privacy');
});

Route::get('/refund-policy', function () {
    return view('screens.refund');
});

Route::view('/thanks-for-registration','auth.thanks-for-registration');
Route::view('/successfully-registered','auth.login-success')->name('login.success');

//Route::get('/checkout', function () {
//    return view('screens.checkout');
//});


//Testing Routes
Route::view('telr-testing','testing.telr');
Route::get('telr-curl-testing','HomeController@telrCurlTesting');

Route::view('pdf','pdf');
Route::view('pdf-template','pdf-transaction-template');

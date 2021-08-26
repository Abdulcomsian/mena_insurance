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
//    Route::group(['middleware' =>['auth','verified']], function () {
        Route::get('/contact', 'HomeController@contact');
        Route::get('/about', 'HomeController@about');
//    });

Route::get('/', 'HomeController@index');


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

Route::get('subscription', 'userpagesController@subcription')->name('subscription');
Route::get('account', 'userpagesController@account')->name('account');
Route::post('account-update/{id}', 'userpagesController@update_account')->name('update_account');
Route::get('history', 'userpagesController@history')->name('history');

Auth::routes(['verify' => true]);

Route::get('/home', 'HomeController@index')->name('home');

//By Assad Yaqoob
Route::get('live_search', 'CompanyDetailController@liveSearch')->name('live_search');
Route::get('company_detail/{id}','CompanyDetailController@show')->name('companydetail.show');
Route::get('getDirectors','CompanyDetailController@getDirectors')->name('getDirectors');
Route::post('sanction/request','CompanyDetailController@sanctionRequest')->name('companydetail.request');
//Route::get('/search-all-by-countries','CompanyDetailController@searchAll')->name('companydetail.search.all');
Route::get('search-all','CompanyDetailController@searchAllResult')->name('companydetail.search.result');

Route::get('transaction-create/{id}','TransactionController@create')->name('transaction.create');
Route::view('transaction-success-loading','screens.transaction-success-loading');
Route::view('transaction-decline-loading','screens.transaction-decline-loading');
Route::view('transaction-cancel-loading','screens.transaction-cancel-loading');
Route::get('transaction-success','TransactionController@success')->name('transaction.success');
Route::get('transaction-decline','TransactionController@decline')->name('transaction.decline');
Route::get('transaction-cancel','TransactionController@cancel')->name('transaction.cancel');

//Show payment cards list
Route::get('/payment','TransactionController@showCards')->name('transaction.payment.cards');

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

//Show this page after verifying email address
Route::view('/thanks-for-registration','auth.thanks-for-registration');
//Show thanks page after successfull registeration of user
Route::view('/successfully-registered','auth.login-success')->name('login.success');

Route::view('/must-verify-email','auth.verify')->name('must.verify.email');

//Show payment cards list
Route::get('/sanction-status-history','CompanyDetailController@showSanctionStatusHistory')->name('show.sanction.status.history');

//Testing Routes
Route::view('telr-testing','testing.telr');
Route::get('telr-curl-testing','HomeController@telrCurlTesting');

Route::view('pdf','pdf');
Route::view('pdf-template','pdf-transaction-template');

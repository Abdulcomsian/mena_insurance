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

Route::get('/', function () {
    return view('screens.home');
});
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
// Route::get('/subcription', function () {
//     return view('screens.subscription');
// });
Route::get('subscription', 'userpagesController@subcription')->name('subscription');
Route::get('account', 'userpagesController@account')->name('account');
Route::post('account', 'userpagesController@update_account')->name('update_account');

// Route::get('account', function () {
//     return view('screens.account-setting');
// });
Route::get('/history', function () {
    return view('screens.renewal-history');
});
Route::get('/payment', function () {
    return view('screens.add-card');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/live_search', 'HomeController@liveSearch')->name('live_search');

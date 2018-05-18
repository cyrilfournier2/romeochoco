<?php

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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('recevoir', 'HomeController@index')->name('recevoir');
Route::get('offrir', 'HomeController@index')->name('offrir');
Route::get('/profile', 'UserController@profile')->name('profile');
Route::get('/histoire', 'NavigationController@histoire')->name('histoire');
Route::get('/getStripe', 'StripeController@index')->name('getStripe');

Route::post ( '/', function (Request $request) {
    Stripe::setApiKey ( 'test_SecretKey' );
    try {
       Charge::create ( array (
            "amount" => 300 * 100,
            "currency" => "usd",
            "source" => $request->input ( 'stripeToken' ), // obtained with Stripe.js
            "description" => "Test payment."
        ) );
        Session::flash ( 'success-message', 'Payment done successfully !' );
        return Redirect::back ();
    } catch ( \Exception $e ) {
        Session::flash ( 'fail-message', "Error! Please Try again." );
        return Redirect::back ();
    }
} );
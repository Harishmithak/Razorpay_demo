<?php

use Illuminate\Support\Facades\Route;
// use App\Http\Controllers\PaymentController;

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


Route::get('/payment_initiate', function () {
    return view('payment_initiate');
});

Route::post('/payment_initiate_request','App\Http\Controllers\PaymentController@Initiate');
Route::post('/payment-complete','App\Http\Controllers\PaymentController@complete');


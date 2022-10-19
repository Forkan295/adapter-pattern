<?php

use App\Payment\Stripe;
use App\Payment\StripeAdapter;
use App\Payment\Wire;
use App\Payment\WireAdapter;
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
//    $payment =  new \App\Payment\Paypal(900);
//    $stripe  = new Stripe(900);
//    $payment = new StripeAdapter($stripe);

//    very old approach
//    $wire  = new \App\Payment\Wire();
//    $wire->setAmount(300);
//    $payment = new WireAdapter($wire);
//    very old approach

//    old approach
//    $stripe  = app()->make(Wire::class);
//    $stripe->setAmount(600);
//    $payment = new WireAdapter($wire);
//    old approach

    $payment = resolve(WireAdapter::class);
    $payment->setAmount(600);
    return [$payment->pay(), $payment->charge()];

//    return view('welcome');
});

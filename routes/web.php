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

Auth::routes();
Route::get('/', function () {
    return view('welcome');
});

// about
// Route::resource('about', 'AboutController', ['only' => ['index']]);
//contact form
Route::get('contact', ['as' => 'contact', 'uses' => 'ContactController@create']); 
Route::post('contact', ['as' => 'contact_store', 'uses' => 'ContactController@store']);
//discounts
Route::get('discounts', 'DiscountsController@index'); 
// all products
Route::get('products', 'ProductController@index'); 
// product detail
Route::get('products/{id}', 'ProductController@show');
Route::post('cart/store', 'CartsController@store');
// cart
Route::get('cart', 'CartsController@index');
Route::get('cart/remove/{id}', 'CartsController@remove');
Route::post('cart/complete', 'CartsController@complete')->name('cart.complete');
// subscription plans
Route::get('plans', 'SubscriptionsController@index')->name('plans');
// subscription detail
Route::get('plans/subscribe/{planId}', 'SubscriptionsController@subscribe');
Route::post('plans/process','SubscriptionsController@process')->name('plans.process');
// invoices
Route::get('invoices', 'SubscriptionsController@invoices')->name('invoices');
Route::get('invoices/download/{id}','SubscriptionsController@downloadInvoice');
Route::post('plans/swap','SubscriptionsController@swapPlans')->name('plans.swap');
Route::post('plans/cancel', 'SubscriptionsController@cancelPlan')->name('plans.cancel');
Route::post('stripe/webhook', 'StripeController@handleWebhook');

// admin page
Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'admin'], function()
{
    Route::resource('products', 'ProductController');
    Route::get('orders', 'ProductController@orders');
    Route::post('admin/store', 'ProductController@store')->name('admin.store');
});

Route::get('/send', function () {
    Mail::raw('本文', function($message)
    {
        $message->from('ujnchu@gmail.com', 'Hiraku');

        $message->to('ujinchu@gmail.com');
    });
});
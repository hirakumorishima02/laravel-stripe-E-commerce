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

Route::resource('about', 'AboutController', ['only' => ['index']]);
Route::get('contact', ['as' => 'contact', 'uses' => 'ContactController@create']);
Route::post('contact', ['as' => 'contact_store', 'uses' => 'ContactController@store']);
Route::get('discounts', 'DiscountsController@index');
Route::get('products', 'ProductController@index');
Route::get('products/{id}', 'ProductController@show');
Route::post('cart/store', 'CartsController@store');
Route::get('cart', 'CartsController@index');

Route::group(['prefix' => 'admin', 'namespace' => 'Admin', 'middleware' => 'admin'], function()
{
    Route::resource('products', 'ProductController');
    Route::post('admin/store', 'ProductController@store')->name('admin.store');
});

Route::get('plans', 'SubscriptionsController@index')->name('plans');
Route::get('plans/subscribe/{planId}', 'SubscriptionsController@subscribe');
Route::post('plans/process','SubscriptionsController@process')->name('plans.process');


Route::get('invoices', 'SubscriptionsController@invoices')->name('invoices');
Route::get('invoices/download/{id}','SubscriptionsController@downloadInvoice');

Route::post('plans/swap','SubscriptionsController@swapPlans')->name('plans.swap');
Route::post('plans/cancel', 'SubscriptionsController@cancelPlan')->name('plans.cancel');
Route::post('stripe/webhook', 'StripeController@handleWebhook');


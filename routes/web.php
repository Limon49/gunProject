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
Route::view('customer','customer');
Route::post('customer','customer@store');
Route::get('/showcustomer','customer@show');

Route::view('gun','gun');
Route::post('gun','gun@store');
Route::get('/showgun','gun@show');

Route::view('payment','payment');
Route::post('payment','payment@store');
Route::get('/showpayment','payment@show');

Route::view('cart_item','cart_item');
Route::post('cart_item','cart_item@store');
Route::get('/showcart_item','cart_item@show');

Route::get('/uni','uni@create');

Route::get('/join1','join1controller@create');

Route::get('/subQuery','subquery@create');

Route::get('/agg','agg@create');





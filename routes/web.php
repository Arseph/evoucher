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
    return redirect()->route('login');
});
Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');
Route::get('voucher', 'HomeController@voucher');
Route::match(['GET','POST'],'ae-voucher', 'VoucherCtlr@aeVoucher');
Route::match(['GET','POST'],'sel-voucher', 'VoucherCtlr@selVoucher');
Route::get('prevoucher', 'VoucherCtlr@prevoucher');
Route::get('preob', 'VoucherCtlr@preob');

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

Route::get('/invoice', 'Invoicecontroller@index')->name('invoice');
Route::get('/invoice/create', 'InvoiceController@create')->name('create_invoice');
Route::get('/invoice/{id}', 'InvoiceController@show')->name('show_invoice');

Route::delete('/invoice/delete/{id}', 'InvoiceController@destroy')->name('invoicedestroy');
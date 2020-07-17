<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('user', 'UserController');

Route::resource('category', 'CategoryController');

Route::resource('article-type', 'ArticleTypeController');

Route::resource('measure-unit', 'MeasureUnitController');

Route::resource('color', 'ColorController');

Route::resource('article', 'ArticleController');
Route::put('article/{article}', 'ArticleController@addStock')->name('add.stock');

Route::resource('discount', 'DiscountController');
Route::post('discount/descuentos', 'DiscountController@discountStock')->name('discount.stock');
Route::get('discount/getArticleStock/{article}', 'DiscountController@getArticleStock');

Route::resource('person', 'PersonController');

Route::resource('payment-type', 'PaymentTypeController');

Route::resource('iva', 'IvaController');

Route::resource('estado', 'EstadoController');

Route::resource('invoice', 'InvoiceController');
Route::get('invoice/getArticleStock/{article}', 'DiscountController@getArticleStock');

Route::resource('article-invoice', 'ArticleInvoiceController');

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

Route::resource('discount', 'DiscountController');
Route::post('discount/descuentos/reduccion', 'DiscountController@discountStock')->name('discount.stock');
Route::post('discount/descuentos', 'DiscountController@addStock')->name('discount.stock.add');
Route::get('discount/getArticleStock/{article}', 'DiscountController@getArticleStock');

Route::resource('person', 'PersonController');

Route::resource('payment-type', 'PaymentTypeController');

Route::resource('iva', 'IvaController');

Route::resource('estado', 'EstadoController');

Route::resource('invoice', 'InvoiceController');
Route::get('invoice/getArticleStock/{article}', 'DiscountController@getArticleStock');
Route::get('pdf', 'InvoiceController@invoicePdf')->name('invoice.pdf');


Route::resource('article-invoice', 'ArticleInvoiceController');
Route::get('article-invoice/{invoice}/detalles', 'ArticleInvoiceController@articleInvoice')->name('article.invoice');


Route::resource('estimate', 'EstimateController');

Route::resource('image', 'ImageController');

Route::resource('article-estimate', 'ArticleEstimateController');

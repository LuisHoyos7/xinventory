<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::resource('category', 'CategoryController');

Route::resource('article-type', 'ArticleTypeController');

Route::resource('measure-unit', 'MeasureUnitController');

Route::resource('color', 'ColorController');

Route::resource('article', 'ArticleController');
Route::put('article/{article}', 'ArticleController@addStock')->name('add.stock');

Route::resource('discount', 'DiscountController');
Route::post('discount/descuentos', 'DiscountController@discountStock')->name('discount.stock');
Route::get('discount/getArticleStock/{article}', 'DiscountController@getArticleStock');

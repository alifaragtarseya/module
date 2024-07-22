<?php

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
Route::get('/lang', 'LangController@index')->name('front.lang');

Route::get('/', 'HomeController@index')->name('front.home');
Route::get('/awards', 'HomeController@award')->name('front.award');

Route::get('/about', 'AboutController@index')->name('front.about');

Route::get('/contact', 'ContactController@index')->name('front.contact');

Route::get('/projects', 'ProjectController@index')->name('front.project');
Route::get('/projects/{id}', 'ProjectController@show')->name('front.project.show');


Route::get('/products', 'ProductController@index')->name('front.product');
Route::get('/products/{id}', 'ProductController@show')->name('front.product.show');


Route::get('/services', 'ServiceController@index')->name('front.service');
Route::get('/services/{id}', 'ServiceController@show')->name('front.service.show');

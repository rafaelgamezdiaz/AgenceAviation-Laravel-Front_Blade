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

Route::get('/', ['uses'  => 'HomeController@index'])->name('home');

Route::get('services/{id}', [
    'uses'  => 'CategoriesController@show',
    'as'    => 'services'
]);

Route::get('contact',[
    'uses'  => 'ContactController@index',
    'as'    => 'contact'
]);

Route::post('getintouch/', 'GetintouchController@sendGetInTouchMail')->name('getintouch');

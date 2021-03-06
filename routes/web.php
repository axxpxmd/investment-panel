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

Auth::routes();

Route::get('/', 'HomeController@index')->name('home');
Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function () {
    Route::get('config-email', 'ConfigEmailController@index')->name('config-email.index');
    Route::get('config-email/edit/{id}', 'ConfigEmailController@edit')->name('config-email.edit');
    Route::post('config-email/update/{id}', 'ConfigEmailController@update')->name('config-email.update');
});

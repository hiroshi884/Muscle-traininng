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

Route::get('/', 'FirstController@first');
Route::get('/protains','ProtainController@index')->name('index');
Route::get('/users', 'UserController@index')->name('users');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::middleware('auth')->get('/users/{user}', 'UserController@show')->name('users.show');

Route::middleware('auth')->prefix('protains')->as('protains.')->group(function () {
    Route::get('create', 'ProtainController@create')->name('create');
    Route::post('store', 'ProtainController@store')->name('store');
    Route::post('{protain}/delete', 'ProtainController@delete')->name('delete');
});
Route::middleware('auth')->post('{protain}/delete','UserController@delete')->name('delete');

Route::get('user', 'UserController@show')->name('show');


Route::get('/calendars/{ym?}', 'CalendarController@show')->name('calendars.show');

Route::middleware('auth')->get('calendars','CalendarController@record')->name('calendars');


Route::middleware('auth')->get('firsts/first', 'FirstController@first')->name('first');

Route::get('test', 'TestController@index')->name('test');
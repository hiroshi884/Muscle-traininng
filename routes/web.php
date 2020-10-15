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
    Route::get('{protain}','ProtainController@show')->name('show');
    Route::post('{protain}/reply', 'ProtainController@reply')->name('reply');
    Route::get('{protain}/edit', 'ProtainController@edit')->name('edit');
    Route::post('{protain}/update', 'ProtainController@update')->name('update');
    Route::post('{protain}/delete', 'ProtainController@delete')->name('delete');
    Route::post('{reply}/delet', 'ProtainController@delet')->name('delet');
    Route::get('{id}/like', 'ProtainController@like')->name('like');
    Route::get('{id}/unlike', 'ProtainController@unlike')->name('unlike');
    Route::get('profile', 'ProtainController@profile')->name('profile');
    Route::post('profile_done', 'ProtainController@profile_done')->name('profile_done');
});


Route::get('{uer}/profile', 'ProtainController@profile')->name('profile');
Route::middleware('auth')->post('{protain}/delete','UserController@delete')->name('delete');

Route::get('user', 'UserController@show')->name('show');


Route::get('/calendars/{ym?}', 'CalendarController@show')->name('calendars.show');

Route::middleware('auth')->get('calendars','CalendarController@record')->name('calendars');


Route::middleware('auth')->get('firsts/first', 'FirstController@first')->name('first');


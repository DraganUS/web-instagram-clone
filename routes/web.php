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

Auth::routes(['/home']);

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/p/{post}', 'PostController@show');
Route::post('/p/{post}', 'PostController@store');
Route::get('/{id}', 'ProfileController@index');



Route::group(['prefix' => 'admin'], function () {
    Voyager::routes();
});

<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::get('/posts', 'API\PostsController@index');
Route::middleware('auth:api')->post('/posts', 'API\PostsController@store');
Route::middleware('auth:api')->get('/posts/{id}', 'API\PostsController@show');
Route::middleware('auth:api')->put('/posts/{id}', 'API\PostsController@update');
Route::middleware('auth:api')->delete('/posts/{id}', 'API\PostsController@destroy');


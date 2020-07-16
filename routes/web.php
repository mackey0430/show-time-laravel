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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/', 'TopController@index');

Route::get('/post_create', 'TopController@post_create');

Route::get('/timeline', 'TopController@timeline');

Route::get('/profile', 'TopController@profile');

Route::get('/setting', 'TopController@setting');

Route::get('/answer', 'TopController@answer');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

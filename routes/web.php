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

Route::post('/posts', 'PostsController@store');

Route::get('/timeline/index', 'TimelineController@index');

Route::get('/profile/index', 'ProfileController@profile');

Route::get('/setting', 'TopController@setting');

Route::get('/answer/create', 'AnswerController@answer');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::group(['middleware' => ['auth']], function () {
    // この中のURLは認証が必要
    Route::get('/posts/create', 'PostsController@create');
});

Route::get('auth/twitter', 'Auth\SocialAuthController@redirectToProvider');

Route::get('auth/twitter/callback', 'Auth\SocialAuthController@handleProviderCallback');
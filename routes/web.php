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

Route::get('/posts/send', 'PostsController@send');

Route::get('/timeline/index', 'TimelineController@index');

Route::get('/posts/{id}', 'PostsController@show')->name('posts.show');

Route::get('profile/setting', 'SettingController@setting');

Route::get('/answer/{id}', 'AnswerController@show')->name('answer.show');

Route::get('/answer/send', 'AnswerController@send')->name('answer.send');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

// この中のURLは認証が必要
Route::group(['middleware' => ['auth']], function () {
    // お題作成
    Route::get('/posts', 'PostsController@create')->name('post.create');
    // 回答作成
    Route::post('/answer/store', 'AnswerController@store');
    // プロフィール画面
    Route::get('/profile', 'ProfileController@index');
    // いいね
    Route::post('/post/like', 'PostsController@like')->name('post.like');
    // いいね解除
    Route::post('/post/removeLike', 'PostsController@removeLike')->name('post.removelike');
});

Route::get('auth/twitter', 'Auth\SocialAuthController@redirectToProvider');

Route::get('auth/twitter/callback', 'Auth\SocialAuthController@handleProviderCallback');

Route::get('/logout', '\App\Http\Controllers\Auth\LoginController@logout');
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

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');


Route::get('/profile','ProfileController@profile');
Route::post('/addProfile','ProfileController@addProfile');

Route::get('/category','CategoryController@category')->middleware('auth');
Route::post('/addCategory','CategoryController@addCategory');

Route::get('/video','PostController@post')->middleware('auth');

Route::post('/addVideo','PostController@video');

Route::get('/open/{id}','OpenController@open');

Route::get('/edit/{id}','EditController@edit');

Route::post('/editPost/{id}','EditController@editPost');

Route::get('/delete/{id}','DeleteController@delete');

Route::get('/category/{id}','HomeController@category');

Route::get('/like/{id}','LikeController@like');

Route::get('/dislike/{id}','DislikeController@dislike');

Route::post('/commentPost/{id}','CommentController@comment');

Route::post('/search','SearchController@search');

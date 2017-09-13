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

/* Route des PostsController */

Route::get('/posts', 'PostsController@index')->name('posts.index');
Route::get('/posts/new', 'PostsController@create')->name('posts.create');
Route::post('/posts/store', 'PostsController@store')->name('posts.store');
Route::get('/posts/show/{id}', 'PostsController@show')->name('posts.show');
Route::get('/posts/edit/{id}', 'PostsController@edit')->name('posts.edit');
Route::post('/posts/update/{id}', 'PostsController@update')->name('posts.update');
Route::get('/posts/destroy/{id}', 'PostsController@destroy')->name('posts.destroy');

/* Route des ArticlesController */

Route::get('/articles', 'ArticlesController@index')->name('articles.index');
Route::get('/articles/new', 'ArticlesController@create')->name('articles.create');
Route::post('/articles/store', 'ArticlesController@store')->name('articles.store');
Route::get('/articles/show/{id}', 'ArticlesController@show')->name('articles.show');
Route::get('/articles/edit/{id}', 'ArticlesController@edit')->name('articles.edit');
Route::post('/articles/update/{id}', 'ArticlesController@update')->name('articles.update');
Route::get('/articles/destroy/{id}', 'ArticlesController@destroy')->name('articles.destroy');



/* Routes de login/register/logout */

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

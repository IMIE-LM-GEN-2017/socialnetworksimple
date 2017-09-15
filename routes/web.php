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

//Route::get('/posts', 'PostsController@index')->name('posts.index');
Route::get('/forum/new', 'PostsController@create')->name('posts.create');
Route::get('/forum/{catId}/new', 'PostsController@create')->name('post.createWithCategory');
Route::post('/forum/store', 'PostsController@store')->name('posts.store');
Route::get('/forum/post/{id}', 'PostsController@show')->name('posts.show');
Route::get('/forum/edit/{id}', 'PostsController@edit')->name('posts.edit');
Route::post('/forum/update/{id}', 'PostsController@update')->name('posts.update');
Route::get('/forum/destroy/{id}', 'PostsController@destroy')->name('posts.destroy');

Route::get('/forum', 'PostCategoriesController@index')->name('postsCat.index');
Route::get('/post_categories/new', 'PostCategoriesController@create')->name('postsCat.create');
Route::post('/post_categories/store', 'PostCategoriesController@store')->name('postsCat.store');
Route::get('/forum/{id}', 'PostCategoriesController@show')->name('postsCat.show');
Route::get('/post_categories/edit/{id}', 'PostCategoriesController@edit')->name('postsCat.edit');
Route::post('/post_categories/update/{id}', 'PostCategoriesController@update')->name('postsCat.update');
Route::get('/post_categories/destroy/{id}', 'PostCategoriesController@destroy')->name('postsCat.destroy');

Route::get('/answers/new', 'AnswersController@create')->name('answers.create');
Route::post('/answers/store', 'AnswersController@store')->name('answers.store');
Route::get('/answers/edit/{id}', 'AnswersController@edit')->name('answers.edit');
Route::post('/answers/update/{id}', 'AnswersController@update')->name('answers.update');
Route::get('/answers/destroy/{id}', 'AnswersController@destroy')->name('answers.destroy');

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

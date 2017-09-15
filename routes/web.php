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

/* --------------- ZONE ADMIN --------------- */

/*
 * FORUM
 */
Route::get('/forum/new', 'Admin\PostsController@create')->name('posts.create');
Route::get('/forum/{catId}/new', 'Admin\PostsController@create')->name('post.createWithCategory');
Route::post('/forum/store', 'Admin\PostsController@store')->name('posts.store');
Route::get('/forum/post/{id}', 'Admin\PostsController@show')->name('posts.show');
Route::get('/forum/edit/{id}', 'Admin\PostsController@edit')->name('posts.edit');
Route::post('/forum/update/{id}', 'Admin\PostsController@update')->name('posts.update');
Route::get('/forum/destroy/{id}', 'Admin\PostsController@destroy')->name('posts.destroy');

/*
 * ARTICLES
 */
Route::get('/articles', 'ArticlesController@index')->name('articles.index');
Route::get('/articles/new', 'ArticlesController@create')->name('articles.create');
Route::post('/articles/store', 'ArticlesController@store')->name('articles.store');
Route::get('/articles/show/{id}', 'ArticlesController@show')->name('articles.show');
Route::get('/articles/edit/{id}', 'ArticlesController@edit')->name('articles.edit');
Route::post('/articles/update/{id}', 'ArticlesController@update')->name('articles.update');
Route::get('/articles/destroy/{id}', 'ArticlesController@destroy')->name('articles.destroy');


/*
 * CATEGORIES OF POSTS
 */
Route::get('/forum', 'Admin\PostCategoriesController@index')->name('postsCat.index');
Route::get('/post_categories/new', 'Admin\PostCategoriesController@create')->name('postsCat.create');
Route::post('/post_categories/store', 'Admin\PostCategoriesController@store')->name('postsCat.store');
Route::get('/forum/{id}', 'Admin\PostCategoriesController@show')->name('postsCat.show');
Route::get('/post_categories/edit/{id}', 'Admin\PostCategoriesController@edit')->name('postsCat.edit');
Route::post('/post_categories/update/{id}', 'Admin\PostCategoriesController@update')->name('postsCat.update');
Route::get('/post_categories/destroy/{id}', 'Admin\PostCategoriesController@destroy')->name('postsCat.destroy');

/*
 * ANSWERS OF THE POSTS
 */
Route::get('/answers/new', 'Admin\AnswersController@create')->name('answers.create');
Route::post('/answers/store', 'Admin\AnswersController@store')->name('answers.store');
Route::get('/answers/edit/{id}', 'Admin\AnswersController@edit')->name('answers.edit');
Route::post('/answers/update/{id}', 'Admin\AnswersController@update')->name('answers.update');
Route::get('/answers/destroy/{id}', 'Admin\AnswersController@destroy')->name('answers.destroy');

/*
 * COMMENTS
 */
Route::get('/comments', 'Admin\CommentsController@index')->name('comments.index');
Route::get('/comments/new', 'Admin\CommentsController@create')->name('comments.create');
Route::post('/comments/store', 'Admin\CommentsController@store')->name('comments.store');
Route::get('/comments/show/{id}', 'Admin\CommentsController@show')->name('comments.show');
Route::get('/comments/edit/{id}', 'Admin\CommentsController@edit')->name('comments.edit');
Route::post('/comments/update/{id}', 'Admin\CommentsController@update')->name('comments.update');
Route::get('/comments/destroy/{id}', 'Admin\CommentsController@destroy')->name('comments.destroy');




/* --------------- ZONE USER --------------- */

/*
 * FORUM
 */
Route::get('/forum/new', 'User\PostsController@create')->name('posts.create');
Route::get('/forum/{catId}/new', 'User\PostsController@create')->name('post.createWithCategory');
Route::post('/forum/store', 'User\PostsController@store')->name('posts.store');
Route::get('/forum/post/{id}', 'User\PostsController@show')->name('posts.show');
Route::get('/forum/edit/{id}', 'User\PostsController@edit')->name('posts.edit');
Route::post('/forum/update/{id}', 'User\PostsController@update')->name('posts.update');
Route::get('/forum/destroy/{id}', 'User\PostsController@destroy')->name('posts.destroy');

/*
 * CATEGORIES OF POSTS
 */
Route::get('/forum', 'User\PostCategoriesController@index')->name('postsCat.index');
Route::get('/post_categories/new', 'User\PostCategoriesController@create')->name('postsCat.create');
Route::post('/post_categories/store', 'User\PostCategoriesController@store')->name('postsCat.store');
Route::get('/forum/{id}', 'User\PostCategoriesController@show')->name('postsCat.show');
Route::get('/post_categories/edit/{id}', 'User\PostCategoriesController@edit')->name('postsCat.edit');
Route::post('/post_categories/update/{id}', 'User\PostCategoriesController@update')->name('postsCat.update');
Route::get('/post_categories/destroy/{id}', 'User\PostCategoriesController@destroy')->name('postsCat.destroy');

/*
 * ANSWERS OF THE POSTS
 */
Route::get('/answers/new', 'User\AnswersController@create')->name('answers.create');
Route::post('/answers/store', 'User\AnswersController@store')->name('answers.store');
Route::get('/answers/edit/{id}', 'User\AnswersController@edit')->name('answers.edit');
Route::post('/answers/update/{id}', 'User\AnswersController@update')->name('answers.update');
Route::get('/answers/destroy/{id}', 'User\AnswersController@destroy')->name('answers.destroy');

/*
 * COMMENTS
 */
Route::get('/comments', 'User\CommentsController@index')->name('comments.index');
Route::get('/comments/new', 'User\CommentsController@create')->name('comments.create');
Route::post('/comments/store', 'User\CommentsController@store')->name('comments.store');
Route::get('/comments/show/{id}', 'User\CommentsController@show')->name('comments.show');
Route::get('/comments/edit/{id}', 'User\CommentsController@edit')->name('comments.edit');
Route::post('/comments/update/{id}', 'User\CommentsController@update')->name('comments.update');
Route::get('/comments/destroy/{id}', 'User\CommentsController@destroy')->name('comments.destroy');



/* Routes de login/register/logout */

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

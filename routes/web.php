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
/* Routes de login/register/logout */

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

/*
 * FORUM
 */
Route::get('/forum/post/{id}', 'PostsController@show')->name('posts.show');

Route::get('/forum', 'PostCategoriesController@index')->name('postsCats.index');
Route::get('/forum/{id}', 'PostCategoriesController@show')->name('postsCats.show');

/*
* ARTICLES
*/
Route::get('/articles', 'ArticlesController@index')->name('articles.index');
Route::get('/articles/show/{id}', 'ArticlesController@show')->name('articles.show');

/*
* FORUM
*/
Route::get('/forum/post/{id}', 'PostsController@show')->name('posts.show');

/*
 * EVENTS
 */
Route::get('/events', 'EventsController@index')->name('events.index');
Route::get('/events/show/{id}', 'EventsController@show')->name('events.show');

Route::get('/users', 'UsersController@index')->name('users.index');
Route::get('/users/{id}', 'UsersController@show')->name('users.show');

/* --------------- ZONE ADMIN --------------- */
Route::group(['prefix' => 'admin', 'middleware' => 'can:access-admin'], function () {
    /*
     * FORUM
     */
    Route::get('/posts', 'Admin\PostsController@create')->name('admin.posts.index');
    Route::get('/posts/show/{id}', 'Admin\PostsController@show')->name('admin.posts.destroy');
    Route::get('/posts/destroy/{id}', 'Admin\PostsController@destroy')->name('admin.posts.destroy');

    /*
     * ARTICLES
     */
    Route::get('/articles', 'Admin\ArticlesController@index')->name('admin.articles.index');
    Route::get('/articles/show/{id}', 'Admin\ArticlesController@show')->name('admin.articles.show');
    Route::get('/articles/destroy/{id}', 'Admin\ArticlesController@destroy')->name('admin.articles.destroy');

    /*
     * CATEGORIES OF POSTS
     */
    Route::get('/post_categories', 'Admin\PostCategoriesController@index')->name('admin.postsCats.index');
    Route::get('/post_categories/new', 'Admin\PostCategoriesController@create')->name('admin.postsCats.create');
    Route::post('/post_categories/store', 'Admin\PostCategoriesController@store')->name('admin.postsCats.store');
    Route::get('/post_categories/{id}', 'Admin\PostCategoriesController@show')->name('admin.postsCats.show');
    Route::get('/post_categories/edit/{id}', 'Admin\PostCategoriesController@edit')->name('admin.postsCats.edit');
    Route::post('/post_categories/update/{id}', 'Admin\PostCategoriesController@update')->name('admin.postsCats.update');
    Route::get('/post_categories/destroy/{id}',
        'Admin\PostCategoriesController@destroy')->name('admin.postsCats.destroy');

    /*
     * ANSWERS OF THE POSTS
     */
    Route::get('/answers/destroy/{id}', 'Admin\AnswersController@destroy')->name('admin.answers.destroy');

    /*
     * COMMENTS
     */
    Route::get('/comments/destroy/{id}', 'Admin\CommentsController@destroy')->name('admin.comments.destroy');

    /*
     * EVENTS
     */
    Route::get('/events', 'Admin\EventsController@index')->name('admin.events.index');
    Route::get('/events/show/{id}', 'Admin\EventsController@destroy')->name('admin.events.destroy');
    Route::get('/events/destroy/{id}', 'Admin\EventsController@destroy')->name('admin.events.destroy');

    /*
     * USERS
     */
    Route::get('/users', 'Admin\UsersController@index')->name('admin.users.index');
    Route::get('/users/new', 'Admin\UsersController@create')->name('admin.users.create');
    Route::post('/users/store', 'Admin\UsersController@store')->name('admin.users.store');
    Route::get('/users/user/{id}', 'Admin\UsersController@show')->name('admin.users.show');
    Route::get('/users/edit/{id}', 'Admin\UsersController@edit')->name('admin.users.edit');
    Route::post('/users/update/{id}', 'Admin\UsersController@update')->name('admin.users.update');
    Route::get('/users/destroy/{id}', 'Admin\UsersController@destroy')->name('admin.users.destroy');
});


/* --------------- ZONE USER --------------- */

Route::group(['prefix' => 'user', 'middleware' => 'auth'], function () {
    /*
     * FORUM
     */
    Route::get('/forum/new', 'User\PostsController@create')->name('user.posts.create');
    Route::get('/forum/{catId}/new', 'User\PostsController@create')->name('user.posts.createWithCategory');
    Route::post('/forum/store', 'User\PostsController@store')->name('user.posts.store');
    Route::get('/forum/post/{id}', 'User\PostsController@show')->name('user.posts.show');
    Route::get('/forum/edit/{id}', 'User\PostsController@edit')->name('user.posts.edit');
    Route::post('/forum/update/{id}', 'User\PostsController@update')->name('user.posts.update');
    Route::get('/forum/destroy/{id}', 'User\PostsController@destroy')->name('user.posts.destroy');

    /*
    * ARTICLES
    */
    Route::get('/articles', 'User\ArticlesController@index')->name('user.articles.index');
    Route::get('/articles/new', 'User\ArticlesController@create')->name('user.articles.create');
    Route::post('/articles/store', 'User\ArticlesController@store')->name('user.articles.store');
    Route::get('/articles/article/{id}', 'User\ArticlesController@show')->name('user.articles.show');
    Route::get('/articles/edit/{id}', 'User\ArticlesController@edit')->name('user.articles.edit');
    Route::post('/articles/update/{id}', 'User\ArticlesController@update')->name('user.articles.update');
    Route::get('/articles/destroy/{id}', 'User\ArticlesController@destroy')->name('user.articles.destroy');

    /*
    * FORUM
    */
    Route::get('/forum/new', 'User\PostsController@create')->name('user.posts.create');
    Route::get('/forum/{catId}/new', 'User\PostsController@create')->name('user.posts.createWithCategory');
    Route::post('/forum/store', 'User\PostsController@store')->name('user.posts.store');
    Route::get('/forum/post/{id}', 'User\PostsController@show')->name('user.posts.show');
    Route::get('/forum/edit/{id}', 'User\PostsController@edit')->name('user.posts.edit');
    Route::post('/forum/update/{id}', 'User\PostsController@update')->name('user.posts.update');
    Route::get('/forum/destroy/{id}', 'User\PostsController@destroy')->name('user.posts.destroy');

    /*
     * ANSWERS OF THE POSTS (FORUM)
     */
    Route::get('/answers/new', 'User\AnswersController@create')->name('user.answers.create');
    Route::post('/answers/store', 'User\AnswersController@store')->name('user.answers.store');
    Route::get('/answers/edit/{id}', 'User\AnswersController@edit')->name('user.answers.edit');
    Route::post('/answers/update/{id}', 'User\AnswersController@update')->name('user.answers.update');
    Route::get('/answers/destroy/{id}', 'User\AnswersController@destroy')->name('user.answers.destroy');

    /*
     * COMMENTS ON ARTICLES
     */
    Route::get('/comments', 'User\CommentsController@index')->name('user.comments.index');
    Route::get('/comments/new', 'User\CommentsController@create')->name('user.comments.create');
    Route::post('/comments/store', 'User\CommentsController@store')->name('user.comments.store');
    Route::get('/comments/show/{id}', 'User\CommentsController@show')->name('user.comments.show');
    Route::get('/comments/edit/{id}', 'User\CommentsController@edit')->name('user.comments.edit');
    Route::post('/comments/update/{id}', 'User\CommentsController@update')->name('user.comments.update');
    Route::get('/comments/destroy/{id}', 'User\CommentsController@destroy')->name('user.comments.destroy');

    /*
     * EVENTS
     */
    Route::get('/events', 'User\EventsController@index')->name('user.events.index');
    Route::get('/events/new', 'User\EventsController@create')->name('user.events.create');
    Route::post('/events/store', 'User\EventsController@store')->name('user.events.store');
    Route::get('/events/show/{id}', 'User\EventsController@show')->name('user.events.show');
    Route::get('/events/edit/{id}', 'User\EventsController@edit')->name('user.events.edit');
    Route::post('/events/update/{id}', 'User\EventsController@update')->name('user.events.update');
    Route::get('/events/destroy/{id}', 'User\EventsController@destroy')->name('user.events.destroy');

    /*
     * USERS
     */
    Route::get('/profile', 'User\UsersController@profile')->name('user.profile');
    Route::get('/profile/edit', 'User\UsersController@edit')->name('user.users.edit');
    Route::post('/profile/update', 'User\UsersController@update')->name('user.users.update');
    Route::get('/profile/destroy', 'User\UsersController@destroy')->name('user.users.destroy');
});

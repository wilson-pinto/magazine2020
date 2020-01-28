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

Route::get('/landing', 'client\LandingController@index');

Route::get('posts', function () {
    return view('client.pages.posts');
});

Route::get('article-list', function () {
    return view('client.pages.article-list');
});

Route::get('/article', function () {
    return view('client.pages.article');
});

Route::get('/gallery', function () {
    return view('client.pages.gallery');
});




Route::group(['namespace' => 'backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {

    Route::resource('author', 'AuthorController');
    Route::get('authors-showAll', 'AuthorController@showAll');

    Route::resource('article', 'ArticleController');
    Route::get('article-showAll', 'ArticleController@showAll');

    Route::resource('drawings', 'DrawingController');
    Route::get('drawings-showAll', 'DrawingController@showAll');

    Route::resource('photographs', 'PhotographController');
    Route::get('photographs-showAll', 'PhotographController@showAll');
});

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



Route::group(['namespace' => 'backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {

    Route::resource('author', 'AuthorController');
    Route::get('authors-showAll', 'AuthorController@showAll');

    Route::resource('article', 'ArticleController');
    Route::get('article-showAll', 'ArticleController@showAll');
});

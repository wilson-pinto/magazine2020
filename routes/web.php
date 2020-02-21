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

// Route::get('/', function () {
//     return view('welcome');
// });

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::get('/', 'client\LandingController@index');

Route::get('contents/{catName}/{catRid}/{type}', 'client\PostController@index');

Route::get('article/{catName}/{articleRid}', 'client\PostController@getArticle');

Route::get('gallery/{galType}/{galTypeId}', 'client\GalleryController@index');

Route::get('reports/{reportTitle}/{reportRid}', 'client\ReportsController@index');

Route::get('message/{title}/{rid}/{type}', 'client\MsgNotesController@index');

Route::get('principals-note/{title}/{rid}/{type}', 'client\MsgNotesController@index');

Route::get('editors-note/{title}/{rid}/{type}', 'client\MsgNotesController@index');

Route::post('submit-review', 'client\LandingController@storeReview');


Route::group(['namespace' => 'backend', 'prefix' => 'admin', 'as' => 'admin.', 'middleware' => ['auth']], function () {

    Route::resource('author', 'AuthorController');
    Route::get('authors-showAll', 'AuthorController@showAll');

    Route::resource('article', 'ArticleController');
    Route::get('article-showAll', 'ArticleController@showAll');

    Route::resource('drawings', 'DrawingController');
    Route::get('drawings-showAll', 'DrawingController@showAll');

    Route::resource('photographs', 'PhotographController');
    Route::get('photographs-showAll', 'PhotographController@showAll');

    Route::resource('gallery', 'GalleryController');
    Route::get('gallery-showAll', 'GalleryController@showAll');

    Route::resource('reports', 'ReportsController');
    Route::get('reports-showAll', 'ReportsController@showAll');

    Route::resource('msg-notes', 'MsgNoteController');
    Route::get('msg-notes-showAll', 'MsgNoteController@showAll');
});

<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/news/status/{status}', 'NewsServiceController@searchStatus');
Route::get('/news', 'NewsServiceController@search');
Route::get('/news/{id}', 'NewsServiceController@show');
Route::post('/news', 'NewsServiceController@create');
Route::post('/news/{id}', 'NewsServiceController@update');

Route::post('/comment/{news_id}/{reply_to}', 'CommentsServiceController@createReply');
Route::post('/comment/{news_id}', 'CommentsServiceController@create');


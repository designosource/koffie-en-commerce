<?php

/*
|--------------------------------------------------------------------------
| Routes File
|--------------------------------------------------------------------------
|
| Here is where you will register all of the routes in an application.
| It's a breeze. Simply tell Laravel the URIs it should respond to
| and give it the controller to call when that URI is requested.
|
*/

Route::get('/', [
    'as' => 'home',
    'uses' => 'HomeController@index'
]);

Route::get('/videos', [
	'as' => 'videos_index',
	'uses' => 'VideoController@index'
]);

Route::get('/videos/category/{slug}', [
	'as' => 'videos_category',
	'uses' => 'VideoController@category'
]);

Route::get('/video/{id}', [
	'as' => 'video_detail',
	'uses' => 'VideoController@detail'
]);

Route::get('/speaker/{id}', [
	'as' => 'speaker_detail',
	'uses' => 'SpeakerController@detail'
]);

Route::get('/category/{id}', [
	'as' => 'category_detail',
	'uses' => 'CategoryController@category'
]);


/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| This route group applies the "web" middleware group to every route
| it contains. The "web" middleware group is defined in your HTTP
| kernel and includes session state, CSRF protection, and more.
|
*/

Route::group(['middleware' => ['web']], function () {
    //
});

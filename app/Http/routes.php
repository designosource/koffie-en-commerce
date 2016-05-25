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

/* STATIC PAGES */
Route::get('/', [
	'as' => 'index',
	'uses' => 'PageController@index'
]);

Route::get('/over-ons', [
	'as' => 'about',
	'uses' => 'PageController@about'
]);

Route::get('/contact', [
	'as' => 'contact',
	'uses' => 'PageController@contact'
]);


/* VIDEO'S */
Route::get('/videos', [
	'as' => 'videos_index',
	'uses' => 'VideoController@index'
]);

Route::get('/videos/{slug}', [
	'as' => 'video_detail',
	'uses' => 'VideoController@detail'
]);


/* CATEGORIES */
Route::get('/categorieen/{slug}', [
	'as' => 'videos_category',
	'uses' => 'CategoryController@category'
]);


/* SPEAKERS */
Route::get('/sprekers/{slug}', [
	'as' => 'speaker_detail',
	'uses' => 'SpeakerController@detail'
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
	
	/* AUTH */
	Route::get('admin/login', 'Auth\AuthController@getLogin');
	Route::post('admin/login', 'Auth\AuthController@postLogin');
});

/* BASIC AUTHENTICATION */
Route::group(['middleware' => ['web', 'auth']], function () {
	Route::get('admin/logout', 'Auth\AuthController@getLogout');
});

/* ADMIN */
Route::group(['middleware' => ['web', 'auth'], 'namespace' => 'Admin'], function () {

	Route::get('admin/videos', [
		'as' => 'admin_videos_index',
		'uses' => 'VideoController@index'
	]);

	Route::get('admin/videos/create', [
		'as' => 'admin_videos_create',
		'uses' => 'VideoController@create'
	]);

	Route::post('admin/videos', [
		'as' => 'admin_videos_store',
		'uses' => 'VideoController@store'
	]);

	Route::get('admin/videos/{id}/edit', [
		'as' => 'admin_videos_edit',
		'uses' => 'VideoController@edit'
	]);

	Route::post('admin/videos/{id}/edit', [
		'as' => 'admin_videos_update',
		'uses' => 'VideoController@update'
	]);

	Route::get('admin/videos/{id}/delete', [
		'as' => 'admin_videos_delete',
		'uses' => 'VideoController@destroy'
	]);

});

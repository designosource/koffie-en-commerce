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

	/* Categories */
	Route::get('admin/categorieen', [
		'as' => 'admin_categories_index',
		'uses' => 'CategoryController@index'
	]);

	Route::get('admin/categorieen/create', [
		'as' => 'admin_categories_create',
		'uses' => 'CategoryController@create'
	]);

	Route::post('admin/categorieen', [
		'as' => 'admin_categories_store',
		'uses' => 'CategoryController@store'
	]);

	Route::get('admin/categorieen/{id}/edit', [
		'as' => 'admin_categories_edit',
		'uses' => 'CategoryController@edit'
	]);

	Route::post('admin/categorieen/{id}/edit', [
		'as' => 'admin_categories_update',
		'uses' => 'CategoryController@update'
	]);

	Route::get('admin/categorieen/{id}/delete', [
		'as' => 'admin_categories_delete',
		'uses' => 'CategoryController@destroy'
	]);

	/* Speakers */
	Route::get('admin/sprekers', [
		'as' => 'admin_speakers_index',
		'uses' => 'SpeakerController@index'
	]);

	Route::get('admin/sprekers/create', [
		'as' => 'admin_speakers_create',
		'uses' => 'SpeakerController@create'
	]);

	Route::post('admin/sprekers', [
		'as' => 'admin_speakers_store',
		'uses' => 'SpeakerController@store'
	]);

	Route::get('admin/sprekers/{id}/edit', [
		'as' => 'admin_speakers_edit',
		'uses' => 'SpeakerController@edit'
	]);

	Route::post('admin/sprekers/{id}/edit', [
		'as' => 'admin_speakers_update',
		'uses' => 'SpeakerController@update'
	]);

	Route::get('admin/sprekers/{id}/delete', [
		'as' => 'admin_speakers_delete',
		'uses' => 'SpeakerController@destroy'
	]);

	/* Quotes */
	Route::get('admin/quotes', [
		'as' => 'admin_quotes_index',
		'uses' => 'QuoteController@index'
	]);

	Route::get('admin/quotes/create', [
		'as' => 'admin_quotes_create',
		'uses' => 'QuoteController@create'
	]);

	Route::post('admin/quotes', [
		'as' => 'admin_quotes_store',
		'uses' => 'QuoteController@store'
	]);

	Route::get('admin/quotes/{id}/edit', [
		'as' => 'admin_quotes_edit',
		'uses' => 'QuoteController@edit'
	]);

	Route::post('admin/quotes/{id}/edit', [
		'as' => 'admin_quotes_update',
		'uses' => 'QuoteController@update'
	]);

	Route::get('admin/quotes/{id}/delete', [
		'as' => 'admin_quotes_delete',
		'uses' => 'QuoteController@destroy'
	]);
});

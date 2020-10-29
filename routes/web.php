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

Route::get('/', 'LoginController@index');
Route::post('/checklogin', 'LoginController@checkLogin');
Route::post('/logout', 'LoginController@logout');


Route::prefix('trainer')->group(function () {
	Route::group(['namespace'=>'Trainer','middleware' => 'trainer'], function($router)
    { 
		Route::get('/dashboard', 'DashboardController@initdata');
		Route::post('/addnote', 'DashboardController@addNote');
		Route::get('/profile', 'DashboardController@profile');
		Route::post('/editprofile', 'DashboardController@editProfile');
		Route::get('/feedback', 'FeedbackController@feedback');
		Route::post('/addfeedback', 'FeedbackController@addFeedback');
		Route::get('/work-record', 'WorkRecordController@workRecord');
	});
});

Route::prefix('teacher')->group(function () {
	Route::group(['namespace'=>'Teacher','middleware' => 'teacher'], function($router){

		Route::get('/dashboard', 'DashboardController@initdata');
		Route::post('/addnote', 'DashboardController@addNote');
		Route::get('/profile', 'DashboardController@profile');
		Route::post('/editprofile', 'DashboardController@editProfile');
		Route::get('/feedback', 'FeedbackController@feedback');
		Route::post('/addfeedback', 'FeedbackController@addFeedback');
		Route::get('/work-record', 'WorkRecordController@workRecord');
	
	});
});


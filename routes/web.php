<?php

use Illuminate\Support\Facades\Route;/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::group(['middleware'=>['index']], function(){
	Route::get('/','IndexController@index')->name('index');
	Route::post('/','IndexController@getSearchedScholarship');
	Route::get('/index','indexController@index')->name('portalIndex');
	Route::post('/index','IndexController@getSearchedScholarship');
	Route::get('/aboutus','indexController@aboutus')->name('aboutus');
	Route::post('/aboutus','IndexController@getSearchedScholarship');
	Route::get('/scholarships/{id}','indexController@getScholarship')->name('getScholarship');

	Route::get('/signup-university','indexController@createUniversity')->name('signup-university');
	Route::post('/signup-university','indexController@insertUniversity')->name('insert-university');
	Route::get('/signup-student','indexController@createStudent')->name('signup-student');
	Route::get('/createaccount','indexController@createaccount')->name('createaccount');
	Route::get('/searchbyUniName','indexController@getUniversityName')->name('university.universityName');

	
});
Route::post('/feedback','indexController@feedback');
Route::group(['middleware'=>['login']], function(){
	Route::get('/signin','indexController@signin')->name('signin');
	Route::post('/signin','loginController@login')->name('post-signin');
});

Route::group(['middleware'=>['student']], function(){
	//student Controller
	Route::get('/student','studentController@index')->name('student-index');
	Route::get('/student/scholarships/{id}','studentController@getScholarship')->name('getScholarship');
	Route::get('/student/aboutus','studentController@aboutus')->name('student-aboutus');
});
	//University Controller
	Route::get('/university','universityController@index')->name('university-index');
	Route::get('/university/scholarship-{scholarshipid}/students','universityController@getStudents')->name('university.getStudents');
	Route::get('/university/scholarship-{scholarshipid}/students-{studentid}/action','universityController@studentAction')->name('university.studentAction');
	Route::get('/university/new-scholarship','universityController@newScholarship')->name('university.newScholarship');
	Route::post('/university/new-scholarship','universityController@newScholarshipPost')->name('university.newScholarship.Post');
	Route::get('/university/profile','universityController@profile')->name('university.profile');


	
	

//logout
Route::get('/logout','logoutController@index')->name('logout');

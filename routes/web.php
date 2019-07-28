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


//englsih

Route::get('eng','EnglishController@index')->name("eng");
Route::get('eng/teachers','EnglishController@teachers')->name('eng.teachers');
Route::get('eng/about','EnglishController@about')->name('eng.about');


Route::get('/home', 'HomeController@index')->name('home');


Route::get('/dashboard','PagesController@dashboard')->name('dashboard');
Route::resource('sliders','SlidersController');
Route::resource('departments','DepartmentController');
Route::resource('staffs','StaffController');
Route::resource('courses','CourseController');

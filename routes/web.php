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

Route::get('/', 'PagesController@staff_index');
//Route::get('/staff', 'PagesController@staff_index');
//Route::get('/course', 'PagesController@course_index');
//Route::get('/student', 'PagesController@student_index');

Route::resource('staff', 'StaffsController');
Route::resource('course', 'CoursesController');
Route::resource('student', 'StudentsController');
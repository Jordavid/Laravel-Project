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

Route::get('/', 'PagesController@index');

Route::get('/register', 'PagesController@register');

Route::get('/about', 'PagesController@about');

Route::get('/contact', 'PagesController@contact');

Route::get('/users', 'PagesController@users');

Route::get('/add', 'PagesController@add');

Route::post('/add', 'PagesController@store');

Route::get('/course', 'CoursesController@course');

Route::post('/course', 'CoursesController@store');

Route::get('/courses', 'CoursesController@courses');



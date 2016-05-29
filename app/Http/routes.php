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

Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

//courses
Route::get('courses', ['as' => 'courses.index', 'uses' => 'CourseController@index']);
Route::get('courses/categories/{categorySlug}/{semester?}', ['as' => 'courses.category', 'uses' => 'CourseController@category']);

//departments
Route::get('departments', ['as' => 'departments.index', 'uses' => 'DepartmentController@index']);
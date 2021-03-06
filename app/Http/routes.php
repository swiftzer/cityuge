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

// Courses
Route::get('courses', ['as' => 'courses.index', 'uses' => 'CourseController@index']);
Route::get('courses/categories/{category}/{semester?}', ['as' => 'courses.category', 'uses' => 'CourseController@category']);
Route::get('courses/{course}', ['as' => 'courses.show', 'uses' => 'CourseController@show']);
Route::get('statistics', ['as' => 'stats.index', 'uses' => 'StatsController@index']);

// Search
Route::get('search', ['as' => 'search.index', 'uses' => 'SearchController@index']);
Route::get('search/autocomplete', ['as' => 'search.autocomplete', 'uses' => 'SearchController@autocomplete']);
Route::get('search/results', ['as' => 'search.results', 'uses' => 'SearchController@results']);

// Departments
Route::get('departments', ['as' => 'departments.index', 'uses' => 'DepartmentController@index']);
Route::get('departments/{department}', ['as' => 'departments.courses', 'uses' => 'DepartmentController@courses']);

// Reviews
Route::get('reviews', ['as' => 'reviews.index', 'uses' => 'ReviewController@index']);
Route::get('courses/{course}/reviews/create', ['as' => 'reviews.create', 'uses' => 'ReviewController@create']);
Route::post('reviews/store', ['as' => 'reviews.store', 'uses' => 'ReviewController@store']);
Route::get('reviews/{review}', ['as' => 'reviews.show', 'uses' => 'ReviewController@show']);

// Atom feed
Route::get('feed', ['as' => 'feed', 'uses' => 'ReviewController@recentAtomFeed']);


// Authentication Routes...
Route::get('login', ['as' => 'login.index', 'uses' => 'Auth\AuthController@showLoginForm']);
Route::post('login', ['as' => 'login.index', 'uses' => 'Auth\AuthController@login']);

Route::get('logout', ['as' => 'logout', 'uses' => 'Auth\AuthController@logout']);

// Registration Routes...
// Route::get('register', ['as' => 'register.index', 'uses' => 'Auth\AuthController@showRegistrationForm']);
// Route::post('register', ['as' => 'register.index', 'uses' => 'Auth\AuthController@register']);

// Password Reset Routes...
Route::get('password/reset/{token?}', ['as' => 'password.forgot', 'uses' => 'Auth\PasswordController@showResetForm']);
Route::post('password/email', ['as' => 'feed', 'password.sendResetLinkEmail' => 'Auth\PasswordController@sendResetLinkEmail']);
Route::post('password/reset', ['as' => 'feed', 'password.reset' => 'Auth\PasswordController@reset']);
Route::group(['prefix' => 'admin', 'middleware' => 'auth' ], function () {
    Route::get('/', ['as' => 'admin.index','uses' => 'Admin\HomeController@index']);
});

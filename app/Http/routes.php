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
Route::group(
    [
        'prefix' => LaravelLocalization::setLocale(),
        'before' => 'LaravelLocalizationRedirectFilter',
    ],

    function()
    {
        Route::get('/', ['as' => 'home', 'uses' => 'HomeController@index']);

        // Courses
        Route::get('courses', ['as' => 'courses.index', 'uses' => 'CourseController@index']);
        Route::get('courses/categories/{category}/{semester?}', ['as' => 'courses.category', 'uses' => 'CourseController@category']);
        Route::get('courses/{course}', ['as' => 'courses.show', 'uses' => 'CourseController@show']);

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
    }
);

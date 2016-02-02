<?php

namespace CityUGE\Http\Controllers;


use CityUGE\Entities\Course;

class CourseController extends Controller
{
    /**
     * Show course list.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $courses = Course::with('department')
            ->orderBy('course_code')
            ->paginate(30);

        return view('main.course.index', ['courses' => $courses]);
    }
}

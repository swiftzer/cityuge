<?php

namespace CityUGE\Http\Controllers;

use CityUGE\Entities\Category;
use CityUGE\Entities\Course;
use CityUGE\Entities\Review;
use CityUGE\Entities\Semester;

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

        return view('main.courses.index', ['courses' => $courses]);
    }

    public function category(Category $category, Semester $semester = null)
    {
        $query = Course::with('department')
            ->whereHas('categories', function ($q) use ($category) {
                $q->where('slug', $category->slug);
            });
        if (!is_null($semester) && !is_null($semester->semester)) {
            $query = $query->whereHas('semesters', function ($q) use ($semester) {
                $q->where('semester', $semester->semester);
            });
        }
        $courses = $query->orderBy('course_code')
            ->paginate(30);
        return view('main.courses.index', ['courses' => $courses]);
    }

    /**
     * Course detail page.
     * @param Course $course
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Course $course)
    {
        $reviews = Review::with('semester')
            ->where('course_id', $course->id)
            ->orderBy('created_at', 'DESC')
            ->paginate(5);
        $offeringSemesters = $course->semesters()->orderBy('id', 'DESC')->get();

        $data = [
            'course' => $course,
            'offeringSemesters' => $offeringSemesters,
            'reviews' => $reviews,
        ];
        return view('main.courses.show', $data);
    }
}

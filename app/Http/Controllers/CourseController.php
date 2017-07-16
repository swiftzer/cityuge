<?php

namespace CityUGE\Http\Controllers;

use CityUGE\Entities\Category;
use CityUGE\Entities\Course;
use CityUGE\Entities\Review;
use CityUGE\Entities\Semester;
use Illuminate\Http\Request;

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

        $data = [
            'courses' => $courses,
            'category' => null,
            'semesters' => null,
        ];
        return view('main.courses.index', $data);
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
        $semesters = Semester::orderBy('ended_at', 'desc')->get();

        $data = [
            'courses' => $courses,
            'category' => $category,
            'semesters' => $semesters,
        ];
        return view('main.courses.index', $data);
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

    public function search_courses(Request $request)
    {
        $result = [];
        $query = [];
        if ($request->has('q')) {
            $str = $request->has('q');
            $query = Course::where('course_code', 'like', "%${str}%")
                ->orWhere('title_en', 'like', "%${str}%")
                ->orWhere('title_zh', 'like', "%${str}%")
                ->orderBy('course_code', 'ASC')
                ->limit(8)
                ->get()
                ->toArray();
        } else {
            $query = Course::orderBy('course_code', 'ASC')
                ->limit(8)
                ->get()
                ->toArray();
        }

        $result = array_map(function($course) {
            return [
                'id' => $course['course_code'],
                'text' => $course['title_en'],
            ];
        }, $query);

        return response()
            ->json(['results' => $result]);
    }
}

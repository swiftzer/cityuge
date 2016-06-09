<?php

namespace CityUGE\Http\Controllers;

use CityUGE\Entities\Category;
use CityUGE\Entities\Course;
use CityUGE\Entities\Offering;
use CityUGE\Entities\Review;

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

    public function category($categorySlug, $semester = null)
    {
        $category = $this->getCategoryBySlug($categorySlug);
        if (is_null($category)) {
            abort(404);
        }
        $coursesQuery = Course::with('department')->whereHas('categories', function ($query) use ($category) {
            $query->where('category_id', '=', $category->id);
        });
        if (!is_null($semester)) {
            $coursesQuery = $coursesQuery->whereHas('offerings', function ($query) use ($semester) {
                $query->where('semester', '=', $semester);
            });
        }
        $courses = $coursesQuery->orderBy('course_code')->paginate(30);
        return view('main.course.index', ['courses' => $courses]);
    }

    /**
     * Course detail page.
     * @param Course $course
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function show(Course $course)
    {
        $reviews = Review::where('course_id', $course->id)
            ->orderBy('created_at', 'DESC')
            ->paginate(5);
        $offerings = Offering::where('course_id', $course->id)
            ->orderBy('semester', 'DESC')
            ->get();

        $data = [
            'course' => $course,
            'offerings' => $offerings,
            'reviews' => $reviews,
        ];
        return view('main.course.show', $data);
    }

    private function getCategoryBySlug($categorySlug)
    {
        $categories = Category::all();
        return $categories->first(function ($key, $value) use ($categorySlug) {
            return $value->slug == $categorySlug;
        });
    }

}

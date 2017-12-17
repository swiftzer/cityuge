<?php

namespace CityUGE\Http\Controllers\Admin;
use CityUGE\Http\Controllers\Controller;
use CityUGE\Entities\Review;
use CityUGE\Entities\Course;
use CityUGE\Entities\Semester;


class ReviewController extends Controller
{

    public function index()
    {
        $reviews = Review::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.review.index', compact('reviews'));
    }
    public function edit($id)
    {
        $review = Review::findOrFail($id);
        $courses = Course::pluck('title_en','id')->toArray();
        $semesters = Semester::pluck('title','id')->toArray();

        return view('admin.review.edit', [
            'review' => $review,
            'courses' => $courses,
            'semesters' => $semesters,
        ]);
    }
}

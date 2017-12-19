<?php

namespace CityUGE\Http\Controllers\Admin;
use CityUGE\Http\Controllers\Controller;
use CityUGE\Entities\Review;
use CityUGE\Entities\Course;

use CityUGE\Entities\Filter;
use CityUGE\Entities\Semester;
use DB;
use Illuminate\Http\Request;

class ReviewController extends Controller
{

    public function index(Request $request)
    {
        $queryBuilder = DB::table('reviews')
            ->leftJoin('courses', 'courses.id' , '=' , 'reviews.course_id')
            ->leftJoin('semesters', 'semesters.id' , '=' , 'reviews.semester_id')
            ->select('reviews.*', 'courses.course_code as course_code', 'courses.title_en as course_title_en' , 'semesters.title as semester_title');
        $query = $request->only(
            'course_id',
            'semester_id',
            'keyword');
        if (!empty($query['course_id'])) {
            $queryBuilder->where('course_id', '=', $query['course_id']);
        }
        if (!empty($query['semester_id'])) {
            $queryBuilder->where('semester_id', '=', $query['semester_id']);
        }
        if (!empty($query['keyword'])) {
            $queryBuilder->where('body', 'like', '%' . $query['keyword'] . '%');
        }

        $reviews = $queryBuilder->paginate(10);
        $courses = Course::select(DB::raw("CONCAT(course_code, ' - ', title_en) AS title"),'id')
            ->get()
            ->pluck('title','id')
            ->toArray();
        $semesters = Semester::pluck('title','id')->toArray();
        return view('admin.review.index', [
            'reviews' => $reviews,
            'query' => $request->query->all(),
            'courses' => $courses,
            'semesters' => $semesters,
        ]);
    }
    public function edit($id, Request $request)
    {
        $review = Review::findOrFail($id);
        if ($request->isMethod('post')) {
            $input = $request->only(
                'course_id',
                'semester_id',
                'instructor',
                'grade',
                'gp',
                'workload',
                'body',
                'admin_note');
            $review->course_id = $input['course_id'];
            $review->semester_id = $input['semester_id'];
            $review->instructor = $input['instructor'];
            $review->grade = $input['grade'];
            $review->gp = $input['gp'];
            $review->workload = $input['workload'];
            $review->body = $input['body'];
            $review->admin_note = $input['admin_note'];
            $review->save();

            $request->session()->flash('success', 'Task was successful!');
            return redirect()->route('admin.review.edit', $id);
        }
        $courses = Course::select(DB::raw("CONCAT(course_code, ' - ', title_en) AS title"),'id')
            ->get()
            ->pluck('title','id')
            ->toArray();
        $semesters = Semester::pluck('title','id')->toArray();

        return view('admin.review.edit', [
            'review' => $review,
            'courses' => $courses,
            'semesters' => $semesters,
        ]);
    }

}

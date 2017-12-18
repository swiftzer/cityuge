<?php

namespace CityUGE\Http\Controllers\Admin;
use CityUGE\Http\Controllers\Controller;
use CityUGE\Entities\Review;
use CityUGE\Entities\Course;
use CityUGE\Entities\Semester;
use DB;
use Illuminate\Http\Request;

class ReviewController extends Controller
{

    public function index()
    {
        // TODO: add filters
        $reviews = Review::orderBy('created_at', 'desc')->paginate(10);
        return view('admin.review.index', compact('reviews'));
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
        $courses = Course::select(DB::raw("CONCAT(course_code, ' - ', title_en, ' ' , title_zh) AS title"),'id')
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

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
            'keyword',
            'with_trashed');
        if (!empty($query['course_id'])) {
            $queryBuilder->where('course_id', '=', $query['course_id']);
        }
        if (!empty($query['semester_id'])) {
            $queryBuilder->where('semester_id', '=', $query['semester_id']);
        }
        if (!empty($query['keyword'])) {
            $queryBuilder->where('body', 'like', '%' . $query['keyword'] . '%');
        }
        if (empty($query['with_trashed']) || $query['with_trashed'] === false) {
            $queryBuilder->whereNull('reviews.deleted_at');
        }

        $reviews = $queryBuilder->paginate(10);
        $courses = Course::getList();
        $semesters = Semester::getList();
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
        if ($request->isMethod('put')) {
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

            $request->session()->flash('success', "Review $id successfully updated");
            return redirect()->route('admin.review.edit', $id);
        }
        $courses = Course::getList();
        $semesters = Semester::getList();

        return view('admin.review.edit', [
            'review' => $review,
            'courses' => $courses,
            'semesters' => $semesters,
        ]);
    }
    public function delete($id, Request $request) {
        $review = Review::findOrFail($id);
        $review->admin_note = $request->input('admin_note', null);
        $review->save();
        $review->delete();
        $request->session()->flash('success', "Review $id successfully deleted");
        return back();
    }
    public function restore($id, Request $request) {
        $review = Review::withTrashed()->findOrFail($id);
        $review->admin_note = $request->input('admin_note', null);
        $review->save();
        $review->restore();
        $request->session()->flash('success', "Review $id successfully restored");
        return back();
    }

}

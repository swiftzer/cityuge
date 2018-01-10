<?php

namespace CityUGE\Http\Controllers;

use Carbon\Carbon;
use CityUGE\Entities\Course;
use CityUGE\Entities\Review;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ReviewController extends Controller
{
    /**
     * List all reviews.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $reviews = Review::with(['course', 'semester'])
            ->orderBy('created_at', 'DESC')
            ->paginate(30);
        return view('main.reviews.index', ['reviews' => $reviews]);
    }

    public function show(Review $review)
    {
        return view('main.reviews.show', ['review' => $review]);
    }

    public function recentAtomFeed()
    {
        $reviews = Review::with(['course', 'semester'])
            ->orderBy('created_at', 'DESC')
            ->limit(30)
            ->get();
        $updated = Carbon::now();
        if ($reviews) {
            $latestReview = Review::orderBy('updated_at', 'DESC')->first(['updated_at']);
            $updated = $latestReview->updated_at;
        }
        $data = [
            'updated' => $updated,
            'reviews' => $reviews,
        ];
        return response()
            ->view('main.reviews.recentAtom', $data)
            ->header('Content-Type', 'text/xml');
    }

    public function create(Course $course)
    {
        $semesters = $course->semesters()->orderBy('id', 'DESC')->get();
        return view('main.reviews.create', [
            'course' => $course,
            'semesters' => $semesters,
            'recaptchaSiteKey' => env('RECAPTCHA_SITE_KEY')
        ]);
    }

    public function store(Request $request)
    {
        $this->validate($request, [
            'course-id' => 'required|exists:courses,id',
            'semester-id' => 'required|exists:offerings,semester_id,course_id,' . $request->input('course-id'),
            'instructor' => 'required|min:2|max:100',
            'grade' => 'required|in:A+,A,A-,B+,B,B-,C+,C,C-,D,F,X',
            'workload' => 'required|integer|between:1,5',
            'body' => 'required|between:10,3000',
            'g-recaptcha-response' => 'required|recaptcha',
        ]);

        $semesterId = $request->input('semester-id');
        $instructor = $request->input('instructor');
        $grade = $request->input('grade');
        $workload = $request->input('workload');
        $body = $request->input('body');
        $courseId = $request->input('course-id');
        if (is_null($request->server('HTTP_CF_CONNECTING_IP'))) {
            $ip = $request->ip();
        } else {
            $ip = $request->server('HTTP_CF_CONNECTING_IP');
        }

        $courseCode = '';
        DB::transaction(function () use (&$courseCode, $courseId, $semesterId, $instructor, $grade, $workload, $body, $ip) {
            $course = Course::find($courseId);
            $courseCode = $course->course_code;

            if (is_null($course)) {
                abort(500);
            }

            $review = new Review;
            $review->course_id = $course->id;
            $review->semester_id = $semesterId;
            $review->instructor = $instructor;
            $review->grade = $grade;
            $review->gp = $this->getGradePoint($grade);
            $review->workload = $workload;
            $review->body = $body;
            $review->ipv4 = $ip;
            $review->save();

            // TODO: Update courses table

            // Update updated_at timestamp
            $course->touch();
        });

        return redirect()->route('courses.show', [
            'course' => strtolower($courseCode)
        ]);
    }

    public function getGradePoint($grade)
    {
        switch ($grade) {
            case 'A+':
                return 4.3;
            case 'A':
                return 4.0;
            case 'A-':
                return 3.7;
            case 'B+':
                return 3.3;
            case 'B':
                return 3.0;
            case 'B-':
                return 2.7;
            case 'C+':
                return 2.3;
            case 'C':
                return 2.0;
            case 'C-':
                return 1.7;
            case 'D':
                return 1.0;
            case 'F':
                return 0.0;
            default:
                return null;
        }
    }
}

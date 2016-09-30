<?php
namespace CityUGE\Http\Controllers;

use Carbon\Carbon;
use CityUGE\Entities\Review;
use CityUGE\Entities\Course;
use CityUGE\Entities\Semester;

use Symfony\Component\HttpFoundation\Request;

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
        return view('main.reviews.create', [
            'course' => $course,
            'semesters' => Semester::all(),
        ]);
    }

    public function store(Request $request)
    {
        $instructor = $request->input('instructor');
        $grade = $request->input('grade');
        $workload = $request->input('workload');
        $content = $request->input('content');
        $courseCode = $request->input('course_code');
        $ip = $request->ip();

        $course = Course::where('course_code', $courseCode)->first();
        $semester = Semester::where('semester', $request->input('semester'))->first();
        if(is_null($course) || is_null($semester))
        {
            abort(500);
        }

        $review = new Review;
        $review->course_id = $course->id;
        $review->semester_id = $semester->id;
        $review->instructor = $instructor;
        $review->grade = $grade;
        $review->gp = $this->getGradePoint($grade);
        $review->workload = $workload;
        $review->body = $content;
        $review->ipv4 = $ip;
        $review->save();

        return redirect()->route('courses.show', [
            'course' => $course->course_code
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

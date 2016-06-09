<?php
namespace CityUGE\Http\Controllers;


use Carbon\Carbon;
use CityUGE\Entities\Review;

class ReviewController extends Controller
{
    /**
     * List all reviews.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        $reviews = Review::with('course')
            ->orderBy('created_at', 'DESC')
            ->paginate(30);
        return view('main.review.index', ['reviews' => $reviews]);
    }

    public function show(Review $review)
    {
        return view('main.review.show', ['review' => $review]);
    }

    public function recentAtomFeed()
    {
        $reviews = Review::with('course')
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
            ->view('main.review.recentAtom', $data)
            ->header('Content-Type', 'text/xml');
    }
}

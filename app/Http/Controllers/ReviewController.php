<?php
namespace CityUGE\Http\Controllers;


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
}

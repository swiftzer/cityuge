<?php

namespace CityUGE\Http\Controllers;

use CityUGE\Entities\Category;
use CityUGE\Entities\Department;
use CityUGE\Entities\Filter;
use CityUGE\Entities\Semester;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function index()
    {
        $departments = Department::orderBy('initial')->get();
        $categories = Category::orderBy('slug')->get();
        $semesters = Semester::orderBy('id', 'DESC')->get();
        return view('main.search.index', [
            'departments' => $departments,
            'categories' => $categories,
            'semesters' => $semesters,
        ]);
    }

    public function autocomplete(Request $request)
    {
        $filter = new Filter($request->query());
        $result = collect($filter->getQueryBuilder()
        ->orderBy('course_code', 'ASC')
        ->limit(8)
        ->get())->map(function ($course) {
            return [
                'id' => $course->course_code,
                'text' => $course->title_en
            ];
        });
        return response()->json(['results' => $result]);
    }

    public function results(Request $request)
    {
        $filter = new Filter($request->query());
        return view('main.search.results', [
            'results' => $filter->getQueryBuilder()->paginate(15),
            'query' => $request->query->all()
        ]);
    }
}

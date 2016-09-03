<?php

namespace CityUGE\Http\Controllers;

use CityUGE\Entities\Category;
use CityUGE\Entities\Department;
use CityUGE\Entities\Filter;
use CityUGE\Semester;
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

    public function results(Request $request)
    {
        $filter = new Filter($request->query());
        return view('main.search.results', [
            'results' => $filter->getQueryBuilder()->paginate(15),
            'query' => $request->query->all()
        ]);
    }
}

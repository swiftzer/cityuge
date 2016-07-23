<?php

namespace CityUGE\Http\Controllers;

use Illuminate\Http\Request;

use CityUGE\Http\Requests;
use CityUGE\Entities\Department;
use CityUGE\Entities\Category;
use CityUGE\Entities\Filter;

class SearchController extends Controller
{
    public function index()
    {
        $departments = Department::all()->sortBy('initial');
        $categories = Category::all()->sortBy('title_en');
        return view('main.search.index', [
            'departments' => $departments,
            'categories' => $categories
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

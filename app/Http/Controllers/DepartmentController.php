<?php

namespace CityUGE\Http\Controllers;

use Illuminate\Http\Request;

use CityUGE\Http\Requests;
use CityUGE\Entities\Department;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::all()->sortBy('initial');

        return view('main.department.index', ['departments' => $departments]);
    }

    public function courses($initial)
    {
        $department = Department::where('initial', $initial)->with('courses')->first();
        return view('main.department.courses', ['department' => $department]);
    }

}

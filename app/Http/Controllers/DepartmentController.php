<?php

namespace CityUGE\Http\Controllers;

use CityUGE\Entities\Course;
use CityUGE\Entities\Department;
use CityUGE\Http\Requests;

class DepartmentController extends Controller
{
    public function index()
    {
        $departments = Department::all()->sortBy('initial');

        return view('main.departments.index', ['departments' => $departments]);
    }

    public function courses(Department $department)
    {
        $courses = Course::where('department_id', $department->id)
            ->orderBy('course_code')
            ->paginate(30);
        $data = [
            'department' => $department,
            'courses' => $courses,
        ];
        return view('main.departments.courses', $data);
    }

}

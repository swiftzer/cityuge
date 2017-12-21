<?php

namespace CityUGE\Http\Controllers\Admin;
use CityUGE\Http\Controllers\Controller;


class HomeController extends Controller
{

    public function index()
    {
        return view('admin.index');
    }
}

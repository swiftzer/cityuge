<?php

namespace CityUGE\Http\Controllers;


class HomeController extends Controller
{
    /**
     * Home page of the website.
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function index()
    {
        return view('main.home');
    }
}

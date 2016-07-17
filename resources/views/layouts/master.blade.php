<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>CityU GE Guide</title>
  <link rel="stylesheet" href="{{ asset('css/app.css') }}">
  <link rel="alternate" href="{{ route('feed') }}" title="CityU GE Guide - Latest reviews" type="application/atom+xml">
</head>
<body>
@include('layouts.nav')
<div class="container">
  <h1><a href="{{ route('home') }}">CityU GE Guide</a></h1>
  <nav>
    <ul class="list-inline">
      <li class="list-inline-item"><a href="{{ route('courses.index') }}">Courses</a></li>
      <li class="list-inline-item"><a href="{{ route('reviews.index') }}">Reviews</a></li>
      <li class="list-inline-item"><a href="{{ route('departments.index') }}">Departments</a></li>
      <li class="list-inline-item"><a href="{{ route('feed') }}">Atom feed</a></li>
    </ul>
  </nav>
  <hr>
</div>

@yield('content')
<script src="{{ asset('js/app.js') }}"></script>
</body>
</html>

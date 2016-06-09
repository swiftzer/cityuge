<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <title>CityU GE Guide</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-alpha.2/css/bootstrap.min.css"
        integrity="sha384-y3tfxAZXuh4HwSYylfB+J125MxIs6mR5FOHamPBG064zB+AFeWH94NdvaCBm8qnd" crossorigin="anonymous">
  <link rel="alternate" href="{{ route('feed') }}" title="CityU GE Guide - Latest reviews" type="application/atom+xml">
</head>
<body>
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
</body>
</html>

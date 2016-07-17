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
@yield('content')
<script src="{{ asset('js/app.js') }}"></script>
@stack('scripts')
</body>
</html>

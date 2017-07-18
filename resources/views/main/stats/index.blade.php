@extends('layouts.master')

@section('content')
  <div class="container">
    <h1>Hot</h1>
    <div class="row">
      @foreach($hotCourses as $categoryKey => $courses)
        <div class="col-sm-4">
          <h2>{{ $categoryKey }}</h2>
          <ol>
            @foreach($courses as $course)
              <li>{{ $course->course_code }}
                <small>{{ $course->title_en }}</small>
              </li>
            @endforeach
          </ol>
        </div>
      @endforeach
    </div>

    <h1>Good grade</h1>
    <div class="row">
      @foreach($goodGradeCourses as $categoryKey => $courses)
        <div class="col-sm-4">
          <h2>{{ $categoryKey }}</h2>
          <ol>
            @foreach($courses as $course)
              <li>{{ $course->course_code }}
                <small>{{ $course->title_en }}</small>
              </li>
            @endforeach
          </ol>
        </div>
      @endforeach
    </div>

    <h1>Bad grade</h1>
    <div class="row">
      @foreach($badGradeCourses as $categoryKey => $courses)
        <div class="col-sm-4">
          <h2>{{ $categoryKey }}</h2>
          <ol>
            @foreach($courses as $course)
              <li>{{ $course->course_code }}
                <small>{{ $course->title_en }}</small>
              </li>
            @endforeach
          </ol>
        </div>
      @endforeach
    </div>

    <h1>Light workload</h1>
    <div class="row">
      @foreach($lightWorkloadCourses as $categoryKey => $courses)
        <div class="col-sm-4">
          <h2>{{ $categoryKey }}</h2>
          <ol>
            @foreach($courses as $course)
              <li>{{ $course->course_code }}
                <small>{{ $course->title_en }}</small>
              </li>
            @endforeach
          </ol>
        </div>
      @endforeach
    </div>

    <h1>Heavy workload</h1>
    <div class="row">
      @foreach($heavyWorkloadCourses as $categoryKey => $courses)
        <div class="col-sm-4">
          <h2>{{ $categoryKey }}</h2>
          <ol>
            @foreach($courses as $course)
              <li>{{ $course->course_code }}
                <small>{{ $course->title_en }}</small>
              </li>
            @endforeach
          </ol>
        </div>
      @endforeach
    </div>
  </div>
@endsection

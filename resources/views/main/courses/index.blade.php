@extends('layouts.master')

@section('content')
  <div class="container">
    <h1>Courses</h1>

    @if($category != null)
      <div class="dropdown">
        <div class="btn-group">
          <button type="button" id="semester-dropdown-menu" class="btn btn-default dropdown-toggle"
                  data-toggle="dropdown">
            學期 <span class="caret"></span>
          </button>
          <ul class="dropdown-menu" role="menu" aria-labelledby="semester-dropdown-menu">
            <li><a href="{{ route('courses.category', ['category' => $category]) }}">所有學期</a></li>
            @foreach($semesters as $semester)
              <li><a
                  href="{{ route('courses.category', ['category' => $category, 'semester' => $semester]) }}">{{ $semester->title }}</a>
              </li>
            @endforeach
          </ul>
        </div>
      </div>
    @endif

    @if($courses->total() == 0)
      <p>No courses</p>
    @else
      <p>Total: {{ $courses->total() }}</p>

      <table class="table table-bordered">
        <thead>
        <tr>
          <th>Code</th>
          <th>Title</th>
          <th>Department</th>
        </tr>
        </thead>
        <tbody>
        @foreach($courses as $course)
          <tr>
            <td>
              <a href="{{ route('courses.show', [strtolower($course->course_code)]) }}">{{ $course->course_code }}</a>
            </td>
            <td>{{ $course->title_en }}</td>
            <td>{{ $course->department->initial }}</td>
          </tr>
        @endforeach
        </tbody>
      </table>

      {!! $courses->links() !!}
    @endif
  </div>
@endsection

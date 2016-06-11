@extends('layouts.master')

@section('content')
  <div class="container">
    <div class="page-header">
      <h1>{{ $department->initial }}
        <small>{{ $department->title_en }}</small>
      </h1>
    </div>
    @if($courses->total() == 0)
      <p>No courses</p>
    @else
      <p>Total: {{ $courses->total() }}</p>

      <table class="table table-bordered">
        <thead>
        <tr>
          <th>Code</th>
          <th>Title</th>
        </tr>
        </thead>
        <tbody>
        @foreach($courses as $course)
          <tr>
            <td>
              <a href="{{ route('courses.show', [strtolower($course->course_code)]) }}">{{ $course->course_code }}</a>
            </td>
            <td>{{ $course->title_en }}</td>
          </tr>
        @endforeach
        </tbody>
      </table>
      {!! $courses->links() !!}
    @endif
  </div>
@endsection

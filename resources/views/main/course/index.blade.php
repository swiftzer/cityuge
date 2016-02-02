@extends('layouts.master')

@section('content')
  <div class="container">
    <h1>Courses</h1>

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
            <td>{{ $course->course_code }}</td>
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

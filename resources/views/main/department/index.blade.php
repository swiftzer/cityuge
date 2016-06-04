@extends('layouts.master')

@section('content')
  <div class="container">
    <h1>Departments</h1>

      <p>Total: {{ count($departments) }}</p>

      <table class="table table-bordered">
        <thead>
        <tr>
          <th>Initial</th>
          <th>Title</th>
          <th>Url</th>
        </tr>
        </thead>
        <tbody>
        @foreach($departments as $department)
          <tr>
            <td>{{ $department->initial }}</td>
            <td>{{ $department->title_en }}</td>
            <td><a href="{{ $department->url }}">{{ $department->url }}</a></td>
          </tr>
        @endforeach
        </tbody>
      </table>
  </div>
@endsection

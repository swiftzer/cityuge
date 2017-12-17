@extends('layouts.app')

@section('content')
<div class="container">
  <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
    {{ csrf_field() }}
    <div class="row">
      <div class="col-md-3">ID: {{ $review->id }}</div>
      <div class="col-md-3">ipv4: {{ $review->ipv4 }}</div>
    </div>
    <div class="row">
      <div class="col-md-2">Course</div>
      <div class="col-md-10">
        <select name="course_id" class="form-control select2">
          @foreach($courses as $key => $course)
          <option value="{{ $key }}" {{ $key === $review->course_id? 'selected': '' }}>{{ $course }}</option>
          @endforeach
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-md-2">Semester</div>
      <div class="col-md-10">
        <select name="semester_id" class="form-control select2">
          @foreach($semesters as $key => $semester)
          <option value="{{ $key }}" {{ $key === $review->semester_id? 'selected': '' }}>{{ $semester }}</option>
          @endforeach
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-md-2">instructor</div>
      <div class="col-md-10"><input type="text" value="{{ $review->instructor }}" name="instructor" class="form-control"/></div>
    </div>
    <div class="row">
      <div class="col-md-2">grade</div>
      <div class="col-md-10"><input type="text" value="{{ $review->grade }}" name="grade" class="form-control"/></div>
    </div>
    <div class="row">
      <div class="col-md-2">gpa</div>
      <div class="col-md-10"><input type="text" value="{{ $review->gp }}" name="gp" class="form-control"/></div>
    </div>
    <div class="row">
      <div class="col-md-2">workload</div>
      <div class="col-md-10"><input type="text" value="{{ $review->workload }}" name="workload" class="form-control"/></div>
    </div>
    <div class="row">
      <div class="col-md-2">body</div>
      <div class="col-md-10"><textarea name="body"  class="form-control">{{ $review->body }}</textarea></div>
    </div>
    <div class="row">
      <div class="col-md-2">admin_note</div>
      <div class="col-md-10"><input type="text" value="{{ $review->admin_note }}" name="admin_note" class="form-control"/></div>
    </div>
    <div class="row"><input type="submit" value="submit" class="btn btn-primary"/></div>
  </form>

</div>
@endsection

@extends('layouts.master')

@section('content')
<div class="container">
  <form class="form-horizontal" action=" {{route('reviews.store')}} " method="post">
    <div class="form-group">
      <label for="semester" class="col-sm-2 control-label">Semester</label>
      <div class="col-sm-10">
        <select name="semester" class="form-control">
        @foreach($semesters as $semester)
          <option value="{{$semester->semester}}">{{$semester->title}}</option>
        @endforeach
        </select>
      </div>
    </div>
    <div class="form-group">
      <label for="instructor" class="col-sm-2 control-label">Instructor</label>
      <div class="col-sm-10">
        <input type="text" class="form-control" id="instructor" name="instructor">
      </div>
    </div>
    <div class="form-group">
      <label for="grade" class="col-sm-2 control-label">Grade</label>
      <div class="col-sm-10">
        <select class="form-control" id="grade" name="grade">
          <option value=" "> </option>
          <option value="A+">A+</option>
          <option value="A">A</option>
          <option value="A-">A-</option>
          <option value="B+">B+</option>
          <option value="B">B</option>
          <option value="B-">B-</option>
          <option value="C+">C+</option>
          <option value="C">C</option>
          <option value="C-">C-</option>
          <option value="D">D</option>
          <option value="F">Fail</option>
          <option value="X">Dropped</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label for="workload" class="col-sm-2 control-label">Workload</label>
      <div class="col-sm-10">
        <select class="form-control" id="workload" name="workload">
          <option value="" selected="selected"></option>
          <option value="1">非常輕鬆</option>
          <option value="2">輕鬆</option>
          <option value="3">一般</option>
          <option value="4">繁重</option>
          <option value="5">非常繁重</option>
        </select>
      </div>
    </div>
    <div class="form-group">
      <label for="content" class="col-sm-2 control-label">Content</label>
      <div class="col-sm-10">
        <textarea class="form-control" id="content" name="content" rows="6"></textarea>
      </div>
    </div>
    <input type="hidden" name="course_code" value="{{strtolower($course->course_code)}}">
    <div class="form-group">
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" class="btn btn-default">Submit</button>
      </div>
    </div>
    {!! csrf_field() !!}
  </form>
</div>
@endsection
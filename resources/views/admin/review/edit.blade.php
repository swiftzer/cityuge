@extends('layouts.app')

@section('content')
<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">
      <h5>
        Edit Review - ID {{ $review->id }}
        <small>
          (IP: {{ $review->ipv4 }} /
          Created: {{ $review->created_at }} /
          Updated: {{ $review->updated_at }})
        </small>
      </h5>
    </div>
    <div class="panel-body">
      <form class="form-horizontal" role="form" method="POST">
        {{ csrf_field() }}
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
          <div class="col-md-2">Instructor</div>
          <div class="col-md-10"><input type="text" value="{{ $review->instructor }}" name="instructor" class="form-control"/></div>
        </div>
        <div class="row">
          <div class="col-md-2">Grade</div>
          <div class="col-md-10"><input type="text" value="{{ $review->grade }}" name="grade" class="form-control"/></div>
        </div>
        <div class="row">
          <div class="col-md-2">Gpa</div>
          <div class="col-md-10"><input type="text" value="{{ $review->gp }}" name="gp" class="form-control"/></div>
        </div>
        <div class="row">
          <div class="col-md-2">Workload</div>
          <div class="col-md-10"><input type="text" value="{{ $review->workload }}" name="workload" class="form-control"/></div>
        </div>
        <div class="row">
          <div class="col-md-2">Body</div>
          <div class="col-md-10"><textarea name="body"  class="form-control">{{ e($review->body) }}</textarea></div>
        </div>
        <div class="row">
          <div class="col-md-2">Admin_note</div>
          <div class="col-md-10"><input type="text" value="{{ $review->admin_note }}" name="admin_note" class="form-control"/></div>
        </div>
        <div class="row">
          <div class="col-md-2">
            <input type="hidden" name="_method" value="PUT">
          </div>
          <div class="col-md-10"><input type="submit" value="Save" class="btn btn-primary"/></div>
        </div>
      </form>
    </div>
  </div>
</div>
@endsection

@extends('layouts.master')

@push('headScripts')
  <script src="https://www.google.com/recaptcha/api.js" async defer></script>
@endpush

@section('content')
  <div class="container">

    <h1>{{ $course->course_code }} - {{ $course->title_en }}</h1>

    @if (count($errors) > 0)
      <div class="alert alert-danger">
        <ul>
          @foreach ($errors->all() as $error)
            <li>{{ $error }}</li>
          @endforeach
        </ul>
      </div>
    @endif

    <form id="create-review-form" class="form-horizontal" action="{{ route('reviews.store') }}" method="post">
      <div class="form-group">
        <label for="semester" class="col-sm-2 control-label">Semester</label>
        <div class="col-sm-10">
          <select name="semester-id" class="form-control">
            @foreach($semesters as $semester)
              <option value="{{ $semester->id }}" {{ old('semester-id') == $semester->id ? 'selected' : '' }}>{{ $semester->title }}</option>
            @endforeach
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="instructor" class="col-sm-2 control-label">Instructor</label>
        <div class="col-sm-10">
          <input type="text" class="form-control" id="instructor" name="instructor" value="{{ old('instructor') }}">
        </div>
      </div>
      <div class="form-group">
        <label for="grade" class="col-sm-2 control-label">Grade</label>
        <div class="col-sm-10">
          <select class="form-control" id="grade" name="grade">
            <option value="">&nbsp;</option>
            <option value="A+" {{ old('grade') == 'A+' ? 'selected' : '' }}>A+</option>
            <option value="A" {{ old('grade') == 'A' ? 'selected' : '' }}>A</option>
            <option value="A-" {{ old('grade') == 'A-' ? 'selected' : '' }}>A-</option>
            <option value="B+" {{ old('grade') == 'B+' ? 'selected' : '' }}>B+</option>
            <option value="B" {{ old('grade') == 'B' ? 'selected' : '' }}>B</option>
            <option value="B-" {{ old('grade') == 'B-' ? 'selected' : '' }}>B-</option>
            <option value="C+" {{ old('grade') == 'C+' ? 'selected' : '' }}>C+</option>
            <option value="C" {{ old('grade') == 'C' ? 'selected' : '' }}>C</option>
            <option value="C-" {{ old('grade') == 'C-' ? 'selected' : '' }}>C-</option>
            <option value="D" {{ old('grade') == 'D' ? 'selected' : '' }}>D</option>
            <option value="F" {{ old('grade') == 'F' ? 'selected' : '' }}>Fail</option>
            <option value="X" {{ old('grade') == 'X' ? 'selected' : '' }}>Dropped</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="workload" class="col-sm-2 control-label">Workload</label>
        <div class="col-sm-10">
          <select class="form-control" id="workload" name="workload">
            <option value="">&nbsp;</option>
            <option value="1" {{ old('workload') == '1' ? 'selected' : '' }}>非常輕鬆</option>
            <option value="2" {{ old('workload') == '2' ? 'selected' : '' }}>輕鬆</option>
            <option value="3" {{ old('workload') == '3' ? 'selected' : '' }}>一般</option>
            <option value="4" {{ old('workload') == '4' ? 'selected' : '' }}>繁重</option>
            <option value="5" {{ old('workload') == '5' ? 'selected' : '' }}>非常繁重</option>
          </select>
        </div>
      </div>
      <div class="form-group">
        <label for="body" class="col-sm-2 control-label">Content</label>
        <div class="col-sm-10">
          <textarea class="form-control" id="body" name="body" rows="6">{{ old('body') }}</textarea>
        </div>
      </div>
      <input type="hidden" name="course-id" value="{{ $course->id }}">
      <div class="form-group">
        <div class="col-sm-offset-2 col-sm-10">
          <button class="btn btn-default g-recaptcha" data-sitekey="{{ $recaptchaSiteKey }}"
                  data-callback="onSubmit">Submit
          </button>
        </div>
      </div>
      {!! csrf_field() !!}
    </form>
  </div>
@endsection

@push('bodyScripts')
  <script>
    function onSubmit(token) {
      document.getElementById("create-review-form").submit();
    }
  </script>
@endpush

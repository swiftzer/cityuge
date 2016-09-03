@extends('layouts.master')

@section('content')
  <div class="container">
    <h1>Search</h1>
    <form method="GET" action="{{ route('search.results') }}" accept-charset="UTF-8" role="form">
      <input type="hidden" name="page" value="1">
      <div class="row">
        <div class="col-sm-6 col-lg-4">
          <div class="form-group">
            <label for="keyword">課程編號 / 名稱</label>
            <input class="form-control" name="keyword" type="text" id="keyword">
          </div>
        </div>
        <div class="col-sm-6 col-lg-4">
          <fieldset>
            <legend>分類、學系及學期</legend>
            <div class="form-group">
              <label for="semester">開辦學期</label>
              <select class="form-control" id="semester" name="semester">
                <option value="" selected="selected"></option>
                @foreach($semesters as $semester)
                  <option value="{{ $semester->semester }}">{{ $semester->title }}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="department">開辦學系</label>
              <select class="form-control" id="department" name="department">
                <option value="" selected="selected"></option>
                @foreach($departments as $department)
                  <option value="{{$department->initial}}">{{$department->title_en}}</option>
                @endforeach
              </select>
            </div>
            <div class="form-group">
              <label for="category">分類</label>
              <select class="form-control" id="category" name="category">
                <option value="" selected="selected"></option>
                @foreach($categories as $category)
                  <option value="{{$category->slug}}">{{$category->title_en}}</option>
                @endforeach
              </select>
            </div>
          </fieldset>
        </div>
        <div class="col-sm-12 col-lg-4">
          <fieldset>
            <legend>
              Assessment Tasks
            </legend>
            <div class="form-horizontal">
              <div class="form-group">
                <label class="col-sm-3 col-lg-4 control-label">Examination</label>
                <div class="col-sm-9 col-lg-8">
                  <label class="radio-inline"><input name="exam" type="radio" value="1"> Yes</label>
                  <label class="radio-inline"><input name="exam" type="radio" value="0"> No</label>
                  <label class="radio-inline"><input checked="checked" name="exam" type="radio" value=""> Don't
                    care</label>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 col-lg-4 control-label">Quiz</label>
                <div class="col-sm-9 col-lg-8">
                  <label class="radio-inline"><input name="quiz" type="radio" value="1"> Yes</label>
                  <label class="radio-inline"><input name="quiz" type="radio" value="0"> No</label>
                  <label class="radio-inline"><input checked="checked" name="quiz" type="radio" value=""> Don't
                    care</label>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 col-lg-4 control-label">Individual report</label>
                <div class="col-sm-9 col-lg-8">
                  <label class="radio-inline"><input name="report" type="radio" value="1"> Yes</label>
                  <label class="radio-inline"><input name="report" type="radio" value="0"> No</label>
                  <label class="radio-inline"><input checked="checked" name="report" type="radio" value=""> Don't
                    care</label>
                </div>
              </div>
              <div class="form-group">
                <label class="col-sm-3 col-lg-4 control-label">Group project</label>
                <div class="col-sm-9 col-lg-8">
                  <label class="radio-inline"><input name="project" type="radio" value="1"> Yes</label>
                  <label class="radio-inline"><input name="project" type="radio" value="0"> No</label>
                  <label class="radio-inline"><input checked="checked" name="project" type="radio" value=""> Don't care</label>
                </div>
              </div>
            </div>
          </fieldset>
        </div>
      </div>
      <div class="form-group">
        <button type="submit" class="btn btn-primary">Search</button>
      </div>
    </form>
  </div>
@endsection

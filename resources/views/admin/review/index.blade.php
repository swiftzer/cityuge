@extends('layouts.app')

@section('content')
<div class="container">
  <div class="panel panel-default">
    <div class="panel-heading">Filter</div>
    <div class="panel-body">
      <form class="form-horizontal" role="form" method="GET">
        {{ csrf_field() }}
        <div class="row">
          <div class="col-md-2">Keyword</div>
          <div class="col-md-10"><input name="keyword" type="text" class="form-control"/></div>
        </div>
        <div class="row">
          <div class="col-md-2">Course</div>
          <div class="col-md-10">
            <select name="course_id" class="form-control select2 prepend-all" id="course_id">
              @foreach($courses as $key => $course)
              <option value="{{ $key }}">{{ $course }}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2">Semester</div>
          <div class="col-md-10">
            <select name="semester_id" class="form-control select2 prepend-all" id="semester_id">
              @foreach($semesters as $key => $semester)
              <option value="{{ $key }}">{{ $semester }}</option>
              @endforeach
            </select>
          </div>
        </div>
        <div class="row">
          <div class="col-md-2">with_trashed</div>
          <div class="col-md-10">
            <input type="checkbox" name="with_trashed" />
          </div>
        </div>
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-md-10"><input type="submit" class="btn btn-primary" value="Search"/></div>
        </div>
      </form>
    </div>
  </div>
  <div class="panel panel-default">
    <div class="panel-heading">Reviews</div>
    <div class="panel-body">

      <table class="table table-hover">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Body</th>
            <th scope="col">Action</th>
          </tr>
        </thead>
        <tbody>
          @forelse($reviews as $review)
          <tr scope="row" class="{{ $review->deleted_at ? 'deleted' : ''}}">
            <td>{{ $review->id }}</td>
            <td>
              <table class="table table-sm">
                <tbody>
                  <tr>
                    <th scope="row" style="width:100px;">Course</th>
                    <td>{{ $review->course_code }} - {{ $review->course_title_en }}</td>
                  </tr>
                  <tr>
                    <th scope="row">semester</th>
                    <td>{{ $review->semester_title }}</td>
                  </tr>
                  <tr>
                    <th scope="row">Body</th>
                    <td colspan="2">{!! nl2br(e($review->body)) !!}</td>
                  </tr>
                  @if (!empty($review->admin_note))
                  <tr class="bg-danger">
                    <th scope="row">Admin note</th>
                    <td colspan="2">{{ $review->admin_note }}</td>
                  </tr>
                  @endif
                </tbody>
              </table>
            </td>
            <td>
              <a href="{{ route('admin.review.edit', $review->id) }}" class="btn btn-default">Edit</a>
              @if (!$review->deleted_at)
                <form action="{{ route('admin.review.delete', $review->id) }}" method="POST"
                  style="display: inline"
                  onsubmit="var adminNote = prompt('Reason:'); $('#deleteNote').val(adminNote); return true;">
                  <input type="hidden" name="admin_note" id="deleteNote">
                  <input type="hidden" name="_method" value="DELETE">
                  {{ csrf_field() }}
                  <button class="btn btn-danger">Delete</button>
                </form>
              @else
                <form action="{{ route('admin.review.restore', $review->id) }}" method="POST"
                  style="display: inline"
                  onsubmit="var adminNote = prompt('Reason:'); $('#restoreNote').val(adminNote); return true;">
                  <input type="hidden" name="admin_note" id="restoreNote">
                  <input type="hidden" name="_method" value="PUT">
                  {{ csrf_field() }}
                  <button class="btn btn-danger">Restore</button>
                </form>
              @endif
            </td>
          </tr>
          @empty
          <tr scope="row">
            <td colspan="3">No entries found.</td>
          </tr>
          @endforelse
        </tbody>
      </table>
    </div>
  </div>
  {{ $reviews->appends(request()->query())->links() }}
</div>
@endsection

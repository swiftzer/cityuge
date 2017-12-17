@extends('layouts.app')

@section('content')
<div class="container">
  <div class="form-group">
      <select id="course-quick-search" class="course-search" style="width:200px;"></select>
  </div>

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
        <tr scope="row">
            <td>{{ $review->id }}</td>
            <td>
              <table class="table table-sm">
                <tbody>
                  <tr>
                    <th scope="row" style="width:100px;">Course</th>
                    <td>{{ $review->course->course_code }} {{ $review->course->title_en }}</td>
                  </tr>
                  <tr>
                    <th scope="row">semester</th>
                    <td>{{ $review->semester->title }}</td>
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
                <form action="{{ route('admin.review.index', $review->id) }}" method="POST"
                      style="display: inline"
                      onsubmit="return confirm('Are you sure?');">
                    <input type="hidden" name="_method" value="DELETE">
                    {{ csrf_field() }}
                    <button class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @empty
            <tr scope="row">
                <td colspan="3">No entries found.</td>
            </tr>
        @endforelse
    </tbody>
</table>
{{ $reviews->links() }}
</div>
@endsection

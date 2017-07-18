@extends('layouts.master')

@section('content')
  <div class="container">
    <h1>{{ $course->course_code }} - {{ $course->title_en }}</h1>

    <dl>
      <dt>Category</dt>
      <dd>
        @if (count($course->categories) == 0)
          <em>No category</em>
        @else
          <ul>
            @foreach($course->categories as $category)
              <li>{{ $category->title_en }}</li>
            @endforeach
          </ul>
        @endif
      </dd>
      <dt>Level</dt>
      <dd>{{ $course->level }}</dd>
      <dt>Department</dt>
      <dd>{{ $course->department->title_zh }} ({{ $course->department->initial }})</dd>
    </dl>

    <h2>Assessment Tasks</h2>
    <table class="table">
      <thead>
      <tr>
        <th>Exam</th>
        <th>Quiz</th>
        <th>Personal report</th>
        <th>Group project</th>
      </tr>
      </thead>
      <tbody>
      <tr>
        <td>@if ($course->assessment_exam === 0) No @else Yes ({{ $course->exam_weight }}) @endif</td>
        <td>@if ($course->assessment_quiz === 0) No @else Yes @endif</td>
        <td>@if ($course->assessment_report === 0) No @else Yes @endif</td>
        <td>@if ($course->assessment_project === 0) No @else Yes @endif</td>
      </tr>
      </tbody>
    </table>

    <h2>Offerings</h2>
    @if (count($offeringSemesters) > 0)
      <ul class="list-inline">
        @foreach($offeringSemesters as $semester)
          <li class="list-inline-item">{{ $semester->title }}</li>
        @endforeach
      </ul>
    @else
      <p>No offerings</p>
    @endif

    <hr>

    <a href="{{ route('reviews.create', ['course' => strtolower($course->course_code)]) }}" class="btn btn-default" type="button">
      Write Review
    </a>

    <h2>Reviews</h2>

    @if($reviews->total() == 0)
      <p>No reviews</p>
    @else
      @foreach($reviews as $review)
        <article id="review-{{ $review->id }}">
          <h3>#{{ $review->id }}</h3>
          <header>
            <ul>
              <li>Semester: {{ $review->semester->title }}</li>
              <li>Workload: {{ $review->workload }}</li>
              <li>Course grade: {{ $review->grade }}</li>
              <li>Instructor: {{ $review->instructor }}</li>
            </ul>
          </header>
          {!! nl2br(e($review->body)) !!}
          <footer>
            <a href="{{ route('reviews.show', [$review->id]) }}">Post link</a>
            Posted at
            <time
              datetime="{{ $review->created_at->toW3cString() }}">{{ $review->created_at->format('d M Y H:i') }}</time>
          </footer>
        </article>
        <hr>
      @endforeach
      {!! $reviews->links() !!}
    @endif
  </div>

  @include('schema.course', ['course' => $course])
@endsection

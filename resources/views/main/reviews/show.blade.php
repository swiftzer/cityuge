@extends('layouts.master')

@section('content')
  <div class="container">
    <h1>Review #{{$review->id}}</h1>

    <article id="review-{{ $review->id }}">
      <header>
        <h2>{{ $review->course->course_code }} - {{ $review->course->title_en }}</h2>
        <ul>
          <li>Department: {{ $review->course->department->title_zh }} ({{ $review->course->department->initial }})</li>
          <li>Semester: {{ $review->semester->title }}</li>
          <li>Workload: {{ $review->workload }}</li>
          <li>Course grade: {{ $review->grade }}</li>
          <li>Instructor: {{ $review->instructor }}</li>
        </ul>
      </header>
      {!! nl2br(e($review->body)) !!}
      <footer>
        Posted at <time datetime="{{ $review->created_at->toW3cString() }}">{{ $review->created_at->format('d M Y H:i') }}</time>
      </footer>
    </article>
  </div>
@endsection

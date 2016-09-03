@extends('layouts.master')

@section('content')
  <div class="container">
    <h1>Reviews</h1>

    @if($reviews->total() == 0)
      <p>No reviews</p>
    @else
      <p>Total: {{ $reviews->total() }}</p>

      @foreach($reviews as $review)
        <article id="review-{{ $review->id }}">
          <header>
            <h2>
              <a href="{{ route('courses.show', [strtolower($review->course->course_code)]) }}">
                {{ $review->course->course_code }} - {{ $review->course->title_en }}
              </a>
            </h2>
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
@endsection

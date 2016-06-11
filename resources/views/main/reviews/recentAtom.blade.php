{!! '<?xml version="1.0" encoding="UTF-8"?>' !!}
<feed xmlns="http://www.w3.org/2005/Atom">
  <title>CityU GE Guide</title>
  <subtitle>Latest reviews</subtitle>
  <link href="@xmle(route('feed'))" rel="self"/>
  <link href="@xmle(route('home'))"/>
  <updated>@xmle($updated->toAtomString())</updated>
  <author>
    <name>CityU GE Guide</name>
  </author>
  <id>@xmle(route('feed'))</id>

  @foreach($reviews as $review)
    <entry>
      <title>@xmle($review->course->course_code) - @xmle($review->course->title_en)</title>
      <link href="@xmle(route('reviews.show', [$review->id]))"/>
      <id>@xmle(route('reviews.show', [$review->id]))</id>
      <published>{{ $review->created_at->toAtomString() }}</published>
      <updated>{{ $review->updated_at->toAtomString() }}</updated>
      <summary type="html">@xmle(str_limit($review->body, 300, '…'))</summary>
      <content type="html">
        &lt;ul&gt;
          &lt;li&gt;Semester: {{ $review->semester }}&lt;/li&gt;
          &lt;li&gt;Workload: {{ $review->workload }}&lt;/li&gt;
          &lt;li&gt;Course grade: {{ $review->grade }}&lt;/li&gt;
          &lt;li&gt;Instructor: {{ $review->instructor }}&lt;/li&gt;
        &lt;/ul&gt;
        @xmle(nl2br(e($review->body), false))
      </content>
      <category term="@xmle($review->course->course_code)"/>
    </entry>
  @endforeach

</feed>

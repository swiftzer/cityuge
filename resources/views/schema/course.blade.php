<script type="application/ld+json">
{
  "@context": "http://schema.org/",
  "@type": "schema:Course",
  "courseCode": "{{ $course->code }}",
  "name": "{{ $course->title_en }}",
  "description": "{{ $course->description_en }}",

  "hasCourseInstance": {
    "@type": "CourseInstance",
    "courseMode": "full-time",
    "endDate": "{{ $course->semesters->sortByDesc('started_at')->first()->ended_at }}",
    "startDate": "{{ $course->semesters->sortByDesc('started_at')->first()->started_at }}",
    "location": {
        "@context": "http://schema.org/",
        "@type": "schema:Place",
        "name": "City University Of Hong Kong",
        "address": "63 Wing Tai Road"        
    },
    "name": "{{ $course->title_en }}"
  }
}
</script>
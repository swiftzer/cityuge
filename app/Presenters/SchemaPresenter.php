<?php

namespace CityUGE\Presenters;

use CityUGE\Entities\Course;

class SchemaPresenter
{
    public function getCourseSchema(Course $course)
    {
        $schema = (object)[
            "@context" => "http://schema.org/",
            "@type" => "schema:Course",
            "courseCode" => $course->code,
            "name" => $course->title_en,
            "description" => $course->description_en
        ];
        if ($course->semesters->count() > 0) {
            $schema->hasCourseInstance = $course->semesters->map(function ($semester) use ($course) {
                return (object)[
                    "@type" => "CourseInstance",
                    "courseMode" => "full-time",
                    "name" => $course->title_en,
                    "endDate" => $semester->ended_at->toFormattedDateString(),
                    "startDate" => $semester->started_at->toFormattedDateString(),
                    "location" => (object)[
                        "@context" => "http://schema.org/",
                        "@type" => "schema:Place",
                        "name" => "City University of Hong Kong",
                        "address" => "83 Tat Chee Avenue, Kowloon Tong, Kowloon, Hong Kong"
                    ]
                ];
            })->all();
        }
        return json_encode($schema);
    }
}

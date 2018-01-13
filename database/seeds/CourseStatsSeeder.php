<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseStatsSeeder extends Seeder
{
    /**
     * Recalculate the statistic figures in courses table.
     *
     * @return void
     */
    public function run()
    {
        // review count
        DB::update(<<<SQL
UPDATE courses AS course1
  INNER JOIN (
               SELECT
                 courses.id,
                 count(reviews.id) AS total_reviews
               FROM courses
                 LEFT JOIN reviews ON courses.id = reviews.course_id AND deleted_at IS NULL
               GROUP BY courses.id) AS course2 ON course1.id = course2.id
SET course1.total_reviews = course2.total_reviews
SQL
        );

        // mean grade point
        DB::update(<<<SQL
UPDATE courses AS course1
  INNER JOIN (
               SELECT
                 courses.id,
                 coalesce(avg(reviews.gp), 0) AS mean_gp
               FROM courses
                 LEFT JOIN reviews
                   ON courses.id = reviews.course_id AND reviews.deleted_at IS NULL AND reviews.grade <> 'X'
               GROUP BY courses.id) AS course2 ON course1.id = course2.id
SET course1.mean_gp = course2.mean_gp
SQL
        );

        // mean workload
        DB::update(<<<SQL
UPDATE courses AS course1
  INNER JOIN (
               SELECT
                 courses.id,
                 coalesce(avg(reviews.workload), 0) AS mean_workload
               FROM courses
                 LEFT JOIN reviews ON courses.id = reviews.course_id AND reviews.deleted_at IS NULL
               GROUP BY courses.id) AS course2 ON course1.id = course2.id
SET course1.mean_workload = course2.mean_workload
SQL
        );
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCoursesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('courses', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('course_code', 10)->unique();
            $table->string('title_en', 200)->index();
            $table->string('title_zh', 200)->nullable()->index();
            $table->string('level', 10);
            $table->integer('department_id')->unsigned()->index();
            $table->integer('grading_pattern');
            $table->text('description_en')->nullable();
            $table->text('description_zh')->nullable();
            $table->boolean('assessment_exam')->index();
            $table->boolean('assessment_quiz')->index();
            $table->boolean('assessment_report')->index();
            $table->boolean('assessment_project')->index();
            $table->integer('total_comments')->index();
            $table->decimal('mean_gp', 5, 4)->index();
            $table->decimal('mean_workload', 5, 4)->index();
            $table->decimal('bayesian_gp', 5, 4)->index();
            $table->decimal('bayesian_workload', 5, 4)->index();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('courses');
    }
}

<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCourseAimsStatsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('course_aims_stats', function (Blueprint $table) {
            $table->increments('id');
            $table->integer('course_id')->unsigned()->index();
            $table->integer('semester_id')->unsigned()->index();
            $table->integer('total_student');
            $table->decimal('mean', 3, 2)->nullable();
            $table->decimal('median', 3, 2)->nullable();
            $table->decimal('sd', 5, 2)->nullable();
            $table->decimal('max', 3, 2)->nullable();
            $table->decimal('min', 3, 2)->nullable();

            $table->unique(['course_id', 'semester_id']);
            $table->foreign('course_id')->references('id')->on('courses')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('course_aims_stats');
    }
}

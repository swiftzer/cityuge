<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Support\Facades\Schema;

class CreateSemestersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('semesters', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->char('semester', 5)->unique();
            $table->string('title', 50);
            $table->boolean('is_enabled')->index();
            $table->timestamp('started_at')->index();
            $table->timestamp('ended_at')->index();
            $table->timestamp('promo_stared_at')->index();
            $table->timestamp('promo_ended_at')->index();
            $table->timestamp('grade_released_from')->nullable();
        });
        Schema::table('course_aims_stats', function ($table) {
            $table->foreign('semester_id')->references('id')->on('semesters')->onUpdate('cascade')->onDelete('cascade');
        });
        Schema::table('offerings', function ($table) {
            $table->foreign('semester_id')->references('id')->on('semesters')->onUpdate('cascade')->onDelete('cascade');
        });
        Schema::table('reviews', function ($table) {
            $table->foreign('semester_id')->references('id')->on('semesters')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('course_aims_stats', function ($table) {
            $table->dropForeign('course_aims_stats_semester_id_foreign');
        });
        Schema::table('offerings', function ($table) {
            $table->dropForeign('offerings_semester_id_foreign');
        });
        Schema::table('reviews', function ($table) {
            $table->dropForeign('reviews_semester_id_foreign');
        });

        Schema::drop('semesters');
    }
}

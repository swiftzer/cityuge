<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDepartmentsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('departments', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->string('initial', 8)->unique();
            $table->string('title_en', 100);
            $table->string('title_zh', 100);
            $table->string('url', 200);
            $table->string('aims_initial', 8)->unique();
            $table->string('aims_title', 100);
        });
        Schema::table('courses', function ($table) {
            $table->foreign('department_id')->references('id')->on('departments')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('courses', function ($table) {
            $table->dropForeign('courses_department_id_foreign');
        });
        Schema::drop('departments');
    }
}

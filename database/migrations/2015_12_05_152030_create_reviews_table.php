<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('reviews', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('course_id')->unsigned()->index();
            $table->integer('semester_id')->unsigned()->index();
            $table->string('instructor', 100);
            $table->string('grade', 2)->nullable();
            $table->decimal('gp', 2, 1)->index();
            $table->integer('workload')->index();
            $table->text('body');
            $table->text('admin_note')->nullable();
            $table->string('ipv4', 15);
            $table->string('eid', 32)->nullable();
            $table->timestamp('verified_at')->nullable();
            $table->timestamps();
            $table->softDeletes();

            $table->index('created_at');
            $table->index('updated_at');
            $table->index('deleted_at');
            $table->foreign('course_id')->references('id')->on('courses')->onUpdate('cascade')->onDelete('cascade');
            // semester foreign key constraint defined in semester table migration
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('reviews');
    }
}

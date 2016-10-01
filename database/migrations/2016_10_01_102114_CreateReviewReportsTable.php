<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewReportsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review_reports', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('review_id')->unsigned()->index();
            $table->text('body');
            $table->string('ipv4', 15);
            $table->string('email', 60)->nullable();
            $table->integer('user_id')->unsigned()->index()->nullable();
            $table->timestamps();
            $table->timestamp('resolved_at')->index()->nullable();

            $table->foreign('review_id')->references('id')->on('reviews')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('user_id')->references('id')->on('users')->onUpdate('cascade')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('review_reports', function ($table) {
            $table->dropForeign('review_reports_review_id_foreign');
        });
        Schema::table('review_reports', function ($table) {
            $table->dropForeign('review_reports_user_id_foreign');
        });

        Schema::drop('review_reports');
    }
}

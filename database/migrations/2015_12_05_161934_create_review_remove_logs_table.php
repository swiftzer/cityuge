<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewRemoveLogsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review_remove_logs', function (Blueprint $table) {
            $table->increments('id')->unsigned();
            $table->integer('review_id')->unsigned()->index();
            $table->integer('removed_by')->unsigned()->index();
            $table->text('reason_zh')->nullable();
            $table->text('reason_en')->nullable();
            $table->date('requested_at')->nullable();
            $table->timestamps();

            $table->index('created_at');
            $table->foreign('review_id')->references('id')->on('reviews')->onUpdate('cascade')->onDelete('cascade');
            $table->foreign('removed_by')->references('id')->on('users')->onUpdate('cascade')->onDelete('restrict');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('review_remove_logs');
    }
}

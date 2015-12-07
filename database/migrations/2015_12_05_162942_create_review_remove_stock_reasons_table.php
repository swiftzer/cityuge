<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateReviewRemoveStockReasonsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('review_remove_stock_reasons', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title_zh', 200);
            $table->string('title_en', 200);
            $table->text('reason_zh')->nullable();
            $table->text('reason_en')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('review_remove_stock_reasons');
    }
}

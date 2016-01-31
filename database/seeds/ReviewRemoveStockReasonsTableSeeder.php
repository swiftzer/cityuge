<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ReviewRemoveStockReasonsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('review_remove_stock_reasons')->insert([
            ['title' => '方丈', 'reason_zh' => '應該課程導師要求刪除', 'reason_en' => 'As per request from the course instructor'],
            ['title' => '重覆', 'reason_zh' => '重覆發文', 'reason_en' => 'Repeating post'],
        ]);
    }
}

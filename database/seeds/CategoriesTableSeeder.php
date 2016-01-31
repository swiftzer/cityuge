<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CategoriesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->insert([
            ['id' => 1, 'slug' => 'area-1', 'title_en' => 'Area 1', 'title_zh' => 'Area 1',],
            ['id' => 2, 'slug' => 'area-2', 'title_en' => 'Area 2', 'title_zh' => 'Area 2',],
            ['id' => 3, 'slug' => 'area-3', 'title_en' => 'Area 3', 'title_zh' => 'Area 3',],
            ['id' => 4, 'slug' => 'university-requirements', 'title_en' => 'University Requirements', 'title_zh' => '大學必修',],
            ['id' => 5, 'slug' => 'foundation', 'title_en' => 'Foundation', 'title_zh' => '補底班',],
        ]);
    }
}

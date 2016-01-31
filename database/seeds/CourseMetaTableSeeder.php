<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseMetaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('course_meta')->insert([
            array('course_id' => '1', 'meta_key' => 'youtube', 'meta_value' => 'IDR0UF_kSig'),
            array('course_id' => '2', 'meta_key' => 'youtube', 'meta_value' => 'UC1Cyzg702M'),
            array('course_id' => '3', 'meta_key' => 'youtube', 'meta_value' => 'kdC35cocGrE'),
            array('course_id' => '4', 'meta_key' => 'youtube', 'meta_value' => 'beOaakUSBqw'),
            array('course_id' => '5', 'meta_key' => 'youtube', 'meta_value' => 'ui181D0xBB0'),
            array('course_id' => '6', 'meta_key' => 'youtube', 'meta_value' => 'OuDOzf2piPg'),
            array('course_id' => '7', 'meta_key' => 'youtube', 'meta_value' => 'zW7p1iRS3kQ'),
            array('course_id' => '8', 'meta_key' => 'website', 'meta_value' => '{"title_zh":"課程網頁","title_en":"Course website","url":"http://www.cityu.edu.hk/edge/ge/"}'),
            array('course_id' => '8', 'meta_key' => 'facebook', 'meta_value' => 'ge1101'),
            array('course_id' => '9', 'meta_key' => 'youtube', 'meta_value' => '52bf758KdDg'),
            array('course_id' => '10', 'meta_key' => 'youtube', 'meta_value' => 'vSD-loychxE'),
            array('course_id' => '13', 'meta_key' => 'youtube', 'meta_value' => 'Su6epit8yYw'),
            array('course_id' => '14', 'meta_key' => 'youtube', 'meta_value' => '1lE15hutdLY'),
            array('course_id' => '16', 'meta_key' => 'youtube', 'meta_value' => 'hMVtjrkQY9w'),
            array('course_id' => '20', 'meta_key' => 'youtube', 'meta_value' => 'M5gSFsUOybs'),
            array('course_id' => '23', 'meta_key' => 'youtube', 'meta_value' => 'rbvb2bcd9bc'),
            array('course_id' => '24', 'meta_key' => 'youtube', 'meta_value' => 'rVBsfQx_USE'),
            array('course_id' => '25', 'meta_key' => 'youtube', 'meta_value' => '5YRWNssSn9w'),
            array('course_id' => '26', 'meta_key' => 'youtube', 'meta_value' => 'RBEowbIzH_8'),
            array('course_id' => '53', 'meta_key' => 'youtube', 'meta_value' => 'gAOdJ8EkWfs'),
            array('course_id' => '54', 'meta_key' => 'youtube', 'meta_value' => '6s4Y4kXZpXA'),
            array('course_id' => '56', 'meta_key' => 'youtube', 'meta_value' => 'w5OnhChsd70'),
            array('course_id' => '57', 'meta_key' => 'youtube', 'meta_value' => 'DZyEDs9exqQ'),
            array('course_id' => '65', 'meta_key' => 'youtube', 'meta_value' => 'dwmhzE2D6j8'),
            array('course_id' => '68', 'meta_key' => 'youtube', 'meta_value' => 'qVJhNjfs_w8'),
            array('course_id' => '69', 'meta_key' => 'youtube', 'meta_value' => 'uZafytyvl94'),
            array('course_id' => '71', 'meta_key' => 'youtube', 'meta_value' => 'E6Zlom3lqrA'),
            array('course_id' => '72', 'meta_key' => 'youtube', 'meta_value' => 'jUfQ7S7YjYA'),
            array('course_id' => '73', 'meta_key' => 'youtube', 'meta_value' => 'IWUFRY0t_6A'),
            array('course_id' => '74', 'meta_key' => 'youtube', 'meta_value' => 'dlyVUzXWksk'),
            array('course_id' => '76', 'meta_key' => 'youtube', 'meta_value' => 'yjNDLu44wuw'),
            array('course_id' => '81', 'meta_key' => 'youtube', 'meta_value' => '2KtRbzJTflM'),
            array('course_id' => '119', 'meta_key' => 'youtube', 'meta_value' => 'XHFUAPaoll0'),
            array('course_id' => '120', 'meta_key' => 'youtube', 'meta_value' => 'gN-k1VNqS9A'),
            array('course_id' => '121', 'meta_key' => 'youtube', 'meta_value' => 'whsVcgZM6sw'),
            array('course_id' => '124', 'meta_key' => 'youtube', 'meta_value' => 'd_cRyivxMPQ'),
            array('course_id' => '126', 'meta_key' => 'youtube', 'meta_value' => 'YtQTEvhhvZM'),
            array('course_id' => '134', 'meta_key' => 'youtube', 'meta_value' => '6KSDN6-MR3o'),
            array('course_id' => '135', 'meta_key' => 'youtube', 'meta_value' => 'NbCnB4S9Irw'),
            array('course_id' => '138', 'meta_key' => 'youtube', 'meta_value' => '32-YjqA6YJA'),
            array('course_id' => '139', 'meta_key' => 'youtube', 'meta_value' => 'GgmVHYM3-fw'),
            array('course_id' => '142', 'meta_key' => 'youtube', 'meta_value' => 'nTrcQeq_0H4')
        ]);
    }
}

<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SemestersTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('semesters')->insert([
            ['id' => 1, 'semester' => '1112A', 'title' => '2011/12 Sem A', 'is_enabled' => 1, 'started_at' => '2011-08-29 00:00:00', 'ended_at' => '2012-01-07 23:59:59', 'promo_stared_at' => '0000-00-00 00:00:00', 'promo_ended_at' => '0000-00-00 00:00:00', 'grade_released_from' => '0000-00-00 00:00:00'],
            ['id' => 2, 'semester' => '1112B', 'title' => '2011/12 Sem B', 'is_enabled' => 1, 'started_at' => '2012-01-09 00:00:00', 'ended_at' => '2012-06-02 23:59:59', 'promo_stared_at' => '0000-00-00 00:00:00', 'promo_ended_at' => '0000-00-00 00:00:00', 'grade_released_from' => '0000-00-00 00:00:00'],
            ['id' => 3, 'semester' => '1112S', 'title' => '2011/12 Summer', 'is_enabled' => 1, 'started_at' => '2012-06-04 00:00:00', 'ended_at' => '2012-09-01 23:59:59', 'promo_stared_at' => '0000-00-00 00:00:00', 'promo_ended_at' => '0000-00-00 00:00:00', 'grade_released_from' => '0000-00-00 00:00:00'],

            ['id' => 4, 'semester' => '1213A', 'title' => '2012/13 Sem A', 'is_enabled' => 1, 'started_at' => '2012-09-03 00:00:00', 'ended_at' => '2013-01-12 23:59:59', 'promo_stared_at' => '0000-00-00 00:00:00', 'promo_ended_at' => '0000-00-00 00:00:00', 'grade_released_from' => '0000-00-00 00:00:00'],
            ['id' => 5, 'semester' => '1213B', 'title' => '2012/13 Sem B', 'is_enabled' => 1, 'started_at' => '2013-01-14 00:00:00', 'ended_at' => '2013-06-08 23:59:59', 'promo_stared_at' => '0000-00-00 00:00:00', 'promo_ended_at' => '0000-00-00 00:00:00', 'grade_released_from' => '0000-00-00 00:00:00'],
            ['id' => 6, 'semester' => '1213S', 'title' => '2012/13 Summer', 'is_enabled' => 1, 'started_at' => '2013-06-10 00:00:00', 'ended_at' => '2013-08-31 23:59:59', 'promo_stared_at' => '0000-00-00 00:00:00', 'promo_ended_at' => '0000-00-00 00:00:00', 'grade_released_from' => '0000-00-00 00:00:00'],

            ['id' => 7, 'semester' => '1314A', 'title' => '2013/14 Sem A', 'is_enabled' => 1, 'started_at' => '2013-09-02 00:00:00', 'ended_at' => '2014-01-11 23:59:59', 'promo_stared_at' => '0000-00-00 00:00:00', 'promo_ended_at' => '0000-00-00 00:00:00', 'grade_released_from' => '0000-00-00 00:00:00'],
            ['id' => 8, 'semester' => '1314B', 'title' => '2013/14 Sem B', 'is_enabled' => 1, 'started_at' => '2014-01-13 00:00:00', 'ended_at' => '2014-06-07 23:59:59', 'promo_stared_at' => '0000-00-00 00:00:00', 'promo_ended_at' => '0000-00-00 00:00:00', 'grade_released_from' => '0000-00-00 00:00:00'],
            ['id' => 9, 'semester' => '1314S', 'title' => '2013/14 Summer', 'is_enabled' => 1, 'started_at' => '2014-06-09 00:00:00', 'ended_at' => '2014-08-30 23:59:59', 'promo_stared_at' => '0000-00-00 00:00:00', 'promo_ended_at' => '0000-00-00 00:00:00', 'grade_released_from' => '0000-00-00 00:00:00'],

            ['id' => 10, 'semester' => '1415A', 'title' => '2014/15 Sem A', 'is_enabled' => 1, 'started_at' => '2014-09-01 00:00:00', 'ended_at' => '2015-01-10 23:59:59', 'promo_stared_at' => '0000-00-00 00:00:00', 'promo_ended_at' => '0000-00-00 00:00:00', 'grade_released_from' => '0000-00-00 00:00:00'],
            ['id' => 11, 'semester' => '1415B', 'title' => '2014/15 Sem B', 'is_enabled' => 1, 'started_at' => '2015-01-12 00:00:00', 'ended_at' => '2015-06-06 23:59:59', 'promo_stared_at' => '0000-00-00 00:00:00', 'promo_ended_at' => '0000-00-00 00:00:00', 'grade_released_from' => '0000-00-00 00:00:00'],
            ['id' => 12, 'semester' => '1415S', 'title' => '2014/15 Summer', 'is_enabled' => 1, 'started_at' => '2015-06-08 00:00:00', 'ended_at' => '2015-08-29 23:59:59', 'promo_stared_at' => '0000-00-00 00:00:00', 'promo_ended_at' => '0000-00-00 00:00:00', 'grade_released_from' => '0000-00-00 00:00:00'],

            ['id' => 13, 'semester' => '1516A', 'title' => '2015/16 Sem A', 'is_enabled' => 1, 'started_at' => '2015-08-31 00:00:00', 'ended_at' => '2016-01-09 23:59:59', 'promo_stared_at' => '0000-00-00 00:00:00', 'promo_ended_at' => '0000-00-00 00:00:00', 'grade_released_from' => '0000-00-00 00:00:00'],
            ['id' => 14, 'semester' => '1516B', 'title' => '2015/16 Sem B', 'is_enabled' => 1, 'started_at' => '2016-01-11 00:00:00', 'ended_at' => '2016-06-04 23:59:59', 'promo_stared_at' => '0000-00-00 00:00:00', 'promo_ended_at' => '0000-00-00 00:00:00', 'grade_released_from' => '0000-00-00 00:00:00'],
            ['id' => 15, 'semester' => '1516S', 'title' => '2015/16 Summer', 'is_enabled' => 1, 'started_at' => '2016-06-06 00:00:00', 'ended_at' => '2016-08-27 23:59:59', 'promo_stared_at' => '0000-00-00 00:00:00', 'promo_ended_at' => '0000-00-00 00:00:00', 'grade_released_from' => '2016-08-16 09:00:00'],

            ['id' => 16, 'semester' => '1617A', 'title' => '2016/17 Sem A', 'is_enabled' => 1, 'started_at' => '2015-08-29 00:00:00', 'ended_at' => '2017-01-07 23:59:59', 'promo_stared_at' => '2016-07-25 00:00:00', 'promo_ended_at' => '2016-09-05 23:59:59', 'grade_released_from' => '2016-12-20 09:00:00'],
            ['id' => 17, 'semester' => '1617B', 'title' => '2016/17 Sem B', 'is_enabled' => 1, 'started_at' => '2017-01-19 00:00:00', 'ended_at' => '2017-06-03 23:59:59', 'promo_stared_at' => '2016-11-28 00:00:00', 'promo_ended_at' => '2017-01-16 23:59:59', 'grade_released_from' => '2017-05-26 09:00:00'],
            ['id' => 18, 'semester' => '1617S', 'title' => '2016/17 Summer', 'is_enabled' => 1, 'started_at' => '2017-06-05 00:00:00', 'ended_at' => '2017-09-02 23:59:59', 'promo_stared_at' => '2017-04-24 00:00:00', 'promo_ended_at' => '2017-06-12 23:59:59', 'grade_released_from' => '2017-08-15 09:00:00'],
        ]);
    }
}

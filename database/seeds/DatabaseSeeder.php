<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Model::unguard();

        // $this->call(UserTableSeeder::class);
        $this->call(CategoriesTableSeeder::class);
        $this->call(DepartmentsTableSeeder::class);
        $this->call(CoursesTableSeeder::class);
        $this->call(CategoryCourseSeeder::class);
        $this->call(CourseMetaTableSeeder::class);
        $this->call(CourseAimsStatsTableSeeder::class);
        $this->call(OfferingsTableSeeder::class);
        $this->call(ReviewsTableSeeder::class);
        $this->call(ReviewRemoveStockReasonsTableSeeder::class);

        Model::reguard();
    }
}

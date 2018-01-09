<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class UserTableSeeder extends Seeder
{

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'email' => 'foo@bar.com',
                'password' => Hash::make('12345678'),
                'name' => 'Foo Bar',
            ],
            [
                'email' => 'john@foo.com',
                'password' => Hash::make('12345678'),
                'name' => 'John Doe',
            ]
        ]);
    }
}

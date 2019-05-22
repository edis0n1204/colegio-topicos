<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call([
            CoursesTableSeeder::class,
            ParentsTableSeeder::class,
            MattersTableSeeder::class,
            StudentsTableSeeder::class,
            SchedulesTableSeeder::class,
            AttendancesTableSeeder::class
        ]);
    }
}

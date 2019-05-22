<?php

use Illuminate\Database\Seeder;

class CoursesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('courses')->insert([
            'name' => '1ro',
            'parallel' =>'A',
            'section' => 'Primaria',
        ]);
        DB::table('courses')->insert([
            'name' => '2do',
            'parallel' =>'A',
            'section' => 'Primaria',
        ]);
        DB::table('courses')->insert([
            'name' => '3ro',
            'parallel' =>'A',
            'section' => 'Primaria',
        ]);
        DB::table('courses')->insert([
            'name' => '4to',
            'parallel' =>'A',
            'section' => 'Primaria',
        ]);
    }
}

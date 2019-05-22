<?php

use Illuminate\Database\Seeder;

class StudentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'name' => 'Juan Junior Perez',
            'picture' => 'https://cdn.pixabay.com/photo/2016/09/01/10/23/image-1635747_960_720.jpg',
            'padre_id' => 1,
            'curso_id' => 1,
        ]);
        DB::table('students')->insert([
            'name' => 'Saturnino Perez',
            'picture' => 'https://cdn.pixabay.com/photo/2016/09/01/10/23/image-1635747_960_720.jpg',
            'padre_id' => 1,
            'curso_id' => 3,
        ]);
    }
}

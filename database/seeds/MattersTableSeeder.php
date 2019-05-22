<?php

use Illuminate\Database\Seeder;

class MattersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('matters')->insert([
            'name' => 'matematicas',
        ]);
        DB::table('matters')->insert([
            'name' => 'lenguaje',
        ]);
        DB::table('matters')->insert([
            'name' => 'educacion fisica',
        ]);
    }
}

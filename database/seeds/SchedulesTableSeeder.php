<?php

use Illuminate\Database\Seeder;

class SchedulesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('schedules')->insert([
            'materia_id' => 1,
            'curso_id' => 1,
            'hora_inicio' => '14:00',
            'hora_fin' => '16:00',
            'dias' => 'Lunes'
        ]);
        DB::table('schedules')->insert([
            'materia_id' => 1,
            'curso_id' => 3,
            'hora_inicio' => '14:00',
            'hora_fin' => '16:00',
            'dias' => 'Lunes'
        ]);
    }
}

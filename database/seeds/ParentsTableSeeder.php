<?php

use Illuminate\Database\Seeder;

class ParentsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('parents')->insert([
            'full_name' => 'Juan Perez',
            'token_fcm' =>'A',
            'user' => 'padre1',
            'pass' => 'adminadmin'
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('teachers')->insert([
            'name' => 'Syed',
            'password' => '123'
        ]);

        DB::table('teachers')->insert([
            'name' => 'Syfuzzaman',
            'password' => '123'
        ]);
    }
}

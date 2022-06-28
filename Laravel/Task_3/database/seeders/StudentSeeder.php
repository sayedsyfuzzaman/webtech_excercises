<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('students')->insert([
            'name' => 'Sazin',
            'password' => '123'
        ]);

        DB::table('students')->insert([
            'name' => 'Ador',
            'password' => '123'
        ]);
    }
}

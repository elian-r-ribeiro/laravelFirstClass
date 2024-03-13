<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class StudentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('student')->insert([
            'name' => 'Elian Rodrigues Ribeiro',
            'dateOfBirth' => "2004-05-15",
            'email' => "elianrodriguesribeiro@gmail.com",
            'registrationNumber' => "1",
            'classCourse' => "Eng. de Software",
        ]);
    }
}

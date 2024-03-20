<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('contacts') -> insert ([
            'name' => 'João Silva',
            'email' => 'joao@gmail.com',
            'phoneNumber' => '(00) 0000-0000',
            'birthDate' => '1990-05-15'
        ]);
    }
}

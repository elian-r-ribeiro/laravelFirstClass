<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Crypt;

class ContactsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('contacts') -> insert ([
            'name' => Crypt::encryptString('Max Steel'),
            'email' => Crypt::encryptString('pomba@gmail.com'),
            'phoneNumber' => Crypt::encryptString('(99) 9999-9999'),
            'birthDate' => Crypt::encryptString('1671-01-23')
        ]);
    }
}

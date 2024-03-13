<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class LibrarySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('library')->insert([
            'title' => 'Eragon',
            'authorPublisher' => 'Elian',
            'publicationDate' => '2024-03-12',
            'genreType' => 'Adventure',
            'availableCopies' => 12,
        ]);
    }
}

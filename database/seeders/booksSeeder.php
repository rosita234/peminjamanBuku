<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\books;

class booksSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        books::insert([
            [
                'title' => 'The Great Gatsby',
                'author' => 'F. Scott Fitzgerald',
                'publiser' => 'Charles Scribners Sons',
                'year_published' => 1925,
                'stock' => 10,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'To Kill a Mockingbird',
                'author' => 'Harper Lee',
                'publiser' => 'J.B. Lippincott & Co.',
                'year_published' => 1960,
                'stock' => 7,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => '1984',
                'author' => 'George Orwell',
                'publiser' => 'Secker & Warburg',
                'year_published' => 1949,
                'stock' => 5,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'The Talented Mr. Ripley',
                'author' => 'Patricia Highsmith',
                'publiser' => 'W. W. Norton & Company',
                'year_published' => 1955,
                'stock' => 8,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'title' => 'Where the Crawdads Sings',
                'author' => 'Delia Owens',
                'publiser' => 'G.P. Putnams Sons',
                'year_published' => 2018,
                'stock' => 15,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\loans;
use App\Models\books;
use App\Models\members;

class loansSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Retrieve sample member and book IDs
        $memberIds = Members::pluck('id')->toArray();
        $bookIds = Books::pluck('id')->toArray();

        // Insert 5 sample loan records
        Loans::insert([
            [
                'member_id' => $memberIds[array_rand($memberIds)],
                'book_id' => $bookIds[array_rand($bookIds)],
                'borrow_date' => now()->subDays(10),
                'return_date' => now()->addDays(5),
                'status' => 'borrowed',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'member_id' => $memberIds[array_rand($memberIds)],
                'book_id' => $bookIds[array_rand($bookIds)],
                'borrow_date' => now()->subDays(20),
                'return_date' => now()->addDays(10),
                'status' => 'returned',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'member_id' => $memberIds[array_rand($memberIds)],
                'book_id' => $bookIds[array_rand($bookIds)],
                'borrow_date' => now()->subDays(5),
                'return_date' => now()->addDays(7),
                'status' => 'borrowed',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'member_id' => $memberIds[array_rand($memberIds)],
                'book_id' => $bookIds[array_rand($bookIds)],
                'borrow_date' => now()->subDays(15),
                'return_date' => now(),
                'status' => 'returned',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'member_id' => $memberIds[array_rand($memberIds)],
                'book_id' => $bookIds[array_rand($bookIds)],
                'borrow_date' => now()->subDays(3),
                'return_date' => now()->addDays(10),
                'status' => 'borrowed',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

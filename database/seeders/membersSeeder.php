<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\members;

class membersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Members::insert([
            [
                'name' => 'Alice Johnson',
                'address' => '123 Main St, Springfield',
                'email' => 'alice@example.com',
                'phone' => '1234567890',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Bob Smith',
                'address' => '456 Elm St, Riverside',
                'email' => 'bob@example.com',
                'phone' => '0987654321',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Carol Williams',
                'address' => '789 Oak St, Greenfield',
                'email' => 'carol@example.com',
                'phone' => '5551234567',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'David Brown',
                'address' => '101 Maple Ave, Hilltown',
                'email' => 'david@example.com',
                'phone' => '5557654321',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'name' => 'Eve White',
                'address' => '202 Pine St, Lakeview',
                'email' => 'eve@example.com',
                'phone' => '5559876543',
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}

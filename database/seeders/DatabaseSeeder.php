<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UniversitySeeder::class,
            StudentSeeder::class,
            OrganizationSeeder::class,
            ProductSeeder::class,
            CartSeeder::class,
            TransactionHeaderSeeder::class,
            TransactionDetailSeeder::class
        ]);
    }
}

<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // mi richiama tutti i seeder che ho qui dentro 
       $this->call([
        PostSeeder::class,
        UsersSeeder::class
       ]);                   
    }
}

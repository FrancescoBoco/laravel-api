<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use App\Models\User;
class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
       
        User::truncate();   

       
            // Uso il mass asigment 
            $name = 'Francesco Boco';
            $email = 'fra.boco@boolean.com';
            $password = 'ciaociao';

            User::create([
                'name' => $name,
                'email' => $email,
                'password' => $password,
            ]);
    }
}

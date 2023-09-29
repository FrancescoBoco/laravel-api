<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


// Model 
use App\Models\Post;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run():void
    {

        Post::truncate();   

        for ($i=0; $i < 20; $i++) { 
            // Uso il mass asigment 
            $title = fake()->sentence();
            $slug = str()->slug($title);
            $content = fake()->paragraph();
            

            Post::create([
                'title' => $title,
                'slug' => $slug,
                'content' => $content,
                // 'img' => fake()->image(storage_path('app/public/upload/posts'), 480 ,480 ,'post' ,false)
             ]);
        }
    }
}

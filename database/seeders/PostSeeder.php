<?php 
namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

// Models
use App\Models\Post;

// Helpers
use Illuminate\Support\Facades\Storage;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Post::truncate();

        if (Storage::disk('public')->exists('uploads/posts')) {
            Storage::disk('public')->deleteDirectory('uploads/posts');
        }
        Storage::disk('public')->makeDirectory('uploads/posts');

        for ($i = 0; $i < 30; $i++) {
            $title = fake()->words(rand(1, 6), true);
            $slug = str()->slug($title);
            $content = fake()->paragraph();

            $imgPath = null;
            if (fake()->boolean()) {
                $imgPath = fake()->image(storage_path('app/public/uploads/posts'), 480, 480, 'post', false);
               

                if ($imgPath && $imgPath != '') {
                    $imgPath = 'uploads/posts/'.$imgPath;
                }
                else {
                    $imgPath = null;
                }
                
            }

            Post::create([
                'title' => $title,
                'slug' => $slug,
                'content' => $content,
                'img' => $imgPath,
            ]);
        }
    }
}

/*

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;


// Model 
use App\Models\Post;

// Helper
use Illuminate\Support\Facades\Storage;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    /*
    public function run():void
    {

        Post::truncate(); 
        
        if(storage::disk('public')->exists('upload/posts')){
            storage::disk('public')->deleteDirectory('upload/posts');
        }
        storage::disk('public')->makeDirectory('upload/posts');

        for ($i=0; $i < 20; $i++) { 
            // Uso il mass asigment 
            $title = fake()->sentence();
            $slug = str()->slug($title);
            $content = fake()->paragraph();
            $img = fake()->image(storage_path('app/public/upload/posts'), 480 ,480 ,'post' ,false);
            

            Post::create([
                'title' => $title,
                'slug' => $slug,
                'content' => $content,
                'img' => $img
                
             ]);
        }
    }
} */


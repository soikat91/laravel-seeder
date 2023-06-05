<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //way-1// single data insert korar jnnno php artisan db:seed --class=PostSeeder
       // Post::factory(5)->create();

        //way:3//custom data insert
        
        Post::create([
            'title'=>"post two",
            'slug'=>"post-two",
            'description'=>"description two",
            'excerpt'=>"excerpt on two",
            'is_published'=>false,
            'min_to_read'=>3
        ]);
    }
}

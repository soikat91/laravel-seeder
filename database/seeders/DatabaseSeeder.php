<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Post;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {   
        //way-2
        //database seeder use kore data entry kora hy
       // Post::factory(5)->create();

    //    way-3
       $this->call([PostSeeder::class]);
    }
}

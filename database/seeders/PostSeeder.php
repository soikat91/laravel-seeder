<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\File;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {   //tinker command diye data insert kra jy php artisan tinker //App\Models\Post::factory(5)->create()
        //way-1// single data insert korar jnnno php artisan db:seed --class=PostSeeder
       // Post::factory(5)->create();

        //way:3//custom data insert
        // Post::create([            
        //     'title'=>"post two",
        //     'slug'=>"post-two",
        //     'description'=>"description two",
        //     'excerpt'=>"excerpt on two",
        //     'is_published'=>false,
        //     'min_to_read'=>3           
        // ]);


        // $posts=collect([
        //     [
        //     'title'=>"post two",
        //     'slug'=>"post-two",
        //     'description'=>"description two",
        //     'excerpt'=>"excerpt on two",
        //     'is_published'=>false,
        //     'min_to_read'=>3
        //     ],

        //     [
        //         'title'=>"post three",
        //         'slug'=>"post-three",
        //         'description'=>"description three",
        //         'excerpt'=>"excerpt on three",
        //         'is_published'=>false,
        //         'min_to_read'=>3
        //     ],
        // ]);

        // //dd($posts);
        // $posts->each(function($post){

        //   //  Post::insert($post);//insert dile create_at and updated_at null thake amra create use korle date insert hy na
        //      Post::create($post);
        
        // });



        //way 4 insert data

        $post=File::get('database/json/post.json');
        $posts=collect(json_decode($post));
        // dd($posts);
        $posts->each(function($post){

            Post::create([

                'title'=>$post->title,
                'slug'=>$post->slug,
                'description'=>$post->description,
                'excerpt'=>$post->excerpt,
                'is_published'=>$post->is_published,
                'min_to_read'=>$post->min_to_read 
            ]);        
          

        });
    
    }
}

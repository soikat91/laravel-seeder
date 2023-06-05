<?php

namespace Database\Factories;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Model>
 */
class PostFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {

        $title=fake()->sentence;
        $slug=Str::slug($title,'-');

        return [
            
            'title'=>$title,
            'slug'=>$slug,
            'description'=>fake()->sentence,
            'excerpt'=>fake()->sentence,
            'is_published'=>fake()->boolean,
            'min_to_read'=>fake()->randomDigit()
            
        ];
    }
}

<?php

namespace Database\Factories;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Post>
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
        return [
            'title' => fake()->sentence(6), //tambah param false = harus 6 kata yang digenerate
            'slug' => Str::slug(fake()->sentence(6)),
            'author_id' => User::factory(),
            'body' => fake()->text()
        ];
    }
}

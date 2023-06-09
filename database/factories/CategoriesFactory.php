<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Categories>
 */
class CategoriesFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->$faker->word,
            'slug' => Str::slug($this->$faker->unique()->word),
            'active' => $this->$faker->boolean,
            'created_at' => now(),
            'parent_category_id' => null, 
        ];
    }
}

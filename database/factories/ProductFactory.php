<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Faker\Generator as Faker;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
         return [
            'name' => $this->faker->name,
            'slug' => Str::slug($this->faker->unique()->name),
            'description' => $this->faker->text,
            'created_at' => now(),
            'updated_at' => now(),
            'price' => $this->faker->randomFloat(2, 1, 100),
            'image' => $this->faker->imageUrl(),
            'stock_quantity' => $this->faker->numberBetween(1, 100),
        ];
    }
}

<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

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
    public function definition(): array
    {
        return [
            'product_name' => fake()->text(50),
            'description' => fake()->text(350),
            'features' => fake()->text(350),
            'length' => fake()->numberBetween(0, 10),
            'Width' => fake()->numberBetween(0, 10),
            'thickness' => fake()->numberBetween(0, 10),
            'rocker' => fake()->numberBetween(0, 10),
            'review' => fake()->numberBetween(0, 5),
            'price'  => fake()->randomFloat(2,100,1000),
            'review_number'  => fake()->randomNumber(3, false)
        ];
    }
}

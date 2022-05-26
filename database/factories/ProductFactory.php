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
    public function definition()
    {
        return [
            'category_id' => $this->faker->numberBetween(1,10),
            'name' => $this->faker->word,
            'description' => $this->faker->sentence,
            'amount' => $this->faker->numberBetween(1, 10),
            'price' => $this->faker->numberBetween(1000, 10000),
            'image' => 'https://source.unsplash.com/300x3'.$this->faker->numberBetween(0, 99) . '?fruit',
        ];
    }
}

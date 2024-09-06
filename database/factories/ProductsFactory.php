<?php

namespace Database\Factories;

use App\Models\Products;
use App\Models\Stores;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\products>
 */
class ProductsFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => $this->faker->word,
            'slug' => $this->faker->slug,
            'price' => $this->faker->randomFloat(2, 10, 1000),
            'description' => $this->faker->paragraph,
            'photo' => $this->faker->imageUrl(640, 480, 'products', true),
            'store_id' => Stores::inRandomOrder()->first()->id,
        ];
    }
}

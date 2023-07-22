<?php

namespace Database\Factories;

use App\Models\Category;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'category_id' => Category::factory(),
            'name' => fake()->lastName(),
            'price' => '1.500.000 so\'m',
            'content' => 'Eng sifatli va arzon narxlarda',
            'image' => 'photo.png',
        ];
    }
}

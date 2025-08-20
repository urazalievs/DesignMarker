<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Product>
 */
class ProductFactory extends Factory
{
    public function definition(): array
    {
        return [
            'category_id' => rand(1, 5),
            'name' => [
                'uz' => fake()->sentence(3),
                'ru' => 'Мультифункциональный товар '
            ],
            'price' => rand(50000, 10000000),
            'description' => [
                'uz' => fake()->paragraph(5),
                'ru' => "Многофункциональное описание товара, которое может быть использовано для различных целей. Этот товар отличается высоким качеством и доступной ценой.",
            ],
        ];
    }
}

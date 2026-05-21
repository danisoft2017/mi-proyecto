<?php

namespace Database\Factories;

use App\Models\Model;
use App\Models\Producto;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Model>
 */
class ProductosFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nombre' => fake()->word(),
            'precio' => fake()->randomFloat(2, 1, 100),
            'stock' => fake()->numberBetween(0, 100),
        ];
    }
}

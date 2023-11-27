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
            "product_name" => $this->faker->name,
            "product_description" => $this->faker->text,
            "product_price" => $this->faker->randomFloat(2, 1, 100),
            "product_stock" => $this->faker->numberBetween(1, 100),
            "product_status" => $this->faker->randomElement(["available", "unavailable"]),
            "fk_category_id" => $this->faker->numberBetween(1, 5),
            "slug" => $this->faker->slug,

        ];
    }
}

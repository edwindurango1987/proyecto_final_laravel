<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
protected $model = \App\Models\Image::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
            $fileName = $this->faker->numberBetween(1, 10) . '.jpg';

        return [
            'path' => "images/products/{$fileName}",
            
        ];
    }
}

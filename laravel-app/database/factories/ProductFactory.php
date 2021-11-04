<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{

    public function definition()
    {
        return [
            'name' => $this->faker->title(191),
            'description' => $this->faker->text(),
            'product_category_id' => rand(1,3),
            'price' => $this->faker->numerify(),
            'stock' => $this->faker->numerify(),
            'stock_defective' => $this->faker->numerify(),
            'created_at' => now()
        ];
    }
}

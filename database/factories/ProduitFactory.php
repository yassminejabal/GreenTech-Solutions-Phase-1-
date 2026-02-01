<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Produit>
 */
class ProduitFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name'=>$this->faker->text(),
            'description'=>$this->faker->sentence(),
            'prix'=>$this->faker->randomFloat(2, 0, 1000),
            'image_url'=>$this->faker->imageUrl(),
            'stock'=>$this->faker->randomFloat(),
            'categorie_id'=>$this->faker->numberBetween()
        ];
    }
}   
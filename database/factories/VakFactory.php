<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Vak>
 */
class VakFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
{
    return [
        'naam' => $this->faker->word(),
        'beschrijving' => $this->faker->sentence(),
        'docent_id' => \App\Models\Docent::factory(),
    ];
}

}

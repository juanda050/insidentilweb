<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Insident>
 */
class InsidentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama_website' => fake()->word(),
            'link_website' => fake()->word(8),
            'tanggal_kejadian' => fake()->date(),
            'peretas' => fake()->name(),
            'deskripsi' => fake()->word(5),
        ];
    }
}

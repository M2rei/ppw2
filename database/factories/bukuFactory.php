<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\buku>
 */
class bukuFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'judul' =>$this->faker->randomElement(['buku_baru', 'buku_jadul']),
            'penulis' =>$this->faker->name(),
            'harga' =>$this->faker->randomElement([50000, 100000, 1500000]),
            'tgl_terbit' =>$this->faker->date()
        ];
    }
}

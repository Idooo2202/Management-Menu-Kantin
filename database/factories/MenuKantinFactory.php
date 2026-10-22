<?php

namespace Database\Factories;

use App\Models\MenuKantin;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<MenuKantin>
 */
class MenuKantinFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kode_menu' => $this->faker->unique()->regexify('[A-Z]{3}[0-9]{3}'),
            'nama_menu' => $this->faker->word(),
            'harga' => $this->faker->randomFloat(2, 1000, 100000),
            'keterangan' => $this->faker->sentence(),
            'kategori' => $this->faker->randomElement(['Makanan', 'Minuman', 'Snack']),
            'stok' => $this->faker->numberBetween(0, 100),
            'status' => $this->faker->randomElement(['tersedia', 'habis']),
        ];
    }
}

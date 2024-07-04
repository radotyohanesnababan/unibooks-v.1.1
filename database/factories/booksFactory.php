<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\books;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\books>
 */
class booksFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = books::class;
    public function definition()
    {
        $publisher = [1,2,3];
        return [
            'judul' => fake()->sentence(3),
            'penulis'=> fake()->name(),
            'id_penerbit'=>fake()->randomElement($publisher),
            'tahun_terbit'=>fake()->year(),
            'genre'=>fake()->sentence(1),
            'deskripsi'=>fake()->sentence(6),
            'stok'=>fake()->numberBetween(1, 10),
            'isbn'=>fake()->isbn13()
        ];
    }
}

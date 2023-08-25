<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Artikel;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Artikel>
 */
class ArtikelFactory extends Factory
{
    protected $model = Artikel::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'judul' => $this->faker->sentence,
            'judul_seo' => $this->faker->unique()->slug,
            'artikel' => $this->faker->paragraphs(3, true),
            'gambar' => $this->faker->imageUrl(),
        ];
    }
}

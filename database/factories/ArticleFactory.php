<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Article>
 */
class ArticleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $title = $this->faker->sentence(6, true);
        return [
            'title' => $this->faker->sentence(),
            'slug' => Str::slug($title),
            'photo' => $this->faker->optional()->imageUrl(640, 480, 'articles', true, 'Faker'),
            'auteur' => $this->faker->name(),
            'content' => $this->faker->paragraphs(3, true),
        ];
    }
}

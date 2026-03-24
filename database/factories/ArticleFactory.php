<?php

namespace Database\Factories;

use App\Models\Article;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Str;

/**
 * @extends Factory<Article>
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

        $faker = fake('ru_RU');

        $titles = require(base_path('/config/articles.php'));

        $title = $faker->randomElement($titles);

        return [
            'title' => $title,
            'content' => $faker->realText(800),
            'slug' => Str::slug($title) . '-' . $faker->unique()->numberBetween(1, 9999),
            'views_count' => $faker->numberBetween(0, 5000),
            'image' => $faker->optional()->imageUrl(640, 480, 'city', true),
            'is_featured' => $faker->boolean(10),
        ];
    }
}

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

    $faker = $this->faker;

    $titles = require(base_path('/database/seeders/data/articles.php'));

    $images = require(base_path('/database/seeders/data/images_for_articles.php'));

    $image = $faker->randomElement($images);

    $title = $faker->randomElement($titles);

    return [
      'title' => $title,
      'content' => $faker->realText(800),
      'slug' => Str::slug($title) . '-' . $faker->unique()->numberBetween(1, 9999),
      'views_count' => $faker->numberBetween(0, 5000),
      'image' => $image,
      'published_at' => $faker->dateTimeBetween('-6 months', 'now'),
      'is_featured' => $faker->boolean(10),
    ];
  }
}

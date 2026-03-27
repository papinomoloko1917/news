<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Inertia\Inertia;

class ArticleController extends Controller
{
  public function index()
  {


    $paginate_articles = Article::query()
      ->latest('published_at')
      ->paginate(5)
      ->onEachSide(1);

    $paginate_articles->through(fn($article) =>
    [
      'id' => $article->id,
      'title' => $article->title,
      'slug' => $article->slug,
      'image' => $article->image,
      'views_count' => $article->views_count,
      'is_featured' => $article->is_featured,
      'published_at' => $article->published_at,
      'excerpt' => Str::limit(strip_tags($article->content), 250),
    ]);

    return Inertia::render('Article', [
      'paginate_articles' => $paginate_articles
    ]);
  }

  public function show(string $slug)
  {

    $article = Article::query()
      ->where('slug', $slug)
      ->firstOrFail();


    return Inertia::render('ArticleShow', [
      'article' => [
        'id' => $article->id,
        'title' => $article->title,
        'content' => $article->content,
        'slug' => $article->slug,
        'image' => $article->image,
        'views_count' => $article->views_count,
        'is_featured' => $article->is_featured,
        'published_at' => $article->published_at,
      ],
    ]);
  }
}

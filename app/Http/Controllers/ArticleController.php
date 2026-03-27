<?php

namespace App\Http\Controllers;

use App\Models\Article;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ArticleController extends Controller
{
  public function index()
  {
    $paginate_articles = Article::query()
      ->latest('published_at')
      ->paginate(5)
      ->onEachSide(1);

    return Inertia::render('Article', ['paginate_articles' => $paginate_articles]);
  }
}

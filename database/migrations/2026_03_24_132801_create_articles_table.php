<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
  /**
   * Run the migrations.
   */
  public function up(): void
  {
    Schema::create('articles', function (Blueprint $table) {
      $table->id();
      $table->string('title'); //Название статьи
      $table->text('content'); //Контент новости
      $table->string('slug')->unique(); //Slug для красивых url
      $table->integer('views_count')->default(0); //Количество просмотров статьи
      $table->timestamp('published_at')->nullable(); //Дата публикации новости
      $table->string('image')->nullable(); //Путь к изображению
      $table->boolean('is_featured')->default(false); //Закрепить новость
      $table->timestamps();
    });
  }

  /**
   * Reverse the migrations.
   */
  public function down(): void
  {
    Schema::dropIfExists('articles');
  }
};

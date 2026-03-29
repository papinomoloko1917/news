<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { show as showArticle } from '@/actions/App/Http/Controllers/ArticleController';
import type { ArticlePreview } from '@/types/article';
const { article } = defineProps<{
  article: ArticlePreview
}>();
</script>

<template>
  <div>
    <div class="hero bg-base-200 text-start ">
      <div class="hero-content flex-col lg:flex-row-reverse">
        <img v-if="article.image" :src="article.image" class="max-w-sm rounded-lg shadow-2xl" />
        <div>
          <h1 class="text-xl font-bold">{{ article.title }}</h1>
          <p class="py-6 text-sm">
            {{ article.excerpt }}
          </p>
          <Link :href="showArticle(article.slug)" class="btn btn-primary">
            Читать новость
          </Link>
        </div>
      </div>
    </div>
  </div>
</template>

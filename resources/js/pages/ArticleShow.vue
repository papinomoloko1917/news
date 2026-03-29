<script setup lang="ts">
import type { ArticleFull } from '@/types/article';
const { article } = defineProps<{
  article: ArticleFull;
}>();
</script>

<template>
  <div class="mt-10">
    <img v-if="article.image" :src="article.image" alt="картинка">
    <h1 class="mt-5 text-xl">{{ article.title }}</h1>
    <p v-if="article.published_at" class="mt-2 text-sm text-gray-500">
      {{ article.published_at }}
    </p>

    <div class="mt-6 text-left">
      {{ article.content }}
    </div>
  </div>
</template>

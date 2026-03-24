<script setup lang="ts">
import type { Article } from '@/types/article';
const props = withDefaults(defineProps<{
  articles?: Article[]
}>(), {
  articles: () => []
});
</script>

<template>
  <div class="text-center mt-15 text-xl">
    <h1>Страница новостей</h1>
    <div v-for="article in articles" :key="article.id">
      <h1>{{ article.id }}. {{ article.title }} - {{ article.content }}</h1>
    </div>
  </div>
</template>

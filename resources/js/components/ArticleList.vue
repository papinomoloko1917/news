<script setup lang="ts">
import type { Article } from '@/types/article';
const { article } = defineProps<{
  article: Article
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
            {{ article.content }}
          </p>
          <button class="btn btn-primary">Читать новость</button>
        </div>
      </div>
    </div>
  </div>
</template>

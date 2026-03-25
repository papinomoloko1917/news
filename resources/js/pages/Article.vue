<script setup lang="ts">
import ArticleList from '@/components/ArticleList.vue';
import Divider from '@/components/Divider.vue';
import type { ArticlePagination } from '@/types/article';
const props = defineProps<{
  paginate_articles: ArticlePagination
}>();

console.log(props.paginate_articles);

</script>

<template>
  <div class="text-center mt-15 text-xl">
    <h1 class="text-2xl mb-5">Страница новостей</h1>
    <Divider v-for="(article, index) in props.paginate_articles.data" :key="article.id"
      :show-divider="index !== props.paginate_articles.data.length - 1">
      <ArticleList :article="article" />
    </Divider>
  </div>
</template>

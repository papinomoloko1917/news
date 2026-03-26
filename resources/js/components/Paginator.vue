<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import type { PaginationLink } from '@/types/article';
const { links } = defineProps<{
  links: PaginationLink[]
}>();

const getPaginationClass = (active: boolean) =>
  active ? 'join-item btn btn-active' : 'join-item btn';

const showLabel = (label: string): string => {
  if (label === 'pagination.previous') {
    return 'Назад';
  }

  if (label === 'pagination.next') {
    return 'Вперед';
  }

  return label;

}
</script>

<template>
  <div class="join">
    <Link v-for="(link, index) in links" :key="index" :href="link.url || ''" :class="getPaginationClass(link.active)">
      {{ showLabel(link.label) }}
    </Link>
  </div>
</template>

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

    <template v-for="(link, index) in links" :key="index">
      <span v-if="!link.url" class="join-item btn btn-disabled">
        {{ showLabel(link.label) }}
      </span>
      <Link v-else :href="link.url" :class="getPaginationClass(link.active)">
        {{ showLabel(link.label) }}
      </Link>

    </template>
  </div>
</template>

<script setup lang="ts">
import { Link } from '@inertiajs/vue3';
import { ChevronRight, ChevronLeft } from '@lucide/vue';
import type { PaginationLink } from '@/types/article';

const { links } = defineProps<{
  links: PaginationLink[]
}>();

const getPaginationClass = (active: boolean, disabled: boolean) => {
  if (disabled) {
    return 'join-item btn btn-disabled text-gray-700';
  }

  return active ? 'join-item btn btn-active' : 'join-item btn';
};

const isPrevious = (label: string) => label === 'pagination.previous';
const isNext = (label: string) => label === 'pagination.next';
</script>

<template>
  <div class="join">
    <component v-for="(link, index) in links" :key="index" :is="link.url ? Link : 'span'"
      :class="getPaginationClass(link.active, !link.url)" :href="link.url || undefined">
      <ChevronLeft v-if="isPrevious(link.label)" class="w-5 h-5" />
      <ChevronRight v-else-if="isNext(link.label)" class="w-5 h-5" />
      <span v-else>{{ link.label }}</span>
    </component>
  </div>
</template>

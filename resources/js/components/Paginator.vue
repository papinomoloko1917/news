<script setup lang="ts">
import type { PaginationLink } from '@/types/article';
const props = defineProps<{
    links: PaginationLink
}>();
</script>

<template>
    <div class="join">
        <button class="join-item btn">1</button>
        <button class="join-item btn">2</button>
        <button class="join-item btn btn-disabled">...</button>
        <button class="join-item btn">99</button>
        <button class="join-item btn">100</button>
    </div>
</template>
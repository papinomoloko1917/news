<script setup lang="ts">
const { showDivider } = defineProps<{
  showDivider: boolean;
}>();
</script>

<template>
  <div>

    <div class="flex w-full flex-col">
      <slot />
      <div v-if="showDivider" class="divider"></div>
    </div>
  </div>
</template>

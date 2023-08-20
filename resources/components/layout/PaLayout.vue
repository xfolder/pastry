<script setup lang="ts">

import PaHeader from "./PaHeader.vue";
import PaFooter from "./PaFooter.vue";
</script>

<template>
  <div class="flex flex-col min-h-screen gap-y-12">
    <slot name="header">
      <PaHeader></PaHeader>
    </slot>
    <main class="flex-grow">
      <slot></slot>
    </main>
    <slot name="footer">
      <PaFooter></PaFooter>
    </slot>
  </div>
</template>

<style scoped>

</style>

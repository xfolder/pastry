<script setup lang="ts">

import PaHeader from "./PaHeader.vue";
import PaFooter from "./PaFooter.vue";
</script>

<template>
  <div class="flex flex-col min-h-screen">
    <slot name="header">
      <PaHeader></PaHeader>
    </slot>
    <main class="flex-grow flex flex-col">
      <slot></slot>
    </main>
    <slot name="footer">
      <PaFooter></PaFooter>
    </slot>
  </div>
</template>

<style scoped>

</style>

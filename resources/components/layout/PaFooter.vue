<script setup lang="ts">

import ShopInfo from "../ShopInfo.vue";
import ShopSocial from "../ShopSocial.vue";
import FormNewsletter from "../FormNewsletter.vue";
</script>

<template>
<footer class="flex p-10 border-t">
  <div class="w-3/12">
    <ShopInfo></ShopInfo>
  </div>
  <div class="w-6/12">
    <FormNewsletter></FormNewsletter>
  </div>
  <div class="w-3/12">
    <ShopSocial></ShopSocial>
  </div>
</footer>
</template>

<style scoped>

</style>

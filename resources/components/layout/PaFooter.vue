<script setup lang="ts">
import ShopSocial from "../ShopSocial.vue";
import FormNewsletter from "../FormNewsletter.vue";
import ShopLogo from "../ShopLogo.vue";
</script>

<template>
<footer class="p-6 md:p-8 border-t bg-color2">
  <div class="space-y-16 lg:flex lg:items-center lg:space-y-0">
	  <div class="flex justify-center flex-grow  lg:order-2">
		  <ShopLogo class="w-44 h-44"></ShopLogo>
	  </div>
	  <div class="flex-grow lg:order-3">
		  <FormNewsletter></FormNewsletter>
	  </div>
	  <div class="flex-grow lg:order-1">
		  <ShopSocial></ShopSocial>
	  </div>
  </div>
</footer>
</template>

<style scoped>

</style>

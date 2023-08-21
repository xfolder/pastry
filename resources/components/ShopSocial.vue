<script setup lang="ts">

import FacebookLogo from "@/components/social/FacebookLogo.vue";
import InstagramLogo from "@/components/social/InstagramLogo.vue";
import YouTubeLogo from "@/components/social/YouTubeLogo.vue";
</script>

<template>
<div class="max-w-xs mx-auto">
  <div class="text-center font-bold text-white mb-5">Seguici su</div>
  <div class="flex gap-x-2">
    <div class="flex justify-center w-1/3">
      <a href="https://www.facebook.com/" target="_blank" class="text-white">
		  <FacebookLogo class="h-8 w-8"></FacebookLogo>
      </a>
    </div>
    <div class="flex justify-center w-1/3">
      <a href="https://www.instagram.com/" target="_blank" class="text-white">
		<InstagramLogo class="h-8 w-8"></InstagramLogo>
      </a>
    </div>
    <div class="flex justify-center w-1/3">
      <a href="https://www.youtube.com/" target="_blank" class="text-white">
		  <YouTubeLogo class="h-8 w-8"></YouTubeLogo>
      </a>
    </div>
  </div>
</div>
</template>

<style scoped>

</style>

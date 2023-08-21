<script setup lang="ts">
import { CIcon } from '@coreui/icons-vue';
import { cilLocationPin, cilPhone, cilEnvelopeLetter } from '@coreui/icons';

</script>

<template>
  <div class="flex justify-around md:justify-center md:gap-x-8 lg:gap-x-12 text-sm text-white">
	  <a class="flex items-center gap-x-1" href="https://goo.gl/maps/Py7AxKbWKsyVRVs7A" target="_blank">
		  <CIcon :icon="cilLocationPin" class="inline-block w-4 h-4"></CIcon>
		  <span class="hidden md:block">via Roma 1, 12345 Roma</span>
	  </a>
	  <a class="flex items-center gap-x-1" href="tel:06 1234567">
		  <CIcon :icon="cilPhone" class="inline-block w-4 h-4"></CIcon>
		  <span class="hidden md:block">06 1234567</span>
	  </a>
	  <a class="flex items-center gap-x-1" href="mailto:info@pasticceriamalu.it">
		  <CIcon :icon="cilEnvelopeLetter" class="inline-block w-4 h-4"></CIcon>
		  <span class="hidden md:block">info@pasticceriamalu.it</span>
	  </a>
  </div>
</template>

<style scoped>

</style>

<script setup lang="ts">

import PaPage from "@/components/layout/PaPage.vue";
</script>

<template>
	<PaPage class="p-0 md:p-0 flex-grow flex">
		<div class="flex-grow flex items-center px-6 md:px-20 md:py-8 bg-color1-500 py-32">
			<div class="flex-grow flex justify-center items-center h-full">
				<div class="text-center">
					<h1 class="text-9xl font-bold text-color1-100">404</h1>
					<h2 class="text-4xl font-bold text-color1-100">Pagina non trovata</h2>
					<router-link :to="{name: 'home'}" class="text-xl text-color1-100">Ritorna alla home</router-link>
				</div>
			</div>
		</div>
	</PaPage>

</template>

<style scoped>

</style>

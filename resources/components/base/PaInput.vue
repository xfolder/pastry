<script setup lang="ts">
	import {ref} from "vue";

	const inputValue = ref<string>("");
</script>

<template>
	<input
		v-model="inputValue"
		type="text"
		class="px-4 py-2"
		placeholder="Cerca il tuo dolce preferito...">
</template>

<style scoped>

</style>

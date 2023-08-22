<script setup lang="ts">
import { computed } from 'vue'

const props = defineProps<{
    color: string
}>()

const colorStyle = computed(() => {
	switch (props.color) {
		case 'color1':
			return 'bg-color1-500 hover:bg-color1-600 text-white'
		case 'color2':
			return 'bg-color2-500 hover:bg-color2-600 text-white'
		case 'color3':
			return 'bg-color3-500 hover:bg-color3-600 text-white'
		case 'color4':
			return 'bg-color4-500 hover:bg-color4-600 text-white'
		case 'blue':
			return 'bg-blue-500 hover:bg-blue-600 text-white'
		case 'red':
			return 'bg-red-500 hover:bg-red-600 text-white'
		case 'green':
			return 'bg-green-500 hover:bg-green-600 text-white'
		case 'yellow':
			return 'bg-yellow-500 hover:bg-yellow-600 text-white'
		case 'gray':
			return 'bg-gray-500 hover:bg-gray-600 text-white'
		case 'white':
			return 'bg-white hover:bg-gray-100 text-gray-700'
		case 'black':
			return 'bg-black hover:bg-gray-900 text-white'
		default:
			return 'bg-blue-500 hover:bg-blue-600 text-white'
	}
})



</script>

<template>
	<button type="submit" :class="`focus:ring-4 focus:outline-none font-medium text-sm px-5 py-2.5 text-center ${colorStyle}`"><slot></slot></button>
</template>

<style scoped>

</style>

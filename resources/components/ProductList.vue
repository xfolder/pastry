<script setup lang="ts">
import {ref} from "vue";
import {client} from "../api/client";
import Product from "@/components/Product.vue";


const products = ref<App.Http.Resources.ProductDto[]>([]);
client.getProducts().then((response) => {
    products.value = response.data;
});


</script>

<template>
	<div class="px-12 md:px-20 md:py-8">
		<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-8">
			<div v-for="product in products">
				<Product :product="product"></Product>
			</div>
		</div>
	</div>
</template>

<style scoped>

</style>

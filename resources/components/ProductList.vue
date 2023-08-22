<script setup lang="ts">
import {ref} from "vue";
import {client} from "../api/client";
import ProductListElement from "@/components/ProductListElement.vue";
import Product from "@/classes/Product.ts";

const products = ref<Product[]>([]);
client.getProducts().then((response) => {
    products.value = response.data.map((data: any) => {
        return new Product(data);
    });
});


</script>

<template>
	<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-8">
		<div v-for="product in products">
			<ProductListElement :product="product" :key="product.id"></ProductListElement>
		</div>
	</div>
</template>

<style scoped>

</style>

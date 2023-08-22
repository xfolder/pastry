<script setup lang="ts">

import {useRoute, useRouter} from "vue-router";
import {ref} from "vue";
import {client} from "@/api/client.ts";

import {AxiosResponse} from "axios";
import PaPage from "@/components/layout/PaPage.vue";
import ProductDetail from "@/components/ProductDetail.vue";
import Product from "@/classes/Product.ts";


const productId = BigInt(useRoute().params.id.toString());
const product = ref<Product>();
const router = useRouter();


client.getProduct(productId).then((response: AxiosResponse) => {
    product.value = response.data;
}).catch((error: any) => {
    console.log(error);
	router.push({name: 'not-found'});
});


</script>

<template>
	<PaPage>
        <div v-if="product" class="max-w-6xl w-full mx-auto">
			<ProductDetail :product="product"></ProductDetail>
        </div>
    </PaPage>
</template>

<style scoped>

</style>

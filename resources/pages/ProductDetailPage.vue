<script setup lang="ts">

import {useRoute} from "vue-router";
import {ref} from "vue";
import {client} from "@/api/client.ts";
import ImageGallery from "@/components/ImageGallery.vue";
import {formatPrice} from "../misc/utils.ts";


const productId = BigInt(useRoute().params.id.toString());
const product = ref<App.Http.Resources.ProductDto>();


client.getProduct(productId).then((response) => {
    product.value = response.data;
}).catch((error) => {
    console.log(error);
    //to-do redirect to 404
});


</script>

<template>
    <div class="px-12 md:px-20 md:py-8">
        <div v-if="product" class="max-w-8xl w-full mx-auto flex gap-x-8">
            <div class="w-1/2">
                <ImageGallery :images="product.images"></ImageGallery>
            </div>
            <div class="w-1/2">
                <div class="flex flex-col gap-y-5">
                    <div>
                        <h1 class="text-4xl font-bold text-slate-900">{{product.name}}</h1>
                        <div class="text-2xl font-bold text-slate-900">{{formatPrice(product.price, null, '€')}}</div>
                    </div>
                    <div class="text-xl font-bold text-slate-900">Quantità disponibile: {{product.quantity}}</div>
                    <div>
                        <h3 class="text-lg font-bold">Ingredienti</h3>
                        <ul class="list-disc list-inside">
                            <li v-for="ingredient in product.ingredients">{{ingredient.name}}</li>
                        </ul>
                    </div>
                </div>

            </div>

        </div>
    </div>
</template>

<style scoped>

</style>

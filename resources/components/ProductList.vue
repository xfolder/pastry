<script setup lang="ts">
import {ref} from "vue";
import {client} from "../api/client";

const products = ref<App.Http.Resources.ProductDto[]>([]);
client.getProducts().then((response) => {
    products.value = response.data;
});


</script>

<template>
<div class="grid grid-cols-1 md:grid-cols-2 xl:grid-cols-4 gap-8">
  <div v-for="product in products">
    <div class="bg-white shadow-md rounded-lg overflow-hidden">
      <div class="bg-cover h-56 p-4" :style="{ backgroundImage: 'url(' + product.images[0] + ')' }">
      </div>
      <div class="p-4">
        <p class="uppercase tracking-wide text-sm font-bold text-gray-700">{{ product.name }}</p>
        <p class="text-3xl text-gray-900">{{ product.price }}</p>
      </div>
    </div>
  </div>

</div>
</template>

<style scoped>

</style>

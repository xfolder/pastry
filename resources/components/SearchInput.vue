<script setup lang="ts">

import PaButton from "@/components/base/PaButton.vue";
import PaInput from "@/components/base/PaInput.vue";
import {ref} from "vue";
import {client} from "@/api/client.ts";
import Product from "@/classes/Product.ts";

const searchInput = ref<string>("");
let searchTimeout: ReturnType<typeof setTimeout> | null = null;
const searchDelay: number = 500;
const searchResults = ref<Product[]>([]);
const search = () => {
	if (searchTimeout) {
		clearTimeout(searchTimeout);
	}
	if (searchInput.value.length < 3) {
		return;
	}
	searchTimeout = setTimeout(() => {
		console.log("search", searchInput.value);
		client.searchProducts(searchInput.value).then((response) => {
			console.log(response.data);
			searchResults.value = response.data.map((data: any) => {
				return new Product(data);
			});
		}).catch((error) => {
			console.log(error);
			searchResults.value = [];
		});
	}, searchDelay);
}

const resetSearch = () => {
	if (searchTimeout) {
		clearTimeout(searchTimeout);
	}
	searchResults.value = [];
}


</script>

<template>
	<div class="flex w-full bg-slate-200" v-click-outside="resetSearch">
		<div class="flex-grow w-auto relative">
			<PaInput
					:modelValue="searchInput"
					@update:modelValue="newValue => searchInput = newValue"
					@keyup="search"
					class="w-full border border-r-0"
					placeholder="Cerca il tuo dolce preferito...">
			</PaInput>
			<div v-if="searchResults.length" class="absolute top-full bg-white border border-t-0 w-full">
				<div v-for="result in searchResults">
                    <router-link :to="result.route()">
                        <div class="px-4 py-2 border-b">{{ result.name }}</div>
                    </router-link>
				</div>
			</div>
		</div>

		<PaButton class="text-white" color="color1" @click="search">
			<CIcon icon="cilSearch" class="text-white w-4 h-4"></CIcon>
		</PaButton>
	</div>
</template>

<style scoped>

</style>

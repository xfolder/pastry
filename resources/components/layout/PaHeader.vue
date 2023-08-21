<script setup lang="ts">

import ShopInfo from "../ShopInfo.vue";
import ShopLogo from "../ShopLogo.vue";
import SearchInput from "@/components/SearchInput.vue";
</script>

<template>
<header class="flex flex-col">
	<div class="bg-color2 py-1">
		<ShopInfo></ShopInfo>
	</div>
	<div class="flex flex-col items-center gap-y-2 lg:flex-row lg:gap-x-20 lg:px-20 py-4 border-b">
		<div>
            <router-link :to="{name:'home'}">
                <ShopLogo class="w-24 h-24"></ShopLogo>
            </router-link>
		</div>
		<div class="w-full px-12 md:px-20 lg:px-0">
			<SearchInput></SearchInput>
		</div>
	</div>

</header>
</template>

<style scoped>

</style>

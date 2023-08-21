<script setup lang="ts">

import {PropType} from "vue";

const props = defineProps({
	product: {
		type: Object as PropType<App.Http.Resources.ProductDto>,
		required: true
	}
});

import {formatPrice, slugify} from "@/misc/utils.ts";
import PaButton from "@/components/base/PaButton.vue";
import router from "@/router/router.ts";

const link = (() => {
	return router.resolve({
		name: 'product-detail',
		params: {
			name: slugify(props.product.name),
			id: props.product.id.toString()
		}
	})
})()



</script>

<template>
	<div class="bg-white shadow-md rounded-lg overflow-hidden">
		<div v-if="!!product.images" class="bg-cover h-56 p-4" :style="{ backgroundImage: 'url(' + product.images[0] + ')' }">
		</div>
		<div class="p-4 space-y-4">
			<div class="uppercase tracking-wide text-sm font-bold text-gray-700 text-center">{{ product.name }}</div>
            <div class="flex lg:hidden">
				<span class="flex-grow text-3xl text-gray-900 pr-4">{{ formatPrice(product.price, null, '€') }}</span>
				<router-link :to="link"><PaButton color="color1">Dettagli</PaButton></router-link>
            </div>
			<router-link :to="link">
				<a class="btn-epic relative h-12 overflow-hidden hidden lg:block">
					<div class="h-full relative overflow-hidden cursor-pointer">
						<span class="flex items-center justify-center absolute z-10 top-0 left-0 w-full h-full text-white">vai alla scheda</span>
						<span class="flex items-center justify-center absolute z-10 top-0 left-0 w-full h-full text-3xl text-gray-900">{{ formatPrice(product.price, null, '€') }}</span>
					</div>
				</a>
			</router-link>

		</div>
	</div>
</template>

<style scoped>

.btn-epic {
	transform: translate3d(0px, 0%, 0px);
	transition-delay: 0.6s;
}
.btn-epic:before {
	content: '';
	border-radius: 50% 50% 0 0;
	transform: translateY(100%) scaleY(0.5);
	transition: all 0.6s ease;
	@apply bg-color1-500 absolute top-0 left-0 w-full h-full;
}

.btn-epic:after {
	content: '';
	transform: translateY(0) scaleY(1);
	transition: all 0.6s ease;
	@apply absolute top-0 left-0 w-full h-full border-none;
}
.btn-epic span {
	transition: transform 0.5s ease;
}
.btn-epic span:first-child {
	transform: translateY(100%);
}
.btn-epic span:last-child {
	transform: translateY(0);
}
.btn-epic:hover {
	transition: background 0.2s linear;
	transition-delay: 0.6s;
}
.btn-epic:hover:after {
	border-radius: 0 0 50% 50%;
	transform: translateY(-100%) scaleY(0.5);
	transition-delay: 0s;
}
.btn-epic:hover:before {
	border-radius: 0;
	transform: translateY(0) scaleY(1);
	transition-delay: 0s;
}
.btn-epic:hover span:first-child {
	transform: translateY(0);
}
.btn-epic:hover span:last-child {
	transform: translateY(-100%);
}

</style>

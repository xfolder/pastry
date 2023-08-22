<script setup lang="ts">

import {PropType} from "vue";
import {formatPrice} from "@/misc/utils.ts";
import PaButton from "@/components/base/PaButton.vue";
import Product from "@/classes/Product.ts";

const props = defineProps({
	product: {
		type: Object as PropType<Product>,
		required: true
	}
});





</script>

<template>
	<div class="bg-white shadow-md rounded-lg overflow-hidden">
		<div v-if="!!product.images" class="bg-cover h-56 p-4" :style="{ backgroundImage: 'url(' + product.images[0] + ')' }">
		</div>
		<div class="p-4 space-y-4">
			<div class="uppercase tracking-wide text-sm font-bold text-gray-700 text-center">{{ product.name }}</div>
            <div class="flex lg:hidden">
                <div class="flex-grow">
                    <div v-if="product.saleable">
                        <div v-if="product.price != product.price_in_time">
                            <span class="text-3xl text-gray-900 pr-4">{{ formatPrice(product.price_in_time, null, '€') }}</span>
                            <span class="text-2xl text-gray-900 pr-4 line-through">{{ formatPrice(product.price, null, '€') }}</span>
                        </div>
                        <div v-else>
                            <span class="text-3xl text-gray-900 pr-4">{{ formatPrice(product.price, null, '€') }}</span>
                        </div>
                    </div>
                    <div v-else>
                        <span class="flex-grow text-3xl text-gray-900 pr-4">Non disponibile</span>
                    </div>
                </div>
				<router-link :to="product.route()"><PaButton color="color1">Dettagli</PaButton></router-link>
            </div>
			<router-link :to="product.route()">
				<a class="btn-animated relative h-12 overflow-hidden hidden lg:block">
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

.btn-animated {
	transform: translate3d(0px, 0%, 0px);
	transition-delay: 0.6s;
}
.btn-animated:before {
	content: '';
	border-radius: 50% 50% 0 0;
	transform: translateY(100%) scaleY(0.5);
	transition: all 0.6s ease;
	@apply bg-color1-500 absolute top-0 left-0 w-full h-full;
}

.btn-animated:after {
	content: '';
	transform: translateY(0) scaleY(1);
	transition: all 0.6s ease;
	@apply absolute top-0 left-0 w-full h-full border-none;
}
.btn-animated span {
	transition: transform 0.5s ease;
}
.btn-animated span:first-child {
	transform: translateY(100%);
}
.btn-animated span:last-child {
	transform: translateY(0);
}
.btn-animated:hover {
	transition: background 0.2s linear;
	transition-delay: 0.6s;
}
.btn-animated:hover:after {
	border-radius: 0 0 50% 50%;
	transform: translateY(-100%) scaleY(0.5);
	transition-delay: 0s;
}
.btn-animated:hover:before {
	border-radius: 0;
	transform: translateY(0) scaleY(1);
	transition-delay: 0s;
}
.btn-animated:hover span:first-child {
	transform: translateY(0);
}
.btn-animated:hover span:last-child {
	transform: translateY(-100%);
}

</style>

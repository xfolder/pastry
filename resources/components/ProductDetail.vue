<script setup lang="ts">

import {formatPrice} from "../misc/utils";
import {PropType} from "vue";
import Product from "../classes/Product";
import ImageGallery from "@/components/ImageGallery.vue";


defineProps({
	product: {
		type: Object as PropType<Product>,
		required: true
	}
});

</script>

<template>
	<h1 class="text-5xl text-center font-bold text-color1 mb-6">{{product.name}}</h1>
	<div class="flex gap-x-8 flex-col lg:flex-row lg:justify-center  gap-y-12 lg:gap-y-0 ">
		<div>
			<ImageGallery :images="product.images"></ImageGallery>
		</div>
		<div>
			<div class="flex flex-col gap-y-5">
				<div>
                    <div v-if="product.saleable">
                        <div v-if="product.price_in_time < product.price">
                            <div class="text-xl font-bold text-slate-900">Prezzo: <span class="text-slate-700">{{formatPrice(product.price_in_time, null, '€')}}</span><span class=" text-lg text-slate-700 line-through">{{formatPrice(product.price, null, '€')}}</span></div>
                        </div>
                        <div v-else>
                            <div class="text-xl font-bold text-slate-900">Prezzo: <span class="text-slate-700">{{formatPrice(product.price, null, '€')}}</span></div>
                        </div>
                        <div class="text-xl font-bold text-slate-900">Quantità disponibile: <span class="text-slate-700">{{product.quantity}}</span></div>
                    </div>
                    <div v-else>
                        <div class="text-xl font-bold text-slate-900">Non disponibile</div>
                    </div>
				</div>
				<div v-if="product.ingredients?.length">
					<h3 class="font-bold">Ingredienti</h3>
					<ul class="text-sm list-disc list-inside">
						<li v-for="ingredient in product.ingredients">
							{{ingredient.name}}
							<span v-if="ingredient.quantity && ingredient.measurement_unit" class="text-xs">
									{{ingredient.quantity}}{{ingredient.measurement_unit.abbreviation}}
								</span>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</template>

<style scoped>

</style>

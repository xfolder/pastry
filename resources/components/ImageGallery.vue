<script setup lang="ts">

import {ref} from "vue";

const props = defineProps<{
    images: string[]
}>();
const activeImage = ref<string>('');
if (props.images.length > 0) {
    activeImage.value = props.images[0];
}

</script>

<template>
    <div class="flex justify-center">
        <div class="space-y-1 max-w-[24rem]">
            <div class="flex justify-center items-center">
                <img :src="activeImage" class="aspect-square max-h-96" alt="main">
            </div>
            <div class="px-12">
                <div class="flex justify-center overflow-hidden ">
                    <div v-for="image in images">
                        <div class="bg-cover h-12 w-12 cursor-pointer" :style="{ backgroundImage: 'url(' + image + ')' }" @click="activeImage = image"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</template>

<style scoped>

</style>

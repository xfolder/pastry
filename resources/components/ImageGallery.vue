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
    <div class="space-y-1">
        <div class="flex justify-center items-center">
            <img :src="activeImage" class="w-full h-96" alt="main">
        </div>
        <div class="flex justify-center">
            <div v-for="(image, i) in images">
                <div class="bg-cover h-12 w-12" :style="{ backgroundImage: 'url(' + image + ')' }" @click="activeImage = image"></div>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>

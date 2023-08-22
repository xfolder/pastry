<script setup lang="ts">
import PaLayout from "./components/layout/PaLayout.vue";
import {useRoute} from "vue-router";

const route = useRoute();

</script>

<template>
  <PaLayout>
    <router-view :key="route.fullPath"></router-view>
  </PaLayout>
</template>

<style scoped>

</style>

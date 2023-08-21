<script setup lang="ts">

import PaButton from "@/components/base/PaButton.vue";
import PaInput from "@/components/base/PaInput.vue";
</script>

<template>
<form>
	<div class="flex flex-col max-w-xs mx-auto">
		<div class="text-center font-bold text-white mb-5">Iscriviti alla nostra newsletter</div>
		<PaInput class="flex-grow border mb-1" placeholder="mariorossi@email.it"></PaInput>
		<PaButton class="text-white font-bold" color="color1">Iscriviti ora</PaButton>
	</div>
</form>
</template>

<style scoped>

</style>

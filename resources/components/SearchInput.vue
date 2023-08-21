<script setup lang="ts">

import PaButton from "@/components/base/PaButton.vue";
import { CIcon } from '@coreui/icons-vue';
import { cilSearch } from '@coreui/icons';
import PaInput from "@/components/base/PaInput.vue";
</script>

<template>
	<div class="flex w-full bg-slate-200">
		<PaInput class="flex-grow border" placeholder="Cerca il tuo dolce preferito..."></PaInput>
		<PaButton class="text-white" color="color1">
			<CIcon :icon="cilSearch" class="text-white w-4 h-4"></CIcon>
		</PaButton>
	</div>
</template>

<style scoped>

</style>

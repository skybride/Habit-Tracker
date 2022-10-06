<template>
	<div id="display">
		<MainComponent></MainComponent>
	</div>
</template>

<script lang="ts">
import { Component, Vue } from "vue-property-decorator";
import MainComponent from "./components/MainComponent.vue";

@Component({
	components: {
		MainComponent,
	},
})
export default class App extends Vue {}
</script>

<style lang="css" scoped>
#display {
	display: flex;
	justify-content: center;
}
</style>

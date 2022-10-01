<template>
	<div class="habit-row">
		<input type="text" :value="task" />
		<input class="checkbox" type="checkbox" :checked="isChecked" />
		<button class="delete">
			<i class="fa fa-trash-o"></i>
		</button>
	</div>
</template>

<script lang="ts">
import { Component, Prop, Vue } from "vue-property-decorator";

@Component
export default class HabitRow extends Vue {
	@Prop() public task?: string;
	@Prop() public isChecked?: boolean;
}
</script>

<style lang="css" scoped>
i {
	font-size: 1.5em;
}
.habit-row {
	align-self: center;
	display: flex;
	flex-direction: row;
	margin: 1em 0;
}

.checkbox {
	background-color: #eee;
	height: 2.5em;
	width: 2.5em;
	margin: 0 1em;
}

.checkbox:after {
	color: greenyellow;
}
input[type="checkbox"] {
	accent-color: teal;
}
</style>

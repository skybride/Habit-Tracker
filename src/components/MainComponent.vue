<template>
	<div>
		<div>
			<span id="time">Time</span>
			<span id="date">Date</span>
		</div>
		<h1>Daily Habits</h1>
		<div id="habit-main">
			<HabitRow
				task="Wash Face"
				:isChecked="isChecked"
				:style="[
					isStrikeActive
						? { 'text-decoration': 'line-through' }
						: { 'text-decoration': 'none' },
				]"
				@onCheck="onChecked"
			/>
			<HabitRow task="Brush Teeth"></HabitRow>
			<HabitRow task="Drink Water"></HabitRow>
			<HabitRow task="Drink Coffee"></HabitRow>
		</div>
		<div id="extra">
			<span id="addTask" @click="addNewTask()">
				<i class="fa fa-plus-circle"></i>
			</span>
		</div>
	</div>
</template>

<script lang="ts">
import { Component, Vue } from "vue-property-decorator";
import HabitRow from "./HabitRow.vue";

@Component({
	components: {
		HabitRow,
	},
})
export default class MainComponent extends Vue {
	// strikeClass = "strike";
	isStrikeActive = true;
	isChecked = true;

	addNewTask() {
		console.log("Add new task");
	}

	onChecked() {
		console.log("message in parent", this.isChecked);
		this.isChecked = !this.isChecked;
		this.isStrikeActive = this.isChecked;
		return this.isStrikeActive;
	}
}
</script>

<style lang="css" scoped>
#habit-main {
	padding: 1em;
	margin: 1em;
}

#date {
	float: right;
}

#addTask {
	display: flex;
	font-size: 2em;
	flex-direction: row;
	justify-content: center;
}

.strike {
	text-decoration: line-through;
}
</style>

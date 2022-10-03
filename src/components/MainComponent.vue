<template>
	<div>
		<div>
			<span id="time">Time</span>
			<span id="date">Date</span>
		</div>
		<h1>Daily Habits</h1>
		<div id="habit-main" v-for="dailyHabit in dailyHabits">
			<HabitRow
				:task="dailyHabit.habit"
				:style="
					dailyHabit.done
						? { 'text-decoration': 'line-through' }
						: { 'text-decoration': 'none' }
				"
				@onCheck="onChecked(dailyHabit.habit, dailyHabit.done)"
			/>
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
	isChecked = false;
	dailyHabits = [
		{ habit: "Wash Face", done: false },
		{ habit: "Brush Teeth", done: false },
		{ habit: "Drink Water", done: false },
		{ habit: "Drink Coffee", done: false },
	];

	get strikeValue() {
		return this.isChecked === true
			? { "text-decoration": "line-through" }
			: { "text-decoration": "none" };
	}

	addNewTask() {
		console.log("Add new task");
	}

	onChecked(dailyHabit: string, done: boolean) {
		done = !done;
		this.isChecked = done;
		this.dailyHabits.filter((value) => {
			if (value.habit === dailyHabit) {
				return (value.done = done);
			}
		});

		return this.isChecked;
	}
}
</script>

<style lang="css" scoped>
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

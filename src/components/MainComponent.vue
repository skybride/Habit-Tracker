<template>
	<div>
		<div>
			<span id="time">Time</span>
			<span id="date">Date</span>
		</div>
		<h1>Daily Habits</h1>
		<div id="habit-main" v-for="dailyHabit in dailyHabits">
			<HabitRow
				:style="onStrike(dailyHabit.done)"
				:task="dailyHabit.habit"
				:isChecked="dailyHabit.done"
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
	dailyHabits = [
		{ habit: "Wash Face", done: false },
		{ habit: "Brush Teeth", done: false },
		{ habit: "Drink Water", done: false },
		{ habit: "Drink Coffee", done: false },
	];

	onStrike(done: boolean): { "text-decoration": string } {
		return done === true
			? { "text-decoration": "line-through" }
			: { "text-decoration": "none" };
	}

	addNewTask() {
		console.log("Add new task");
	}

	onChecked(dailyHabit: string, done: boolean) {
		done = !done;
		this.dailyHabits.filter((value) => {
			if (value.habit === dailyHabit) {
				return (value.done = done);
			}
		});

		return done;
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

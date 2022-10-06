<template>
	<div>
		<div id="header">
			<span id="time">{{ hours }}:{{ minutes }}{{ amPm }}</span>
			<span id="date">{{ currentDate }}</span>
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
	/**
	 * Data Properties
	 */
	dailyHabits = [
		{ habit: "Wash Face", done: false },
		{ habit: "Brush Teeth", done: false },
		{ habit: "Drink Water", done: false },
		{ habit: "Drink Coffee", done: false },
	];
	hours = 0;
	minutes = 0;
	seconds = 0;
	amPm = "";
	interval = 0;
	months = [
		"Jan",
		"Feb",
		"Mar",
		"Apr",
		"May",
		"Jun",
		"Jul",
		"Aug",
		"Sep",
		"Oct",
		"Nov",
		"Dec",
	];
	days = ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"];

	/**
	 * Computed Properties
	 */
	get currentDate() {
		const date = new Date();
		const dayOfWeek = date.getDay();
		const dayNumber = date.getDate();
		const month = date.getMonth();

		return `${this.days[dayOfWeek]}, ${this.months[month]} ${dayNumber}`;
	}

	/**
	 * Methods
	 */
	mounted() {
		this.interval = setInterval(this.updateClock, 1000);
	}

	beforeDestroy() {
		clearInterval(this.interval);
	}

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

	updateClock() {
		const time = new Date();

		this.hours = time.getHours();
		this.minutes = time.getMinutes();
		this.seconds = time.getSeconds();
		this.amPm = this.hours >= 12 ? "PM" : "AM"; //make this small caps
		this.hours = this.hours % 12 || 12;
		this.minutes = this.minutes < 10 ? 0 + this.minutes : this.minutes;
		this.hours = this.hours < 10 ? 0 + this.hours : this.hours;
	}
}
</script>

<style lang="css" scoped>
#header {
	display: flex;
	flex-direction: row;
	justify-content: space-between;
}

#addTask {
	cursor: pointer;
	display: flex;
	font-size: 2em;
	flex-direction: row;
	justify-content: center;
}

.strike {
	text-decoration: line-through;
}
</style>

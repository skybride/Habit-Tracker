<template>
	<div>
		<div>
			<span id="time">Time</span>
			<span id="date">Date</span>
		</div>
		<h1>Daily Habits</h1>
		<div id="habit-main">
			<HabitRow task="Wash Face" isChecked="true" />
			<HabitRow task="Brush Teeth"></HabitRow>
			<HabitRow task="Drink Water"></HabitRow>
			<HabitRow task="Drink Coffee"></HabitRow>
		</div>
		<div id="extra">
			<span id="addTask">
				<i class="fa fa-plus-circle"></i>
			</span>
		</div>
	</div>
</template>

<script lang="ts">
import HabitRow from "./HabitRow.vue";

export default {
	components: {
		HabitRow,
	},
};
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
</style>

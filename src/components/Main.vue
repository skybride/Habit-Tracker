<template>
	<div>
		<div>
			<span id="time">Time</span>
			<span id="date">Date</span>
		</div>
		<h1>Daily Habits</h1>
		<div id="habit-main">
			<div class="habit-row">
				<input type="text" value="Wash Face" />
				<input class="checkbox" type="checkbox" checked="checked" />
				<button class="delete">
					<i class="fa fa-trash-o"></i>
				</button>
			</div>
			<div class="habit-row">
				<input type="text" value="Brush Teeth" />
				<input class="checkbox" type="checkbox" />
				<button class="delete">
					<i class="fa fa-trash-o"></i>
				</button>
			</div>
			<div class="habit-row">
				<input type="text" value="Drink Coffee" />
				<input class="checkbox" type="checkbox" />
				<button class="delete">
					<i class="fa fa-trash-o"></i>
				</button>
			</div>
		</div>
		<div id="extra">
			<span id="addTask">
				<i class="fa fa-plus-circle"></i>
			</span>
		</div>
	</div>
</template>

<script>
export default {};
</script>

<style lang="css" scoped>
i {
	font-size: 1.5em;
}

#habit-main {
	padding: 1em;
	margin: 1em;
}

#date {
	float: right;
}

#extra {
}

#addTask {
	display: flex;
	font-size: 2em;
	flex-direction: row;
	justify-content: center;
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

.task {
}
</style>

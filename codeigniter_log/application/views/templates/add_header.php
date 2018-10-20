<!DOCTYPE html>
<html>
<head>
<title> Activity Scheduler</title>
<meta charset="UTF-8" />
<meta name="viewport" content="width=device-width,initial-scale=1">
<link rel="stylesheet" type="text/css" href="./assets/css/style.css">
</head>
<body>
	<div class="header">
		<div class="tab">
		<a class="tablinks" id="defaultOpen"href="<?php echo base_url();?>posts/addtask">Tasks</a>
		<button class="tablinks" onclick="document.getElementById('Exam').style.display='block';document.getElementById('Task').style.display='none';document.getElementById('Goal').style.display='none'">Exams</button>
		<button class="tablinks" onclick="document.getElementById('Goal').style.display='block';document.getElementById('Task').style.display='none';document.getElementById('Exam').style.display='none' ">Goals</button>
		</div>
	</div>
	<div class="container">
		
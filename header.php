<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title><?php if ($page <> "home") { echo ucfirst(strtolower($page))." - "; } ?>COMP 1950</title>
<link rel="stylesheet" href="styles/styles.css">
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
<script src="scripts/jquery-1.12.4.js"></script>
<script src="scripts/jquery-ui.js"></script>

</head>
<body>
<div class="wrapper">
	<header>

		<a href="index.php" class="logo">
			<img src="images/bcit-logo.png" alt="BCIT Logo">
		</a>
		<button class="btn-menu"><i class="fas fa-bars"></i></button>
		<nav>
			<ul>
				<li><a href="home"<?php if ($page == "home") { echo " class='active'"; }?>>Home</a></li>
				<li><a href="outline.php"<?php if ($page == "outline") { echo " class='active'"; }?>>Outline</a></li>
				<li><a href="schedule.php"<?php if ($page == "schedule") { echo " class='active'"; }?>>Schedule</a></li>
				<li><a href="lessons.php"<?php if ($page == "lessons") { echo " class='active'"; }?>>Lessons</a></li>
				<li><a href="contact.php"<?php if ($page == "contact") { echo " class='active'"; }?>>Contact</a></li>
			</ul>
		</nav>	
			
	</header>
	
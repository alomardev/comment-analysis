<!DOCTYPE html>
<html>
<head>
	<title>Comments Analysis - @@title</title>
	<meta charset='UTF-8'>
	<meta name='viewport' content='width=device-width, initial-scale=1.0'>
	<link rel='stylesheet' href='/res/main.css'>
</head>
<body>
<nav class="navbar navbar-expand-sm navbar-dark bg-dark fixed-top justify-content-between">
	<div class="container">
		<a class="navbar-brand mr-4" href="#">
	    <img src="/res/brand.svg" width="185" height="35" alt="">
		</a>
		<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="navbarNav">
			<ul class="navbar-nav mr-auto">
				<li class='d-sm-none'><hr></li>
				<li class="nav-item<?php echo $_SERVER['REQUEST_URI']=="/courses.php" ? " active" : "" ?>">
					<a class="nav-link" href="/courses.php">Courses</a>
				</li>
				<li class="nav-item<?php echo $_SERVER['REQUEST_URI']=="/analysis.php" ? " active" : "" ?>">
					<a class="nav-link" href="/analysis.php">Analysis</a>
				</li>
			</ul>
			<a href="#" class='btn btn-dark mt-sm-0 mt-3 mb-sm-0 mb-2 d-block d-sm-inline-block'>Login</a>
		</div>
	</div>
</nav>
<div class="container">
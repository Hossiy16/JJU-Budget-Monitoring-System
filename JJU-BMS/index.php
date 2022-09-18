<?php

include('includes/config.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
	<title>JJU BMS</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">

	<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
	<link href="css/font-awesome.min.css" rel="stylesheet">
	<link href="css/style.css" rel='stylesheet' type='text/css' />
	<link href="css/style.css" rel='stylesheet' type='text/css' />

	<script src="js/jquery.min.js"></script>
	<script src="js/popper.min.js"></script>

	<script src="js/bootstrap.min.js"></script>
	<style>
		/* Make the image fully responsive */
		.carousel-inner img {
			width: 100%;
			height: 100%;
		}
	</style>

</head>

<!-- bg color : style="background-color: #3F84B1; -->


<body>

	<!--<div style="background-color: #3F84B1;">
		<div class="container">
		<ul class="nav">
			<li class="nav-item">
				<a href="admin/login.php" class="nav-link admin ">Admin Login</a></li>
				
		</ul>
</div>
	</div> -->
	<nav class="navbar navbar-expand-lg bg-info navbar-light navbar-expand-lg py-md-0 ">
		<div class="container">


			<!-- Toggler/collapsibe Button -->


			<ul class="navbar-nav">
				<li class="sig pl-2 nav-item"><a href="#" data-toggle="modal" class="nav-link" data-target="#myModalloginIn">Admin Login</a></li>
			</ul>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#admin">
				<i class="fa fa-lock
    "></i>
			</button>
			<div class="collapse navbar-collapse" id="admin">
				<ul class="navbar-nav ml-auto ">
					<li class="nav-item nav ">

					<!-- <li class="sig pl-2 nav-item"><a href="#" data-toggle="modal" class="nav-link" data-target="#myModalSignUp">Sign Up</a></li> -->
					<li class="sigi pl-2 nav-item"><a class="nav-link" href="#" data-toggle="modal" data-target="#myModalSignIn"> Sign In</a></li>


					</li>


				</ul>
			</div>
		</div>
	</nav>

	<nav class="navbar navbar-expand-lg bg-dark navbar-dark sticky-top">
		<div class="container">
			<a href="index.php" class="navbar-brand "><i class="fa fa-home bg-dark navbar-dark"></i> JJU Budget Monitoring System</a>
			<button class="navbar-toggler" data-toggle="collapse" href="#navbarbms">
				<span class="navbar-toggler-icon"></span>
			</button>

			<div class="collapse navbar-collapse" id="navbarbms">
				<ul class="navbar-nav ml-auto ">
					<li class="nav-item">
						<a href="index.php" class="nav-link">Home</a>
					</li>
					<li class="nav-item">
						<a href="about.php" class="nav-link">About</a>
					</li>
					<li class="nav-item">
						<a href="contact.php" class="nav-link">Contact</a>
					</li>
					<li class="nav-item">
						<a href="enquiry.php" class="nav-link">Enquiry</a>
					</li>
					</li>


				</ul>

			</div>
		</div>

	</nav>
	<div class="container-fluid"><br>
		<img src="images\logo.png">
	</div>

	<br>
	<div id="demo" class="carousel slide" data-ride="carousel">
		<ul class="carousel-indicators">
			<li data-target="#demo" data-slide-to="0" class="active"></li>
			<li data-target="#demo" data-slide-to="1"></li>
			<li data-target="#demo" data-slide-to="2"></li>
		</ul>
		<div class="carousel-inner">
			<div class="carousel-item active">
				<img src="images/jju1.jpg" alt="Los Angeles" width="100%" height="500">
				<div class="carousel-caption">
					<h3 style="color:black;">JIGJIGA UNIVERSITY
					</h3>
					<p style="color:black;">Where Aims Becomes Achievements</p>
				</div>
			</div>
			<div class="carousel-item">
				<img src="images/jju2.jpg" alt="Chicago" width="1100" height="500">
				<div class="carousel-caption">
					<h3>Pleasant and Peaceful Green campus
					</h3>
					<p>Jigjiga university has many Greenery places which provides healthy atmosphere for students.</p>
				</div>
			</div>

			<div class="carousel-item">
				<img src="images/jju3.jpg" alt="New York" width="1100" height="500">
				<div class="carousel-caption">
					<h3>Well spaced classroom buildings
					</h3>
					<p>Jigjiga university is equipped with spacious and best class rooms and laboratories.</p>
				</div>
			</div>
		</div>
		<a class="carousel-control-prev" href="#demo" data-slide="prev">
			<span class="carousel-control-prev-icon"></span>
		</a>
		<a class="carousel-control-next" href="#demo" data-slide="next">
			<span class="carousel-control-next-icon"></span>
		</a>
	</div>


	<!-- Footer -->

	<footer class="bg-dark text-white">

		<div class="container">

			<div class="row">
				<div class="col">
					<p class="lead text-center pt-2">JJU Budget Monitoring System <span id="year"></span> &copy; . All Rights Reserved</p>
				</div>
			</div>
		</div>




	</footer>

	<!-- End of Footer -->


	<!-- Script for the footer day-->
	<script>
		var year = new Date().getFullYear();
		var f = document.getElementById("year").innerHTML = year;
	</script>

	<!--End of script for the day -->













	<?php include('includes/signin.php'); ?>
	<?php include('includes/signup.php'); ?>
	<?php include('admin/login.php'); ?>


</body>

</html>
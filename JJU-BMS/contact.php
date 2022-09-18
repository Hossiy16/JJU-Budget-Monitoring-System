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
	<br><br>
	<h2 class="display-4 text-center">Get in touch with us</h2> <br>
	<div class="container">
		<div class="row">
			<div class="col-6">
				<h2 class="justify-content-center"></h2>
				<div class="card">
					<div class="card-header justify-content-center ">
						<h1 class="text-center">Address </h1>

					</div>
					<div class="card-body text-center"><br>Jigjiga University<br> JigJiga,Somali Region of Ethiopia<br></div><br>
				</div>
			</div>
			<div class="col-6">
				<h2 class="justify-content-center"></h2>
				<div class="card">
					<div class="card-header justify-content-center ">
						<h1 class="text-center">Phone </h1>

					</div>
					<div class="card-body text-center"><br>Tel: +251 (0) 25 775 5933 <br>
						Fax: +251 (0) 25 775 5976</div><br>
				</div>
			</div>


		</div>
		<br>

		<div class="row">
			<div class="col-6">
				<h2 class="justify-content-center"></h2>
				<div class="card">
					<div class="card-header justify-content-center ">
						<h1 class="text-center">Email </h1>

					</div>
					<div class="card-body text-center"><br>E-mail: president@jju.edu.et <br> info@jju.edu.et</div><br>

				</div>
			</div>
			<div class="col-6">
				<h2 class="justify-content-center"></h2>
				<div class="card">
					<div class="card-header justify-content-center ">
						<h1 class="text-center">Website </h1>
					</div>
					<div class="card-body text-center"><br><a href="https://www.jju.edu.et">Official Website</a></a></div><br>
				</div>
			</div>


		</div>
	</div>

	<br><br>
	<br>
	<br>
	<br>
	<br><br>
	<br>
	<br>
	<br>
	<br>

	<br>

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
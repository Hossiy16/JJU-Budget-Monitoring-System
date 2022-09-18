<?php
include "includes/config.php";

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

	<br>

	<div class="container justify-content-center">
		<div class="row">
			<div class="col-2"></div>
			<div class="col-8 ">
				<h2 class="text-center">Enquiry Form</h2><br>
				<p class="text-center"><i>We offer full-service as much as posible. We understand your needs and we will visit our site day to day to satisfy the biggest criteria of them all, both look and taste. Do not hesitate to contact us.</i></p>
				<br>
				<?php
				if (isset($_POST['submit'])) {
					$name = $_POST['yourname'];
					$email = $_POST['email'];
					$subject = $_POST['subject'];
					$message =  $_POST['message'];
					//$message = "$owner would like to request For Plan Approval.";
					$query = "INSERT INTO enquiry(`id`, `name`, `email`, `subject`, `message`) 
                 VALUES (NULL, '$name', '$email', '$subject', '$message')";

					if (performQuery($query)) {
						echo "<script>alert(' Your Enquiry is Succesfully Sent,  Thank you for your  Feed Back.')</script>";
					} else {
						echo "<script>alert('Unknown error occured.')</script>";
					}
				}


				?>
				<form method="post">
					<div class="form-group">
						<label for="name">Your Name :</label>
						<input type="text" class="form-control" id="name" placeholder="Please Enter Your Name" name="yourname" required>
					</div>
					<div class="form-group">
						<label for="email">Your Email :</label>
						<input type="email" class="form-control" id="email" placeholder="Please Enter Your Email" name="email" required>
					</div>
					<div class="form-group">
						<label for="subject">Subject :</label>
						<input type="text" class="form-control" id="subject" placeholder="Subject" name="subject" required>
					</div>
					<div class="form-group">
						<label for="comment">Message :</label>
						<textarea class="form-control" rows="5" name="message" id="comment" placeholder="Message or Special Suggestion" required></textarea>
					</div>
					<div class="form-group">
						<input type="submit" class="btn btn-primary btn-block btn-lg" name="submit" value="Submit Enquiry">
					</div>
				</form>
			</div>

		</div>

	</div>
	<div class="col-2"></div>
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
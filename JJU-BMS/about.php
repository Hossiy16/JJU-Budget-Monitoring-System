<!DOCTYPE html>
<html lang="en">

<head>
	<title>JJU BMS About</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="ourteam.css">

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

	</nav><br>
	<br>

	<h2 class="display-4 text-center">About JJU</h2>
	<br>
	<div class="container">
		<div class="row">
			<div class="col-1">
				<div class="container">

				</div>
			</div>
			<div class="col-10">
				<div class="container">
					<div class="row">
						<div class="col-6">
							<p style="text-align: justify;">Jigjiga University is one of the public higher institutions that was founded in March 2007, along with the Second-Generation universities in Ethiopia. It is located in the emerging town of Jigjiga the capital city of Ethiopian Somali regional state, 635 kilometers away from Addis Ababa. The University officially started its service with 712 students, 66 and 99 administrative in three faculties in 2007.
							</p>
						</div>
						<div class="col-6">
							<p style="text-align: justify;">In the recent years, the intake capacity is increasing from year to year. So currently, it has a total of 21,554 students studying in 57 various academic programs and 627 post-graduate students pursuing in six academic programs. These programs are operating under eight Colleges, three Schools and an Institute.

							</p>
						</div>
						<div class="col-12">
							<p style="text-align: justify;">To this effect, the university has shown much achievement in education, research and community service. Last year only, 1888 students are graduated from different discipline that are capable of playing a great role in the development of the country
							In it is aim is conducting demand driven research and communicating relevant research output which are problem solving and result oriented. Most of these research focus in pastoral and agro- pastoral studies. It is also engaging in publicizing different research and related works to the internal and external customers and stakeholders through various means, like media, seminars, symposium and intellectual forums.

							</p>
						</div>
						

					</div>

				</div>
			</div>
			<div class="col-1"></div>
		</div>

	</div>

	<div class="container pt-5 text-center pb-5">
		<div class="row">
			<div class="col">

				<button type="button" class="btn btn-outline-primary  " data-toggle="collapse" data-target="#about">Developers</button>

				<div class="main-container collapse" id="about">
					<div class="heading">
						<h1>Our Team</h1>
					</div>
					<div class="sub-container">
						<div class="members">
							<img src="images/img_avatar.png">
							<div class="name">Hosaina Yirgalem</div>
							<div class="post">Developer</div>
						</div>
						<div class="members">
							<img src="images/img_avatar.png">
							<div class="name">Alias Honelgn</div>
							<div class="post">Developer</div>
						</div>
						<div class="members">
							<img src="images/img_avatar2.png">
							<div class="name">Sefi Desta</div>
							<div class="post">Developer</div>
						</div>
						<div class="members">
							<img src="images/img_avatar2.png">
							<div class="name">Hiwot Lakew</div>
							<div class="post">Developer</div>
						</div>
						<div class="members">
							<img src="images/img_avatar.png">
							<div class="name">Abeselom Tewodros</div>
							<div class="post">Developer</div>
						</div>
					</div>
				</div>
			</div>

		</div>
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
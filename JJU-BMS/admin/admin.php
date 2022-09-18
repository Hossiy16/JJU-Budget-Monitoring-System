<?php
session_start();
if(isset($_SESSION['User'])){
echo 'Welcome' . $_SESSION['User'];
echo '<a href="logout.php?logout">LogOut</a>';

}

else

	header("location:../index.php")

?>



 


<!DOCTYPE html>
<html>
<head>
	<title>Admin</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">

<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/font-awesome.min.css" rel="stylesheet" >
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />

<script src="js/jquery.min.js"></script>
<script src="js/popper.min.js"></script>

<script src="js/bootstrap.min.js"></script>

</head>
<body>
	<div class="jumbotron">
<div class="container">
	
	<h1 class="display-1 text-center">  <?php echo 'Welcome ' . $_SESSION['User']; ?>  </h1>
</div></div>
<div class="container justify-content-end">
	
	<h2 class="display-4 justify-content-end"><?php echo '<a href="logout.php?logout" class="nav-link">LogOut</a>';
?></h2>
</div>


</body>
</html> 
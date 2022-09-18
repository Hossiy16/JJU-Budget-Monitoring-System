<?php
session_start();
require_once '../includes/config.php';
if(isset($_POST['login']))
{
	$username = $_POST['username'];
$password = $_POST['password'];
	

	$query = "select * from admin where user='{$username}' and pass='{$password}' ";
	$result = mysqli_query($conn,$query);
if(mysqli_fetch_assoc($result))
{
$_SESSION['User']=$_POST['username'];
header("location:wel.php");

}
else {

	echo "<script>alert(\"Soory You Have Entered Invalid Email or Password\"); window.location.assign('../index.php');</script>";

}






}
else
{
	echo "<script> window.location.assign('admin.php'); </script>";

}
?>
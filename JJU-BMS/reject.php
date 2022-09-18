<?php
include('includes/config.php');
$id = $_GET['id'];

$query_delete = "DELETE FROM `plan_request` WHERE `plan_request`.`id` = '$id'";


if (performQuery($query_delete)) {
    echo "<script>alert('Plan Rejected .');window.location.assign('plan.php')</script>";
   

   
} else {
    echo "Unknown error occured. Please try again.";
}

?>
<br /><br />
<a href="home.php">Back</a>
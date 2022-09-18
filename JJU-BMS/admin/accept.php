<?php
include('includes/config.php');
$id = $_GET['id'];
// / Use separate variables for select, insert and delete */
$query_1 = "select * from `admin_plan` where `id` = '$id' ";
if (count(fetch_All($query_1)) > 0) {
    foreach (fetch_All($query_1) as $row) {
        $planname = $row['plan_name'];
        $date = $row['date'];
        $detail = $row['detail'];
        $message = $row['message'];
        // $query_2 = "INSERT INTO plan_approved(`id`, `plan_name`, `date`, `detail`, `message`) 
        //          VALUES (NULL, '$planname', CURRENT_TIMESTAMP, '$detail', '$message')";
        $query_2 = "INSERT INTO `plan_approved`(`id`, `plan_name`, `date`, `detail`, `message`) 
        VALUES (NULL, '$planname', CURRENT_TIMESTAMP, '$detail', '$message')";
    }

    $query_delete = "DELETE FROM `admin_plan` WHERE `admin_plan`.`id` = '$id'";
    //   / For view the querys in screen and test if correct
    echo $query_2 . '<br>';
    echo $query_delete;

    if (performQuery($query_2)  && performQuery($query_delete)) {
        echo "<script>alert('Plan Accepted .');window.location.assign('wel.php')</script>";
    } else {
        echo "Unknown error occured. Please try again.";
    }
} else {
    echo "Error occured.";
}

?>
<br /><br />
<a href="plan.php">Back</a>
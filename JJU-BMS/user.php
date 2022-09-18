<?php
session_start();
require_once 'includes/config.php';
if (isset($_POST['submit'])) {
    $type = $_POST['type'];
    $username = $_POST['username'];
    $password = $_POST['pwd'];

    $query = "select * from user where users='$username' and pass='$password'";
    $result = mysqli_query($conn, $query);
    if (mysqli_num_rows($result) == 1) {
        $type = "select type from user where users='$username' and pass='$password'";
        $roles = mysqli_query($conn, $type);
        $row = mysqli_fetch_array($roles);
        if ($row['type'] == "plan") {
            $_SESSION['plan'] = $username;
            header("Location:plan.php");
        } else if ($row['type'] == "transport") {
            $_SESSION['transport'] = $username;
            header("Location:transport.php");
        } else if ($row['type'] == "teaching") {
            $_SESSION['teaching'] = $username;
            header("Location:teaching.php");
        } else if ($row['type'] == "student") {
            $_SESSION['student'] = $username;
            header("Location:student.php");
        } else if ($row['type'] == "referal") {
            $_SESSION['referal'] = $username;
            header("Location:referal.php");
        }


    } else {
        echo "<script>alert(\"Soory You Have Entered Invalid Email or Password\"); window.location.assign('index.php');</script>";
    }
}




?>
<?php
session_start();
if (isset($_SESSION['User'])) {
  //echo 'Welcome' . $_SESSION['User'];
  //echo '<a href="logout.php?logout">LogOut</a>';

} else

  header("location:../index.php")

?>




<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta http-equiv="X-UA-Compatible" content="ie=edge" />
  <title>Admin Dashboard</title>
  <link rel="stylesheet" href="css/bootstrap.min.css" />
  <link href="css/font-awesome.min.css" rel="stylesheet">

  <link rel="stylesheet" href="css/material-icons.min.css" />
  <link rel="stylesheet" href="css/admin.css" />
  <style>
    html {
      scroll-behavior: smooth;
    }

    body {
      position: relative;
    }

    ul.nav-pills {
      top: 40px;
      position: fixed;
    }

    div.col-8 div {
      height: 600px;
    }
  </style>
</head>

<body data-spy="scroll" data-target="#myScrollspy" data-offset="1" style="position: relative;">
  <nav class="navbar navbar-expand-lg navbar-dark bg-mattBlackLight fixed-top ">
    <button class="navbar-toggler sideMenuToggler" type="button">
      <span class="navbar-toggler-icon"></span>
    </button>

    <h2><a class="navbar-brand  " href="wel.php"> <?php echo 'Welcome ' . $_SESSION['User']; ?>
      </a></h2>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle p-0" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

            <span class="">Account</span>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
            <?php echo '<a href="logout.php?logout" class="dropdown-item">Log Out</a>'; ?>

          </div>
        </li>
      </ul>
    </div>
  </nav>
  <div class="wrapper d-flex">
    <div class="sideMenu bg-mattBlackLight">
      <div class="sidebar">
        <ul class="navbar-nav id=" myScrollspy">
          <li class="nav-item">
            <a href="#dashboard" class="nav-link px-2">

              <span class="text" href="#dashboard">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a href="#manageuser" class="nav-link px-2">

              <span class="text" href="#manageuser"> Users </span>
            </a>
          </li>

          <li class="nav-item">
            <a href="#planapproval" class="nav-link px-2">

              <span class="text" href="#planapproval"> Plan Approval</span>
            </a>
          </li>

          <li class="nav-item">
            <a href="#allocatebudget" class="nav-link px-2">

              <span class="text" href="#allocatebudget">Allocate Budget</span>
            </a>
          </li>

          <li class="nav-item">
            <a href="#expensereport" class="nav-link px-2">

              <span class="text" href="#expensereport">Expense Report</span>
            </a>
          </li>


          <!-- <li class="nav-item">
            <a href="#graphgeneration" class="nav-link px-2">

              <span class="text" href="#graphgeneration">Graph Generation</span></a>
          </li> -->



        </ul>
      </div>
    </div>
    <div class="content">
      <div class="col-12 pb-4">
        <div id="dashboard" class="" style="height: 700px;padding-top:80px">
          <h1 style="text-align: center">Dashboard</h1>
          <div class="container-fluid bg-dark">
            <div class="row">
              <div class="col-md-4 my-3">
                <div class="bg-mattBlackLight px-3 py-3">
                  <h4 class="mb-2">Current Users</h4>
                  <div class="progress" style="height: 16px;">
                    <div class="progress-bar bg-warning text-mattBlackDark" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                      5 User
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 my-3">
                <div class="bg-mattBlackLight px-3 py-3">
                  <h4 class="mb-2">Plan Approved</h4>
                  <div class="progress" style="height: 16px;">
                    <div class="progress-bar bg-warning text-mattBlackDark" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                      25
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-md-4 my-3">
                <div class="bg-mattBlackLight px-3 py-3">
                  <h4 class="mb-2">Allocated Budget</h4>
                  <div class="progress" style="height: 16px;">
                    <div class="progress-bar bg-warning text-mattBlackDark" role="progressbar" style="width: 25%;" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100">
                      25
                    </div>
                  </div>
                </div>
              </div>

            </div>
          </div>

        </div>
        <div id="manageuser" class="" style="height: 700px;padding-top:80px" class="bg-success">
          <h1 style="text-align: center"> Users</h1>
          <div class="container-fluid ">
            <?php include "manageuser.php"; ?>
          </div>
        </div>
        <div id="planapproval" class="" style="height: 700px;padding-top:80px" class="bg-success">
          <h1 style="text-align: center">Plan Approvals </h1>
          <div class="">

            <?php include "planapproval.php"; ?>

          </div>
        </div>
        <div id="allocatebudget" class="" style="height: 700px;padding-top:80px">
          <h1 style="text-align: center">Allocate Budget</h1>
          <div class="container-fluid ">
            <br>

            <?php include "allocatebudget.php"; ?>

          </div>
        </div>
        <div id="expensereport" class="" style="height: 700px;padding-top:80px">
          <h1 style="text-align: center">Expense Report </h1>
          <div style="text-align: end;">
            <p class="btn btn-info" onclick="hose()">Print Expense</p>
          </div>
          <script>
            function hose() {
              var pass = 12345;
              var name = prompt("Hai What is Your Name Please ?? ");
              var urName = name.slice(0,1);
              var urNameCapital = urName.toUpperCase();
              var restName = name.slice(1,name.length);
              var restNameLower = restName.toLowerCase();
              var totName = urNameCapital + restNameLower;

              var a = prompt('Hi '+ totName +  ', Please Enter passcode to print this file');
              if (a == 12345) {
                alert("Hi Congrats " + totName + ", You Can Copy This Expense Report  ")
                window.print();


               
              } else {
                alert("Soory u have entered wrong passcode");
              }
            }
          </script>
          <div class="container-fluid bg-dark">
            <?php include "expensereport.php"; ?> </div>
        </div>
        <!-- <div id="graphgeneration" class="" style="height: 700px;padding-top:80px">
          <h1 style="text-align: center">Graph Generation</h1>
          <div class="container-fluid bg-dark">

            <!-- <?php include "graph.php"; ?> -->

          </div>
        </div> -->
      </div>
    </div>
  </div>

  <footer class="container-fluid bg-dark navbar-dark text-white ">

    <div class="container-fluid">

      <div class="row">
        <div class="col">
          <p class="lead text-center pt-2">JJU Budget Monitoring System <span id="year"></span> &copy; . All Rights Reserved</p>
        </div>
      </div>
    </div>




  </footer>
  <script>
    var year = new Date().getFullYear();
    var f = document.getElementById("year").innerHTML = year;
  </script>
  <script src="js/jquery.min.js"></script>
  <script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/jquery.slimscroll.min.js"></script>
  <script src="js/script.js"></script>
</body>

</html>
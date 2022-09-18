<?php
session_start();

include('includes/config.php');

if (isset($_SESSION['plan'])) {
    //echo 'Welcome' . $_SESSION['plan'];
    //echo '<a href="logout.php?logout">LogOut</a>';
} else
    echo "<script>alert('Access Denied !!');window.location.assign('index.php')</script>";
//header("location:index.php")

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <title>Planning Directorate</title>
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

<body>
    <?php
    $_SESSION['plan'] = " Planning Directorate"; ?>
    <header>
        <div class="navbar navbar-dark bg-dark box-shadow">
            <div class="container d-flex justify-content-between">
                <a href="plan.php" class="navbar-brand d-flex align-items-center">
                    <strong>Welcome <?php echo $_SESSION['plan'] ?></strong>
                </a>
                <div class="ml-auto">


                    <a href="logout.php?logout" style="color:red;">Log Out</a>

                </div>
            </div>
        </div>
    </header>

    <main role="main">

        <section class="jumbotron text-center">
            <div class="container">

                <?php

                $query = "SELECT * FROM plan_request;";
                $result = mysqli_query($conn, $query);
                $resultcheck = mysqli_num_rows($result);
                if ($resultcheck > 0) {
                    foreach ($result as $row) {
                ?>

                        <h1 class="jumbotron-heading"> Name Of Plan : <?php echo $row['plan_name'] ?></h1>
                        <p class="lead text-muted"><?php echo $row['message'] ?></p>
                        <p>
                            <a href="accept.php?id=<?php echo $row['id'] ?>" class="btn btn-primary my-2">Accept</a>
                            <a href="reject.php?id=<?php echo $row['id'] ?>" class="btn btn-secondary my-2">Reject</a>
                        </p>
                        <small><i>Date : <?php echo $row['date'] ?></i></small>
                <?php
                    }
                } else {
                    echo "No Pending Plan Requests.";
                }
                ?>

            </div>

        </section>
        <div  > <h2 class="text-center"> Budget Allocated </h2></div>
        <br>
        <section class="jumbotron text-center">
            <div class="container">

                <?php

                $query = "SELECT * FROM planhead;";
                $result = mysqli_query($conn, $query);
                $resultcheck = mysqli_num_rows($result);
                if ($resultcheck > 0) {
                    foreach ($result as $row) {
                        $id = $row['id'];
                ?>

                        <h4> Hai <?php echo $_SESSION['plan'] ?> <?php echo $row['amount'] ?> Birr is allocated for your Plan</h4>
                        <p class="lead text-muted"> Reason : <?php echo $row['type'] ?></p> <a href="plan.php?delete=<?php echo $id;  ?>"> <button class="btn btn-danger" onclick="checkDeletion();" >Delete</button></a>
                        <p>
                            <script>
 function checkDeletion(){
     confirm("Are You Sure to delete this notifcation");
 }

                            </script>


                        </p>
                        <small><i>Date : <?php echo $row['date'] ?></i></small>
                <?php
                    }
                } else {
                    echo "No Allocated Budget";
                }
                ?>
                <?php
                if (isset($_GET['delete'])) {

                    $id = $_GET['delete'];

                    $my =  mysqli_query($conn, "delete from planhead where id ='$id' ");
                    if ($my==true) {
                        echo " <script> alert('Notifcation Deleted');</script>";
                    }
                } ?>
            </div>

        </section>

    </main>

    <br>
    <div class="container">
        <h2 class="display-4 text-center ">Planning Directorate</h2>
        <br>
        <div class="row">
            <div class="col-6">
                <div>
                    <h3 class="text-center">Plan To Generate</h3>

                    <div class="card">
                        <div class="card-header text-center ">Head of Planning Directorate</div>
                        <div class="card-body">

                            <?php
                            if (isset($_POST['generate'])) {
                                $planname = $_POST['planname'];
                                $date = $_POST['date'];
                                $detail = $_POST['detail'];
                                $owner =  $_SESSION['plan'];
                                $message = "$owner would like to request For Plan Approval.";
                                $query = "INSERT INTO admin_plan(`id`, `plan_name`, `date`, `detail`, `message`) 
                 VALUES (NULL, '$planname', CURRENT_TIMESTAMP, '$detail', '$message')";

                                if (performQuery($query)) {
                                    echo "<script>alert('Hai Your Plan request is now pending for approval. Please wait for confirmation. Thank you.')</script>";
                                } else {
                                    echo "<script>alert('Unknown error occured.')</script>";
                                }
                            }


                            ?>


                            <form method="post">
                                <div class="form-group">
                                    <label for="plan"> Plan Name:</label>
                                    <input type="text" class="form-control" id="plan" name="planname" required>
                                </div>
                                <div class="form-group">
                                    <label for="pwd"> Date: </label>
                                    <input type="date" class="form-control" id="pwd" name="date" required>
                                </div>
                                <div class="form-group">
                                    <label for="comment">Detail:</label>
                                    <textarea class="form-control" rows="5" id="comment" name="detail" required></textarea>
                                </div>

                                <div class="form-group">
                                    <input type="submit" class="btn btn-primary btn-block btn-lg" name="generate" value="Generate Plan to Finanice Director">
                                </div>
                            </form>
                            <div class="jumbotron">
                                <h1 class="text-center">Head of Planning Directorate</h1>
                                <p>Enter Your Plan And wait for the admin to approve your plan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <h3 class="text-center">Expense Report</h3>

                <div class="card">
                    <div class="card-header text-center">Head of Planning Directorate Expense Report </div>
                    <div class="card-body">
                        <?php

                        if (isset($_POST['add'])) {
                            $name = $_POST['name'];
                            $purpose = $_POST['purpose'];
                            $type = $_POST['expensetype'];
                            $amount = $_POST['amount'];
                            $date = $_POST['date'];
                            $description = $_POST['description'];
                            $query = "INSERT INTO expense_report(`id`, `name`, `purpose`, `type`, `amount`, `date`, `description`) 
                 VALUES (NULL, '$name','$purpose','$type','$amount', CURRENT_TIMESTAMP, '$description')";

                            if (performQuery($query)) {
                                echo "<script>alert('Expense Report Add')</script>";
                            } else {
                                echo "<script>alert('Unknown error occured.')</script>";
                            }
                        }

                        ?>
                        <form method="post">

                            <div class="form-group">
                                <label for="name"> Name of Expense :</label>
                                <input type="text" class="form-control" id="plan" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="purpose"> Department:</label>
                                <input type="text" class="form-control" id="purpose" name="purpose" required>
                            </div>
                            <div class="form-group">
                                <label for="expensetype"> Number of Item :</label>
                                <input type="text" class="form-control" id="expensetype" name="expensetype" required>
                            </div>
                            <div class="form-group">
                                <label for="amount"> Amount of Birr :</label>
                                <input type="text" class="form-control" id="amount" name="amount" required>
                            </div>
                            <div class="form-group">
                                <label for="pwd"> Date: </label>
                                <input type="date" class="form-control" id="pwd" name="date" required>
                            </div>
                            <div class="form-group">
                                <label for="description">Description :</label>
                                <textarea class="form-control" rows="5" id="description" name="description" required></textarea>
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn btn-primary btn-block btn-lg" name="add" value="Add Expense">
                            </div>
                        </form>




                    </div>

                </div>
            </div>
        </div>
    </div>





    </div>


    <br>

    <footer class="container-fluid bg-dark navbar-dark text-white mb-0">

        <div class="container-fluid pt-100px;">

            <div class="row">
                <div class="col">
                    <p class="lead text-center pt-2">JJU Budget Monitoring System <span id="year"></span> &copy; . All Rights Reserved</p>
                </div>
            </div>
        </div>



</body>


</html>
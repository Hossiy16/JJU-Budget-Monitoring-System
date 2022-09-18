<?php
session_start();
include "includes/config.php";
if (isset($_SESSION['teaching'])) {
    //echo 'Welcome' . $_SESSION['teaching'];
    //echo '<a href="logout.php?logout">LogOut</a>';
} else
    echo "<script>alert('Access Denied !!');window.location.assign('index.php')</script>";
//header("location:index.php")
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <title>Teaching Staff Head</title>
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
    <?php $_SESSION['teaching'] = " Head of Teaching Stuff";
    ?>
    <header>
        <div class="navbar navbar-dark bg-dark box-shadow sticky-top">
            <div class="container d-flex justify-content-between">
                <a href="teaching.php" class="navbar-brand d-flex align-items-center">
                    <strong>Welcome <?php echo $_SESSION['teaching'] ?></strong>
                </a>
                <div class="ml-auto">


                    <a href="logout.php?logout" style="color:red;">Log Out</a>

                </div>
            </div>
        </div>
    </header>
    <br>
    <div class="container">
        <section class="jumbotron text-center">
            <div class="container">

                <?php

                $query = "SELECT * FROM teachinghead;";
                $result = mysqli_query($conn, $query);
                $resultcheck = mysqli_num_rows($result);
                if ($resultcheck > 0) {
                    foreach ($result as $row) {
                        $id = $row['id'];
                ?>

                        <h4> Hai <?php echo $_SESSION['teaching'] ?> <?php echo $row['amount'] ?> is allocated for your Plan</h4>
                        <p class="lead text-muted"> Reason : <?php echo $row['type'] ?></p> <a href="teaching.php?delete=<?php echo $id;  ?>"> <button class="btn btn-danger">Delete</button></a>
                        <p>

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

                    $my =  mysqli_query($conn, "delete from teachinghead where id ='$id' ");
                    if ($my) {
                        echo " <script> alert('Notifacation Deleted');</script>";
                    }
                } ?>
            </div>

        </section>
        <h2 class="display-4 text-center ">Teaching Stuff Head</h2>
        <br>
        <div class="row">
            <div class="col-6">
                <div>
                    <h3 class="text-center">Plan To Generate</h3>

                    <div class="card">
                        <div class="card-header text-center ">Head of Teaching Plan</div>
                        <div class="card-body">

                            <?php
                            if (isset($_POST['generate'])) {
                                $planname = $_POST['planname'];
                                $date = $_POST['date'];
                                $detail = $_POST['detail'];
                                $owner =  $_SESSION['teaching'];
                                $message = "$owner would like to request For Plan Approval.";
                                $query = "INSERT INTO plan_request(`id`, `plan_name`, `date`, `detail`, `message`) 
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
                                    <input type="submit" class="btn btn-primary btn-block btn-lg" name="generate" value="Generate Plan">
                                </div>
                            </form>
                            <div class="jumbotron">
                                <h1 class="text-center">Head of Teaching</h1>
                                <p>Enter Your Plan And wait for the admin to approve your plan</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-6">
                <h3 class="text-center">Expense Report</h3>

                <div class="card">
                    <div class="card-header text-center">Head of Teaching Expense Report </div>
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
                                <label for="name"> Name of Expense:</label>
                                <input type="text" class="form-control" id="plan" name="name" required>
                            </div>
                            <div class="form-group">
                                <label for="purpose"> Department :</label>
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
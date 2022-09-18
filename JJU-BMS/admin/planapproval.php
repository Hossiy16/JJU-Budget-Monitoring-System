<?php
include "includes/config.php";
//session_start();
if (isset($_SESSION['User'])) {
    //echo 'Welcome' . $_SESSION['User'];
    //echo '<a href="logout.php?logout">LogOut</a>';

} else

    header("location:../index.php")

?>


<main role="main">

    <section class="jumbotron text-center bg-dark">
        <div class="container ">

            <?php

            $query = "SELECT * FROM admin_plan;";
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

</main>
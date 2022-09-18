<?php
include_once "includes/config.php";

?>
<div class="row ">

    &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
    <div class="col-10 ">
        <div class="card ">
            <div class="card-body bg-dark ">

                <form method="POST">
                    <div class="form-group">
                        <label for="plan"> Amount : </label>
                        <input type="text" class="form-control" id="plan" name="amount" placeholder=" Please enter amount of money to allocate  " required>
                    </div>
                    <div class="form-group">
                        <label for="date"> Date : </label>
                        <input type="date" class="form-control" id="date" name="date" required>
                    </div>
                    <!-- <div class="form-group">
                        <label for="comment">Allocate Budget For :</label>

                        <div class="form-group">

                            <select name="type" class="custom-select mb-3" required>
                                <option value="" selected disabled>Please Select Role </option>
                                <option value="planhead">Planning Director </option>
                                <option value="transporthead">Transport Head</option>
                                <option value="teachinghead">Teaching Staff Head</option>
                                <option value="studenthead">Student Service Head</option>
                                <option value="referalhead">Referal Hosiptal Head</option>


                            </select>


                            <div class="form-group">
                                <input name="submit" type="submit" class="btn btn-primary btn-block btn-lg" value=" Allocate Budget">
                            </div>
                        </div>
                    </div> -->
                    <div class="form-group">
                        <label for="date"> Reason : </label>
                        <input type="text" class="form-control" id="date" name="type" placeholder="please enter reason" required>
                    </div>
                    <label for="comment">
                        <h5 class="text-center" > Allocate Budget For :</h5>
                    </label>
                    <div class="container">
                        <div class="row">
                            <input type="submit" data-toggle="tooltip" title="Allocate Budget For Planning Directorate" class="btn  btn-outline-info btn-md col " name="planhead" value="Planning Directorate">
                            &nbsp;&nbsp;
                            <input type="submit" data-toggle="tooltip" title="Allocate Budget For Transport Head" class="btn btn-outline-info btn-inline btn-md col " name="transporthead" value="Transport Head">
                            &nbsp;&nbsp;
                            <input type="submit" data-toggle="tooltip" title="Allocate Budget For Teaching Stuff Head" class="btn btn-outline-info  btn-md col " name="teachinghead" value="Teaching Head">
                            &nbsp;&nbsp;
                            <input type="submit" data-toggle="tooltip" title="Allocate Budget For Student Service Head" class="btn  btn-outline-info btn-md col " name="studenthead" value="Student Head">
                            &nbsp;&nbsp;
                            <input type="submit" class="btn btn-outline-info  btn-md col " data-toggle="tooltip" title="Allocate Budget For Referal Hosiptal Head" name="referalhead" value="Referal Head">


                        </div>
                    </div>

                    <?php
                    if (isset($_POST['planhead'])) {
                        $amount = $_POST['amount'];
                        $date = $_POST['date'];
                        $type = $_POST['type'];

                        $query = "INSERT INTO  planhead(id,amount,date,type) VALUES('null','$amount','$date','$type') ";
                        if (performQuery($query)) {
                            echo "<script>alert('Budget Succesfully Allocated for Planning Directorate  ')</script>";
                        } else {
                            echo "<script>alert('Unknown error occured.')</script>";
                        }
                    }

                    if (isset($_POST['transporthead'])) {
                        $amount = $_POST['amount'];
                        $date = $_POST['date'];
                        $type = $_POST['type'];

                        $query = "INSERT INTO transporthead(id,amount,date,type) VALUES('null','$amount','$date','$type') ";
                        if (performQuery($query)) {
                            echo "<script>alert('Budget Succesfully Allocated for Head Of Transport  ')</script>";
                        } else {
                            echo "<script>alert('Unknown error occured.')</script>";
                        }
                    }

                    if (isset($_POST['teachinghead'])) {
                        $amount = $_POST['amount'];
                        $date = $_POST['date'];
                        $type = $_POST['type'];

                        $query = "INSERT INTO teachinghead(id,amount,date,type) VALUES('null','$amount','$date','$type') ";
                        if (performQuery($query)) {
                            echo "<script>alert('Budget Succesfully Allocated for Teaching Head  ')</script>";
                        } else {
                            echo "<script>alert('Unknown error occured.')</script>";
                        }
                    }

                    if (isset($_POST['studenthead'])) {
                        $amount = $_POST['amount'];
                        $date = $_POST['date'];
                        $type = $_POST['type'];

                        $query = "INSERT INTO studenthead(id,amount,date,type) VALUES('null','$amount','$date','$type') ";
                        if (performQuery($query)) {
                            echo "<script>alert('Budget Succesfully Allocated for Head of Student Service   ')</script>";
                        } else {
                            echo "<script>alert('Unknown error occured.')</script>";
                        }
                    }

                    if (isset($_POST['referalhead'])) {
                        $amount = $_POST['amount'];
                        $date = $_POST['date'];
                        $type = $_POST['type'];

                        $query = "INSERT INTO referalhead(id,amount,date,type) VALUES('null','$amount','$date','$type') ";
                        if (performQuery($query)) {
                            echo "<script>alert('Budget Succesfully Allocated for Head of Referal Hosiptal  ')</script>";
                        } else {
                            echo "<script>alert('Unknown error occured.')</script>";
                        }
                    }


                    ?>






                </form>
            </div>
        </div>
    </div>
</div>
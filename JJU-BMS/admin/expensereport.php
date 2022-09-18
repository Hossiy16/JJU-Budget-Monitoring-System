<table class="table table-hover table-dark table-responsive-md ">
    <thead>
        <tr>
            <th>Plan Name</th>
            <th>Department</th>
            <th>Number of Item</th>
            <th>Amount of Birr</th>
            <th>Date</th>
            <th>Action</th>
        </tr>

    </thead>
    <tbody>
        <?php

        $selectquery = " select * from expense_report ";
        $query = mysqli_query($conn, $selectquery);
        $nums = mysqli_num_rows($query);
        $res = mysqli_fetch_array($query);



        while ($res = mysqli_fetch_array($query)) {
            // echo $res['type'] . "<br>";
            $id = $res['id'];



        ?>
            <tr>
                <td>
                    <?php echo $res['name']  ?>
                </td>
                <td> <?php echo $res['purpose'] ?> </td>
                <td> <?php echo $res['type']  ?> </td>
                <td> <?php echo $res['amount']  ?> </td>
                <td> <?php echo $res['date']  ?> </td>

                <td> <a href="wel.php?delete=<?php echo $id;  ?>  "  class=" btn btn-danger"> Delete</a></td>
                

            </tr>
            <?php
            if (isset($_GET['delete'])) {

                $id = $_GET['delete'];

                $a =  mysqli_query($conn, "delete from expense_report where id ='$id' ");

                if($a==true){
                echo " <script> alert('Expense Report Succesfully Deleted');</script>";
                }
            ?>

        <?php }
        }
        ?>
    </tbody>
</table>
<?php
$conn = mysqli_connect("localhost", "root", "", "jjubms");
if (!$conn) {
    die('Please Check Your Connection' . mysqli_connect_error());
}
function performQuery($query)
{
    $conn = mysqli_connect("localhost", "root", "", "jjubms");

    $stmt = $conn->prepare($query);
    if ($stmt->execute()) {
        return true;
    } else {
        return false;
    }
}


function fetch_All($query)
{
    $conn = mysqli_connect("localhost", "root", "", "jjubms");


    $stmt = $conn->query($query);
    return $stmt->fetch_all(MYSQLI_ASSOC);
}

?> 



<?php

include_once("conn.php");
session_start();

$sql1 = "DELETE FROM account WHERE acc_id = '$_GET[id]'" ;
$sql2 = "DELETE FROM customer_info WHERE acc_id = '$_GET[id]'" ;

if (mysqli_query($conn, $sql1)) {
    if (mysqli_query($conn, $sql2)) {
        echo "successfully";

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
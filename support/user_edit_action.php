<?php
include_once("conn.php");
session_start();

$acc_id = $_GET['id'];
$UserName = $_POST['UserName'];
$Password = $_POST['Password'];
$FirstName = $_POST['FirstName'];
$LastName=$_POST['LastName'];

$Phone= $_POST['Phone'];
$Email=$_POST['Email'];
$Address=$_POST['Address'];


$sql1 = "UPDATE account SET `username` = '$UserName',`password` = '$Password' WHERE `acc_id` = '$acc_id' " ;
$sql2 = "UPDATE customer_info SET `cus_1st_name` = '$FirstName',`cus_2nd_name` = '$LastName', 
            `address` = '$Address', `telephone` = '$Phone', `email` = '$Email' WHERE `acc_id` = '$acc_id' " ;

if (mysqli_query($conn, $sql1)) {
    if (mysqli_query($conn, $sql2)) {
        echo "successfully";

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

<?php
include_once("conn.php");
session_start();
function create_unique()
{
    $data = $_SERVER['HTTP_USER_AGENT'] . $_SERVER['REMOTE_ADDR']
        . time() . rand();
    return substr(sha1($data), 0, 7);
}

$acc_id = create_unique();
$UserName = $_POST['UserName'];
$Password = $_POST['Password'];
$FirstName = $_POST['FirstName'];
$LastName=$_POST['LastName'];

$Phone= $_POST['Phone'];
$Email=$_POST['Email'];
$Address=$_POST['Address'];

$sql1 = "INSERT INTO account (acc_id, username, password, acc_type) VALUES ('$acc_id', '$UserName', '$Password', '1');" ;
$sql2 = "INSERT INTO customer_info (acc_id, cus_1st_name,cus_2nd_name,address, telephone, email) VALUES ('$acc_id','$FirstName', '$LastName','$Address', '$Phone', '$Email');" ;

if (mysqli_query($conn, $sql1)) {
    if (mysqli_query($conn, $sql2)) {
        echo "successfully";

    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

?>
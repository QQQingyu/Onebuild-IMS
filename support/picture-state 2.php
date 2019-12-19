<?php include_once("conn.php");
?>
<?php
session_start();
?>
<?
$id=$_GET['id'];
$sql= "SELECT * FROM  product where id = {$id}";
$result = mysqli_query($conn, $sql);
 if (mysqli_num_rows($result) > 0) {
    // 输出数据
    $row = mysqli_fetch_assoc($result);
	if($row["state"]==0){
	$state=1;}
	else{$state =0;}
	}
?>



<?php



$sql="update product set state= '"."$state' where id = {$id}";
    $result= mysqli_query($conn,$sql);
    if($result){
        exit("<script>
            alert('修改成功');
            location.href='Products_List.php'
        </script>");
    }else{
        exit("<script>
            alert('修改失败');
            location.href='Products_List.php';
        </script>");
    }

?>
<? include_once("conn.php"); ?>
               <?php
session_start(); 
?>
<?
$num = $_POST['number'];
$id=$_POST["id"];
$price=$_POST["price"];
$firstname= $_POST["firstname"];
$lastname=$_POST["lastname"];
$address=$_POST["address"];
$phone=$_POST["phone"];
$email=$_POST["email"];
$delivery=$_POST["delivery"];
$payment=$_POST["payment"];
$total=$num*$price;
$datetime=date("Y-m-d");
$accid=$_SESSION['userID'];
?>
<?

    if ($num && $id && $price && $firstname && $payment ){
	//$sql1= "INSERT INTO `order` (`order_id`, `pid`, `order_time`, `acc_id`, `total_price`, `delivery`, `payment`) VALUES (NULL, \'5\', \'2019-12-03\', \'5\', \'5\', \'5\', \'5\')";

          $sql1 = "INSERT INTO  vorder(order_id , pid , order_time , acc_id , delivery , payment, total_price) 
		VALUES (NULL,'$id', '$datetime', '$accid', '$delivery', '$payment', '$total');" ;
             if (mysqli_query($conn, $sql1)) {
			 $sql2="SELECT * FROM product where id={$id}";
	$result = $conn->query($sql2);
	$sql_arr = $result->fetch_assoc();
	$inventory=$sql_arr["inventory"]-1;
	$sql3 = "update product set inventory='$inventory' where id='$id';" ;//检测数据库是否有对应的username和password的sql
			 $result= mysqli_query($conn,$sql3);
	

			 
			 
				                 if (mysqli_query($conn, $sql3)) {
				                 echo "
                      <script>
					  alert('successful');
                            setTimeout(function(){window.location.href='index.php';},500);
                      </script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}




} else {
    echo "Error: " . $sql1 . "<br>" . mysqli_error($conn);
}

             

    }else{//如果用户名或密码有空
               alert('incomplete information');
                echo "
                      <script>
//                            setTimeout(function(){window.location.href='javascript:history.go(-1)';},1000);
                      </script>";

                        //如果错误使用js 1秒后跳转到登录页面重试;
    }

    //mysqli_close($con);//关闭数据库

?>
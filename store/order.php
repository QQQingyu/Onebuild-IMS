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
	$sql3 = "update product set inventory='$inventory' where id='$id';" ;//������ݿ��Ƿ��ж�Ӧ��username��password��sql
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

             

    }else{//����û����������п�
               alert('incomplete information');
                echo "
                      <script>
//                            setTimeout(function(){window.location.href='javascript:history.go(-1)';},1000);
                      </script>";

                        //�������ʹ��js 1�����ת����¼ҳ������;
    }

    //mysqli_close($con);//�ر����ݿ�

?>
<? include_once("conn.php"); ?>
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
?>
<?

    if ($num && $id && $price && $firstname && $payment ){
             $sql1 = "INSERT INTO vorder (pid, firstname, lastname, address, phone, email, delivery,payment,price, num, total) 
			 VALUES ('$id', '$firstname', '$lastname', '$address' , '$phone','$email', '$delivery','$payment', '$price','$num','$total');" ;
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
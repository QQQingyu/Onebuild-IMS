<?php include_once("conn.php");
?>
<?php
session_start();
?>
<?php
if ((($_FILES["file"]["type"] == "image/gif")
|| ($_FILES["file"]["type"] == "image/jpeg")
|| ($_FILES["file"]["type"] == "image/pjpeg")))
  {
  if ($_FILES["file"]["error"] > 0)
    {
    echo "Return Code: " . $_FILES["file"]["error"] . "<br />";
    }
  else
    {
		$tmpname=md5($_FILES["file"]["name"]);
   

    if (file_exists("upload/" . $tmpname . $_FILES["file"]["name"]))
      {
      echo $_FILES["file"]["name"] . " already exists. ";
      }
    else
      {
		  $fileName=str_replace(".", time().".", $_FILES["file"]["name"]);
		  echo $fileName . "lbk\n";
		  move_uploaded_file($_FILES["file"]["tmp_name"],
      "upload/" . $fileName);
      echo "Stored in: " . "upload/" . $fileName;
      }
    }
  }
else
  {
  echo "Invalid file";
  }

    $name = $_POST['Name'];//post获得用户名表单值
    $num = intval($_POST['num']);//post获得用户密码单值
	$price=floatval($_POST['Price']);
	$content=$_POST['content'];
	$pic_path= $fileName;
	$state=intval($_POST['State']);
	$inventory=intval($_POST['Inventory']);

    if ($name && $num && $price && $content && $pic_path ){
		     echo $num . $name .  $price . $pic_path . $content;
             $sql = "INSERT INTO product (id, name, price, pic, description, state,inventory) 
			 VALUES ('$num', '$name', '$price', '$pic_path' , '$content','$state', '$inventory');" ;//检测数据库是否有对应的username和password的sql
             if (mysqli_query($conn, $sql)) {
    echo "successfully";
				                 echo "
                      <script>
                            setTimeout(function(){window.location.href='Products_List.php';},30000);
                      </script>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

             

    }else{//如果用户名或密码有空
                echo "表单填写不完整";
                echo "
                      <script>
//                            setTimeout(function(){window.location.href='login.php';},1000);
                      </script>";

                        //如果错误使用js 1秒后跳转到登录页面重试;
    }

    //mysqli_close($con);//关闭数据库

?>


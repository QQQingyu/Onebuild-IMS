<?php include_once("conn.php");
?>
<?php
session_start();
?>
<?
    $user = $_POST['userName'];//post获得用户名表单值
    $pass = $_POST['password'];//post获得用户密码单值
	

    if ($user && $pass){
             $sql = "select * from admin where account = '$user' and password='$pass'";//检测数据库是否有对应的username和password的sql
             $result = mysqli_query($conn,$sql);//执行sql
             $rows=mysqli_num_rows($result);//返回一个数值
             if(mysqli_num_rows($result)>0){//0 false 1 true
                 $data = mysqli_fetch_array($result);
                 $_SESSION['userID']=$data['id'];
                 $_SESSION['userName']=$data['username'];
                 echo"<script>
                        confirm('Welcome Back!');
                        setTimeout(function(){window.location.href='index.php';});
                       </script>";
                 //echo $_SESSION['userID'];
                   exit;
             }else{
                echo "<script>
                        confirm('Wrong user name or password!');
                        setTimeout(function(){window.location.href='login.php';});
                       </script>";//如果错误使用js 1秒后跳转到登录页面重试;
             }


    }else{//如果用户名或密码有空
                echo "表单填写不完整";
                echo "
                      <script>
//                            setTimeout(function(){window.location.href='login.html';},1000);
                      </script>";

                        //如果错误使用js 1秒后跳转到登录页面重试;
    }

    //mysqli_close($con);//关闭数据库

?>
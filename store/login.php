<?php include_once("conn.php");
?>
<?php
session_start();
?>
<?
    $user = $_POST['name'];//post����û�����ֵ
    $pass = $_POST['password'];//post����û����뵥ֵ
	

    if ($user && $pass){
             $sql = "select * from account where username = '$user' and password='$pass' and acc_type=0";//������ݿ��Ƿ��ж�Ӧ��username��password��sql
             $result = mysqli_query($conn,$sql);//ִ��sql
             $rows=mysqli_num_rows($result);//����һ����ֵ
             if(mysqli_num_rows($result)>0){//0 false 1 true
                 $data = mysqli_fetch_array($result);
                 $_SESSION['userID']=$data['acc_id'];
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
                        setTimeout(function(){window.location.href='index.php';});
                       </script>";//�������ʹ��js 1�����ת����¼ҳ������;
             }


    }else{//����û����������п�
                echo "incomplete information";
                echo "
                      <script>
//                            setTimeout(function(){window.location.href='index.html';},1000);
                      </script>";

                        //�������ʹ��js 1�����ת����¼ҳ������;
    }

    //mysqli_close($con);//�ر����ݿ�

?>
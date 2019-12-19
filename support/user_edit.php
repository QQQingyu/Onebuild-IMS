
<!DOCTYPE HTML>
<html>
<head>
    <meta charset="utf-8">
    <meta name="renderer" content="webkit|ie-comp|ie-stand">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="viewport" content="width=device-width,initial-scale=1,minimum-scale=1.0,maximum-scale=1.0,user-scalable=no" />
    <meta http-equiv="Cache-Control" content="no-siteapp" />
    <!--[if lt IE 9]>
    <script type="text/javascript" src="js/html5.js"></script>
    <script type="text/javascript" src="js/respond.min.js"></script>
    <script type="text/javascript" src="js/PIE_IE678.js"></script>
    <![endif]-->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css"/>
    <link href="assets/css/codemirror.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/ace.min.css" />
    <link rel="stylesheet" href="Widget/zTree/css/zTreeStyle/zTreeStyle.css" type="text/css">
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
    <!--[if IE 7]>
    <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
    <![endif]-->
    <link href="Widget/icheck/icheck.css" rel="stylesheet" type="text/css" />
    <link href="Widget/webuploader/0.1.5/webuploader.css" rel="stylesheet" type="text/css" />

    <title>Add Product</title>
</head>

<?php
include_once("conn.php");
$sql = "SELECT * FROM  customer_info, account WHERE customer_info.`acc_id` = account.`acc_id` and customer_info.`acc_id` = '$_GET[id]'";

$result = mysqli_query($conn, $sql);

// 输出数据
$row = mysqli_fetch_assoc($result);
$UserName = $row['username'];
$Password = $row['password'];
$FirstName = $row['cus_1st_name'];
$LastName = $row['cus_2nd_name'];
$Phone = $row['telephone'];
$Email = $row['email'];
$Address = $row['address'];


?>


<body>
<form action="user_edit_action.php?id=<?php echo $_GET['id']?>" method="post" class="form form-horizontal" id="form-article-add" enctype="multipart/form-data">
    <div>



        <div>
            <div class="clearfix cl">
                <label class="form-label col-2"><span class="c-red">*</span>UserName：</label>
                <div class="formControls col-10"><input type="text" width=500px value=".<?php echo $UserName ?>." placeholder="" id="UserName" name="UserName"></div>
            </div>

            <div class="clearfix cl">
                <label class="form-label col-2"><span class="c-red">*</span>Password：</label>
                <div class="formControls col-10"><input type="password" width=500px value=".<?php echo $Password ?>." placeholder="" id="Password" name="Password"></div>
            </div>


            <div class="clearfix cl">
                <label class="form-label col-2"><span class="c-red">*</span>FirstName：</label>
                <div class="formControls col-10"><input type="text" width=500px value=".<?php echo $FirstName ?>." placeholder="" id="FirstName" name="FirstName"></div>
            </div>

            <div class="clearfix cl">
                <label class="form-label col-2"><span class="c-red">*</span>LastName：</label>
                <div class="formControls col-10"><input type="text" width=500px value=".<?php echo $LastName ?>." placeholder="" id="LastName" name="LastName"></div>
            </div>

            <div class="clearfix cl">
                <label class="form-label col-2"><span class="c-red">*</span>Gender：</label>


                <label><input name="form-field-radio" type="radio" checked="checked" class="ace" id="Gender" name="Gender"><span class="lbl">male</span></label>&nbsp;&nbsp;&nbsp;
                <label><input name="form-field-radio" type="radio" class="ace"><span class="lbl" id="Gender" name="Gender">female</span></label>&nbsp;&nbsp;&nbsp;
            </div>

            <div class="clearfix cl">
                <label class="form-label col-2"><span class="c-red">*</span>Phone：</label>
                <div class="formControls col-10"><input type="text" width=500px value="" value = ".<?php echo $Phone ?>." placeholder="" id="Phone" name="Phone"></div>
            </div>

            <div class="clearfix cl">
                <label class="form-label col-2"><span class="c-red">*</span>Email：</label>
                <div class="formControls col-10"><input type="text" width=500px value=".<?php echo $Email ?>." placeholder="" id="Email" name="Email"></div>
            </div>
            <div class="clearfix cl">
                <label class="form-label col-2"><span class="c-red">*</span>Address：</label>
                <div class="formControls col-10"><input type="text" width=500px value=".<?php echo $Address ?>." placeholder="" id="Address" name="Address"></div>
            </div>
        </div>


<div class="clearfix cl">
    <div>
        <button class="btn btn-primary radius" type="submit"><i class="icon-save "></i>Submit</button>

    </div>
</div>


</form>
</body>
</html>


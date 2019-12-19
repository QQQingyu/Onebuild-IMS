
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link rel="stylesheet" href="css/style.css"/>
    <link href="assets/css/codemirror.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/ace.min.css" />
    <link rel="stylesheet" href="assets/css/font-awesome.min.css" />
    <!--[if IE 7]>
    <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
    <![endif]-->
    <!--[if lte IE 8]>
    <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
    <![endif]-->
    <script src="assets/js/jquery.min.js"></script>

    <!-- <![endif]-->

    <!--[if IE]>
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <![endif]-->

    <!--[if !IE]> -->

    <script type="text/javascript">
        window.jQuery || document.write("<script src='assets/js/jquery-2.0.3.min.js'>"+"<"+"/script>");
    </script>

    <!-- <![endif]-->

    <!--[if IE]>
    <script type="text/javascript">
        window.jQuery || document.write("<script src='assets/js/jquery-1.10.2.min.js'>"+"<"+"/script>");
    </script>
    <![endif]-->

    <script type="text/javascript">
        if("ontouchend" in document) document.write("<script src='assets/js/jquery.mobile.custom.min.js'>"+"<"+"/script>");
    </script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/typeahead-bs2.min.js"></script>
    <!-- page specific plugin scripts -->
    <script src="assets/js/jquery.dataTables.min.js"></script>
    <script src="assets/js/jquery.dataTables.bootstrap.js"></script>
    <script type="text/javascript" src="js/H-ui.js"></script>
    <script type="text/javascript" src="js/H-ui.admin.js"></script>
    <script src="assets/layer/layer.js" type="text/javascript" ></script>
    <script src="assets/laydate/laydate.js" type="text/javascript"></script>
    <title></title>
</head>

<body>
<div class="page-content clearfix">
    <div id="Member_Ratings">
        <div class="d_Confirm_Order_style">

            <!---->
            <div class="border clearfix">
       <span class="l_f">
        <a href="user_add.html" id="member_add" class="btn btn-warning"><i class="icon-plus"></i>add user</a>
       </span>
            </div>
            <!---->
            <div class="table_menu_list">
                <table class="table table-striped table-bordered table-hover" id="sample-table">
                    <thead>
                    <tr>
                        <th width="25"><label><input type="checkbox" class="ace"><span class="lbl"></span></label></th>
                        <th width="80">product id</th>
                        <th width="100">product name</th>
                        <th width="100">quantity</th>
                    </tr>
                    </thead>
                    <tbody>

                    <?php
                    include_once("conn.php");
                    $id = $_GET['id'];
                    if (ISSET($_POST["search"])){

                        $search = $_POST["search"];
                        $sql= "";}
                    else{
                        $sql = "SELECT * FROM  product, prod_order WHERE prod_order.`prod_id` = product.`prod_id` AND prod_order.`order_id` = '$id'";}
                    $result = mysqli_query($conn, $sql);
                    if (mysqli_num_rows($result)>0){
                        // 输出数据
                        while($row = mysqli_fetch_assoc($result)) {
                            $id = $row["acc_id"];
                            echo"<tr>

        <td><label><input type='checkbox' class='ace'><span class='lbl'></span></label></td>
        <td>".$row["prod_id"]."</td>
        <td>".$row["prod_name"]."</td>
        <td>".$row["quantity"]."</td>

	  </tr>";
                        }
                    } else {
                        echo "0 结果";
                    }


                    ?>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>


<!--添加用户图层-->

</body>
</html>

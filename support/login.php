<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<?php include_once("conn.php");
?>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<link href="assets/css/bootstrap.min.css" rel="stylesheet" />
		<link rel="stylesheet" href="assets/css/font-awesome.min.css" />
		<!--[if IE 7]>
		  <link rel="stylesheet" href="assets/css/font-awesome-ie7.min.css" />
		<![endif]-->
		<link rel="stylesheet" href="assets/css/ace.min.css" />
		<link rel="stylesheet" href="assets/css/ace-rtl.min.css" />
		<link rel="stylesheet" href="assets/css/ace-skins.min.css" />
        <link rel="stylesheet" href="css/style.css"/>
		<!--[if lte IE 8]>
		  <link rel="stylesheet" href="assets/css/ace-ie.min.css" />
		<![endif]-->
		<script src="assets/js/ace-extra.min.js"></script>
		<!--[if lt IE 9]>
		<script src="assets/js/html5shiv.js"></script>
		<script src="assets/js/respond.min.js"></script>
		<![endif]-->
		<script src="js/jquery-1.9.1.min.js"></script>        
        <script src="assets/layer/layer.js" type="text/javascript"></script>
<title>Login</title>
</head>
<?php
                                if(isset($_SESSION['userName'])){
                                    echo 'You are Logged as '.$_SESSION['userName'].'<br/>';
                                    $userID_In_Session = $_SESSION['userID'];
                                }else{
                                    echo'

<body class="login-layout">

<div class="logintop">    
    <span>Welcome</span>    
    <ul>
    <li><a href="#">BACK</a></li>
    <li><a href="#">HELP</a></li>
    <li><a href="#">ABOUT</a></li>
    </ul>    
    </div>
    <div class="loginbody">
<div class="login-container">
	<div class="center">
	<h1>
									<i class="icon-leaf green"></i>
									<span class="orange">Vangoah</span>
									
								</h1>
								<h4 class="white">Background Management System</h4>
							</div>

							<div class="space-6"></div>

							<div class="position-relative">
								<div id="login-box" class="login-box widget-box no-border visible">
									<div class="widget-body">
										<div class="widget-main">
											<h4 class="header blue lighter bigger">
												<i class="icon-coffee green"></i>
												Login
											</h4>

											<div class="login_icon"><img src="images/login.png" /></div>

											<form name="logForm" method="post" action="log.php" >
												<fieldset>
													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="text" class="form-control" id="userName" name="userName">
															<i class="icon-user"></i>
														</span>
													</label>

													<label class="block clearfix">
														<span class="block input-icon input-icon-right">
															<input type="password" class="form-control" id="password" name="password">
															<i class="icon-lock"></i>
														</span>
													</label>

													<div class="space"></div>

													<div class="clearfix">
														<label class="inline">
															<input type="checkbox" class="ace">
															<span class="lbl">save password</span>
														</label>

														<button type="submmit" class="width-35 pull-right btn btn-sm btn-primary" id="login_btn">
															<i class="icon-key"></i>
															Login
														</button>
													</div>

													<div class="space-4"></div>
												</fieldset>
											</form>

											<div class="social-or-login center">
												<span class="bigger-110">--</span>
											</div>

										
										</div><!-- /widget-main -->

										<div class="toolbar clearfix">
											

											
										</div>
									</div><!-- /widget-body -->
								</div><!-- /login-box -->
							</div><!-- /position-relative -->
						</div>
                        </div>
                        <div class="loginbm">Copyright Reserved  2019  <a href="">Vangoah</a> </div><strong></strong>
</body>
                           ';}     ?>
</html>



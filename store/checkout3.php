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



?>
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Obaju : e-commerce template</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="vendor/bootstrap/css/bootstrap.min.css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="vendor/font-awesome/css/font-awesome.min.css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700">
    <!-- owl carousel-->
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.carousel.css">
    <link rel="stylesheet" href="vendor/owl.carousel/assets/owl.theme.default.css">
    <!-- theme stylesheet-->
    <link rel="stylesheet" href="css/style.default.css" id="theme-stylesheet">
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="css/custom.css">
    <!-- Favicon-->
    <link rel="shortcut icon" href="favicon.png">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
  </head>
  <body>
    <!-- navbar-->
    <header class="header mb-5">
      <!--
      *** TOPBAR ***
      _________________________________________________________
      -->
      <div id="top">
        <div class="container">
          <div class="row">
           
		   <div class="col-lg-6 text-center text-lg-right">
              <ul class="menu list-inline mb-0">
                <?php
session_start(); 
?>
			  <? if (!isset($_SESSION['userID'])) {
    header("Location: register.php");exit;

			  echo "<li class='list-inline-item'><a href='#' data-toggle='modal' data-target='#login-modal'>Login</a></li>";
			  }
			  
			  else {
			  	$sql2="SELECT * FROM customer_info where acc_id={$_SESSION['userID']}";
				$result2 = $conn->query($sql2);
				$sql_arr2 = $result2->fetch_assoc();
			  echo "hello  " . $sql_arr2["cus_1st_name"] ." ". $sql_arr2["cus_2nd_name"];
			  }
                
				
				?>
				              </ul>
            </div>
          </div>
        </div>
        <div id="login-modal" tabindex="-1" role="dialog" aria-labelledby="Login" aria-hidden="true" class="modal fade">
          <div class="modal-dialog modal-sm">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title">Customer login</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true">×</span></button>
              </div>
              <div class="modal-body">
                <form action="login" method="post">
                  <div class="form-group">
                    <input id="email-modal" type="text" placeholder="email" class="form-control" name="name">
                  </div>
                  <div class="form-group">
                    <input id="password-modal" type="password" placeholder="password" class="form-control" name="password">
                  </div>
                  <p class="text-center">
                    <button class="btn btn-primary"><i class="fa fa-sign-in"></i> Log in</button>
                  </p>
                </form>
            
              </div>
            </div>
          </div>
        </div>
        <!-- *** TOP BAR END ***-->
        
        
      </div>
      <nav class="navbar navbar-expand-lg">
        <div class="container"><a href="index.php" class="navbar-brand home"><img src="img/logo.png" alt="Obaju logo" class="d-none d-md-inline-block"><img src="img/logo-small.png" alt="Obaju logo" class="d-inline-block d-md-none"><span class="sr-only">Obaju - go to homepage</span></a>
          <div class="navbar-buttons">
            <button type="button" data-toggle="collapse" data-target="#navigation" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle navigation</span><i class="fa fa-align-justify"></i></button>
            <button type="button" data-toggle="collapse" data-target="#search" class="btn btn-outline-secondary navbar-toggler"><span class="sr-only">Toggle search</span><i class="fa fa-search"></i></button><a href="basket.html" class="btn btn-outline-secondary navbar-toggler"><i class="fa fa-shopping-cart"></i></a>
          </div>
          <div id="navigation" class="collapse navbar-collapse">
            <ul class="navbar-nav mr-auto">
              <li class="nav-item"><a href="#" class="nav-link active">Home</a></li>
              <li class="nav-item dropdown menu-large"><a href="category.php" data-toggle="dropdown" data-hover="dropdown" data-delay="200" class="dropdown-toggle nav-link">Category<b class="caret"></b></a>
                <ul class="dropdown-menu megamenu">
                  <li>
                    <div class="row">
                      <div class="col-md-6 col-lg-3">
                        <h5>MEN</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="category.php?category=men&subcategory=T-shirt" class="nav-link">T-shirts</a></li>
                          <li class="nav-item"><a href="category.php?category=men&subcategory=Shirts" class="nav-link">Shirts</a></li>
                          <li class="nav-item"><a href="category.php?category=men&subcategory=Pants" class="nav-link">Pants</a></li>
                          <li class="nav-item"><a href="category.php?category=men&subcategory=Jeans" class="nav-link">Jeans</a></li>
                        </ul>
                      </div>
                      <div class="col-md-6 col-lg-3">
                        <h5>WOMEN</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="category.php?category=women&subcategory=T-shirt" class="nav-link">T-shirts</a></li>
                          <li class="nav-item"><a href="category.php?category=women&subcategory=Shirts" class="nav-link">Shirts</a></li>
                          <li class="nav-item"><a href="category.php?category=women&subcategory=Pants" class="nav-link">Pants</a></li>
                          <li class="nav-item"><a href="category.php?category=women&subcategory=Jeans" class="nav-link">Jeans</a></li>
                        </ul>
                      </div>
                      <div class="col-md-6 col-lg-3">
                        <h5>BOYS</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="category.php?category=boys&subcategory=T-shirt" class="nav-link">T-shirts</a></li>
                          <li class="nav-item"><a href="category.php?category=boys&subcategory=Shirts" class="nav-link">Shirts</a></li>
                          <li class="nav-item"><a href="category.php?category=boys&subcategory=Pants" class="nav-link">Pants</a></li>
                          <li class="nav-item"><a href="category.php?category=boys&subcategory=Jeans" class="nav-link">Jeans</a></li>
                        </ul>
                      </div>
                      <div class="col-md-6 col-lg-3">
                        <h5>GIRLS</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="category.php?category=girls&subcategory=T-shirt" class="nav-link">T-shirts</a></li>
                          <li class="nav-item"><a href="category.php?category=girls&subcategory=Shirts" class="nav-link">Shirts</a></li>
                          <li class="nav-item"><a href="category.php?category=girls&subcategory=Pants" class="nav-link">Pants</a></li>
                          <li class="nav-item"><a href="category.php?category=girls&subcategory=Jeans" class="nav-link">Jeans</a></li>
                        </ul>
                        
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
            <div class="navbar-buttons d-flex justify-content-end">
              <!-- /.nav-collapse-->
         <!--     <div id="search-not-mobile" class="navbar-collapse collapse"></div><a data-toggle="collapse" href="#search" class="btn navbar-btn btn-primary d-none d-lg-inline-block"><span class="sr-only">Toggle search</span><i class="fa fa-search"></i></a>
              <div id="basket-overview" class="navbar-collapse collapse d-none d-lg-block"><a href="basket.html" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span>3 items in cart</span></a></div>
            --></div>
          </div>
        </div>
      </nav>
      <div id="search" class="collapse">
        <div class="container">
          <form role="search" class="ml-auto">
            <div class="input-group">
              <input type="text" placeholder="Search" class="form-control">
              <div class="input-group-append">
                <button type="button" class="btn btn-primary"><i class="fa fa-search"></i></button>
              </div>
            </div>
          </form>
        </div>
      </div>
    </header>
    <div id="all">
      <div id="content">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <!-- breadcrumb-->
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li aria-current="page" class="breadcrumb-item active">Checkout - Payment method</li>
                </ol>
              </nav>
            </div>
            <div id="checkout" class="col-lg-9">
              <div class="box">
                <form method="post" action="checkout4.php">
                  <h1>Checkout - Payment method</h1>
                  <div class="nav flex-column flex-sm-row nav-pills"><a href="checkout1.html" class="nav-link flex-sm-fill text-sm-center"> <i class="fa fa-map-marker">                  </i>Address</a><a href="checkout2.html" class="nav-link flex-sm-fill text-sm-center"> <i class="fa fa-truck">                       </i>Delivery Method</a><a href="checkout3.html" class="nav-link flex-sm-fill text-sm-center active"> <i class="fa fa-money">                      </i>Payment Method</a><a href="#" class="nav-link flex-sm-fill text-sm-center disabled"> <i class="fa fa-eye">                     </i>Order Review</a></div>
                  <div class="content py-3">
                    <div class="row">
                      <div class="col-md-6">
                        <div class="box payment-method">
                          <h4>Paypal</h4>
                          <p>We like it all.</p>
                          <div class="box-footer text-center">
                            <input checked="true" type="radio" name="payment" value="paypal">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="box payment-method">
                          <h4>Payment gateway</h4>
                          <p>VISA and Mastercard only.</p>
                          <div class="box-footer text-center">
                            <input type="radio" name="payment" value="visa">
                          </div>
                        </div>
                      </div>
                      <div class="col-md-6">
                        <div class="box payment-method">
                          <h4>Cash on delivery</h4>
                          <p>You pay when you get it.</p>
                          <div class="box-footer text-center">
                            <input type="radio" name="payment" value="cash">
														<input type="hidden" value="<? echo $num  ?>" class="form-control" name="number">
							<input type="hidden" value=" <? echo $id  ?>"  name="id">
							<input type="hidden" value=" <? echo $price  ?>"  name="price">
							<input type="hidden" value=" <? echo $firstname  ?>"  name="firstname">
							<input type="hidden" value=" <? echo $lastname  ?>"  name="lastname">
							<input type="hidden" value=" <? echo $address  ?>"  name="address">
							<input type="hidden" value=" <? echo $phone  ?>"  name="phone">
							<input type="hidden" value=" <? echo $email  ?>"  name="email">
							<input type="hidden" value=" <? echo $delivery  ?>"  name="delivery">
                          </div>
                        </div>
                      </div>
                    </div>
                    <!-- /.row-->
                  </div>
                  <!-- /.content-->
                  <div class="box-footer d-flex justify-content-between"><a href="javascript:history.go(-1)" class="btn btn-outline-secondary"><i class="fa fa-chevron-left"></i>Back to Shipping Method</a>
                    <button type="submit" class="btn btn-primary">Continue to Order Review<i class="fa fa-chevron-right"></i></button>
                  </div>
                </form>
                <!-- /.box-->
              </div>
            </div>
            <!-- /.col-lg-9-->
            <div class="col-lg-3">
              <div id="order-summary" class="card">
                <div class="card-header">
                  <h3 class="mt-4 mb-4">Order summary</h3>
                </div>
                <div class="card-body">
                  <p class="text-muted">Shipping and additional costs are calculated based on the values you have entered.</p>
                  <div class="table-responsive">
<table class="table">
                      <tbody>
					  					  <tr>
                          <td>Customer Name</td>
                          <th><? echo $firstname . " ". $lastname ?></th>
                        </tr>
					                          <tr>
                          <td>Delivery Method</td>
                          <th><? echo $delivery ?></th>
                        </tr>
                        <tr>
                          <td>unit price</td>
                          <th>$<? echo $price ?></th>
                        </tr>

                        <tr>
                          <td>Number</td>
                          <th><? echo $num?></th>
                        </tr>
                        <tr class="total">
                          <td>Total</td>
                          <th>$<? echo $price*$num ?></th>
                        </tr>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <!-- /.col-lg-3-->
          </div>
        </div>
      </div>
    </div>
    <!--
    *** FOOTER ***
    _________________________________________________________
    -->
   
    <!-- /#footer-->
    <!-- *** FOOTER END ***-->
    
    
    <!--
    *** COPYRIGHT ***
    _________________________________________________________
    -->
    <div id="footer">
      <div class="container">
        <div class="row">
          <div class="col-lg-3 col-md-6">
            <h4 class="mb-3">Group Member</h4>
            <ul class="list-unstyled">
              <li>LIANGBAIKUN 56167821</a></li>
              <li>LI NAN</li>
              <li>QU XINMIAO</li>
              <li>ZHANG QINGYU</li>
			   <li>ZHANG JIAYUN</li>
            </ul>
            <hr>
            
          <!-- /.col-lg-3-->
        </div>
        <!-- /.row-->
      </div>
      <!-- /.container-->
    </div>
    <!-- /#footer-->
    <!-- *** FOOTER END ***-->
    
    
    <!--
    *** COPYRIGHT ***
    _________________________________________________________
    -->
    <div id="copyright">
      <div class="container">
        <div class="row">
          <div class="col-lg-6 mb-2 mb-lg-0">
            <p class="text-center text-lg-left">©2019 Vangoah</p>
          </div>
          <div class="col-lg-6">
           
            </p>
          </div>
        </div>
      </div>
    </div>
    <!-- *** COPYRIGHT END ***-->
    <!-- JavaScript files-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="vendor/jquery.cookie/jquery.cookie.js"> </script>
    <script src="vendor/owl.carousel/owl.carousel.min.js"></script>
    <script src="vendor/owl.carousel2.thumbs/owl.carousel2.thumbs.js"></script>
    <script src="js/front.js"></script>
  </body>
</html>
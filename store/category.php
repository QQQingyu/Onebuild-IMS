<?php include_once("conn.php");
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
                <ul class="dropdown-menu megamenu">
                  <li>
                    <div class="row">
                      <div class="col-md-6 col-lg-3">
                        <h5>Clothing</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="category.html" class="nav-link">T-shirts</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Shirts</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Pants</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Accessories</a></li>
                        </ul>
                      </div>
                      <div class="col-md-6 col-lg-3">
                        <h5>Shoes</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="category.html" class="nav-link">Trainers</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Sandals</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Hiking shoes</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Casual</a></li>
                        </ul>
                      </div>
                      <div class="col-md-6 col-lg-3">
                        <h5>Accessories</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="category.html" class="nav-link">Trainers</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Sandals</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Hiking shoes</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Casual</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Hiking shoes</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Casual</a></li>
                        </ul>
                        <h5>Looks and trends</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="category.html" class="nav-link">Trainers</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Sandals</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Hiking shoes</a></li>
                        </ul>
                      </div>
                      <div class="col-md-6 col-lg-3">
                        <div class="banner"><a href="#"><img src="img/banner.jpg" alt="" class="img img-fluid"></a></div>
                        <div class="banner"><a href="#"><img src="img/banner2.jpg" alt="" class="img img-fluid"></a></div>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
                <ul class="dropdown-menu megamenu">
                  <li>
                    <div class="row">
                      <div class="col-md-6 col-lg-3">
                        <h5>Shop</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="index.php" class="nav-link">Homepage</a></li>
                          <li class="nav-item"><a href="category.html" class="nav-link">Category - sidebar left</a></li>
                          <li class="nav-item"><a href="category-right.html" class="nav-link">Category - sidebar right</a></li>
                          <li class="nav-item"><a href="category-full.html" class="nav-link">Category - full width</a></li>
                          <li class="nav-item"><a href="detail.html" class="nav-link">Product detail</a></li>
                        </ul>
                      </div>
                      <div class="col-md-6 col-lg-3">
                        <h5>User</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="register.html" class="nav-link">Register / login</a></li>
                          <li class="nav-item"><a href="customer-orders.html" class="nav-link">Orders history</a></li>
                          <li class="nav-item"><a href="customer-order.html" class="nav-link">Order history detail</a></li>
                          <li class="nav-item"><a href="customer-wishlist.html" class="nav-link">Wishlist</a></li>
                          <li class="nav-item"><a href="customer-account.html" class="nav-link">Customer account / change password</a></li>
                        </ul>
                      </div>
                      <div class="col-md-6 col-lg-3">
                        <h5>Order process</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="basket.html" class="nav-link">Shopping cart</a></li>
                          <li class="nav-item"><a href="checkout1.html" class="nav-link">Checkout - step 1</a></li>
                          <li class="nav-item"><a href="checkout2.html" class="nav-link">Checkout - step 2</a></li>
                          <li class="nav-item"><a href="checkout3.html" class="nav-link">Checkout - step 3</a></li>
                          <li class="nav-item"><a href="checkout4.html" class="nav-link">Checkout - step 4</a></li>
                        </ul>
                      </div>
                      <div class="col-md-6 col-lg-3">
                        <h5>Pages and blog</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="blog.html" class="nav-link">Blog listing</a></li>
                          <li class="nav-item"><a href="post.html" class="nav-link">Blog Post</a></li>
                          <li class="nav-item"><a href="faq.html" class="nav-link">FAQ</a></li>
                          <li class="nav-item"><a href="text.html" class="nav-link">Text page</a></li>
                          <li class="nav-item"><a href="text-right.html" class="nav-link">Text page - right sidebar</a></li>
                          <li class="nav-item"><a href="404.html" class="nav-link">404 page</a></li>
                          <li class="nav-item"><a href="contact.html" class="nav-link">Contact</a></li>
                        </ul>
                      </div>
                    </div>
                  </li>
                </ul>
              </li>
            </ul>
            <div class="navbar-buttons d-flex justify-content-end">
              <!-- /.nav-collapse-->
<!--              <div id="search-not-mobile" class="navbar-collapse collapse"></div><a data-toggle="collapse" href="#search" class="btn navbar-btn btn-primary d-none d-lg-inline-block"><span class="sr-only">Toggle search</span><i class="fa fa-search"></i></a>
              <div id="basket-overview" class="navbar-collapse collapse d-none d-lg-block"><a href="basket.html" class="btn btn-primary navbar-btn"><i class="fa fa-shopping-cart"></i><span>3 items in cart</span></a></div>-->
            </div>
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
	
<?
include_once("conn.php");
if (ISSET($_GET["subcategory"])){
	$subcategory=$_GET["subcategory"];
	$category = $_GET["category"];
$sql= "SELECT * FROM  product where category='$category' and subcategory= '$subcategory' ";}
	elseif (ISSET($_GET["category"])){
	$category = $_GET["category"];
$sql= "SELECT * FROM  product where category='$category' ";}
else{
	$sql = "SELECT * FROM  product";}
	
	
	$result = mysqli_query($conn, $sql);
	
    // 输出数据
	?>
   
    <div id="all">
      <div id="content">
        <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <!-- breadcrumb-->
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li aria-current="page" class="breadcrumb-item active"><? 
				  if (mysqli_num_rows($result)>0){
	$row = mysqli_fetch_assoc($result); 
				  echo $row["category"];} ?></li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-3">
              <!--
              *** MENUS AND FILTERS ***
              _________________________________________________________
              -->
              <div class="card sidebar-menu mb-4">
                <div class="card-header">
                  <h3 class="h4 card-title">Categories</h3>
                </div>
                <div class="card-body">
                  <ul class="nav nav-pills flex-column category-menu">
                    <li><a href="category.php?category=men" class="nav-link">Men</a>
                      <ul class="list-unstyled">
                          <li class="nav-item"><a href="category.php?category=men&subcategory=T-shirt" class="nav-link">T-shirts</a></li>
                          <li class="nav-item"><a href="category.php?category=men&subcategory=Shirts" class="nav-link">Shirts</a></li>
                          <li class="nav-item"><a href="category.php?category=men&subcategory=Pants" class="nav-link">Pants</a></li>
                          <li class="nav-item"><a href="category.php?category=men&subcategory=Jeans" class="nav-link">Jeans</a></li>
                      </ul>
                    </li>
                    <li><a href="category.php?category=women" class="nav-link active">WOMEN  <span class="badge badge-light">123</span></a>
                      <ul class="list-unstyled">
                          <li class="nav-item"><a href="category.php?category=women&subcategory=T-shirt" class="nav-link">T-shirts</a></li>
                          <li class="nav-item"><a href="category.php?category=women&subcategory=Shirts" class="nav-link">Shirts</a></li>
                          <li class="nav-item"><a href="category.php?category=women&subcategory=Pants" class="nav-link">Pants</a></li>
                          <li class="nav-item"><a href="category.php?category=women&subcategory=Jeans" class="nav-link">Jeans</a></li>
                      </ul>
                    </li>
                    <li><a href="category.php?category=boys" class="nav-link">BOYS  <span class="badge badge-secondary">11</span></a>
                      <ul class="list-unstyled">
                          <li class="nav-item"><a href="category.php?category=boys&subcategory=T-shirt" class="nav-link">T-shirts</a></li>
                          <li class="nav-item"><a href="category.php?category=boys&subcategory=Shirts" class="nav-link">Shirts</a></li>
                          <li class="nav-item"><a href="category.php?category=boys&subcategory=Pants" class="nav-link">Pants</a></li>
                          <li class="nav-item"><a href="category.php?category=boys&subcategory=Jeans" class="nav-link">Jeans</a></li>
                      </ul>
                    </li>
					   <li><a href="category.php?category=girls" class="nav-link">GIRLS  <span class="badge badge-secondary">11</span></a>
                      <ul class="list-unstyled">
                          <li class="nav-item"><a href="category.php?category=girls&subcategory=T-shirt" class="nav-link">T-shirts</a></li>
                          <li class="nav-item"><a href="category.php?category=girls&subcategory=Shirts" class="nav-link">Shirts</a></li>
                          <li class="nav-item"><a href="category.php?category=girls&subcategory=Pants" class="nav-link">Pants</a></li>
                          <li class="nav-item"><a href="category.php?category=girls&subcategory=Jeans" class="nav-link">Jeans</a></li>
                      </ul>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="card sidebar-menu mb-4">
      
          
              </div>
              <div class="card sidebar-menu mb-4">
          
              </div>
              <!-- *** MENUS AND FILTERS END ***-->
              <div class="banner"><a href="#"><img src="img/banner.jpg" alt="sales 2014" class="img-fluid"></a></div>
            </div>
            <div class="col-lg-9">
<!--              <div class="box">
                <h1>Ladies</h1>
                <p>In our Ladies department we offer wide selection of the best products we have found and carefully selected worldwide.</p>
              </div>-->
              <div class="box info-bar">
                <div class="row">
                  <div class="col-md-12 col-lg-4 products-showing">Showing <strong><? echo mysqli_num_rows($result); ?></strong>  products</div>
                  <div class="col-md-12 col-lg-7 products-number-sort">
                    <form class="form-inline d-block d-lg-flex justify-content-between flex-column flex-md-row" action="" method="post">
                      <div class="products-sort-by mt-2 mt-lg-0"><strong>Sort by</strong>
                        <select name="sort-by" class="form-control">
                          <option value="price">Price</option>
                          <option value="name">Name</option>
                        </select>
						<button type="submit">sort</button>
                      </div>
					 
                    </form>
                  </div>
                </div>
              </div>
              <div class="row products">
			  
			  
<?
include_once("conn.php");
if(ISSET($_POST["sort-by"])){
$sort=$_POST["sort-by"];

if (ISSET($_GET["subcategory"])){
	$subcategory=$_GET["subcategory"];
	$category = $_GET["category"];
$sql= "SELECT * FROM  product where category='$category' and subcategory= '$subcategory' order by {$sort} ASC ";}
	elseif (ISSET($_GET["category"])){
	$category = $_GET["category"];
$sql= "SELECT * FROM  product where category='$category' order by {$sort} ASC ";}
else{
	$sql = "SELECT * FROM  product order by {$sort} ASC";}
	
	

}
else {
if (ISSET($_GET["subcategory"])){
	$subcategory=$_GET["subcategory"];
	$category = $_GET["category"];
$sql= "SELECT * FROM  product where category='$category' and subcategory= '$subcategory' ";}
	elseif (ISSET($_GET["category"])){
	$category = $_GET["category"];
$sql= "SELECT * FROM  product where category='$category' ";}
else{
	$sql = "SELECT * FROM  product";}
	}
	$result = mysqli_query($conn, $sql);
	if (mysqli_num_rows($result)>0){
	while($row = mysqli_fetch_assoc($result)){
	echo "
	<div class='col-lg-4 col-md-6'>
                  <div class='product'>
                    <div class='flip-container'>
                      <div class='flipper'>
                        <div class='front'><a href='detail.php?id=".$row["id"]. "'><img src='../support/upload/".$row["pic"]. "' alt='' class='img-fluid'></a></div>
                        <div class='back'><a href='detail.php?id=".$row["id"]. "'><img src='../support/upload/".$row["pic"]. "' alt='' class='img-fluid'></a></div>
                      </div>
                    </div><a href='detail.php?id=".$row["id"]. "' class='invisible'><img src='img/product1.jpg' alt='' class='img-fluid'></a>
                    <div class='text'>
                      <h3><a href='detail.php?id=".$row["id"]. "'>".$row["name"]."</a></h3>
                      <p class='price'> 
                        <del></del>$".$row["price"]."
                      </p>
                      <p class='buttons'><a href='detail.php?id=".$row["id"]. "' class='btn btn-outline-secondary'>View detail</a><a href='basket.php?id=".$row["id"]."' class='btn btn-primary'><i class='fa fa-shopping-cart'></i>Add to cart</a></p>
                    </div>
                    <!-- /.text-->
                  </div>
                  <!-- /.product            -->
                </div>
	";
	
	
	
	
	
	}
	} 
    // 输出数据
	?>			  
			  
                
              </div>
              
            </div>
            <!-- /.col-lg-9-->
          </div>
        </div>
      </div>
    </div>
    <!--
    *** FOOTER ***
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
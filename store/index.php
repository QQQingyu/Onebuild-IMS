<?php include_once("conn.php");
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Vangoah E-SHOP</title>
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
			  	$sqll="SELECT * FROM customer_info where acc_id={$_SESSION['userID']}";
				$result = $conn->query($sqll);
				$sql_arr = $result->fetch_assoc();
			  echo "hello  " . $sql_arr["cus_1st_name"] ." ". $sql_arr["cus_2nd_name"];
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
                          <li class="nav-item"><a href="category.php" class="nav-link">T-shirts</a></li>
                          <li class="nav-item"><a href="category.php" class="nav-link">Shirts</a></li>
                          <li class="nav-item"><a href="category.php" class="nav-link">Pants</a></li>
                          <li class="nav-item"><a href="category.php" class="nav-link">Accessories</a></li>
                        </ul>
                      </div>
                      <div class="col-md-6 col-lg-3">
                        <h5>Shoes</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="category.php" class="nav-link">Trainers</a></li>
                          <li class="nav-item"><a href="category.php" class="nav-link">Sandals</a></li>
                          <li class="nav-item"><a href="category.php" class="nav-link">Hiking shoes</a></li>
                          <li class="nav-item"><a href="category.php" class="nav-link">Casual</a></li>
                        </ul>
                      </div>
                      <div class="col-md-6 col-lg-3">
                        <h5>Accessories</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="category.php" class="nav-link">Trainers</a></li>
                          <li class="nav-item"><a href="category.php" class="nav-link">Sandals</a></li>
                          <li class="nav-item"><a href="category.php" class="nav-link">Hiking shoes</a></li>
                          <li class="nav-item"><a href="category.php" class="nav-link">Casual</a></li>
                          <li class="nav-item"><a href="category.php" class="nav-link">Hiking shoes</a></li>
                          <li class="nav-item"><a href="category.php" class="nav-link">Casual</a></li>
                        </ul>
                      </div>
                      <div class="col-md-6 col-lg-3">
                        <h5>Featured</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="category.php" class="nav-link">Trainers</a></li>
                          <li class="nav-item"><a href="category.php" class="nav-link">Sandals</a></li>
                          <li class="nav-item"><a href="category.php" class="nav-link">Hiking shoes</a></li>
                        </ul>
                        <h5>Looks and trends</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="category.php" class="nav-link">Trainers</a></li>
                          <li class="nav-item"><a href="category.php" class="nav-link">Sandals</a></li>
                          <li class="nav-item"><a href="category.php" class="nav-link">Hiking shoes</a></li>
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
                          <li class="nav-item"><a href="category.php" class="nav-link">T-shirts</a></li>
                          <li class="nav-item"><a href="category.php" class="nav-link">Shirts</a></li>
                          <li class="nav-item"><a href="category.php" class="nav-link">Pants</a></li>
                          <li class="nav-item"><a href="category.php" class="nav-link">Accessories</a></li>
                        </ul>
                      </div>
                      <div class="col-md-6 col-lg-3">
                        <h5>Shoes</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="category.php" class="nav-link">Trainers</a></li>
                          <li class="nav-item"><a href="category.php" class="nav-link">Sandals</a></li>
                          <li class="nav-item"><a href="category.php" class="nav-link">Hiking shoes</a></li>
                          <li class="nav-item"><a href="category.php" class="nav-link">Casual</a></li>
                        </ul>
                      </div>
                      <div class="col-md-6 col-lg-3">
                        <h5>Accessories</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="category.php" class="nav-link">Trainers</a></li>
                          <li class="nav-item"><a href="category.php" class="nav-link">Sandals</a></li>
                          <li class="nav-item"><a href="category.php" class="nav-link">Hiking shoes</a></li>
                          <li class="nav-item"><a href="category.php" class="nav-link">Casual</a></li>
                          <li class="nav-item"><a href="category.php" class="nav-link">Hiking shoes</a></li>
                          <li class="nav-item"><a href="category.php" class="nav-link">Casual</a></li>
                        </ul>
                        <h5>Looks and trends</h5>
                        <ul class="list-unstyled mb-3">
                          <li class="nav-item"><a href="category.php" class="nav-link">Trainers</a></li>
                          <li class="nav-item"><a href="category.php" class="nav-link">Sandals</a></li>
                          <li class="nav-item"><a href="category.php" class="nav-link">Hiking shoes</a></li>
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
                          <li class="nav-item"><a href="category.php" class="nav-link">Category - sidebar left</a></li>
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
              <!--<div id="search-not-mobile" class="navbar-collapse collapse"></div><a data-toggle="collapse" href="#search" class="btn navbar-btn btn-primary d-none d-lg-inline-block"><span class="sr-only">Toggle search</span><i class="fa fa-search"></i></a>
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
    <div id="all">
      <div id="content">
        <div class="container">
          <div class="row">
            <div class="col-md-12">
              <div id="main-slider" class="owl-carousel owl-theme">
                <div class="item"><img src="img/main-slider1.jpg" alt="" class="img-fluid"></div>
                <div class="item"><img src="img/main-slider2.jpg" alt="" class="img-fluid"></div>
                <div class="item"><img src="img/main-slider3.jpg" alt="" class="img-fluid"></div>
                <div class="item"><img src="img/main-slider4.jpg" alt="" class="img-fluid"></div>
              </div>
              <!-- /#main-slider-->
            </div>
          </div>
        </div>
        <!--
        *** ADVANTAGES HOMEPAGE ***
        _________________________________________________________
        -->
        <div id="advantages">
          <div class="container">
            <div class="row mb-4">
              <div class="col-md-4">

            </div>
            <!-- /.row-->
          </div>
          <!-- /.container-->
        </div>
        <!-- /#advantages-->
        <div class="tlinks">Collect from <a href="http://www.cssmoban.com/"  title="网站模板">网站模板</a></div>
        <!-- *** ADVANTAGES END ***-->
        <!--
        *** HOT PRODUCT SLIDESHOW ***
        _________________________________________________________
        -->
        <div id="hot">
          <div class="box py-4">
            <div class="container">
              <div class="row">
                <div class="col-md-12">
                  <a href="category.php"><h2 class="mb-0">Hot products</h2></a>
                </div>
              </div>
            </div>
          </div>
<?
$sql= "SELECT * FROM  product ORDER BY inventory DESC ";
$result = mysqli_query($conn, $sql);

?>
          <div class="container">
            <div class="product-slider owl-carousel owl-theme">
			
<? 
while($row = mysqli_fetch_assoc($result)) {
echo " <div class='item'>
                <div class='product'>
                  <div class='flip-container'>
                    <div class='flipper'>
					
					
                      <div class='front'><a href='detail.php?id=".$row["id"]. "'><img src='../support/upload/".$row["pic"]. "' alt='' class='img-fluid'></a></div>
                      <div class='back'><a href='detail.php?id=".$row["id"]. "'><img src='../support/upload/".$row["pic"]. "' alt='' class='img-fluid'></a></div>
                    </div>
                  </div><a href='detail.php?id=" . $row["id"] .  "' class='invisible'><img src='img/product1.jpg' alt='' class='img-fluid'></a>
                  <div class='text'>
                    <h3><a href='detail.php?id=".$row["id"]. "'>".$row["name"]. "</a></h3>
                    <p class='price'> 
                      <del></del>$".$row["price"]. "
                    </p>
                  </div>
                  <!-- /.text-->
    
                  <!-- /.ribbon-->
                </div>
                <!-- /.product-->
              </div>
			 ";
			 } ?>
              <div class="item">
                <div class="product">
                  <div class="flip-container">
                    <div class="flipper">
                      <div class="front"><a href="detail.html"><img src="img/product2.jpg" alt="" class="img-fluid"></a></div>
                      <div class="back"><a href="detail.html"><img src="img/product2_2.jpg" alt="" class="img-fluid"></a></div>
                    </div>
                  </div><a href="detail.html" class="invisible"><img src="img/product2.jpg" alt="" class="img-fluid"></a>
                  <div class="text">
                    <h3><a href="detail.html">White Blouse Armani</a></h3>
                    <p class="price"> 
                      <del>$280</del>$143.00
                    </p>
                  </div>

                </div>
                <!-- /.product-->
              </div>
             
              </div>
              <!-- /.product-slider-->
            </div>
            <!-- /.container-->
          </div>
          <!-- /#hot-->
          <!-- *** HOT END ***-->
        </div>
        <!--
        *** GET INSPIRED ***
        _________________________________________________________
        -->
       
        <!-- *** GET INSPIRED END ***-->
        <!--
        *** BLOG HOMEPAGE ***
        _________________________________________________________
        -->
       
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
<? include_once("conn.php"); ?>
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
  <?php

    $id = intval($_GET['id']);
	echo $id;
	$sqll="SELECT * FROM product where id={$id}";
	$result = $conn->query($sqll);
	$sql_arr = $result->fetch_assoc();
    //$sql = mysqli_query($conn, $sqll);
    //$sql_arr = mysql_fetch_assoc($sql); 

?>
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
               
               
            <div class="navbar-buttons d-flex justify-content-end">
              <!-- /.nav-collapse-->
             
         
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
            <div class="col-lg-12">
              <!-- breadcrumb-->
              <nav aria-label="breadcrumb">
                <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a href="#">Home</a></li>
                  <li class="breadcrumb-item"><a href="#">Ladies</a></li>
                  <li class="breadcrumb-item"><a href="#">Tops</a></li>
                  <li aria-current="page" class="breadcrumb-item active">"<?php echo $sql_arr['name']?>"</li>
                </ol>
              </nav>
            </div>
            <div class="col-lg-3 order-2 order-lg-1">
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
                    <li><a href="category.php?category=women" class="nav-link active">WOMEN </a>
                      <ul class="list-unstyled">
                          <li class="nav-item"><a href="category.php?category=women&subcategory=T-shirt" class="nav-link">T-shirts</a></li>
                          <li class="nav-item"><a href="category.php?category=women&subcategory=Shirts" class="nav-link">Shirts</a></li>
                          <li class="nav-item"><a href="category.php?category=women&subcategory=Pants" class="nav-link">Pants</a></li>
                          <li class="nav-item"><a href="category.php?category=women&subcategory=Jeans" class="nav-link">Jeans</a></li>
                      </ul>
                    </li>
                    <li><a href="category.php?category=boys" class="nav-link">BOYS  </a>
                      <ul class="list-unstyled">
                          <li class="nav-item"><a href="category.php?category=boys&subcategory=T-shirt" class="nav-link">T-shirts</a></li>
                          <li class="nav-item"><a href="category.php?category=boys&subcategory=Shirts" class="nav-link">Shirts</a></li>
                          <li class="nav-item"><a href="category.php?category=boys&subcategory=Pants" class="nav-link">Pants</a></li>
                          <li class="nav-item"><a href="category.php?category=boys&subcategory=Jeans" class="nav-link">Jeans</a></li>
                      </ul>
                    </li>
					   <li><a href="category.php?category=girls" class="nav-link">GIRLS </a>
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
              <!-- *** MENUS AND FILTERS END ***-->
              <div class="banner"><a href="#"><img src="img/banner.jpg" alt="sales 2014" class="img-fluid"></a></div>
            </div>
            <div class="col-lg-9 order-1 order-lg-2">
              <div id="productMain" class="row">
                <div class="col-md-6">
                  <div data-slider-id="1" class="owl-carousel shop-detail-carousel">
                    <div class="item"> <img src="<?php echo "../support/upload/". $sql_arr['pic'] ?>" alt="" class="img-fluid"></div>
                    <div class="item"> <img src="<?php echo "../support/upload/". $sql_arr['pic'] ?>" alt="" class="img-fluid"></div>
                    <div class="item"> <img src="<?php echo "../support/upload/". $sql_arr['pic'] ?>" alt="" class="img-fluid"></div>
                  </div>
                  <div class="ribbon sale">
                    <div class="theribbon">SALE</div>
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                  <div class="ribbon new">
                    <div class="theribbon">NEW</div>
                    <div class="ribbon-background"></div>
                  </div>
                  <!-- /.ribbon-->
                </div>
                <div class="col-md-6">
                  <div class="box">
                    <h1 class="text-center"><?php echo $sql_arr['name']?></h1>
                    <p class="goToDescription"><a href="#details" class="scroll-to"><?php echo substr($sql_arr['description'],0,50)."..."?></a></p>
                    <p class="price">$124.00</p>
                    <p class="text-center buttons"><a href="basket.php?id=<? echo $id ?>" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to cart</a></p>
                  </div>
                  <div data-slider-id="1" class="owl-thumbs">
                    <button class="owl-thumb-item"><img src="<?php echo "../support/upload/". $sql_arr['pic'] ?>" alt="" class="img-fluid"></button>
                    <button class="owl-thumb-item"><img src="<?php echo "../support/upload/". $sql_arr['pic'] ?>" alt="" class="img-fluid"></button>
                    <button class="owl-thumb-item"><img src="<?php echo "../support/upload/". $sql_arr['pic'] ?>" alt="" class="img-fluid"></button>
                  </div>
                </div>
              </div>
              <div id="details" class="box">
                <p></p>
                <h4>Product details</h4>
<?php echo $sql_arr['description']?>
                <div class="social">
                  <h4>Show it to your friends</h4>
                  <p><a href="#" class="external facebook"><i class="fa fa-facebook"></i></a><a href="#" class="external gplus"><i class="fa fa-google-plus"></i></a><a href="#" class="external twitter"><i class="fa fa-twitter"></i></a><a href="#" class="email"><i class="fa fa-envelope"></i></a></p>
                </div>
              </div>
              <div class="row same-height-row">
               
                  <!-- /.product-->
                </div>
              </div>
            </div>
            <!-- /.col-md-9-->
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
<?php
session_start();
$con = mysqli_connect('localhost','root','','ich');
$count = 0;
    if (isset($_SESSION['cart'])){
    $count = count($_SESSION['cart']);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>INDIAN CRAFT HOUSE SHOP</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="Free HTML Templates" name="keywords">
    <meta content="Free HTML Templates" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet"> 

    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
   
</head>

<body>
    
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-5 d-none d-lg-block">
                <a href="" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">INDIAN</span>CRAFT HOUSE</h1>
                </a>
            </div>
            
            <div class="col-lg-7 col-9 text-right">
                <!--<a href="" class="btn border">
                    <i class="fas fa-shopping-cart text-primary"></i>
                    <span class="badge">0</span>
                </a>-->
                <a href="" class="btn border">
                    <i class="fas fa-shopping-cart text-primary"></i>
                    <span class="badge"><?php echo $count ?></span>
                </a>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                   <h6 class="m-0"> <?php echo "Welcome ".$_SESSION['Emailid'];?></h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                 <nav class="collapse position-absolute navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0 bg-light" id="navbar-vertical" style="width: calc(100% - 30px); z-index: 1;">
                    <div class="navbar-nav w-100 overflow-hidden" style="height: 300px">
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">Profiles<i class="fa fa-angle-down float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                                <a href="" class="dropdown-item">Edit Profile</a>
                                <a href="" class="dropdown-item">My Orders</a>
                                <a class="dropdown-item" href="login/login.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Logout</a>
                            </div>
                        </div>
                        
                    </div>
                </nav>
            </div>
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">INDIAN</span>CRAFT HOUSE</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.php" class="nav-item nav-link">Home</a>
                            <a href="shop.php" class="nav-item nav-link active">Shop</a>
                            <a href="cart.php" class="nav-item nav-link active">Shopping Cart</a>
                            
                        </div>
                        <div class="navbar-nav ml-auto py-0">
                        </div>
                    </div>
                </nav>
            </div>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Our Shop</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Shop</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Shop Start -->
    <!--<div class="container-fluid pt-5">
        <div class="row px-xl-5">
            Shop Sidebar Start 
            <div class="col-lg-3 col-md-12">
               Price Start 
                





              Price End -->
                
                <!-- Color Start -->
                <!--<div class="border-bottom mb-4 pb-4">
                    -->
                <!-- Color End -->

                <!-- Size Start -->
                <!--<div class="mb-5">
                    
            </div>-->
            <!-- Shop Sidebar End -->


            <!-- Shop Product Start -->
            <div class="col-lg-9 col-md-9">
                <div class="row pb-5">
                    <div class="col-12 pb-9">
                        <div class="d-flex align-items-center justify-content-between mb-4">
                            <form action="" method="POST">
                                <div class="input-group">
                                    <input type="text" name= "search"  class="form-control" placeholder="Search by name">
                                    <div class="input-group-append">
                                        <input type="submit" name="submit" span class="input-group-text bg-transparent text-primary" i class="fa fa-search"></i>
                                           
                                        </span>
                                    </div>
                                </div>
                            </form>
                           <!-- <div class="dropdown ml-4">
                                <button class="btn border dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                                        aria-expanded="false">
                                            Sort by
                                        </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId">
                                    <a class="dropdown-item" href="#">Latest</a>
                                    <a class="dropdown-item" href="#">Popularity</a>
                                    <a class="dropdown-item" href="#">Best Rating</a>
                                </div>
                            </div>-->
                        </div>
                        </div>
            <div class="container" style="width :80%">
                <h2>WELCOME TO SHOP</h2>
                        <?php  
                         if(isset($_POST["submit"])){

                         $str = $_POST["search"];
                      
                         $query="SELECT * FROM product WHERE Product_Name = '$str'";
                        $result=mysqli_query($con,$query);
                        
                        while ($row = mysqli_fetch_array($result))
                       
                        {
                            ?>
                        <div class="col-lg-5 col-md-6 col-sm-16 pb-8"  style ="width: 60%">
                         <form action="cart.php"  method = "POST"> 
                        <div class="card product-item border-0 mb-4">
                            <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                                <img src="ICHsellerpanel/<?php echo $row["Product_Photo"]?>" class= "img-responsive"  width ="300" height = "200" alt="">
                            </div>
                            <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                                <h6 class="text-truncate mb-3"><?php echo $row["Product_Name"]?></h6>
                                <div class="d-flex justify-content-center">
                                    <h6><?php echo "Rs ". $row["Product_Price"]?></h6><h6 class="text-muted ml-2"></h6>

                                </div>
                                <div class="d-flex justify-content-center">
                                    <h6><?php echo $row["Product_Description"]?></h6><h6 class="text-muted ml-2"></h6>
                                </div>
                                <div class="d-flex justify-content-right">
                                    <input type="text" name="Pquantity" class="form-control"   id="range" min="0" max="10">
                                </div>
                                <input type="hidden" name="hidden_Product_Photo"  value="<?php echo $row["Product_Photo"]?>"  >
                                <input type="hidden" name="hidden_Product_Name"  value="<?php echo  $row["Product_Name"]?>"  >
                                <input type="hidden" name="hidden_Product_Price"  value="<?php echo  $row["Product_Price"]?>"  >
                            </div>
                            <div class="card-footer d-flex justify-content-between bg-light border">
                                
                               
                                <a href="" class="btn btn-sm text-dark p-0"><input type="submit" name="addCart" value="Add To Cart" i class="fas fa-shopping-cart text-primary mr-1"></i></a>
                            </div>
                        </div>
                    </div>  
                   <?php
                   } 
                   
                   
                }
            ?>  
            </div>
          
                    <!---->
                </div>
            </div>
            <!-- Shop Product End -->
        </div>
    </div>
    <!-- Shop End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-dark mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <a href="" class="text-decoration-none">
                    <h1 class="mb-4 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border border-white px-3 mr-1">INDIAN</span>CRAFT HOUSE</h1>
                </a>
                
                
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>indiancrafthouse5@gmail.com</p>
            </div>
            <div class="col-lg-8 col-md-12">
                <div class="row">
                    <div class="col-md-4 mb-5">
                        <h5 class="font-weight-bold text-dark mb-4">Quick Links</h5>
                        <div class="d-flex flex-column justify-content-start">
                            <a class="text-dark mb-2" href="index.php"><i class="fa fa-angle-right mr-2"></i>Home</a>
                            <a class="text-dark mb-2" href="shop.php"><i class="fa fa-angle-right mr-2"></i>Our Shop</a>
                            <a class="text-dark mb-2" href="detail.php"><i class="fa fa-angle-right mr-2"></i>Shop Detail</a>
                            <a class="text-dark mb-2" href="cart.php"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                            <a class="text-dark mb-2" href="checkout.php"><i class="fa fa-angle-right mr-2"></i>Checkout</a>
                            <a class="text-dark" href="contact.php"><i class="fa fa-angle-right mr-2"></i>Contact Us</a>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.bundle.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>

    <!-- Contact Javascript File -->
    <script src="mail/jqBootstrapValidation.min.js"></script>
    <script src="mail/contact.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>
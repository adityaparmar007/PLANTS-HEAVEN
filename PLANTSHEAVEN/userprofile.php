<?php
session_start();
?>
<?php
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
    <title>INDIAN CRAFT HOUSE</title>
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
            <div class="col-lg-6 col-6 text-left">
                <form action="">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Search for products">
                        <div class="input-group-append">
                            <span class="input-group-text bg-transparent text-primary">
                                <i class="fa fa-search"></i>
                            </span>
                        </div>
                    </div>
                </form>
            </div>
            <div class="col-lg-1 col-1 text-right">
                <!--<a href="" class="btn border">
                    <i class="fas fa-heart text-primary"></i>
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
    <div class="container-fluid mb-5">
        <div class="row border-top px-xl-5">
            <div class="col-lg-3 d-none d-lg-block">
                <a class="btn shadow-none d-flex align-items-center justify-content-between bg-primary text-white w-100" name="Emailid" data-toggle="collapse" href="#navbar-vertical" style="height: 65px; margin-top: -1px; padding: 0 30px;">
                    <h6 class="m-0"> <?php echo "Welcome ".$_SESSION['Emailid'];?></h6>
                    <i class="fa fa-angle-down text-dark"></i>
                </a>
                <nav class="collapse show navbar navbar-vertical navbar-light align-items-start p-0 border border-top-0 border-bottom-0" id="navbar-vertical">
                    <div class="navbar-nav w-100 overflow-hidden" style="height: 250px">
                        <div class="nav-item dropdown">
                            <a href="#" class="nav-link" data-toggle="dropdown">Profiles<i class="fa fa-angle-down float-right mt-1"></i></a>
                            <div class="dropdown-menu position-absolute bg-secondary border-0 rounded-0 w-100 m-0">
                                <a href="userprofile.php" class="dropdown-item">Edit Profile</a>
                                <a href="myorder.php" class="dropdown-item">My Orders</a>
                                <a class="dropdown-item" href="login/login.php" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>Logout</a>
                            </div>
                        </div>
                        
                    </div>
                </nav>
            </div>

<!-- Logout Modal-->
                <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                                <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">×</span>
                                </button>
                            </div>
                            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                            <div class="modal-footer">
                                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                <a class="btn btn-primary" href="login/login.php">Logout</a>
                            </div>
                        </div>
                    </div>
                </div>
<!-- Logout Modal-->


            
            <div class="col-lg-9">
                <nav class="navbar navbar-expand-lg bg-light navbar-light py-3 py-lg-0 px-0">
                    <a href="index.php" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">INDIAN</span>CRAFT HOUSE</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>-
                    <div class="collapse navbar-collapse justify-content-between" id="navbarCollapse">
                        <div class="navbar-nav mr-auto py-0">
                            <a href="index.php" class="nav-item nav-link active">Home</a>
                            <a href="shop.php" class="nav-item nav-link">Shop</a>
                            <a href="cart.php" class="nav-item nav-link">Shopping Cart</a>
                           
                            
                        </div>
                       
                    </div>
                </nav>
                
            </div>
        </div>
    </div>
    <!-- Navbar End -->
   
<div class="table-responsive"  style="position:absolute; left:400px; bottom:350px;">
     <?php
if(isset($_SESSION['success']) && $_SESSION['success'] !='')
{
    echo '<h2 class ="bg-primary text-white"> '.$_SESSION['success'].'</h2>';
    unset($_SESSION['success']);
}
if(isset($_SESSION['status']) && $_SESSION['status'] !='')
{
    echo '<h2 class ="bg-primary text-white"> '.$_SESSION['status'].'</h2>';
    unset($_SESSION['status']);
}

?>
     <div class="col-lg-9 col-md-2 col-sm-2 pb-1">
    
      <table class="table table-bordered" id="dataTable" width="90%" cellspacing="0">
        <thead>
          <tr>
              
              <th>FirstName</th>
              <th>LastName</th>
              <th>PhoneNumber</th>
              <th>EDIT</th>
              
          </tr>
        </thead>
        <tbody>
            <?php 
            $Emailid = $_SESSION["Emailid"];
            $query="SELECT * FROM registration WHERE Emailid='$Emailid'";
            $result=mysqli_query($con,$query);
            ?>
            <?php
                        if(mysqli_num_rows($result) > 0)
                {
                    while ($row = mysqli_fetch_array($result)){


                ?>
      
                <tr>
                   
                    <td><?php echo $row['FirstName']?></td>
                    <td><?php echo $row['LastName']?></td>
                    <td><?php echo $row['PhoneNumber']?></td>
                    
                    <td>
                       <form action="edituserprofile.php" method="POST" enctype="multipart/form-data">
                            <input type="hidden" name="Registration_id" value="<?php echo $row['Registration_id']?> ">
                            <button  type="submit" name="edit_btn" class="btn btn-success"> UPDATE HERE</button>
                        </form>
                    </td>
                </tr>
            <?php
              }
            }

            ?>


        </tbody>
      </table>
     </div> 
    </div>


    <!-- Featured Start -->
    
    <!-- Featured End -->


    <!-- Categories Start -->
    
    <!-- Categories End -->


    <!-- Offer Start -->

    <!-- Offer End -->


    <!-- Products Start -->
    
    <!-- Products End -->


    <!-- Subscribe Start -->
   
    <!-- Subscribe End -->


    <!-- Products Start -->
    
    <!-- Products End -->


    <!-- Vendor Start -->
   
    <!-- Vendor End -->


    <!-- Footer Start -->
    
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
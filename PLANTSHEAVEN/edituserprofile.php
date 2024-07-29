<?php 
session_start();
$con = mysqli_connect('localhost','root','','ich');
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
                    <span class="badge">0</span>
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
     <div class="table-responsive"  style="position:absolute; left:400px; bottom:-390px;">
    
    <div class="card shadow mb-4">
  <div class="card-header py-3">
    <h6 class="m-0 font-weight-bold text-primary">UPDATE YOUR PROFILE</h6>
    </div>
<div class="card-body">

      


             <?php  
                $Emailid = $_SESSION["Emailid"];
                $query="SELECT * FROM registration WHERE Emailid='$Emailid'";
                $result=mysqli_query($con,$query);
                
                ?>
                <div class="mb-4">
                    <h4 class="font-weight-semi-bold mb-4">UPDATE YOUR PROFILE</h4>
                    <div class="row">
                        <?php
                        if(mysqli_num_rows($result) > 0)
                {
                    while ($row = mysqli_fetch_array($result)){


                ?>
           <form action="updateprofile.php" method="POST">
            <input type="hidden" name="Registration_id" value="<?php echo $row['Registration_id']?> ">
            <div class="form-group">
                <label> FirstName </label>
                <input type="text" name="FirstName" value="<?php echo $row['FirstName']?>" class="form-control" placeholder="Enter Firstname">
            </div>
            <div class="form-group">
                <label>LastName </label>
                <input type="text" name="LastName" value="<?php echo $row['LastName']?>" class="form-control" placeholder="Enter Lastname">
            </div>
            
            <div class="form-group">
                <label>PhoneNumber</label>
                <input type="text" name="PhoneNumber" value="<?php echo $row['PhoneNumber']?>"  class="form-control" placeholder="Enter PhoneNumber">
            </div>

             <div class="form-group">
                <label>Emailid</label>
                <input type="text" name="Emailid" value="<?php echo $row['Emailid']?>"  class="form-control" placeholder="Enter Email">
            </div>

            <div class="form-group">
                <label>Password</label>
                <input type="password" name="Password" value="<?php echo $row['Password']?>"  class="form-control" placeholder="Enter Password">
            </div>


            
                  <div class="form-group">
                    <label for="PhoneNumber">Address </label>
                    <input type="text" class="form-control"  value="<?php echo $row['Address']?>" placeholder=" 12/A Olives Bunglow" id="Address" name="Address">
                  </div>    
               
              
                  <div class="form-group">
                    <label for="password">State</label>
                    <input type="text" class="form-control"  value="<?php echo $row['State']?>" placeholder="Gujarat" id="State" name="State">
                  </div>
                
                
                  <div class="form-group ">
                    <label for="PhoneNumber">City </label>
                    <input type="text" class="form-control"  value="<?php echo $row['City']?>" placeholder="Ahmedabad" id="City" name="City">
                  </div>    
              
                
                
                  <div class="form-group ">
                    <label for="PhoneNumber">PostCode</label>
                    <input type="text" class="form-control"  value="<?php echo $row['PostCode']?>" placeholder="380007" id="PostCode" name="PostCode">
                  </div>    
         
              

          <a href="userprofile.php"  class="btn btn-primary">CANCEL</a>
            <button type="submit" name="updatebtn" class="btn btn-primary">UPDATE</button>
</form>
            <?php
                }
            }


            ?>       

          
</div>  
  </div>
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
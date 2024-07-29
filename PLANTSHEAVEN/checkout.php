<?php
session_start();
$con = mysqli_connect('localhost','root','','ich');
$count = 0;
    if (isset($_SESSION['cart'])){
    $count = count($_SESSION['cart']);
}

$Product_Name = 0;
$Product_quantity  = 0;
$Product_Price = 0;
    if (isset($_SESSION['cart'])){
    $Product_Name = count($_SESSION['cart']);
    $Product_quantity = count($_SESSION['cart']);
    $Product_Price = count($_SESSION['cart']);
}




/*if(isset($_POST['submit'])){
    require 'phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;
    $mail->Host='smtp.gmail.com';
    $mail->Port='587';
    $mail->SMTPAuth=true;
    $mail->SMTPSecure='tls';
    $mail->Username='aadityaparmar121@gmail.com';
    $mail->Password='12345';

    $mail->setFrom($_POST['email'],$_POST['name']);
    $mail->addAddress('indiancrafthouse5@gmail.com');
    $mail->addReplayTo($_POST['Emailid'],$_POST['name']);

    $mail->isHTML(true);
    $mail->Subject='Order Successfully':'.$_POST['subject']'
    $mail->Body='<h3 align=center>Name: '.$_POST['FirstName'].
    '<br>Email:'.$_POST['Emailid'].'<br>Message:'.$_POST['msg'].'</h3>';

    if(!mail->send()){
    $result="Something Went Wrong Please Try Again";
    }
    else{
    $result="Thanks ".$_POST['FirstName']
    }
}*/

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>PLANTS HEAVEN</title>
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
    <!-- Topbar Start -->
    <div class="container-fluid">
         
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-5 d-none d-lg-block">
                <a href="" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">PLANTS</span>HEAVEN</h1>
                </a>
            </div>
           
                
          <div class="col-lg-7 col-9 text-right">

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
                    <a href="" class="text-decoration-none d-block d-lg-none">
                        <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">PLANTS</span>HEAVEN</h1>
                    </a>
                    <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                        <span class="navbar-toggler-icon"></span>
                    </button>
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


    <!-- Page Header Start -->
    <div class="container-fluid bg-secondary mb-5">
        <div class="d-flex flex-column align-items-center justify-content-center" style="min-height: 300px">
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Checkout</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="index.php">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Checkout</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Checkout Start -->
    <div class="container-fluid pt-5">
        
        <div class="row px-xl-5">
            <div class="col-lg-8">
                <?php  
                $Emailid = $_SESSION["Emailid"];
                $query="SELECT * FROM registration WHERE Emailid='$Emailid'";
                $result=mysqli_query($con,$query);
                
                ?>
                <div class="mb-4">
                    <h4 class="font-weight-semi-bold mb-4">Billing Address</h4>
                    <div class="row"><?php
                        if(mysqli_num_rows($result) > 0)
                {
                    while ($row = mysqli_fetch_array($result)){


                ?>
                        <div class="col-md-6 form-group">
                            <label>Address</label><br>
                            <input type="text" name="Address"  value="<?php echo $row["Address"]?>"  >
                             
                        </div>
                        <div class="col-md-6 form-group">
                            <label>CITY</label><br>
                            <input type="text" name="City"  value="<?php echo $row["City"]?>"  >
                        </div>
                        <div class="col-md-6 form-group">
                            <label>STATE</label><br>
                            <input type="text" name="State"  value="<?php echo $row["State"]?>"  >
                        </div>
                        <div class="col-md-6 form-group">
                            <label>POSTCODE</label><br>
                            <input type="text" name="Pos tCode"  value="<?php echo $row["PostCode"]?>"  >
                        </div>

                        
                        <?php 
                    }
                        }
                    ?>
                    </div>
                </div>
                
                <!--<div class="container-fluid pt-5"  style="position:absolute; left:1px; bottom:350px;">
                    <h5>You Can Change Address From Edit Profile</h5>
                </div>-->





                
            </div>
            <div class="col-lg-4">
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Order Total</h4>
                    </div>
                    <div class="card-body">
                        <form action="cart.php" method="POST">
                        <h5 class="font-weight-medium mb-3">Products</h5>
                        <form method="cart.php" action="POST">
                        <div class="d-flex justify-content-between" class="font-weight-semi-bold m-0">
                         <p>  
                       
                        <?php 
                            $i=0;
                            $ptotal = 0;
                            $total=0;
                            if(isset($_SESSION['cart'])){
                            echo "<table> ";
                            foreach($_SESSION['cart'] as $key=> $value){

                            $ptotal = $value['Product_Price'] * $value['Pquantity'];
                            $total += $value['Product_Price'] * $value['Pquantity']; $ptotal = $value['Product_Price'] * $value['Pquantity'];
                            $i = $key +1; 
 
                            

                                

                            echo "
                            
                            
                            <tr>
                           
                            
                            <td>$value[Product_Name] &emsp; &emsp; &emsp;</td>
                            
                            <td>$value[Pquantity] &emsp; &emsp; </td>
                                                         
                            <td>Rs$ptotal</td>
                           
                            
                             
                            </tr>
                           
                                ";
                                }
                            }
                            echo "</table>";

                    ?></p>
                     </div>

                        <hr class="mt-0">
                        <div class="d-flex justify-content-between mb-3 pt-1">
                            <h6 class="font-weight-medium">Subtotal</h6>
                            <h6 class="font-weight-medium"><?php echo $total ;?></h6>
                        </div>
                       <div class="d-flex justify-content-between">
                            <h6 class="font-weight-medium">Shipping</h6>
                            <h6 class="font-weight-medium">Rs80</h6>
                        </div>
                    </div>
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="d-flex justify-content-between mt-2">
                            <h5 class="font-weight-bold">Total</h5>
                            <h5 class="font-weight-bold"><?php echo $total + 80;?></h5>
                        </div>
                    </div>
                </form>
                </div>
                <div class="card border-secondary mb-5">
                    
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Payment</h4>
                    </div>
                    <form action="checkoutorder.php" method="post" enctype="multipart/form-data">

                    <div class="card-body">
                        <div class="form-group">
                            <div class="custom-control custom-radio">
                                <input type="radio"  value="COD" class="custom-control-input" name="payment" id="paypal" required>
                                <label class="custom-control-label" for="paypal">Cash ON Delivery</label>
                            </div>
                        </div>
                        
                        
                    </div>
                     <input type="hidden" name="hidden_total"  value="<?php echo $total + 50;?>"  >
                                
                    <div class="card-footer border-secondary bg-transparent">
                    <button class="btn btn-lg btn-block btn-primary font-weight-bold my-3 py-3" name="submit">Place Order</button>
                    </div>
               </form>
                </div>
            </div>
        </div>
    </div>
    <!-- Checkout End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-dark mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <a href="" class="text-decoration-none">
                    <h1 class="mb-4 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border border-white px-3 mr-1">PLANTS</span>HEAVEN</h1>
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
                            
                            <a class="text-dark mb-2" href="cart.php"><i class="fa fa-angle-right mr-2"></i>Shopping Cart</a>
                            
                        </div>
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
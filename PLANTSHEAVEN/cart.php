<?php
session_start();
//session_destroy();
$con = mysqli_connect('localhost','root','','ich');


if (isset($_POST["addCart"])){
 
    $Product_Photo = $_POST['hidden_Product_Photo'];
    $Product_Id = $_POST['hidden_Product_Id'];
    $Product_Name = $_POST['hidden_Product_Name'];
     $Product_Price= $_POST['hidden_Product_Price'];
     $Product_quantity = $_POST['Pquantity'];
   if (isset($_SESSION["cart"])){
     $check_product =array_column($_SESSION['cart'],'Product_Name');
     if(in_array($Product_Name,$check_product)){
            echo "
            <script>
            alert('product already added');
            windows.location.href = 'shop.php';
            </script>
            ";
     }
     else{
         $_SESSION['cart'][] = array('Product_Photo'=>$Product_Photo,
                                    'Product_Id'=>$Product_Id,
                                    'Product_Name'=>$Product_Name,
                                    'Product_Price'=>$Product_Price,
                                    'Pquantity'=> $Product_quantity);
         
         header("location:cart.php");exit;
                                   
        }
    }
    else{
        $_SESSION['cart'][] = array('Product_Photo'=>$Product_Photo,
                                'Product_Id'=>$Product_Id,
                                'Product_Name'=>$Product_Name,
                                'Product_Price'=>$Product_Price,
                                'Pquantity'=> $Product_quantity);
        header("location:cart.php");exit;
                               
    }
}
    //remove product
    if (isset($_POST['remove'])){
         
        foreach($_SESSION['cart'] as $key => $value){
            if($value['Product_Name']  === $_POST['item']){
                unset($_SESSION['cart'][$key]);
                 echo "
                <script>
                alert('product removed');
                </script>
                ";
                $_SESSION['cart'] = array_values($_SESSION['cart']);
               
               header("location:cart.php");exit;
            }
        }
    }
    //add product
    if (isset($_POST['update'])){
       
         $Product_quantity = $_POST['Pquantity'];
        foreach($_SESSION['cart'] as $key => $value){
            if($value['Product_Name']  == $_POST['item']){
               $_SESSION['cart'][$key]['Pquantity']= $Product_quantity;
             
            }
        }
    }
    $count = 0;
    if (isset($_SESSION['cart'])){
    $count = count($_SESSION['cart']);
}
   //print_r($_SESSION['cart']);   


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
        <!--<div class="row bg-secondary py-2 px-xl-5">
            <div class="col-lg-6 d-none d-lg-block">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark" href="">FAQs</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Help</a>
                    <span class="text-muted px-2">|</span>
                    <a class="text-dark" href="">Support</a>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-dark px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-dark pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>-->
        <div class="row align-items-center py-3 px-xl-5">
            <div class="col-lg-5 d-none d-lg-block">
                <a href="" class="text-decoration-none">
                    <h1 class="m-0 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border px-3 mr-1">PLANTS</span>HEAVEN</h1>
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
                                <a href="userprofile.php" class="dropdown-item">Edit Profile</a>
                                <a href="myorder.php" class="dropdown-item">My Orders</a>
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
            <h1 class="font-weight-semi-bold text-uppercase mb-3">Shopping Cart</h1>
            <div class="d-inline-flex">
                <p class="m-0"><a href="index.php">Home</a></p>
                <p class="m-0 px-2">-</p>
                <p class="m-0">Shopping Cart</p>
            </div>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Cart Start -->
    <div class="container-fluid pt-5">
        <div class="row px-xl-10">
            <div class="col-lg-10 table-responsive mb-5">
                <table class="table table-bordered text-center mb-0">
                    <thead class="bg-secondary text-dark">
                        <tr>
                            <th>Indexno.</th>
                            <th>Products</th>
                            <th>Price</th>
                            <th>Quantity</th>
                            <th>Total</th>
                            <th>AddQuantity</th>
                            <th>Remove</th>
                        </tr>
                    </thead>
                    <tbody class="align-middle">
                       
                       <!-- <tr>
                            <td class="align-middle">Index No</td>
                            <td class="align-middle"><img src="<?php echo $value["Product_Photo"]?>" alt="" style="width: 20px;">
                                ["Product_Name"]</td>
                            <td class="align-middle">"Product_Price"</td>
                            <td class="align-middle">["quantity"]  </td>
                            <td class="align-middle">Total</td>
                            <td class="align-middle"><a href ="cart.php?action=delete&Product_id="><span class="text-danger">Remove Item</span></a></td>
                        </tr>-->
                   

<!--<img src="<?php echo $picfile; ?>" border="0" width="<?php echo $imgsize[0]; ?>" height="<?php echo $imgsize[1]; ?>" align="left" style="border:1px solid black;margin-right:5px;">//$sub_total += ($item['quantity'] * $product['price']);-->

                            <?php 
                            $i=0;
                            $ptotal = 0;
                            $total=0;
                            if(isset($_SESSION['cart'])){
                            foreach($_SESSION['cart'] as $key=> $value){

                            $ptotal = $value['Product_Price'] * $value['Pquantity'];

                            $total += $value['Product_Price'] * $value['Pquantity']; $ptotal = $value['Product_Price'] * $value['Pquantity'];
                            $i = $key +1; 
 
                            

                                

                            echo "
                            <form action='cart.php' method='POST'>
                            <tr>
                            <td> $i </td>
                            <td><input type='hidden' name = 'hidden_Product_Photo' value='$value[Product_Photo]'><img src='ICHsellerpanel/$value[Product_Photo]' width=150> <br><input type='hidden' name = 'hidden_Product_Name' value='$value[Product_Name]'> $value[Product_Name]</td>
                            <td>Rs <input type='hidden' name = 'hidden_Product_Price' value='$value[Product_Price]'>$value[Product_Price]</td>

                            <td><input type='number' name = 'Pquantity' max='10' value='$value[Pquantity]' ></td>
                            
                            <td>Rs$ptotal</td>
                            <td><button name= 'update' class='btn-light'>Update</button></td>
                            <td><button name='remove' class='btn-dark'>Remove</button></td>
                            <td><input type='hidden' name = 'item' value='$value[Product_Name]'><td>
                            </tr>
                            </form>
                                ";
                                }
                            }

                    ?>




                     </tbody>
                </table>
            </div>
            <div class="col-lg-4" align="float-right">
                
               
                <div class="card border-secondary mb-5">
                    <div class="card-header bg-secondary border-0">
                        <h4 class="font-weight-semi-bold m-0">Cart Summary</h4>
                    </div>
                    <div class="card-body">
                        <div class="d-flex justify-content-between mb-3 pt-1">
                            <h5 class="font-weight-medium" >Subtotal</h5>
                            <h5 class="font-weight-medium" name="num1"><?php echo "Rs". number_format($total,2) ?></h5>
                        </div>
                        
                    </div>
                    <form action="cartorder.php" method="post" enctype="multipart/form-data">
  
                    <div class="card-footer border-secondary bg-transparent">
                        <div class="btn btn-block btn-primary my-3 py-3" ><?php echo "<td >
                            <a style=\"color:white;\" onclick='return confirm(\"There should be atleast one 1 item to checkout\");'href='testcart.php?total=${total} '>Proceed To Checkout</a></td>";?></div>
                       
                    </div>
                    </form>
                </div>
               
            </div>
        </div>
    </div>
    <!-- Cart End -->


    <!-- Footer Start -->
    <div class="container-fluid bg-secondary text-dark mt-5 pt-5">
        <div class="row px-xl-5 pt-5">
            <div class="col-lg-4 col-md-12 mb-5 pr-3 pr-xl-5">
                <a href="" class="text-decoration-none">
                    <h1 class="mb-4 display-5 font-weight-semi-bold"><span class="text-primary font-weight-bold border border-white px-3 mr-1">PLANTS</span>HEAVEN</h1>
                </a>
                
                <p class="mb-2"><i class="fa fa-envelope text-primary mr-3"></i>plantsheaven5@gmail.com</p>
                
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
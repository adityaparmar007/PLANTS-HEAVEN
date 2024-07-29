<?php 
session_start();

            $con=mysqli_connect("localhost","root","","ich");


                 if(isset($_POST['delete_btn']))
                {
                    $Product_id = $_POST['Product_id']; 
                    $select = "DELETE FROM product WHERE Product_id='$Product_id'";
                    $query = mysqli_query($con,$select);

                    if($query)
                {
                    $_SESSION['success'] = "You Data is Deleted";
                    header("Location:productupload.php");
                }
                else
                {
                     $_SESSION['status'] = "You Data is NOT Deleted";
                    header("Location:productupload.php");
                }


                }

                
?>
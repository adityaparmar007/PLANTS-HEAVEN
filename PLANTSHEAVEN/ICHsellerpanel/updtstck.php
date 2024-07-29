<?php 
session_start();

            $con=mysqli_connect("localhost","root","","ich");




            if(isset($_POST['updatebtn']))
           {

                $Product_id = $_POST['Product_id']; 
                $Product_Name = $_POST['Product_Name'];
                $Product_Price = $_POST['Product_Price'];
                $Product_Photo = $_FILES['Product_Photo'];
                $Product_Description = $_POST['Product_Description'];    
               $updImage = "";
               if(isset($Product_Photo)){
                $filename=$Product_Photo['name'];
                $filepath=$Product_Photo['tmp_name'];    

                $destfile = 'upload/'.$filename;
              
                move_uploaded_file($filepath,$destfile);
               $updImage = " Product_Photo='$destfile', ";
               }
                $select = "UPDATE product SET Product_Name='$Product_Name',Product_Price='$Product_Price', ".$updImage." Product_Description='$Product_Description' WHERE Product_id='$Product_id' ";
                $query = mysqli_query($con,$select);
                
                if($query)
                {
                    $_SESSION['success'] = "You Data is Updated";
                    header("Location:productsuploaded.php");
                }
                else
                {
                     $_SESSION['status'] = "You Data is NOT Updated";
                    header("Location:productsuploaded.php");
                }
            }        




                 if(isset($_POST['delete_btn']))
                {
                    $Product_id = $_POST['Product_id']; 
                    $select = "DELETE FROM product WHERE Product_id='$Product_id'";
                    $query = mysqli_query($con,$select);

                    if($query)
                {
                    $_SESSION['success'] = "You Data is Deleted";
                    header("Location:productsuploaded.php");
                }
                else
                {
                     $_SESSION['status'] = "You Data is NOT Deleted";
                    header("Location:productsuploaded.php");
                }


                }
?>
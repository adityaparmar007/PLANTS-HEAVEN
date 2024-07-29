<?php 
session_start();

            $con=mysqli_connect("localhost","root","","ich");

             if(isset($_POST['registerbtn']))
            {

                $FirstName = $_POST['FirstName'];
                $LastName = $_POST['LastName'];
                $Emailid = $_POST['Emailid'];
                $PhoneNumber = $_POST['PhoneNumber'];
                $Password = $_POST['Password'];
                
                $select = "INSERT INTO sellerregistration(FirstName,LastName,Emailid,PhoneNumber,Password)  VALUES ('$FirstName','$LastName','$Emailid',
                    '$PhoneNumber','$Password')";
                 $query = mysqli_query($con,$select);

                if($query)
                {
                    $_SESSION['success'] = "Seller Profile Added";
                    header("Location:sellerdetails.php");
                }
                else
                {
                     $_SESSION['success'] = "Seller Profile NOT Added";
                    header("Location:sellerdetails.php");
                }
            }


            if(isset($_POST['updatebtn']))
    {

                $Seller_id = $_POST['Seller_id']; 
                $FirstName = $_POST['FirstName'];
                $LastName = $_POST['LastName'];
                $Emailid = $_POST['Emailid'];
                $PhoneNumber = $_POST['PhoneNumber'];
                $Password = $_POST['Password'];
                $Address = $_POST['Address'];
                $City = $_POST['City']; 
                $State = $_POST['State']; 
            

                $select = "UPDATE sellerregistration SET FirstName='$FirstName',LastName='$LastName',Emailid='$Emailid',PhoneNumber='$PhoneNumber',Password='$Password',Address='$Address',City='$City',State='$State' WHERE Seller_id='$Seller_id' ";
                $query = mysqli_query($con,$select);
                
                if($query)
                {
                    $SESSION['success'] = "You Data is Updated";
                    header("Location:sellerdetails.php");
                }
                else
                {
                     $SESSION['status'] = "You Data is NOT Updated";
                    header("Location:sellerdetails.php");
                }
    }        


                if(isset($_POST['delete_btn']))
                {
                    $Seller_id = $_POST['Seller_id']; 
                    $select = "DELETE FROM sellerregistration WHERE Seller_id='$Seller_id'";
                    $query = mysqli_query($con,$select);

                    if($query)
                {
                    $_SESSION['success'] = "You Data is Deleted";
                    header("Location:sellerdetails.php");
                }
                else
                {
                     $_SESSION['status'] = "You Data is NOT Deleted";
                    header("Location:sellerdetails.php");
                }


                }

?>       
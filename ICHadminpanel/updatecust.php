<?php 
session_start();

            $con=mysqli_connect("localhost","root","","ich");


            if(isset($_POST['updatebtn']))
    {

                $Registration_id = $_POST['Registration_id']; 
                $FirstName = $_POST['FirstName'];
                $LastName = $_POST['LastName'];
                $Emailid = $_POST['Emailid'];
                $PhoneNumber = $_POST['PhoneNumber'];
                $Password = $_POST['Password'];
                $Address = $_POST['Address'];
                $State = $_POST['State'];
                $City = $_POST['City'];

                 echo $PhoneNumber;$select = "UPDATE registration SET FirstName='$FirstName',LastName='$LastName',Emailid='$Emailid',PhoneNumber=$PhoneNumber,Password='$Password',Address='$Address',State='$State',City='$City' WHERE Registration_id='$Registration_id' ";

                $query = mysqli_query($con,$select);
                
                if($query)
                {
                    $_SESSION['success'] = "You Data is Updated";
                    header("Location:customerdetails.php");
                }
                else
                {
                     $_SESSION['status'] = "You Data is NOT Updated";
                    header("Location:customerdetails.php");
                }
    }        






                if(isset($_POST['delete_btn']))
                {
                    $Registration_id = $_POST['Registration_id']; 
                    $select = "DELETE FROM registration WHERE Registration_id='$Registration_id'";
                    $query = mysqli_query($con,$select);

                    if($query)
                {
                    $_SESSION['success'] = "You Data is Deleted";
                    header("Location:customerdetails.php");
                }
                else
                {
                     $_SESSION['status'] = "You Data is NOT Deleted";
                    header("Location:customerdetails.php");
                }


                }


            ?>       





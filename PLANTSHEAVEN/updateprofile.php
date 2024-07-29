<?php
session_start();
            $con=mysqli_connect("localhost","root","","ich");



               /* $Registration_id = $_POST['Registration_id']; 
                $FirstName = $_POST['FirstName'];
                $LastName = $_POST['LastName'];
                $Emailid = $_POST['Emailid'];
                $PhoneNumber = $_POST['PhoneNumber'];
                $Password = $_POST['Password'];
                $Address = $_POST['Address'];
                $City = $_POST['City']; 
                $State = $_POST['State']; 
                echo  $Registration_id ,  $FirstName,$LastName, $Emailid , $PhoneNumber ,$Password , $Address , $City ,$State;  */
if(isset($_POST['updatebtn']))
    {

                $Registration_id = $_POST['Registration_id']; 
                $FirstName = $_POST['FirstName'];
                $LastName = $_POST['LastName'];
                $Emailid = $_POST['Emailid'];
                $PhoneNumber = $_POST['PhoneNumber'];
                $Password = $_POST['Password'];
                $Address = $_POST['Address'];
                $City = $_POST['City']; 
                $State = $_POST['State']; 
            

                $select = "UPDATE registration SET FirstName='$FirstName',LastName='$LastName',Emailid='$Emailid',PhoneNumber='$PhoneNumber',Password='$Password',Address='$Address',City='$City',State='$State' WHERE Registration_id='$Registration_id' ";
                $query = mysqli_query($con,$select);
                
                if($query)
                {
                    $SESSION['success'] = "You Data is Updated";
                    header("Location:userprofile.php");
                }
                else
                {
                     $SESSION['status'] = "You Data is NOT Updated";
                    header("Location:userprofile.php");
                }
    }     



                
            ?>
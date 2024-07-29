<?php
session_start();

$Emailid = $_POST['Emailid'];
$Password = $_POST['Password'];
$usertype = $_POST['usertype'];
$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$Address = $_POST['Address'];
$City = $_POST['City'];
$State = $_POST['State'];
$PostCode = $_POST['PostCode'];


$con = mysqli_connect('localhost','root','','ich');

if($usertype=="Customer")
{

$sql = "select * from registration where Emailid = '$Emailid' && Password ='$Password'";
}
else
{
	$sql = "select * from sellerregistration where Emailid = '$Emailid' && Password ='$Password'";
}
$result = mysqli_query($con,$sql);
$num = mysqli_num_rows($result);

if($num==1)                 
{

	$_SESSION['logged_in'] = TRUE;
				if($usertype=="Customer")
   				{
   					$row = mysqli_fetch_assoc($result);
   					$_SESSION['userid']=$row['Registration_id'];
   					$_SESSION['usertype']='Customer'; 					
   					$_SESSION['Emailid']=$Emailid;
   					$_SESSION['FirstName']=$FirstName;
   					$_SESSION['LastName']=$LastName;
   					$_SESSION['Address']=$Address;
   					$_SESSION['City ']=$City ;
   					$_SESSION['State']=$State;
   					$_SESSION['PostCode']=$PostCode;
   					header('location:../index.php');
   					
   				}
   				else
   				{
   					$row = mysqli_fetch_assoc($result);
   					$_SESSION['userid']=$row['Seller_id'];
   					$_SESSION['usertype']='Seller';
   					$_SESSION['Emailid']=$Emailid;
   					header('location:../ICHsellerpanel/index.php');

				}
}
else
{
	$_SESSION['status']='Email id / Password is Invalid ';
	header('location:login.php');
}


				
   				
?>
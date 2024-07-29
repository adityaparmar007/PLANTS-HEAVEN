<?php
session_start();

$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$Emailid = $_POST['Emailid'];
$PhoneNumber = $_POST['PhoneNumber'];
$Password = $_POST['Password'];
$Address = $_POST['Address'];
$City = $_POST['City'];
$State = $_POST['State'];
$PostCode = $_POST['PostCode'];
$usertype=$_POST['usertype'];         

$con = mysqli_connect('localhost','root','');

	if(!$con)
	{
	die("Connection was not successful");
	}
	else
	{
		echo $PhoneNumber;
		echo 'connection successfully';
	}		
	mysqli_select_db($con,'ich');

	if($usertype=="Customer")
	{
 	$sql = "INSERT Into registration(FirstName,LastName,Emailid,PhoneNumber,Password,Address,City,State,PostCode) VALUES('$FirstName','$LastName','$Emailid',$PhoneNumber,'$Password','$Address','$City','$State','$PostCode');";
	}
	else
	{
		$Address=$_POST['Address'];
		$City=$_POST['City'];
		$State=$_POST['State'];
		 $sql = "INSERT Into sellerregistration(FirstName,LastName,Emailid,PhoneNumber,Password,Address,City,State,PostCode) VALUES('$FirstName','$LastName','$Emailid',$PhoneNumber,'$Password','$Address','$City','$State','$PostCode');";
	}
	if(mysqli_query($con,$sql))
	{
		header("location:../login/login.php");
	}

	else
	{
		echo mysqli_error($con);
		echo 'email already registered';
	}



	

?>
<?php
session_start();

$FirstName = $_POST['FirstName'];
$LastName = $_POST['LastName'];
$Emailid = $_POST['Emailid'];
$Password = $_POST['Password'];           

$con = mysqli_connect('localhost','root','');

	if(!$con)
	{
	die("Connection was not successful");
	}
	else
	{

		echo 'connection successfully';
	}		
	mysqli_select_db($con,'ich');

	
	$sql = "INSERT Into admin(FirstName,LastName,Emailid,Password) VALUES('$FirstName','$LastName','$Emailid','$Password');";
	
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
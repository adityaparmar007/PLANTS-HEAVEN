<?php
session_start();

$Product_Name = $_POST['Product_Name'];
$Pquantity = $_POST['Pquantity'];
$Product_Price = $_POST['Product_Price'];

$con = mysqli_connect('localhost','root','','ich');

	if(!$con)
	{
	die("Connection was not successful");
	}
	else
	{

		echo 'connection successfully';
	}		
	mysqli_select_db($con,'ich');

	
	 echo $sql = "INSERT Into order_product(Product_Name,Pquantity,Product_Price) VALUES('$Product_Name','$Pquantity','$Product_Price');"; exit();
	
	if(mysqli_query($con,$sql))
	{
		header("location:checkout.php");
	}
	else
	{
		echo mysqli_error($con);
		echo 'not ordered to checkout page';
		header("location:cart.php");
	}

?>

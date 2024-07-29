<?php
session_start();

$hidden_total = $_POST['hidden_total'];
$payment = $_POST['payment'];


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

	
$sql ="INSERT INTO `order`(`order_payment`, `order_status`, `order_price`, `order_customerid`) VALUES ('$payment','pending','$hidden_total','$_SESSION[userid]')";

	if(mysqli_query($con,$sql))
	{$orderid = mysqli_insert_id($con);
		foreach($_SESSION['cart'] as $key => $value)
		{
			$sqlp ="INSERT INTO `order_product`( `order_id`, `product_id`, `product_quantity`, `product_name`, `product_price`,`product_Emailid`) VALUES ('$orderid','$value[Product_Id]','$value[Pquantity]','$value[Product_Name]','$value[Product_Price]','$_SESSION[Emailid]')";
				mysqli_query($con,$sqlp);
        
        }
        unset($_SESSION['cart']); 
        session_unset($_SESSION['cart']);
		
		header("location:thankyou.php");exit;
	}
	else
	{
		echo mysqli_error($con);
		echo '';
		header("location:checkout.php");exit;
	}

?>

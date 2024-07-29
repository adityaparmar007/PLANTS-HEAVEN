<?php
session_start();

$review_firstname = $_POST['review_firstname'];
$review_name = $_POST['review_name'];


$con = mysqli_connect('localhost','root','');
echo $review_firstname;
echo $review_name;
	if(!$con)
	{
	die("Connection was not successful");
	}
	else
	{

		echo 'connection successfully';
		
	mysqli_select_db($con,'ich');

	
	$sql = "INSERT Into review(review_firstname,review_name) VALUES('$review_firstname','$review_name');";
	
	if(mysqli_query($con,$sql))
	{
		header("location:thankyou.php");
	}
	else
	{

		echo mysqli_error($con);
		header("location:thankyou.php");
	}
}
?>

<?php

session_start();
$Emailid = $_POST['Emailid'];
$Password = $_POST['Password'];

$con = mysqli_connect('localhost','root','','ich');


$sql = "select * from admin where Emailid = '$Emailid' && Password ='$Password'";
$result = mysqli_query($con,$sql);
$num = mysqli_num_rows($result);

if($num==1)
{
	$_SESSION['logged_in'] = TRUE;
	$_SESSION['Emailid'] = $Emailid;

	header('location:../index.php');
}
else
{
	$_SESSION['status']='Email id / Password is Invalid ';
	header('location:loginadmin.php');
}
  																											

?>
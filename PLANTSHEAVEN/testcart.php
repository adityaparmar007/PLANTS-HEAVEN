<?php 

$total = $_GET['total'];
echo $total;

if($total<=0)
{

	header("Location:shop.php");
}
else
{
	header("Location:checkout.php");
}

?>
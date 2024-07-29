 <?php 
 session_start();
 $con=mysqli_connect("localhost","root","","ich");

 if(isset($_POST['delete_btn']))
{
                    $order_product_id = $_POST['order_product_id']; 
                    $select = "DELETE FROM order_product WHERE order_product_id='$order_product_id'";
                    $query = mysqli_query($con,$select);
    if($query)
    {
                    $_SESSION['success'] = "You Canceled the order";
                    header("Location:myorder.php");
                }
                else
                {
                     $_SESSION['status'] = "You order is not Canceled";
                    header("Location:myorder.php");
                }



                }
?>
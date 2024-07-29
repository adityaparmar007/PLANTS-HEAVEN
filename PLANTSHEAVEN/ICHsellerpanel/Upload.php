<?php


include 'dbconupload.php';

if(isset($_POST['submit']))
{
    $Product_Name=$_POST['Product_Name'];
    $Product_Price=$_POST['Product_Price'];
    $file=$_FILES['Product_Photo'];
    $Product_Description=$_POST['Product_Description'];

    $dup = mysqli_query($con,"select * from product where Product_Name='$Product_Name'");
    if(mysqli_num_rows($dup)>0)
    {
        $_SESSION['success'] = "Cannot enter same product name";
        //echo "onclick='return confirm(\"Cannot enter same product name\");' 'href='uploadproducts.php?Product_Name=${Product_Name} ";
        header("Location:uploadproducts.php");

    }
    else
    {

        $filename=$file['name'];
        $filepath=$file['tmp_name'];
        $fileerror = $file['error'];

        if($fileerror == 0)
        {

        	$destfile = 'upload/'.$filename;
        	//echo "$destfile";
        	move_uploaded_file($filepath,$destfile);

        	$insert = "INSERT INTO product(Product_Name,Product_Price,Product_Photo,Product_Description) values('$Product_Name','$Product_Price','$destfile','$Product_Description')";

        	$query = mysqli_query($con,$insert);

        	if($query)
        	{
        		echo "Upload Successfully";

        	}
        	else
        	{
        		echo "Not Upload";
        	}
        	header('location:uploadproducts.php');
        }
    }
}	
   



    if(isset($_POST['confirm_btn']))
    {

                $order_id = $_POST['order_id']; 
                
                $select = "UPDATE `order` SET `order_status`='Confirm' WHERE `order_id`='$order_id' ";

                $query = mysqli_query($con,$select);
                
                if($query)
                {
                    $_SESSION['success'] = "Order is Confirm";
                    header("Location:productconfirmation.php");
                }
                else
                {
                     $_SESSION['status'] = "Order is not Confirm";
                    header("Location:productconfirmation.php");
                }
    }         

















            if(isset($_POST['updatebtn']))
    {

                 $Seller_id = $_POST['Seller_id']; 
                  $FirstName = $_POST['FirstName'];
                $LastName = $_POST['LastName'];
                 $Emailid = $_POST['Emailid'];
                $PhoneNumber = $_POST['PhoneNumber'];
                $Address = $_POST['Address'];
                $State = $_POST['State'];
                $City = $_POST['City'];

             $select = "UPDATE sellerregistration SET FirstName='$FirstName',LastName='$LastName',Emailid='$Emailid',PhoneNumber=$PhoneNumber,Address='$Address',State='$State',City='$City' WHERE Seller_id='$Seller_id' ";

                $query = mysqli_query($con,$select);
                
                if($query)
                {
                    $_SESSION['success'] = "You Data is Updated";
                    header("Location:editprofile.php");
                }
                else
                {
                     $_SESSION['status'] = "You Data is NOT Updated";
                     echo $_SESSION['status'];//header("Location:editprofile.php");
                }
    }        






?>

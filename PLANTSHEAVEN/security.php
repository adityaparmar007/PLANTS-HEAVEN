<?php
session_start();

include('dbconfig.php');

if($dbconfig)
{
    
    echo "Database Connected";

}
else
{
     header("Location:login/login.php");
    
}

if(!$_SESSION['Emailid'])
{
    header('Location:login/login.php');
}




?>
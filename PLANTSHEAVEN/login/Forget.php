<?php
$con = mysqli_connect('localhost','root','','ich');

						if(isset($_POST['password_reset'])){
						$email=mysqli_real_escape_string($con$_POST['Emailid']);
						$token = md5(rand());
						$check_email = "SELECT Emailid from registration WHERE Emailid='$Emailid' LIMIT 1";
						$check_email_run = mysqli_query($con,$check_email);

						if(mysqli_num_rows($check_email_run)>0)
						{

						}
						else
						{
							$_SESSION['status'] = "No Email Found";
							header('location:Forget1.php');

						}






						$query ="select Registration_id from registration where Emailid ='$email;'";
						$result = mysqli_query($con,$query);
						$row = mysqli_fetch_array($result);
						if($row!=null){
							echo "here";
							$row=$row['Registration_id'];
							$msg = "http://localhost/INDIANCRAFTHOUSE/login/Forget.php?id=$row";

						

						// send email
						mail($_POST['Emailid'],"Recover Password",$msg);
						}
						
						
						}
						?>
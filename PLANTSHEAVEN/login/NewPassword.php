<?php
					if(isset($_POST['Password1'])){
						if($_POST['Password1'])==$_POST['Password2'])){
						if(isset($_GET['id']){
						$con = mysqli_connect('localhost','root','','ich');
						$query ="update registration set Password =$_POST['Password1'] where Registration_id=$_GET['id']";
						$result = mysqli_query($con,$query);

						}
						}
						
					}
					


					?>
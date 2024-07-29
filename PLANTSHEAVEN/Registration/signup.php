
<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/owl.carousel.min.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    
    <!-- Style -->
    <link rel="stylesheet" href="css/style.css">
    <style>
      div.a {
            text-align: center;
            }
    </style>

    <title>Registration</title>
                                                                       
  </head>
  <body>
  <form method="POST" action="ich_insert.php"> 

  <div class="d-lg-flex half">
    <div class="bg order-1 order-md-2" style="background-image: url('images/Handicrafts2.png');"></div>
    <div class="contents order-2 order-md-1">
      <div class="container">
        <div class="row align-items-center justify-content-center">
          <div class="col-md-7 py-5">

            <div class="a"><h3><strong>𝗥𝗲𝗴𝗶𝘀𝘁𝗲𝗿</strong></h3></div>
            <form action="#" method="post">
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="firstname">First Name</label>
                    <input type="text" class="form-control" placeholder="e.g. John" id="firstname" name="FirstName" required>
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group first">
                    <label for="lastnamename">Last Name</label>
                    <input type="text" class="form-control" placeholder="e.g. Smith" id="lastname" name="LastName" required>
                  </div>    
                </div>
              </div>
              <div class="row">
                <div class="col-md-6">
                  <div class="form-group first mb-3">
                    <label for="emailid">Email id</label>
                    <input type="email" class="form-control" placeholder="e.g. john@your-domain.com" pattern="^([a-zA-Z0-9_\-\.]+)@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.)|(([a-zA-Z0-9\-]+\.)+))([a-zA-Z]{2,4}|[0-9]{1,3})(\]?)$" id="emailid" name="Emailid" required>
                  </div>    
                </div>
                <div class="col-md-6">
                  <div class="form-group first mb-3">
                    <label for="PhoneNumber">Phone Number</label>
                    <input type="number" class="form-control" placeholder="e.g. 212-456-7890" id="PhoneNumber" name="PhoneNumber" required>
                  </div>    
                </div>
              
              </div>
            <div class="row">
                <div class="col-md-6">
                  <div class="form-group last mb-3">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" placeholder="Your Password" id="Password" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" name="Password" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group first mb-3">
                    <label for="Address">Address </label>
                    <input type="text" class="form-control" placeholder=" 12/A Olives Bunglow" id="Address" name="Address" required>
                  </div>    
                </div>
                  </script>
               
               
                <div class="col-md-6">
                  <div class="form-group last mb-3">
                    <label for="State">State</label>
                    <input type="text" class="form-control" placeholder="Gujarat" id="State" name="State" required>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group first mb-3">
                    <label for="City">City </label>
                    <input type="text" class="form-control" placeholder="Ahmedabad" id="City" name="City"required>
                  </div>    
                </div>
                
                <div class="col-md-6">
                  <div class="form-group first mb-3">
                    <label for="PostCode">PostCode</label>
                    <input type="number" class="form-control" placeholder="380007" id="PostCode" name="PostCode" required>
                  </div>    
                </div>
                </div>

             <div class="col-md-6">
              <div class="form-group last mb-10">
              <p><b>Type:</b></p>
              <input type="radio" id="html" name="usertype" value="Customer" required> 
              <label for="html">Customer</label> 
            </div>
          </div>
          <div class="col-md-6">
              <div class="form-group last mb-10">
              <input type="radio" id="html" name="usertype" value="Seller" required> 
              <label for="html">Seller</label>
            </div>
          </div>
          </div> 
       </div> 
       </div>
              
          
             
      
              <div class="d-flex mb-5 mt-4 align-items-center">
                <div class="d-flex align-items-center">
                <input type="submit" a href="../login/login.php" value="Register" class="btn px-5 btn-primary">
                  
                  
                
              </div>
              </div>

              

            </form>
          </div>
        </div>
      </div>
    </div>

    
  </div>
    
    <script>

var myInput = document.getElementById("psw");
var letter = document.getElementById("letter");
var capital = document.getElementById("capital");
var number = document.getElementById("number");
var length = document.getElementById("length");

// When the user clicks on the password field, show the message box


// When the user clicks outside of the password field, hide the message box
myInput.onblur = function() {
  document.getElementById("message").style.display = "none";
}

// When the user starts to type something inside the password field
myInput.onkeyup = function() {
  // Validate lowercase letters
  var lowerCaseLetters = /[a-z]/g;
  if(myInput.value.match(lowerCaseLetters)) {  
    letter.classList.remove("invalid");
    letter.classList.add("valid");
  } else {
    letter.classList.remove("valid");
    letter.classList.add("invalid");
  }
  
  // Validate capital letters
  var upperCaseLetters = /[A-Z]/g;
  if(myInput.value.match(upperCaseLetters)) {  
    capital.classList.remove("invalid");
    capital.classList.add("valid");
  } else {
    capital.classList.remove("valid");
    capital.classList.add("invalid");
  }

  // Validate numbers
  var numbers = /[0-9]/g;
  if(myInput.value.match(numbers)) {  
    number.classList.remove("invalid");
    number.classList.add("valid");
  } else {
    number.classList.remove("valid");
    number.classList.add("invalid");
  }
  
  // Validate length
  if(myInput.value.length >= 8) {
    length.classList.remove("invalid");
    length.classList.add("valid");
  } else {
    length.classList.remove("valid");
    length.classList.add("invalid");
  }
}

                 </script>

    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/popper.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
  </body>
</html>







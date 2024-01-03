<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Rgistration Page</title>
    <!-- facebook icon -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <!-- facebook icon -->
    <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" integrity="sha384-xxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxxx" crossorigin="anonymous"> -->
	
    <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
        <!-- <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css"> -->
    <!-- Bootstrap JS and  (required for Bootstrap) -->
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

    <!-- Font Awesome JS -->
        <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/js/all.min.js"></script>



        <!-- Custom CSS -->
    <style>
        body {
            background-color: rgb(255, 255, 255);
            
        }

        .login-container {
            max-width: 400px;
            margin: 0 auto;
            margin-top: 100px;
            font-family: 'Courier New', Courier, monospace;
        }

        .login-form {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            width: 500px;
        }

        .form-group {
            position: relative;
        }

        .form-group i {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            left: 10px;
        }
         .c-black {
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.1);
            color: darkblue;
            font-family: 'Courier New', Courier, monospace;
            
        } 
        h4{
            color: #f8f9fa;
            text-shadow: #ff7d7d;
            size: 25px;

        }
        .navbar{
            box-shadow: 0 0 20px #000000;
            shape-margin: 10px;
            margin: 5px;
            border-radius: 10px;
            
        }
        .nav-link {
            color: rgb(0, 0, 0);
            font-family:'Courier New', Courier, monospace;
        }
        .login-container2 {
            max-width: 400px;
            margin: 0 auto;
            margin-top: 25px;
        }
        .ftr{
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.553);
            border-radius: 10px;
        }
    </style>
    <script>
        function validateForm() {
            var password = document.getElementById("pwd").value;
            var confirm_password = document.getElementById("cnfmpwd").value;
    
            if (password !== confirm_password) {
                alert("Password and Confirm Password do not match!");
                return false;
            }
            else {
                    // Continue with form submission
                alert("Password and Confirm Password are match!");
            return true;
            }
    
            
        }
    </script>
</head>
<body>
 <div class="container.fluid bg-light">
        <div class="row"> 
            <div class="col-sm-3 pt-3 " style="margin-left: 20px;"> 
                <h4><font color="green" style="font-family: 'Courier New', Courier, monospace; font-weight: bold; font-size:xx-large; text-align: left;">FOR</font><font color="important" style="font-family: 'Courier New', Courier, monospace; font-weight: bold; font-size:xx-large;">STU</font></h4>            
            </div>
            <div class="col-md-7 pt-3" >
                <ul class= "nav justify-content-center" style="text-align: right; font-size: 120%;">
                    <li class="nav-item">
                        <a class="nav-link text-body" href="#">HOME</a> 
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-body" href="#">ABOUT US</a>
                      </li>
                    <li class="nav-item">
                        <a class="nav-link text-body" href="#">CONTACT</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link text-body" href="#">LOGIN</a>
                    </li>
                </ul>
                
             </div>
        </div>   
    </div>   
    <div class="col-md ">
        <div class="container login-container">
            <div class="login-form">
                <font color="darkblue" style="font-family:'Courier New', Courier, monospace;"><h2 class="text-center">User Registration</font></h2>
                <br>
                <form onSubmit="return validateForm()" action="dbinsert.php" enctype="multipart/form-data" method="post"> 
                    <div class="form-group">
                        <label for="username"><i class="fas fa-user"></i> Full Name </label>
                        <input type="text" class="form-control" id="fname" name="fname" placeholder="Enter your Full Name" required>
                    </div>
                    <div class="form-group">
                        <label for="email"><i class="fa-solid fa-envelope" style="color: #000000;"></i> Email Address </label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="Enter your Email Id" required>
                    </div>
                    <div class="form-group">
                        <label for="mobno"><i class="fa-solid fa-phone" style="color: #000000;"></i> Mobile No</label>
                        <input type="tel" class="form-control" id="mobno" name="mobno" placeholder="Enter your Mobile No" maxlength="10" required>
                    </div>
                    <div class="form-group">
                        <label for="password"><i class="fas fa-lock"></i> Password</label>
                        <input type="password" class="form-control" id="pwd" name="pwd" placeholder="Enter your password" required>
                    </div>
                    <div class="form-group">
                        <label for="confirm_password"><i class="fas fa-lock"></i> Confirm Password</label>
                        <input type="password" class="form-control" id="cnfmpwd" name="cnfmpwd" placeholder="Confirm your password" required>
                    </div>                    
                    <input type="submit" name="Submit" id="Submit" class="btn btn-primary btn-block"/>
                </form>
            </div>
        </div>
    </div> 


if(isset($_POST["Submit"]))
{
	$Fullname=$_POST["fname"];
	$Email=$_POST["email"];
	$Mobile_no=$_POST["mobno"];
	$Password=$_POST["pwd"];
	$confirmPassword=$_POST["cnfmpwd"];
	
	
	
?>
		<script type="text/javascript">
		alert("Successfully Registered");
		window.location="veiwuser.php";
		</script>
	
	

} 

	 


<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
<br>
    <div class="ftr container-fluid bg-primary" >
        <footer><font style="font-family: 'Courier New', Courier, monospace;"> Copyright �2023 All rights reserved FORSTU EDUTECH LLP</font></footer>
        </div>
        </body>
        </html>
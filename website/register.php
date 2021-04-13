<?php 	
require 'config/config.php';
require 'includes/form_handlers/register_handler.php';
require 'includes/form_handlers/login_handler.php';

?>


<!DOCTYPE html>
<html>
<head>
	<title>Welcome to ZIRASS &hearts; !!</title>
	<link rel="stylesheet" type="text/css" href="assets/css/register_style.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="assets/js/register.js"></script>
</head>
<body>
	<?php 
		if(isset($_POST['register_button'])){
			echo ' <script>
			$(document).ready(function(){
				$("#first").hide();
				$("#second").show();

			}); </script>';
		}

	 ?>

	<div class = "wrapper">
		<div class="login_box">

			<div class = "login_header">
				<h1>ZIRASS!  &hearts; </h1>
				<h2>Log In or sign up below!!</h2>
			</div>
			<div id = "first">

				<form action="register.php" method="POST">
					<input type="email" name="log_email" placeholder = "Email Address" value = '<?php 
					if(isset($_SESSION['log_email'])){
						echo $_SESSION['log_email'];
					}  ?>' required>
					<br>
					<input type="password" name="log_password" placeholder="Password">
					<br>
					<input type="submit" name="login_button" placeholder="Log In">
					<br>
					<?php 

					
					if (in_array("email or password is incorrect <br>",$error_array))
					echo "email or password is incorrect <br>" ;

					?>
					<br>
					<a href="#" id = "signup" class = "signup">Create new account!</a>

				</form>
			</div>


			<div id = "second">
				<form action="register.php" method= "POST">
					<input type="text" name="reg_fname" placeholder= "Firstname" value = '<?php if(isset($_SESSION['reg_fname'])){
						echo $_SESSION['reg_fname'];
					}  ?>' required>
					<br>
					<?php if (in_array("your firstname must be between 2 and 50 charecters! <br> ",$error_array))
					echo "your firstname must be between 2 and 50 charecters! <br>" ;

					 ?>
					<input type="text" name="reg_lname" placeholder= "Lastname" value = '<?php if(isset($_SESSION['reg_lname'])){
						echo $_SESSION['reg_lname'];
					}  ?>' required>
					<br>
					<?php if (in_array("your lastname must be between 2 and 50 charecters!<br> ", $error_array))
					echo "your lastname must be between 2 and 50 charecters!<br> " ;
					 ?>
					<?php if (in_array("your firstname must be between 2 and 50 charecters! <br> ", $error_array))
					echo "your firstname must be between 2 and 50 charecters! <br>" ;
					 ?>
					<input type="email" name="reg_email1" placeholder= "Email" value = '<?php if(isset($_SESSION['reg_email1'])){
						echo $_SESSION['reg_email1'];
					}  ?>' required>
					<br>
					<input type="email" name="reg_email2" placeholder= "Confirm Email" value = '<?php if(isset($_SESSION['reg_email2'])){
						echo $_SESSION['reg_email2'];
					}  ?>' required>
					<br>
					<?php if (in_array("Email already in Use <br>", $error_array))
					echo "Email already in Use <br>" ;
					 ?>
					 <?php if (in_array("Invalid Email! <br> ", $error_array))
					echo "Invalid Email! <br> " ;
					 ?>
					 <?php if (in_array("Email don't match. <br>", $error_array))
					echo "Email don't match. <br>";
					 ?>
					<input type="password" name="reg_password1" placeholder= "Password" required>
					<br>

					<input type="password" name="reg_password2" placeholder= "Confirm Password" required>
					<br> 
					<?php if (in_array("your passwords don't match!<br>", $error_array))
					echo "your passwords don't match!<br>" ;

					 ?>
					 <?php if (in_array("password can only contain english letters and numbers.<br>", $error_array))
					echo "password can only contain english letters and numbers.<br>" ;

					 ?>
					 <?php if (in_array("your password must be between 5 and 50 characters.<br> ", $error_array))
					echo "your password must be between 5 and 50 characters.<br> " ;
					 ?>
					<input type="submit" name="register_button" Value= "Register">
					<br>
					<?php if (in_array("<span style = 'color: #14C800'> You're all set! Go ahead and Login! </span>", $error_array))
					echo "<span style = 'color: #14C800'> You're all set! Go ahead and Login! </span>" ;
					?>
					<a href="#" id = "signin" class = "signin">Already have an account!</a>
				</form>
			</div>
		</div>
	</div>

</body>
</html>
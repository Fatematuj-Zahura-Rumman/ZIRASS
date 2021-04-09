<?php 

$fname = "";
$lname = "";
$email1 = "";
$email2 = "";
$password1 = "";
$password2 = "";
$date = "";
$error_array = array();

if(isset($_POST['register_button'])){

	//first name
	$fname = strip_tags($_POST['reg_fname']);
	$fname = str_replace(' ', '', $fname); //remove all spaces
	$fname = ucfirst(strtolower($fname));// uppercase first later and lower others.
	$_SESSION['reg_fname'] = $fname;

	//lirst name
	$lname = strip_tags($_POST['reg_lname']);
	$lname = str_replace(' ', '', $lname); //remove all spaces
	$lname = ucfirst(strtolower($lname));// uppercase first later and lower others.
	$_SESSION['reg_lname'] = $lname;

	//email1
	$email1 = strip_tags($_POST['reg_email1']);
	$email1 = str_replace(' ', '', $email1); //remove all spaces
	$email1 = ucfirst(strtolower($email1));// uppercase first later and lower others.
	$_SESSION['reg_email1'] = $email1;

	//email2
	$email2 = strip_tags($_POST['reg_email2']);
	$email2 = str_replace(' ', '', $email2); //remove all spaces
	$email2 = ucfirst(strtolower($email2));// uppercase first later and lower others.
	$_SESSION['reg_email2'] = $email2;

	//password1
	$password1 = strip_tags($_POST['reg_password1']);

	$password2 = strip_tags($_POST['reg_password2']);

	$date = date("Y-m-d"); //current date


	if ($email1 == $email2){
		if (filter_var($email1, FILTER_VALIDATE_EMAIL)){
			$email1 = filter_var($email1, FILTER_VALIDATE_EMAIL);


			//checking for exsisting email
			$e_check = mysqli_query($con, "SELECT * FROM users Where email = '$email1'");
			$num_rows = mysqli_num_rows($e_check);
			if($num_rows > 0){
				array_push($error_array, "Email already in Use <br>");
			}


		}else{
			array_push($error_array,"Invalid Email! <br> ");
		}

	}else{
		array_push($error_array,"Email don't match. <br>");
	}

	if(strlen($fname) > 50 || strlen($fname) < 2  ){
		array_push($error_array,"your firstname must be between 2 and 50 charecters! <br> ");
	}
	if(strlen($lname) > 50 || strlen($lname) < 2  ){
		array_push($error_array,"your lastname must be between 2 and 50 charecters!<br> ");
	}


	if ($password1 != $password2){
		array_push($error_array,"your passwords don't match!<br>");
	}else{
		if(preg_match('/[^A-Za-z0-9]/', $password1)){
			array_push($error_array,"password can only contain english letters and numbers.<br>");
		}
	}
	if (strlen($password1) >50 || strlen($password1) < 5){
		array_push($error_array,"your password must be between 5 and 50 characters.<br> ");
	}
	if (empty($error_array)) {
		$password1 = md5($password1); //encrypt password
		//unique username generation
		$username = strtolower($fname . "_" . $lname);
		$check_username_query = mysqli_query($con, "SELECT username FROM users WHERE username = '$username'");
		$i = 0;
		while(mysqli_num_rows($check_username_query) != 0){
			$i++;
			$username = $username . "_" . $i;
			$check_username_query = mysqli_query($con, "SELECT username FROM users WHERE username = '$username'");
		}
		//random profile picture

		$profile_pic = "assets/images/profile_picsdefaults/default_profile_pic.png";

		$query_entry = mysqli_query($con, "INSERT INTO users VALUES ('', '$fname', '$lname', '$username', '$email1', '$password1', '$date', '$profile_pic', '0', '0', 'no', ',')");
		array_push($error_array, "<span style = 'color: #14C800'> You're all set! Goahead and Login! </span>");
		//clear session
		$_SESSION['reg_fname'] = "";
		$_SESSION['reg_lname'] = "";
		$_SESSION['reg_email1'] = "";
		$_SESSION['reg_email2'] = "";
		


	}

}



?>
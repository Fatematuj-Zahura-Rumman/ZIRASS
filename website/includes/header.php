<?php 
require '../config/config.php';

/*if(isset($_SESSION['username'])){
	$userLoggedin = $_SESSION['username'];
}else{
	header("Location: register.php");
}*/

?>
<!DOCTYPE html>
<html>
<head>
	<title>ZIRASS &hearts;</title>

	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<script src="assets/js/bootstrap.js"></script>

	<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="../assets/css/style.css">
</head>
<body>
	<div class= "nav_bar">
		<div class="logo">
			<a href="index.php" style="text-decoration: none;">ZIRASS &hearts;</a>
			
		</div>
		<nav>
			<a href="../register.php">Home</a>
			<a href="../register.php">Messages</a>
		</nav>
	</div>
		
</body>
</html>
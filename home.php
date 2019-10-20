<?php
	session_start();
	
	//if(isset($_SESSION['uname'])){
	$name = $_POST['uname'];
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>
	
	<h1>Welcome Home!</h1>
	<h1><?php echo $name ?></h1>
	<center>
	<a href="aprofile.php">View Profile</a><br>
	<a href="cpass.html">Change Password</a><br>
	<a href="vuser.php">View Users</a><br>
	<a href="logout.php">logout</a>
	</center>
</body>	
</html>






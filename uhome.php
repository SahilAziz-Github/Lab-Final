<?php
	session_start();
	
	
?>

<!DOCTYPE html>
<html>
<head>
	<title>Home page</title>
</head>
<body>

	<h1>Welcome Home! <?=$_SESSION['uname']?></h1> 
	<a href="aprofile.php">View Profile</a>
	<a href="cpass.php">Change Password</a>
	<a href="logout.php">logout</a>
</body>	
</html>



<?php		
	}else{
		header('location: login.html');
	}

?>


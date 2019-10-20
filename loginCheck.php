<?php
	
	session_start();

	if(isset($_POST['submit'])){

		$uname = $_POST['uname'];
		$password = $_POST['pass'];
		$utype = $_POST['Type'];

		if(empty($uname) == true || empty($password) == true){
			echo "null submission!";
		}else{

			if($uname == $password && $utype == 'Admin'){
				
				$_SESSION['username'] = $uname;
				$_SESSION['password'] = $password;

				header('location: home.php');

			}
			else if($uname == $password && $utype == 'User'){
				
				$_SESSION['username'] = $uname;
				$_SESSION['password'] = $password;

				header('location: uhome.php');
			}
			else{
				echo "invalid username/password";
			}
		}

	}else{
		header('location: login.html');
	}


?>
<?php
	
	session_start();

	if(isset($_POST['submit'])){

		$upass = $_POST['upass'];
		$npass = $_POST['npass'];
		$cfpass = $_POST['cfpass'];

		if(empty($upass) == true || empty($npass) == true || empty($cfpass) == true){
			echo "null submission!";
		}else{

			if($npass == $cfpass ){
				
				$myfile = fopen('myfile.txt', 'r');
	 
			$data = fwrite($myfile, $npass);
	
			fclose($myfile);
	
	echo $data ;

				header('location: home.php');

			}
			else{
				echo "Passwords Doesn't Match";
			}
		}
		else if($npass == $cfpass || $npass == $upass){
			echo "Can't Provide old password ";

	}else{
		header('location: login.html');
	}


?>
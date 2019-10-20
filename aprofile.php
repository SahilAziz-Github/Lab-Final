<?php
	
	$myfile = fopen('myfile.txt', 'r');
	 
	$data = fread($myfile, filesize('myfile.txt'));
	
	fclose($myfile);
	
	echo $data ;

?>
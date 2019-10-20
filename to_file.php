<?php
session_start();

$file=fopen('myfile.txt','a') or die("file open error");
$c=0;
if($_POST["pass"]==$_POST["confpass"])
{
	$c=$c+fwrite($file," ID : ");
	$c=$c+fwrite($file,$_POST["uid"]);
	$c=$c+fwrite($file," Password : ");
	$c=$c+fwrite($file,$_POST["pass"]);
	$c=$c+fwrite($file," Name : ");
	$c=$c+fwrite($file,$_POST["uname"]);
	$c=$c+fwrite($file," User Type : ");
	$c=$c+fwrite($file,$_POST["usert"]);
	
	header('location: login.html');

}

echo " charactes appended";


?>



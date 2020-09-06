<?php
$server = 'localhost';
$username = 'hazzama_blogger';
$password = 'Hazzama123';
$db_name = 'hazzama_blogger';
$con;

try{
	$con = mysqli_connect($server, $username, $password, $db_name) or die(mysqli_connec_errno());
	
}catch(Exception $e){
	echo $e->getMessage();
}
?>
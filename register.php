<?php
session_start();

	$date = new DateTime();
	$result = $date->format('Y-m-d H:i:s');
	$firstName=$_POST['firstName'];
	$lastName=$_POST['lastName'];
	$dateTime=$result;

	echo "The old array is:\n";
	print_r($_SESSION['register']);

	$register=array("firstName"=>$firstName,"lastName"=>$lastName,"dateTime"=>$dateTime); 

	echo "The array to be included is:\n";
	print_r($register);

	array_push($_SESSION['register'],$register);

	header("Location:summary.php");	
?>
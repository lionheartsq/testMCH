<?php
session_start();

	$pos=$_GET['id'];
	array_splice($_SESSION['register'], $pos, 1);
	header("Location:summary.php");	
?>
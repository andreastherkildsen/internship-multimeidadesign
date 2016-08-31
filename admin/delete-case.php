<?php 
	include("includes/secure-login.inc.php");
		
	include_once("includes/db-connect.inc.php");  


	$id = mysqli_real_escape_string($con, $_POST['id']);


	$sql="DELETE FROM klienterne WHERE id=$id";


	if (!mysqli_query($con,$sql)) {
  		die('Error: ' . mysqli_error($con));
	}

	mysqli_close($con);

	header("location: cases.php");

mysqli_close($con);

?>
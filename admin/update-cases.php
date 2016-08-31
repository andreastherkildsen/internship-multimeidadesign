<?php
	include("includes/secure-login.inc.php");
	include("includes/db-connect.inc.php");  

	// escape variables for security
	$id = mysqli_real_escape_string($con, $_POST['id']);
	$img = mysqli_real_escape_string($con, $_POST['img']);
	$name = mysqli_real_escape_string($con, $_POST['name']);
	$result = mysqli_real_escape_string($con, $_POST['result']);
	$citat = mysqli_real_escape_string($con, $_POST['citat']);

	$sql="UPDATE klienter SET img='$img', name='$name', result='$result', citat='$citat' WHERE id=$id";


	if (!mysqli_query($con,$sql)) {
  		die('Error: ' . mysqli_error($con));
	}

	mysqli_close($con);

	header("location: create-cases.php?id=$id");

?>
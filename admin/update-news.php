<?php
	include("includes/secure-login.inc.php");
	include("includes/db-connect.inc.php");  

	// escape variables for security
	$id = mysqli_real_escape_string($con, $_POST['id']);
	$manchet = mysqli_real_escape_string($con, $_POST['manchet']);
	$heading = mysqli_real_escape_string($con, $_POST['heading']);
	$manchet = mysqli_real_escape_string($con, $_POST['manchet']);
	$content = mysqli_real_escape_string($con, $_POST['content']);
	

	$sql="UPDATE nyheder SET overskrift='$heading', manchet='$manchet', indhold='$content' WHERE id=$id";


	if (!mysqli_query($con,$sql)) {
  		die('Error: ' . mysqli_error($con));
	}

	mysqli_close($con);

	header("location: create-news.php?id=$id");

?>
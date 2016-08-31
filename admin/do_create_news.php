<?php
	include("includes/secure-login.inc.php");
	include("includes/db-connect.inc.php");  

	// escape variables for security
	$heading = mysqli_real_escape_string($con, $_POST['heading']);
	$manchet = mysqli_real_escape_string($con, $_POST['manchet']);
	$content = mysqli_real_escape_string($con, $_POST['content']);
	

	$sql="INSERT INTO nyheder (overskrift, manchet, indhold)
	VALUES ('".htmlentities($heading)."', '".htmlentities($manchet)."' , '".htmlentities($content)."')";


	if (!mysqli_query($con,$sql)) {
  		die('Error: ' . mysqli_error($con));
	}

	mysqli_close($con);

	header("location: news.php");

?>
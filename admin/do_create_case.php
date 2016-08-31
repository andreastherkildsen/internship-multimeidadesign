<?php
	include("includes/secure-login.inc.php");
	include("includes/db-connect.inc.php");  
 
	// escape variables for security
	$name = mysqli_real_escape_string($con, $_POST['name']);
	$result = mysqli_real_escape_string($con, $_POST['result']);
	$citat = mysqli_real_escape_string($con, $_POST['citat']);

	//Til før billederne
	$image = array();
	$image["filename"] = $_FILES["uploaded_file"]["name"];
	$image["extension"] = pathinfo($image["filename"], PATHINFO_EXTENSION);
	$image["new_filename"] = 'img_'.time()*mt_rand(1,10).time()*mt_rand(1,10).'.'.$image["extension"];

	//Til efter billederne
	$image1 = array();
	$image1["filename"] = $_FILES["uploaded_file1"]["name"];
	$image1["extension"] = pathinfo($image1["filename"], PATHINFO_EXTENSION);
	$image1["new_filename"] = 'img_'.time()*mt_rand(1,10).time()*mt_rand(1,10).'.'.$image1["extension"];
 
	
	//Values til DB
	$sql="INSERT INTO klienterne ( name, result, citat, beforeimg, afterimg)
	VALUES ('".htmlentities($name)."', '".htmlentities($result)."', '".htmlentities($citat)."' , '".$image["new_filename"]."' , '".$image1["new_filename"]."')";
 
 
	if (!mysqli_query($con,$sql)) {
  		die('Error: ' . mysqli_error($con));
	}
 
 	//Til før billederne
	mysqli_close($con);
 
 
	$fileName = $image["new_filename"]; 
	$fileTmpLoc = $_FILES["uploaded_file"]["tmp_name"];
 
	$pathAndName = "imgupload/".$fileName;
 
	$moveResult = move_uploaded_file($fileTmpLoc, $pathAndName);
 
		if ($moveResult == true) {
   			 echo "File has been moved from " . $fileTmpLoc . " to" . $pathAndName;
			} else {
   		     echo "ERROR: File not moved correctly";
			}

	//Til efter billederne

	$fileName = $image1["new_filename"]; 
	$fileTmpLoc = $_FILES["uploaded_file1"]["tmp_name"];
 
	$pathAndName = "imgupload/".$fileName;
 
	$moveResult = move_uploaded_file($fileTmpLoc, $pathAndName);
 
		if ($moveResult == true) {
   			 echo "File has been moved from " . $fileTmpLoc . " to" . $pathAndName;
			} else {
   		     echo "ERROR: File not moved correctly";
			}
			
	header("location: cases.php");
 
?>
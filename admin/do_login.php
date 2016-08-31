<?php 
	if(!session_id()){
		session_start();
	}
include_once("includes/db-connect.inc.php");  




$username = mysqli_real_escape_string($con,$_POST['username']); //?  nej eller måske, ka ikke huske bruger den ikke længere

$password = md5($_POST["password"]); // du md5 kryptere din password men i din database er et en ren string :) 

//tænkte nok det var noget med det, der fuckede mig. n00b. 



$login_query = mysqli_query($con, "SELECT * FROM admin WHERE username = '".$username."' AND password = '".$password."'"); // i sql ville '$username' blive $username og ikke $_POST['username'], HUSK!!! ESCAPE!!!
//$login_query = mysqli_query($con, "SELECT * FROM admin WHERE username = '$username' AND password = '$password'");

if($row = mysqli_fetch_array($login_query)) {

	$_SESSION["loggedin"] = true;

	header("location: admin-front.php");
}
else{
	
	header("location: index.php?besked=brugernavn+eller+kodeord+er+forkert");
	
}

mysqli_close($con);

?> 
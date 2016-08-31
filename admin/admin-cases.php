<?php 
	include("includes/secure-login.inc.php");

	$page = "news";

	include("includes/header.inc.php"); ?> 

<?php 
	require("classes/Blog.php");

	$blog = new Blog();

	if(isset($_POST["create"])){
		$blog->create_blogpost($_POST["place"], $_POST["howlong"], $_FILES["img"]);
	}

	header("location: admin_cases.php?msg=success");
	
?>




<?php include("includes/footer.inc.php"); 

?>
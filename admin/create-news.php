<?php 
	include("includes/secure-login.inc.php");

	$page = "news";

	include("includes/header.inc.php"); 

	include("includes/db-connect.inc.php");


	if(isset($_GET["id"])){
		$id = $_GET["id"];

		$result = mysqli_query($con,"SELECT * FROM nyheder WHERE id=$id");

		$nyheder = array();

		while($row = mysqli_fetch_array($result)) {
			$nyheder[] = $row;
		}

		mysqli_close($con);


						
		foreach($nyheder as $nyhed){
			$heading = $nyhed["overskrift"];
			$manchet = $nyhed["manchet"];
			$content = $nyhed["indhold"];
						
		}
		$url = "update-news.php";

	}
	else{
		$heading = "";
		$manchet = "";
		$content = "";
		$id = "";

		$url = "do_create_news.php";
							
	}
	
?>


<section class='container'>
	<div class="page-header">
		<h1>Opret nyhed</h1>
	</div>	
	<div class='row'>
	<form action='<?php echo $url; ?>' method='post' class='col-sm-4'>
		<div class='form-group'>
			<label for='heading'>Overskrift:</label>
			<input type='text' class='form-control' name='heading' id='heading' value="<?php echo $heading; ?>" />
		</div>

		<div class='form-group'>
			<label for='manchet'>Manchet:</label>
			<input type='text' class='form-control' name='manchet' id='manchet' value="<?php echo $content; ?>"/>
		</div>

		<div class='form-group'>
			<label for='content'>Indholdstekst:</label>
			<textarea class='form-control' name='content' id='content' rows='7'><?php echo $content; ?></textarea>
		</div>

		<div class='form-group'>
			<input type='hidden' name='id' value='<?php echo $id; ?>' />
			<input type='submit' class='btn btn-success' value='Opret' />
			<a href="news.php"><div class="btn btn-default">Annullér</div></a>
		</div>



	</form>
	
	</div>
	
</section>












<?php include("includes/footer.inc.php"); 

?>
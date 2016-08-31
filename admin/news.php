<?php include("includes/secure-login.inc.php");

	$page = "news";

	include("includes/header.inc.php"); 

	include("includes/db-connect.inc.php");  

	$result = mysqli_query($con,"SELECT * FROM nyheder");

	$nyheder = array();

	while($row = mysqli_fetch_array($result)) {
		$nyheder[] = $row;
	}

	mysqli_close($con);



?>

<section class="container">
	<div class="page-header">
		<h1>Opret/rediger nyheder</h1>
	</div>	
<div class="row">
	<div class="col-md-4">
		<ul class="list-unstyled">
			<?php foreach($nyheder as $nyhed){
				echo "<li class='border-bottom'>
							<h4 class='float-left'>
							<a href='create-news.php?id=$nyhed[id]'>$nyhed[overskrift]</a>
							<label for='$nyhed[id]' class='close' >
								<span aria-hidden='true'>&times;</span>
								<span class='sr-only'>Close</span>
							</label>
							<form id='deleteform' action='delete-news.php' method='post'>
								<input type='hidden' name='id' value='$nyhed[id]'/>
								<input type='submit' class='hidden' id='$nyhed[id]'/>
							</form>
							</h4>
					  </li>";
				}
			?>   
			<li><a href='create-news.php'><h4><span class="glyphicon glyphicon-plus"></span></h4></a></li>    
		</ul>
	</div>


</div>
</section>




<?php include("includes/footer.inc.php"); ?>



<?php include("includes/secure-login.inc.php");

	$page = "klienter";

	include("includes/header.inc.php"); 

	include("includes/db-connect.inc.php");  

	$result = mysqli_query($con,"SELECT * FROM klienterne");

	$klienter = array();

	while($row = mysqli_fetch_array($result)) {
		$klienter[] = $row;
	}

	mysqli_close($con);



?>

<section class="container">
	<div class="page-header">
		<h1>Opret/rediger klienter</h1>
	</div>	
<div class="row">
	<div class="col-md-4">
		<ul class="list-unstyled">
			<?php foreach($klienter as $klient){
				echo "<li class='border-bottom'>
							<h4 class='float-left'>
							<a href='create-case.php?id=$klient[id]'>$klient[name]</a>
							<label for='$klient[id]' class='close' >
								<span aria-hidden='true'>&times;</span>
								<span class='sr-only'>Close</span>
							</label>
							<form id='deleteform' action='delete-case.php' method='post'>
								<input type='hidden' name='id' value='$klient[id]'/>
								<input type='submit' class='hidden' id='$klient[id]'/>
							</form>
							</h4>
					  </li>";
				}
			?>   
			<li><a href='create-case.php'><h4><span class="glyphicon glyphicon-plus"></span></h4></a></li>    
		</ul>
	</div>


</div>
</section>


<?php include("includes/footer.inc.php"); ?>



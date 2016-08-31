<?php 
		include("includes/secure-login.inc.php");

	$page = "create-case";

	include("includes/header.inc.php"); 

	include("includes/db-connect.inc.php");


	if(isset($_GET["id"])){
		$id = $_GET["id"];

		$result = mysqli_query($con,"SELECT * FROM klienterne WHERE id=$id");

		$klienter = array();

		while($row = mysqli_fetch_array($result)) {
			$klienter[] = $row;
		}

		mysqli_close($con);


						
		foreach($klienter as $klient){
			$img = $klient["beforeimg"];
			$img1 = $klient["afterimg"];
			$name = $klient["name"];
			$result = $klient["result"];
			$citat = $klient["citat"]; 
						
		}
		$url = "update-cases.php";

	}
	else{
		$img = "";
		$img1 = ""; 
		$name = "";
		$result = "";
		$citat = ""; 
		$id = "";

		$url = "do_create_case.php";
							
	}
	
	 ?>


<section class="container">
	<div class="page-header">
		<h1>Opret klientforløb</h1>
	</div>	
	
	<div class="row">
		<div class="col-sm-6">
			<p class="<?php echo $class; ?>">Opret klientforløb. Udfyld felterne, og upload billedet af klinten.</p>
		</div>

		<div class="col-sm-4">
			<form action="do_create_case.php" method="post" enctype="multipart/form-data" class="<?php echo $class; ?>">
				<div class="form-group">
					<label for="name">Navn på klient</label>
					<input type="text" name="name" id="name" class="form-control"/>
				</div>
				<div class="form-group">
					<label for="result">Forløb og resultat</label>
					<input type="text" name="result" id="result" class="form-control"/>
				</div>
				
				<div class="form-group">
					<label for="citat">Citat fra klient</label>
					<input type="text" name="citat" id="citat" class="form-control"/>
				</div>

				<div class="form-group">
					<label for="uploaded_file" class="btn btn-default form-control">Før billede<span class="glyphicon glyphicon-camera"></span></label>
					<input type="file" name="uploaded_file" id="uploaded_file" class="hidden"/>
				</div>

				<div class="form-group">
					<label for="uploaded_file1" class="btn btn-default form-control">Efter billede<span class="glyphicon glyphicon-camera"></span></label>
					<input type="file" name="uploaded_file1" id="uploaded_file1" class="hidden"/>
				</div>

			
				<div class="form-group">
					<input type="hidden" name="create" id="create" />
					<input type="submit" class="btn btn-success" value="Opret klient" />
				</div>
			</form>
		</div>
		
	</div><!--row slut-->
</section>

<?php include("includes/footer.inc.php"); ?>
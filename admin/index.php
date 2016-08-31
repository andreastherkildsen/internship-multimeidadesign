<?php include("includes/login-header.inc.php"); ?>



	

<section class="container logincontainer">


	<div class="row">
		<div class="col-sm-2 col-sm-offset-5">
			  

		</div>
		<div class="col-sm-4 col-sm-offset-4 text-center">
			<form action="do_login.php" method="post" class="col-sm-10 col-sm-offset-1">
				<div class="form-group">
					<label for="username" class="label-control">Brugernavn:</label>
					<input type="text" name="username" id="username" class="form-control text-center" required/>
				</div>
				<div class="form-group">
					<label for="password" class="label-control">Password:</label>
					<input type="password" name="password" id="password" class="form-control text-center" required/>
				</div>
				<div class="form-group">
					<input type="submit" class="btn btn-default" value="Log ind"/>
				</div>

			</form>
		</div>
	</div>

</section>

<?php include("includes/footer.inc.php"); ?>
<?php 
	$title= "SKNIELSEN - Personlig Træning";
	$page = "news";
	include("includes/header.inc.php"); ?>

<div class="container">
	<div class="page-header">
  <h1><span class="glyphicon glyphicon-comment"></span> Nyheder</h1> 
	</div>	
	
	<div class="row">
		<div class="col-sm-12">
		<?php
			$j = 0;
			foreach($news as $feed){
				if($j < 3){
					echo "<article><h4><strong>$feed[overskrift]</strong></h4>
					<small>$feed[timestamp]</small> 
					<small class='help-block'><strong>$feed[manchet]</strong></small>
					<p>$feed[indhold]</p></article><hr/>
					";
				}
			 $j++;	
			}
		?>
		</div>

		
	</div><!--row slut-->
</div>

<?php include("includes/footer.inc.php"); ?>
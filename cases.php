<?php
  $title= "SKNIELSEN - Personlig Træning";
  $page = "contact";
include("includes/header.inc.php");
?>

	

<section class="container">
 <div class="page-header">
  <h1><span class="glyphicon glyphicon-folder-open"></span> Klienter og referencer</h1> 
  </div>  

  <dic class="row"> 
  <div class="col-sm-12"> 
      <p>Her kan du læse om tidligere klient forløb, herunder deres resultater og udtalelse om forløbet.</p> 
  <?php
            $j = 0;
            foreach($klienterne as $klient){
              if($j < 3){
            

                echo "
                <hr/>
                <div class='container'>
                <div class='col-sm-6'><h3><strong>$klient[name]</strong></h3>
                <h4><p>Resultat</p></h4><i><h5>$klient[result]</i></h5> 
                <h4><p>Udtalelse</p></h4><i><h5>$klient[citat]</i></h5>
                </div> 
                <div class='col-sm-3'>
                <h4>Før billede</h4> 
                <img src='http://www.andreastherkildsen.dk/andreast/admin/imgupload/$klient[beforeimg]' class='img-responsive img-thumbnail' height='800' width='600'></div>
                <div class='col-sm-3'>
                <h4>Efter billede</h4> 
                <img src='http://www.andreastherkildsen.dk/andreast/admin/imgupload/$klient[afterimg]' class='img-responsive img-thumbnail' height='800' width='600'></div>
                </div> 
                </hr> 
  
                ";
              }
             $j++;  
            }
      ?>

  </div> 
</div> 



</section> 

<?php include("includes/footer.inc.php"); ?>
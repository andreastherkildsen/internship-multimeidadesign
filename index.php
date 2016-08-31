<?php
	$title= "SKNIELSEN - Personlig Træning";
	$page = "index";
include("includes/header.inc.php");
?>


<section class="container">
  <div class="page-header forside">
    <h1>Velkommen</h1>
     <h3><i>Et skridt tættere på dit personlige mål</i></h3>
  </div>  
  </section>

 
<div class="container"> 
  <div class="jumbotron titler mobile"> 
    <h2>Et skridt tættere på dit personlige mål</h2> 
    <div class="container"> 
    <img src="img/steffenk.jpg" class="image-responsive">
    </div>
  </div> 

</div> 


  <div id="myCarousel" class="carousel slide" data-ride="carousel">
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>
  <div class="carousel-inner">
    <div class="item bg bg1 active">
      <div class="container">
        <div class="carousel-caption">
           <div class="col-sm-12"> 
            <div class="logofront">
              <img src="img/sknlogo.png"> 
            </div> 
          <h1>Velkommen til SKNIELSEN</h1>
            <p>Et skridt tættere på dit personlige mål</p>
              <p><a class="btn btn-large btn-default" href="priceproduct.php" role="button">Start i dag</a></p>
          </div> 
        </div>
      </div>
    </div>
    <div class="item bg bg2">
      <div class="container">
        <div class="carousel-caption">
          <h1>Udannelse og passion</h1>
            <p></p>
              <p><a class="btn btn-large btn-default" href="about.php" role="button">Læs mere</a></p>
        </div>
      </div>
    </div>
    <div class="item bg bg3">
      <div class="container">
        <div class="carousel-caption">
          <h1>Indsæt klientnavn</h1>
            <p>bla bla bla bla bla bla bla bla</p>
              <p><a class="btn btn-large btn-default" href="cases.php" role="button">Se forvandlingen</a></p>
        </div>
      </div>
    </div>
  </div>
      <a class="left carousel-control" href="#myCarousel" data-slide="prev"><span class="glyphicon glyphicon-chevron-left"></span></a>
      <a class="right carousel-control" href="#myCarousel" data-slide="next"><span class="glyphicon glyphicon-chevron-right"></span></a>
  </div>
 





<div class="container"> 


<div class="row"> 
<div class="col-sm-4">
    
      <h3><span class="glyphicon glyphicon-comment"></span> Nyheder</h3> 

        <p><i>Nyt fra SKNIELSEN</i></p> 
          <hr/>
         <?php

        

            $i = 0;

            foreach($news as $feed){
              if($i < 1){

        
                echo "
              
                
                <h5><strong>$feed[overskrift]</strong></h5>
                <p class='help-block'><i>$feed[manchet]</i></p>
                <p>$newstring</p>
                
                 
                 <a class='btn btn-large btn-default' href='news.php'>Se alle nyheder</a>
                
             
              
                ";
              }
             $i++;  
            }
          ?></a>

        
  
      
         
      </div>

<div class="col-sm-4"> 
  <h3><span class="glyphicon glyphicon-folder-open"></span> Klienter og referencer</h3> 
  <p><i>Forløb hos SKNIELSEN</i></p>
  <hr/> 
  <?php
           
            $i = 0;
            foreach($klienterne as $klient){
              if($i < 1){
                echo "
              
               
                <h5><strong>$klient[name]</strong></h5>
                <p class='help-block'><i>$klient[result]</i></p>
                <p>$klient[citat]</p>
                  <a class='btn btn-large btn-default' href='cases.php'>Se alle forløb</a>
              
             
              
                ";
              }
             $i++;  
            }
          ?>

</div> 

<div class="col-sm-4"> 
  <h3><span class="glyphicon glyphicon-heart"></span> Personlig træning</h3> 
  <p><i>Med passion og uddannelse</i></p>
  <hr/> 
  <p>SKNIELSEN har flere års erfaring med personlig træning og kostvejledning. Vi har fokus på det personlige aspekt. Vores erfaring fortæller os, at din motivation skaber den bedste og vedvarende ændring i din nye livsstil.</p> 

     <a class='btn btn-large btn-default' href='priceproduct.php'>Start i dag</a>

</div> 

</div> 

</div> 


<?php
include("includes/footer.inc.php");
?>

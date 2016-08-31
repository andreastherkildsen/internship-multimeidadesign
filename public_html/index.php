<?php
	$title= "SKNIELSEN - Personlig Træning";
	$page = "index";
include("includes/header.inc.php");
?>


<section class="container">
  <div class="page-header forside">
    <h1>Velkommen</h1>
     <h3><i>- Sammen når vi dine mål</i></h3>
  </div>  
  </section>

 
<div class="container"> 
  <div class="jumbotron titler mobile"> 
    <h2>Sammen når vi dine mål!</h2> 
  </div> 

</div> 

<div class="section slider"> 
   <!-- Carousel
    ================================================== -->
    <div id="myCarousel" class="carousel slide">
      <div class="carousel-inner">
        <div class="item active">
          <img src="img/maria.png" class="img-responsive" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Velkommen til SKNIELSEN</h1>
              <p class="lead"><i>- Sammen når vi dine mål. </i></p>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="http://lorempixel.com/1280/1024/technics" class="img-responsive" alt="">
          <div class="container">
            <div class="carousel-caption text-centered">
              <h1>Bedre form i 2015?.</h1>
              <p class="lead"><i>Læs om Susans forvandling.</i></p>
              <a class="btn btn-large btn-default" href="cases.php">Læs mere</a>
            </div>
          </div>
        </div>
        <div class="item">
          <img src="http://lorempixel.com/1280/1024/abstract" class="img-responsive" alt="">
          <div class="container">
            <div class="carousel-caption">
              <h1>Massage eller kostplan?.</h1>
              <p class="lead"><i>Læs mere om SKNIELSENS skræddersyet program til dig!</i></p>
              <a class="btn btn-large btn-default" href="priceproduct.php">Læs mere</a>
            </div>
          </div>
        </div>
      </div>
     <a class="left carousel-control" href="#myCarousel" role="button" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" role="button" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>


    </div><!-- /.carousel -->






<div class="container"> 


<div class="row"> 
<div class="col-sm-4">
    
      <h3>Nyheder</h3>
        <p><i>Nyt fra SKNIELSEN</i></p> 
          <hr/>
         <?php

      

            $i = 0;

            foreach($news as $feed){
              if($i < 1){

        
                echo "
              
                
                <h5><strong>$feed[overskrift]</strong></h5>
                <p class='help-block'><i>$feed[manchet]</i></p>
                <p>$feed[indhold]</p>
                
                 <a href='news.php'><p>Læs alle nyheder</p></a> 
                
             
              
                ";
              }
             $i++;  
            }
          ?></a>

        
  
      
         
      </div>

<div class="col-sm-4"> 
  <h3>Klienter og referencer</h3> 
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
                 <a href='cases.php'><p>Læs alle forløb og referencer</p></a> 
              
             
              
                ";
              }
             $i++;  
            }
          ?>

</div> 

<div class="col-sm-4"> 
  <h3>Personlig Træning</h3> 
  <p><i>Med passion og uddannelse</i></p>
  <hr/> 
  <p>I flere år jeg SKNIELSEN arbejdet med personlig træning. Igennem årerne har SKNIELSEN skabt stor erfaring
    inden for dette felt. Udover træningen og kost bliver der lagt stor fokus på det personlige aspekt.
    Motivation til kienten er en vigtig faktor som er med til at skabe en vedvarende ændring i livsstilen.</p> 

     <a href='priceproduct.php'><p>Læs mere om personlig træning</p></a> 

</div> 

</div> 

</div> 


<?php
include("includes/footer.inc.php");
?>

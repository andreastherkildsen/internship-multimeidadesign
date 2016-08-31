<?php
  $title= "SKNIELSEN - Personlig Træning";
  $page = "contact";
include("includes/header.inc.php");
?>

	

<div class="container">
 <div class="page-header">
  <h1><span class="glyphicon glyphicon-envelope"></span> Kontakt</h1> 
  </div>  


<div class="container"> 
  <div class="col-sm-6 nyhed"> 
    <h3>Kontakt SKNIELSEN i dag</h3>

   
    <p>Har du spørgsmål til personlig træning, ønsker booke et <i>uforpligtende møde</i> eller blot
    har generelle spørgsmål? Hvis du ønsker noget specificeret, så hold dig ikke tilbage. Send en email til <i>SKNIELSEN</i> og kom tættere på at nå dine mål. Din email vil blive besvarret hurtigst
    muligst.</p>

    

    <p>Jeg fortrækker, at blive kontaktet på mail, men hvis det haster, send en sms eller ring. </p>

    <h4>Kontakt info</h4>
      <ul> 
        <li>Email - sknielsen@live.dk</li>
        <li>Mobil - 28929502</li>
        <li>Lokation - Østjylland</li>
      </ul>

  </div> 




 <div class="col-sm-6 nyhed">
  
   <h3>Send en email</h3> 
    <p>Benyt kontakt formuaren og send en mail til SKNIELSEN med det samme.</p> 

    <form action="sendmail.php" id="frm_message"method="post" class="col-sm-12 <?php echo $class; ?>">
        
        <div class="row">
          <div class="form-group col-sm-12">
            <label for="name" class="label-control">Fulde navn:</label>
            <input type="text" name="fullname" id="name" class="form-control" required  />
          </div>
        
          <div class="form-group col-sm-12">
            <label for="email" class="label-control">Din email:</label>
            <input type="email" name="email" id="email" class="form-control" required/>
          </div>
          <div class="form-group col-sm-12">
            <label for="message" class="label-control">Din besked:</label>
            <input type="text" name="message" id="telephone" class="form-control" required/>
          </div>

          <div class="form-group col-sm-12"> 
           <input type="submit" name="submit" id="send_form" class="btn btn-default" value="Send message" />
         </div> 
        </div> 
      
     </form> 


      

               
  </div>

</div> 

</div> 

<?php
include("includes/footer.inc.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf8"> 
  <title><?php echo $title; ?></title>
  <meta name="viewport" content="width=device-width,initial-scale=1.0">
  <meta name="description" content="Personlig træning - Sammen når vi dine mål - Østjylland, Aarhus, Randers - Kostplan - Træning - Steffen Nielsen">
  <meta name="author" content="">
  <link href="css/bootstrap.min.css" rel="stylesheet">
  <link href="css/custom.css" rel="stylesheet">
  <?php 
    include("includes/analyticstracking.inc.php"); 
    ?> 


</head>
<body>

<header>
  <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
      <div class="container">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          
        <a href="index.php" class="logo">
        <img src="img/Untitled-2.png" class="img-responsive" alt="SKNLOGO">
      </a>
        
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav" class="active">
          <li><a href="news.php">Nyheder</a></li>
          <li><a href="priceproduct.php">Produkter og Priser</a></li>
          <li><a href="about.php">Om</a></li>
          <li><a href="cases.php">Klienter</a></li>
          <li><a href="contact.php">Kontakt</a></li>

          </ul>


        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>



</header>


  <?php include("admin/includes/db-connect.inc.php");  


    $newsresult = mysqli_query($con, "SELECT * FROM nyheder ORDER BY id DESC");

  $con=mysqli_connect("");


    $news = array();

    while($newsrow = mysqli_fetch_array($newsresult)) {
      $news[] = $newsrow;
    }

    mysqli_close($con);

  ?>

  <?php include("admin/includes/db-connect.inc.php"); 

  $con=mysqli_connect("");


    $clientresult = mysqli_query($con, "SELECT * FROM klienterne ORDER BY id DESC"); 

   
    $klienterne = array(); 

    while($clientrow = mysqli_fetch_array($clientresult)) {
      $klienterne[] = $clientrow; 
    }

    mysqli_close($con); 

    ?> 

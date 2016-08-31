<!doctype html>
<html>
<head>
	<meta charset="UTF-8">
	<title></title>
	<meta name="description" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=no" />	
    <link rel="stylesheet" href="../css/bootstrap.min.css" />
 	<link rel="stylesheet" href="../css/custom.css" />

</head>
<body>
<header>
		<nav class="navbar navbar-default navbar-fixed-top admin" role="navigation">
		  <div class="container">
		    <!-- Brand and toggle get grouped for better mobile display -->
		    <div class="navbar-header">
		      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
		        <span class="sr-only">Toggle navigation</span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		        <span class="icon-bar"></span>
		      </button>
		      
		    <a href="admin-front.php" class="logo">
				<img src="../img/SKNlogotest.png" class="img-responsive" alt="SKNLOGO">
			</a>
		    
		    </div>

		    <!-- Collect the nav links, forms, and other content for toggling -->
		    <div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
		      <ul class="nav navbar-nav">
		        <li <?php $class = ($page == 'news') ? 'class="activemenu"' : 'class=""'; echo $class; ?>><a href='news.php'>Opret nyheder</a></li>
		        <li <?php $class = ($page == 'admin-heats') ? 'class="activemenu"' : 'class=""'; echo $class; ?>><a href='cases.php'>Opret Cases</a></li>
		       
		        <li><a target="_blank" href='../'>Vis site <span class="glyphicon glyphicon-eye-open"></span></a></li>
		        <li><a href='do_logout.php'>Log ud <span class="glyphicon glyphicon-log-out"></span></a></li>
		      </ul>


		    </div><!-- /.navbar-collapse -->
		  </div><!-- /.container-fluid -->
		</nav>
		
	
		
	</header>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Report | House Pricing System</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/font-awesome.min.css" rel="stylesheet">
    <link href="css/prettyPhoto.css" rel="stylesheet">
    <link href="css/animate.css" rel="stylesheet">
    <link href="css/main.css" rel="stylesheet">
    <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
	<script type='text/javascript' src='JS_FILES/infographic.min.js'>
	function myFunction() {
		window.print();
	}
	
</script>
	</head><!--/head-->
<body>
<?php 
session_start();
if(!isset($_SESSION['user']))
echo ("<script>alert('Please Register!');document.location.href='signin.php';</script>");

$x = $_SESSION['user'];
?>
    <header class="navbar navbar-inverse navbar-fixed-top wet-asphalt" role="banner">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 <a class="navbar-brand" href="index.php">House Pricing <span>Prediction System</a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li ><a href="index.php">HOME</a></li>
                    <li class="active"><a href="report.php">REPORT</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">ACCOUNT <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="updateAccount.php"><span class="glyphicon glyphicon-cog"></span>&nbsp;Setting</a></li>
							 <li><a href="logout.php?logout" onclick="return confirm('Are you sure to logout?');"><span class="glyphicon glyphicon-log-out"></span>&nbsp;Logout</a></li>
                        
                        </ul>
                    </li>
                
                </ul>
            </div>
        </div>
    </header><!--/header-->
    <section id="main-slider" class="no-margin">
        <div class="carousel slide wet-asphalt">
            <ol class="carousel-indicators">
                <li data-target="#main-slider" data-slide-to="0" class="active"></li>
                <li data-target="#main-slider" data-slide-to="1"></li>
                <li data-target="#main-slider" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
                <div class="item active" style="background-image: url(images/slider/rumah1.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content centered">
                                      <h2 class="boxed animation animated-item-1">Powerful and Responsive House Pricing System</h2>
                                    <p class="boxed animation animated-item-2">Help you to Calculate your house pricing accuratly.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url(images/slider/rumah2.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="carousel-content center centered">
                                     <h2 class="boxed animation animated-item-1">Powerful and Responsive House Pricing System</h2>
                                    <p class="boxed animation animated-item-2">Help you to Calculate your house pricing accuratly.</p>
                                   
                                </div>
                            </div>
                        </div>
                    </div>
                </div><!--/.item-->
                <div class="item" style="background-image: url(images/slider/rumah3.jpg)">
                    <div class="container">
                        <div class="row">
                            <div class="col-sm-6">
                                <div class="carousel-content centered">
                                    <h2 class="boxed animation animated-item-1">Powerful and Responsive House Pricing System</h2>
                                    <p class="boxed animation animated-item-2">Help you to Calculate your house pricing accuratly.</p>
                                   
                                </div>
                            </div>
                       
                        </div>
                    </div>
                </div><!--/.item-->
            </div><!--/.carousel-inner-->
        </div><!--/.carousel-->
        <a class="prev hidden-xs" href="#main-slider" data-slide="prev">
            <i class="icon-angle-left"></i>
        </a>
        <a class="next hidden-xs" href="#main-slider" data-slide="next">
            <i class="icon-angle-right"></i>
        </a>
    </section><!--/#main-slider-->

      </section><!--/#report-->
	  <br><br><br>
	  <center> <h2> Report Based on the Data by <?php echo $_SESSION['user']; ?></h2> </center>
	  <br><br>
	  <?php
			$con=mysqli_connect("localhost","root","","house");

			// Check connection
			if (mysqli_connect_errno())
			  {
			  echo "Failed to connect to MySQL: " . mysqli_connect_error();
			  }

			// SQL statement
			$result = mysqli_query($con,"SELECT * FROM housecheck WHERE userId = '$x';");
			//$ada = mysqli_num_rows($result);

			$v=1;

			if($row = mysqli_fetch_array($result)) 

			  {
				$a = $row['houseId'];
				$b = $row['bedrooms'];
				$c = $row['bathrooms'];
				$d = $row['sqftLiving'];
				$e = $row['sqftLot'];
				$f = $row['sqftAbove'];
				$g = $row['sqftBasement'];
				$h = $row['floor'];
				$i = $row['waterfront'];
				$j = $row['price'];
			  
			  echo "<table align=center border=1 cellpadding=10 cellspacing=5\n";
			  echo "<tr><th>House Id</th><th>Bedrooms</th><th>Bathrooms</th><th>Size of Living Room</th><th>Size of Lot</th><th>Size of Above</th><th>Size of Basement</th><th>Floor</th><th>Waterfront</th><th>Price</th></tr>\n";
			  
			  do{
				printf("<tr><td align=center>%s</td><td align=center>%s</td><td align=center>%s</td><td align=center>%s</td><td align=center>%s</td><td align=center>%s</td><td align=center>%s</td><td align=center>%s</td><td align=center>%s</td><td align=center>%s</td></tr>\n",
					   $row['houseId'],$row['bedrooms'],$row['bathrooms'],$row['sqftLiving'],$row['sqftLot'],$row['sqftAbove'],$row['sqftBasement'],$row['floor'],$row['waterfront'],$row['price']);
			   $v++;
			  }while($row=mysqli_fetch_array($result));
			  
			   
			  echo "</table>\n";
			  }//tutup if

			else
			  echo "<center><b>Sorry, no records were found!</b></center>";  
			  

			mysqli_close($con);
			?>
	<br><br>
	<center>
	<button class="btn btn-info" onclick="myFunction()">Print this page</button>
	</center>
	<br><br><br>
    </section><!--/#recent-works-->


    <footer id="footer" class="midnight-blue">
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    &copy; 2016 <a target="_blank" href="http://shapebootstrap.net/" title="Free Twitter Bootstrap WordPress Themes and HTML templates">ISMSK(KI)</a>. All Rights Reserved.
                </div>
                <div class="col-sm-6">
                    <ul class="pull-right">
                        
                        <li><a id="gototop" class="gototop" href="#"><i class="icon-chevron-up"></i></a></li><!--#gototop-->
                    </ul>
                </div>
            </div>
        </div>
    </footer><!--/#footer-->

    <script src="js/jquery.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/jquery.prettyPhoto.js"></script>
    <script src="js/main.js"></script>
</body>
</html>
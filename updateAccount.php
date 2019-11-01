<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Update Account</title>
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
</head><!--/head-->
<body>
<?php
 ob_start();
 session_start();
  $x=$_SESSION['user'];
  
///connect db
	$con=mysqli_connect("localhost","root","","house");

// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
 
   $query1 = "SELECT * FROM user WHERE userId='$x'";
   $result1 = mysqli_query($con,$query1);
   while($row = mysqli_fetch_array($result1))
   {
	$n=$row['userId'];
	$p=$row['email'];
	}

 
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
                    <li class="active"><a href="index.php">HOME</a></li>
					
                    <li><a href="report.php">REPORT</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">ACCOUNT<i class="icon-angle-down"></i></a>
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
     </section><!--/#calculator-->
          <section id="recent-works">
                 <center><h2> Update Account </h2> </center>
				  <form method="POST" action="update.php" onsubmit="return validate()">	
								<table cellpadding="0" width="500" border="0" align="center">
								<tr>	
                                    <td class="fontblack" width="250" height="50" align="left">Your username</td>
                                    <td><input id="userName" name="userName" required="required" type="text" placeholder="mysuperusername690" value="<?php echo $x?>" /></td>
                                </tr>
								
                                <tr> 
                                   <td class="fontblack" width="250" height="50" align="left" data-icon="e" > Your email</td>
                                    <td><input type="email" id="email" name="email" required="required" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,3}$" placeholder="mysupermail@mail.com" value="<?php echo $p?>" /> </td>	
                                </tr>
								
                                <tr> 
                                    <td class="fontblack" width="250" height="50" align="left" data-icon="p">Your password </td>
                                    <td><input id="password" name="password" required="required" type="password" placeholder="eg. X8df!90EO"/></td>															
                                </tr>
								
                                <tr> 
                                    <td class="fontblack" width="250" height="50" align="left"  data-icon="p">Please confirm your password</td>
                                    <td><input id="rePassword" name="rePassword" required="required" type="password" placeholder="eg. X8df!90EO"/></td>
									
                                </tr>
								
                                </table>
								<br><br>
								<center>
								<button class="btn btn-info" onclick="validate()">Update</button>
								
								<br><br><br><br><h2> Delete Account </h2>
                                <p class="change_link">  
								<br>
									<p>Remove this account?</p>
									<a href="deleteaccount.php" onclick="return confirm('Are you sure to delete this account?');"><b>Delete it </a></b>
								</p>
								</center>
                            </form>
                    
            </section>
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
<?php ob_end_flush(); ?>
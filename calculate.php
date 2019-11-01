<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Home | House Pricing System</title>
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
session_start();

  $a=$_POST["sqftLiving"];					
  $b=$_POST["sqftLot"];
  $c=$_POST["sqftAbove"];
  $d=$_POST["sqftBase"];
  $e=$_POST["bedrooms"];					
  $f=$_POST["bathrooms"];
  $g=$_POST["floors"];	
  $h=$_POST["waterfront"];
  $i=$_SESSION['user'];

  $price = (-52498.4517 * $e) + (5447.687  * $f) + (144.476  * $a) + ( -0.3494 * $b) + (10001.3732 * $g) + (789961.3635 * $h) + (151.388  * $c) + (174.6942 * $d) +  67745.4633;
//echo $price;


// Create connection
$conn=mysqli_connect("localhost","root","","house");

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

//SQL Statement
$sql = "INSERT INTO houseCheck(sqftLiving,sqftLot,sqftAbove,sqftBasement,bedrooms,bathrooms,floor,waterfront,price,userId) 
VALUES ('$a','$b','$c','$d','$e','$f','$g','$h',$price,'$i')";

if (mysqli_query($conn, $sql)) {
    //header('Location:form.php');
	//echo "Maklumat Anda Sudah Berjaya Disimpan ^_^"; 
	echo ("<script>alert('Success!!')</script>");
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

// Close connection
mysqli_close($conn);

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
                 <a class="navbar-brand" href="index.php">House<span>Pricing System</span></a>
            </div>
            <div class="collapse navbar-collapse">
                <ul class="nav navbar-nav navbar-right">
                    <li class="active"><a href="index.php">HOME</a></li>
                    <li><a href="report.php">REPORT</a></li>
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">ACCOUNT <i class="icon-angle-down"></i></a>
                        <ul class="dropdown-menu">
                            <li><a href="<span class="glyphicon glyphicon-cog"></span>&nbsp;Setting.html"><span class="glyphicon glyphicon-cog"></span>&nbsp;Setting</a></li>
                            <li><a href="blog-item.html">LOGOUT</a></li>
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
				<center> <h2> Check House Price</h2> </center>
               </br>
                <form method="POST" action="index.php" onsubmit="return validate()">	
				<table cellpadding="0" width="500" border="0" align="center">
					<tr>
							<td class="fontblack" width="250" height="50" align="left">Size of Living room (square feet) :</td>
							<td><input name="sqftLiving" id="sqftLiving" maxlength="10" value="<?php echo number_format((float)$a, 2, '.', ''); ?>"></td>
						</tr>	
						<tr>
							<td class="fontblack" width="250" height="50" align="left">Size of Lot (square feet) :</td>
							<td><input name="sqftLot" id="sqftLot" maxlength="10" value="<?php echo number_format((float)$b, 2, '.', '');?>"></td>
						</tr>
						<tr>
							<td class="fontblack" width="250" height="50" align="left">Size of Above Floor (square feet) :</td>
							<td><input name="sqftAbove" id="sqftAbove" maxlength="10" value="<?php echo number_format((float)$c, 2, '.', '');; ?>"></td>
						</tr>
						<tr>
							<td class="fontblack" width="250" height="50" align="left">Size of Basement (square feet) :</td>
							<td><input name="sqftBase" id="sqftBase" maxlength="10" value="<?php echo number_format((float)$d, 2, '.', ''); ?>"></td>
						</tr>
						<tr>
							<td class="fontblack" width="250" height="50" align="left">Bedrooms :</td>
							<td><select name="bedrooms" id="bedrooms">
							<option value="">No of bedrooms :</option>
							<option value="1" <?php
									if (isset($e)) 
									if($e=="1")
									echo "selected";
								?> >1</option>
							<option value="2" <?php
									if (isset($e)) 
									if($e=="2")
									echo "selected";
								?> >2</option>
							<option value="3" <?php
									if (isset($e)) 
									if($e=="3")
									echo "selected";
								?> >3</option>
							<option value="4" <?php
									if (isset($e)) 
									if($e=="4")
									echo "selected";
								?> >4</option>
							<option value="5" <?php
									if (isset($e)) 
									if($e=="5")
									echo "selected";
								?> >5</option>
							<option value="6" <?php
									if (isset($e)) 
									if($e=="6")
									echo "selected";
								?> >6</option>
							<option value="7" <?php
									if (isset($e)) 
									if($e=="7")
									echo "selected";
								?> >7</option>
							</td></select>
						</tr>
						<tr>
							<td class="fontblack" width="250" height="50" align="left">Bathrooms :</td>
							<td><select name="bathrooms" id="bathrooms">
							<option value="">No of bedrooms :</option>
							<option value="1" <?php
									if (isset($f)) 
									if($f=="1")
									echo "selected";
								?> >1</option>
							<option value="2" <?php
									if (isset($f)) 
									if($f=="2")
									echo "selected";
								?> >2</option>
							<option value="3" <?php
									if (isset($f)) 
									if($f=="3")
									echo "selected";
								?> >3</option>
							<option value="4" <?php
									if (isset($f)) 
									if($f=="4")
									echo "selected";
								?> >4</option>
							<option value="5" <?php
									if (isset($f)) 
									if($f=="5")
									echo "selected";
								?> >5</option>
							</td></select>
						</tr>
						<tr>
							<td class="fontblack" width="250" height="50" align="left">Floors :</td>
							<td><select name="floors" id="floors" >
							<option value="">Floors :</option>
							<option value="1" <?php
									if (isset($g)) 
									if($g=="1")
									echo "selected";
								?> >1</option>
							<option value="2" <?php
									if (isset($g)) 
									if($g=="2")
									echo "selected";
								?> >2</option>
							<option value="3" <?php
									if (isset($g)) 
									if($g=="3")
									echo "selected";
								?> >3</option>
							<option value="4" <?php
									if (isset($g)) 
									if($g=="4")
									echo "selected";
								?> >4</option>
							<option value="5" <?php
									if (isset($g)) 
									if($g=="5")
									echo "selected";
								?> >5</option>
							</td></select>
						</tr>
						<tr>
							<td  class="fontblack" width="250" height="50" align="left">Waterfront : </td><td>
							<input type="radio" name="waterfront" <?php if (isset($h) && $h=="1") echo "checked";?> value="1" checked>Yes
							<input type="radio" name="waterfront" <?php if (isset($h) && $h=="0") echo "checked";?> value="0">No
							</td>
						</tr>
						<tr>
							<td class="fontblack" width="250" height="50" align="left"><b>House Price (RM) :</b></td>
							<td><b><?php echo number_format((float)$price, 2, '.', ''); ?></b></td>
						</tr>
				</table>
			<br><br>
			<center>
			<button href="index.php" class="btn btn-info" role="button">Reset Form</a>
			</center>
	
            
    </section><!--/#recent-works-->
	
	    </section><!--/#PicturePlan-->
 

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
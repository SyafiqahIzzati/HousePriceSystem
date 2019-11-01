<!DOCTYPE html>
    <head>
        <meta charset="UTF-8" />

        <title>Sign in</title>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
        <meta name="description" content="Login and Registration Form with HTML5 and CSS3" />
        <meta name="keywords" content="html5, css3, form, switch, animation, :target, pseudo-class" />
        <link rel="shortcut icon" href="../favicon.ico"> 
        <link rel="stylesheet" type="text/css" href="css/demo.css" />
        <link rel="stylesheet" type="text/css" href="css/style.css" />
		<link rel="stylesheet" type="text/css" href="css/animate-custom.css" />
   </head>
    <body>
        <div class="container">
            <header>
                 <h1> INTERNSHIP <span> MANAGEMENT SYSTEM </span></h1>
				<h1></h1>
            </header>
            <section>				
                <div id="container_demo" >
                    <!-- hidden anchor to stop jump http://www.css3create.com/Astuce-Empecher-le-scroll-avec-l-utilisation-de-target#wrap4  -->
                    <a class="hiddenanchor" id="toregister"></a>
                    <a class="hiddenanchor" id="tologin"></a>
                    <div id="wrapper">
                        <div id="login" class="animate form">
							<form id="loginSystem" method="post" action="validate.php" >

                                <h1>Log in</h1> 
											
								
                                <p> 
                                    <label for="username" class="uname" data-icon="u" > Your userID </label>
                                    <input id="userName" name="userID" required="required" type="text" placeholder="userID"  />
                                </p>
                                <p> 
                                    <label for="password" class="youpasswd" data-icon="p"> Your password </label>
                                    <input id="password" name="password" required="required" type="password" placeholder="password"  />
                                </p>

                                <p class="login button"> 
                                    <input type="submit" class="btn btn-block btn-primary" name="btn-login" value="Login" /> 
								</p>
                                <p class="change_link">
									Not a member yet ?
									<a href="register.php" class="to_register">Join us</a>
								</p>
                            </form>
                        </div>						
                    </div>
                </div>  
            </section>
        </div>
    </body>
</html>
<?php ob_end_flush(); ?>
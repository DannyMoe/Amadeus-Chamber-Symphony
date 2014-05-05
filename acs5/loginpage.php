<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Amadeus Chamber Symphony</title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width">

        <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
        
        <link rel="stylesheet" href="css/main.css">
        <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Montserrat|Mr+Bedfort|Petit+Formal+Script|Pathway+Gothic+One|Wire+One|Raleway:400,900">
    </head>
    <body style="background-image: url(img/music.jpg);">
           <!--[if lt IE 7]>
               <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
           <![endif]-->
          
          <div class="wrapper">
           <div id="container">
           	<div id="logo">
           		<p class="ACS">ACS</p>
           		<div class="logoWords">
           			<p class="bedfort">Amadeus</p>
           			<p class="montserrat">Chamber</P>
           			<p class="bedfort symphony">Symphony</p>
           		</div>
           	
           		<div class="cityInfo">        		
           			<p class="stc">Saint Cloud</p>
           			<p class="minn">Minnesota</p>
           		</div>
           			<img src="img/acs.jpg" alt="Amadeus Chamber Symphony" class="header_img" />
           	</div>
           
           <nav>
           	<ul class="top_nav">
           		<li><a href="index.html" class="active">Home</a></li>
           		<li><a href="concerts.html">2013-2014 Season</a>
           		<li><a href="about.html" >Personnel</a></li>
           		<li><a href="audition.html">Auditions</a></li>
           		<li><a href="bod.html">Board of Directors</a></li>
           		<li><a href="contact.html">Contact</a></li>		
           		<li class="lowreslogin"><a href="loginpage.php">Login</a></li>
    
           		<form method="post" action="login.php" name="login" id="login">
           			<input class="text" name="loginText" placeholder="Login" id="loginText"/>
           			<input class="text" type="password" name="password" placeholder="Password" id="password"/>
           			<input type="submit" name="submit" class="submitButton" value="Login" />
          			</form>
    			</ul>
    		</nav>
    		</div>		
		
		<section id="main_content" style="margin-left: 20%;">
			<h2>Board of Directors Login</h2>
			
			<center><form method="post" action="login.php" class="loginForm">
				<table>
					<tr>
						<td><label for="loginText">Username: </label></td>
						<td><input name="loginText" placeholder="Login"  class="loginText" /></td>
					</tr>
					<tr>
						<td><label for="password">Password: </label></td>
						<td><input name="password" placeholder="Password" class="loginText" /></td>
					</tr>
				</table>
				<input type="submit" name="submit" value="Login" class="button loginButton"/>
			</form></center>
		</section>

		<footer>&copy; Amadeus Chamber Symphony 2013 | Design by <a href="www.webspace.globeuniversity.edu/daniel-moe/index.html">Good Mountain D&D</a></footer>
		
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
        <script src="js/modernizr-2.6.2.min.js"></script>
        <script src="js/plugins.js"></script>
        <script src="js/main.js"></script>

        <!-- Google Analytics: change UA-XXXXX-X to be your site's ID. -->
        <script>
            var _gaq=[['_setAccount','UA-XXXXX-X'],['_trackPageview']];
            (function(d,t){var g=d.createElement(t),s=d.getElementsByTagName(t)[0];
            g.src='//www.google-analytics.com/ga.js';
            s.parentNode.insertBefore(g,s)}(document,'script'));
        </script>
    </body>
</html>

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
        <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />
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
           		<li><a href="index.html">Home</a></li>
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
    		
		<section id="main_content" class="shadow" style="width: 80%; margin: 0 auto;">
			
			<section class="meetingForm">						
			
				<form method="post" action="submit_success.php">
					<table class="clear">
						<h2>Enter New Meeting Information</h2><br />
						<tr><td>Date | </td>
							<td><input type="date" name="date" class="black"/></td>
							<td class="meetingLabel">Meeting | </td>
							<td><input type="text" name="title" value="" size="23" class="meeting black" /></td>
						</tr>
						<tr><td>Agenda | </td>
							<td colspan="3"><textarea rows="4" cols="55" name="agenda"></textarea></td></tr>
						<tr><td>Minutes | </td>
							<td colspan="3"><textarea rows="4" cols="55" name="minutes"></textarea></td></tr>
						<tr><td>Additional Notes | </td>
							<td colspan="3"><textarea rows="4" cols="55" name="notes"></textarea></td></tr>
						<tr><td>Entered by | </td>
							<td><input type="text" name="entered_by" value="" size="18"/>
							<input type="submit" class="button2" name="submit" value="Post" style="float: right;"/>
							</td></tr>
					</table>
				</form>
				<hr />
				<h2 style="margin-bottom: 10px;">Recent Meeting Information</h2>
					<?php
						include 'meetings.php';
					?>
				
			</section>
			
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
<?php?>
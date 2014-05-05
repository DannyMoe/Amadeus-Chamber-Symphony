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

        <link rel="stylesheet" href="css/normalize.css">
        <link rel="stylesheet" href="css/main.css">
        <script src="js/vendor/modernizr-2.6.2.min.js"></script>
        
        <?php 
        $path = 'email_submit.php';
        include($path);
        ?>
        
    </head>
    <body style="background-image: url(img/violin.jpg); height: 900px; vertical-align: middle;">
        <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->
        <div id="container">
               	<div id="logo">
               		<p class="ACS">ACS</p>
               		<p class="bedfort">Amadeus</p>
               		<p class="montserrat">Chamber</P>
               		<p class="bedfort symphony">Symphony</p>
               		<p class="stc">Saint Cloud</p>
               		<p class="minn">Minnesota</p>
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
        
               <form method="post" action="login.php" name="login" id="login">
               	<input class="text" type="search" name="loginText" placeholder="Login" id="loginText"/>
               	<input class="text" type="password" name="password" placeholder="Password" id="password"/>
               	<input type="submit" name="submit" class="submitButton" value="Login" />
               </form>
        		</ul>
        		</nav></div>		
		
		
		<h1 class="pageName">Welcome!</h1>
		
		<section id="main_content">
			<h2>Email Added Successfully!</h2>
			<p>You will be redirected shortly</p>
			<script type="text/JavaScript">
			<!--
			window.onLoad(setTimeout("location.href = 'index.html';",3000));
			-->
			</script>
		</section>

		<footer>&copy; Amadeus Chamber Symphony 2013 | Design by <a href="#">Mo'ductions</a></footer>
		
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.9.1.min.js"><\/script>')</script>
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

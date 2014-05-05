<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Amadeus Chamber Symphony</title>
    <meta name="description" content="Amadeus Chamber Symphony">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no" />

    <!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
    <link rel="stylesheet" href="assets/css/normalize.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/style.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/personnel.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/fullcalendar.css" type="text/css" />
    <link rel="stylesheet" href="assets/css/base.css" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:200,400' rel='stylesheet' type='text/css'>
    <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=League+Script|Montserrat|Roboto|Open+Sans:400,600">
</head>

<body class="full">
    <!--[if lt IE 7]>
            <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
        <![endif]-->

    <div class="container full">

        <div class="full bs">
            <header class="site-head">
                <a href="index.html">
                    <img src="img/acs_logo_w.png" alt="Amadeus Chamber Symphony" />
                </a>

                <div class="head-info">
                    <p class="acs">Amadeus</p>
                    <p class="acs">Chamber</p>
                    <p class="acs">Symphony</p>
                    <p class="stj">Est. 1990 Collegeville, Minnesota</p>
                </div>

                <nav class="navbar" role="navigation">
                    <a class="mobile-nav" href="#">
                        <img src="img/mobileNav.png" alt="Menu" />
                    </a>
                    <ul class="navbar-nav hidden">
                        <li><a href="concerts.html">2013-2014 Season</a>
                            <li><a href="about.html">Personnel</a>
                            </li>
                            <li><a href="audition.html">Auditions</a>
                            </li>
                            <li><a href="media.html">Media</a>
                            </li>
                            <li><a href="contact.html">Contact</a>
                            </li>
                            <li><a id='loginLink' href="#">Login</a>
                            </li>
                    </ul>
                </nav>
            </header>
        </div>

        <h1 class="heading">Welcome, <?php echo $_GET['name'] ?>!</h1>

        <section class="content">
            <div id="calendar"></div>
        </section>
        <br />

        

    </div>
        <footer class="footer-mobile">
            &copy; Amadeus Chamber Symphony 2013 | <a href="http://danielmoe.net" alt='Designed and Developed by Daniel Moe'>D &amp; D by Daniel Moe</a>
        </footer>
    <script src="assets/js/production.js"></script>
    <script src="assets/js/jquery-ui.custom.min.js"></script>
    <script src="assets/js/fullcalendar.js"></script>
    <script src="assets/js/calendar.js"></script>

</body>

</html>

<!DOCTYPE html>
<html>
    <head>
        <title>retune - creative technology conference | 26. - 28.09.2014 berlin</title>        
		<meta name="viewport" content="width=600" />
		 <!-- Bootstrap core CSS -->
	    <link href="css/bootstrap.css" rel="stylesheet">
	    <link href="css/style.css" rel="stylesheet">
		<link rel="icon" href="http://retune.de/img/favicon.png" type="image/png">
        <meta charset="UTF-8" />
		<meta name="description" content="retune is a berlin based platform for artists, designers, technologists and researchers who explore and shape new ways of creating and expressing with technology."/>
		<meta property='og:locale' content='en_US'/>
		<meta property='og:type' content='website'/>
		<meta property='og:title' content='retune.'/>
		<meta property='og:description' content='retune is a berlin based platform for artists, designers, technologists and researchers who explore and shape new ways of creating and expressing with technology.'/>
		<meta property='og:url' content='http://retune.de'/>
		<meta property='og:site_name' content='retune.'/>
		<meta property='fb:admins' content='1443104249'/>
		<meta property='og:image' content='http://retune.de/img/retune_og.jpg'/>

        <script src="http://code.jquery.com/jquery-1.8.3.js"></script>
    	<script src="js/bootstrap.js"></script>
		<script src="js/jquery.backstretch.js"></script>
    	<script type="text/javascript">
			WebFontConfig = { fontdeck: { id: '41866' } };
			(function() {
				var wf = document.createElement('script');
				wf.src = ('https:' == document.location.protocol ? 'https' : 'http') +
				'://ajax.googleapis.com/ajax/libs/webfont/1/webfont.js';
				wf.type = 'text/javascript';
				wf.async = 'true';
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(wf, s);
			})();

			$(document).ready(function() {
				// smooth scrolling for internal links from here: http://www.paulund.co.uk/smooth-scroll-to-internal-links-with-jquery
				$('a[href^="#"]').on('click',function (e) {
				    e.preventDefault();
				    var target = this.hash,
				    $target = $(target);
				    $('html, body').stop().animate({
				        'scrollTop': $target.offset().top
				    }, 900, 'swing', function () {
				        window.location.hash = target;
				    });
				});

				$('body').scrollspy({ target: '#speakers_list' })
			});
		</script>
    </head>
    <body data-spy="scroll" data-target="#speaker_list">
		<nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
	        <div class="container">
	            <div class="navbar-header">
	                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
	                    <span class="sr-only">Toggle navigation</span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                    <span class="icon-bar"></span>
	                </button>
	                <!-- You'll want to use a responsive image option so this logo looks good on devices - I recommend using something like retina.js (do a quick Google search for it and you'll find it) -->
	                <a class="navbar-brand" href="index.html"><img src="img/logo-verlauf_small.png" class="img-responsive" style="width:90px;"/></a>
	            </div>

	            <!-- Collect the nav links, forms, and other content for toggling -->
	            <div class="collapse navbar-collapse navbar-ex1-collapse">
	                <ul class="nav nav-justified">
	                	<?php $file = basename($_SERVER['PHP_SELF'], '.php'); ?>
	                    <li<?php if($file == "index") {echo ' class="active"';} ?>><a href="index.php">about</a></li>
	                    <li<?php if($file == "speakers") {echo ' class="active"';} ?>><a href="speakers.php">speakers</a></li>
	                    <li<?php if($file == "workshops") {echo ' class="active"';} ?>><a href="workshops.php">workshops</a></li>
	                    <!-- <li<?php if($file == "program") {echo ' class="active"';} ?>><a href="program.php">program</a></li> -->
	                    <!-- <li><a href="tickets">tickets</a></li> -->
	                    <!-- <li<?php if($file == "venue") {echo ' class="active"';} ?>><a href="venue.php">venue</a></li> -->
	                    <!-- <li<?php if($file == "partners") {echo ' class="active"';} ?>><a href="partners.php">partners</a></li> -->
	                    <!-- <li<?php if($file == "press") {echo ' class="active"';} ?>><a href="press">press</a></li> -->
	                </ul>
	            </div> <!-- /.navbar-collapse -->
	        </div> <!-- /.container -->
    	</nav>

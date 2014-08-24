<!DOCTYPE html>
<html xmlns="http://www.w3.org/1999/xhtml" lang="en" xml:lang="en">
    <head>
<?php
		$file = basename($_SERVER['PHP_SELF'], '.php'); 
		if($file == "speakers") { $pagetitle = "speakers | "; } 
		else if($file == "workshops") { $pagetitle = "workshops | "; }
		else if($file == "tickets") { $pagetitle = "tickets | "; }
		else if($file == "about") { $pagetitle = "about | "; }
		else if($file == "venue") { $pagetitle = "venue | "; }
		else if($file == "index") { $pagetitle = ""; } 
	?>


        <title><?php echo $pagetitle; ?>retune - creative technology conference | 26. - 28.09.2014 berlin</title>
		<meta name="viewport" content="width=device-width, initial-scale=1">
		 <!-- Bootstrap core CSS -->
	    <link href="css/bootstrap.css" rel="stylesheet">
	    <link rel="stylesheet" type="text/css" href='https://ti.to/retune/retune-2014.css?version=4' />
	    <link href="css/style.css" rel="stylesheet">


		<link rel="icon" href="http://retune.de/img/favicon.png" type="image/png">
        <meta charset="UTF-8" />
		<meta name="description" content="From 26. - 28. September 2014 the retune conference brings together for the third time artists, designers, technologists as well as researchers and scientists to inspire interdisciplinary thinking and making. This annual gathering of international creative minds seeks to explore, shape, and critically question the future of living, working, and expressing through technology."/>
		<meta property='og:locale' content='en_US'/>
		<meta property='og:type' content='website'/>
		<meta property='og:title' content='retune. 2014 | 26. - 28.09.2014'/>
		<meta property='og:description' content='From 26. - 28. September 2014 the retune conference brings together for the third time artists, designers, technologists as well as researchers and scientists to inspire interdisciplinary thinking and making. This annual gathering of international creative minds seeks to explore, shape, and critically question the future of living, working, and expressing through technology.'/>
		<meta property='og:url' content='http://retune.de/2014/'/>
		<meta property='og:site_name' content='retune. 2014'/>
		<meta property='fb:admins' content='1443104249'/>
		<meta property='og:image' content='http://retune.de/2014/img/og-image.jpg'/>

        <script src="js/jquery-1.9.1.min.js"></script>
        <script src="js/jquery.lettering-0.6.1.min.js"></script>
        <script src="js/jquery.scrollorama.js"></script>
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

				$('body').scrollspy({ target: '#middle_nav' })

				// $("#about-box").mousemove(function( event ) {
				// 	//var ctx = $("canvas.about-box").getContext(2d);
				// 	var c=document.getElementById("about-box");
				// 	var ctx=c.getContext("2d");
				// 	var img=document.getElementById("bailey");
				// 	console.log(event.clientX- $("#about-box").position().left);
				// 	// ctx.drawImage(img,event.pageX - $("#about-box").position().left,event.pageY-$("#about-box").position().top);
				// 	ctx.drawImage(img,event.clientX- $("#about-box").position().left, 0);
				// });
			});
		</script>
    </head>
    <body data-spy="scroll" data-target="#middle_nav">
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
	                <a class="navbar-brand" href="/2014"><img src="img/logo-verlauf_small.png" alt="retune." class="img-responsive" style="width:90px;"/></a>
	            </div>

	            <!-- Collect the nav links, forms, and other content for toggling -->
	            <div class="collapse navbar-collapse navbar-ex1-collapse">
	                <ul class="nav nav-justified">
	                	<?php $file = basename($_SERVER['PHP_SELF'], '.php'); ?>
	                    <li<?php if($file == "about") {echo ' class="active"';} ?>><a href="about" class="about">about</a></li>
	                    <li<?php if($file == "speakers") {echo ' class="active"';} ?>><a href="speakers" class="speakers">speakers</a></li>
	                    <li<?php if($file == "workshops") {echo ' class="active"';} ?>><a href="workshops" class="workshops">workshops</a></li>
	                    <!-- <li<?php if($file == "program") {echo ' class="active"';} ?>><a href="program.php">program</a></li> -->
	                    <li<?php if($file == "venue") {echo ' class="active"';} ?>><a href="venue" class="venue">venue</a></li>
	                    <li<?php if($file == "tickets") {echo ' class="active"';} ?>><a href="tickets" class="tickets">tickets</a></li>
	                    <!-- <li<?php if($file == "partners") {echo ' class="active"';} ?>><a href="partners.php">partners</a></li> -->
	                    <!-- <li<?php if($file == "press") {echo ' class="active"';} ?>><a href="press">press</a></li> -->
	                </ul>
	            </div> <!-- /.navbar-collapse -->
	        </div> <!-- /.container -->
    	</nav>

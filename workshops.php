<?php require_once('head.php'); ?> 
	
    	<div class="container full-width-container">
    		<div class="fixed-overlay">
				<h1>workshops 2014</h1>
			</div>
				
			<div id="speakers_list" class="hidden-sm hidden-xs">
				<nav>
					<ul class="nav">
						<li><a href="#auger">James Auger</a></li>
						<li><a href="#bailey">Jeremy Bailey</a></li>
						<li><a href="">Three</a></li>
						<li><a href="">Four</a></li>
						<li><a href="">Five</a></li>
					</ul>
				</nav>
			</div>

	    	<div class="row" id="auger">
				<div class="speaker_info col-md-6 col-xs-12 split">
					<div class="description col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0" >
						<h2>James Auger</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
						<p>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<img class="speaker-portrait" src="img/auger.png" />
						<div class="speaker-website"><a href="">auger.com</a><br/><a href="">my-second-website.com</a></div>
						<div id="auger_small" style="background-color:red; height:350px; margin-top:20px;" class="visible-sm visible-xs img-responsive" style="z-index:0;"></div>
						
					</div> <!-- /description -->
				</div> <!-- /speaker_info -->

				<div id="auger_image" class="speaker_images col-md-6 hidden-sm hidden-xs split" style="background: url(http://retune.de/2013/img/Auger_Blinddate.jpg) no-repeat center; background-size: cover;">					
					<nav class="nav_images">
						<a href="javascript:previousImage('auger')"><span class="glyphicon glyphicon-chevron-left"></span></a>
						<a href="javascript:nextImage('auger')"><span class="glyphicon glyphicon-chevron-right"></span></a>
						images
					</nav>
				</div> <!-- /speaker_images -->
			</div> <!-- /row -->	

			<div class="row" id="bailey"> 
				<div id="bailey_image" class="speaker_images col-md-6 hidden-sm hidden-xs split" style="background: url(http://retune.de/2013/img/Bailey_01.jpg) no-repeat center; background-size: cover;">			
					<nav class="nav_images left">
						<a href="javascript:previousImage('bailey')"><span class="glyphicon glyphicon-chevron-left"></span></a>
						<a href="javascript:nextImage('bailey')"><span class="glyphicon glyphicon-chevron-right"></span></a>
						images
					</nav>
				</div> <!-- /speaker_images -->

				<div class="speaker_info col-md-6 col-xs-12 split">
					<div class="description col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
						<h2>Jeremy Bailey</h2>
						<p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
						tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
						quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo</p>
						<p>consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
						cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
						proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
						<img class="speaker-portrait" src="img/bailey.png" />
						<div class="speaker-website"><a href="">bailey.com</a></div>
					</div> <!-- /description -->
				</div> <!-- /speaker_info -->
			</div> <!-- /row -->

		</div> <!-- /container -->

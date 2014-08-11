<div id="footer">
			<p>retune 2014 // 26. – 28.09.2014, ARENA Glashaus Berlin</p>
			<ul>
				<li><a href="http://eepurl.com/oAiGz" target="_blank">newsletter</a></li>
				<li><a href="https://twitter.com/retune_conf" target="_blank">twitter</a></li>
				<li><a href="https://www.facebook.com/retuneconference" target="_blank">facebook</a></li>
				<li><a href="http://instagram.com/retune_conf" target="_blank">instagram</a></li>
				<li><a href="http://flickr.com/retuneconference" target="_blank">flickr</a></li>
				<li><span class="glyphicon glyphicon-minus"></span></li>
				<li><a href="terms.php">terms</a></li>
				<li><a href="imprint">imprint</a></li>
			</ul>
		</div>

	</body>

	<!-- slideshow images -->
	<?php
		$file = basename($_SERVER['PHP_SELF'], '.php'); 
		if($file == "speakers") {
			echo '<script src="js/slideshow_nav.js"></script>';
			echo '<script src="js/speakers_slideshow.js"></script>';
		} 
		else if($file == "workshops") {
			echo '<script src="js/slideshow_nav.js"></script>';
			echo '<script src="js/workshops_slideshow.js"></script>';
		} 
		else if($file == "workshops_new") {
			echo '<script src="js/slideshow_nav.js"></script>';	
			echo '<script src="js/workshops_slideshow.js"></script>';
		} 
		else if($file == "index") {
			echo '<script src="js/index_slideshow.js"></script>';
		} 
	?>

	<!-- Piwik -->
	<script type="text/javascript">

	</script>
	<!-- End Piwik Code -->

</html>
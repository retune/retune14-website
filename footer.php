		<div id="footer" class="hidden-sm hidden-xs">
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
	  var _paq = _paq || [];
	  _paq.push(['trackPageView']);
	  _paq.push(['enableLinkTracking']);
	  (function() {
	    var u=(("https:" == document.location.protocol) ? "https" : "http") + "://piwik.julianadenauer.de/";
	    _paq.push(['setTrackerUrl', u+'piwik.php']);
	    _paq.push(['setSiteId', 6]);
	    var d=document, g=d.createElement('script'), s=d.getElementsByTagName('script')[0]; g.type='text/javascript';
	    g.defer=true; g.async=true; g.src=u+'piwik.js'; s.parentNode.insertBefore(g,s);
	  })();
	</script>
	<noscript><p><img src="http://piwik.julianadenauer.de/piwik.php?idsite=6" style="border:0;" alt="" /></p></noscript>
	<!-- End Piwik Code -->


</html>
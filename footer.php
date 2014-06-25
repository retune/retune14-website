<div id="footer">
			<ul>
				<li><a href="https://twitter.com/retune_conf" target="_blank">twitter</a></li>
				<li><a href="https://www.facebook.com/retuneconference" target="_blank">facebook</a></li>
				<li><a href="http://instagram.com/retune_conf" target="_blank">instagram</a></li>
				<li><a href="http://flickr.com/retuneconference" target="_blank">flickr</a></li>
				<li><span class="glyphicon glyphicon-minus"></span></li>
				<li><a href="http://eepurl.com/oAiGz" target="_blank">newsletter</a></li>
				<li><a href="imprint" target="_blank">imprint</a></li>
			</ul>
		</div>

	</body>

	<!-- speaker slideshow images -->
	<script language="JavaScript">
			$("#auger_image").backstretch([
	          "http://retune.de/2013/img/Auger_Blinddate.jpg",
	          "http://retune.de/2013/img/KyleMcDonald_LightLeaks.jpg"
	        ], { fade: 750, duration: 8000 });

	        $("#auger_small").backstretch([
	          "http://retune.de/2013/img/Auger_Blinddate.jpg",
	          "http://retune.de/2013/img/KyleMcDonald_LightLeaks.jpg"
	        ], { fade: 750, duration: 8000 });

	        $("#bailey_image").backstretch([
	          "http://retune.de/2013/img/Bailey_01.jpg",
	          "http://retune.de/2013/img/Bailey_02.jpg"
	        ], { fade: 750, duration: 8000 });

			function previousImage(name){
				$('#'+name+'_image').data('backstretch').prev();
			}
			
			function nextImage(name){
				$('#'+name+'_image').data('backstretch').next();
			}
			  
			// pre-load images
			if(document.images){
				var image1 = new Image()			   
			   image1.src = "http://retune.de/2013/img/Auger_Blinddate.jpg"
			   var image2 = new Image()
			   image2.src = "http://retune.de/2013/img/KyleMcDonald_LightLeaks.jpg"
			}
		</script>

	<!-- Piwik -->
	<script type="text/javascript">
	  var _paq = _paq || [];
	  _paq.push(["trackPageView"]);
	  _paq.push(["enableLinkTracking"]);

	  (function() {
	    var u=(("https:" == document.location.protocol) ? "https" : "http") + "://piwik.julianadenauer.de/";
	    _paq.push(["setTrackerUrl", u+"piwik.php"]);
	    _paq.push(["setSiteId", "6"]);
	    var d=document, g=d.createElement("script"), s=d.getElementsByTagName("script")[0]; g.type="text/javascript";
	    g.defer=true; g.async=true; g.src=u+"piwik.js"; s.parentNode.insertBefore(g,s);
	  })();
	</script>
	<!-- End Piwik Code -->

</html>
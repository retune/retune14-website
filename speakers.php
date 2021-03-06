<?php require_once('head.php'); ?> 
	
    	<div id="speakers" class="container full-width-container">
    		<div class="fixed-overlay">
				<h1>speakers 2014</h1>
			</div>
				
			<div id="middle_nav" class="hidden-sm hidden-xs">
				<nav>
					<ul class="nav">
						<li><a href="#allen">Jamie Allen</a></li>
						<li><a href="#aparede">A Parede</a></li>
						<li><a href="#beanotherlab">BeAnotherLab</a></li>
						<li><a href="#blas">Zach Blas</a></li>
						<li><a href="#cyborgs">Cyborgs e.V.</a></li>
						<li><a href="#dubois">Vicent Dubois</a></li>
						<li><a href="#franco">Anaisa Franco</a></li>
						<li><a href="#geist">Moritz Simon Geist</a></li>
						<li><a href="#gohl">Jarii van Gohl</a></li>
						<li><a href="#lieser">Wolf Lieser</a></li>
						<li><a href="#mirti">Stefano Mirti</a></li>
						<li><a href="#parmar">Robin Parmar</a></li>
						<li><a href="#quaranta">Domenico Quaranta</a></li>
						<li><a href="#random">Random International</a></li>
						<li><a href="#sauter">Joachim Sauter</a></li>
						<li><a href="#schmid">Susa Schmid</a></li>
						<li><a href="#schmidt">Karsten Schmidt</a></li>
						<li><a href="#shalom">Gabriel Shalom</a></li>
						<li><a href="#smigla-bobinski" style="letter-spacing:1px;">Karina Smigla-Bobinski</a></li>
						<li><a href="#uva">United Visual Artists</a></li>
						<li><a href="#visnjic">Filip Visnjic</a></li>
						<li><a href="#wang">Alice Wang</a></li>
						<?php /*<li><a href="#wellmer">Gösta Wellmer</a></li>*/?>
					</ul>
				</nav>
			</div>

			<?php 
				// initalize the counter for determining the side
				$count = 0; 
			?>

			<!-- 
				JAMIE ALLEN
			 -->
			<?php $count++; ?>
			<div class="row" id="allen">
				<div class="speaker_info col-md-6 col-xs-12 <?php if($count%2 == 0) {echo "col-md-push-6";} ?>">
					<div class="description col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
						<h2>Jamie Allen</h2>
						<p>Jamie likes to make things with his head and hands – investigations into the material systems of media, electricity, and information. His work has been exhibited internationally, from Eyebeam in NYC, to the Foundation for Art and Creative Technology in Liverpool, to SIGGRAPH Asia in Yokohama, Japan.</p>
						<p>His interests lie in the ways that creative uses of technology teach us about who we are as individuals, cultures and societies. He has done research and taught at NYU’s Interactive Telecommunications Program, the Pratt Institute of Art and Design, Hanyang University in Seoul, and lectured at Parsons and the Royal College of Art in London. He has worked as an interactive systems designer for IBM, DuPont, ESI Design and the American Museum of Natural History.</p>
<p>Born in Canada, Jamie works between New York, the UK, Copenhagen and Basel.</p>
						<img class="portrait img-circle" src="img/speakers/allen_portrait.jpg" />
						<div class="website"><a href="http://www.jamieallen.com/" target="_blank">jamieallen.com</a></div>
						<div id="allen_small" style="height:400px; margin-top:20px;" class="visible-sm visible-xs img-responsive" style="z-index:0;"></div>
					</div> <!-- /description -->
				</div> <!-- /speaker_info -->
				<div id="allen_image" class="speaker_images col-md-6 hidden-sm hidden-xs <?php if($count%2 == 0) {echo "col-md-pull-6";} ?>">			
					<nav class="nav_images <?php if($count%2 == 0) {echo "left";} ?>">
						<a href="javascript:previousImage('allen')"><span class="glyphicon glyphicon-chevron-left"></span></a>
						<a href="javascript:nextImage('allen')"><span class="glyphicon glyphicon-chevron-right"></span></a>
						images
					</nav>
				</div> <!-- /speaker_images -->
			</div> <!-- /row -->

			<!-- 
				A PAREDE
			 -->
			<?php $count++; ?>
			<div class="row" id="aparede">
				<div class="speaker_info col-md-6 col-xs-12 <?php if($count%2 == 0) {echo "col-md-push-6";} ?>">
					<div class="description col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
						<h2>A Parede</h2>
						<p>A Parede is a brazilian design research practice in Berlin. Their research interests are in Speculative and Critical Design, Gender and Sound Studies.</p>
						<p>A Parede is interested in developing projects and workshops that question the status quo and not only address but also empower people to take a stand. They truly believe that designers and makers should take a political position; moreover, they believe that research through design is a very powerful tool for making that happen.</p>
						<p>A Parede consists of the two Ph.D Candidates in Design Research <a href="http://a-pare.de/we/pedro/" target="_blank">Pedro Oliveira</a> and <a href="http://a-pare.de/we/luiza/" target="_blank">Luiza Prado</a>.</p>
						<img class="portrait img-circle" src="img/speakers/oliveira_portrait.jpg" />  <img class="portrait img-circle" src="img/speakers/prado_portrait.jpg" />
						<div class="website"><a href="http://a-pare.de" target="_blank">a-pare.de</a></div>
						<div id="aparede_small" style="height:400px; margin-top:20px;" class="visible-sm visible-xs img-responsive" style="z-index:0;"></div>
					</div> <!-- /description -->
				</div> <!-- /speaker_info -->

				<div id="aparede_image" class="speaker_images col-md-6 hidden-sm hidden-xs <?php if($count%2 == 0) {echo "col-md-pull-6";} ?>">
					<nav class="nav_images <?php if($count%2 == 0) {echo "left";} ?>">
						<a href="javascript:previousImage('aparede')"><span class="glyphicon glyphicon-chevron-left"></span></a>
						<a href="javascript:nextImage('aparede')"><span class="glyphicon glyphicon-chevron-right"></span></a>
						images
					</nav>
				</div> <!-- /speaker_images -->
				
			</div> <!-- /row -->

			<!-- 
				BEANOTHERLAB
			 -->
			<?php $count++; ?>
			<div class="row" id="beanotherlab">
				<div class="speaker_info col-md-6 col-xs-12 <?php if($count%2 == 0) {echo "col-md-push-6";} ?>">
					<div class="description col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
						<h2>BeAnotherLab</h2>
						<p>BeAnotherLab is an interdisciplinary art collective that conducts embodied telepresence experiments to promote empathy. Drawing on neuroscience protocols, we search for innovative possibilities in embodied interaction and use low-budget digital technology to run performances addressing social issues.</p>
						<p>The team is composed of researchers from 6 countries (Philippe Bertrand - BR, Christian Cherene - IE, Daniel Gonzalez - CO, Daanish Masood - US, Marte Roel - MX, Arthur Tres - FR), with backgrounds in digital arts, cognitive systems, engineering, psychology and conflict resolution, and is actively collaborating with institutions working in those fields around the world. Its work received numerous awards and has been exhibited internationally.</p>
						<div class="website"><a href="http://themachinetobeanother.org" target="_blank">themachinetobeanother.org</a></div>
						<div id="beanotherlab_small" style="height:400px; margin-top:20px;" class="visible-sm visible-xs img-responsive" style="z-index:0;"></div>
					</div> <!-- /description -->
				</div> <!-- /speaker_info -->
				<div id="beanotherlab_image" class="speaker_images col-md-6 hidden-sm hidden-xs <?php if($count%2 == 0) {echo "col-md-pull-6";} ?>">			
					<nav class="nav_images <?php if($count%2 == 0) {echo "left";} ?>">
						<a href="javascript:previousImage('beanotherlab')"><span class="glyphicon glyphicon-chevron-left"></span></a>
						<a href="javascript:nextImage('beanotherlab')"><span class="glyphicon glyphicon-chevron-right"></span></a>
						images
					</nav>
				</div> <!-- /speaker_images -->
			</div> <!-- /row -->

			<!-- 
				ZACH BLAS
			 -->
			<?php $count++; ?>
			<div class="row" id="blas"> 
				<div class="speaker_info col-md-6 col-xs-12 <?php if($count%2 == 0) {echo "col-md-push-6";} ?>">
					<div class="description col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
						<h2>Zach Blas (via video-conference)</h2>
						<p>Zach Blas is an artist, writer, and curator whose work engages technology, queerness, and politics. He is an Assistant Professor in the Department of Art at the University at Buffalo.</p>
						<p>Currently, he is producing a body of work that responds to technological control and refusals of political visibility through tactics of escape, disappearance, illegibility, and opacity. One project, <a href="http://www.zachblas.info/projects/facial-weaponization-suite/" target="_blank">Facial Weaponization Suite</a>, produces “collective masks” in community-based workshops that cannot be detected as human faces by biometric facial recognition technologies.</p>
						<img class="portrait img-circle" src="img/speakers/blas_portrait.jpg" />
						<div class="website"><a href="http://www.zachblas.info" target="_blank">zachblas.info</a></div>
						<div id="blas_small" style="height:400px; margin-top:20px;" class="visible-sm visible-xs img-responsive" style="z-index:0;"></div>
					</div> <!-- /description -->
				</div> <!-- /speaker_info -->

				<div id="blas_image" class="speaker_images col-md-6 hidden-sm hidden-xs <?php if($count%2 == 0) {echo "col-md-pull-6";} ?>">			
					<nav class="nav_images <?php if($count%2 == 0) {echo "left";} ?>">
						<a href="javascript:previousImage('blas')"><span class="glyphicon glyphicon-chevron-left"></span></a>
						<a href="javascript:nextImage('blas')"><span class="glyphicon glyphicon-chevron-right"></span></a>
						images
					</nav>
				</div> <!-- /speaker_images -->

				
			</div> <!-- /row -->


			<!-- 
				CYBORGS E.V.
			 -->
			<?php $count++; ?>
			<div class="row" id="cyborgs"> 
				<div class="speaker_info col-md-6 col-xs-12 <?php if($count%2 == 0) {echo "col-md-push-6";} ?>">
					<div class="description col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
						<h2>Cyborgs e.V.</h2>
						<p>The ambivalence of futuristic-sounding pictures of a dissolving human body, on the one hand, and the bio-tech symbiosis that is happening at the moment in real life and society, on the other, clearly
challenges the societal norms and standards that make up our conception of humankind. The technological extended human does not uphold a distinction between the interior and exterior of the human's skinbag in the future. What will happen in a posthuman era, where cyborg bodies are increasingly leaving their ancient fortress of skin and skull in favour of mental extension?</p>
<p>Talk by Nadja Buttendorf and Stefan Greiner.</p>
						<img class="portrait img-circle" src="img/speakers/buttendorf_portrait.jpg" />  <img class="portrait img-circle" src="img/speakers/greiner_portrait.jpg" />
						<div class="website"><a href="http://cyborgs.cc" target="_blank">cyborgs.cc</a><br/>
							<a href="http://nadjabuttendorf.com" target="_blank">nadjabuttendorf.com</a>
							
						</div>
						<div id="cyborgs_small" style="height:400px; margin-top:20px;" class="visible-sm visible-xs img-responsive" style="z-index:0;"></div>
					</div> <!-- /description -->
				</div> <!-- /speaker_info -->

				<div id="cyborgs_image" class="speaker_images col-md-6 hidden-sm hidden-xs <?php if($count%2 == 0) {echo "col-md-pull-6";} ?>">
					<nav class="nav_images <?php if($count%2 == 0) {echo "left";} ?>">
						<a href="javascript:previousImage('cyborgs')"><span class="glyphicon glyphicon-chevron-left"></span></a>
						<a href="javascript:nextImage('cyborgs')"><span class="glyphicon glyphicon-chevron-right"></span></a>
						images
					</nav>
				</div> <!-- /speaker_images -->
			</div> <!-- /row -->

			<!-- 
				VINCENT DUBOIS
			 -->
			<?php $count++; ?>
			<div class="row" id="dubois"> 
				<div class="speaker_info col-md-6 col-xs-12 <?php if($count%2 == 0) {echo "col-md-push-6";} ?>">
					<div class="description col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
						<h2>Vincent Dubois</h2>
						<p>Vincent Dubois, born in 1991, is a french interactions designer. His work is focused on social interactions and users behaviors. he has a Master in Media-Design at Geneva University of Art and Design, in Switzerland.</p>
						<p>As part of his research, he developed an interest about how personal data, digital identities and social interactions affect us all in our daily use of technology. Influenced by the open-source movement, he is interested in designing tools to interact with the global surveillance, to better understand it. One of his project, called <a href="http://un-defined.io" target="_blank">Undefined</a>, proposes to control the transmission of your personal data, to try to understand how algorithms works. This allows a greater user accountability behavior towards digital services.</p>
						<img class="portrait img-circle" src="img/speakers/dubois_portrait.jpg" />
						<div class="website"><a href="http://vincentdubois.fr/en/" target="_blank">vincentdubois.fr</a>
							
						</div>
						<div id="dubois_small" style="height:400px; margin-top:20px;" class="visible-sm visible-xs img-responsive" style="z-index:0;"></div>
					</div> <!-- /description -->
				</div> <!-- /speaker_info -->

				<div id="dubois_image" class="speaker_images col-md-6 hidden-sm hidden-xs <?php if($count%2 == 0) {echo "col-md-pull-6";} ?>">
					<nav class="nav_images <?php if($count%2 == 0) {echo "left";} ?>">
						<a href="javascript:previousImage('dubois')"><span class="glyphicon glyphicon-chevron-left"></span></a>
						<a href="javascript:nextImage('dubois')"><span class="glyphicon glyphicon-chevron-right"></span></a>
						images
					</nav>
				</div> <!-- /speaker_images -->
			</div> <!-- /row -->


			<!-- 
				ANAISA FRANCO 
			 -->
			<?php $count++; ?>
			<div class="row" id="franco"> 
				<div class="speaker_info col-md-6 col-xs-12 <?php if($count%2 == 0) {echo "col-md-push-6";} ?>">
					<div class="description col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
						<h2>Anaisa Franco</h2>
						<p>Searching for the creation of a “sixth” sense, she creates interfaces that interconnect the physical with the digital by using concepts of psychology and dreams, she provides behaviors, feelings and imagination for the artworks.</p>
						<p>Anaisa Franco has a Master in Digital Art and technology at University of Plymouth in England, UK and graduated in Visual Arts at FAAP in Sao Paulo.</p>
						<img class="portrait img-circle" src="img/speakers/franco_portrait.jpg" />
						<div class="website"><a href="http://www.anaisafranco.com" target="_blank">anaisafranco.com</a></div>
						<div id="franco_small" style="height:400px; margin-top:20px;" class="visible-sm visible-xs img-responsive" style="z-index:0;"></div>
					</div> <!-- /description -->
				</div> <!-- /speaker_info -->

				<div id="franco_image" class="speaker_images col-md-6 hidden-sm hidden-xs <?php if($count%2 == 0) {echo "col-md-pull-6";} ?>">			
					<nav class="nav_images <?php if($count%2 == 0) {echo "left";} ?>">
						<a href="javascript:previousImage('franco')"><span class="glyphicon glyphicon-chevron-left"></span></a>
						<a href="javascript:nextImage('franco')"><span class="glyphicon glyphicon-chevron-right"></span></a>
						images
					</nav>
				</div> <!-- /speaker_images -->
			</div> <!-- /row -->

			<!-- 
				Geist
			 -->
			<?php $count++; ?>
			<div class="row" id="geist"> 
				<div class="speaker_info col-md-6 col-xs-12 <?php if($count%2 == 0) {echo "col-md-push-6";} ?>">
					<div class="description col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
						<h2>Moritz Simon Geist</h2>
						<p>Moritz Simon Geist, born in 1981, music performance with musical robots. His projects range from tonal hacking to robotics and automated robotic instrument, adding a new perspective to the “man-machine-interface”.</p>
						<p>But his installations go beyond the basic physical and technical demand: the main theme is rather the transition from a deterministic (usually binary) system into the physical and mechanical world. This transformation entains an greater stress on the “error” of the physical world and lets the object be both more tangible and vulnerable. Moritz Simon Geist lives and works in Dresden, Germany.</p>
						<img class="portrait img-circle" src="img/speakers/geist_portrait.jpg" />
						<div class="website"><a href="http://sonicrobots.com" target="_blank">sonicrobots.com</a></div>
						<div id="geist_small" style="height:400px; margin-top:20px;" class="visible-sm visible-xs img-responsive" style="z-index:0;"></div>
					</div> <!-- /description -->
				</div> <!-- /speaker_info -->
				<div id="geist_image" class="speaker_images col-md-6 hidden-sm hidden-xs <?php if($count%2 == 0) {echo "col-md-pull-6";} ?>">			
					<nav class="nav_images <?php if($count%2 == 0) {echo "left";} ?>">
						<a href="javascript:previousImage('geist')"><span class="glyphicon glyphicon-chevron-left"></span></a>
						<a href="javascript:nextImage('geist')"><span class="glyphicon glyphicon-chevron-right"></span></a>
						images
					</nav>
				</div> <!-- /speaker_images -->
			</div> <!-- /row -->

			<!-- 
				Jarii van Gohl
			 -->
			<?php $count++; ?>
			<div class="row" id="gohl"> 
				<div class="speaker_info col-md-6 col-xs-12 <?php if($count%2 == 0) {echo "col-md-push-6";} ?>">
					<div class="description col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
						<h2>Jarii van Gohl</h2>
						<p>Jarii van Gohl is the head of "SoundSLKTR". The focus of his work is on sound, music and the interface between people and sounds. In his hometown, he started to work on a project called „SOUNDKALENDER“ where he records sounds from buildings and their architecture to make music out of it. Architecture is his instrument. It is like a remix of the world of sounds from wich we are allways surrounded by.</p>
						<p>The rest of his time he is on tour with his band DŸSE all over the world, composes soundtracks for movies, runs his own talkshow called "TALKMAN", gives workshops, produces, mixes and masters music, creates analog soundeffects, makes the sounddesign for computergames and animated movies, creates soundlogos and feeds his cat from time to time.</p>
						<img class="portrait img-circle" src="img/speakers/gohl_portrait.jpg" />
						<div class="website"><a href="http://www.dyse-band.de" target="_blank">dyse-band.de</a></div>
						<div id="gohl_small" style="height:400px; margin-top:20px;" class="visible-sm visible-xs img-responsive" style="z-index:0;"></div>
					</div> <!-- /description -->
				</div> <!-- /speaker_info -->
				<div id="gohl_image" class="speaker_images col-md-6 hidden-sm hidden-xs <?php if($count%2 == 0) {echo "col-md-pull-6";} ?>">			
					<nav class="nav_images <?php if($count%2 == 0) {echo "left";} ?>">
						<a href="javascript:previousImage('gohl')"><span class="glyphicon glyphicon-chevron-left"></span></a>
						<a href="javascript:nextImage('gohl')"><span class="glyphicon glyphicon-chevron-right"></span></a>
						images
					</nav>
				</div> <!-- /speaker_images -->
			</div> <!-- /row -->

			<!-- 
				WOLF LIESER
			 -->
			<?php $count++; ?>
			<div class="row" id="lieser">
				<div class="speaker_info col-md-6 col-xs-12 <?php if($count%2 == 0) {echo "col-md-push-6";} ?>">
					<div class="description col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
						<h2>Wolf Lieser</h2>
						<p>Wolf Lieser works in the art field for more then 20 years. Originally an artist himself, he felt that supporting good artist in their career was much more needed then producing art himself. He started as an artist manager, became an art consultant and soon a gallerist with a unique and broader approach. His interest in Digital Art was the result of a systematic research into contemporary art with the purpose to isolate new tendencies, which could have a major influence on art in the future. He focussed on Digital Art early on. This has proven to be true. In 1998 he developed the DAM project, consisting of a online resource on the history of Digital Art, a commercial gallery and a lifetime award, |DDAA| - dam.org</p>
						<p>Together with his partner Keith Watson he ran the first gallery for Digital Art, named Colville Place Gallery in London from 1999- 2002. Since 2003 he is based in Berlin, with temporary locations in Cologne and Frankfurt. The gallery is solely focussing on digital media and their effect on culture, from the early pioneers of the 1960s to the present. In 2009 he wrote the introductory book “Digital Art”, which was published in 6 languages</p>
						<img class="portrait img-circle" src="img/speakers/lieser_portrait.jpg" />
						<div class="website"><a href="http://www.dam-gallery.de" target="_blank">dam-gallery.de</a></div>
						<div id="lieser_small" style="height:400px; margin-top:20px;" class="visible-sm visible-xs img-responsive" style="z-index:0;"></div>
					</div> <!-- /description -->
				</div> <!-- /speaker_info -->
				<div id="lieser_image" class="speaker_images col-md-6 hidden-sm hidden-xs <?php if($count%2 == 0) {echo "col-md-pull-6";} ?>">			
					<nav class="nav_images <?php if($count%2 == 0) {echo "left";} ?>">
						<a href="javascript:previousImage('lieser')"><span class="glyphicon glyphicon-chevron-left"></span></a>
						<a href="javascript:nextImage('lieser')"><span class="glyphicon glyphicon-chevron-right"></span></a>
						images
					</nav>
				</div> <!-- /speaker_images -->
			</div> <!-- /row -->

			<!-- 
				STEFANO MIRTI
			 -->
			<?php $count++; ?>
			<div class="row" id="mirti"> 
				<div class="speaker_info col-md-6 col-xs-12 <?php if($count%2 == 0) {echo "col-md-push-6";} ?>">
					<div class="description col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
						<h2>Stefano Mirti</h2>
						<p>Designer and teacher. Partner of  <a href="http://www.viacascia6.it/">IdLab</a>. He is responsible for the <a href="http://www.expo2015.org/en/biodiversity-park">Biodiversity Pavilion</a> project for Expo Milan 2015. Together with Susanna Legrenzi he is the head of the <a href="http://www.socialmediaexpo2015.com/">social media team</a> for Expo Milan 2015.</p>
						<p>He teaches at <a href="https://sites.google.com/site/bocconidesign/" target="_blank">Bocconi</a> business school in Milan. Head of <a href="http://www.relationaldesign.org/" target="_blank">Relational Design</a> on-line / off-line master (Abadir, Fine Arts Academy Catania). Since years he has been working on new forms of teaching: <a href="http://www.whoami.it/wh/" target="_blank">Whoami</a>, <a href="https://iversity.org/courses/design-101" target="_blank">Design 101</a> and several other projects. You can find the complete archive of his iversity course "Design 101" <a href="http://www.design1o1.net/" target="_blank">here</a>. </p>
						<img class="portrait img-circle" src="img/speakers/mirti_portrait.jpg" />
						<div class="website"><a href="http://www.interactiondesign-lab.com" target="_blank">interactiondesign-lab.com</a><br/>
							<a href="https://twitter.com/stefi_idlab" target="_blank">twitter</a><br/>
							<a href="http://instagram.com/stefi_idlab" target="_blank">instagram</a><br/>
							<a href="https://www.facebook.com/stefano.mirti.3" target="_blank">facebook</a>
						</div>
						<div id="mirti_small" style="height:400px; margin-top:20px;" class="visible-sm visible-xs img-responsive" style="z-index:0;"></div>
					</div> <!-- /description -->
				</div> <!-- /speaker_info -->

				<div id="mirti_image" class="speaker_images col-md-6 hidden-sm hidden-xs <?php if($count%2 == 0) {echo "col-md-pull-6";} ?>">			
					<nav class="nav_images <?php if($count%2 == 0) {echo "left";} ?>">
						<a href="javascript:previousImage('mirti')"><span class="glyphicon glyphicon-chevron-left"></span></a>
						<a href="javascript:nextImage('mirti')"><span class="glyphicon glyphicon-chevron-right"></span></a>
						images
					</nav>
				</div> <!-- /speaker_images -->
			</div> <!-- /row -->

			<!-- 
				ROBIN PARMAR
			 -->
			<?php $count++; ?>
			<div class="row" id="parmar"> 
				<div class="speaker_info col-md-6 col-xs-12 <?php if($count%2 == 0) {echo "col-md-push-6";} ?>">
					<div class="description col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
						<h2>Robin Parmar</h2>
						<p>Robin Parmar combines deep research with intermodal praxis in composition, improvisation, poetry, and film-making. His formal background is in theoretical physics, audio engineering, computer programming, and music technology. Works have appeared in Ireland, England, Portugal, Spain, Germany, Sweden, Slovenia, Canada, and the USA.</p>
						<p>Currently he lectures in Acoustics & Psychoacoustics at the University of Limerick, while researching "aural phenomenology of place" for a doctorate at De Montfort University, Leicester.</p>
						<img class="portrait img-circle" src="img/speakers/parmar_portrait.jpg" />
						<div class="website"><a href="http://robinparmar.com" target="_blank">robinparmar.com</a></div>
						<div id="parmar_small" style="height:400px; margin-top:20px;" class="visible-sm visible-xs img-responsive" style="z-index:0;"></div>
					</div> <!-- /description -->
				</div> <!-- /speaker_info -->

				<div id="parmar_image" class="speaker_images col-md-6 hidden-sm hidden-xs <?php if($count%2 == 0) {echo "col-md-pull-6";} ?>">			
					<nav class="nav_images <?php if($count%2 == 0) {echo "left";} ?>">
						<a href="javascript:previousImage('parmar')"><span class="glyphicon glyphicon-chevron-left"></span></a>
						<a href="javascript:nextImage('parmar')"><span class="glyphicon glyphicon-chevron-right"></span></a>
						images
					</nav>
				</div> <!-- /speaker_images -->
			</div> <!-- /row -->

			<!-- 
				DOMENICO QUARANTA
			 -->
			<?php $count++; ?>
			<div class="row" id="quaranta"> 
				<div class="speaker_info col-md-6 col-xs-12 <?php if($count%2 == 0) {echo "col-md-push-6";} ?>">
					<div class="description col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
						<h2>Domenico Quaranta</h2>
						<p>Domenico Quaranta (1978, Brescia, Italy) is a contemporary art critic and curator. He focused his research on the impact of the current techno-social developments on the arts, with a specific focus on art in networked spaces.</p>
						<p>As an art critic, he is a regular contributor to Flash Art and Artpulse magazine. His first book titled, "NET ART 1994-1998: La vicenda di Äda'web" was published in 2004; he is also the author of "Media, New Media, Postmedia" (Postmediabooks, Milan 2010) and "In My Computer" (LINK Editions 2011). He co-edited, together with Matteo Bittanti, the book GameScenes. Art in the Age of Videogames (Milan, October 2006) and contributed to a number of books and publication.</p>
						<p>He lectures internationally and teaches “Net Art” at the Accademia di Brera in Milan. He is the Artistic Director of the Link Center for the Arts of the Information Age, that he co-founded in 2011, and works as an editor for the parent editorial label Link Editions.</p>
						<img class="portrait img-circle" src="img/speakers/quaranta_portrait.jpg" />
						<div class="website"><a href="http://domenicoquaranta.com" target="_blank">domenicoquaranta.com</a></div>
						<div id="quaranta_small" style="height:400px; margin-top:20px;" class="visible-sm visible-xs img-responsive" style="z-index:0;"></div>
					</div> <!-- /description -->
				</div> <!-- /speaker_info -->

				<div id="quaranta_image" class="speaker_images col-md-6 hidden-sm hidden-xs <?php if($count%2 == 0) {echo "col-md-pull-6";} ?>">			
					<nav class="nav_images <?php if($count%2 == 0) {echo "left";} ?>">
						<a href="javascript:previousImage('quaranta')"><span class="glyphicon glyphicon-chevron-left"></span></a>
						<a href="javascript:nextImage('quaranta')"><span class="glyphicon glyphicon-chevron-right"></span></a>
						images
					</nav>
				</div> <!-- /speaker_images -->
			</div> <!-- /row -->

			<!-- 
				RANDOM INTERNATIONAL
			 -->
			<?php $count++; ?>
			<div class="row" id="random"> 
				<div class="speaker_info col-md-6 col-xs-12 <?php if($count%2 == 0) {echo "col-md-push-6";} ?>">
					<div class="description col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
						<h2>rAndom International</h2>
						<p>Founded by Stuart Wood, Flo Ortkrass and Hannes Koch in 2005, Random International is a collaborative studio for experimental practice within contemporary art. Taking science as a means to develop a new material vocabulary, their work invites consideration of the man/machine relationship through explorations of behaviour and natural phenomena — with the viewer an active participant. Today the studio is based in Chelsea, London with an outpost in Berlin, and includes a growing team of diverse and complementary talent.</p>
						<p>Héloïse Reynolds looks after Random International's communications, publications, and archive. After graduating from University College London, she gained her Masters from the Courtauld Institute of Art in 2008. Héloïse writes about the studio's practice and researches into its context and implications, overseeing all publications and exhibition material in addition to events and academic pursuits.</p>
						<img class="portrait img-circle" src="img/speakers/reynolds_portrait.jpg" />
						<div class="website"><a href="http://random-international.com" target="_blank">random-international.com</a></div>
						<div id="random_small" style="height:400px; margin-top:20px;" class="visible-sm visible-xs img-responsive" style="z-index:0;"></div>
					</div> <!-- /description -->
				</div> <!-- /speaker_info -->
				<div id="random_image" class="speaker_images col-md-6 hidden-sm hidden-xs <?php if($count%2 == 0) {echo "col-md-pull-6";} ?>">			
					<nav class="nav_images <?php if($count%2 == 0) {echo "left";} ?>">
						<a href="javascript:previousImage('random')"><span class="glyphicon glyphicon-chevron-left"></span></a>
						<a href="javascript:nextImage('random')"><span class="glyphicon glyphicon-chevron-right"></span></a>
						images
					</nav>
				</div> <!-- /speaker_images -->
			</div> <!-- /row -->


			<!-- 
				JOACHIM SAUTER
			 -->
			<?php $count++; ?>
			<div class="row" id="sauter"> 
				<div class="speaker_info col-md-6 col-xs-12 <?php if($count%2 == 0) {echo "col-md-push-6";} ?>">
					<div class="description col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
						<h2 style="line-height: 1.5em;">Joachim Sauter | ART+COM STUDIOS</h2>
						<p>After graduating from the academy of fine arts in Berlin, Joachim Sauter studied at the 'German Academy for Film and Television', Berlin. Since the early 1980s, he has been working as a media artist and designer. From the beginning, Joachim has focussed on digital technologies and is experimenting how they can be used to express content, form, and narration.</p>
						<p>Fuelled by this interest, he founded ART+COM in 1988 together with other artists, designers, scientists and technologists. Their goal was to practically research this new up-and-coming medium in the realm of art and design. Until now, he is leading this interdisciplinary group as a Creative Director.</p>
						<p>Since 1991 he is full professor for "New Media Art and Design" at the 'University of the Arts' Berlin and since 2001 adjunct professor at UCLA, Los Angeles. </p>
						<img class="portrait img-circle" src="img/speakers/sauter_portrait.jpg" />
						<div class="website"><a href="http://www.joachimsauter.com" target="_blank">joachimsauter.com</a></div>
						<div id="sauter_small" style="height:400px; margin-top:20px;" class="visible-sm visible-xs img-responsive" style="z-index:0;"></div>
					</div> <!-- /description -->
				</div> <!-- /speaker_info -->	
				<div id="sauter_image" class="speaker_images col-md-6 hidden-sm hidden-xs <?php if($count%2 == 0) {echo "col-md-pull-6";} ?>">			
					<nav class="nav_images <?php if($count%2 == 0) {echo "left";} ?>">
						<a href="javascript:previousImage('sauter')"><span class="glyphicon glyphicon-chevron-left"></span></a>
						<a href="javascript:nextImage('sauter')"><span class="glyphicon glyphicon-chevron-right"></span></a>
						images
					</nav>
				</div> <!-- /speaker_images -->		
			</div> <!-- /row -->

			<!-- 
				SUSA SCHMID
			 -->
			<?php $count++; ?>
			<div class="row" id="schmid"> 
				<div class="speaker_info col-md-6 col-xs-12 <?php if($count%2 == 0) {echo "col-md-push-6";} ?>">
					<div class="description col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
						<h2>Susa Schmid</h2>
						<p>Susa's interest is to visualize the gaze by using technologies like eye-tracking systems in a new way: rethinking concepts of vision and gaze, how we see the world and how we live in it, to enable new meaningful aesthetic experiences.</p>
						<p>Susa is an Berlin based artist and designer working on self initiated art projects and for the creative industry. She studied at the University of Applied Arts in Vienna and graduated from the Digital Media Class at the University of the Arts in Berlin. She has an additional background in psychology and pedagogy.
						</p>
						<img class="portrait img-circle" src="img/speakers/schmid_portrait.jpg" />
						<div class="website"><a href="http://susaschmid.de" target="_blank">susaschmid.de</a><br/>
							<a href="http://blickskulpturen.net" target="_blank">blickskulpturen.net</a>
						</div>

						<div id="schmid_small" style="height:400px; margin-top:20px;" class="visible-sm visible-xs img-responsive" style="z-index:0;"></div>
					</div> <!-- /description -->
				</div> <!-- /speaker_info -->	

				<div id="schmid_image" class="speaker_images col-md-6 hidden-sm hidden-xs <?php if($count%2 == 0) {echo "col-md-pull-6";} ?>">			
					<nav class="nav_images <?php if($count%2 == 0) {echo "left";} ?>">
						<a href="javascript:previousImage('schmid')"><span class="glyphicon glyphicon-chevron-left"></span></a>
						<a href="javascript:nextImage('schmid')"><span class="glyphicon glyphicon-chevron-right"></span></a>
						images
					</nav>
				</div> <!-- /speaker_images -->
						
			</div> <!-- /row -->
			
			<!-- 
				KARSTEN SCHMIDT
			 -->
			<?php $count++; ?>
			<div class="row" id="schmidt"> 
				<div class="speaker_info col-md-6 col-xs-12 <?php if($count%2 == 0) {echo "col-md-push-6";} ?>">
					<div class="description col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
						<h2>Karsten Schmidt</h2>
						<p>Karsten Schmidt explores the growing possibilities at the intersection of various design disciplines and software development.</p>
						Working cross-disciplinary with a network of other creatives, his design approach is based on treating ideas as software at the heart, which in turn informs all other facets of each project. Karsten uses code as primary design tool to build unique, highly adaptable platforms, installations, services and systems for some of the world's most respected & innovative brands.</p>
						<p>He is also an active participator and contributor to the Processing community and strong believer in open-source culture.</p>
						<img class="portrait img-circle" src="img/speakers/schmidt_portrait.jpg" />
						<div class="website"><a href="http://postspectacular.com" target="_blank">postspectacular.com</a></div>
						<div id="schmidt_small" style="height:400px; margin-top:20px;" class="visible-sm visible-xs img-responsive" style="z-index:0;"></div>
					</div> <!-- /description -->
				</div> <!-- /speaker_info -->	

				<div id="schmidt_image" class="speaker_images col-md-6 hidden-sm hidden-xs <?php if($count%2 == 0) {echo "col-md-pull-6";} ?>">			
					<nav class="nav_images <?php if($count%2 == 0) {echo "left";} ?>">
						<a href="javascript:previousImage('schmidt')"><span class="glyphicon glyphicon-chevron-left"></span></a>
						<a href="javascript:nextImage('schmidt')"><span class="glyphicon glyphicon-chevron-right"></span></a>
						images
					</nav>
				</div> <!-- /speaker_images -->
						
			</div> <!-- /row -->

			<!-- 
				Gabriel Shalom
			 -->
			<?php $count++; ?>
			<div class="row" id="shalom">
				<div class="speaker_info col-md-6 col-xs-12 <?php if($count%2 == 0) {echo "col-md-push-6";} ?>">
					<div class="description col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0" >
						<h2>Gabriel Shalom</h2>
						<p>Gabriel Shalom (US/UK) is an artist living and working in Berlin, Germany. His practice combines elements of experimental cinema, video art and musique concrète. He explores the hidden musicality in everyday objects, instruments and situations, using music as a vehicle for the transformation of the mundane into transcendent compositions and patterns. His 2014 audiovisual EP "<a href="http://facesofn.com/" target="_blank">Faces of N.</a>" has been compared to the music of Matthew Herbert and Matmos by the editor of Italian Rolling Stone. He has guest lectured on <a href="http://gabrielshalom.com/theory" target="_blank">Hypercubism</a>, his theory of object oriented aesthetics, at institutions such as the Paris Sorbonne, the Finnish Academy of Fine Arts, and the Bauhaus University, Weimar.</p>
						<p>As a director/composer, he has been commissioned by brands such as MINI, Sephora, Sony and BMW Italy. He is the creative director of <a href="http://ks12.net" target="_blank">KS12</a>. He is a member of the ADC Young Guns class of 2012 and a fellow of the Salzburg Global Seminar. In collaboration with designer Patrizia Kommerell and inventor Jay Cousins he is the producer of a <a href="http://betabook.co" target="_blank">whiteboard tablet</a> set for a global product launch in autumn 2014.</p>
						<img class="portrait img-circle" src="img/speakers/shalom_portrait.jpg" />
						<div class="website"><a href="http://gabrielshalom.com" target="_blank">gabrielshalom.com</a></div>
						<div id="shalom_small" style="height:400px; margin-top:20px;" class="visible-sm visible-xs img-responsive" style="z-index:0;"></div>
					</div> <!-- /description -->
				</div> <!-- /speaker_info -->	
				<div id="shalom_image" class="speaker_images col-md-6 hidden-sm hidden-xs <?php if($count%2 == 0) {echo "col-md-pull-6";} ?>">					
					<nav class="nav_images <?php if($count%2 == 0) {echo "left";} ?>">
						<a href="javascript:previousImage('shalom')"><span class="glyphicon glyphicon-chevron-left"></span></a>
						<a href="javascript:nextImage('shalom')"><span class="glyphicon glyphicon-chevron-right"></span></a>
						images
					</nav>
				</div> <!-- /speaker_images -->			
			</div> <!-- /row -->	


			<!-- 
				Smigla-Bobinski
			 -->
			<?php $count++; ?>
			<div class="row" id="smigla-bobinski">
				<div class="speaker_info col-md-6 col-xs-12 <?php if($count%2 == 0) {echo "col-md-push-6";} ?>">
					<div class="description col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0" >
						<h2>Karina Smigla-Bobinski</h2>
						<p>Karina Smigla-Bobinski works as an intermedia artist with analogue and digital media. She produces and collaborates on projects ranging from interactive and mixed reality art in form of installations, objects, in-situ&online-art-projects, art interventions and multimedia physical theatre performances, to digital and traditional painting, analogue interactive installations or kinetic sculptures.</p>
						<p>Since 2013 she is member of TheDreamTeam by DiBari Innovation Design, a unique Associated Studio bringing together architects, artists and designers from all over the world to designs the city of the future, today. She is also an lecturer in the Department of Art and Design at the University of Applied Sciences in Augsburg (Germany).</p>
						<img class="portrait img-circle" src="img/speakers/smigla-bobinski_portrait.jpg" />
						<div class="website"><a href="http://www.smigla-bobinski.com" target="_blank">smigla-bobinski.com</a></div>
						<div id="smigla-bobinski_small" style="height:400px; margin-top:20px;" class="visible-sm visible-xs img-responsive" style="z-index:0;"></div>
						
					</div> <!-- /description -->
				</div> <!-- /speaker_info -->

				<div id="smigla-bobinski_image" class="speaker_images col-md-6 hidden-sm hidden-xs <?php if($count%2 == 0) {echo "col-md-pull-6";} ?>">					
					<nav class="nav_images <?php if($count%2 == 0) {echo "left";} ?>">
						<a href="javascript:previousImage('smigla-bobinski')"><span class="glyphicon glyphicon-chevron-left"></span></a>
						<a href="javascript:nextImage('smigla-bobinski')"><span class="glyphicon glyphicon-chevron-right"></span></a>
						images
					</nav>
				</div> <!-- /speaker_images -->
			</div> <!-- /row -->	


			<!-- 
				UVA
			 -->
			<?php $count++; ?>
			<div class="row" id="uva"> 
				<div class="speaker_info col-md-6 col-xs-12 <?php if($count%2 == 0) {echo "col-md-push-6";} ?>">
					<div class="description col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
						<h2>United Visual Artists</h2>
						<p>UVA is a London based art practice that combines a wide range of disciplines including sculpture, installation, live performance, and architecture. The studio has an open approach to collaboration, uniting diverse skills to continuously evolve new technologies and materials, which in turn suggest new artistic directions.</p>
						<p>The studio’s lines of enquiry include the tension between real and synthesised experiences – the questioning of our relationship with technology, and the creation of phenomena that transcend the purely physical. In all their work, they aim to distill complexity down to its essence. Based in London, UVA was founded in 2003 by Matthew Clark, Chris Bird and Ash Nehru.</p>
						<div class="website"><a href="http://uva.co.uk" target="_blank">uva.co.uk</a></div>
						<div id="uva_small" style="height:400px; margin-top:20px;" class="visible-sm visible-xs img-responsive" style="z-index:0;"></div>
					</div> <!-- /description -->
				</div> <!-- /speaker_info -->
				<div id="uva_image" class="speaker_images col-md-6 hidden-sm hidden-xs <?php if($count%2 == 0) {echo "col-md-pull-6";} ?>">			
					<nav class="nav_images <?php if($count%2 == 0) {echo "left";} ?>">
						<a href="javascript:previousImage('uva')"><span class="glyphicon glyphicon-chevron-left"></span></a>
						<a href="javascript:nextImage('uva')"><span class="glyphicon glyphicon-chevron-right"></span></a>
						images
					</nav>
				</div> <!-- /speaker_images -->
			</div> <!-- /row -->

			<!-- 
				Filip Visnjic
			 -->
			<?php $count++; ?>
			<div class="row" id="visnjic"> 
				<div class="speaker_info col-md-6 col-xs-12 <?php if($count%2 == 0) {echo "col-md-push-6";} ?>">
					<div class="description col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
						<h2>Filip Visnjic</h2>
						<p>Filip Visnjic is an architect, lecturer, curator and a new media technologist born in Belgrade now living in London. He specialises in directing web, new media and architectural projects while also contributing to a number of blogs and magazines about art, design and technology.</p>
						<p>He is an editor-in-chief at <a href="http://www.creativeapplications.net/" target="_blank">CreativeApplications.Net</a>, co-founder and curator of <a href="http://resonate.io/" target="_blank">Resonate Festival</a>, editorial director of <a href="http://holo-magazine.com/" target="_blank">HOLO Magazine</a> and he lectures at a number of universities in the UK.</p>
						<img class="portrait img-circle" src="img/speakers/visnjic_portrait.jpg" />
						<div class="website"><a href="http://fvda.co.uk" target="_blank">fvda.co.uk</a></div>
						<div id="visnjic_small" style="height:400px; margin-top:20px;" class="visible-sm visible-xs img-responsive" style="z-index:0;"></div>
					</div> <!-- /description -->
				</div> <!-- /speaker_info -->

				<div id="visnjic_image" class="speaker_images col-md-6 hidden-sm hidden-xs <?php if($count%2 == 0) {echo "col-md-pull-6";} ?>">			
					<nav class="nav_images <?php if($count%2 == 0) {echo "left";} ?>">
						<a href="javascript:previousImage('visnjic')"><span class="glyphicon glyphicon-chevron-left"></span></a>
						<a href="javascript:nextImage('visnjic')"><span class="glyphicon glyphicon-chevron-right"></span></a>
						images
					</nav>
				</div> <!-- /speaker_images -->
			</div> <!-- /row -->

			<!-- 
				ALICE WANG
			 -->
			<?php $count++; ?>
			<div class="row" id="wang"> 
				<div class="speaker_info col-md-6 col-xs-12 <?php if($count%2 == 0) {echo "col-md-push-6";} ?>">
					<div class="description col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
						<h2>Alice Wang</h2>
						<p>Alice Wang graduated from the Royal College of Art, MA Design Interactions. With a background in BA Product Design from Central St. Martins, her work has been invited to participate in majour international art and design events such as the Milan Furniture Fair – Salone Satellite, Beijing’s Reshaping History, Today Art Museum, Design Museum Holon in Israel, Shanghai Art Museum, London Design Week and many more. She was also awarded the Conran Foundation Award in the year 2008, personally selected by Terrance Conran and Sebastian Conran as one of the most outstanding graduate of the year. Alice is now the director Alice Wang Design in Taipei, Taiwan.</p> 
						<p>Alice Wang’s work ranges from the Fast Typing Keyboard to White Lies weighing scales to Grass Scanners that tell you how green your front garden is, all illustrating the ironic and absurd habits and behaviours that lay deep among all of us. Alice uses design as a language to explore social issues; to observe and remind us about humans’ complex emotions; uses parody and irony to make people laugh and self-reflect.</p>
						<img class="portrait img-circle" src="img/speakers/wang_portrait.jpg" />
						<div class="website"><a href="http://www.alice-wang.com" target="_blank">alice-wang.com</a></div>
						<div id="wang_small" style="height:400px; margin-top:20px;" class="visible-sm visible-xs img-responsive" style="z-index:0;"></div>
					</div> <!-- /description -->
				</div> <!-- /speaker_info -->
				<div id="wang_image" class="speaker_images col-md-6 hidden-sm hidden-xs <?php if($count%2 == 0) {echo "col-md-pull-6";} ?>">			
					<nav class="nav_images <?php if($count%2 == 0) {echo "left";} ?>">
						<a href="javascript:previousImage('wang')"><span class="glyphicon glyphicon-chevron-left"></span></a>
						<a href="javascript:nextImage('wang')"><span class="glyphicon glyphicon-chevron-right"></span></a>
						images
					</nav>
				</div> <!-- /speaker_images -->
			</div> <!-- /row -->

			<?php /* 
			<!-- 
				Gösta Wellmer
			 -->
			<?php $count++; ?>
			<div class="row" id="wellmer"> 
				<div class="speaker_info col-md-6 col-xs-12 <?php if($count%2 == 0) {echo "col-md-push-6";} ?>">
					<div class="description col-sm-8 col-sm-offset-2 col-xs-12 col-xs-offset-0">
						<h2>Gösta Wellmer</h2>
						<p></p>
						<img class="portrait img-circle" src="img/speakers/wellmer_portrait.jpg" />
						<div class="website"><a href="http://www.alice-wellmer.com" target="_blank">alice-wellmer.com</a></div>
						<div id="wellmer_small" style="height:400px; margin-top:20px;" class="visible-sm visible-xs img-responsive" style="z-index:0;"></div>
					</div> <!-- /description -->
				</div> <!-- /speaker_info -->

				<div id="wellmer_image" class="speaker_images col-md-6 hidden-sm hidden-xs <?php if($count%2 == 0) {echo "col-md-pull-6";} ?>">			
					<nav class="nav_images <?php if($count%2 == 0) {echo "left";} ?>">
						<a href="javascript:previousImage('wellmer')"><span class="glyphicon glyphicon-chevron-left"></span></a>
						<a href="javascript:nextImage('wellmer')"><span class="glyphicon glyphicon-chevron-right"></span></a>
						images
					</nav>
				</div> <!-- /speaker_images -->
			</div> <!-- /row -->
			
			*/ ?>

		</div> <!-- /container -->
<?php require_once('footer.php'); ?> 
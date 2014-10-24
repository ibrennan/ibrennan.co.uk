<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ian Brennan - Hack, Build, Innovate</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=320" />

    <meta property="og:site_name" content="Ian Brennan" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://ibrennan.co.uk" />
	<meta property="og:image" content="http://ibrennan.co.uk/profile.jpg" />
	<meta property="og:title" content="Ian Brennan - Hack, Build, Innovate" />
	<meta property="og:description" content="I'm a passionate Creative Technologist who heads up the development team at AnalogFolk. Leading a team of talented developers who regularly ship exciting projects across for a wide variety of clients." />

	<!--###################################################################

	Hi there, if you'd like to look a little deeper then you can view the
	entire code base on GitHub: https://github.com/ibrennan/ibrennan.co.uk

	####################################################################-->

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
	<link href='_includes/css/main.css?v=3' rel='stylesheet' type='text/css'>

    <script src="_includes/js/vendor/modernizr.js"></script>

</head>
<body>
<script>
(function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
(i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
})(window,document,'script','//www.google-analytics.com/analytics.js','ga');

ga('create', 'UA-17477102-1', 'ibrennan.co.uk');
ga('send', 'pageview');

</script>
	<header>

		<div class="grid">

			<div class="grid-12">

				<a href="/" title="Ian Brennan - Hack, Build, Innovate" class="logo">Ian Brennan</a>

				<a href="#mobile-nav" class="fa fa-bars mobile-nav">Menu</a>

				<nav id="mobile-nav">
					<ul>
						<li><a href="#" title="Home">Home</a></li>
						<li><a href="#blog" title="Blog">Blog</a></li>
						<li><a href="#projects" title="Projects">Hacks &amp; Projects</a></li>
						<li><a href="#portfolio" title="Portfolio">Portfolio</a></li>
						<li><a href="#about" title="About">About</a></li>
					</ul>
				</nav>

			</div><!-- .grid-12 -->

		</div><!-- .grid -->

	</header>

	<section class="intro">

		<div class="pattern-fill"></div>

		<div class="grid">

			<div class="grid-12">

				<a href="https://medium.com/@nannerb/pixel-perfect-design-and-development-on-the-iphone-6-and-6-plus-11dac9f4fa4e" title="Pixel perfect design and development on the iPhone 6 and 6 Plus">

					<span class="sub">Blog</span>

					<h2>Pixel perfect design and development on the iPhone 6 and 6 Plus</h2>

					<p>Apple have introduced support for 3x images on the iPhone 6 Plus, find out what this means for you...</p>

				</a>

			</div><!-- .grid-12 -->

		</div><!-- .grid -->

	</section><!-- .intro -->

	<section class="blog" id="blog">

		<div class="grid">

			<article class="grid-4">
				<a href="https://medium.com/@nannerb/mind-controlled-google-glass-c415e7f991a7" title="Mind controlled Google Glass">
					<h3>Mind controlled Google Glass, no hands, no voice, just thoughts.</h3>
					<img src="_includes/images/blog/9.jpg" alt="Mind controlled Google Glass" />
				</a>
				<p>No touching, no awkward voice controls, just think of what you want to do and away you go.</p>
				<a href="https://medium.com/@nannerb/mind-controlled-google-glass-c415e7f991a7" title="Mind controlled Google Glass">Read article <i class="fa fa-arrow-circle-o-right"></i></a>
	        </article>

			<article class="grid-4">
				<a href="http://www.creativebloq.com/netmag/google-io-8-biggest-announcements-impact-developers-61412137" title="Google I/O: the 8 biggest announcements that impact developers">
					<h3>Google I/O: The 8 biggest announcements that impact developers</h3>
					<img src="_includes/images/blog/8.jpg" alt="Google I/O: the 8 biggest announcements that impact developers" />
				</a>
				<p>Big announcements from Google's annual developer conference, and what they mean to you. Written for Net Magazine.</p>
				<a href="http://www.creativebloq.com/netmag/google-io-8-biggest-announcements-impact-developers-61412137" title="Google I/O: the 8 biggest announcements that impact developers">Read article <i class="fa fa-arrow-circle-o-right"></i></a>
	        </article>

	        <article class="grid-4">
				<a href="http://www.marketingmagazine.co.uk/article/1300527/launch-hype-google-glass-enough-drop-glasshole-stigma" title="Is the launch hype of Google Glass enough to drop the 'glasshole' stigma?">
					<h3>Is the launch hype of Google Glass enough to drop the 'glasshole' stigma?</h3>
					<img src="_includes/images/blog/7.jpg" alt="Is the launch hype of Google Glass enough to drop the 'glasshole' stigma?" />
				</a>
				<p>Will the £1,000 wearable device will deliver any real world value to brands? Written for Marketing.</p>
				<a href="http://www.marketingmagazine.co.uk/article/1300527/launch-hype-google-glass-enough-drop-glasshole-stigma" title="Is the launch hype of Google Glass enough to drop the 'glasshole' stigma?">Read article <i class="fa fa-arrow-circle-o-right"></i></a>
	        </article>

			<?php
			// Because Medium doesn't return images in the xml feed, I've decided to not do the below
			// and instead take a manual approach.
			/*
				include("blog-feed/fetch.php");

				$i = 1;

				foreach ($xml->channel->item as $val) {
		
			        echo '
			        <article class="grid-4">
						<a href="'.$val->link.'" title="'.$val->title.'">
							<h3>'.$val->title.'</h3>
						</a>
						'.$val->description.'
						<a href="'.$val->link.'" title="'.$val->title.'">Read article <i class="fa fa-arrow-circle-o-right"></i></a>
			        </article>';

			        if ($i++ == 6) break;

				};
			*/
			?>

			<div class="grid-12">

				<a href="https://medium.com/@nannerb" title="Ian Brennan blog on Medium" class="logo-medium">More articles <i class="fa fa-arrow-circle-o-right"></i></a>

			</div><!-- .grid-12 -->

			<div class="grid-12">

				<hr>

			</div><!-- .grid-12 -->

		</div><!-- .grid -->

	</section><!-- .blog -->

	<section class="projects" id="projects">

		<div class="grid">

			<div class="grid-12">
				<h1>Hacks &amp; Projects</h1>
				<p>Some of the fun hacks, side projects, and expirments I've worked on.</p>
				<p>If you'd like to collaborate, or extend some of these further, then <a href="#about">get in touch!</a></p>
			</div>

			<article class="grid-4">
				<a href="http://instagram.com/p/tk5HETChew/?utm_source=partner&utm_medium=embed&utm_campaign=video&modal=true" title="iBeacons + Apple Swift">
					<h3>iBeacons + Apple Swift</h3>
					<img src="_includes/images/projects/ibeacons.jpg" alt="http://instagram.com/p/tk5HETChew/?utm_source=partner&utm_medium=embed&utm_campaign=video&modal=true" />
				</a>
				<p>Developed an application in Swift for iPhone's that delivers information as you pass in and out of Bluetooth beacon range. Completed in under 8 hours.</p>
				<a href="http://instagram.com/p/tk5HETChew/?utm_source=partner&utm_medium=embed&utm_campaign=video&modal=true" title="iBeacons + Apple Swift">View on Instagram <i class="fa fa-arrow-circle-o-right"></i></a>
	        </article>

	        <article class="grid-4">
				<a href="http://instagram.com/p/nK_JX6Chec/?utm_source=partner&utm_medium=embed&utm_campaign=video&modal=true" title="CSS3 Splitflap animations">
					<h3>CSS3 Splitflap animations</h3>
					<img src="_includes/images/projects/splitflap.jpg" alt="CSS3 Splitflap animations" />
				</a>
				<p>A split flap style animation that manipulated dom elements and allows for data visualisation.</p>
				<a href="http://instagram.com/p/nK_JX6Chec/?utm_source=partner&utm_medium=embed&utm_campaign=video&modal=true" title="CSS3 Splitflap animations">View on Instagram <i class="fa fa-arrow-circle-o-right"></i></a>
	        </article>

	        <article class="grid-4">
				<a href="https://scontent-a-lhr.xx.fbcdn.net/hvideo-xpa1/v/t43.1792-2/1737645_10151852323332452_1082960136_n.mp4?oh=11c490232cfaa331b3fb6fa445d16a58&oe=544A581A" title="LEAP Motion Colour Picker">
					<h3>LEAP Motion Colour Picker</h3>
					<img src="_includes/images/projects/colourpicker.jpg" alt="LEAP Motion Colour Picker" />
				</a>
				<p>Pick colours through gestures, JS to track the LEAP interaction, and a custom API to match RGB to actual Dulux colours.</p>
				<a href="https://scontent-a-lhr.xx.fbcdn.net/hvideo-xpa1/v/t43.1792-2/1737645_10151852323332452_1082960136_n.mp4?oh=11c490232cfaa331b3fb6fa445d16a58&oe=544A581A" title="LEAP Motion Colour Picker">View video <i class="fa fa-arrow-circle-o-right"></i></a>
	        </article>

	        <article class="grid-4">
				<a href="https://storify.com/nannerb/analogfolk-hack-festival" title="AnalogFolk Hack Festival on Storify">
					<h3>AnalogFolk Hack Festival</h3>
					<img src="_includes/images/projects/hack-festival.jpg" alt="AnalogFolk Hack Festival" />
				</a>
				<p>Organised a weekend long Hackathon at <a href="http://analogfolk.com/" target="_blank" title="AnalogFolk">AnalogFolk</a></p>
				<a href="https://storify.com/nannerb/analogfolk-hack-festival" title="AnalogFolk Hack Festival on Storify">View on Storify <i class="fa fa-arrow-circle-o-right"></i></a>
	        </article>

	        <article class="grid-4">
				<a href="https://vimeo.com/77587028" title="AnalogFolk LEAP interaction">
					<h3>AnalogFolk LEAP interaction</h3>
					<img src="_includes/images/projects/afleap.jpg" alt="AnalogFolk LEAP interaction" />
				</a>
				<p>Control the AnalogFolk website through LEAP Motion gestures.</p>
				<a href="https://vimeo.com/77587028" title="AnalogFolk LEAP interaction">View video <i class="fa fa-arrow-circle-o-right"></i></a>
	        </article>

			<article class="grid-4">
				<a href="https://github.com/ibrennan/critical-css-casperjs" title="Critical CSS - CasperJS">
					<h3>Critical CSS - CasperJS</h3>
					<img src="_includes/images/projects/sassian.jpg" alt="Critical CSS - CasperJS" />
				</a>
				<p>A DRY, lightweight, and powerful Compass boilerplate</p>
				<a href="https://github.com/ibrennan/critical-css-casperjs" title="Critical CSS - CasperJS">View on Github <i class="fa fa-arrow-circle-o-right"></i></a>
	        </article>

	        <article class="grid-4">
				<a href="https://github.com/ibrennan/automation" title="CasperJS Tests and Automation">
					<h3>CasperJS Tests and Automation</h3>
					<img src="_includes/images/projects/automation.jpg" alt="CasperJS Tests and Automation" />
				</a>
				<p>Various automated CasperJS scripts for testing and taking the leg work out of tasks</p>
				<a href="https://github.com/ibrennan/automation" title="CasperJS Tests and Automation">View on Github <i class="fa fa-arrow-circle-o-right"></i></a>
	        </article>

	        

			<div class="grid-12">

				<hr>

			</div><!-- .grid-12 -->

		</div><!-- .grid -->

	</section><!-- .projects -->

	<section class="projects" id="portfolio">

		<div class="grid">

			<div class="grid-12">
				<h1>Portfolio</h1>
			</div>

			<article class="grid-4">
				<h3>Data Visualisation</h3>
				<img src="_includes/images/projects/dulux-data.jpg" alt="Data Visualisation" />

				<p>Born from a hack experiment, each time a colour is viewed on Dulux.co.uk, one of the split flaps animates and gives a real time representation of colour trends. Tech used: CSS3, live data streaming and modelling (JS and PHP).</p>
	        </article>

			<article class="grid-4">
			
				<h3>Dulux MixLab</h3>
				<img src="_includes/images/projects/dulux-mixlab.jpg" alt="Dulux MixLab" />

				<p>Concept and Technical Leadership at <a href="http://analogfolk.com/" target="_blank" title="AnalogFolk">AnalogFolk</a> for an offline, touch screen, interactive application. Rolled out across 100's of stores UK wide. Tech used: Sass, Angular JS, PHP, API Modelling</p>
	        </article>

	        <article class="grid-4">
				<a href="http://www.analogfolk.com" title="AnalogFolk">
					<h3>AnalogFolk</h3>
					<img src="_includes/images/projects/analogfolk.jpg" alt="AnalogFolk" />
				</a>
				<p>Lead the team of 3 developers to build and deploy the new <a href="http://analogfolk.com/" target="_blank" title="AnalogFolk">AnalogFolk</a> website. Tech used: PHP, Wordpress, Sass, History API, JS</p>
				<a href="http://www.analogfolk.com" title="AnalogFolk">View website <i class="fa fa-arrow-circle-o-right"></i></a>
	        </article>

			<article class="grid-4">
				<a href="http://www.duluxtradepaintexpert.co.uk/" title="Dulux Trade Paint Expert">
					<h3>Dulux Trade Paint Expert</h3>
					<img src="_includes/images/projects/dulux-trade-paint-expert.jpg" alt="Dulux Trade Paint Expert" />
				</a>
				<p>Lead the team of 7 developers at <a href="http://analogfolk.com/" target="_blank" title="AnalogFolk">AnalogFolk</a> to create a large platform build. Tech used: Sass, Grunt, Backbone, JSP, PHP, API Modelling</p>
				<a href="http://www.duluxtradepaintexpert.co.uk/" title="Dulux Trade Paint Expert">View website <i class="fa fa-arrow-circle-o-right"></i></a>
	        </article>

	        <article class="grid-4">
				<a href="http://www.dulux.co.uk/" title="Dulux.co.uk">
					<h3>Dulux.co.uk</h3>
					<img src="_includes/images/projects/dulux.jpg" alt="Dulux.co.uk" />
				</a>
				<p>Implemented infrastructure and process to ensure the retained maintenance team at <a href="http://analogfolk.com/" target="_blank" title="AnalogFolk">AnalogFolk</a> can perform weekly releases to the platform.</p>
				<a href="http://www.dulux.co.uk/" title="Dulux.co.uk">View website <i class="fa fa-arrow-circle-o-right"></i></a>
	        </article>

			<div class="grid-12">

				<hr>

			</div><!-- .grid-12 -->

		</div><!-- .grid -->

	</section><!-- #portfolio -->

	

	<section class="about" id="about">

		<div class="grid">

			<div class="grid-3">

				<img src="_includes/images/profile.jpg" alt="Ian Brennan">

			</div>

			<div class="grid-8">

				<h2>Ian Brennan - Head of Technical Concepting / AnalogFolk</h2>

				<p>I'm a passionate Creative Technologist who heads up technical concepting at AnalogFolk. Leading a team of talented developers who regularly ship exciting projects across for a wide variety of clients.</p>

				<p>Using languages and tools such as JavaScript, Sass, CasperJS, PHP, Node, and Grunt, I like to rapidly prototype technically creative products and ideas.</p>

				<p>You can follow me on <a href="https://twitter.com/nannerb" title="Ian Brennan - Twitter">Twitter</a> and <a href="http://instagram.com/ibrennan" title="Ian Brennan - Instagram">Instagram</a>, or read more about my career on <a href="http://uk.linkedin.com/pub/ian-brennan/80/632/224" title="Ian Brennan - LinkedIn">LinkedIn</a>.</p>

			</div>

			<div class="grid-12">

				<hr>

			</div><!-- .grid-12 -->

		</div><!-- .grid -->

	</section><!-- .about -->

	<footer>


	</footer>

	<script src="_includes/js/vendor/jquery.js"></script>
	<script src="_includes/js/main.js"></script>
</body>
</html>
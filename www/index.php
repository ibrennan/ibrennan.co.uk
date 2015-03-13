<?php
	include("blog-feed/fetch.php");
	function titleParse($title){
		$title = $title;
		$pos = strpos($title, '" in');
		if($pos){
			$title = substr($title, 0, $pos);
			$title = str_replace('"', '', $title);
		};
		return $title;
	};
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>Ian Brennan - Hack, Build, Share</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=320" />

    <meta property="og:site_name" content="Ian Brennan" />
	<meta property="og:type" content="website" />
	<meta property="og:url" content="http://ibrennan.co.uk" />
	<meta property="og:image" content="http://ibrennan.co.uk/_includes/images/profile.jpg" />
	<meta property="og:title" content="Ian Brennan - Hack, Build, Share" />
	<meta property="og:description" content="I'm a passionate Creative Technologist who heads up technical concepting at AnalogFolk. Leading a team of talented developers who regularly ship exciting projects across for a wide variety of clients." />

	<!--###################################################################

	Hi there, if you'd like to look a little deeper then you can view the
	entire code base on GitHub: https://github.com/ibrennan/ibrennan.co.uk

	####################################################################-->

	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,600' rel='stylesheet' type='text/css'>
	<link href='_includes/css/main.css?v=6' rel='stylesheet' type='text/css'>

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
					<a href="#" class="fa fa-times-circle"></a>
					<ul>
						<li><a href="#" title="Home">Home</a></li>
						<li><a href="#blog" title="Blog">Blog</a></li>
						<li><a href="#publications" title="Publications">Publications</a></li>
						<li><a href="#projects" title="Projects">Hacks &amp; Projects</a></li>
						<li><a href="#portfolio" title="Portfolio">Portfolio</a></li>
						<li><a href="#about" title="About">About</a></li>
					</ul>
				</nav>

			</div><!-- .grid-12 -->

		</div><!-- .grid -->

	</header>

	<section class="intro">
		<?php $introArticle = $xml->channel->item[0]; ?>

		<div class="pattern-fill"></div>

		<div class="grid">

			<div class="grid-12">

				<div class="intro-text">

					<a target="_blank" href="<?php echo $introArticle->link ?>" title="<?php echo $introArticle->title ?>">

						<span class="sub">Blog</span>

						<h2><?php echo titleParse($introArticle->title); ?></h2>

					</a>

					<?php echo $introArticle->description ?>

					<a href="<?php echo $introArticle->link ?>" title="<?php echo $introArticle->title ?>">Read article <i class="fa fa-arrow-circle-o-right"></i></a>

				</div>

			</div><!-- .grid-12 -->

		</div><!-- .grid -->

	</section><!-- .intro -->

	<section class="blog" id="blog">

		<div class="grid">

			<?php
			
				$i = 0;

				foreach ($xml->channel->item as $val) {

					$i++;

					if ($i === 1 || $i > 5) continue;

			        echo '
			        <article class="grid-6">
						<a href="'.$val->link.'" title="'.$val->title.'">
							<h3>'.titleParse($val->title).'</h3>
						</a>
						'.$val->description.'
						<a href="'.$val->link.'" title="'.$val->title.'">Read article <i class="fa fa-arrow-circle-o-right"></i></a>
			        </article>';

				};
			
			?>

			<div class="grid-12">

				<a target="_blank" href="https://medium.com/@nannerb" title="Ian Brennan blog on Medium" class="logo-medium">More articles <i class="fa fa-arrow-circle-o-right"></i></a>

			</div><!-- .grid-12 -->

		</div><!-- .grid -->

	</section><!-- .blog -->

	<section class="publications" id="publications">

		<div class="grid">

			<div class="grid-12">
				<h1>Publications</h1>
			</div>

			<article class="grid-4">
				<a target="_blank" href="http://www.marketingmagazine.co.uk/article/1337497/apple-watch-launch-7-things-marketers-need-know" title="Apple Watch launch: 7 things marketers need to know">
					<h3>Apple Watch launch: 7 things marketers need to know</h3>

					<i class="logo logo-marketing"></i> View article <i class="fa fa-arrow-circle-o-right"></i>
				</a>
	        </article>

	        <article class="grid-4">
				<a target="_blank" href="http://www.marketingmagazine.co.uk/article/1330566/microsoft-back-track-thanks-holograms-new-web-browsers" title="Microsoft is 'back on track' thanks to holograms and new web browsers">
					<h3>Microsoft is 'back on track' thanks to holograms and new web browsers</h3>

					<i class="logo logo-marketing"></i> View article <i class="fa fa-arrow-circle-o-right"></i>
				</a>
	        </article>

	        <article class="grid-4">
				<a target="_blank" href="http://www.creativebloq.com/netmag/how-hack-better-music-festival-71412315" title="How to hack a better music festival">
					<h3>How to hack a better music festival</h3>

					<i class="logo logo-creativebloq"></i> View article <i class="fa fa-arrow-circle-o-right"></i>
				</a>
	        </article>

	        <article class="grid-4 clear">
				<a target="_blank" href="http://analogfolk.com/blog/our-top-technology-picks-from-ces-2015/" title="Top technology picks from CES 2015">
					<h3>Top technology picks from CES 2015</h3>

					<i class="logo logo-af"></i> View article <i class="fa fa-arrow-circle-o-right"></i>
				</a>
	        </article>

	        <article class="grid-4">
				<a target="_blank" href="http://www.creativebloq.com/netmag/google-io-8-biggest-announcements-impact-developers-61412137" title="Google I/O: the 8 biggest announcements that impact developers">
					<h3>Google I/O: the 8 biggest announcements that impact developers</h3>

					<i class="logo logo-creativebloq"></i> View article <i class="fa fa-arrow-circle-o-right"></i>
				</a>
	        </article>

		</div><!-- .grid -->

	</section><!-- .publications -->

	<section class="projects" id="projects">

		<div class="grid">

			<div class="grid-12">
				<h1>Hacks &amp; Projects</h1>
				<p>Some of the fun hacks, side projects, and expirments I've worked on.</p>
				<p>If you'd like to collaborate, or extend some of these further, then <a href="#about">get in touch!</a></p>
			</div>

			<article class="grid-4">
				<a target="_blank" href="http://www.theforceimagined.com/" title="The Force Imagined">
					<h3>The Force Imagined</h3>
					<img src="_includes/images/projects/starwars.jpg" alt="The Force Imagined" />
				</a>
				<p>From concept to delivery in 6 hours, technologies used: Parse (Backend + Cloud Code), Backbone.js, Grunt, Sass</p>
				<a target="_blank" href="http://www.theforceimagined.com/" title="The Force Imagined">View website <i class="fa fa-arrow-circle-o-right"></i></a>
	        </article>

			<article class="grid-4">
				<a target="_blank" href="http://instagram.com/p/tk5HETChew/?utm_source=partner&utm_medium=embed&utm_campaign=video&modal=true" title="iBeacons + Apple Swift">
					<h3>iBeacons + Apple Swift</h3>
					<img src="_includes/images/projects/ibeacons.jpg" alt="iBeacons + Apple Swift" />
				</a>
				<p>Developed an application in Swift for iPhone's that delivers information as you pass in and out of Bluetooth beacon range. Completed in under 8 hours.</p>
				<a target="_blank" href="http://instagram.com/p/tk5HETChew/?utm_source=partner&utm_medium=embed&utm_campaign=video&modal=true" title="iBeacons + Apple Swift">View on Instagram <i class="fa fa-arrow-circle-o-right"></i></a>
	        </article>

	        <article class="grid-4">
				<a target="_blank" href="http://instagram.com/p/nK_JX6Chec/?utm_source=partner&utm_medium=embed&utm_campaign=video&modal=true" title="CSS3 Splitflap animations">
					<h3>CSS3 Splitflap animations</h3>
					<img src="_includes/images/projects/splitflap.jpg" alt="CSS3 Splitflap animations" />
				</a>
				<p>A split flap style animation that manipulated dom elements and allows for data visualisation.</p>
				<a target="_blank" href="http://instagram.com/p/nK_JX6Chec/?utm_source=partner&utm_medium=embed&utm_campaign=video&modal=true" title="CSS3 Splitflap animations">View on Instagram <i class="fa fa-arrow-circle-o-right"></i></a>
	        </article>

	        <article class="grid-4 clear">
				<a target="_blank" href="http://ibrennan.co.uk/leap-motion-colour-picker.mp4" title="LEAP Motion Colour Picker">
					<h3>LEAP Motion Colour Picker</h3>
					<img src="_includes/images/projects/colourpicker.jpg" alt="LEAP Motion Colour Picker" />
				</a>
				<p>Pick colours through gestures, JS to track the LEAP interaction, and a custom API to match RGB to actual Dulux colours.</p>
				<a target="_blank" href="http://ibrennan.co.uk/leap-motion-colour-picker.mp4" title="LEAP Motion Colour Picker">View video <i class="fa fa-arrow-circle-o-right"></i></a>
	        </article>

	        <article class="grid-4">
				<a target="_blank" href="https://storify.com/nannerb/analogfolk-hack-festival" title="AnalogFolk Hack Festival on Storify">
					<h3>AnalogFolk Hack Festival</h3>
					<img src="_includes/images/projects/hack-festival.jpg" alt="AnalogFolk Hack Festival" />
				</a>
				<p>Organised a weekend long Hackathon at <a target="_blank" href="http://analogfolk.com/" target="_blank" title="AnalogFolk">AnalogFolk</a></p>
				<a target="_blank" href="https://storify.com/nannerb/analogfolk-hack-festival" title="AnalogFolk Hack Festival on Storify">View on Storify <i class="fa fa-arrow-circle-o-right"></i></a>
	        </article>

	        <article class="grid-4">
				<a target="_blank" href="https://vimeo.com/77587028" title="AnalogFolk LEAP interaction">
					<h3>AnalogFolk LEAP interaction</h3>
					<img src="_includes/images/projects/afleap.jpg" alt="AnalogFolk LEAP interaction" />
				</a>
				<p>Control the AnalogFolk website through LEAP Motion gestures.</p>
				<a target="_blank" href="https://vimeo.com/77587028" title="AnalogFolk LEAP interaction">View video <i class="fa fa-arrow-circle-o-right"></i></a>
	        </article>

			<article class="grid-4 clear">
				<a target="_blank" href="https://github.com/ibrennan/critical-css-casperjs" title="Critical CSS - CasperJS">
					<h3>Critical CSS - CasperJS</h3>
					<img src="_includes/images/projects/sassian.jpg" alt="Critical CSS - CasperJS" />
				</a>
				<p>A DRY, lightweight, and powerful Compass boilerplate</p>
				<a target="_blank" href="https://github.com/ibrennan/critical-css-casperjs" title="Critical CSS - CasperJS">View on Github <i class="fa fa-arrow-circle-o-right"></i></a>
	        </article>

	        <article class="grid-4">
				<a target="_blank" href="https://github.com/ibrennan/automation" title="CasperJS Tests and Automation">
					<h3>CasperJS Tests and Automation</h3>
					<img src="_includes/images/projects/automation.jpg" alt="CasperJS Tests and Automation" />
				</a>
				<p>Various automated CasperJS scripts for testing and taking the leg work out of tasks</p>
				<a target="_blank" href="https://github.com/ibrennan/automation" title="CasperJS Tests and Automation">View on Github <i class="fa fa-arrow-circle-o-right"></i></a>
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
	        	<a target="_blank" href="https://apps.facebook.com/goofysparkguide/" title="Disney Goofy's Park Guide">
					<h3>Disney Goofy's Park Guide</h3>
					<img src="_includes/images/projects/disney.jpg" alt="Disney Goofy's Park Guide" />
				</a>
				<p>Create and share personalised Walt Disney World guides through this Goody themed Facebook App. Over a 6 month period, the app achieved: 50,000 users, 260,000 impressions, 3 minute average session duartion.</p>
	        	<a target="_blank" href="https://apps.facebook.com/goofysparkguide/" title="Disney Goofy's Park Guide">View Facebook App <i class="fa fa-arrow-circle-o-right"></i></a>
	        </article>

			<article class="grid-4">
				<a target="_blank" href="https://vimeo.com/109693943" title="Dulux MixLab">
					<h3>Dulux MixLab</h3>
					<img src="_includes/images/projects/dulux-mixlab.jpg" alt="Dulux MixLab" />
				</a>
				<p>Concept and Technical Leadership at <a target="_blank" href="http://analogfolk.com/" target="_blank" title="AnalogFolk">AnalogFolk</a> for an offline, touch screen, interactive application. Rolled out across 100's of stores UK wide. Tech used: Sass, Angular JS, PHP, API Modelling</p>
				<a target="_blank" href="https://vimeo.com/109693943" title="Dulux MixLab">View video <i class="fa fa-arrow-circle-o-right"></i></a>
	        </article>

	        <article class="grid-4 clear">
				<a target="_blank" href="http://www.analogfolk.com" title="AnalogFolk">
					<h3>AnalogFolk</h3>
					<img src="_includes/images/projects/analogfolk.jpg" alt="AnalogFolk" />
				</a>
				<p>Lead the team of 3 developers to build and deploy the new <a target="_blank" href="http://analogfolk.com/" target="_blank" title="AnalogFolk">AnalogFolk</a> website. Tech used: PHP, Wordpress, Sass, History API, JS</p>
				<a target="_blank" href="http://www.analogfolk.com" title="AnalogFolk">View website <i class="fa fa-arrow-circle-o-right"></i></a>
	        </article>

			<article class="grid-4">
				<a target="_blank" href="http://www.duluxtradepaintexpert.co.uk/" title="Dulux Trade Paint Expert">
					<h3>Dulux Trade Paint Expert</h3>
					<img src="_includes/images/projects/dulux-trade-paint-expert.jpg" alt="Dulux Trade Paint Expert" />
				</a>
				<p>Lead the team of 7 developers at <a target="_blank" href="http://analogfolk.com/" target="_blank" title="AnalogFolk">AnalogFolk</a> to create a large platform build. Tech used: Sass, Grunt, Backbone, JSP, PHP, API Modelling</p>
				<a target="_blank" href="http://www.duluxtradepaintexpert.co.uk/" title="Dulux Trade Paint Expert">View website <i class="fa fa-arrow-circle-o-right"></i></a>
	        </article>

	        <article class="grid-4">
				<a target="_blank" href="http://www.dulux.co.uk/" title="Dulux.co.uk">
					<h3>Dulux.co.uk</h3>
					<img src="_includes/images/projects/dulux.jpg" alt="Dulux.co.uk" />
				</a>
				<p>Implemented infrastructure and process to ensure the retained maintenance team at <a target="_blank" href="http://analogfolk.com/" target="_blank" title="AnalogFolk">AnalogFolk</a> can perform weekly releases to the platform.</p>
				<a target="_blank" href="http://www.dulux.co.uk/" title="Dulux.co.uk">View website <i class="fa fa-arrow-circle-o-right"></i></a>
	        </article>

			<div class="grid-12">

				<hr>

			</div><!-- .grid-12 -->

		</div><!-- .grid -->

	</section><!-- #portfolio -->

	

	<section class="about" id="about">

		<div class="grid">

			<div class="grid-3">

				<img src="_includes/images/profile.png" alt="Ian Brennan">

			</div>

			<div class="grid-8">

				<h2>Ian Brennan - Head of Technical Concepting / AnalogFolk</h2>

				<p>I'm a passionate Creative Technologist who heads up technical concepting at AnalogFolk. Leading a team of talented developers who regularly ship exciting projects across for a wide variety of clients.</p>

				<p>Using languages and tools such as JavaScript, Sass, CasperJS, PHP, Node, and Grunt, I like to rapidly prototype technically creative products and ideas.</p>

				<p>I strongly believe in sharing knowledge and code as often as possible. Which is why the source for this site, along with some of my other hacks and projects, is available for everyone to view on <a href="https://github.com/ibrennan" title="GitHub - Ian Brennan"  target="_blank">GitHub</a>.</p>

				<p>You can follow me on <a target="_blank" href="https://twitter.com/nannerb" title="Ian Brennan - Twitter">Twitter</a> and <a target="_blank" href="http://instagram.com/ibrennan" title="Ian Brennan - Instagram">Instagram</a>, or read more about my career on <a target="_blank" href="http://uk.linkedin.com/pub/ian-brennan/80/632/224" title="Ian Brennan - LinkedIn">LinkedIn</a>.</p>

			</div>

		</div><!-- .grid -->

	</section><!-- .about -->

	<footer>


	</footer>

	<script src="_includes/js/vendor/jquery.js"></script>
	<script src="_includes/js/main.js?v=6"></script>
</body>
</html>
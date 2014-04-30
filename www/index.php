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
	<link href='_includes/css/main.css?v=1' rel='stylesheet' type='text/css'>

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
						<li><a href="#about" title="About">About</a></li>
						<li><a href="#projects" title="Projects">Projects</a></li>
					</ul>
				</nav>

			</div><!-- .grid-12 -->

		</div><!-- .grid -->

	</header>

	<section class="intro">

		<div class="pattern-fill"></div>

		<div class="grid">

			<div class="grid-12">

				<a href="https://medium.com/p/8b7599cfd943" title="Facebook will start allowing users to log into third-party apps anonymously">

					<span class="sub">Blog</span>

					<h2>Facebook will start allowing users to log into third-party apps anonymously</h2>

				</a>

			</div><!-- .grid-12 -->

		</div><!-- .grid -->

	</section><!-- .intro -->

	<section class="blog" id="blog">

		<div class="grid">

			<article class="grid-4">
				<a href="https://medium.com/p/8b7599cfd943" title="Facebook will start allowing users to log into third-party apps anonymously">
					<h3>Facebook will allow users to log into apps anonymously</h3>
					<img src="_includes/images/blog/5.jpg" alt="Facebook will start allowing users to log into third-party apps anonymously" />
				</a>
				<p>Mark Zuckerberg has announced that Facebook users will soon be able to sign into third-party applications anonymously.</p>
				<a href="https://medium.com/p/8b7599cfd943" title="Facebook will start allowing users to log into third-party apps anonymously">Read article <i class="fa fa-arrow-circle-o-right"></i></a>
	        </article>

			<article class="grid-4">
				<a href="https://medium.com/p/197fad8c1840" title="Automated responsive screenshots">
					<h3>Automated responsive screenshots</h3>
					<img src="_includes/images/blog/4.jpg" alt="Automated responsive screenshots" />
				</a>
				<p>There's a problem with modular site development, the bigger your platform gets the harder it becomes to regression test.</p>
				<a href="https://medium.com/p/197fad8c1840" title="Automated responsive screenshots">Read article <i class="fa fa-arrow-circle-o-right"></i></a>
	        </article>

	        <article class="grid-4">
				<a href="https://medium.com/p/792aaa0f7287" title="Windows Phone 8 sales will surpass iOS within 24 months">
					<h3>Windows Phone 8 sales will surpass iOS within 24 months</h3>
					<img src="_includes/images/blog/3.jpg" alt="Windows Phone 8 sales will surpass iOS within 24 months" />
				</a>
				<p>Microsoft have got it right, they finally understand the connected world and are putting plans in place that will see them leap frog Apple…</p>
				<a href="https://medium.com/p/792aaa0f7287" title="Windows Phone 8 sales will surpass iOS within 24 months">Read article <i class="fa fa-arrow-circle-o-right"></i></a>
	        </article>

	        <article class="grid-4">
				<a href="https://medium.com/p/c7c922426911" title="Google Android Wear is here&nbsp;">
					<h3>Google Android Wear is here</h3>
					<img src="_includes/images/blog/2.jpg" alt="Google Android Wear is here" />
				</a>
				<p>Google’s approach to positioning itself as the global supplier of technology and services is clever.</p>
				<a href="https://medium.com/p/c7c922426911" title="Google Android Wear is here&nbsp;">Read article <i class="fa fa-arrow-circle-o-right"></i></a>
	        </article>

	        <article class="grid-4">
				<a href="https://medium.com/p/ef31bb65ced4" title="Gesture control has arrived">
					<h3>Gesture control has arrived</h3>
					<img src="_includes/images/blog/1.jpg" alt="Gesture control has arrived" />
				</a>
				<p>With recent developments in gesture control and motion based technology, there is now a strong expectation that brands will be experimenting...</p>
				<a href="https://medium.com/p/ef31bb65ced4" title="Gesture control has arrived">Read article <i class="fa fa-arrow-circle-o-right"></i></a>
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

	<section class="about" id="about">

		<div class="grid">

			<div class="grid-3">

				<img src="_includes/images/profile.jpg" alt="Ian Brennan">

			</div>

			<div class="grid-8">

				<h2>Ian Brennan - Head of Development / AnalogFolk</h2>

				<p>I'm a passionate Creative Technologist who heads up the development team at AnalogFolk. Leading a team of talented developers who regularly ship exciting projects across for a wide variety of clients.</p>

				<p>Using languages and tools such as JavaScript, Sass, CasperJS, PHP, Node, and Grunt, I like to rapidly prototype technically creative products and ideas.</p>

				<p>You can follow me on <a href="https://twitter.com/nannerb" title="Ian Brennan - Twitter">Twitter</a> and <a href="http://instagram.com/ibrennan" title="Ian Brennan - Instagram">Instagram</a>, or read more about my career on <a href="http://uk.linkedin.com/pub/ian-brennan/80/632/224" title="Ian Brennan - LinkedIn">LinkedIn</a>.</p>

			</div>

			<div class="grid-12">

				<hr>

			</div><!-- .grid-12 -->

		</div><!-- .grid -->

	</section><!-- .about -->

	<section class="projects" id="projects">

		<div class="grid">

			<div class="grid-12">

				<h1>Projects</h1>

				<p>Coming soon</p>

			</div><!-- .grid-12 -->

		</div><!-- .grid -->

	</section><!-- .projects -->

	<footer>


	</footer>

	<script src="_includes/js/vendor/jquery.js"></script>
	<script src="_includes/js/main.js"></script>
</body>
</html>
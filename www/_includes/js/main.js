var application = {

	init : function(){
		var self = this;

		self.intro.init();

		self.blog.init();

		self.resize.init();
		
	}, // init

	resize : {

		init : function(){
			var self = this;

			window.addEventListener('resize', function(event){

				application.blog.balanceTitles();

			});

		} // init

	}, // resize

	intro : {

		init : function(){
			var self = this;

			self.backgroundImage();

		}, // init

		backgroundImage : function(){
			var self = this;

			// Get intro image from Medium CDN

			var $intro = $("section.intro"),
				image = $intro.find(".medium-feed-image img").attr("src"),
				dimensions = {
					width: window.innerWidth,
					height: Math.floor(window.innerWidth / 1.5)
				}

			image = image.replace("/600", "/" + dimensions.width).replace("/200", "/" + dimensions.height);

			$intro.css("background-image","url(" + image+  ")");

		} // backgroundImage

	}, // intro

	blog : {

		init: function(){
			var self = this;

			self.balanceTitles();

		}, // init

		balanceTitles : function(){
			var self = this;

			var $blog = $("section.blog");

			if(!application.helpers.isMobile()){

				// Make all our blog titles the same height on each row

				$blog.find("article:odd").each(function(){

					var $title1 = $(this).find("h3"),
						$title2 = $(this).prev("article").find("h3");

					if($title1.height() > $title2.height()){

						$title2.css("height", $title1.height());

					} else {

						$title1.css("height", $title2.height());

					};

				});

			} else {

				$blog.find("article h3").css("height", "auto");

			}

		}
	}, // blog

	helpers : {

		isMobile : function(){

			if(window.innerWidth < 680){

				return true;

			} else {

				return false;

			}

		} // isMobile

	} // helpers

};

application.init();
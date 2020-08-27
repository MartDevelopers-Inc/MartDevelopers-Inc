@include('partials.head')
<body>
<div class="page-loader">
	<img src="{{ url('assets/img/loader.gif')}}" alt="">
</div>
<!-- Header
================================================== -->
@include('partials.header')
<!-- Animated Intro
================================================== -->
<div id="large-header" class="large-header">
	<canvas id="demo-canvas"></canvas>
    <h1 class="main-title">Mart<span class="thin wow pulse" data-wow-duration="1.8s" data-wow-delay="0.5s" data-wow-iteration="3"> Developers</span><br/>
    <span class="smallh wow zoomIn">We deliver high quality software solutions in a faster, simpler and more cost-efficient way</span><br/>
	<button type="button" class="btn btn-default wow fadeInLeft">Where Innovation</button>
	<button type="button" class="btn btn-primary wow fadeInRight">Meets Experience</button>
	</h1>
</div>
<!-- Features
================================================== -->
<section class="page-wrapper gray">
<div class="container">
	<h2 class="title">See it in action</h2>
	<div class="row">
		<div class="col-md-12 text-center">
			<p class="lead">
				 Cayman is the most flexible and complete theme.<br/> Its modern and fully responsive design best fits into current web trends.
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 feature wow zoomIn" data-wow-duration="0.8s" data-wow-delay="0.1s">
			<div class="octa">
			</div>
			<i class="fa fa-user"></i>
			<div class="feature-content">
				<h3>Modern</h3>
				<p>
					 The most flexible and complete theme. A theme that is optimized for search engines, endless options. And if you get stuck, Cayman offers dedicated customer support.
				</p>
			</div>
		</div>
		<div class="col-md-4 feature wow zoomIn" data-wow-duration="0.8s" data-wow-delay="0.4s">
			<div class="octa">
			</div>
			<i class="fa fa-flash"></i>
			<div class="feature-content">
				<h3>Creative</h3>
				<p>
					 Choose from multiple unique designs Cayman offers. You won't look for a new theme any time soon. User-friendly grid, based on the super popular Bootstrap.
				</p>
			</div>
		</div>
		<div class="col-md-4 feature wow zoomIn" data-wow-duration="0.8s" data-wow-delay="0.7s">
			<div class="octa">
			</div>
			<i class="fa fa-microphone"></i>
			<div class="feature-content">
				<h3>Responsive</h3>
				<p>
					 Wide range of out of the box solutions. You can actually build any kind of website with Cayman. Personalize your site without coding expertise or design skills.
				</p>
			</div>
		</div>
	</div>
</div>
</section>
<!-- About Us
================================================== -->
<section class="split">
<div class="col-md-6" style="min-height:420px;background-size:cover;background-image:url(assets/img/demo/1.jpg);">
	<div class="overlay" style="background:#303543;opacity:0.4;">
	</div>
</div>
<div class="col-md-6 darkbgcolor" style="min-height:420px;">
	<h2 class="title">Little about us</h2>
	<p class="lead">
		 "The support... I can only say it's awesome. You make a product and you help people out any way you can even if it means that you have to log in on their dashboard to sort out any problems that customer might have. Simply Outstanding!"
	</p>
	<h2 class="title">Best Choice</h2>
	<ul class="unstyle checklist">
		<li>Responsive Layout</li>
		<li>Super Mega Menu</li>
		<li>Multi Concept </li>
		<li>Other Features </li>
		<li>Much More </li>
	</ul>
</div>
</section>
<!-- Portfolio
================================================== -->
<section class="page-wrapper bot0">
<h2 class="title">Portfolio</h2>
<p class="tagline">
	 Take a look at our Recent Work
</p>
<div id="portfolio-filter" class="text-center">
	<ul class="portfolio-filter-list">
		<li><a href="#" class="active" data-cat="*">ALL</a></li>
		<li><a href="#" data-cat=".design">design</a></li>
		<li><a href="#" data-cat=".fashion">fashion</a></li>
		<li><a href="#" data-cat=".photo">photography</a></li>
		<li><a href="#" data-cat=".video">video</a></li>
		<li><a href="#" data-cat=".shooting">shooting</a></li>
	</ul>
</div>
<div id="portfolio-items" class="portfolio-items">
	<article class="video / fashion">
	<a href="portfolio-single.html">
	<img src="assets/img/demo/p1.jpg" alt=""/>
	<div class="overlay">
		<i class="fa fa-camera"></i>
		<h3>Tellus ut Felis</h3>
		<span>video, fashion</span>
	</div>
	</a>
	</article>
	<article class="fashion / video /shooting">
	<a href="portfolio-single.html">
	<img src="assets/img/demo/p2.jpg" alt=""/>
	<div class="overlay">
		<i class="fa fa-film"></i>
		<h3>Habitant Morbi</h3>
		<span>fashion, video, shooting</span>
	</div>
	</a>
	</article>
	<article class="fashion / design / shooting / photo">
	<a href="portfolio-single.html">
	<img src="assets/img/demo/p3.jpg" alt=""/>
	<div class="overlay">
		<i class="fa fa-camera"></i>
		<h3>Gravida Odio</h3>
		<span>fashion, design, shooting, photo</span>
	</div>
	</a>
	</article>
	<article class="fashion / shooting / web">
	<a href="portfolio-single.html">
	<img src="assets/img/demo/p4.jpg" alt=""/>
	<div class="overlay">
		<i class="fa fa-picture-o"></i>
		<h3>Pulvinar Enim</h3>
		<span>fashion, shooting, web</span>
	</div>
	</a>
	</article>
	<article class="design / video / shooting">
	<a href="portfolio-single.html">
	<img src="assets/img/demo/p5.jpg" alt=""/>
	<div class="overlay">
		<i class="fa fa-film"></i>
		<h3>Salique Wonder</h3>
		<span>design, video, shooting</span>
	</div>
	</a>
	</article>
	<article class="photo / video / shooting">
	<a href="portfolio-single.html">
	<img src="assets/img/demo/p6.jpg" alt=""/>
	<div class="overlay">
		<i class="fa fa-picture-o"></i>
		<h3>Maximus Viverra</h3>
		<span>photo, video, shooting</span>
	</div>
	</a>
	</article>
	<article class="mobile / photo / design">
	<a href="portfolio-single.html">
	<img src="assets/img/demo/p7.jpg" alt=""/>
	<div class="overlay">
		<i class="fa fa-camera"></i>
		<h3>Lacinia Fermentum</h3>
		<span>mobile, photo, design</span>
	</div>
	</a>
	</article>
	<article class="design / mobile / photo">
	<a href="portfolio-single.html">
	<img src="assets/img/demo/p8.jpg" alt=""/>
	<div class="overlay">
		<i class="fa fa-camera"></i>
		<h3>Purus Neque</h3>
		<span>design, mobile, photo</span>
	</div>
	</a>
	</article>
</div>
</section>
<!-- Call to Action
================================================== -->
<section class="split">
<div class="col-md-6 accentbgcolor text-center" style="min-height:160px;margin-right:1px;">
	<i class="fa fa-send-o fa-2x"></i>
	<h3>LIKE OUR WORK?</h3>
	<i>Contact Us</i>
</div>
<div class="col-md-6 darkbgcolor text-center" style="min-height:160px;margin-left:-2px;">
	<p style="margin-top:10px;">
		 Great themes with equally amazing customer service to go with it. Very prompt responses and very knowledgable staff that truly cares about their customer. I stand 100% behind this website and will make sure to recommend it to my friends.
	</p>
</div>
</section>
<!-- Team
================================================== -->
<section class="page-wrapper gray wow zoomIn">
<div class="container">
	<h2 class="title">Team</h2>
	<p class="tagline">
		 Crazy people all around, huh?
	</p>
	<div class="row team-wrap">
		<div class="col-md-4 col-sm-4 col-xs-12">
			<div class="team-boxes">
				<div class="team-thumb overlay-image view-overlay">
					<img src="assets/img/demo/t1.jpg" alt="">
					<div class="clear">
					</div>
					<div class="mask team_quote">
						<div class="port-zoom-link">
							<p>
								<span class="accentcolor" style="font-weight:700;">MOTTO</span><br/>
								<i>"All the world's a stage<br/>And all the men and women merely players"</i>
							</p>
						</div>
					</div>
				</div>
				<div class="team-info">
					<h2>Kathleen Walsh</h2>
					<p>
						 Logistic Stuff
					</p>
				</div>
				<div class="separator">
				</div>
				<div class="team-social">
					<a href="#"><i class="fa fa-facebook-square"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-google-plus"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-envelope"></i></a>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-4 col-xs-12">
			<div class="team-boxes">
				<div class="team-thumb overlay-image view-overlay">
					<img src="assets/img/demo/t2.jpg" alt="">
					<div class="clear">
					</div>
					<div class="mask team_quote">
						<div class="port-zoom-link">
							<p>
								<span class="accentcolor" style="font-weight:700;">ABOUT ME:)</span><br/>
								"I have all these great genes, but they're recessive"
							</p>
						</div>
					</div>
				</div>
				<div class="team-info">
					<h2>Georgia Mccormick</h2>
					<p>
						 Photographer
					</p>
				</div>
				<div class="separator">
				</div>
				<div class="team-social">
					<a href="#"><i class="fa fa-facebook-square"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-google-plus"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-envelope"></i></a>
				</div>
			</div>
		</div>
		<div class="col-md-4 col-sm-4 col-xs-12">
			<div class="team-boxes">
				<div class="team-thumb overlay-image view-overlay">
					<img src="assets/img/demo/t3.jpg" alt="">
					<div class="clear">
					</div>
					<div class="mask team_quote">
						<div class="port-zoom-link">
							<p>
								<span class="accentcolor" style="font-weight:700;">SHOULD I QUOTE?</span><br/>
								"It's knowing what needs to be done that brings strength!"
							</p>
						</div>
					</div>
				</div>
				<div class="team-info">
					<h2>Marjorie Watson</h2>
					<p>
						 Marketing
					</p>
				</div>
				<div class="separator">
				</div>
				<div class="team-social">
					<a href="#"><i class="fa fa-facebook-square"></i></a>
					<a href="#"><i class="fa fa-twitter"></i></a>
					<a href="#"><i class="fa fa-google-plus"></i></a>
					<a href="#"><i class="fa fa-linkedin"></i></a>
					<a href="#"><i class="fa fa-envelope"></i></a>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
<!-- Fun Facts
================================================== -->
<section id="progress" class="parallax parallax-image" style="background-image:url(assets/img/demo/count.jpg);">
<div class="wrapsection">
	<div class="overlay" style="background:#303543;opacity:0.8;">
	</div>
	<div class="container">
		<div class="parallax-content">
			<div class="row">
				<div class="col-md-3">
					<div class="funfacts text-center">
						<div class="icon">
							<i class="fa fa-tint"></i>
						</div>
						<h2 class="counter" data-from="0" data-to="294" data-speed="2500"></h2>
						<h4>Happy Clients</h4>
					</div>
				</div>
				<div class="col-md-3">
					<div class="funfacts text-center">
						<div class="icon">
							<i class="fa fa-trophy"></i>
						</div>
						<h2 class="counter" data-from="0" data-to="163" data-speed="2500"></h2>
						<h4>Awards Received</h4>
					</div>
				</div>
				<div class="col-md-3">
					<div class="funfacts text-center">
						<div class="icon">
							<i class="fa fa-send-o"></i>
						</div>
						<h2 class="counter" data-from="0" data-to="317" data-speed="2500"></h2>
						<h4>Letters Sent</h4>
					</div>
				</div>
				<div class="col-md-3">
					<div class="funfacts text-center">
						<div class="icon">
							<i class="fa fa-user"></i>
						</div>
						<h2 class="counter" data-from="0" data-to="458" data-speed="2500"></h2>
						<h4>Hired People</h4>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
</section>
<!-- Timeline
================================================== -->
<section id="tline" class="page-wrapper gray">
<div class="container">
	<h2 class="title">Blog</h2>
	<div class="row">
		<div class="col-md-12">
			<ul class="tline-holder">
				<!-- tline ITEM-->
				<li class="tline-item-left wow fadeInLeft">
				<div class="tline-item-content">
					<div class="date-icon fa fa-rocket">
					</div>
					<div class="tline-item-txt text-right">
						<div class="meta">
							 January 2015
						</div>
						<h3>Love Fashion</h3>
						<p>
							 It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
						</p>
					</div>
				</div>
				</li>
				<!-- /tline-->
				<!-- tline-->
				<li class="tline-item-right wow fadeInRight">
				<div class="tline-item-content">
					<div class="date-icon fa fa-camera">
					</div>
					<div class="tline-item-txt text-left">
						<div class="meta">
							 December 2014
						</div>
						<h3>Green is Health</h3>
						<p>
							 It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
						</p>
					</div>
				</div>
				</li>
				<!-- /tline-->
				<!-- tline-->
				<li class="tline-item-left wow fadeInLeft">
				<div class="tline-item-content">
					<div class="date-icon fa fa-user">
					</div>
					<div class="tline-item-txt text-right">
						<div class="meta">
							 November 2014
						</div>
						<h3>Why you love us</h3>
						<p>
							 It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
						</p>
					</div>
				</div>
				</li>
				<!-- /tline-->
				<!-- tline-->
				<li class="tline-item-right wow fadeInRight">
				<div class="tline-item-content">
					<div class="date-icon fa fa-bullhorn">
					</div>
					<div class="tline-item-txt text-left">
						<div class="meta">
							 September 2014
						</div>
						<h3>Save our Planet</h3>
						<p>
							 It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout.
						</p>
					</div>
				</div>
				</li>
				<!-- /tline-->
				<li class="tline-start">
				<div class="tline-start-content">
					<div class="tline-start-icon">
					</div>
					<a href="#" class="btn btn-primary wow zoomIn">MORE NEWS</a>
				</div>
				</li>
			</ul>
		</div>
	</div>
</div>
</section>
<!-- Customers
================================================== -->
<section class="split customers">
<div class="col-md-4 col-sm-4 accentbgcolor wow slideInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">
	<img src="assets/img/demo/avatar3.png" alt="">
	<p>
		<em>"Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum."</em>
	</p>
	<p>
		<strong>Rachel Knight</strong><br>
		 PEPSI COKE
	</p>
</div>
<div class="col-md-4 col-sm-4 whitebgcolor wow zoomIn" data-wow-duration="0.8s" data-wow-delay="0.0s">
	<img src="assets/img/demo/avatar2.png" alt="">
	<p>
		<em>"Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum."</em>
	</p>
	<p>
		<strong>Teresa Harmon</strong><br>
		 GENERAL MOTORS
	</p>
</div>
<div class="col-md-4 col-sm-4 darkbgcolor wow slideInRight" data-wow-duration="0.8s" data-wow-delay="0.2s">
	<img src="assets/img/demo/avatar1.png" alt="">
	<p>
		<em>"Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum."</em>
	</p>
	<p>
		<strong>Rosa Ingram</strong><br>
		 LACOSTE
	</p>
</div>
</section>
<!-- Footer
================================================== -->
<section id="footer" class="footer">
<div class="container">
	<div class="row">
		<div class="col-md-12 text-center">
			<ul class="social-icons">
				<li class="wow bounceIn animated" data-wow-delay="0.1s"><a href="#."><i class="fa fa-facebook"></i></a></li>
				<li class="wow bounceIn animated" data-wow-delay="0.2s"><a href="#."><i class="fa fa-twitter"></i></a></li>
				<li class="wow bounceIn animated" data-wow-delay="0.3s"><a href="#."><i class="fa fa-google-plus"></i></a></li>
				<li class="wow bounceIn animated" data-wow-delay="0.4s"><a href="#."><i class="fa fa-dribbble"></i></a></li>
				<li class="wow bounceIn animated" data-wow-delay="0.5s"><a href="#."><i class="fa fa-pinterest"></i></a></li>
			</ul>
			<a href="index.html"><img src="assets/img/logo.png" class="footerlogo wow zoomIn" alt="caymanlogo"></a>
			<p class="copyright">
				 &copy; Theme by WowThemes.net. All rights reserved.
			</p>
		</div>
	</div>
</div>
</section>
<!-- JavaScript
================================================== -->
<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/parallax.js"></script>
<script src='assets/js/countto.js'></script>
<script src="assets/js/portfolio.js"></script>
<script src="assets/js/animheader.js"></script>
<script src="assets/js/scripts.js"></script>
</body>

</html>
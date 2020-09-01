@include ('partials.head')

<body>
	<div class="page-loader">
		<img src="{{ url('assets/img/loader.gif') }}" alt="">
	</div>
	<!-- Header
================================================== -->
	@include('partials.header')
	<!-- Slider
================================================== -->
	<section>
		<div class="customtypewowslider fullwidth flexslider clearfix cayman-slider" style="max-height:700px;">
			<ul class="slides slider-content-style1">

				<li style="background-color:#000;">
					<img src="assets/img/header.jpg" alt="" />
					<div class="row">
						<div class="flex-caption" style="top:18%;">
							<h2 class="wow bounceInUp" data-wow-duration="1.0s" data-wow-delay="0.1s">About Us</h2>
							<h4 class="wow bounceInDown" data-wow-duration="1.0s" data-wow-delay="0.6s">Everything You Need To Know About <span class="font500">MartDevelopers Inc</span></span></h4>
							<!--<a class="btn btn-ghost wow bounceInLeft" href="#" data-wow-duration="1.0s" data-wow-delay="0.9s"> Get Consultation</a>
							<a class="btn btn-primary wow bounceInRight" href="#" data-wow-duration="1.0s" data-wow-delay="0.9s">Call Our Experts</a>-->
						</div>
					</div>
				</li>
			</ul>
		</div>
	</section>
	<!-- Features
================================================== -->
	<section class="page-wrapper gray">
		<div class="container">
			<div class="row">
				<div class="col-md-4 feature business wow zoomIn" data-wow-duration="0.8s" data-wow-delay="0.1s">
					<div class="feature-content">
						<h3><i class="fas fa-user-check"></i>Why Choose Us</h3>
						<p>
							The most flexible and complete theme. A theme that is optimized for search engines, endless options. And if you get stuck, Cayman offers support.
						</p>
					</div>
				</div>
				<div class="col-md-4 feature business wow zoomIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
					<div class="feature-content">
						<h3><i class="fa fa-rocket"></i>Our Mission</h3>
						<p>
							Choose from multiple unique designs Cayman offers. You won't look for a new theme any time soon. User-friendly grid, based on the super popular Bootstrap.
						</p>
					</div>
				</div>
				<div class="col-md-4 feature business wow zoomIn" data-wow-duration="0.8s" data-wow-delay="0.3s">
					<div class="feature-content">
						<h3><i class="fa fa-cogs"></i>What We Do</h3>
						<p>
							Wide range of out of the box solutions. You can actually build any kind of website with Cayman. Personalize your site without design skills.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="split customers">
		<div class="col-md-4 col-sm-4 accentbgcolor wow slideInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">
			<img src="assets/img/demo/businessavatar1.jpg" alt="">
			<p>
				<em>"Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum."</em>
			</p>
			<p>
				<strong>Rachel Knight</strong><br>
				PEPSI COKE
			</p>
		</div>
		<div class="col-md-4 col-sm-4 whitebgcolor wow zoomIn" data-wow-duration="0.8s" data-wow-delay="0.0s">
			<img src="assets/img/demo/businessavatar3.jpg" alt="">
			<p>
				<em>"Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum."</em>
			</p>
			<p>
				<strong>Teresa Harmon</strong><br>
				GENERAL MOTORS
			</p>
		</div>
		<div class="col-md-4 col-sm-4 darkbgcolor wow slideInRight" data-wow-duration="0.8s" data-wow-delay="0.2s">
			<img src="assets/img/demo/businessavatar2.jpg" alt="">
			<p>
				<em>"Nam liber tempor cum soluta nobis eleifend option congue nihil imperdiet doming id quod mazim placerat facer possim assum."</em>
			</p>
			<p>
				<strong>Rosa Ingram</strong><br>
				LACOSTE
			</p>
		</div>
	</section>
	<!-- Footer-->
	@include('partials.footer')
	<!-- JavaScript
================================================== -->
	<script src="assets/js/jquery.js"></script>
	<script src="assets/js/bootstrap.js"></script>
	<script src="assets/js/plugins.js"></script>
	<script src="assets/js/parallax.js"></script>
	<script src='assets/js/countto.js'></script>
	<script src="assets/js/portfolio.js"></script>
	<script src="assets/js/scripts.js"></script>
	<script>
		jQuery(document).ready(function($) {
			'use strict';
			$('.customtypewowslider').flexslider({
				pauseOnHover: false,
				slideshow: true,
				smoothHeight: false,
				slideshowSpeed: 6000, //Integer: Set the speed of the slideshow cycling, in milliseconds
				animationSpeed: 900,
				animation: "fade", //String: Select your animation type, "fade" or "slide"
				easing: "swing", //{NEW} String: Determines the easing method used in jQuery transitions. jQuery easing plugin is supported!
				direction: "horizontal",
				controlNav: true, //Boolean: Create navigation for paging control of each clide? Note: Leave true for manualControls usage
				useCSS: true, //{NEW} Boolean: Slider will use CSS3 transitions if available
				touch: true,
				directionNav: false,
			});
		});
	</script>
</body>

</html>
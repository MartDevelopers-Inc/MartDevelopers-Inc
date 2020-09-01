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
							We are a team of freelancers offering solutions across a broad spectrum of IT services.
							Our service execution apprroach is client-oriented.
							All our projects are done under a contract to ensure Credibility and Reliability.
							Be sure your project will be executed proffessionaly.
						</p>
					</div>
				</div>
				<div class="col-md-4 feature business wow zoomIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
					<div class="feature-content">
						<h3><i class="fa fa-rocket"></i>Our Mission</h3>
						<p>
							Mart Developers main aim is to change the way businesses,
							organisations and institutions operate,
							from automating daily routines (Accounting, sales, Record Keeping etc)
							to establishing online brand reputation.
							We are here to transform your industry.
							From the way you operate to connecting you to potential clients on the web
						</p>
					</div>
				</div>
				<div class="col-md-4 feature business wow zoomIn" data-wow-duration="0.8s" data-wow-delay="0.3s">
					<div class="feature-content">
						<h3><i class="fa fa-cogs"></i>What We Do</h3>
						<p>
							MART DEVELOPERS INC , DEDICATED AND COMPETENT INDIVIDUALS WHO YOU'LL BE WORKING WITH.
							WE WORK ROUND THE CLOCK AND RESEARCH VIGOROUSLY TO ENSURE WE ARE ALWAYS UP TO DATE WITH TECHNOLOGICAL
							ADVANCEMENTS. WE DO THAT BECAUSE WE UNDERSTAND THAT TECHNOLOGY
							IS DYNAMIC AND IT IS OUR MANDATE TO PROVIDE RELEVANT SOLUTIONS TO OUR CLIENTS.
						</p>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section class="page-wrapper gray wow zoomIn">
		<div class="container">
			<h2 class="title">Testimonials</h2>
			<p class="tagline">
				What Our Happy Clients Say
			</p>
			<section class="split customers">
				<div class="col-md-4 col-sm-4 accentbgcolor wow slideInLeft" data-wow-duration="0.8s" data-wow-delay="0.2s">
					<p>
						<em>"
						 	We needed a platform for our members to show case their opensource projects, we were connected to MartDevelopers Inc and they managed to do a good job.
						"</em>
					</p>
					<p>
						<strong>DevLan Labs</strong><br>
					</p>
				</div>
				<div class="col-md-4 col-sm-4 whitebgcolor wow zoomIn" data-wow-duration="0.8s" data-wow-delay="0.0s">
					<p>
						<em>"
							We needed a light weight Cloud Based Software As A Platform Enterprise System for our corporation, we were connected to MartDevelopers Inc and they managed to do a good job. Big up Team MartDevelopers Inc.
						"</em>
					</p>
					<p>
						<strong>Nucleus-SAAS ERP Group</strong><br>
					</p>
				</div>
				<div class="col-md-4 col-sm-4 darkbgcolor wow slideInRight" data-wow-duration="0.8s" data-wow-delay="0.2s">
					<p>
						<em>"
							Transparency and monitoring in water dispensing firms is a hell of hard job but thanks to MartDevelopers Inc for taking 
							that pain from us and turned it to a Information Management System. Big thanks MartDevelopers Inc.
						"</em>
					</p>
					<p>
						<strong>Lam Water Corp</strong><br>
					</p>
				</div>
			</section>
			<section class="split customers">
				<div class="col-md-4 col-sm-4 darkbgcolor wow slideInRight" data-wow-duration="0.8s" data-wow-delay="0.2s">
					<p>
						<em>"
							MartDevelopers Inc, did a lot of excellent work by transforming our manual systems to an automated hospital management system.
						"</em>
					</p>
					<p>
						<strong>Orion Health Care Corporation</strong><br>
					</p>
				</div>
				
				<div class="col-md-4 col-sm-4 accentbgcolor wow slideInRight" data-wow-duration="0.8s" data-wow-delay="0.2s">
					<p>
						<em>"
							Medical appointments records are difficult to manage , but big thanks to MartDevelopers Inc for intergrating an 
							automated Appointments Management Solution.
						"</em>
					</p>
					<p>
						<strong>AMS Healthcare Corporation</strong><br>
					</p>
				</div>

				<div class="col-md-4 col-sm-4 whitebgcolor wow slideInRight" data-wow-duration="0.8s" data-wow-delay="0.2s">
					<p>
						<em>"
							Higher Education Instutions need to migrate from manual based systems to automated information management systems 
							and thanks to MartDevelopers Inc, for implementing a University ERP.
						"</em>
					</p>
					<p>
						<strong>UniSys</strong><br>
					</p>
				</div>
			</section>
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
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
   <!-- <h1 class="main-title">Mart<span class="thin wow pulse" data-wow-duration="1.8s" data-wow-delay="0.5s" data-wow-iteration="3"> Developers</span><br/>
    <span class="smallh wow zoomIn">We deliver high quality software solutions in a faster, simpler and more cost-efficient way</span><br/>
	<button type="button" class="btn btn-default wow fadeInLeft">Where Innovation</button>
	<button type="button" class="btn btn-primary wow fadeInRight">Meets Experience</button>-->
	</h1>
</div>
<!-- Features
================================================== -->
<section class="page-wrapper gray">
<div class="container">
	<h2 class="title">Our Expertise</h2>
	<div class="row">
		<div class="col-md-12 text-center">
			<p class="lead">
				We deliver end-to-end integrated solutions in design, development and customization.
			</p>
		</div>
	</div>
	<div class="row">
		<div class="col-md-4 feature wow zoomIn" data-wow-duration="0.8s" data-wow-delay="0.1s">
			<div class="octa">
			</div>
			<i class="fas fa-hands-helping"></i>
			<div class="feature-content">
				<h3>Rescue Codings</h3>
				<p>
					Left stranded with a bad product that doesn’t work? We can pick up the pieces and get you up and running in no time.
				</p>
			</div>
		</div>
		<div class="col-md-4 feature wow zoomIn" data-wow-duration="0.8s" data-wow-delay="0.4s">
			<div class="octa">
			</div>
			<i class="fas fa-qrcode"></i>
			<div class="feature-content">
				<h3>Creative UI/UX Design</h3>
				<p>
				Get the most appealing User Interface design for your web-app that provides an overwhelmingly refreshing and friendly experience for your customers.
				</p>
			</div>
		</div>
		<div class="col-md-4 feature wow zoomIn" data-wow-duration="0.8s" data-wow-delay="0.7s">
			<div class="octa">
			</div>
			<i class="fa fa-microphone"></i>
			<div class="feature-content">
				<h3>Extensive Documentations And Client Support</h3>
				<p>
					We have covered each & everything in our Documentations including Videos & Screenshots.
				</p>
			</div>
		</div>

	</div>
	<div class="row">
		<div class="col-md-4 feature wow zoomIn" data-wow-duration="0.8s" data-wow-delay="0.1s">
			<div class="octa">
			</div>
			<i class="fas fa-mobile"></i>
			<div class="feature-content">
				<h3>Massively Customized Web Apps</h3>
				<p>
					We finnesse your web apps exactly the way your business works, we migrate your legacy back-end or upgrade existing front-end functionality.
				</p>
			</div>
		</div>
		<div class="col-md-4 feature wow zoomIn" data-wow-duration="0.8s" data-wow-delay="0.4s">
			<div class="octa">
			</div>
			<i class="fas fa-paper-plane"></i>
			<div class="feature-content">
				<h3>We Build a Minimum Viable Products</h3>
				<p>
					We always consider the bigger picture while scoping the minimum requirements for your product and build prototypes blazingly fast to reduce your time to market.
				</p>
			</div>
		</div>
		<div class="col-md-4 feature wow zoomIn" data-wow-duration="0.8s" data-wow-delay="0.7s">
			<div class="octa">
			</div>
			<i class="fa fa-globe"></i>
			<div class="feature-content">
				<h3>Web Development</h3>
				<p>
					Our battle tested team of web developers use rapid development methodologies & incorporated frameworks to get the best competitive edge for your business.
				</p>
			</div>
		</div>
		
	</div>
</div>
</section>
<!-- About Us
================================================== -->
<section class="split">
<div class="col-md-6" style="min-height:420px;background-size:cover;background-image:url(assets/img/MartDevelopers-Our_story.jpeg);">
	<div class="overlay" style="background:#303543;opacity:0.4;">
	</div>
</div>
<div class="col-md-6 darkbgcolor" style="min-height:420px;">
	<h2 class="title">This Is Our Story</h2>
	<br>
	<br>
	<p class="lead">
		Our journey started off in 2016 with the idea of smart working and transforming challenges into great results. Since it’s inception, we have successfully lifted off satisfied and delightful number of clients around the country & we believe it’s just the beginning.
	</p>
</div>
</section>
@include ('partials.footer')
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
@include('partials.head')
<body>
<div class="page-loader">
	<img src="{{ url('assets/img/loader.gif') }}" alt="">
</div>

@include('partials.header')
<section class="pagetitle parallax parallax-image" style="background-image:url(assets/img/header.jpg);">
<div class="wrapsection">
	<div class="overlay" style="background:#303543;opacity:0.6;">
	</div>
	<div class="container">
		<div class="parallax-content">
			<div class="block2 text-center max80" style="color:#fff;">
				<h3>
				<span class="text1 big wow bounceIn" data-wow-delay="0s" data-wow-duration="1s">
				<b>Contact</b> Us </span>
				</h3>
				<h2>
				<span class="text2 big wow zoomIn" data-wow-delay="0.4s" data-wow-duration="2s">
				Get in Touch with our Team </span>
				</h2>
				<a href="#contact" class="downarrowpoint wow zoomIn goscroll"><i class="fa fa-angle-double-down"></i></a>
			</div>
		</div>
	</div>
</div>
</section>
<!-- Social
================================================== -->
<section class="page-wrapper">
<div class="container">
	<div class="row">
		<div class="col-md-4 feature wow zoomIn" data-wow-duration="0.8s" data-wow-delay="0.1s">
			<div class="octa blue">
			</div>
			<a href="https://www.facebook.com/martin.mbithi.73"><i class="fa fa-facebook"></i></a>
			<div class="feature-content">
				<h3>Like us on Facebook</h3>
				
			</div>
		</div>
		<div class="col-md-4 feature wow zoomIn" data-wow-duration="0.8s" data-wow-delay="0.4s">
			<div class="octa bluelight">
			</div>
			<a href="https://twitter.com/martinezmbithi"><i class="fa fa-twitter"></i></a>
			<div class="feature-content">
				<h3>Follow us on Twitter</h3>
				
			</div>
		</div>
		<div class="col-md-4 feature wow zoomIn" data-wow-duration="0.8s" data-wow-delay="0.7s">
			<div class="octa red">
			</div>
			<a href="tel:+25437229776"><i class="fa fa-phone"></i></a>
			<div class="feature-content">
				<h3>Give Us A Call</h3>
			</div>
		</div>
	</div>
</div>
</section>
<!-- Form
================================================== -->
<section id="contact" class="page-wrapper gray">
<div class="container">
	<div class="regularform onwhite w680 wow flipInY text-center">
		<h4><b>SEND US A MESSAGE</b></h4>
		<br/>
		<div class="done">
			<div class="alert alert-success">
				<button type="button" class="close" data-dismiss="alert">×</button>
				Your message has been sent. Thank you!
			</div>
		</div>
		<form method="post" action="mailto:martdevelopers254@gmail.com" id="contactform">
			<input name="name" type="text" class="col-md-12" placeholder="Your Name *">
			<input name="email" type="email" class="col-md-12" placeholder="E-mail address *">
			<textarea name="comment" class="col-md-12" placeholder="Message *"></textarea>
			<input type="submit" id="submit" class="contact submit btn btn-minimal" style="margin-top:30px;background-color:#fff;" value="Send message">
		</form>
	</div>
</div>
</section>

@include('partials.footer')

<script src="assets/js/jquery.js"></script>
<script src="assets/js/bootstrap.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/parallax.js"></script>
<script src='assets/js/countto.js'></script>
<script src="assets/js/portfolio.js"></script>
<script src="assets/js/contact.js"></script>
<script src="assets/js/scripts.js"></script>
</body>

</html>
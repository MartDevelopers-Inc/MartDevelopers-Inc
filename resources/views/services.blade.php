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
                            <h2 class="wow bounceInUp" data-wow-duration="1.0s" data-wow-delay="0.1s">Our Services</h2>
                            <h4 class="wow bounceInDown" data-wow-duration="1.0s" data-wow-delay="0.6s">We deliver high quality software solutions in a faster, simpler and more cost-efficient way</span></h4>
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
                        <h3><i class="fas fa-qrcode"></i>Creative UI/UX Design</h3>
                        <p>
                            Get the most appealing User Interface design for your web-app
                            that provides an overwhelmingly refreshing
                            and friendly experience for your customers.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 feature business wow zoomIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <div class="feature-content">
                        <h3><i class="fa fa-rocket"></i>Extensive Documentations / Client Support</h3>
                        <p>
                            We have covered each & everything in our Docs including Videos & Screenshots
                        </p>
                    </div>
                </div>
                <div class="col-md-4 feature business wow zoomIn" data-wow-duration="0.8s" data-wow-delay="0.3s">
                    <div class="feature-content">
                        <h3><i class="fa fa-mobile"></i>Super Customized WebApps</h3>
                        <p>
                            We finnesse your web
                            apps exactly the way your business
                            works, we migrate your legacy back-end or
                            upgrade existing front-end functionality.
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 feature business wow zoomIn" data-wow-duration="0.8s" data-wow-delay="0.1s">
                    <div class="feature-content">
                        <h3><i class="fas fa-hands-helping"></i>Rescue Codings</h3>
                        <p>
                            Left stranded with a bad product that doesn’t
                            work? We can pick up the pieces and get
                            you up and running in no time.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 feature business wow zoomIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <div class="feature-content">
                        <h3><i class="fa fa-paper-plane"></i>We Build Minimum Viable Products</h3>
                        <p>
                            We always consider the bigger picture while
                            scoping the minimum requirements for your
                            product and build prototypes blazingly fast
                            to reduce your time to market.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 feature business wow zoomIn" data-wow-duration="0.8s" data-wow-delay="0.3s">
                    <div class="feature-content">
                        <h3><i class="fa fa-globe"></i>Full-Stack Web Development</h3>
                        <p>
                            Our battle tested team of web developers use rapid
                            development methodologies
                            & incorporated frameworks
                            to get the best competitive
                            edge for your business
                        </p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 feature business wow zoomIn" data-wow-duration="0.8s" data-wow-delay="0.1s">
                    <div class="feature-content">
                        <h3><i class="fas fa-anchor"></i>Super Responsive Web Sites</h3>
                        <p>
                            We deploy powerful and scalable apps with responsive functionality that can be adapted to any screen size.
                        </p>
                    </div>
                </div>
                <div class="col-md-4 feature business wow zoomIn" data-wow-duration="0.8s" data-wow-delay="0.2s">
                    <div class="feature-content">
                        <h3><i class="fas fa-wrench"></i>Systems Mantainance</h3>
                        <p>
                            We provide Level 1,2 & 3 support services for custom software developed by us or any other third party vendor
                        </p>
                    </div>
                </div>
                <div class="col-md-4 feature business wow zoomIn" data-wow-duration="0.8s" data-wow-delay="0.3s">
                    <div class="feature-content">
                        <h3><i class="fas fa-tools"></i>Tech Support </h3>
                        <p>
                            24/7 monitoring of your core applications,
                            hardware and overall system performance
                            to ensure system uptime and prevent breakdowns.
                        </p>
                    </div>
                </div>
            </div>
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
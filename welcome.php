<?php
   include('session.php');
   session_start();
?>

<!DOCTYPE html>
<!--[if IE 9]> <html lang="en" class="js-no ie9"> <![endif]-->
<!--[if IE 10]> <html lang="en" class="js-no ie10"> <![endif]-->
<!--[if !IE]><!-->
<html lang="en">
<!--<![endif]-->


<!-- Mirrored from bootstrapart.net/dragonfly/v1.5/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Oct 2015 11:02:31 GMT -->
<head>
	<title>FlopHouse - Hostel Management</title>

	<!-- Meta Tags -->
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="description" content="Fully responsive home page for your business with clear content and modern elements.">
	<meta name="author" content="Jiri Cermak">
    <link rel="icon" href="img/favicon.ico">
	<!--  Boostrap Framework  -->
	<link href="assets/css/bootstrap.min.css" rel="stylesheet">

	<!--=== CSS - Dragonfly ===-->
	<link href="assets/css/themes/light-blue.css" rel="stylesheet" id="colors">

	<!--=== LESS - Dragonfly ===-->
	<!--    <link href="assets/less/themes/light-blue.less" rel="stylesheet/less">-->

	<!-- Google Fonts - Lato -->
	<link href="http://fonts.googleapis.com/css?family=Lato:300,400" rel="stylesheet">

	<!-- Font Awesome Icons -->
	<link href="../../../maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">

	<!-- CSS Animations -->
	<link href="../../../cdnjs.cloudflare.com/ajax/libs/animate.css/3.1.1/animate.min.css" rel="stylesheet">

	<!--  Slippry Slideshow -->
	<link href="assets/css/slippry.min.css" rel="stylesheet">
	<script>
		(function (i, s, o, g, r, a, m) {
			i['GoogleAnalyticsObject'] = r;
			i[r] = i[r] || function () {
				(i[r].q = i[r].q || []).push(arguments)
			}, i[r].l = 1 * new Date();
			a = s.createElement(o),
			m = s.getElementsByTagName(o)[0];
			a.async = 1;
			a.src = g;
			m.parentNode.insertBefore(a, m)
		})(window, document, 'script', '../../../www.google-analytics.com/analytics.js', 'ga');

		ga('create', 'UA-51308611-2', 'auto');
		ga('send', 'pageview');
	</script>
	<style>
	.img-responsive{
		height:250px;
		width:400px;
	}
	</style>
</head>
<body>




	    <!-- Navigation -->
	    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" id="navbarSettings">
	    <div class="container">
	        <div class="navbar-header">
	            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-navbar-collapse-1">
	                <span class="sr-only">Toggle navigation</span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	                <span class="icon-bar"></span>
	            </button>
	            <a class="navbar-brand" href="welcome.php">Flop<span class="text-primary">House</span></a>
	        </div>

	        <div class="collapse navbar-collapse" id="bs-navbar-collapse-1">
	            <ul class="nav navbar-nav navbar-right ">

	                <!--Home Pages -->
	                <li>
	                    <a href="welcome.php">Home</a>
	                </li>

	                <!--Notices-->
	                <li>
	                    <a href="#notices">Notices
	                    </a>
	                </li>


	                
	                <li><a href="#events">Events</a></li>
	                
	                <li><a href="logout.php">Logout</a></li>

	                <li><a href="register.php" style="">Hi! <span style="color:#1eb9c1"><?php echo $firstname_session ." &nbsp". $lastname_session;?></a></li>


	            </ul>
	        </div>
	        <!-- /.navbar-collapse -->
	    </div>
	</nav>

<!-- If navbar is fixed to top and it has the class navbar-default or navbar-inverse this div will add space below the navbar-->
<div id="navbarSpaceBottom"></div>
    <!--  Header Section  -->
    <section class="bg-custom bg-centerTop70 bg-cover">
        <div class="bg-filter sTop">
            <div class="container">
                <div class="jumbotron trn v-center">
                    <div class="col-md-12">
                    <h1>Flop<span class="text-primary">House</span></h1>
                    <div class="space-sm"></div>
                    <p>FlopHouse, the perfect Hostel Management Website,
                        <br>Be it sanctioning of leave or attending to a complaint. Do it Online just by looking at your screen.</p>
                    <div class="space-sm"></div>
                    <ul class="list-inline">
                        <li>
                            <a href="outpass.php" class="btn btn-success btn-xlg scroll"><i class=""></i>Generate Outpass</a>
                        </li>
                        <li>
                            <a href="support.php" class="btn btn-danger btn-xlg scroll"><i class="fa fa-paper-plane-o"></i>Support</a>
                        </li>
                        <?php 
                        echo $_SESSION['success']; 
                        ?>

                    </ul>
                    </div>
                    <div class="col-md-4">
                        
                    </div>
                    <div class="col-md-1">
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Breaking news -->
    <section class="section bg-grey" id="notices">
        <div class="container">
            <h2 class="lg-title lg-title-border">Notices</h2>
            <div class="row">
                <div class="col-md-3 col-lg-3 col-sm-6 wow fadeInLeft" data-wow-delay="0.8s">
                    <div class="news">
                        <h3>Notice 1</h3>
                        <em>January 26, 2014 by John</em>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Duis condimentum augue id magna semper rutrum. In enim a arcu imperdiet malesuada.</p>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6 wow fadeInLeft" data-wow-delay="0.6s">
                    <div class="news">
                        <h3>Notice 2</h3>
                        <em>January 10, 2014 by Ben</em>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Duis condimentum augue id magna semper rutrum. In enim a arcu imperdiet malesuada.</p>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6 wow fadeInLeft" data-wow-delay="0.4s">
                    <div class="news">
                        <h3>Notice 3</h3>
                        <em>December 27, 2013 by Nicole</em>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Duis condimentum augue id magna semper rutrum. In enim a arcu imperdiet malesuada.</p>
                    </div>
                </div>
                <div class="col-md-3 col-lg-3 col-sm-6 wow fadeInLeft" data-wow-delay="0.2s">
                    <div class="news">
                        <h3>Notice 4</h3>
                        <em>December 13, 2013 by Adele</em>
                        <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Duis condimentum augue id magna semper rutrum. In enim a arcu imperdiet malesuada.</p>
                    </div>
                </div>
            </div>
            <br><br>
            <div class="row text-center">
                <a href="blog-page.html" class="btn btn-lg btn-default-trn-v2">View All
                    <i class="fa fa-angle-double-right"></i>
                </a>
            </div>
        </div>
    </section>


    <section class="section-lg bg-grey" id="events">
        <div class="container">
            <h2 class="big-title text-center">Recent Events</h2>
            <p class="big-subtitle text-center">Nam libero tempore, cum soluta nobis est eligendi optio cumque nihil impedit quo minus id quod maxime placeat facere possimus, omnis voluptas assumenda est, omnis dolor repellendus.</p>
            <div class="space"></div>
            <div class="row portfolio-grid">
                <div class="col-md-4 col-sm-6">
                    <a href="#" title="View portfolio item">
                        <div class="hover-content">
                            <img src="img/protsahan.jpg" class="img-responsive" alt="Protsahan">
                            <div class="top-part hidden-xs">
                                <i class="fa fa-eye"></i>
                            </div>
                            <div class="bottom-part hidden-xs">
                                <h3>Protsahan</h3>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-4 col-sm-6">
                    <a href="#" title="View portfolio item">
                        <div class="hover-content">
                            <img src="img/ambiora.jpg"  class="img-responsive" alt="Webdesign">
                            <div class="top-part hidden-xs">
                                <i class="fa fa-eye"></i>
                            </div>
                            <div class="bottom-part hidden-xs">
                                <h3>Ambiora</h3>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-4 col-sm-6">
                    <a href="#" title="View portfolio item">
                        <div class="hover-content">
                            <img src="img/flavium.jpg" class="img-responsive" alt="application">
                            <div class="top-part hidden-xs">
                                <i class="fa fa-eye"></i>
                            </div>
                            <div class="bottom-part hidden-xs">
                                <h3>Flavium</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </section>



    
    




    <!-- Scripts-->
    <!--Back to top-->
<a href="#" class="back-to-top">
    <i class="fa fa-angle-up"></i>
</a>

<!-- Modernizr -->
<script src="assets/js/min/modernizr.custom.min.js"></script>

<!-- jQuery -->
<script src="../../../ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<script src="../../../ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>

<!--<script src="http://cdnjs.cloudflare.com/ajax/libs/less.js/2.1.0/less.min.js"></script>-->

<!-- Bootstrap JS -->
<script src="../../../maxcdn.bootstrapcdn.com/bootstrap/3.2.0/js/bootstrap.min.js"></script>

<!-- Bootstrap Plugin - open dropdown on hover -->
<script src="assets/js/min/bootstrap-hover-dropdown.min.js"></script>

<!-- LESS preprocessor -->
<script src="../../../cdnjs.cloudflare.com/ajax/libs/less.js/1.7.4/less.min.js"></script>

<!-- WOW.js - loading animations -->
<script src="../../../cdnjs.cloudflare.com/ajax/libs/wow/0.1.6/wow.min.js"></script>

<!-- Knobs - our skills -->
<script src="../../../cdn.jsdelivr.net/jquery.knob/1.2.9/jquery.knob.min.js"></script>

<!-- Slippry - Slideshow -->
<script src="assets/js/min/slippry.min.js"></script>

<!-- Mixitup plugin - Portfolio Filter Grid -->
<script src="../../../cdnjs.cloudflare.com/ajax/libs/mixitup/1.5.6/jquery.mixitup.min.js"></script>

<!-- Make sticky whatever elements -->
<script src="../../../cdn.jsdelivr.net/jquery.sticky/1.0.0/jquery.sticky.min.js"></script>

<!-- Smooth sroll -->
<script src="../../../cdn.jsdelivr.net/jquery.nicescroll/3.5.4/jquery.nicescroll.min.js"></script>

<!-- Contact Form -->
<script src="assets/js/min/contact-form.min.js"></script>

<!-- Must be last of all scripts -->
<script src="assets/js/min/scripts.min.js"></script>

<!--[if lt IE 9]>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/html5shiv/3.7/html5shiv.min.js"></script>
      <script src="http://cdnjs.cloudflare.com/ajax/libs/respond.js/1.4.2/respond.min.js"></script>
<![endif]-->

<!-- Side Menu -->
<div class="sidebar-off hidden-xs sidebar">
    <div class="wrap">

        <!--<a id="sidebar-close" title="Close sidebar">
			<div class="clearfix">
				<h2 class="title">Side Menu</h2>
				<div class="close-icon">
					<span class="close-a"></span>
					<span class="close-b"></span>
				</div>
			</div>
		</a>-->

        <div class="form-lg">
            <div class="input-group all-trn" role="search">
                <input type="text" class="form-control" placeholder="Search">
                <span class="input-group-btn">
						<button class="btn btn-all-trn" title="Search" type="button">
							<i class="fa fa-search"></i>
                    </button>
            		</span> 
            </div>
        </div>

        <div class="space-sm"></div>

        <h4>Languages</h4>
        <ul class="info-list sm-list lang">
            <li class="active">
                <i class="fa fa-angle-right fa-fw"></i>
                <a href="#">English</a>
                <i class="fa fa-check fa-fw"></i>
            </li>
            <li>
                <i class="fa fa-angle-right fa-fw"></i>
                <a href="#">Germany</a>
                <i class="fa fa-check fa-fw"></i>
            </li>
            <li>
                <i class="fa fa-angle-right fa-fw"></i>
                <a href="#">Spanish</a>
                <i class="fa fa-check fa-fw"></i>
            </li>
            <li>
                <i class="fa fa-angle-right fa-fw"></i>
                <a href="#">French</a>
                <i class="fa fa-check fa-fw"></i>
            </li>
        </ul>

        <div class="space"></div>

        <h4>Social Media</h4>
        <ul class="icons-list circle-icons m-no-bottom">
            <li>
                <a href="#" title="Follow us">
                    <i class="fa fa-google-plus"></i>
                </a>
            </li>
            <li>
                <a href="#" title="Follow us">
                    <i class="fa fa-twitter"></i>
                </a>
            </li>
            <li>
                <a href="#" title="Follow us">
                    <i class="fa fa-tumblr"></i>
                </a>
            </li>
            <li>
                <a href="#" title="Follow us">
                    <i class="fa fa-facebook"></i>
                </a>
            </li>
            <li>
                <a href="#" title="Follow us">
                    <i class="fa fa-youtube-play"></i>
                </a>
            </li>
        </ul>

        <div class="space"></div>

        <h4>Contact</h4>
        <ul class="info-list sm-list">
            <li>
                <i class="fa fa-envelope fa-fw"></i>
                <a class="text-muted" href="mailto:influence.bootstrap@gmail.com">support@example.com</a>
            </li>
            <li>
                <i class="fa fa-phone fa-fw"></i>
                +21 902 920 889
            </li>
            <li>
                <i class="fa fa-map-marker fa-fw"></i>
                885 3rd Ave, NY 10022
            </li>
        </ul>
    </div>
</div>



    <!-- Footer-->
    <footer class="footer">
    <div class="footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-lg-4 col-sm-12 col-xs-12">
                    <h4>Contact</h4>
                    <ul class="info-list md-list i-primary">
                        <li>
                            <i class="fa fa-envelope fa-fw"></i>
                            <a href="mailto:influence.bootstrap@gmail.com">influence.bootstrap@gmail.com</a>
                        </li>
                        <li>
                            <i class="fa fa-phone fa-fw"></i>
                            +21 902 920 889
                        </li>
                        <li>
                            <i class="fa fa-map-marker fa-fw"></i>
                            885 3rd Ave, NY 10022
                        </li>
                    </ul>
                </div>
                <div class="space-sm visible-sm visible-xs"></div>
                <div class="col-md-4 col-lg-4 col-xs-12">
                    <h4>Quick Links</h4>
                    <ul class="info-list md-list i-primary">
                        <li>
                            <i class="fa fa-angle-right fa-fw"></i>
                            <a href="#">
                                <span class="link-title">About Us</span>- Who we are</a>
                        </li>
                        <li>
                            <i class="fa fa-angle-right fa-fw"></i>
                            <a href="#">
                                <span class="link-title">Services</span>- What we do</a>
                        </li>
                        <li>
                            <i class="fa fa-angle-right fa-fw"></i>
                            <a href="#">
                                <span class="link-title">Our Team</span>- Meet our team</a>
                        </li>
                        <li>
                            <i class="fa fa-angle-right fa-fw"></i>
                            <a href="#">
                                <span class="link-title">Portfolio</span>- Our work</a>
                        </li>
                        <li>
                            <i class="fa fa-angle-right fa-fw"></i>
                            <a href="#">
                                <span class="link-title">Blog</span>- Breaking news</a>
                        </li>
                    </ul>
                </div>
                <div class="space-sm visible-sm visible-xs"></div>
                <div class="col-md-4 col-lg-4  col-xs-12">
                    <h4>About Us</h4>
                    <p>Temporibus autem quibusdam et aut officiis debitis ut et voluptates repudiandae sint et molestiae non recusandae.</p>
                    <div class="space-sm"></div>
                    <h4>Follow Us</h4>
                    <ul class="circle-icons icons-list">
                        <li>
                            <a href="#" title="Follow us">
                                <i class="fa fa-google-plus"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Follow us">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Follow us">
                                <i class="fa fa-tumblr"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Follow us">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                        <li>
                            <a href="#" title="Follow us">
                                <i class="fa fa-youtube-play"></i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <div class="footer-bottom">
        <div class="container">
            <p>Flophouse. Theme by Jiri Cermak. Design by Kshitij Shah</p>
        </div>
    </div>
</footer>

</body>


<!-- Mirrored from bootstrapart.net/dragonfly/v1.5/index.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Oct 2015 11:04:48 GMT -->
</html>





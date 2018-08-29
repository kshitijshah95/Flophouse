<?php
   include('session.php');
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
                    <a href="welcome.php/#notices">Notices
                    </a>
                </li>


                
                <li><a href="welcome.php/#events">Events</a></li>
                <li><a href="logout.php">Logout</a></li>

                <li><a href="register.php" style="">Hi! <span style="color:#1eb9c1"><?php echo $firstname_session ." &nbsp". $lastname_session;?></a></li>


            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
</nav>

<!-- If navbar is fixed to top and it has the class navbar-default or navbar-inverse this div will add space below the navbar-->
<div id="navbarSpaceBottom"></div>
    <!-- Header Box -->

    <section class="bg-21 bg-cover bg-center">
        <div class="bg-filter">
            <div class="container section-lg">
                <h1 class="top-title">Support</h1>
                <div class="sub-text">
                    <h2>How can we help you?</h2>
                    <p>Please describe the problem your are having</p>
                    <div class="input-group form-lg trn" role="search" style="width: 300px;">
                        <input type="text" class="form-control" placeholder="Find answer">
                        <span class="input-group-btn">
						<button type="submit" class="btn btn-success" title="submit" type="button">
							Submit
						</button>
					</span>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <!-- Tab panes -->
    <div class="tab-content ">

        <div class="tab-pane active fade in margin-b30" id="categories">

            <!-- Categories -->
            <div class="section-md bg-grey-4">
                <div class="container">
                    <h2 class="text-uppercase m-no-all">Complain Categories</h2>
                </div>
            </div>

            <div class="container section">

                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <div class="float-box">
                            <i class="fa fa-user icon-c"></i>
                            <div class="float-text">
                                <h3>Laundary</h3>
                                <p>In enim a arcu imperdiet malesuada, ut aut reiciendis voluptatibus maiores alias cons.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="float-box">
                            <i class="fa fa-lock icon-c"></i>
                            <div class="float-text">
                                <h3>Room Service</h3>
                                <p>In enim a arcu imperdiet malesuada, ut aut reiciendis voluptatibus maiores alias cons.</p>
                            </div>
                        </div>
                    </div>
                    <div class=" col-sm-12 col-md-4">
                        <div class="float-box">
                            <i class="fa fa-phone icon-c"></i>
                            <div class="float-text">
                                <h3>Network and Connectivity</h3>
                                <p>In enim a arcu imperdiet malesuada, ut aut reiciendis voluptatibus maiores alias cons.</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12 col-md-4">
                        <div class="float-box">
                            <i class="fa fa-wrench icon-c"></i>
                            <div class="float-text">
                                <h3>Mess</h3>
                                <p>In enim a arcu imperdiet malesuada, ut aut reiciendis voluptatibus maiores alias cons.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="float-box">
                            <i class="fa fa-credit-card icon-c"></i>
                            <div class="float-text">
                                <h3>Electrical Maintenance</h3>
                                <p>In enim a arcu imperdiet malesuada, ut aut reiciendis voluptatibus maiores alias cons.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-12 col-md-4">
                        <div class="float-box">
                            <i class="fa fa-bullhorn icon-c"></i>
                            <div class="float-text">
                                <h3>Sports</h3>
                                <p>In enim a arcu imperdiet malesuada, ut aut reiciendis voluptatibus maiores alias cons.</p>
                            </div>
                        </div>
                    </div>
                </div>
                
            </div>

        </div>

        <div class="tab-pane fade" id="q1">

            <!-- FAQ -->
            <div class="section-md bg-grey-4">
                <div class="container">
                    <h2 class="text-uppercase m-no-all">FAQ</h2>
                </div>
            </div>

            <div class="container section">
                <div class="panel-group" id="accordion">
                    <div class="panel panel-default">
                        <a data-toggle="collapse" data-parent="#accordion" href="#c1">
                            <div class="panel-heading">
                                <h4 class="panel-title"><i class="fa fa-user"></i>Acounnt Setting</h4>
                            </div>
                        </a>
                        <div id="c1" class="panel-collapse collapse in">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <a data-toggle="collapse" data-parent="#accordion" href="#c2">
                            <div class="panel-heading">
                                <h4 class="panel-title"><i class="fa fa-lock"></i>Safety & Security</h4>
                            </div>
                        </a>
                        <div id="c2" class="panel-collapse collapse">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <a data-toggle="collapse" data-parent="#accordion" href="#c3">
                            <div class="panel-heading">
                                <h4 class="panel-title"><i class="fa fa-phone"></i>Mobile & Apps</h4>
                            </div>
                        </a>
                        <div id="c3" class="panel-collapse collapse">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <a data-toggle="collapse" data-parent="#accordion" href="#c4">
                            <div class="panel-heading">
                                <h4 class="panel-title"><i class="fa fa-search"></i>Search & Discussions</h4>
                            </div>
                        </a>
                        <div id="c4" class="panel-collapse collapse">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <a data-toggle="collapse" data-parent="#accordion" href="#c5">
                            <div class="panel-heading">
                                <h4 class="panel-title"><i class="fa fa-credit-card"></i>Billing information</h4>
                            </div>
                        </a>
                        <div id="c5" class="panel-collapse collapse">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <a data-toggle="collapse" data-parent="#accordion" href="#c6">
                            <div class="panel-heading">
                                <h4 class="panel-title"><i class="fa fa-cloud-download"></i>Download</h4>
                            </div>
                        </a>
                        <div id="c6" class="panel-collapse collapse">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <a data-toggle="collapse" data-parent="#accordion" href="#c7">
                            <div class="panel-heading">
                                <h4 class="panel-title"><i class="fa fa-cloud-upload"></i>Upload</h4>
                            </div>
                        </a>
                        <div id="c7" class="panel-collapse collapse">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <a data-toggle="collapse" data-parent="#accordion" href="#c8">
                            <div class="panel-heading">
                                <h4 class="panel-title"><i class="fa fa-signal"></i>Connect</h4>
                            </div>
                        </a>
                        <div id="c8" class="panel-collapse collapse">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <a data-toggle="collapse" data-parent="#accordion" href="#c9">
                            <div class="panel-heading">
                                <h4 class="panel-title"><i class="fa fa-plane"></i>Launching</h4>
                            </div>
                        </a>
                        <div id="c9" class="panel-collapse collapse">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <a data-toggle="collapse" data-parent="#accordion" href="#c1a">
                            <div class="panel-heading">
                                <h4 class="panel-title"><i class="fa fa-desktop"></i>Deskop Apliaction</h4>
                            </div>
                        </a>
                        <div id="c1a" class="panel-collapse collapse">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <a data-toggle="collapse" data-parent="#accordion" href="#c2a">
                            <div class="panel-heading">
                                <h4 class="panel-title"><i class="fa fa-hdd-o"></i>Storages</h4>
                            </div>
                        </a>
                        <div id="c2a" class="panel-collapse collapse">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                    <div class="panel panel-default">
                        <a data-toggle="collapse" data-parent="#accordion" href="#c3a">
                            <div class="panel-heading">
                                <h4 class="panel-title"><i class="fa fa-shield"></i>Protection</h4>
                            </div>
                        </a>
                        <div id="c3a" class="panel-collapse collapse">
                            <div class="panel-body">
                                Anim pariatur cliche reprehenderit, enim eiusmod high life accusamus terry richardson ad squid. 3 wolf moon officia aute, non cupidatat skateboard dolor brunch. Food truck quinoa nesciunt laborum eiusmod. Brunch 3 wolf moon tempor, sunt aliqua put a bird on it squid single-origin coffee nulla assumenda shoreditch et. Nihil anim keffiyeh helvetica, craft beer labore wes anderson cred nesciunt sapiente ea proident. Ad vegan excepteur butcher vice lomo. Leggings occaecat craft beer farm-to-table, raw denim aesthetic synth nesciunt you probably haven't heard of them accusamus labore sustainable VHS.
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="tab-pane fade" id="contact">

            <!-- Contact Us -->
            <div class="section-md bg-grey-4">
                <div class="container">
                    <h2 class="text-uppercase m-no-all">Contact Us</h2>
                </div>
            </div>

            <div class="container section">
                <div class="row">
                    <div class="col-sm-4">
                        <div class="float-box center">
                            <i class="fa fa-map-marker icon-c"></i>
                            <div class="float-text">
                                <h4>Our Location</h4>
                                <p>885 3rd Ave, NY 10022</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="float-box center">
                            <i class="fa fa-envelope icon-c"></i>
                            <div class="float-text">
                                <h4>Email Us</h4>
                                <p>
                                    <a href="mailto:influence.bootstrap@gmail.com?subject=Help">influence.bootstrap@gmail.com</a>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-4">
                        <div class="float-box center">
                            <i class="fa fa-phone icon-c"></i>
                            <div class="float-text">
                                <h4>Phone Us</h4>
                                <p>+01 920 778 129</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="space-lg"></div>
                <div class="row">
                    <div class="col-md-6 col-sm-7">

                        <!-- Contact Form -->
                        <div id="form-messages"></div>
                        <form class="form-horizontal" role="form" id="ajax-contact" method="post" action="http://bootstrapart.net/dragonfly/v1.5/assets/php/mailer.php">
                            <div class="form-group icon">
                                <label for="name" class="col-sm-3 control-label">Full name</label>
                                <div class="col-sm-9 ">
                                    <div class="control">
                                        <input type="text" class="form-control" id="name" placeholder="Full name" name="name" required>
                                        <i class="fa fa-user"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group icon">
                                <label for="email" class="col-sm-3 control-label">Email</label>
                                <div class="col-sm-9 ">
                                    <div class="control">
                                        <input type="email" class="form-control" id="email" placeholder="Enter email" name="email" required>
                                        <i class="fa fa-envelope"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group icon">
                                <label for="Message" class="col-sm-3 control-label">Message</label>
                                <div class="col-sm-9 ">
                                    <div class="control">
                                        <textarea class="form-control" rows="8" id="Message" placeholder="Message" name="message" required></textarea>
                                        <i class="fa fa-comment"></i>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group icon">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <button type="submit" class="btn btn-primary">
                                        <i class="fa fa-paper-plane-o"></i>Send Message</button>
                                </div>
                            </div>
                            <div class="space visible-xs"></div>
                    </div>

                    <div class="col-md-6 col-sm-5">
                        <ul class="list-unstyled info-bar">
                            <li>
                                <h4>Additional info</h4>
                                <p>If you have any questiong about our products or something else, please email us or call us. We'll get in touch with you as soon as possible.</p>
                            </li>
                            <li>
                                <h4>Our Location</h4>
                                <p>885 3rd Ave, NY 10022</p>
                            </li>
                            <li>
                                <h4>Email Us</h4>
                                <p>
                                    <a href="mailto:influence.bootstrap@gmail.com?subject=Help">influence.bootstrap@gmail.com</a>
                                </p>
                            </li>
                            <li>
                                <h4>Business Hours</h4>
                                <ul class="list-unstyled">
                                    <li>Mo - Fr: 9am to 6pm</li>
                                    <li>Sa, Su: 9am to 2pm</li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>

        </div>

    </div>



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
            <p>©Flophouse. Theme by Jiri Cermak. Design by Kshitij Shah.</p>
        </div>
    </div>
</footer>

</body>


<!-- Mirrored from bootstrapart.net/dragonfly/v1.5/support.php by HTTrack Website Copier/3.x [XR&CO'2014], Wed, 28 Oct 2015 11:12:04 GMT -->
</html>
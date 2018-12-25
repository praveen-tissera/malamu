<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="no-js">
<!--<![endif]-->

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<title>Malamu. Good.</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Malamu. Good" />
	<meta name="keywords" content="Malamu. Good" />
	<meta name="author" content="Malamu. Good" />



	<!-- Facebook and Twitter integration -->
	<meta property="og:title" content="" />
	<meta property="og:image" content="" />
	<meta property="og:url" content="" />
	<meta property="og:site_name" content="" />
	<meta property="og:description" content="" />
	<meta name="twitter:title" content="" />
	<meta name="twitter:image" content="" />
	<meta name="twitter:url" content="" />
	<meta name="twitter:card" content="" />

	<!-- Place favicon.ico and apple-touch-icon.png in the root directory -->
	<link rel="shortcut icon" href="favicon.ico">

	<link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>

	<!-- Animate.css -->
	
    <link href="<?php echo base_url('/assets/css/animate.css'); ?>" rel="stylesheet">
	<!-- Icomoon Icon Fonts-->
	
    <link href="<?php echo base_url('/assets/css/icomoon.css'); ?>" rel="stylesheet">
	<!-- Bootstrap  -->
	
    <link href="<?php echo base_url('/assets/css/bootstrap.css'); ?>" rel="stylesheet">
	<!-- Superfish -->
	
    <link href="<?php echo base_url('/assets/css/superfish.css'); ?>" rel="stylesheet">
	<!-- Magnific Popup -->
	
    <link href="<?php echo base_url('/assets/css/magnific-popup.css'); ?>" rel="stylesheet">
	<!-- Date Picker -->
	
    <link href="<?php echo base_url('/assets/css/bootstrap-datepicker.min.css'); ?>" rel="stylesheet">
	<!-- CS Select -->
	
    <link href="<?php echo base_url('/assets/css/cs-select.css'); ?>" rel="stylesheet">
	
    <link href="<?php echo base_url('/assets/css/cs-skin-border.css'); ?>" rel="stylesheet">

	
    <link href="<?php echo base_url('/assets/css/style.css'); ?>" rel="stylesheet">


	<!-- Modernizr JS -->
	
    <script src="<?php echo base_url('/assets/js/modernizr-2.6.2.min.js'); ?>"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->
	<style>
	.fh5co-cover .desc{
		top:20%;
	}
	.fh5co-hero{
		height:800px !important;
	}
	.fh5co-cover .desc h3,.fh5co-cover .desc p{
		color:black;
	}
	.fh5co-cover .desc p .login{
		color:#1862ef;
		text-decoration:underline;
	}
	.fh5co-cover .desc p .login:hover{
		color:#1862ef !important;
	}
	.login-logo{
		display:block;
		margin:0 auto;
	}
	.main label{
		color:#000;
		font-size:12px;
	}
	.main span{
		color:#000;
		font-size:14px;
	}
	.main .forgot{
		padding-top:1rem;
		text-decoration:underline;
	}
	@media screen and (max-width: 768px) {
		.fh5co-cover .desc .desc2 {
			display:block;
		}
		}
	</style>

</head>

<body>
	<div id="fh5co-wrapper">
		<div id="fh5co-page">

			<header id="fh5co-header-section" class="sticky-banner">
				<div class="container">
					<div class="nav-header">
						<a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle dark">
							<i></i>
						</a>
						<h1 id="fh5co-logo">
							<a href="<?php echo base_url(); ?>">
								<!-- <i class="icon-airplane"></i> -->
								<img src="<?php echo base_url('/assets/images/logo.png'); ?>">
							</a>
						</h1>
						<!-- START #fh5co-menu-wrap -->
						<nav id="fh5co-menu-wrap" role="navigation">
							<ul class="sf-menu" id="fh5co-primary-menu">
								<!-- <li class="active"><a href="index.html">Home</a></li> -->
								<!-- <li>
								<a href="vacation.html" class="fh5co-sub-ddown">Vacations</a>
								<ul class="fh5co-sub-menu">
									<li><a href="#">Family</a></li>
									<li><a href="#">CSS3 &amp; HTML5</a></li>
									<li><a href="#">Angular JS</a></li>
									<li><a href="#">Node JS</a></li>
									<li><a href="#">Django &amp; Python</a></li>
								</ul>
							</li>
							<li><a href="flight.html">Flights</a></li>
							<li><a href="hotel.html">Hotel</a></li>
							<li><a href="car.html">Car</a></li>
							<li><a href="blog.html">Blog</a></li> -->
								<li>
									<a href="<?php echo base_url('index.php/user/login'); ?>"> Already a member? Login</a>
								</li>
								<li>
									<a href="<?php echo base_url('index.php/user/aboutus'); ?>"> About Us</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</header>

			<!-- end:header-top -->

			<div class="fh5co-hero">
				<!-- <div class="fh5co-overlay"></div> -->
				<div class="fh5co-cover" data-stellar-background-ratio="0.1" style="height:100%; background-image: url(<?php echo base_url('/assets/images/aboutus.jpg'); ?>);">
					<div class="desc">
						<div class="container">
							<div class="row">
								
								<div class="desc2 animate-box">
									<div class="col-sm-offset-3 col-md-offset-4 col-sm-8 ">
										<!--  -->
										<div class="form-signin mg-btm">
										<img class="login-logo" src="<?php echo base_url('/assets/images/logo.png'); ?>">
											<h3 class="heading-desc text-center">Welcome Back</h3>
											<p class="text-center">Please Log in or <a href="" class="login">Sign Up Now</a> </p>
											<!-- <div class="social-box">
												<div class="row mg-btm">
												<div class="col-md-12">
													<a href="#" class="btn btn-primary btn-block">
													<i class="icon-facebook"></i>    Login with Facebook
													</a>
												</div>
												</div>
												
											</div> -->
											<div class="main">	
												<label>Username or Phone Number (ex. +243 305 679 621)</label>
												<input type="text" class="form-control" placeholder="Username or Phone Number" autofocus>
												<label >Password</label>
												<input type="password" class="form-control" placeholder="Password">
												
												<div class="checkbox pull-left">
													<label>
														<input type="checkbox"> <span>Remember Me</span>
													</label>	
												
												</div>
												<a href="" class="pull-right forgot"> Forgot Passwrod</a>
												<span class="clearfix"></span>	
											</div>
											<div class="login-footer">
											<div class="row">
															
															<div class="col-xs-12 col-md-12">
																
																<input type="submit" name="submit" value="Become a member" class="btn btn-default btn-block">
															</div>
														</div>
											
											</div>
										</div>





										<!--  -->
										
							
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<!-- after banner text -->
			
			<!--  -->

			<!-- -->
			
			<!-- fh5co-blog-section -->

			<!-- -->




			

			
			<footer>
				<div id="footer">
					<div class="container">
						
						<div class="row">
							<div class="col-md-6 col-md-offset-3 text-center">
								<p class="fh5co-social-icons">
									<a href="#">
										<i class="icon-twitter2"></i>
									</a>
									<a href="#">
										<i class="icon-facebook2"></i>
									</a>
									<a href="#">
										<i class="icon-instagram"></i>
									</a>
									<a href="#">
										<i class="icon-dribbble2"></i>
									</a>
									<a href="#">
										<i class="icon-youtube"></i>
									</a>
								</p>
								<p>Copyright 2018 Techlab Solutions.
									<!-- <a href="#">Module</a> -->
									All Rights Reserved.
									<!-- <br>Made with <i class="icon-heart3"></i> by <a href="http://freehtml5.co/" target="_blank">Freehtml5.co</a> / Demo Images: <a href="https://unsplash.com/" target="_blank">Unsplash</a> -->
								</p>
							</div>
						</div>
					</div>
				</div>
			</footer>



		</div>
		<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<!-- <script src="js/jquery.min.js"></script> -->
    <script src="<?php echo base_url('/assets/js/jquery.min.js'); ?>"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url('/assets/js/jquery.easing.1.3.js'); ?>"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url('/assets/js/bootstrap.min.js'); ?>"></script>
	<!-- Waypoints -->
	<script src="<?php echo base_url('/assets/js/jquery.waypoints.min.js'); ?>"></script>
	<script src="<?php echo base_url('/assets/js/sticky.js'); ?>"></script>

	<!-- Stellar -->
	<script src="<?php echo base_url('/assets/js/jquery.stellar.min.js'); ?>"></script>
	<!-- Superfish -->
	<script src="<?php echo base_url('/assets/js/hoverIntent.js'); ?>"></script>
	<script src="<?php echo base_url('/assets/js/superfish.js'); ?>"></script>
	<!-- Magnific Popup -->
	<script src="<?php echo base_url('/assets/js/jquery.magnific-popup.min.js'); ?>"></script>
	<script src="<?php echo base_url('/assets/js/magnific-popup-options.js'); ?>"></script>
	<!-- Date Picker -->
	<script src="<?php echo base_url('/assets/js/bootstrap-datepicker.min.js'); ?>"></script>
	<!-- CS Select -->
	<script src="<?php echo base_url('/assets/js/classie.js'); ?>"></script>
	<script src="<?php echo base_url('/assets/js/selectFx.js'); ?>"></script>

	<!-- Main JS -->
	<script src="<?php echo base_url('/assets/js/main.js'); ?>"></script>

</body>

</html>
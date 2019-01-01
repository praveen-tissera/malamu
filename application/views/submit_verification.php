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
		padding-left:15px;
		padding-right:15px;
		padding-top:10px;
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
	.error-style{
		display: block;
		margin-bottom: 0;
		margin-left: 1.5rem;
		margin-right: 1.5rem;
		color: white !important;
	}
	.notification{
		white-space: pre-wrap !important;
	}
	input[disabled] {
		background-color:#d0d0d0 !important;
	}
	</style>

</head>

<body>
	<div id="fh5co-wrapper">
		<div id="fh5co-page">

			

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
											<?php
											// echo $phone_number;
											// echo '<br>';
											// echo $db_record_id;
											if (!($this->session->userdata('verificaitionCode'))) {
   
												redirect('/user');
											}
											echo '<h3 class="heading-desc text-center">Enter Your Code</h3>';
											echo '<p class="text-center">Please take a moment to verify your phone number. This helps us confirm your identity and secure your account.</p>';
											if (isset($error_message_display)) {
												echo "<h3 class='notification label label-danger error-style'>". $error_message_display ."</h3>";
											}
											if(isset($success_message_display)){
												echo "<h3 class='notification label label-success error-style'>". $success_message_display ."</h3>";	
											}
											if(isset($verification_error)){
												echo "<h3 class='notification label label-danger error-style'>". $verification_error ."</h3>";
											}
											if(form_error('verification-code')){
												echo form_error('verification-code','<h3 class="nnotification label label-danger error-style">','</h3>');
											}
											echo form_open('user/verifyPhoneNumber');
											// $data = array(
											// 	'type' => 'hidden',
											// 	'name' => 'phone_number',
											// 	'value' => $phone_number,
											// 	);
											// 	echo form_input($data);

											// 	$data = array(
											// 		'type' => 'hidden',
											// 		'name' => 'db_record_id',
											// 		'value' => $db_record_id,
											// 		);
											// 		echo form_input($data);
											echo '<div class="main">	
											<label>A text message send to ‘phone number’ with a code, enter it below.</label>';
												$data = array(
													'type' => 'text',
													'name' => 'verification-code',
													'class' => 'form-control',
													'id' => 'from-place',
													'placeholder' => 'Verification Code',
													
													);
										
													echo form_input($data);
												echo '<span class="clearfix"></span>	
											</div>
											<div class="login-footer">
														<div class="row">
																<div class="col-xs-6">';
																echo form_submit('submit', 'Resend Code', "class='btn btn-default btn-block resend' disabled='disabled'");	
																echo '</div>	
																<div class="col-xs-6 col-md-6">';
																	echo form_submit('submit', 'Verify', "class='btn btn-default btn-block'");
																	echo form_close();	
																	
																echo '</div>';
																echo "<div class='col-xs-12'>";
																echo '<p>Note: This can take a few minutes. Retry after 5 minutes.</p>';
																echo "</div>";
														
														echo '</div>
											
											</div>';
											?>
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
						<div class="col-sm-7 col-md-8 text-left">
								<p>Copyright 2018 Techlab Solutions.
									<!-- <a href="#">Module</a> -->
									All Rights Reserved.
									<!-- <br>Made with <i class="icon-heart3"></i> by <a href="http://freehtml5.co/" target="_blank">Freehtml5.co</a> / Demo Images: <a href="https://unsplash.com/" target="_blank">Unsplash</a> -->
								</p>
								
							</div>
							<div class="col-sm-5 col-md-4 text-center">
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
	<script>
	var fewSeconds = 3;
		$(document).ready(function(){
			setTimeout(function(){
				$('.resend').prop('disabled', false);
			}, fewSeconds*1000);
		});

	</script>
</body>

</html>
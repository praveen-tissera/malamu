
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

    <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'>
    <!-- Bootstrap  -->
	
    <link href="<?php echo base_url('/assets/css/bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('/assets/css/style.css'); ?>" rel="stylesheet">
    <!-- Icomoon Icon Fonts-->
	
    <link href="<?php echo base_url('/assets/css/icomoon.css'); ?>" rel="stylesheet">
	<style>
	.progress-bar-success{
		background-color: #7ae27a;
	}
	.left-menu{
		list-style-type:none;
		padding-left:0;
	}
	.progress{
		background-color: #d0d0d0;
	}
	</style>
</head>

    <body>
        <div class="container-fluid">
		
            <div class="row">
            
                <div class="col-sm-2 col-md-2 pt-4">
                    <img class="login-logo" src="<?php echo base_url('/assets/images/logo.png'); ?>">
                    <!-- user profile menu  -->
                    <div class="dropdown">
                        <a id="dLabel" data-target="#" href="" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                            Hi, John
                            <span class="caret"></span>
                        </a>

                        <ul class="dropdown-menu " aria-labelledby="dLabel">
                            <li>
                                <a href="">Payment Options</a>
                                <a href="">Redeem Refer Points</a>
                                <a href="">Log Out</a>
                            </li>
                        </ul>
                    </div>
                    <!-- end of user profile menu -->

                    <ul class="left-menu pt-5">
                        <li><a href="">Dashboard</a></li>
                        <li><a href="">My Wallet</a></li>
                        <li><a href="">Invite Friends</a></li>
                        <li><a href="">Help</a></li>
                    
                    </ul>

					<img src="https://via.placeholder.com/160x500?text=160x500+Wide+Skyscaper" alt="">




                
                </div>
                <div class="col-sm-10 col-md-10 middle-section">
				
					<div class="row pt-4">
					
						<div class="col-sm-2 col-md-2">
							<strong>Wallet #392</strong> 
						</div>
						
                        <div class="col-sm-8 col-md-8">
							<div class="col-sm-3 col-md-3 text-center pull-left">Money Accumulated<br>
								105 Points
							</div>
							<div class="col-sm-6 col-md-6 col-md-offset-3 text-center">Money Untill Payout<br>
								895 Points
							
							</div>
							<div class="col-sm-12 col-md-12 pt-2">

								<div class="progress">
									<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
										60%
									</div>
                            	</div>
							</div>
                            
                        
                        </div>



					</div>
                        
                            <div class="col-sm-10 col-md-10 text-center">
								<div class="middle-container">
									<div class="row">
										<div class="col-sm-12 col-md-12">
											<h1 class="text-center"> <strong>HELPING IS GOOD</strong></h1>
											<img class="img-responsive"  style="margin:auto;"  src="https://via.placeholder.com/728x90?text=728x90+Leaderboard" alt="">

											<h3 class="text-center pt-4">Enter your cell phone number we would be happy to answer your question!</h3>
											<h3 class="text-center">Have a good day!</h3>
											<?php 
											if(form_error('first_name') || form_error('last_name') || form_error('contact_number') || form_error('help_type')){
												echo form_error('first_name','<h3 class="notification label label-danger">','</h3><br><br>');
												echo form_error('last_name','<h3 class="notification label label-danger">','</h3><br><br>');
												echo form_error('contact_number','<h3 class="notification label label-danger">','</h3><br><br>');
												echo form_error('help_type','<h3 class="notification label label-danger">','</h3><br><br>');
											}

											if(isset($error_message_display)){
												echo "<h3 class='notification label label-danger'>". $error_message_display ."</h3>";
											}

											if(isset($success_message_display)){
												echo "<h3 class=' notification label label-success'>". $success_message_display ."</h3>";
											}
											
											?>
										</div>
										
									</div>
									
									<div class="row pt-4">
									
									<?php 
										echo form_open('user/sendHelp');
										echo "<div class='col-sm-6 col-md-6'>";
											echo "<div class='form-group'>";
												$data = array(
													'type' => 'text',
													'name' => 'first_name',
													'class' => 'form-control',
													'id' => 'from-place',
													'placeholder' => 'FIRST NAME',
													
													);
										
													echo form_input($data);
											echo "</div>";
										echo "</div>";
										echo "<div class='col-sm-6 col-md-6'>";
											echo "<div class='form-group'>";
											$data = array(
												'type' => 'text',
												'name' => 'last_name',
												'class' => 'form-control',
												'id' => 'from-place',
												'placeholder' => 'LAST NAME',
												
												);
									
												echo form_input($data);
											echo "</div>";
										echo "</div>";
										echo "<div class='col-sm-12 col-md-12'>";
										echo "<div class='form-group'>";
										$data = array(
											'type' => 'text',
											'name' => 'contact_number',
											'class' => 'form-control',
											'id' => 'from-place',
											'placeholder' => 'CELL PHONE NUMBER',
											
											);
								
											echo form_input($data);
											echo "</div>";
										echo "</div>";

										echo "<div class='col-sm-12 col-md-12'>";
										echo "<div class='form-group'>";
										$data = array(
											'type' => 'text',
											'name' => 'help_type',
											'class' => 'form-control',
											'id' => 'from-place',
											'placeholder' => 'WHAT TYPE DO YOU NEED? (Drop box menu)',
											
											);
								
											echo form_input($data);
											echo "</div>";
										echo "</div>";
										echo "<div class='col-sm-12 col-md-12'>";
										echo "<div class='form-group'>";
										$data = array(
											'type' => 'text',
											'name' => 'question',
											'class' => 'form-control',
											'id' => 'from-place',
											'placeholder' => 'WHAT IS YOUR QUESTION',
											
											);
								
											echo form_textarea($data);
											echo "</div>";
										echo "</div>";

										echo "<div class='col-sm-4 col-md-4  col-sm-offset-4'>";
										echo "<div class='form-group'>";
										echo form_submit('submit', 'SUBMIT', "class='btn btn-default btn-block'");
										echo "</div>";
										echo "</div>";

                   						echo form_close();	

									
									?>
									
									</div>

									
								</div>
								<div class="row">
								<div class="col-sm-12 col-md-12">
										<img class="img-responsive" style="margin:auto;"  src="https://via.placeholder.com/728x90?text=728x90+Leaderboard" alt="">
									</div>
								</div>
								
							
							</div>
                            <div class=" col-sm-2 col-md-2 text-center " >
								<img class="img-responsive" src="https://via.placeholder.com/160x600?text=160x600+Wide+Skyscaper" alt="">
							</div>
                </div>

            </div>
            
                <footer class="row">
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

        <!-- jQuery -->


	<!-- <script src="js/jquery.min.js"></script> -->
    <script src="<?php echo base_url('/assets/js/jquery.min.js'); ?>"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo base_url('/assets/js/jquery.easing.1.3.js'); ?>"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url('/assets/js/bootstrap.min.js'); ?>"></script>
    <script>
         $('.dropdown-toggle').dropdown()
    </script>
       
    </body>
</html>

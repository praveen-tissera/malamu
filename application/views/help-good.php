
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
                    <img class="logo" src="<?php echo base_url('/assets/images/logo.png'); ?>">
                    <!-- user profile menu  -->
                    <?php $this->load->view('left-menu'); ?>

					<img src="https://via.placeholder.com/160x500?text=160x500+Wide+Skyscaper" alt="">




                
                </div>
                <div class="col-sm-10 col-md-10 middle-section">
				<!-- load my-wallet -->
				<?php $this->load->view('my-wallet'); ?>

                        
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
            <!-- load footer -->
            <?php $this->load->view('footer');  ?>

          



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


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
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.1/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <!-- Bootstrap  -->
	
    <link href="<?php echo base_url('/assets/css/bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?php echo base_url('/assets/css/style.css'); ?>" rel="stylesheet">
    <!-- Icomoon Icon Fonts-->
	
    <link href="<?php echo base_url('/assets/css/icomoon.css'); ?>" rel="stylesheet">
	<style>
	.progress-bar-success{
		background-color: #2dd1b8;
	}
	.left-menu{
		list-style-type:none;
		padding-left:0;
	}
	.progress{
		background-color: #d0d0d0;
	}
	.wallet-balance{
		border-right: #2dc1ec 1px solid;
	}
	.wallet-balance .wallet-amount{
		color:#2dc1ec;
	}

	/* steps to refer friend */



.stepwizard-row {
    display: table-row;
}

.stepwizard {
    display: table;
    width: 100%;
    position: relative;
}


.stepwizard-row:before {
    top: 25px;
    bottom: 0;
    position: absolute;
    content: " ";
    width: 70%;
    height: 5px;
    background-color: #337ab7;
	left:15%;
}

.stepwizard-step {
    display: table-cell;
    text-align: center;
    position: relative;
}

.btn-circle {
  width: 50px;
  height: 50px;
  text-align: center;
  padding: 12px 0;
  font-size: 16px;
  line-height: 1.428571429;
  border-radius: 25px;
}


/*survey steps*/
.survey-steps{
	border-radius: 25px;
    height: 10px;
}
.survey-steps .progress-bar-warning{
	background-color:#7cc576;
	border-radius: 25px;
}
.survey-label{
	font-size:15px;
}
.survey-form-heading{
	text-align: center;
    background-color: #3ab54b;
    color: #fff;
}
.survey-question li:first-letter{
	text-transform:	capitalize;
}
.form-submission{
	height:40px;
	background-color:#ccc;
}
.tbl-survey{
	border:#3ab54b 2px solid;
}
.cash-pickup{
	width:100px;
	height:100px;
	background-image:url(<?php echo base_url('/assets/images/cach_pickup.png') ?>);
	background-size: contain;
	position:relative;

}
.cash-pickup:hover{
	width:100px;
	height:100px;
	background-image:url(<?php echo base_url('/assets/images/cach_pickup_hover.png') ?>);
	background-size: contain;
	color:#3cb54c;

}
.cash-pickup>div{
	display: block;
    position: absolute;
	bottom: -40px;
	left:4px;
	font-weight:bold;
	font-size:14px;
}
.mobile-transfer>div{
	display: block;
    position: absolute;
	bottom: -40px;
	font-weight:bold;
	font-size:14px;
	left:-15px;
}

.mobile-transfer{
	width:100px;
	height:100px;
	background-image:url(<?php echo base_url('/assets/images/mobile_transfer.png') ?>);
	background-size: contain;
	
}
.mobile-transfer:hover{
	width:100px;
	height:100px;
	background-image:url(<?php echo base_url('/assets/images/mobile_transfer_hover.png') ?>);
	background-size: contain;
	color:#3cb54c;
}
.tbl-survey .note{
	border:#3cb54c 2px solid;
}
#cash,#mobile{
	display:none;
}
input[type="radio"]:checked~label{
	background-color:#000;
	border-radius:5px;
}
.exchange-rate span{
		display:block;
}
.exchange-rate .amount{
	font-weight:bold;
	font-size:30px;
}
.exchange-rate li{
	padding-left:36px;
}

	</style>
</head>

    <body>
	<?php $this->load->view('navbar'); ?>
        <div class="container-fluid">
		
            <div class="row">
            
                <div class="col-xs-9 col-xs-3 col-sm-2 col-md-2 text-center">
                    <!-- <img class="logo" src="<?php echo base_url('/assets/images/logo.png'); ?>">
					<h4 class="mb-0">MALAMU</h4> -->
                    <!-- user profile menu  -->
                    <?php $this->load->view('left-menu'); ?>

					<!-- <img src="https://via.placeholder.com/200x500?text=160x500+Wide+Skyscaper" alt=""> -->
					



                
                </div>
                <div class="col-xs-9 col-sm-10 col-md-10 middle-section">
				<!-- load my-wallet -->
				<?php $this->load->view('my-wallet'); ?>

                        
                            <div class="col-sm-10 col-md-10 text-center">
								
								

								<div class="middle-container">
									<div class="row tbl-withdraw">
										
											<div class="col-sm-12 col-md-12">
												<div class="row">

												
													<h2 class="text-left survey-form-heading pt-4 pb-4"><em>Withdraw Fund</em></h2>
													
													<div class="col-sm-12 col-sm-offset-0">
														

															<ul class="step d-flex flex-nowrap mb-5" style="display:flex;">
																<li class="step-item ">
																	<a href="#!" class="">Method of Payment</a>
																</li>
																<li class="step-item active">
																	<a href="#!" class="">Contact Information</a>
																</li>
																<li class="step-item ">
																	<a href="#!" class="">Account Overview</a>
																</li>
																
															</ul> 
															<ul class="list-inline exchange-rate">
																<li>
																	<span class="amount">$1</span>
																	<span>Malamu Dollars</span></li>
																<li><i class="fas fa-exchange-alt fa-2x"></i></li>
																<li>
																	<span class="amount">$0.25</span>
																	<span>U.S Dollars</span>
																</li>
															</ul>
														<?php echo form_open('User/withdrawStepThree'); ?>
														
														<?php 
														
															if($this->session->userdata['pay_method'] == 'cash'){
																
																echo "<div class='row'>";
																	echo "<div class='col-sm-6 text-left'>";
																		echo "<div class='form-group mb-1'>";
																			echo "<label for='fname'>Frist Name *</label>";
																			echo "<input id='fname' type='text'  class='form-control' aria-describedby='first name'>";
																		echo "</div>";
																		echo "<span class='help-block'>(?) Please enter your full legal name. It must match their valid, government-issued photo ID for your to successfully collect their funds</span>";
																	echo "</div>";
																	echo "<div class='col-sm-6 text-left'>";
																			echo "<div class='form-group mb-1'>";
																				echo "<label for='country'>Country *</label>";
																				echo "<input id='country type='text'  class='form-control' aria-describedby='helpBlock'>";
																			echo "</div>";
																			echo "<span id='helpBlock' class='help-block'>(?) Indicate your current country</span>";
																	echo "</div>";
																echo "</div>";
																echo "<div class='row'>";
																	echo "<div class='col-sm-6 text-left'>";
																		echo "<div class='form-group mb-1'>";
																			echo "<label for='mname'>Middle Name</label>";
																			echo "<input id='mname' type='text'  class='form-control' aria-describedby='first name'>";
																		echo "</div>";
																		echo "<span class='help-block'>(?) Please enter your full legal name. It must match their valid, government-issued photo ID for your to successfully collect their funds</span>";
																	echo "</div>";
																	echo "<div class='col-sm-6 text-left'>";
																			echo "<div class='form-group mb-1'>";
																				echo "<label for='city'>City *</label>";
																				echo "<input id='city' type='text'  class='form-control' aria-describedby='helpBlock'>";
																			echo "</div>";
																			echo "<span id='helpBlock' class='help-block'>(?) Indicate your current city</span>";
																	echo "</div>";
																echo "</div>";

																echo "<div class='row'>";
																	echo "<div class='col-sm-6 text-left'>";
																		echo "<div class='form-group mb-1'>";
																			echo "<label for='lname'>Last Name *</label>";
																			echo "<input id='lname' type='text'  class='form-control' aria-describedby='first name'>";
																		echo "</div>";
																		echo "<span class='help-block'>(?) Please enter your full legal name. It must match their valid, government-issued photo ID for your to successfully collect their funds</span>";
																	echo "</div>";
																	echo "<div class='col-sm-6 text-left'>";
																			echo "<div class='form-group mb-1'>";
																				echo "<label for='mobile'>Mobile Number *</label>";
																				echo "<input id='country type='text'  class='form-control' aria-describedby='helpBlock'>";
																			echo "</div>";
																			echo "<span id='helpBlock' class='help-block'>(?) Please enter the same mobile number you used to register Malamu account </span>";
																	echo "</div>";
																echo "</div>";
																

																
															}else{
																
																echo "<div class='row'>";
																	echo "<div class='col-sm-6 text-left'>";
																		echo "<div class='form-group mb-1'>";
																			echo "<label for='fname'>Full Name *</label>";
																			echo "<input id='fname' type='text'  class='form-control' aria-describedby='first name'>";
																		echo "</div>";
																		echo "<span class='help-block'>(?) Please enter your full legal name. It must match their valid, government-issued photo ID for them to sucessfully collec their funds</span>";
																	echo "</div>";
																	echo "<div class='col-sm-6 text-left'>";
																			echo "<div class='form-group mb-1'>";
																				echo "<label for='country'>Mobile money account number *</label>";
																				echo "<input id='country type='text'  class='form-control' aria-describedby='helpBlock'>";
																			echo "</div>";
																			echo "<span id='helpBlock' class='help-block'>(?) Indicate your Mobile money account number</span>";
																	echo "</div>";
																echo "</div>";
																echo "<div class='row'>";
																	echo "<div class='col-sm-6 text-left'>";
																		echo "<div class='form-group mb-1'>";
																			echo "<label for='mname'>Contry *</label>";
																			echo "<input id='mname' type='text'  class='form-control' aria-describedby='first name'>";
																		echo "</div>";
																		echo "<span class='help-block'>(?) Indicate your country</span>";
																	echo "</div>";
																	echo "<div class='col-sm-6 text-left'>";
																			echo "<div class='form-group mb-1'>";
																				echo "<label for='city'>Re-enter Mobile money account number *</label>";
																				echo "<input id='city' type='text'  class='form-control' aria-describedby='helpBlock'>";
																			echo "</div>";
																			echo "<span id='helpBlock' class='help-block'>(?) Re-enter Mobile money account number</span>";
																	echo "</div>";
																echo "</div>";

																echo "<div class='row'>";
																	echo "<div class='col-sm-6 text-left'>";
																		echo "<div class='form-group mb-1'>";
																			echo "<label for='lname'>City *</label>";
																			echo "<input id='lname' type='text'  class='form-control' aria-describedby='first name'>";
																		echo "</div>";
																		echo "<span class='help-block'>(?) Indicate your city</span>";
																	echo "</div>";
																	echo "<div class='col-sm-6 text-left'>";
																			echo "<div class='form-group mb-1'>";
																				echo "<label for='mobile'>Mobile Number *</label>";
																				echo "<input id='country type='text'  class='form-control' aria-describedby='helpBlock'>";
																			echo "</div>";
																			echo "<span id='helpBlock' class='help-block'>(?) Please enter the same mobile number you used to register Malamu account </span>";
																	echo "</div>";
																echo "</div>";
															}
														
														?>
														
	
														
													</div>
													
													<div class="col-sm-12 pl-1 pr-0">
														<ul class="list-inline form-submission mb-0">
															 <li class="pull-left"><a href="<?php echo base_url('index.php/User/withdrawStepOne') ?>" class="btn">Prev</a></li> 
															<li class="pull-right"><button type="submit" class="btn btn-link ">Next</button></li>
														</ul>
													</div>
													<?php echo form_close(); ?>
												
											</div>
											

										</div>
										
										
										
									</div>

								</div>

							</div>

							
                            <div class=" col-sm-2 col-md-2 text-center hidden-xs" >
								<!-- <img class="img-responsive" src="https://via.placeholder.com/160x600?text=160x600+Wide+Skyscaper" alt=""> -->
								<a href="https://yllix.com/publishers/697744" target="_blank"><img src="//ylx-aff.advertica-cdn.com/pub_le6kgi.png" width="160" height="600" border="0" alt="Monetize your website traffic with yX Media" title="Monetize your website traffic with yX Media" /></a>
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

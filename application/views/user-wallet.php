
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
    width: 75%;
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

/*earning table*/
.earning th{
	color:#000000;
}
	</style>
</head>

    <body>
	<?php $this->load->view('navbar'); ?>
        <div class="container-fluid">
		
            <div class="row">
            
                <div class="col-sm-2 col-md-2 text-center">
                    <img class="logo" src="<?php echo base_url('/assets/images/logo.png'); ?>">
					<h4 class="mb-0">MALAMU</h4>
                    <!-- user profile menu  -->
                    <?php $this->load->view('left-menu'); ?>

					<img src="https://via.placeholder.com/200x500?text=160x500+Wide+Skyscaper" alt="">
					



                
                </div>
                <div class="col-sm-10 col-md-10 middle-section">
				<!-- load my-wallet -->
				<?php $this->load->view('my-wallet'); ?>

                        
                            <div class="col-sm-10 col-md-10 text-center">
								<div class="middle-container">
									<div class="row">
										<div class="col-sm-12 col-md-12">
											<div class="col-sm-12">
												<h1 class="text-center"> 
												<?php if (isset($this->session->userdata['userID'])) {
													$wallet_number = sprintf("%03d", $this->session->userdata['userID']);
													echo 'My Wallet #'. $wallet_number;
												} ?>
												</h1>
											</div>
											
											<div class="col-sm-6 wallet-balance">
												<h2 class="wallet-amount">$203 MD</h2>
												<h2>Wallet Balance</h2>
											
											</div>
											<div class="col-sm-6">
												<h4>“type an inspiring quote as they withdraw”</h4>	
												<a href="" class="btn btn-info">Withdraw</a>
											</div>

											
										</div>
										
									</div>

								</div>
								<div class="middle-container">
									<div class="row">
										<div class="col-sm-12 col-md-12">
										
												<h1 class="text-center"> <strong>Invite a friend, you both get $5 MD</strong></h1>
												<img style="width:243px;margin-left:auto;margin-right:auto;" class="img-responsive" src="<?php echo base_url('/assets/images/friend_earns.jpg'); ?>" alt="">
												<h4>It’s super easy to refer a friend. Share the goodness as much as you can!</h4>
												<!--  -->

												<div class="stepwizard">
													<div class="stepwizard-row setup-panel">
														<div class="stepwizard-step">
															<span   class="btn btn-primary btn-circle">1</span>
															<p>Refer a friend</p>
														</div>
														<div class="stepwizard-step">
														<span   class="btn btn-primary btn-circle">2</span>
															<p>Your frident gets $5 </p>
														</div>
														<div class="stepwizard-step">
														<span   class="btn btn-primary btn-circle">3</span>
															<p>You get $5</p>
														</div>
													</div>
												</div>


												<!--  -->

												<div class="col-sm-11 col-sm-offset-1">
													<a href="<?php echo base_url('index.php/user/viewInviteFriend'); ?>" class="btn btn-info">Send invitation</a>
												</div>

										</div>
										
									</div>

								</div>

								<div class="middle-container">
									<div class="row">
										<div class="col-sm-12 col-md-12">
											<a href="<?php echo base_url('index.php/user/viewuseractivities'); ?>" class="pull-right">See all activity ></a><br>
											<h1 class="text-center">History of earnings</h1>
											<table class="table table-bordered table-responsive earning">
												<thead >
													<tr>
														<th class="text-center">Type</th>
														<th class="text-center">Details</th>
														<th class="text-center">Amount</th>
														<th class="text-center">Date</th>
													</tr>
												</thead>
												<tbody>
													<tr>
														<th socpe="row" class="text-center">Survey</th>
														<td>(name of survey)</td>
														<td>$3.00 </td>
														<td>Dec, 12 - 2019</td>
													</tr>
													<tr>
														<th socpe="row" class="text-center">Survey</th>
														<td>(name of survey)</td>
														<td>$3.00 </td>
														<td>Dec, 12 - 2019</td>
													</tr>
												</tbody>
											</table>
											

										</div>
										
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

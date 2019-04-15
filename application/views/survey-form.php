
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
	<!-- google ads -->
	<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
	<script>
	(adsbygoogle = window.adsbygoogle || []).push({
		google_ad_client: "ca-pub-6199427025925151",
		enable_page_level_ads: true
	});
	</script>
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
											<div class="tbl-survey">
											<h2 class="text-left survey-form-heading pt-4 pb-4">Customer Service Satisfaction</h2>
											
											<div class="col-sm-6 col-sm-offset-3">
											<span class="pull-left survey-label">5 of 20 answered  &nbsp;</span>
												<div class="progress survey-steps mt-2">
													
												<div class="progress-bar progress-bar-warning " role="progressbar" aria-valuenow="40" aria-valuemin="0" aria-valuemax="100" style="width: 40%">
													<span class="sr-only">40% Complete (success)</span>
												</div>
												</div>
											</div>
											
											<table class="table text-left mb-0">
												
												<tbody>
													<tr>
														<td>
															<ol start="6" class="survey-question pl-4">
																<li>in general, how satisfied or dissatisfied are you with our company ?</li>
															</ol>
															<form action="">
															<div class="radio">
																<label>
																	<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
																	very satisfied
																</label>
															</div>
															<div class="radio">
																<label>
																	<input type="radio" name="optionsRadios" id="optionsRadios1" value="option1">
																	very satisfied
																</label>
															</div>

															<div>
															<ul class="list-inline form-submission mb-0">
																<li class="pull-left"><a href="" class="btn">Prev</a></li>
																<li class="pull-right"><button type="submit" class="btn btn-link ">Next</button></li>
															</ul>
															</div>
															
															
															
															
															</form>
														</td>
													
													</tr>
										
												</tbody>
											</table>
											
											</div>
											

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

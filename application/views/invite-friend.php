
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
    .refer-friend{
        width:100%;
        height:150px;
        background-color:#586eda;
        border-radius:10px 10px 0 0;
        position:relative;
    }
    .share{
        width:100%;
        min-height:300px;
        background-color:#fff;
        margin-top:1rem;
        margin-bottom:1rem;
        box-shadow: 0px 1px 3px #888888;
    }
    .share .wallet-number{
        color:#df9320;
    }
    .referal-status{
        background-color:#fff;
        padding:1rem;
    }
    .invite{
        border-top: 1px solid #d8d4d4;
    }
    .refer-friend h1, .refer-friend p, .refer-friend h3{
        color:#FFF;
    }
    .refer-friend .promo-label{
        position:absolute;
        right:20px;
        top:0;
        background-color:#ffb100;
        color:#FFF;
        border-radius:0 0 10px 10px;
        box-shadow:0px 1px 0px #000;
        
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
							</li>
							<li>
								<a href="">Redeem Refer Points</a>
							</li>
							<li role="separator" class="divider"></li>
							<li><a href="">Log Out</a></li>
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
						
                        <div class="col-sm-6 col-md-8">
							<div class="col-sm-3 col-md-3 text-center pull-left">Money Accumulated<br>
								$105 Points
							</div>
							<div class="col-sm-6 col-md-6 col-md-offset-3 text-center">Money Untill Payout<br>
								$895 Points
							
							</div>
							<div class="col-sm-12 col-md-12 pt-2">

								<div class="progress">
									<div class="progress-bar progress-bar-success" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 70%;">
										60%
									</div>
                            	</div>
							</div>
                            
                        
                        </div>
                        <div class="take-surve">
                            <button type="button" class="btn btn-primary">Take Survey</button>
                            
                        </div>



					</div>
                        
                            <div class="col-sm-10 col-md-10 text-center">

                                <div class="row">
                                    <div class="col-sm-12 mb-4">
                                        <div class="refer-friend">
                                            <h1 class="text-left pl-4 pr-4 pt-5 ">Refer Friends & Earn Money</h1>
                                            <p class="text-left pl-4">Invite a friend to Malamu and you'll receive $5 to your wallet</p>
                                            <div class="promo-label">
                                                <h1 class="pl-4 pt-4 pr-4">$5</h1>
                                                <h3 class="pl-4 pr-4">Wallet Balance</h3>
                                            </div>
                                        </div>
                                        

                                        
                                    </div>
                                    <div class="col-sm-12 mb-4" >
                                        <div class="share ">
                                            <div class="col-sm-12">
                                                <form class="form-inline pt-4">
                                                    <div class="form-group pt-4" style="width:70%">
                                                        
                                                        <input type="text" style="width:100%" class="form-control" id="exampleInputName2" placeholder="Enter Cell Phone Number">
                                                    </div>
                                                    
                                                    <button type="submit" class="btn btn-warning mt-4">Send invite</button>
                                                </form>
                                            </div>
                                            <div class="col-sm-12">
                                                <h1 class="pt-4 wallet-number">Your wallet number is 392</h1>
                                                
                                            </div>
                                            
                                            

                                            
                                            <div class="col-sm-4">
                                                <hr class="invite">
                                            </div>
                                            <div class="col-sm-4">
                                               <label>More ways to invite your friends</label> 
                                            </div>
                                            <div class="col-sm-4">
                                                <hr class="invite">
                                            </div>




                                        <div class="col-sm-2">
                                            <p>Share Your Link:</p>
                                        </div>
                                        <div class="col-sm-4">
                                                <div class="input-group col-md-12">
                                                    <input type="text" class="form-control input-sm" placeholder="Buscar" />
                                                    <span class="input-group-btn">
                                                        <button class="btn btn-info btn-sm" type="button">
                                                            <i class="glyphicon glyphicon-link"></i> Copy Link
                                                        </button>
                                                    </span>
                                                </div>
                                        
                                        </div>

                                        <div class="col-sm-6">
                                            <ul class="list-inline">
                                                <li>
                                                <a class="btn icon-btn btn-primary" href="#"><span class="glyphicon btn-glyphicon glyphicon-thumbs-up img-circle text-primary"></span>Like</a>
                                                </li>
                                                <li>
                                                <a class="btn icon-btn btn-primary" href="#"><span class="glyphicon btn-glyphicon glyphicon-thumbs-up img-circle text-primary"></span>Like</a>
                                                </li>
                                                <li>
                                                <a class="btn icon-btn btn-primary" href="#"><span class="glyphicon btn-glyphicon glyphicon-thumbs-up img-circle text-primary"></span>Like</a>
                                                </li>
                                            </ul>
                                        </div>




                                        </div>
                                        
                                    </div>
                                    <div class="col-sm-12 mb-4">
                                         <img class="img-responsive"  style="margin:auto;"  src="https://via.placeholder.com/908x120?text=908x120+Leaderboard" alt="">
                                    </div>
                                </div>

                                




								<div class="middle-container mt-4">
									<div class="row">
										<div class="col-sm-12 col-md-12">
											<h1 class="text-center"> <strong>How it works</strong></h1>
											

											<h3 class="text-center pt-4">It’s super easy to refer a friend. Share the goodness as much as you can!</h3>
											
											
										</div>
										
									</div>
									
									<div class="row pt-4">
                                        <div class="col-md-4">
                                        <img style="width:250px;margin-left:auto;margin-right:auto;" class="img-responsive" src="<?php echo base_url('/assets/images/you_earn.jpg'); ?>" alt="">
                                               <h2> Refer a friend</h2>
                                               <p>
                                               Invite your friend to Malamu using your wallet number
                                               </p>
                                        </div>
                                        <div class="col-md-4">
                                        <img style="width:250px;margin-left:auto;margin-right:auto;" class="img-responsive" src="<?php echo base_url('/assets/images/you_earn.jpg'); ?>" alt="">
                                           <h2>Your friend gets  $5</h2> 
                                           <p>
                                           Your friend gets $5 towards their wallet balance when they claim your wallet number.
                                           </p>
                                        </div>
                                        <div class="col-md-4">
                                        <img style="width:243px;margin-left:auto;margin-right:auto;" class="img-responsive" src="<?php echo base_url('/assets/images/friend_earns.jpg'); ?>" alt="">
                                           <h2>You get $5</h2>
                                           <p>
                                           When they claim your wallet number you’ll get $5 towards your wallet balance.

                                           </p>
                                        </div>
									
									
									</div>

									
								</div>
								<div class="row">
								    <div class="col-sm-12 col-md-12">
										<img class="img-responsive" style="margin:auto;"  src="https://via.placeholder.com/728x90?text=728x90+Leaderboard" alt="">
									</div>
                                </div>
                                <div class="row mt-4 mb-4">
                                    <div class="col-md-4 ">
                                        <div class="referal-status">
                                            <h2 class="pt-4"> <strong>32</strong></h2>
                                            <img style="width:200px;margin-left:auto;margin-right:auto;" class="img-responsive text-center" src="<?php echo base_url('/assets/images/referral_signups.jpg'); ?>" alt="">
                                            <h3>Referral Signups</h3>
                                        </div>
                                        
                                    </div>
                                    <div class="col-md-4 ">
                                    <div class="referal-status">
                                        <h2 class="pt-4"> <strong>13</strong></h2>
                                        <img style="width:200px;margin-left:auto;margin-right:auto;" class="img-responsive" src="<?php echo base_url('/assets/images/referral_successful.jpg'); ?>" alt="">
                                        <h3>Successful Referrals</h3>
                                    </div>
                                        
                                    </div>
                                    <div class="col-md-4 ">
                                    <div class="referal-status"> 
                                        <h2 class="pt-4"> <strong>$50</strong></h2>
                                        <img style="width:218px;margin-left:auto;margin-right:auto;" class="img-responsive" src="<?php echo base_url('/assets/images/money_earn.jpg'); ?>" alt="">
                                        <h3>Money Earned</h3>
                                    </div>
                                        
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
								<p>Copyright @2019 The Malamu Organization.
									<!-- <a href="#">Module</a> -->
									All Rights Reserved.
									<!-- <br>Made with <i class="icon-heart3"></i> by <a href="http://freehtml5.co/" target="_blank">Freehtml5.co</a> / Demo Images: <a href="https://unsplash.com/" target="_blank">Unsplash</a> -->
								</p>
								
							</div>
							<div class="col-sm-5 col-md-4 text-center">
								<p class="fh5co-social-icons">
									<!-- <a href="#">
										<i class="icon-twitter2"></i>
									</a> -->
									<a href="#">
										<i class="icon-facebook2"></i>
									</a>
									<a href="#">
										<i class="icon-instagram"></i>
									</a>
									<!-- <a href="#">
										<i class="icon-dribbble2"></i>
									</a>
									<a href="#">
										<i class="icon-youtube"></i>
									</a> -->
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


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


    <!-- <script src="js/jquery.min.js"></script> -->
    <script src="<?php echo base_url('/assets/js/jquery.min.js'); ?>"></script>
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
    .messenger{
        background-color:#0084ff;
        color:#FFF;
    }
    .facebook{
        background-color:#3B5998;
        color:#FFF;
    }
    .whatsapp{
        background-color:#075e54;
        color:#FFF;
    }
    .input-md{
		border: 2px dashed #ccc !important;
	}
    .m-messenger{
        display:none;
    }
    @media only screen and (max-width: 760px) {
        .d-messenger { display: none; }
        .m-messenger { display: block; }
    }
    
    
	</style>
</head>

    <body>
    <?php $this->load->view('navbar'); ?>
        <div class="container-fluid">
		
            <div class="row">
            
                <div class="col-sm-2 col-md-2 text-center">
                    <img class="login-logo logo" src="<?php echo base_url('/assets/images/logo.png'); ?>">
                    <h4 class="mb-0">MALAMU</h4>
                    <!-- user profile menu  -->
                    <?php $this->load->view('left-menu'); ?>

					<img src="https://via.placeholder.com/200x500?text=160x500+Wide+Skyscaper" alt="">




                
                </div>
                <div class="col-sm-10 col-md-10 middle-section">
				
					<?php $this->load->view('my-wallet.php'); ?>
                        
                            <div class="col-sm-10 col-md-10 text-center">

                                <div class="row">
                                    <div class="col-sm-12 mb-4">
                                        <div class="refer-friend">
                                            <h1 class="text-left pl-4 pr-4 pt-5 ">Refer Friends & Earn Money</h1>
                                            <p class="text-left pl-4">Invite a friend to Malamu and you'll receive $5 to your wallet</p>
                                            <!-- <div class="promo-label">
                                                <h1 class="pl-4 pt-4 pr-4">$5</h1>
                                                <h3 class="pl-4 pr-4">Wallet Balance</h3>
                                            </div> -->
                                        </div>
                                        

                                        
                                    </div>
                                    <div class="col-sm-12 mb-4" >
                                        <div class="share ">
                                        <div class="row">
                                            <div class="col-sm-12">
                                                    <form class="form-inline pt-4">
                                                        <div class="form-group pt-4" style="width:70%">
                                                            
                                                            <input type="text" style="width:100%" class="form-control" id="exampleInputName2" placeholder="Enter your friend’s cell phone number">
                                                        </div>
                                                        
                                                        <button type="submit" class="btn btn-warning mt-4">Send invite</button>
                                                    </form>
                                                </div>
                                                <div class="col-sm-12">
                                                    <h1 class="pt-4 wallet-number">Your wallet number is 
                                                    <?php if (isset($this->session->userdata['userID'])) {
                                                        $wallet_number = sprintf("%03d", $this->session->userdata['userID']);
                                                        echo $wallet_number;
                                                    } ?>
                                                    </h1>
                                                    
                                                </div>
                                        </div>
                                            
                                            
                                            
                                            <div class="row">
                                                <div class="col-sm-4">
                                                    <hr class="invite">
                                                </div>
                                                <div class="col-sm-4">
                                                <label>More ways to invite your friends</label> 
                                                </div>
                                                <div class="col-sm-4">
                                                    <hr class="invite">
                                                </div>
                                            </div>
                                            
                                            


                                        <div class="row">
                                                <div class="col-sm-2">
                                                    <p>Share Your Link:</p>
                                                </div>
                                                <div class="col-sm-4">
                                                        <div class="input-group col-md-12">
                                                            <input type="text" class="form-control input-md " value="Buscar" id="link-text" />
                                                            <span class="input-group-btn">
                                                                <button class="btn btn-info btn-md" type="button" id="copy-link">
                                                                    <i class="glyphicon glyphicon-link"></i> <span id="copytext">Copy Link</span>
                                                                </button>
                                                            </span>
                                                        </div>
                                                
                                                </div>

                                                <div class="col-sm-6">
                                                    <ul class="list-inline">
                                                        <li>
                                                        <button class="btn icon-btn messenger d-messenger" onclick="javascript:FB.ui({method: 'send',name: 'malamu.org',link: 'http://malamu.org',picture: 'http://malamu.org',caption: 'Buscar',description: 'Buscar'});"><i class="fab fa-facebook-messenger"></i> Messenger</button>
                                                        <button class="btn icon-btn messenger m-messenger" onclick="window.open('fb-messenger://share?link=' + encodeURIComponent('https://malamu.org') + '&app_id=' + encodeURIComponent(222956528646810));"><i class="fab fa-facebook-messenger"></i> Messenger</button>
                                                        
                                                        
                                                        </li>
                                                        <li>
                                                        <!-- <a class="btn icon-btn facebook" href="#"><i class="fab fa-facebook-f"></i> Facebook</a> -->
                                                        <!-- <div id="shareBtn" class="btn btn-success clearfix">Share</div> -->
                                                        <button class="btn icon-btn facebook" onclick="javascript:FB.ui({method: 'feed',name: 'malamu.org',link: 'http://malamu.org',picture: 'http://malamu.org',caption: 'Buscar',description: 'Buscar'});"> <i class="fab fa-facebook-f"></i> Facebook </button>
                                                        </li>
                                                        <li>
                                                        <a class="btn icon-btn whatsapp" target="_blank" href="https://wa.me/?text=BusCar" data-action="share/whatsapp/share"><i class="fab fa-whatsapp"></i> WhatsApp</a>
                                                        
                                                        </li>
                                                    </ul>
                                                </div>
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
                                        <img style="width:250px;margin-left:auto;margin-right:auto;" class="img-responsive" src="<?php echo base_url('/assets/images/refer-friend.jpg'); ?>" alt="">
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
            
            <!-- load footer -->
            <?php $this->load->view('footer');  ?>

        </div>

        <!-- jQuery -->



	<!-- jQuery Easing -->
	<script src="<?php echo base_url('/assets/js/jquery.easing.1.3.js'); ?>"></script>
	<!-- Bootstrap -->
	<script src="<?php echo base_url('/assets/js/bootstrap.min.js'); ?>"></script>
    <script>
         $('.dropdown-toggle').dropdown()
         $('#copy-link').on('click',function(){
            
             $('#link-text').select();
             document.execCommand("copy");
             $('#copytext').text('copied');
             setInterval(copyText, 4000);

                //alert("Copied the link");
         });

        function copyText(){
            $('#copytext').text('copy link');
        }
    </script>
    
    <script>


$(document).ready(function() {
  $.ajaxSetup({ cache: true });
  $.getScript('https://connect.facebook.net/en_US/sdk.js', function(){
    FB.init({
      appId: '222956528646810',
      version: 'v2.7', // or v2.1, v2.2, v2.3, ...
      
    });     
    $('#loginbutton,#feedbutton').removeAttr('disabled');
    FB.getLoginStatus(updateStatusCallback);
  });
});
</script>

<script>
    
            // document.getElementById('shareBtn').onclick = function() {
               
            // FB.ui({
            //     method: 'share',
            //     display: 'popup',
            //      href: 'https://www.facebook.com/dialog/share?app_id=222956528646810&display=popup&href=https%3A%2F%2Fmalamu.org&redirect_uri=https%3A%2F%2Fmalamu.org%2Fuser%2FviewInviteFriend',
                
            // }, function(response){});
            // }
    </script>
       
    </body>
</html>

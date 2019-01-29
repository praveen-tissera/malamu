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
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">

	<!-- Animate.css -->
	
    <link href="<?php echo  base_url('/assets/css/animate.css');?>" rel="stylesheet">
	<!-- Icomoon Icon Fonts-->
	
    <link href="<?php echo  base_url('/assets/css/icomoon.css');?>" rel="stylesheet">
	<!-- Bootstrap  -->
	
    <link href="<?php echo  base_url('/assets/css/bootstrap.css');?>" rel="stylesheet">
	<!-- Superfish -->
	
    <link href="<?php echo  base_url('/assets/css/superfish.css');?>" rel="stylesheet">
	<!-- Magnific Popup -->
	
    <link href="<?php echo  base_url('/assets/css/magnific-popup.css');?>" rel="stylesheet">
	<!-- Date Picker -->
	
    <link href="<?php echo  base_url('/assets/css/bootstrap-datepicker.min.css');?>" rel="stylesheet">
	<!-- CS Select -->
	
    <link href="<?php echo  base_url('/assets/css/cs-select.css');?>" rel="stylesheet">
	
    <link href="<?php echo  base_url('/assets/css/cs-skin-border.css');?>" rel="stylesheet">

	
    <link href="<?php echo  base_url('/assets/css/style.css');?>" rel="stylesheet">


	<!-- Modernizr JS -->
	
    <script src="<?php echo  base_url('/assets/js/modernizr-2.6.2.min.js');?>"></script>
	<!-- FOR IE9 below -->
	<!--[if lt IE 9]>
	<script src="js/respond.min.js"></script>
	<![endif]-->

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
							<a href="<?php echo  base_url();?>">
								<!-- <i class="icon-airplane"></i> -->
								<img class="login-logo logo" src="<?php echo  base_url('/assets/images/logo.png');?>">
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
									<a href="<?php echo  base_url('index.php/user/login');?>"> Already a member? Login</a>
								</li>
								<li>
									<a href="<?php echo  base_url('index.php/user/aboutus');?>"> About Us</a>
								</li>
							</ul>
						</nav>
					</div>
				</div>
			</header>

			<!-- end:header-top -->

			<div class="fh5co-hero">
				<!-- <div class="fh5co-overlay"></div> -->
				<div class="fh5co-cover" data-stellar-background-ratio="0.1" style="background-image: url(<?php echo  base_url('/assets/images/cover_bg_1.jpg');?>);">
					<div class="desc">
						<div class="container">
							<div class="row">
								<div class="col-sm-5 col-md-5">
								
									<div class="tabulation animate-box">

										<!-- Nav tabs -->
										<ul class="nav nav-tabs" role="tablist">
											<!-- <li role="presentation" class="active">
								      	<a href="#flights" aria-controls="flights" role="tab" data-toggle="tab">Flights</a>
								      </li> -->
											<!-- <li role="presentation">
								    	   <a href="#hotels" aria-controls="hotels" role="tab" data-toggle="tab">Hotels</a>
								      </li>
								      <li role="presentation">
								    	   <a href="#packages" aria-controls="packages" role="tab" data-toggle="tab">Packages</a>
								      </li> -->
										</ul>

										<!-- Tab panes -->
										<div class="tab-content">
											<!-- <form action="registration_submit.php" method="post"> -->
                                            <?php
                                                echo form_open('user/userRegistration');  
											
											echo '<div role="tabpanel" class="tab-pane active" id="flights">
												<div class="row">
													<div class="col-xxs-4 col-xs-4 mt ">
														<div class="input-field">';
															
                                                            // <input type="text" name="first_name" class="form-control" id="from-place" placeholder="First Name" required />
                                                            $data = array(
                                                                'type' => 'text',
                                                                'name' => 'first_name',
                                                                'class' => 'form-control',
                                                                'id' => 'from-place',
                                                                'placeholder' => 'First Name',
                                                                'required'=> 'required'
                                                                );
                                                                echo form_input($data);
														echo '</div>
													</div>
													<div class="col-xxs-4 col-xs-4 mt pl-0">
														<div class="input-field">';
															
                                                            // <input type="text" name="middle_name" class="form-control" id="to-place" placeholder="Middle Name" />
                                                            $data = array(
                                                                'type' => 'text',
                                                                'name' => 'middle_name',
                                                                'class' => 'form-control',
                                                                'id' => 'to-place',
                                                                'placeholder' => 'Middle Name'
                                                                
                                                                );
                                                                echo form_input($data);
														echo '</div>
													</div>
													<div class="col-xxs-4 col-xs-4 mt pl-0">
														<div class="input-field">';
															
                                                            // <input type="text" name="last_name" class="form-control" id="to-place" placeholder="Last Name" required/>
                                                            $data = array(
                                                                'type' => 'text',
                                                                'name' => 'last_name',
                                                                'class' => 'form-control',
                                                                'id' => 'to-place',
                                                                'placeholder' => 'Last Name',
                                                                'required'=> 'required'
                                                                );
                                                                echo form_input($data);
														echo '</div>
													</div>
												</div>
												<div class="row">

													<div class="col-xxs-12 col-xs-12 col-sm-12 mt alternate">';
                                                        
                                                    // <!-- <section> -->
														
														
														echo '<div class="input-field">';
															
                                                            // <input type="text" name="phone_number" class="form-control" id="to-place" placeholder="Phone number (ex.+243 305 679 621)" required />
                                                            $data = array(
                                                                'type' => 'text',
                                                                'name' => 'phone_number',
                                                                'class' => 'form-control',
                                                                'id' => 'to-place',
                                                                'placeholder' => 'Phone number (ex.+243 305 679 621)',
                                                                'required'=> 'required'
                                                                );
                                                                echo form_input($data);
														echo '</div>
														<!-- </section> -->
													</div>
												</div>
												<div class="row">
													<div class="col-xxs-6 col-xs-6 mt">
														<div class="input-field">';
															
                                                            // <input type="text" name="username" class="form-control" id="from-place" placeholder="Username" required />
                                                            $data = array(
                                                                'type' => 'text',
                                                                'name' => 'username',
                                                                'class' => 'form-control',
                                                                'id' => 'from-place',
                                                                'placeholder' => 'Username',
                                                                'required'=> 'required'
                                                                );
                                                                echo form_input($data);
														echo '</div>
													</div>
													<div class="col-xxs-6 col-xs-6 mt pl-0">
														<div class="input-field">';
															
                                                            // <input type="password" name="password" class="form-control" id="to-place" placeholder="Password" required/>
                                                            $data = array(
                                                                'type' => 'password',
                                                                'name' => 'password',
                                                                'class' => 'form-control',
                                                                'id' => 'from-place',
                                                                'placeholder' => 'Password',
                                                                'required'=> 'required'
                                                                );
                                                                echo form_input($data);
														echo '</div>
													</div>
												</div>
												<div class="row">
													<div class="col-xxs-12 col-xs-12">
														<label for="from">Birthday:</label>
													</div>
													<div class="col-xxs-4 col-xs-4 mt ">';
													
                                                        $options = array(
                                                            '01'  => 'January',
                                                            '02'  => 'February',
                                                            '03'  => 'March',
                                                            '04' => 'April',
                                                            '05' => 'May',
                                                            '06' => 'June',
                                                            '07' => 'July',
                                                            '08' => 'August',
                                                            '09' => 'September',
                                                            '10' => 'October',
                                                            '11' => 'November',
                                                            '12' => 'December',                            
                                                        );
                                                        $attribute = 'class="form-control"';
                                
                                
                                                    echo form_dropdown('month_start', $options, '01',$attribute);
													echo '</div>
													<div class="col-xxs-4 col-xs-4 mt pl-0">';
													$options = array(
														'01' => '01',
														'02' => '02',
														'03' => '03',
														'04' => '04',
														'05' => '05',
														'06' => '06',
														'07' => '07',
														'08' => '08',
														'09' => '09',
														'10' => '10',
														'11' => '11',
														'12' => '12',
														'13' => '13',                            
														'14' => '14',                            
														'15' => '15',                            
														'16' => '16',                            
														'17' => '17',                            
														'18' => '18',                            
														'19' => '19',                            
														'20' => '20',                            
														'21' => '21',                            
														'22' => '22',                            
														'23' => '23',                            
														'24' => '24',                            
														'25' => '25',                            
														'26' => '26',                            
														'27' => '27',                            
														'28' => '28',                            
														'29' => '29',                            
														'30' => '30',                            
														'31' => '31',                            
													);
													$attribute = 'class="form-control"';
							
							
												echo form_dropdown('day_start', $options, '01',$attribute);
													
													echo '</div>
													<div class="col-xxs-4 col-xs-4 mt pl-0">';
													
													for ($i=1980; $i < 2010 ; $i++) { 
														$options_year[$i] =  $i;
													}

													
													$attribute = 'class="form-control"';
							
							
												echo form_dropdown('year_start', $options_year, '1980',$attribute);


														
													echo '</div>

												</div>
												<div class="row">


													<div class="col-xxs-6 col-xs-6 col-sm-6 mt">
														<div class="input-field">
															<label class="form-control">';
															$data = array(
																'name'          => 'gender',
																
																'value'         => 'male',
																'class'			=> 'mr-2',
																'checked'       => TRUE,
																
															);
														
														echo form_radio($data);
																// <input type="radio" name="gender" value="male" class="mr-2" checked>
															echo "Male</label>";

														echo '</div>
													</div>
													<div class=" col-xxs-6 col-xs-6 col-sm-6 mt pl-0">
														<div class="input-field">

															<label class="form-control">';
															$data = array(
																'name'          => 'gender',
																
																'value'         => 'female',
																'class'			=> 'mr-2',
																'checked'       => FALSE,
																
															);
														
														echo form_radio($data);
																
															echo "Female</label>";
																
														echo '</div>
													</div>
												</div>
												<div class="row">
													<div class="col-xxs-12 col-xs-12 col-sm-12 mt">';
													$options_country = array(
														'AFG'  => 'Afghanistan',
														'ALA'  => 'Åland Islands',
														'ALB'  => 'Albania',
														'DZA' => 'Algeria',
														'ASM' => 'American Samoa',
														'AND' => 'Andorra',
														'AGO' => 'Angola',
														'AIA' => 'Anguilla',
														'ATA' => 'Antarctica',
														"ATG" => 'Antigua and Barbuda',
														"ARG" => 'Argentina',
														"ARM" => 'Armenia',
														"ABW"=> 'Aruba',
														"AUS" =>'Australia',
														"AUT" => 'Austria',
														"AZE" => 'Azerbaijan',
														"BHS" => 'Bahamas',
														"BHR" => 'Bahrain',
														"BGD" => 'Bangladesh',
														"BRB" =>  'Barbados',
														"BLR" => 'Belarus',
														"BEL" => 'Belgium',
														"BLZ" => 'Belize',
														"BEN" => 'Benin',
														"BMU" => 'Bermuda',
														"BTN" => 'Bhutan',
														"BOL" => 'Bolivia, Plurinational State of',
														"BES" => 'Bonaire, Sint Eustatius and Saba',
														"BIH" => 'Bosnia and Herzegovina',
														"BWA" => 'Botswana',
														"BVT" => 'Bouvet Island',
														"BRA" => 'Brazil',
														"IOT" => 'British Indian Ocean Territory',
														"BRN" => 'Brunei Darussalam',
														"BGR" => 'Bulgaria',
														"BFA" => 'Burkina Faso',
														"BDI" => 'Burundi',
														"KHM" => 'Cambodia',
														"CMR" => 'Cameroon',
														"CAN" => 'Canada',
														"CPV" => 'Cape Verde',
														"CYM" => 'Cayman Islands',
														"CAF" => 'Central African Republic',
														"TCD" => 'Chad',
														"CHL" => 'Chile',
														"CHN" => 'China',
														"CXR" => 'Christmas Island',
														"CCK" => 'Cocos (Keeling) Islands',
														"COL" => 'Colombia',
														"COM" => 'Comoros',
														"COG" => 'Congo',
														"COD" => 'Congo, the Democratic Republic of the',
														"COK" => 'Cook Islands',
														"CRI" => 'Costa Rica',
														"CIV" => 'Côte d\'Ivoire',
														"HRV" => 'Croatia',
														"CUB" => 'Cuba',
														"CUW" => 'Curaçao',
														"CYP" => 'Cyprus',
														"CZE" => 'Czech Republic',
														"DNK" => 'Denmark',
														"DJI" => 'Djibouti',
														"DMA" => 'Dominica',
														"DOM" => 'Dominican Republic',
														"ECU" => 'Ecuador',
														"EGY" => 'Egypt',
														"SLV" => 'El Salvador',
														"GNQ" => 'Equatorial Guinea',
														"ERI" =>  'Eritrea',
														"EST" => 'Estonia',
														"ETH" => 'Ethiopia',
														"FLK" => 'Falkland Islands (Malvinas)',
														"FRO" => 'Faroe Islands',
														"FJI" => 'Fiji',
														"FIN" => 'Finland',
														"FRA" => 'France',
														"GUF" => 'French Guiana',
														"PYF" => 'French Polynesia',
														"ATF" => 'French Southern Territories',
														"GAB" => 'Gabon',
														"GMB" => 'Gambia',
														"GEO" => 'Georgia',
														"DEU" => 'Germany',
														"GHA" => 'Ghana',
														"GIB" => 'Gibraltar',
														"GRC" => 'Greece',
														"GRL" => 'Greenland',
														"GRD" => 'Grenada',
														"GLP" => 'Guadeloupe',
														"GUM" => 'Guam',
														"GTM" => 'Guatemala',
														"GGY" =>'Guernsey',
														"GIN" => 'Guinea',
														"GNB" =>'Guinea-Bissau',
														"GUY" => 'Guyana',
														"HTI" => 'Haiti',
														"HMD" => 'Heard Island and McDonald Islands',
														"VAT" => 'Holy See (Vatican City State)',
														"HND" => 'Honduras',
														"HKG" => 'Hong Kong',
														"HUN" => 'Hungary',
														"ISL" => 'Iceland',
														"IND" => 'India',
														"IDN" => 'Indonesia',
														"IRN" => 'Iran, Islamic Republic of',
														"IRQ" => 'Iraq',
														"IRL" => 'Ireland',
														"IMN" => 'Isle of Man',
														"ISR" => 'Israel',
														"ITA" => 'Italy',
														"JAM" => 'Jamaica',
														"JPN" => 'Japan',
														"JEY" => 'Jersey',
														"JOR" => 'Jordan',
														"KAZ" => 'Kazakhstan',
														"KEN" => 'Kenya',
														"KIR" => 'Kiribati',
														"PRK" => 'Korea, Democratic People\'s Republic of',
														"KOR" => 'Korea, Republic of',
														"KWT" => 'Kuwait',
														"KGZ" => 'Kyrgyzstan',
														"LAO" => 'Lao People\'s Democratic Republic',
														"LVA" => 'Latvia',
														"LBN" => 'Lebanon',
														"LSO" => 'Lesotho',
														"LBR" => 'Liberia',
														"LBY" => 'Libya',
														"LIE" => 'Liechtenstein',
														"LTU" => 'Lithuania',
														"LUX" => 'Luxembourg',
														"MAC" => 'Macao',
														"MKD" => 'Macedonia, the former Yugoslav Republic of',
														"MDG" => 'Madagascar',
														"MWI" => 'Malawi',
														"MYS" => 'Malaysia',
														"MDV" => 'Maldives',
														"MLI" => 'Mali',
														"MLT" => 'Malta',
														"MHL" => 'Marshall Islands',
														"MTQ" => 'Martinique',
														"MRT" => 'Mauritania',
														"MUS" => 'Mauritius',
														"MYT" => 'Mayotte',
														"MEX" => 'Mexico',
														"FSM" => 'Micronesia, Federated States of',
														"MDA" => 'Moldova, Republic of',
														"MCO" => 'Monaco',
														"MNG" => 'Mongolia',
														"MNE" => 'Montenegro',
														"MSR" => 'Montserrat',
														"MOZ" => 'Mozambique',
														"MMR" => 'Myanmar',
														"NRU" => 'Namibia',
														"NAM" => 'Nauru',
														"NPL" => 'Nepal',
														"NLD" => 'Netherlands',
														"NCL" => 'New Caledonia',
														"NZL" => 'New Zealand',
														"NIC" => 'Nicaragua',
														"NER" => 'Niger',
														"NGA" => 'Nigeria',
														"NIU" => 'Niue',
														"NFK" => 'Norfolk Island',
														"MNP" => 'Northern Mariana Islands',
														"NOR" => 'Norway',
														"OMN" => 'Oman',
														"PAK" => 'Pakistan',
														"PLW" => 'Palau',
														"PSE" => 'Palestinian Territory, Occupied',
														"PAN" => 'Panama',
														"PNG" => 'Papua New Guinea',
														"PRY" => 'Paraguay',
														"PER" => 'Peru',
														"PHL" => 'Philippines',
														"PCN" => 'Pitcairn',
														"POL" => 'Poland',
														"PRT" => 'Portugal',
														"PRI" => 'Puerto Rico',
														"QAT" => 'Qatar',
														"REU" => 'Réunion',
														"ROU" => 'Romania',
														"BLM" => 'Russian Federation',
														"SHN" => 'Saint Helena, Ascension and Tristan da Cunha',
														"KNA" => 'Saint Kitts and Nevis',
														"LCA" => 'Saint Lucia',
														"KNA" => 'Saint Martin (French part)',
														"SPM" => 'Saint Pierre and Miquelon',
														"VCT" => 'Saint Vincent and the Grenadines',
														"WSM" => 'Samoa',
														"SMR" => 'San Marino',
														"STP" => 'Sao Tome and Principe',
														"SAU" => 'Saudi Arabia',
														"SEN" => 'Senegal',
														"SEN" => 'Serbia',
														"SYC" => 'Seychelles',
														"SLE" => 'Sierra Leone',
														"SGP" => 'Singapore',
														"SXM" => 'Sint Maarten (Dutch part)',
														"SVN" => 'Slovakia',
														"SLB" => 'Solomon Islands',
														"SOM" => 'Somalia',
														"ZAF" => 'South Africa',
														"SGS" => 'South Georgia and the South Sandwich Islands',
														"SSD" => 'South Sudan',
														"ESP" => 'Spain',
														"LKA" => 'Sri Lanka',
														"SDN" => 'Sudan',
														"SUR" => 'Suriname',
														"SJM" => 'Svalbard and Jan Mayen',
														"SWZ" => 'Swaziland',
														"SWE" => 'Sweden',
														"CHE" => 'Switzerland',
														"SYR" => 'Syrian Arab Republic',
														"TWN" => 'Taiwan, Province of China',
														"TJK" => 'Tajikistan',
														"TZA" => 'Tanzania, United Republic of',
														"THA" => 'Thailand',
														"TLS" => 'Timor-Leste',
														"TGO" => 'Togo',
														"TKL" => 'Tokelau',
														"TON" => 'Tonga',
														"TTO" => 'Trinidad and Tobago',
														"TUN" => 'Tunisia',
														"TUR" => 'Turkey',
														"TKM" => 'Turkmenistan',
														"TCA" => 'Turks and Caicos Islands',
														"TUV" => 'Tuvalu',
														"UGA" => 'Uganda',
														"UKR" => 'Ukraine',
														"ARE" => 'United Arab Emirates',
														"GBR" => 'United Kingdom',
														"USA" => 'United States',
														"TUMIUN" => 'United States Minor Outlying Islands',
														"URY" => 'Uruguay',
														"UZB" => 'Uzbekistan',
														"VUT" => 'Vanuatu',
														"VEN" => 'Venezuela, Bolivarian Republic of',
														"VNM" => 'Viet Nam',
														"VGB" => 'Virgin Islands, British',
														"VIR" => 'Virgin Islands, U.S.',
														"WLF" => 'Wallis and Futuna',
														"ESH" => 'Western Sahara',
														"YEM" => 'Yemen',
														"ZMB" => 'Zambia',
														"ZWE" => 'Zimbabwe',
														                          
													);
													$attribute = 'class="form-control"';
							
							
												echo form_dropdown('country', $options_country, '01',$attribute);
														

													echo '</div>
												</div>
												<div class="row">


													<div class="col-xxs-12 col-xs-12 mt">
														<div class="input-group">
															<div class="checkbox">
																<label>';
																$data = array(
																	'name'          => 'remember',
																	'value'         => '1',
																	'checked'       => FALSE,
																	'required'		=> 'required'
																);
															
															echo form_checkbox($data);
																	//<input id="login-remember" type="checkbox" name="remember" value="1" required> 
																	
																	echo 'Accept the
																	<strong>Terms of Service</strong>
																</label>
															</div>
															<div class="checkbox">
																<label>';
																$data = array(
																	'name'          => 'police',
																	'value'         => '1',
																	'checked'       => FALSE,
																	'required'		=> 'required'
																);
															
															echo form_checkbox($data);
																	//<input id="login-remember" type="checkbox" name="police" value="1" required>
																	echo ' Accept the <strong>Privacy Police</strong>
																</label>
															</div>
															<div class="checkbox">
																<label>';
																$data = array(
																	'name'          => 'cookies',
																	'value'         => '1',
																	'checked'       => FALSE,
																	'required'		=> 'required'
																);
															
															echo form_checkbox($data);

																	//<input id="login-remember" type="checkbox" name="cookies" value="1" required>
																	echo ' I agree to the use of <strong>Cookies</strong>
																</label>
															</div>

														</div>


													</div>

													<div class="col-xs-12">';
														//<input type="submit" name="submit" class="btn btn-default btn-block" value="Become a member">
														echo form_submit('submit', 'Become a member', "class='btn btn-default btn-block'");
                    echo form_close();
													echo '</div>
												</div>
                                            </div>';
                                            ?>

										</form>
											<!-- <div role="tabpanel" class="tab-pane" id="hotels">
												<div class="row">
													<div class="col-xxs-12 col-xs-12 mt">
														<div class="input-field">
															<label for="from">City:</label>
															<input type="text" class="form-control" id="from-place" placeholder="Los Angeles, USA" />
														</div>
													</div>
													<div class="col-xxs-12 col-xs-6 mt alternate">
														<div class="input-field">
															<label for="date-start">Return:</label>
															<input type="text" class="form-control" id="date-start" placeholder="mm/dd/yyyy" />
														</div>
													</div>
													<div class="col-xxs-12 col-xs-6 mt alternate">
														<div class="input-field">
															<label for="date-end">Check Out:</label>
															<input type="text" class="form-control" id="date-end" placeholder="mm/dd/yyyy" />
														</div>
													</div>
													<div class="col-sm-12 mt">
														<section>
															<label for="class">Rooms:</label>
															<select class="cs-select cs-skin-border">
																<option value="" disabled selected>1</option>
																<option value="economy">1</option>
																<option value="first">2</option>
																<option value="business">3</option>
															</select>
														</section>
													</div>
													<div class="col-xxs-12 col-xs-6 mt">
														<section>
															<label for="class">Adult:</label>
															<select class="cs-select cs-skin-border">
																<option value="" disabled selected>1</option>
																<option value="1">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
																<option value="4">4</option>
															</select>
														</section>
													</div>
													<div class="col-xxs-12 col-xs-6 mt">
														<section>
															<label for="class">Children:</label>
															<select class="cs-select cs-skin-border">
																<option value="" disabled selected>1</option>
																<option value="1">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
																<option value="4">4</option>
															</select>
														</section>
													</div>
													<div class="col-xs-12">
														<input type="submit" class="btn btn-primary btn-block" value="Search Hotel">
													</div>
												</div>
											</div> -->

											<!-- <div role="tabpanel" class="tab-pane" id="packages">
												<div class="row">
													<div class="col-xxs-12 col-xs-6 mt">
														<div class="input-field">
															<label for="from">City:</label>
															<input type="text" class="form-control" id="from-place" placeholder="Los Angeles, USA" />
														</div>
													</div>
													<div class="col-xxs-12 col-xs-6 mt">
														<div class="input-field">
															<label for="from">Destination:</label>
															<input type="text" class="form-control" id="to-place" placeholder="Tokyo, Japan" />
														</div>
													</div>
													<div class="col-xxs-12 col-xs-6 mt alternate">
														<div class="input-field">
															<label for="date-start">Departs:</label>
															<input type="text" class="form-control" id="date-start" placeholder="mm/dd/yyyy" />
														</div>
													</div>
													<div class="col-xxs-12 col-xs-6 mt alternate">
														<div class="input-field">
															<label for="date-end">Return:</label>
															<input type="text" class="form-control" id="date-end" placeholder="mm/dd/yyyy" />
														</div>
													</div>
													<div class="col-sm-12 mt">
														<section>
															<label for="class">Rooms:</label>
															<select class="cs-select cs-skin-border">
																<option value="" disabled selected>1</option>
																<option value="economy">1</option>
																<option value="first">2</option>
																<option value="business">3</option>
															</select>
														</section>
													</div>
													<div class="col-xxs-12 col-xs-6 mt">
														<section>
															<label for="class">Adult:</label>
															<select class="cs-select cs-skin-border">
																<option value="" disabled selected>1</option>
																<option value="1">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
																<option value="4">4</option>
															</select>
														</section>
													</div>
													<div class="col-xxs-12 col-xs-6 mt">
														<section>
															<label for="class">Children:</label>
															<select class="cs-select cs-skin-border">
																<option value="" disabled selected>1</option>
																<option value="1">1</option>
																<option value="2">2</option>
																<option value="3">3</option>
																<option value="4">4</option>
															</select>
														</section>
													</div>
													<div class="col-xs-12">
														<input type="submit" class="btn btn-primary btn-block" value="Search Packages">
													</div>
												</div>
											</div> -->
										</div>

									</div>
								</div>
								<div class="desc2 animate-box">
									<div class="col-sm-7 col-sm-push-1 col-md-7 col-md-push-1">
										<!-- <p>HandCrafted by <a href="http://frehtml5.co/" target="_blank" class="fh5co-site-name">FreeHTML5.co</a></p> -->
										<h2 class="head-title">
											<strong> Malamu. Good. </strong>
										</h2>
										<?php 

									if(form_error('first_name') || form_error('first_name') || form_error('phone_number') || form_error('username') || form_error('password') || form_error('remember') || form_error('police') || form_error('cookies') ){
										// echo '<h3 class="notification label label-danger" >';
											echo form_error('first_name','<h3 class="notification label label-danger">','</h3><br><br>');
											echo form_error('first_name','<h3 class="notification label label-danger">','</h3><br><br>');
											echo form_error('phone_number','<h3 class="notification label label-danger">','</h3><br><br>');
											echo form_error('username','<h3 class="notification label label-danger">','</h3><br><br>');
											echo form_error('password','<h3 class="notification label label-danger">','</h3><br><br>');
											echo form_error('remember','<h3 class="notification label label-danger">','</h3><br><br>');
											echo form_error('police','<h3 class="notification label label-danger">','</h3><br><br>');
											echo form_error('cookies','<h3 class="notification label label-danger">','</h3>');
										// echo '</h3>';
										}
									if(isset($success_message_display)){
										echo "<h3 class=' notification label label-success'>". $success_message_display ."</h3>";
									}
									if(isset($error_message_display)){
										echo "<h3 class='notification label label-danger'>". $error_message_display ."</h3>";
									}

											// if(isset($_GET['message']) && $_GET['status'] == 1){
											// 	echo "<h3 class=' notification label label-success'>".  urldecode(base64_decode($_GET['message'])) ."</h3>";
											// }elseif($_GET['status'] == 2){
											// 	echo "<h3 class=' notification label label-danger'>".  urldecode(base64_decode($_GET['message'])) ."</h3>";
											// }

											
										?>
										
										<!-- <h3>Fly to Hong Kong via Los Angeles, USA</h3> -->
										<!-- <span class="price">$599</span> -->
										<!-- <p><a class="btn btn-primary btn-lg" href="#">Get Started</a></p> -->
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>

			</div>

			<!-- after banner text -->
			<div id="fh5co-tours" class="fh5co-features">
				<div class="container">
					<div class="row">
						<div class="col-xs-6">

						</div>
						<div class="col-xs-6">
							<h1 class="text-uppercase quoat">
								<label> good for all, </label>
								<br>
								<small>so one could be good.</small>
							</h1>
							<h1 class="text-uppercase quoat">
								<label> kozala malamu, </label>
								<br>
								<small>pona biso nioso.</small>
							</h1>
						</div>
					</div>
				</div>
			</div>
			<!--  -->

			<!-- -->
			<div id="fh5co-blog-section" class="fh5co-section-gray">
				<div class="container">
					<div class="row">
						<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
							<h3>How It Work</h3>
							<!-- <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Velit est facilis maiores, perspiciatis accusamus asperiores sint consequuntur debitis.</p> -->
						</div>
					</div>
				</div>
				<div class="container">
					<div class="row row-bottom-padded-md">
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="fh5co-blog animate-box">
								<a href="#">
									<img class="img-responsive" src="<?php echo  base_url('/assets/images/first-icon.png');?>" alt="">
								</a>
								<div class="blog-text">
									<div class="prod-title">
										<h3>
											<a href="#">Answer questions</a>
										</h3>
										<!-- <span class="posted_by">Sep. 15th</span>
										<span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span> -->
										<p> Begin by going through various poll questions.</p>
										<!-- <p><a href="#">Learn More...</a></p> -->
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="fh5co-blog animate-box">
								<a href="#">
									<img class="img-responsive" src="<?php echo  base_url('/assets/images/second-icon.png');?>" alt="">
								</a>
								<div class="blog-text">
									<div class="prod-title">
										<h3>
											<a href="#">Earn money</a>
										</h3>
										<!-- <span class="posted_by">Sep. 15th</span>
										<span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span> -->
										<p> Earn up to $4 USD per survey completed.</p>
										<br>

										<!-- <p><a href="#">Learn More...</a></p> -->
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix visible-sm-block"></div>
						<div class="col-lg-4 col-md-4 col-sm-6">
							<div class="fh5co-blog animate-box">
								<a href="#">
									<img class="img-responsive" src="<?php echo  base_url('/assets/images/third-icon.png');?>" alt="">
								</a>
								<div class="blog-text">
									<div class="prod-title">
										<h3>
											<a href="#">Redeem</a>
										</h3>
										<!-- <span class="posted_by">Sep. 15th</span>
										<span class="comment"><a href="">21<i class="icon-bubble2"></i></a></span> -->
										<p> Retain your earning from any money transfer company.</p>
										<!-- <p><a href="#">Learn More...</a></p> -->
									</div>
								</div>
							</div>
						</div>
						<div class="clearfix visible-md-block"></div>
					</div>

					<!-- <div class="col-md-12 text-center animate-box">
						<p><a class="btn btn-primary btn-outline btn-lg" href="#">See All Post <i class="icon-arrow-right22"></i></a></p>
					</div> -->

				</div>
			</div>
			<!-- fh5co-blog-section -->

			<!-- -->




			<div id="fh5co-tours" class="fh5co-features">
				<div class="container">
					<!-- <div class="row">
					<div class="col-md-8 col-md-offset-2 text-center heading-section animate-box">
						<h3>How It Work</h3>
						<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
					</div>
				</div> -->
					<div class="row">
						<div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
							<div href="#">
								<img src="<?php echo  base_url('/assets/images/place-1.jpg');?>" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
								<div class="desc">
									<span></span>
									<h3>Get to know us</h3>
									<span>
										We are an online platform that rewards our users with the intention to economically empower those developing countries.
									</span>
									<!-- <span class="price">$1,000</span> -->
									<a class="btn btn-primary btn-outline" href="#">Find out more
										<i class="icon-arrow-right22"></i>
									</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
							<div href="#">
								<img src="<?php echo  base_url('/assets/images/place-2.jpg');?>" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
								<div class="desc">
									<span></span>
									<h3>Join us on Facebook</h3>
									<span>Like us on Facebook to stay connected with many users around the globe. Join the conversion and get involved with
										Malamu.
									</span>
									<!-- <span class="price">$1,000</span> -->
									<a class="btn btn-primary btn-outline" href="#">Like us
										<i class="icon-arrow-right22"></i>
									</a>
								</div>
							</div>
						</div>
						<div class="col-md-4 col-sm-6 fh5co-tours animate-box" data-animate-effect="fadeIn">
							<div href="#">
								<img src="<?php echo  base_url('/assets/images/place-3.jpg');?>" alt="Free HTML5 Website Template by FreeHTML5.co" class="img-responsive">
								<div class="desc">
									<span></span>
									<h3>We are on Instagram</h3>
									<span>Follow us on Instagram and find even more ways to get involved in our community. Take part of Malamu’s journey.</span>
									<!-- <span class="price">$1,000</span> -->
									<a class="btn btn-primary btn-outline" href="#">Follow us
										<i class="icon-arrow-right22"></i>
									</a>
								</div>
							</div>
						</div>
						<!-- <div class="col-md-12 text-center animate-box">
						<p><a class="btn btn-primary btn-outline btn-lg" href="#">See All Offers <i class="icon-arrow-right22"></i></a></p>
					</div> -->
					</div>
				</div>
			</div>

			<!-- <div id="fh5co-features">
			<div class="container">
				<div class="row">
					<div class="col-md-4 animate-box">

						<div class="feature-left">
							<span class="icon">
								<i class="icon-hotairballoon"></i>
							</span>
							<div class="feature-copy">
								<h3>Family Travel</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
								<p><a href="#">Learn More</a></p>
							</div>
						</div>

					</div>

					<div class="col-md-4 animate-box">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-search"></i>
							</span>
							<div class="feature-copy">
								<h3>Travel Plans</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
								<p><a href="#">Learn More</a></p>
							</div>
						</div>
					</div>
					<div class="col-md-4 animate-box">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-wallet"></i>
							</span>
							<div class="feature-copy">
								<h3>Honeymoon</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
								<p><a href="#">Learn More</a></p>
							</div>
						</div>
					</div>
				</div>
				<div class="row">
					<div class="col-md-4 animate-box">

						<div class="feature-left">
							<span class="icon">
								<i class="icon-wine"></i>
							</span>
							<div class="feature-copy">
								<h3>Business Travel</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
								<p><a href="#">Learn More</a></p>
							</div>
						</div>

					</div>

					<div class="col-md-4 animate-box">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-genius"></i>
							</span>
							<div class="feature-copy">
								<h3>Solo Travel</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
								<p><a href="#">Learn More</a></p>
							</div>
						</div>

					</div>
					<div class="col-md-4 animate-box">
						<div class="feature-left">
							<span class="icon">
								<i class="icon-chat"></i>
							</span>
							<div class="feature-copy">
								<h3>Explorer</h3>
								<p>Facilis ipsum reprehenderit nemo molestias. Aut cum mollitia reprehenderit.</p>
								<p><a href="#">Learn More</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div> -->


			<!-- <div id="fh5co-destination">
			<div class="tour-fluid">
				<div class="row">
					<div class="col-md-12">
						<ul id="fh5co-destination-list" class="animate-box">
							<li class="one-forth text-center" style="background-image: url(images/place-1.jpg); ">
								<a href="#">
									<div class="case-studies-summary">
										<h2>Los Angeles</h2>
									</div>
								</a>
							</li>
							<li class="one-forth text-center" style="background-image: url(images/place-2.jpg); ">
								<a href="#">
									<div class="case-studies-summary">
										<h2>Hongkong</h2>
									</div>
								</a>
							</li>
							<li class="one-forth text-center" style="background-image: url(images/place-3.jpg); ">
								<a href="#">
									<div class="case-studies-summary">
										<h2>Italy</h2>
									</div>
								</a>
							</li>
							<li class="one-forth text-center" style="background-image: url(images/place-4.jpg); ">
								<a href="#">
									<div class="case-studies-summary">
										<h2>Philippines</h2>
									</div>
								</a>
							</li>

							<li class="one-forth text-center" style="background-image: url(images/place-5.jpg); ">
								<a href="#">
									<div class="case-studies-summary">
										<h2>Japan</h2>
									</div>
								</a>
							</li>
							<li class="one-half text-center">
								<div class="title-bg">
									<div class="case-studies-summary">
										<h2>Most Popular Destinations</h2>
										<span><a href="#">View All Destinations</a></span>
									</div>
								</div>
							</li>
							<li class="one-forth text-center" style="background-image: url(images/place-6.jpg); ">
								<a href="#">
									<div class="case-studies-summary">
										<h2>Paris</h2>
									</div>
								</a>
							</li>
							<li class="one-forth text-center" style="background-image: url(images/place-7.jpg); ">
								<a href="#">
									<div class="case-studies-summary">
										<h2>Singapore</h2>
									</div>
								</a>
							</li>
							<li class="one-forth text-center" style="background-image: url(images/place-8.jpg); ">
								<a href="#">
									<div class="case-studies-summary">
										<h2>Madagascar</h2>
									</div>
								</a>
							</li>
							<li class="one-forth text-center" style="background-image: url(images/place-9.jpg); ">
								<a href="#">
									<div class="case-studies-summary">
										<h2>Egypt</h2>
									</div>
								</a>
							</li>
							<li class="one-forth text-center" style="background-image: url(images/place-10.jpg); ">
								<a href="#">
									<div class="case-studies-summary">
										<h2>Indonesia</h2>
									</div>
								</a>
							</li>
						</ul>		
					</div>
				</div>
			</div>
		</div> -->


			<!-- <div id="fh5co-testimonial" style="background-image:url(images/img_bg_1.jpg);">
		<div class="container">
			<div class="row animate-box">
				<div class="col-md-8 col-md-offset-2 text-center fh5co-heading">
					<h2>Happy Clients</h2>
				</div>
			</div>
			<div class="row">
				<div class="col-md-4">
					<div class="box-testimony animate-box">
						<blockquote>
							<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
							<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
						</blockquote>
						<p class="author">John Doe, CEO <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> <span class="subtext">Creative Director</span></p>
					</div>
					
				</div>
				<div class="col-md-4">
					<div class="box-testimony animate-box">
						<blockquote>
							<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
							<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.&rdquo;</p>
						</blockquote>
						<p class="author">John Doe, CEO <a href="http://freehtml5.co/" target="_blank">FREEHTML5.co</a> <span class="subtext">Creative Director</span></p>
					</div>
					
					
				</div>
				<div class="col-md-4">
					<div class="box-testimony animate-box">
						<blockquote>
							<span class="quote"><span><i class="icon-quotes-right"></i></span></span>
							<p>&ldquo;Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.&rdquo;</p>
						</blockquote>
						<p class="author">John Doe, Founder <a href="#">FREEHTML5.co</a> <span class="subtext">Creative Director</span></p>
					</div>
					
				</div>
			</div>
		</div>
	</div> -->
			<!-- load footer -->
            <?php $this->load->view('footer');  ?>



		</div>
		<!-- END fh5co-page -->

	</div>
	<!-- END fh5co-wrapper -->

	<!-- jQuery -->


	<!-- <script src="js/jquery.min.js"></script> -->
    <script src="<?php echo  base_url('/assets/js/jquery.min.js');?>"></script>
	<!-- jQuery Easing -->
	<script src="<?php echo  base_url('/assets/js/jquery.easing.1.3.js');?>"></script>
	<!-- Bootstrap -->
	<script src="<?php echo  base_url('/assets/js/bootstrap.min.js');?>"></script>
	<!-- Waypoints -->
	<script src="<?php echo  base_url('/assets/js/jquery.waypoints.min.js');?>"></script>
	<script src="<?php echo  base_url('/assets/js/sticky.js');?>"></script>

	<!-- Stellar -->
	<script src="<?php echo  base_url('/assets/js/jquery.stellar.min.js');?>"></script>
	<!-- Superfish -->
	<script src="<?php echo  base_url('/assets/js/hoverIntent.js');?>"></script>
	<script src="<?php echo  base_url('/assets/js/superfish.js');?>"></script>
	<!-- Magnific Popup -->
	<script src="<?php echo  base_url('/assets/js/jquery.magnific-popup.min.js');?>"></script>
	<script src="<?php echo  base_url('/assets/js/magnific-popup-options.js');?>"></script>
	<!-- Date Picker -->
	<script src="<?php echo  base_url('/assets/js/bootstrap-datepicker.min.js');?>"></script>
	<!-- CS Select -->
	<script src="<?php echo  base_url('/assets/js/classie.js');?>"></script>
	<script src="<?php echo  base_url('/assets/js/selectFx.js');?>"></script>

	<!-- Main JS -->
	<script src="<?php echo  base_url('/assets/js/main.js');?>"></script>

</body>

</html>
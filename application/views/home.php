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

	<!-- <link href='https://fonts.googleapis.com/css?family=Open+Sans:400,700,300' rel='stylesheet' type='text/css'> -->

	<!-- Animate.css -->
	<!-- <link rel="stylesheet" href="css/animate.css"> -->
    <link href="<?php echo  base_url('/assets/css/animate.css');?>" rel="stylesheet">
	<!-- Icomoon Icon Fonts-->
	<!-- <link rel="stylesheet" href="css/icomoon.css"> -->
    <link href="<?php echo  base_url('/assets/css/icomoon.css');?>" rel="stylesheet">
	<!-- Bootstrap  -->
	<!-- <link rel="stylesheet" href="css/bootstrap.css"> -->
    <link href="<?php echo  base_url('/assets/css/bootstrap.css');?>" rel="stylesheet">
	<!-- Superfish -->
	<!-- <link rel="stylesheet" href="css/superfish.css"> -->
    <link href="<?php echo  base_url('/assets/css/superfish.css');?>" rel="stylesheet">
	<!-- Magnific Popup -->
	<!-- <link rel="stylesheet" href="css/magnific-popup.css"> -->
    <link href="<?php echo  base_url('/assets/css/magnific-popup.css');?>" rel="stylesheet">
	<!-- Date Picker -->
	<!-- <link rel="stylesheet" href="css/bootstrap-datepicker.min.css"> -->
    <link href="<?php echo  base_url('/assets/css/bootstrap-datepicker.min.css');?>" rel="stylesheet">
	<!-- CS Select -->
	<!-- <link rel="stylesheet" href="css/cs-select.css"> -->
    <link href="<?php echo  base_url('/assets/css/cs-select.css');?>" rel="stylesheet">
	<!-- <link rel="stylesheet" href="css/cs-skin-border.css"> -->
    <link href="<?php echo  base_url('/assets/css/cs-skin-border.css');?>" rel="stylesheet">

	<!-- <link rel="stylesheet" href="css/style.css"> -->
    <link href="<?php echo  base_url('/assets/css/style.css');?>" rel="stylesheet">


	<!-- Modernizr JS -->
	<!-- <script src="js/modernizr-2.6.2.min.js"></script> -->
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
							<a href="index.html">
								<!-- <i class="icon-airplane"></i> -->
								<img src="<?php echo  base_url('/assets/images/logo.png');?>">
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
									<a href="login.html"> Already a member? Login</a>
								</li>
								<li>
									<a href="about-us.php"> About Us</a>
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
														// <select id="month_start" name="month_start" />
														// <option value="01">January</option>
														// <option value="01">February</option>
														// <option value="01">March</option>
														// <option value="01">April</option>
														// <option value="01">May</option>
														// <option value="01">June</option>
														// <option value="01">July</option>
														// <option value="01">August</option>
														// <option value="01">September</option>
														// <option value="01">October</option>
														// <option value="01">November</option>
														// <option value="01">December</option>
                                                        // </select>
                                                        $options = array(
                                                            '01'         => 'January',
                                                            '02'         => 'February',
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
                                
                                
                                                    echo form_dropdown('month_start', $options, 'Mr',$attribute);
													echo '</div>
													<div class="col-xxs-4 col-xs-4 mt pl-0">';
														// <select id="day_start" name="day_start" />
														// <option>1</option>
														// <option>2</option>
														// <option>3</option>
														// <option>4</option>
														// <option>5</option>
														// <option>6</option>
														// <option>7</option>
														// <option>8</option>
														// <option>9</option>
														// <option>10</option>
														// <option>11</option>
														// <option>12</option>
														// <option>13</option>
														// <option>14</option>
														// <option>15</option>
														// <option>16</option>
														// <option>17</option>
														// <option>18</option>
														// <option>19</option>
														// <option>20</option>
														// <option>21</option>
														// <option>22</option>
														// <option>23</option>
														// <option>24</option>
														// <option>25</option>
														// <option>26</option>
														// <option>27</option>
														// <option>28</option>
														// <option>29</option>
														// <option>30</option>
														// <option>31</option>
														// </select>
													echo '</div>
													<div class="col-xxs-4 col-xs-4 mt pl-0">';
														// <select id="year_start" name="year_start" />
														// <option>1980</option>
														// <option>1981</option>
														// <option>1982</option>
														// <option>1983</option>
														// <option>1984</option>
														// <option>1985</option>
														// <option>1986</option>
														// <option>1987</option>
														// <option>1988</option>
														// <option>1989</option>
														// <option>1990</option>
														// <option>1991</option>
														// <option>1992</option>
														// <option>1993</option>
														// <option>1994</option>
														// <option>1995</option>
														// <option>1996</option>
														// <option>1997</option>
														// <option>1998</option>
														// <option>1999</option>
														// <option>2000</option>
														// <option>2001</option>
														// <option>2002</option>
														// <option>2003</option>
														// <option>2004</option>
														// <option>2005</option>
														// <option>2006</option>
														// <option>2007</option>
														// <option>2008</option>
														// <option>2009</option>
														// <option>2010</option>
														// <option>2011</option>
														// <option>2012</option>
														// <option>2013</option>
														// <option>2014</option>
														// <option>2015</option>
														// <option>2016</option>
														// <option>2017</option>
														// <option>2018</option>
														// <option>2018</option>


														// </select>
													echo '</div>

												</div>
												<div class="row">


													<div class="col-xxs-6 col-xs-6 col-sm-6 mt">
														<div class="input-field">
															<label class="form-control">';
																// <input type="radio" name="gender" value="male" class="mr-2" checked>Male</label>

														echo '</div>
													</div>
													<div class=" col-xxs-6 col-xs-6 col-sm-6 mt pl-0">
														<div class="input-field">

															<label class="form-control">';
																// <input type="radio" name="gender" value="female" class="mr-2">Female</label>
														echo '</div>
													</div>
												</div>
												<div class="row">
													<div class="col-xxs-12 col-xs-12 col-sm-12 mt">';
														// <select class="form-control" name="country" required>
														// 	<option >Country</option>
														// 	<option value="AFG">Afghanistan</option>
														// 	<option value="ALA">Åland Islands</option>
														// 	<option value="ALB">Albania</option>
														// 	<option value="DZA">Algeria</option>
														// 	<option value="ASM">American Samoa</option>
														// 	<option value="AND">Andorra</option>
														// 	<option value="AGO">Angola</option>
														// 	<option value="AIA">Anguilla</option>
														// 	<option value="ATA">Antarctica</option>
														// 	<option value="ATG">Antigua and Barbuda</option>
														// 	<option value="ARG">Argentina</option>
														// 	<option value="ARM">Armenia</option>
														// 	<option value="ABW">Aruba</option>
														// 	<option value="AUS">Australia</option>
														// 	<option value="AUT">Austria</option>
														// 	<option value="AZE">Azerbaijan</option>
														// 	<option value="BHS">Bahamas</option>
														// 	<option value="BHR">Bahrain</option>
														// 	<option value="BGD">Bangladesh</option>
														// 	<option value="BRB">Barbados</option>
														// 	<option value="BLR">Belarus</option>
														// 	<option value="BEL">Belgium</option>
														// 	<option value="BLZ">Belize</option>
														// 	<option value="BEN">Benin</option>
														// 	<option value="BMU">Bermuda</option>
														// 	<option value="BTN">Bhutan</option>
														// 	<option value="BOL">Bolivia, Plurinational State of</option>
														// 	<option value="BES">Bonaire, Sint Eustatius and Saba</option>
														// 	<option value="BIH">Bosnia and Herzegovina</option>
														// 	<option value="BWA">Botswana</option>
														// 	<option value="BVT">Bouvet Island</option>
														// 	<option value="BRA">Brazil</option>
														// 	<option value="IOT">British Indian Ocean Territory</option>
														// 	<option value="BRN">Brunei Darussalam</option>
														// 	<option value="BGR">Bulgaria</option>
														// 	<option value="BFA">Burkina Faso</option>
														// 	<option value="BDI">Burundi</option>
														// 	<option value="KHM">Cambodia</option>
														// 	<option value="CMR">Cameroon</option>
														// 	<option value="CAN">Canada</option>
														// 	<option value="CPV">Cape Verde</option>
														// 	<option value="CYM">Cayman Islands</option>
														// 	<option value="CAF">Central African Republic</option>
														// 	<option value="TCD">Chad</option>
														// 	<option value="CHL">Chile</option>
														// 	<option value="CHN">China</option>
														// 	<option value="CXR">Christmas Island</option>
														// 	<option value="CCK">Cocos (Keeling) Islands</option>
														// 	<option value="COL">Colombia</option>
														// 	<option value="COM">Comoros</option>
														// 	<option value="COG">Congo</option>
														// 	<option value="COD">Congo, the Democratic Republic of the</option>
														// 	<option value="COK">Cook Islands</option>
														// 	<option value="CRI">Costa Rica</option>
														// 	<option value="CIV">Côte d\'Ivoire</option>
														// 	<option value="HRV">Croatia</option>
														// 	<option value="CUB">Cuba</option>
														// 	<option value="CUW">Curaçao</option>
														// 	<option value="CYP">Cyprus</option>
														// 	<option value="CZE">Czech Republic</option>
														// 	<option value="DNK">Denmark</option>
														// 	<option value="DJI">Djibouti</option>
														// 	<option value="DMA">Dominica</option>
														// 	<option value="DOM">Dominican Republic</option>
														// 	<option value="ECU">Ecuador</option>
														// 	<option value="EGY">Egypt</option>
														// 	<option value="SLV">El Salvador</option>
														// 	<option value="GNQ">Equatorial Guinea</option>
														// 	<option value="ERI">Eritrea</option>
														// 	<option value="EST">Estonia</option>
														// 	<option value="ETH">Ethiopia</option>
														// 	<option value="FLK">Falkland Islands (Malvinas)</option>
														// 	<option value="FRO">Faroe Islands</option>
														// 	<option value="FJI">Fiji</option>
														// 	<option value="FIN">Finland</option>
														// 	<option value="FRA">France</option>
														// 	<option value="GUF">French Guiana</option>
														// 	<option value="PYF">French Polynesia</option>
														// 	<option value="ATF">French Southern Territories</option>
														// 	<option value="GAB">Gabon</option>
														// 	<option value="GMB">Gambia</option>
														// 	<option value="GEO">Georgia</option>
														// 	<option value="DEU">Germany</option>
														// 	<option value="GHA">Ghana</option>
														// 	<option value="GIB">Gibraltar</option>
														// 	<option value="GRC">Greece</option>
														// 	<option value="GRL">Greenland</option>
														// 	<option value="GRD">Grenada</option>
														// 	<option value="GLP">Guadeloupe</option>
														// 	<option value="GUM">Guam</option>
														// 	<option value="GTM">Guatemala</option>
														// 	<option value="GGY">Guernsey</option>
														// 	<option value="GIN">Guinea</option>
														// 	<option value="GNB">Guinea-Bissau</option>
														// 	<option value="GUY">Guyana</option>
														// 	<option value="HTI">Haiti</option>
														// 	<option value="HMD">Heard Island and McDonald Islands</option>
														// 	<option value="VAT">Holy See (Vatican City State)</option>
														// 	<option value="HND">Honduras</option>
														// 	<option value="HKG">Hong Kong</option>
														// 	<option value="HUN">Hungary</option>
														// 	<option value="ISL">Iceland</option>
														// 	<option value="IND">India</option>
														// 	<option value="IDN">Indonesia</option>
														// 	<option value="IRN">Iran, Islamic Republic of</option>
														// 	<option value="IRQ">Iraq</option>
														// 	<option value="IRL">Ireland</option>
														// 	<option value="IMN">Isle of Man</option>
														// 	<option value="ISR">Israel</option>
														// 	<option value="ITA">Italy</option>
														// 	<option value="JAM">Jamaica</option>
														// 	<option value="JPN">Japan</option>
														// 	<option value="JEY">Jersey</option>
														// 	<option value="JOR">Jordan</option>
														// 	<option value="KAZ">Kazakhstan</option>
														// 	<option value="KEN">Kenya</option>
														// 	<option value="KIR">Kiribati</option>
														// 	<option value="PRK">Korea, Democratic People\'s Republic of</option>
														// 	<option value="KOR">Korea, Republic of</option>
														// 	<option value="KWT">Kuwait</option>
														// 	<option value="KGZ">Kyrgyzstan</option>
														// 	<option value="LAO">Lao People\'s Democratic Republic</option>
														// 	<option value="LVA">Latvia</option>
														// 	<option value="LBN">Lebanon</option>
														// 	<option value="LSO">Lesotho</option>
														// 	<option value="LBR">Liberia</option>
														// 	<option value="LBY">Libya</option>
														// 	<option value="LIE">Liechtenstein</option>
														// 	<option value="LTU">Lithuania</option>
														// 	<option value="LUX">Luxembourg</option>
														// 	<option value="MAC">Macao</option>
														// 	<option value="MKD">Macedonia, the former Yugoslav Republic of</option>
														// 	<option value="MDG">Madagascar</option>
														// 	<option value="MWI">Malawi</option>
														// 	<option value="MYS">Malaysia</option>
														// 	<option value="MDV">Maldives</option>
														// 	<option value="MLI">Mali</option>
														// 	<option value="MLT">Malta</option>
														// 	<option value="MHL">Marshall Islands</option>
														// 	<option value="MTQ">Martinique</option>
														// 	<option value="MRT">Mauritania</option>
														// 	<option value="MUS">Mauritius</option>
														// 	<option value="MYT">Mayotte</option>
														// 	<option value="MEX">Mexico</option>
														// 	<option value="FSM">Micronesia, Federated States of</option>
														// 	<option value="MDA">Moldova, Republic of</option>
														// 	<option value="MCO">Monaco</option>
														// 	<option value="MNG">Mongolia</option>
														// 	<option value="MNE">Montenegro</option>
														// 	<option value="MSR">Montserrat</option>
														// 	<option value="MAR">Morocco</option>
														// 	<option value="MOZ">Mozambique</option>
														// 	<option value="MMR">Myanmar</option>
														// 	<option value="NAM">Namibia</option>
														// 	<option value="NRU">Nauru</option>
														// 	<option value="NPL">Nepal</option>
														// 	<option value="NLD">Netherlands</option>
														// 	<option value="NCL">New Caledonia</option>
														// 	<option value="NZL">New Zealand</option>
														// 	<option value="NIC">Nicaragua</option>
														// 	<option value="NER">Niger</option>
														// 	<option value="NGA">Nigeria</option>
														// 	<option value="NIU">Niue</option>
														// 	<option value="NFK">Norfolk Island</option>
														// 	<option value="MNP">Northern Mariana Islands</option>
														// 	<option value="NOR">Norway</option>
														// 	<option value="OMN">Oman</option>
														// 	<option value="PAK">Pakistan</option>
														// 	<option value="PLW">Palau</option>
														// 	<option value="PSE">Palestinian Territory, Occupied</option>
														// 	<option value="PAN">Panama</option>
														// 	<option value="PNG">Papua New Guinea</option>
														// 	<option value="PRY">Paraguay</option>
														// 	<option value="PER">Peru</option>
														// 	<option value="PHL">Philippines</option>
														// 	<option value="PCN">Pitcairn</option>
														// 	<option value="POL">Poland</option>
														// 	<option value="PRT">Portugal</option>
														// 	<option value="PRI">Puerto Rico</option>
														// 	<option value="QAT">Qatar</option>
														// 	<option value="REU">Réunion</option>
														// 	<option value="ROU">Romania</option>
														// 	<option value="RUS">Russian Federation</option>
														// 	<option value="RWA">Rwanda</option>
														// 	<option value="BLM">Saint Barthélemy</option>
														// 	<option value="SHN">Saint Helena, Ascension and Tristan da Cunha</option>
														// 	<option value="KNA">Saint Kitts and Nevis</option>
														// 	<option value="LCA">Saint Lucia</option>
														// 	<option value="MAF">Saint Martin (French part)</option>
														// 	<option value="SPM">Saint Pierre and Miquelon</option>
														// 	<option value="VCT">Saint Vincent and the Grenadines</option>
														// 	<option value="WSM">Samoa</option>
														// 	<option value="SMR">San Marino</option>
														// 	<option value="STP">Sao Tome and Principe</option>
														// 	<option value="SAU">Saudi Arabia</option>
														// 	<option value="SEN">Senegal</option>
														// 	<option value="SRB">Serbia</option>
														// 	<option value="SYC">Seychelles</option>
														// 	<option value="SLE">Sierra Leone</option>
														// 	<option value="SGP">Singapore</option>
														// 	<option value="SXM">Sint Maarten (Dutch part)</option>
														// 	<option value="SVK">Slovakia</option>
														// 	<option value="SVN">Slovenia</option>
														// 	<option value="SLB">Solomon Islands</option>
														// 	<option value="SOM">Somalia</option>
														// 	<option value="ZAF">South Africa</option>
														// 	<option value="SGS">South Georgia and the South Sandwich Islands</option>
														// 	<option value="SSD">South Sudan</option>
														// 	<option value="ESP">Spain</option>
														// 	<option value="LKA">Sri Lanka</option>
														// 	<option value="SDN">Sudan</option>
														// 	<option value="SUR">Suriname</option>
														// 	<option value="SJM">Svalbard and Jan Mayen</option>
														// 	<option value="SWZ">Swaziland</option>
														// 	<option value="SWE">Sweden</option>
														// 	<option value="CHE">Switzerland</option>
														// 	<option value="SYR">Syrian Arab Republic</option>
														// 	<option value="TWN">Taiwan, Province of China</option>
														// 	<option value="TJK">Tajikistan</option>
														// 	<option value="TZA">Tanzania, United Republic of</option>
														// 	<option value="THA">Thailand</option>
														// 	<option value="TLS">Timor-Leste</option>
														// 	<option value="TGO">Togo</option>
														// 	<option value="TKL">Tokelau</option>
														// 	<option value="TON">Tonga</option>
														// 	<option value="TTO">Trinidad and Tobago</option>
														// 	<option value="TUN">Tunisia</option>
														// 	<option value="TUR">Turkey</option>
														// 	<option value="TKM">Turkmenistan</option>
														// 	<option value="TCA">Turks and Caicos Islands</option>
														// 	<option value="TUV">Tuvalu</option>
														// 	<option value="UGA">Uganda</option>
														// 	<option value="UKR">Ukraine</option>
														// 	<option value="ARE">United Arab Emirates</option>
														// 	<option value="GBR">United Kingdom</option>
														// 	<option value="USA">United States</option>
														// 	<option value="UMI">United States Minor Outlying Islands</option>
														// 	<option value="URY">Uruguay</option>
														// 	<option value="UZB">Uzbekistan</option>
														// 	<option value="VUT">Vanuatu</option>
														// 	<option value="VEN">Venezuela, Bolivarian Republic of</option>
														// 	<option value="VNM">Viet Nam</option>
														// 	<option value="VGB">Virgin Islands, British</option>
														// 	<option value="VIR">Virgin Islands, U.S.</option>
														// 	<option value="WLF">Wallis and Futuna</option>
														// 	<option value="ESH">Western Sahara</option>
														// 	<option value="YEM">Yemen</option>
														// 	<option value="ZMB">Zambia</option>
														// 	<option value="ZWE">Zimbabwe</option>
														// </select>

													echo '</div>
												</div>
												<div class="row">


													<div class="col-xxs-12 col-xs-12 mt">
														<div class="input-group">
															<div class="checkbox">
																<label>
																	<input id="login-remember" type="checkbox" name="remember" value="1" required> Accept the
																	<strong>Terms of Service</strong>
																</label>
															</div>
															<div class="checkbox">
																<label>
																	<input id="login-remember" type="checkbox" name="police" value="1" required> Accept the
																	<strong>Privacy Police</strong>
																</label>
															</div>
															<div class="checkbox">
																<label>
																	<input id="login-remember" type="checkbox" name="cookies" value="1" required> I agree to the use of
																	<strong>Cookies</strong>
																</label>
															</div>

														</div>


													</div>

													<div class="col-xs-12">
														<input type="submit" name="submit" class="btn btn-default btn-block" value="Become a member">
													</div>
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
											if(isset($_GET['message']) && $_GET['status'] == 1){
												echo "<h3 class=' notification label label-success'>".  urldecode(base64_decode($_GET['message'])) ."</h3>";
											}elseif($_GET['status'] == 2){
												echo "<h3 class=' notification label label-danger'>".  urldecode(base64_decode($_GET['message'])) ."</h3>";
											}

											
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
			<footer>
				<div id="footer">
					<div class="container">
						<!-- <div class="row row-bottom-padded-md">
						<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
							<h3>About Travel</h3>
							<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts.</p>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
							<h3>Top Flights Routes</h3>
							<ul>
								<li><a href="#">Manila flights</a></li>
								<li><a href="#">Dubai flights</a></li>
								<li><a href="#">Bangkok flights</a></li>
								<li><a href="#">Tokyo Flight</a></li>
								<li><a href="#">New York Flights</a></li>
							</ul>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
							<h3>Top Hotels</h3>
							<ul>
								<li><a href="#">Boracay Hotel</a></li>
								<li><a href="#">Dubai Hotel</a></li>
								<li><a href="#">Singapore Hotel</a></li>
								<li><a href="#">Manila Hotel</a></li>
							</ul>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
							<h3>Interest</h3>
							<ul>
								<li><a href="#">Beaches</a></li>
								<li><a href="#">Family Travel</a></li>
								<li><a href="#">Budget Travel</a></li>
								<li><a href="#">Food &amp; Drink</a></li>
								<li><a href="#">Honeymoon and Romance</a></li>
							</ul>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
							<h3>Best Places</h3>
							<ul>
								<li><a href="#">Boracay Beach</a></li>
								<li><a href="#">Dubai</a></li>
								<li><a href="#">Singapore</a></li>
								<li><a href="#">Hongkong</a></li>
							</ul>
						</div>
						<div class="col-md-2 col-sm-2 col-xs-12 fh5co-footer-link">
							<h3>Affordable</h3>
							<ul>
								<li><a href="#">Food &amp; Drink</a></li>
								<li><a href="#">Fare Flights</a></li>
							</ul>
						</div>
					</div> -->
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
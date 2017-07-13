<!DOCTYPE html>
<?php
	if (isset($this->session->userdata['logged_in'])) {

	}
?>

<html>
<head>
<title>Bali Radiance</title>
<!-- for-mobile-apps -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Purnayasa Transport" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //for-mobile-apps -->
<link href="<?php echo base_url();?>assets/bootstrap/dist/css/bootstrap.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url();?>assets/bootstrap/datetimepicker/css/bootstrap-datetimepicker.min.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url();?>assets/css/styles.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/custom-style.css" rel="stylesheet">
<!-- js -->
<script src="<?php echo base_url();?>assets/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url();?>assets/bootstrap/moment.js"></script>
<script src="<?php echo base_url();?>assets/bootstrap/js/collapse.js"></script>
<script src="<?php echo base_url();?>assets/bootstrap/js/transition.js"></script>
<script src="<?php echo base_url();?>assets/bootstrap/dist/js/bootstrap.js"></script>
<script src="<?php echo base_url();?>assets/bootstrap/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>
<script src="<?php echo base_url();?>assets/js/scripts.js"></script>
<script src="<?php echo base_url();?>assets/js/booking.js" type="text/javascript" charset="utf-8" async defer></script>
<!-- //js -->
<!--FlexSlider-->
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/flexslider.css" type="text/css" media="screen" />
		<script defer src="<?php echo base_url();?>assets/js/jquery.flexslider.js"></script>
		<script type="text/javascript">
		$(window).load(function(){
		  $('.flexslider').flexslider({
			animation: "slide",
			start: function(slider){
			  $('body').removeClass('loading');
			}
		  });
		});
	  </script>
<!--End-slider-script-->
<!-- pop-up-script -->
<script src="<?php echo base_url();?>assets/js/jquery.chocolat.js"></script>
		<link rel="stylesheet" href="<?php echo base_url();?>assets/css/chocolat.css" type="text/css" media="screen" charset="utf-8">
		<!--light-box-files -->
		<script type="text/javascript" charset="utf-8">
		$(function() {
			$('.view-seventh a').Chocolat();
		});
		</script>
<!-- //pop-up-script -->
<script src="<?php echo base_url();?>assets/js/easyResponsiveTabs.js" type="text/javascript"></script>
<!-- start-smoth-scrolling -->
<script type="text/javascript" src="<?php echo base_url();?>assets/js/move-top.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>assets/js/easing.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
<!-- start-smoth-scrolling -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<link href='//fonts.googleapis.com/css?family=Comfortaa:400,300,700' rel='stylesheet' type='text/css'>
</head>

<body>
	<!-- banner
		<div class="menu-header-index">

	</div>
	//banner -->
<!-- banner -->
	<div class="banner">
		<div class="header-top" >
			<div class="container">
				<div class="head-logo">
					<!-- <a href="<?php //echo base_url(); ?>"><span>Bali</span>Radiance<i>It's not just a Car, It's Bali Radiance</i></a> -->
					<a href="<?=base_url()?>"><img class="company-logo" src="<?=base_url()?>assets/images/logo.png" alt="Bali Radiance Logo"></a>
				</div>
				<div class="top-nav">
					<!-- <div class="hero fa-navicon fa-2x nav_slide_button" id="hero">
						<a href="#"><img src="<?php echo base_url();?>assets/images/menu.png" alt=""></a>
					</div> -->
					<ul class="list-inline">
						<li><a href="<?=base_url();?>">Home</a></li>
						<li><a href="<?=base_url();?>profile">Profile</a></li>
						<li><a href="<?=base_url();?>product">Product</a></li>
						<li><a href="<?=base_url();?>package">Package</a></li>
						<li><a href="#">Destination</a></li>
						<li><a href="<?=base_url();?>contactus">Contact Us</a></li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //banner -->
	<div class='base_url hidden'><?php echo base_url();?></div>
	<div class="bannercolor">
		<div class="container">
			<div class="sap_tabs">
				<div id="horizontalTab">
						<ul class="resp-tabs-list">
							<li class="resp-tab-item grid1" aria-controls="tab_item-0" role="tab"><span><i class="glyphicon glyphicon-car" aria-hidden="true"></i>Car</span></li>
							<!-- <li class="resp-tab-item grid2" aria-controls="tab_item-1" role="tab"><span><i class="glyphicon glyphicon-bus" aria-hidden="true"></i>Bus</span></li> -->
							<!-- <div class="clear"></div> -->
						</ul>
						<div class="resp-tabs-container">
							
							<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-0">
								<div class="facts">
									<div class="booking-form">
										<div class="online_reservation">
												<div class="b_room">
													<?php 
														$attribute = array('class' => 'bookingproduct');
														echo form_open('product/detail/',$attribute);
													?>
													<div class="booking_room">
														<div class="reservation">
															<ul>
																<li  class="span1_of_1 desti">
																	<h5>Choose our best Car</h5>
																	 <div class="book_date" style='position:relative;'>
																		
																			<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
																			<input type="text" placeholder="Select your Car" class="typeahead1 input-md form-control tt-input" required="">
																		 
																		<div class='col-md-12' id='containerSearch'>
																		 
																		</div>

																	 </div>
																 </li>
															</ul>
														</div>
														<div class="reservation">
															<ul>
																 <li  class="span1_of_1">
																	 <h5>Check In</h5>
																	<div class="book_date">
																		<div class="book_date">
																	
																			<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
																			<input class="date" id="check-in" type="text" placeholder="<?php echo date("d/m/Y"); ?>" required="">
																		
																		</div>

																	</div>
																 </li>
																 <li  class="span1_of_1 left">
																	 <h5>Check Out</h5>
																	 <div class="book_date">
																		
																			<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
																			<input class="date" id="check-out" type="text" placeholder="<?php echo date("d/m/Y"); ?>" required="">
																		
																	 </div>
																 </li>

																 <div class="clearfix"></div>
															</ul>
																<!---strat-date-piker---->

																		<script>
																				$(function() {
																					$('#check-in').datetimepicker({
																						minDate: moment()
																					});
																	        $('#check-out').datetimepicker({
																	            useCurrent: false //Important! See issue #1075
																	        });
																	        $("#check-in").on("dp.change", function (e) {
																	            $('#check-out').data("DateTimePicker").minDate(e.date);
																	        });
																	        $("#check-out").on("dp.change", function (e) {
																	            $('#check-in').data("DateTimePicker").maxDate(e.date);
																	        });
																				});
																		</script>
																<!---/End-date-piker-->
														</div>
														<br>
														<div class="reservation">
															<ul>
																 <li class="span1_of_3">
																	<div class="date_btn">
																			
																		<input type="submit" id="submitcar" value="Submit" />
																		
																	</div>
																 </li>
																 <div class="clearfix"></div>
															</ul>
														</div>
													</div>
													<div class="clearfix"></div>
												</div>
												<?php echo form_close();?>
										</div>
										<!---->
									</div>
								</div>
							</div>
							<div class="tab-1 resp-tab-content" aria-labelledby="tab_item-1">
								<div class="facts">
									<div class="flights">
										<div class="reservation">
											<ul>
												<li  class="span1_of_1 desti1">
													 <div class="book_date">
														 <form>
															<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
															<input type="text" placeholder="From" class="typeahead1 input-md form-control tt-input" required="">
														 </form>
													 </div>
												 </li>
												 <li  class="span1_of_1 desti1">
													 <div class="book_date">
														 <form>
															<span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
															<input type="text" placeholder="To" class="typeahead1 input-md form-control tt-input" required="">
														 </form>
													 </div>
												 </li>
												 <div class="clearfix"> </div>
											</ul>
										</div>
										<div class="reservation">
											<ul>
												 <li  class="span1_of_1">
													 <h5>Departure</h5>
													 <div class="book_date">
													<form>
														<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
														<input class="date" id="bus-check-in" type="text" placeholder="<?php echo date("d/m/Y"); ?>" required="">
													 </form>
													 </div>
												 </li>
												 <li  class="span1_of_1 left">
													 <h5>Return</h5>
													 <div class="book_date">
													<form>
														<span class="glyphicon glyphicon-calendar" aria-hidden="true"></span>
														<input class="date" id="bus-check-out" type="text" placeholder="<?php echo date("d/m/Y"); ?>" required="">
													 </form>
													 </div>
												 </li>
												 <script>
														 $(function() {
															 $('#bus-check-in').datetimepicker({
																 minDate: moment()
															 });
															 $('#bus-check-out').datetimepicker({
																	 useCurrent: false //Important! See issue #1075
															 });
															 $("#bus-check-in").on("dp.change", function (e) {
																	 $('#bus-check-out').data("DateTimePicker").minDate(e.date);
															 });
															 $("#bus-check-out").on("dp.change", function (e) {
																	 $('#bus-check-in').data("DateTimePicker").maxDate(e.date);
															 });
														 });
												 </script>
												 <div class="clearfix"> </div>
											</ul>
										</div>
										<div class="reservation">
										</br>
										</div>
										<div class="reservation">
											<ul>
												 <li class="span1_of_3">
														<div class="date_btn">
															<form action="<?php echo base_url() ?>package/search" method="get">
																<input type="submit" value="Search Flights" />
															</form>
														</div>
												 </li>
												 <div class="clearfix"></div>
											</ul>
										</div>
									</div>
								</div>
							</div>

						</div>
				</div>
			</div>
			<script type="text/javascript">
				$(document).ready(function () {
					$('#horizontalTab').easyResponsiveTabs({
						type: 'default', //Types: default, vertical, accordion
						width: 'auto', //auto or any width like 600px
						fit: true   // 100% fit in a container
					});

					$('#check-in').focusout(function(){
						var checkin = $('#check-in').val();
						localStorage.setItem("check-in", checkin);
					})
					$('#check-out').focusout(function(){
						var checkout = $('#check-out').val();
						localStorage.setItem("check-out", checkout);
					})
				});
			</script>

		</div>
	</div>
<!-- about-us -->
	<div id="about" class="about">
		<div class="container">
			<h3>Our Popular Product</h3>
			<div class="about-grids" style="margin-top:50px;">
				<div class="col-md-6 about-grid">
					<div class="about-grid1">
						<div class="itis">
							<h4>Toyota Avanza</h4>
						</div>
						<div class="hji">
							<p>Some Description Here. Description Here. Some Description Here.</p>
							<p>Start from IDR 250.000</p>
							<br>
							<button class="btn btn-danger">Order Now</button>
						</div>
						<div class="about-grid1-pos">
							<img src="<?php echo base_url();?>assets/images/car3.png" alt=" " class="img-responsive car-small" />
						</div>
					</div>
				</div>
				<div class="col-md-6 about-grid">
					<div class="about-grid1 about-grd1">
						<div class="itis">
							<h4>Karimun Estilo</h4>
						</div>
						<div class="hji">
							<p>Some Description Here. Description Here. Some Description Here.</p>
							<p>Start from IDR 250.000</p>
							<br>
							<button class="btn btn-danger">Order Now</button>
						</div>
						<div class="about-grid1-pos1">
							<img src="<?php echo base_url();?>assets/images/car2.png" alt=" " class="img-responsive car-small" />
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="about-grids">
				<div class="col-md-6 about-grid">
					<div class="about-grid1">
						<div class="itis">
							<h4>Toyota Yaris</h4>
						</div>
						<div class="hji">
							<p>Some Description Here. Description Here. Some Description Here.</p>
							<p>Start from IDR 250.000</p>
							<br>
							<button class="btn btn-danger">Order Now</button>
						</div>
						<div class="about-grid1-pos">
							<img src="<?php echo base_url();?>assets/images/car4.png" alt=" " class="img-responsive car-small" />
						</div>
					</div>
				</div>
				<div class="col-md-6 about-grid">
					<div class="about-grid1 about-grd1">
						<div class="itis">
							<h4>Daihatsu Xenia</h4>
						</div>
						<div class="hji">
							<p>Some Description Here. Description Here. Some Description Here.</p>
							<p>Start from IDR 250.000</p>
							<br>
							<button class="btn btn-danger">Order Now</button>
						</div>
						<div class="about-grid1-pos1">
							<img src="<?php echo base_url();?>assets/images/car1.png" alt=" " class="img-responsive car-small" />
						</div>
					</div>
				</div>
				<div class="clearfix"></div>
			</div>

	</div>
<!-- //about-us -->
<!-- about-bottom -->
	<div class="about-bottom">
		<div class="container why-choose-us">
				<h1>Why choose us ?</h1>

				<div class="col-md-12" style="margin-top: 50px;">
					<div class="col-md-3">
						<img src="<?php echo base_url() ?>/assets/images/Globe_Asia-100.png" alt="">
						<p>Paket tour dan travel terlengkap</p>
					</div>
					<div class="col-md-3">
						<img src="<?php echo base_url() ?>/assets/images/Money-100.png" alt="">
						<p>Pilihan paket yang murah</p>
					</div>
					<div class="col-md-3">
						<img src="<?php echo base_url() ?>/assets/images/Bank_Card_Back_Side-100.png" alt="">
						<p>Jaminan keamanan pembayaran online</p>
					</div>
					<div class="col-md-3">
						<img src="<?php echo base_url() ?>/assets/images/Support-100.png" alt="">
						<p>Layanan pelanggan tersedia 24/7</p>
					</div>
				</div>
			</section>
		</div>
	</div>
<!-- //about-bottom -->

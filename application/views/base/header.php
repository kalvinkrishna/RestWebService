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
<link href="<?php echo base_url();?>assets/css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url();?>assets/css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url();?>assets/css/custom-style.css" rel="stylesheet" type="text/css" media="all" />
<link href="<?php echo base_url();?>assets/css/styles.css" rel="stylesheet">
<link href="<?php echo base_url();?>assets/css/font-awesome.min.css" rel="stylesheet">
<!-- js -->
<script src="<?php echo base_url();?>assets/js/jquery-1.11.1.min.js"></script>
<script src="<?php echo base_url();?>assets/bootstrap/moment.js"></script>
<script src="<?php echo base_url();?>assets/bootstrap/js/collapse.js"></script>
<script src="<?php echo base_url();?>assets/bootstrap/js/transition.js"></script>
<script src="<?php echo base_url();?>assets/bootstrap/dist/js/bootstrap.js"></script>
<script src="<?php echo base_url();?>assets/bootstrap/datetimepicker/js/bootstrap-datetimepicker.min.js"></script>

<script src="<?php echo base_url();?>assets/js/scripts.js"></script>
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
<!-- banner -->
	<div class="menu-header-small">
		<!-- <div class="navigation">
			<div class="container-fluid">
				<nav class="pull">
					<ul class="nav">
						<li><a href="<?php echo site_url('controllers/Home'); ?>" class="active"> Home</a></li>
						<li><a href="#about" class="scroll"> About</a></li>
						<li><a href="#portfolio" class="menu scroll">Popular Places<span class="glyphicon glyphicon-menu-down" aria-hidden="true"></span></a></li>
							<ul class="nav-sub">
								<li><a href="#portfolio" class="scroll">Place 1</a></li>
								<li><a href="#portfolio" class="scroll">Place 2</a></li>
								<li><a href="#portfolio" class="scroll">Place 3</a></li>
							</ul>
							<script>
								$( "li a.menu" ).click(function() {
								$( "ul.nav-sub" ).slideToggle( 300, function() {
								// Animation complete.
								});
								});
							</script>
						<li><a href="#events" class="scroll"> Events</a></li>
						<li><a href="#mail" class="scroll"> Mail us</a></li>
					</ul>
				</nav>
			</div>
		</div> -->
		<div class="header-top-sub">
			<div class="container">
					<div class="head-logo">
						<!-- <a href="<?php //echo base_url(); ?>"><span>Bali</span>Radiance<i>It's not just a Car, It's Bali Radiance</i></a> -->
						<a href="<?=base_url()?>"><img class="company-logo-small" src="<?=base_url()?>assets/images/logo2.png" alt="Bali Radiance Logo"></a>
					</div>
					<div class="top-nav-small">
						<!-- <div class="hero fa-navicon fa-2x nav_slide_button" id="hero">
							<a href="#"><img src="<?php echo base_url();?>assets/images/menu.png" alt=""></a>
						</div> -->
						<ul class="list-inline">
						  <li><a href="<?=base_url();?>">Home</a></li>
						  <li><a href="<?=base_url();?>profile">Profile</a></li>
						  <li><a href="<?=base_url();?>product">Product</a></li>
							<li><a href="<?=base_url();?>package">Package</a></li>
							<li><a href="#">Destination</a></li>
							<li><a href="<?=base_url();?>ContactUs">Contact Us</a></li>
						</ul>
					</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
<!-- //banner -->

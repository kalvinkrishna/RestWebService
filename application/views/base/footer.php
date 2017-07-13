
<!-- footer-top -->
	<div class="footer-top">
		<div class="container">
			<div class="col-md-3 footer-top-grid">
				<h3><span>Bali Radiance</span></h3>
				<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Pellentesque
					id arcu neque, at convallis est felis.</p>
			</div>
			<div class="col-md-3 footer-top-grid">
				<h3>THE <span>TAGS</span></h3>
				<div class="unorder">
					<ul class="tag2">
						<li><a href="#">Bali Radiance</a></li>
						<li><a href="#">Car</a></li>
						<li><a href="#">Sport Car</a></li>
					</ul>
					<ul class="tag2">
						<li><a href="#">Family Car</a></li>
						<li><a href="#">Car Rent</a></li>
						<li><a href="#">Tourism</a></li>
						<li><a href="#">Bali</a></li>
					</ul>
					<ul class="tag2">
						<li><a href="#">Kuta</a></li>
						<li><a href="#">Badung</a></li>
						<li><a href="#">Bus</a></li>
					</ul>
					<ul class="tag2">
						<li><a href="#">Destination</a></li>
						<li><a href="#">Rent Here</a></li>
						<li><a href="#">Class</a></li>
						<li><a href="#">Yaris</a></li>
					</ul>
					<ul class="tag2">
						<li><a href="#">Avanza</a></li>
						<li><a href="#">Jazz</a></li>
						<li><a href="#">Denpasar</a></li>
					</ul>
				</div>
			</div>
			<div class="col-md-3 footer-top-grid">
				<h3><span>Testimonial</span></h3>
				<ul class="twi">
					<li>I like this awesome freebie. Check it out <a href="mailto:info@example.com" class="mail">
					@http://t.co/9vslJFpW</a> <span>ABOUT 15 MINS</span></li>
					<li>I like this awesome freebie. You can view it online here<a href="mailto:info@example.com" class="mail">
					@http://t.co/9vslJFpW</a> <span>ABOUT 2 HOURS AGO</span></li>
				</ul>
			</div>
			<div class="col-md-3 footer-top-grid">
				<h3>Our <span>Site</span></h3>
				<div class="flickr-grids">
					<div class="flickr-grid">
						<a href="#"><img src="<?php echo base_url();?>assets/images/11.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="flickr-grid">
						<a href="#"><img src="<?php echo base_url();?>assets/images/12.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="flickr-grid">
						<a href="#"><img src="<?php echo base_url();?>assets/images/13.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="clearfix"> </div>

					<div class="flickr-grid">
						<a href="#"><img src="<?php echo base_url();?>assets/images/16.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="flickr-grid">
						<a href="#"><img src="<?php echo base_url();?>assets/images/14.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="flickr-grid">
						<a href="#"><img src="<?php echo base_url();?>assets/images/15.jpg" alt=" " class="img-responsive" /></a>
					</div>
					<div class="clearfix"> </div>
				</div>
			</div>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //footer-top -->
<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="footer-left">
				<ul>
					<li><a href="<?php echo site_url('controllers/Home'); ?>"><i>Bali</i>Radiance</a><span> |</span></li>
					<li><p> It's not just a car, It's Bali Radiance <span> 0800 (123) 4567 Seminyak - Bali</span></p></li>
				</ul>
			</div>

			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //footer -->
<!-- here stars scrolling icon -->
<script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script src="<?php echo base_url();?>assets/js/bootstrap-datepicker.js"></script>
	<script type="text/javascript">

		$(document).ready(function() {

				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear'
				};


			$().UItoTop({ easingType: 'easeOutQuart' });

			});

			$('.carousel').carousel();
	</script>
<!-- //here ends scrolling icon -->
</body>
</html>

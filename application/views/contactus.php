

<!--contact-->
	<div id="mail" class="contact">
		<div class="container">
			<h3>How to Find Us</h3>
			<p class="ever"></p>
			<div class="contact-grids">
				<div class="col-md-7 contact-right" style="margin-top: -10px;">
					<form>
						<input type="text" value="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
						<input type="email" value="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
						<input type="text" value="Telephone" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Telephone';}" required="" style="margin-top: -4px;">
						<textarea onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
						<input type="submit" value="Submit" >
					</form>
				</div>
				<div class="col-md-5 contact-left">
					<p>
						<?php  echo $contact_desc['value'];?>
					</p>
					<ul>
						<li><span class="glyphicon glyphicon-map-marker" aria-hidden="true"></span>
							<?php  echo $address['value'];?>
						</li>
						<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span>
							<?php  echo $telephone['value'];?>
						</li>
						<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span>
							<a href="mailto:info@example.com"><?php  echo $email['value'];?></a>
						</li>
					</ul>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<div class="map">
		<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4376542.827441857!2d133.94238155277205!3d-25.73870281693212!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2b2bfd076787c5df%3A0x538267a1955b1352!2sAustralia!5e0!3m2!1sen!2sin!4v1439377130002" allowfullscreen></iframe> -->
		<!-- <iframe src="https://www.google.com/maps/embed/v1/place?key=YOUR_API_KEY&q=Space+Needle,Seattle+WA" allowfullscreen></iframe>-->
		 <iframe src="https://www.google.com/maps/embed/v1/place?key=AIzaSyB8swdpJxrZeIrsa72839jIJWiIPIPk6_Q&q=Bali+Radiance+Basangkasa" allowfullscreen></iframe>
	</div>
<!--//contact-->



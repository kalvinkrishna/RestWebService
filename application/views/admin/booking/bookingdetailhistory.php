<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
			<li class="active">History / Detail</li>
		</ol>
	</div><!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">Booking Detail</div>
				<div class="panel-body" style="padding:20px 0px;">
				<?php echo form_open('Admin/Booking/complete');?>
						<div class="col-md-6">
							<div class="form-group">
								<label>Complete Name <span class="req-filled">*</span></label>
								<input class="form-control" type="hidden" value="<?php echo $booking['id_book'] ?>" name="id" readonly>
								<input class="form-control" value="<?php echo $booking['bname'] ?>" name="car_name" readonly>
							</div>
							<div class="form-group">
								<label>Local Residence <span class="req-filled">*</span></label>
								<input class="form-control" name="local_residence" value="<?php echo "dalung" ?>" readonly>
							</div>
							
							<div class="form-group">
								<label>Permanent Residence<span class="req-filled">*</span></label>
								<input class="form-control" name="permanent_residence"  value="<?php echo $booking['bresidence'] ?>" readonly>
							</div>
							<div class="form-group">
								<label>Nationality<span class="req-filled">*</span></label>
								<input class="form-control" name="nationality" value="<?php echo $booking['bnation'] ?>" readonly>
							</div>
							
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Passport Number<span class="req-filled">*</span></label>
								<input class="form-control" name="passport" value="<?php echo $booking['bpassport'] ?>" readonly>
							</div>
							<div class="form-group">
								<label>Driving License Number<span class="req-filled">*</span></label>
								<input class="form-control" name="license" value="<?php echo $booking['blicense'] ?>" readonly>
							</div>
							<div class="form-group">
								<label>Phone Number<span class="req-filled">*</span></label>
								<input class="form-control" name="phone" value="<?php echo $booking['bphone'] ?>" readonly>
							</div>
							<div class="form-group">
								<label>Email<span class="req-filled">*</span></label>
								<input class="form-control" name="email" value="<?php echo $booking['bemail'] ?>" readonly>
							</div>
						</div>
				</div>
				<div class="panel-heading">Payment Information</div>
				<div class="panel-body" style="padding:20px 0px;">
						<div class="col-md-6">
							<div class="form-group">
								<label>Date Rent</label>
								<input class="form-control" name="checkin" value="<?php echo $booking['vstartrental'] ?>" readonly>
							</div>
							<div class="form-group">
								<label>Vehicle Type</label>
								<input class="form-control" name="car" value="<?php echo $booking['name'] ?>" readonly>
							</div>
							<div class="form-group">
								<label>Package</label>
								<input class="form-control" name="package" value="<?php echo $booking['name_package'] ?>" readonly>
							</div>
							<div class="form-group">
								<label>Payment Type</label>
								<input class="form-control" name="payment_type" readonly value="<?php echo $booking['payment_status'] ?>"></input>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Date Back</label>
								<input class="form-control" name="checkout" value="<?php echo $booking['vreturnrental'] ?>" readonly>
							</div>
							<div class="form-group">
								<label>Charge</label>
								<input class="form-control" name="package" value="<?php 
									echo $total_price ;
								?>
								" readonly>
							</div>
							<div class="form-group">
								<label>Paid</label>
								<input class="form-control" name="paid" value="<?php echo $booking['payment'] ?>" readonly></input>
							</div>
							<div class="form-group">
								<label>Insufficient</label>
								<input class="form-control" name="insufficient" readonly value="<?php echo $insufficient ?>" ></input>
							</div>
						</div>
				</div>
				<div class="panel-heading">Complete Form</div>
				<div class="panel-body" style="padding:20px 0px;">
					<?php
						if($booking['book_status']=='Complete'){
					?>
						<div class="col-md-6">
							<div class="form-group">
								<label>Book Status</label>
								<input class="form-control" name="booking_status" readonly value="<?php echo $booking['book_status'] ?>" ></input>
							</div>
						</div>
					<?php

						}else{
					?>
						<div class="col-md-6">
							<div class="form-group">
								<label>Action to this Request</label>
								<select class="form-control" name="status" required="">
									<option value="">Select Action</option>
									<option value="Complete">Complete</option>
								</select>
							</div>
						</div>
					<?php
						}
					?>
						<div class="col-md-6">
							<div class="form-group">
								<label>Car Number</label>
								<input type="hidden" class="form-control" name="id_car_detail" readonly value="<?php echo $booking['id_car_detail'] ?>" ></input>
								<input class="form-control" name="car_number" readonly value="<?php echo $booking['car_number'] ?>" ></input>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
							<?php
								if($booking['book_status']!='Complete'){
							?>
								<input type="submit" value="Complete This Rent" class="btn btn-info" name="submit"/>
							<?php
								}
							?>
							</div>
						</div>
				</div>
				<?php echo form_close();?>
			</div>
		</div>
	</div><!--/.row-->

	<script src="<?=base_url()?>assets/js/updateModal.js" type="text/javascript" charset="utf-8" async defer></script>

</div>	<!--/.main-->	
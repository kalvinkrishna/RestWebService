<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
			<li class="active">Booking / Detail</li>
		</ol>
	</div><!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">Booking Detail</div>
				<div class="panel-body" style="padding:20px 0px;">
				<?php echo form_open('Admin/Booking/submit');?>
						<div class="col-md-6">
							<div class="form-group">
								<label>Complete Name <span class="req-filled">*</span></label>
								<input class="form-control" type="hidden" value="<?php echo $booking['id_book'] ?>" name="id" readonly>
								<input class="form-control" value="<?php echo $booking['bname'] ?>" name="car_name" readonly>
							</div>
							<div class="form-group">
								<label>Permanent Residence<span class="req-filled">*</span></label>
								<textarea class="form-control" rows="9" placeholder="Will be show on Home" name='permanent_residence' required="">
										<?php echo $booking['bresidence']; ?>
								</textarea>
							</div>
							
							<div class="form-group">
								<label>Local Residence <span class="req-filled">*</span></label>
								<textarea class="form-control" rows="9" placeholder="Will be show on Home" name='localresidence' required="">
										<?php echo $booking['baddress']; ?>
								</textarea>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Nationality<span class="req-filled">*</span></label>
								<input class="form-control" name="nationality" value="<?php echo $booking['bnation'] ?>" readonly>
							</div>
							<div class="form-group">
								<label>Passport Number<span class="req-filled">*</span></label>
								<input class="form-control" name="passport" value="<?php echo $booking['bpassport']?>" readonly>
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
						<div class='col-md-6'>
							<?php if($booking['vdriver']=='1'){ ?>
							<div class="form-group">
								<label>Driver?</label>
								<input class="form-control" name="driver" value="yes" readonly>
							</div>
							<?php
							}
							?>
							<?php if($booking['vinsurance']){?>
							<div class="form-group">
								<label>Insurace?</label>
								<input class="form-control" name="driver" value="yes" readonly>
							</div>
							<?php
								}
							?>

						<?php
							if($booking['vdelivery']=='1'){
						?>
			
							<div class="form-group">
								<label>Delivery Service Address<span class="req-filled">*</span></label>
								<textarea class="form-control" rows="9" placeholder="Will be show on Home" name='description' required="">
										<?php echo $booking['vdeliveryaddress']; ?>
								</textarea>
							</div>
				
						<?php } ?>
						</div>
					
					
				</div>
				<div class="panel-heading">Payment Information</div>
				<div class="panel-body" style="padding:20px 0px;">
						<div class="col-md-6">
							<div class="form-group">
								<label>Date Rent</label>
								<input class="form-control" name="checkin" value="<?php echo date('d M Y H:i:s',strtotime($booking['vstartrental'])) ?>" readonly>
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
								<select class="form-control" name="payment_type" required="">
									<option value="0" selected><?php echo $booking['payment_status']?></option>
									<option value='1'>Lunas</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Date Back</label>
								<input class="form-control" name="checkout" value="<?php echo date('d M Y H:i:s',strtotime($booking['vreturnrental'])) ?>" readonly>
							</div>
							<div class="form-group">
								<label>Charge</label>
								<input class="form-control" name="package" value="<?php 
									echo "Rp. ".number_format($total_price, 0 ,'', '.' ) ;
								?>
								" readonly>
							</div>
							<div class="form-group">
								<label>Paid</label>
								<input class="form-control" name="paid" value="<?php echo "Rp. ".number_format($booking['payment'], 0 ,'', '.' ) ?>" readonly></input>
							</div>
							<div class="form-group">
								<label>Insufficient</label>
								<input class="form-control" name="insufficient" readonly value="<?php echo "Rp. ".number_format($insufficient, 0 ,'', '.' ); ?>" ></input>
							</div>
						</div>
				</div>
				<div class="panel-heading">Submission Form</div>
				<div class="panel-body" style="padding:20px 0px;">
						<div class="col-md-6">
							<div class="form-group">
								<label>Action to this Request</label>
								<select class="form-control" name="status" required="">
									<option value="">Select Action</option>
									<option value="Accept">Accept</option>
									<option value="Decline">Decline</option>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Car Number</label>
								<select class="form-control" name="car_number" required="">
									<option value="">Select Car</option>
									<?php
										foreach ($cardetail as $key => $value) {
											echo "<option selected value='".$value["id_car_detail"]."'>";
											echo $value['car_number'];
											echo "</option>";
										}
									?>
								</select>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<input type="submit" class="btn btn-info" name="submit"/>
							</div>
						</div>
				</div>
				<?php echo form_close();?>
			</div>
		</div>
	</div><!--/.row-->

	<script src="<?=base_url()?>assets/js/updateModal.js" type="text/javascript" charset="utf-8" async defer></script>

</div>	<!--/.main-->	
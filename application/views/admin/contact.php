<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
			<li class="active">Contact</li>
		</ol>
	</div><!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">Contact</div>
				<div class="panel-body" style="padding:20px 0px;">
				<?php echo form_open('Admin/Contact/updateContact');?>
						<div class="col-md-8" style='padding: 0px;'>
							<div class="col-md-12">
								<div class="form-group">
									<label>Telephone</label>
									<input class="form-control" placeholder="Facebook" name="telephone" 
										value="<?php echo $telephone['value']; ?>">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label>Email</label>
									<input class="form-control" placeholder="Email" name="email" 
										value="<?php echo $email['value']; ?>">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label>Address</label>
									<input class="form-control" placeholder="Address" name="address" 
										value="<?php echo $address['value']; ?>">
								</div>
							</div>
							
						</div>
						
						<div class="col-md-12">
							<div class="form-group">
								<label>Contact Description</label>
								<textarea name="contact_desc" style="height: 200px;">
									<?php echo $contact_desc['value'];?>
								</textarea>
							</div>
						</div>
						<div class="col-md-12">
							<input type="submit" class="btn btn-info"/>
						</div>
				<?php echo form_close();?>
				</div>
			</div>
		</div>
	</div><!--/.row-->

</div>	<!--/.main-->	
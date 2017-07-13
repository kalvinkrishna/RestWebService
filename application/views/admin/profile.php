<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
			<li class="active">Profile</li>
		</ol>
	</div><!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">Profile</div>
				<div class="panel-body" style="padding:20px 0px;">
			
						<div class="col-md-8" style='padding: 0px;'>
							<div class="col-md-12">
								<div class="form-group">
									<label>Facebook</label>
									<input class="form-control" placeholder="Facebook" name="facebook" 
										value="<?php echo $facebook['value']; ?>">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label>Twitter</label>
									<input class="form-control" placeholder="Twitter" name="twitter" 
										value="<?php echo $twitter['value']; ?>">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label>Website</label>
									<input class="form-control" placeholder="Website" name="website" 
										value="<?php echo $website['value']; ?>">
								</div>
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<label>Picture</label>
									<script src="<?php echo base_url()?>assets/js/uploaded.js" type="text/javascript" charset="utf-8" async defer></script>
									<button id='button-Uploadprofile' class="btn btn-info" value="Add Image">upload image</button>
									<input id='uploadTriggerprofile' type="file" class="form-control" placeholder="Car Name" name="car_img" required style='display: none;'/>
								</div>
							</div>
						</div>
						<div class="col-md-4 image-preview">
							<img style="width: 100%; height: auto;" src="<?=base_url()?>assets/images/profile.jpg" alt=""/>
						</div>
						<div class="col-md-12">
							<div class="form-group">
								<label>Profile</label>
								<textarea name="profile" style="height: 200px;">
									<?php echo $content['content_main']; ?>
								</textarea>
							</div>
						</div>
						<div class="col-md-12">
							<input type="submit" class="btn btn-info"/>
						</div>
				</div>
			</div>
		</div>
	</div><!--/.row-->

</div>	<!--/.main-->	
<!-- events -->
	<div id="events" class="events" >
		<div class="container">
			<h3>Our <span>Packages & Promos</span></h3>
			<p class="ever">To take a trivial example, which of us ever undertakes laborious physical exercise.</p>
			<div class="events-grids" style="min-height: 250px !important;">
				<?php 
					foreach ($package as $data) {
				?>
						<div class="col-md-4 events-grid" style="height: auto !important;">
							<div class="cal">
								<img src="<?php echo base_url();?>assets/images/3.png" alt=" " class="img-responsive" />
								<div class="cal-info">
									<h4 style="min-height:45px;"><?php echo $data['name_package']; ?></h4>
									<?php echo $data['description']; ?>
								</div>
							</div>
						</div>
				<?php
					}
				?>
				
				<div class="clearfix"> &nbsp;</div>
			</div>
			<!--<div class="events-grids1"> <!-- promo here
				<div class="col-md-4 events-grid1">
					<div class="events-grid11">
						<span>01.</span>
						<div class="events-grid11-info">
							<h4><i class="glyphicon glyphicon-calendar" aria-hidden="true"></i><label>31 October 2015</label>molestiae consequatur</h4>
							<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse
								quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo
								voluptas nulla pariatur</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 events-grid1">
					<div class="events-grid11">
						<span>02.</span>
						<div class="events-grid11-info">
							<h4><i class="glyphicon glyphicon-calendar" aria-hidden="true"></i><label>31 October 2015</label>molestiae consequatur</h4>
							<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse
								quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo
								voluptas nulla pariatur</p>
						</div>
					</div>
				</div>
				<div class="col-md-4 events-grid1">
					<div class="events-grid11">
						<span>03.</span>
						<div class="events-grid11-info">
							<h4><i class="glyphicon glyphicon-calendar" aria-hidden="true"></i><label>31 October 2015</label>molestiae consequatur</h4>
							<p>Quis autem vel eum iure reprehenderit qui in ea voluptate velit esse
								quam nihil molestiae consequatur, vel illum qui dolorem eum fugiat quo
								voluptas nulla pariatur</p>
						</div>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>-->
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- //events -->

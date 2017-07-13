<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
			<li class="active">Product / All Car</li>
		</ol>
	</div><!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
			
				<div class="panel-heading">Add Car</div>
				<div class="panel-body" style="padding:20px 0px;">
				<?php echo form_open('Admin/Product/submit');?>
						<div class="col-md-6">
							<div class="form-group">
								<label>Car Name <span class="req-filled">*</span></label>
								<input class="form-control" placeholder="Car Name" name="car_name" required=""></input>
							</div>
							<div class="form-group">
								<label>Car Class <span class="req-filled">*</span></label>
								<select class="form-control" name="car_class" required="">
									<option value="">Select Car Class</option>
								<?php
									foreach ($class as $key => $value) {
										echo "<option value='".$value["id_class"]."'>";
										echo $value['name_class'];
										echo "</option>";
									}

								?>
								</select>
							</div>
							<div class="form-group">
								<label>Car Description <span class="req-filled">*</span></label>
								<textarea class="form-control" rows="9" name='description'></textarea>
							</div>
							<button type="submit" class='btn btn-primary' style="width: 200px; height:45px;" value='submit' name='submit_product'>Add Car</button>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Fuel Type</label>
								<input class="form-control" placeholder="Fuel Type" name="car_fuel" ></input>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Seat Capacity</label>
								<input class="form-control" placeholder="Seat" name="car_seat" >
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Tank Capacity</label>
								<input class="form-control" placeholder="Tank Capacity" name="car_tank">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Fasilities</label>
								<input class="form-control" style="margin-bottom: 10px;" placeholder="Facility 1" name="fac1">
								<input class="form-control" style="margin-bottom: 10px;" placeholder="Facility 2" name="fac2">
								<input class="form-control" style="margin-bottom: 10px;" placeholder="Facility 3" name="fac3">
								<input class="form-control" style="margin-bottom: 10px;" placeholder="Facility 4" name="fac4">
								<input class="form-control" style="margin-bottom: 10px;" placeholder="Facility 5" name="fac5">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Start Price</label>
								<input class="form-control" placeholder="Start Price" name="start_price">
							</div>
						</div>
				<?php echo form_close();?>
				</div>
			</div>
		</div>
	</div><!--/.row-->

	<script src="<?=base_url()?>assets/js/updateModal.js" type="text/javascript" charset="utf-8" async defer></script>
		
	<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">Update Product</h4>
	      </div>
	      <?php
	          	$attributes = array('class' => 'myform');
	          	echo form_open('Admin/Product/update/product',$attributes);
	          ?>
	      <div class="modal-body">
	      	<input class='hidden' type='hidden' id="baseUrl" value="<?php  echo base_url(); ?>" /> 
	         

	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
	        <button type="submit" class="btn btn-primary" value='updateSave'>Save changes</button>
	      </div>

	      <?php echo form_close();?>
	    </div>
	  </div>
	</div>

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">Car List</div>
				<div class="panel-body">
					<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
					    <thead>
					    <tr>
					        <th data-field="id" data-checkbox="true" >Item ID</th>
					        <th data-field="name" data-sortable="true">Car Name</th>
					        <th data-field="class" data-sortable="true">Car Class</th>
					        <th data-field="action" data-sortable="true">Action</th>
					    </tr>
					    </thead>
					    <tbody>
					    <?php 
						foreach ($product as $key => $value) {
							echo '
					    <tr>
					    	<td>'.$value["id_car"].'</td>
					    	<td>
								'.$value["name"].'
					    	</td>
					    	<td>
								'.$value["name_class"].'
					    	</td>
					    	<td>
					    		<a href="'.base_url().'Admin/Product/detail/'.$value["id_car"].'"><svg class="glyph stroked clipboard with paper action-small"><use xlink:href="#stroked-clipboard-with-paper"/></svg></a>
					    		&nbsp;
					    	'; ?>
					    
					    		<a href="<?=base_url()?>Admin/Product/delete/product/<?php echo $value["id_car"]?>" onclick="return confirm('Are you sure to delete?')"><svg class="glyph stroked trash action-small"><use xlink:href="#stroked-trash"/></svg></svg></a>
					    <?php echo '
					    	</td>
					    </tr>';

					    // <a class="" href="#"><button id='.$value["id_car"].' class="btn-primary" data-toggle="modal" data-target="#myModal">Update</button></a>
					}	
					    ?>
					    </tbody>
					</table>
				</div>
			</div>
		</div>
	</div><!--/.row-->	

</div>	<!--/.main-->	
<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
			<li class="active">Product / Car Detail</li>
		</ol>
	</div><!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">Detail Car</div>
				<div class="panel-body" style="padding:20px 0px;">
				<?php echo form_open('Admin/Product/update');?>
						<div class="col-md-6">
							<input  type="hidden" name="id" value="<?php echo $cardata['id_car'] ?>"></input>
							<div class="form-group">
								<label>Car Name <span class="req-filled">*</span></label>
								<input class="form-control" placeholder="Car Name" name="car_name" value="<?php echo $cardata['name'] ?>" required=""></input>
							</div>
							<div class="form-group">
								<label>Car Class <span class="req-filled">*</span></label>
								<select class="form-control" name="car_class" required="">
								<?php
									foreach ($class as $key => $value) {
										if($value['id_class']==$cardata['id_class']){
											echo "<option selected value='".$value["id_class"]."'>";
											echo $value['name_class'];
											echo "</option>";
										}else{
											echo "<option value='".$value["id_class"]."'>";
											echo $value['name_class'];
											echo "</option>";
										}
									}
								?>
								</select>
							</div>
							<div class="form-group">
								<label>Car Description <span class="req-filled">*</span></label>
								<textarea class="form-control" rows="9" placeholder="Will be show on Home" name='description' required="">
									<?php echo $cardata['car_desc']; ?>
								</textarea>
							</div>
							<button type="submit" class='btn btn-primary' style="width: 200px; height:45px;" value='submit' name='submit_product'>Edit Car</button>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Fuel Type</label>
								<input class="form-control" placeholder="Fuel Type" name="car_fuel" value="<?php echo $cardata['fuel'] ?>"></input>
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Seat Capacity</label>
								<input class="form-control" placeholder="Seat" name="car_seat" value="<?php echo $cardata['seat_capacity'] ?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Tank Capacity</label>
								<input class="form-control" placeholder="Tank Capacity" name="car_tank" value="<?php echo $cardata['tank_capacity'] ?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Fasilities</label>
								<input class="form-control" style="margin-bottom: 5px;" placeholder="Fasility 1" name="fac1" value="<?php echo $cardata['facility_1'] ?>">
								<input class="form-control" style="margin-bottom: 5px;" placeholder="Fasility 2" name="fac2" value="<?php echo $cardata['facility_2'] ?>">
								<input class="form-control" style="margin-bottom: 5px;" placeholder="Fasility 3" name="fac3" value="<?php echo $cardata['facility_3'] ?>">
								<input class="form-control" style="margin-bottom: 5px;" placeholder="Fasility 4" name="fac4" value="<?php echo $cardata['facility_4'] ?>">
								<input class="form-control" style="margin-bottom: 5px;" placeholder="Fasility 5" name="fac5" value="<?php echo $cardata['facility_5'] ?>">
							</div>
						</div>
						<div class="col-md-6">
							<div class="form-group">
								<label>Start Price</label>
								<input class="form-control" placeholder="Start Price" name="start_price" value="<?php echo $cardata['start_price'] ?>">
							</div>
						</div>
			
				<?php echo form_close();?>
				</div>
			</div>
		</div>
	</div><!--/.row-->
		

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">Car Image </div>
				<div class="panel-body">
					
					<script src="<?php echo base_url()?>assets/js/uploaded.js" type="text/javascript" charset="utf-8" async defer></script>
						
						<div class="col-md-5">
							<div class="form-group">
								<label>Upload Images <span class="req-filled">*</span></label>
								<br>
								<button id='button-Upload' class="btn btn-info" value="Add Image">upload image</button> <span class='image-count'></span>
								<span class='base_url hidden'>
									<?php echo base_url();?>
								</span>
								<span class='car_ids' data-et='<?php echo $id_car;?>'>
								</span>
								<input id='uploadTrigger' type="file" class="form-control" placeholder="Car Name" name="car_img" required style='display: none;'/>
							</div>
						</div>
						<div class="col-md-5">
							<div class="form-group">
								<label>Alternative</label>
								<input class="form-control" placeholder="Alternative" name="img_alt"></input>
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
							<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
								<input type="submit" class="btn btn-info" value="Add Image">
							</div>
						</div>
						<div class='col-md-12 image-preview'>
							<?php
								//echo print_r($carImage);
								foreach ($carImage as $key => $value) {
									# code...
									echo"
									<div class='col-md-4' style='min-height:200px; margin-top:20px;'>

										<img src='".base_url()."assets/images/cars/".$value["src"]."' class='image-responsive col-md-12' data-id='' class='new'></img>
											<a href='".base_url()."Admin/Product/delete/carpicture/".$value["id_car_picture"]."/".$value["id_car"]."' onclick=\"confirm('Are you sure to delete?');\">
											<span class='glyphicon glyphicon-remove remove' style='position:absolute; right:0px; top:0px; cursor:pointer;' title='Delete'
												data-pic=".$value["id_car_picture"]."
											>
											</span>
											</a>
									</div>
									";
								};
							?>
						</div>
				</div>
				<!-- <div class="panel-body">
					<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="false" data-show-toggle="false" data-show-columns="false" data-search="false" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
					    <thead>
					    <tr>
					        <th data-field="state" data-checkbox="true" >Item ID</th>
					        <th data-field="id" data-sortable="true">Picture</th>
					        <th data-field="name"  data-sortable="true">Alternative</th>
					        <th data-field="price" data-sortable="true">Action</th>
					    </tr>
					    <tbody>
					    <tr>
					    	<td>A</td>
					    	<td>A</td>
					    	<td>A</td>
					    	<td>
					    		<a href="#"><svg class="glyph stroked trash action-small"><svg xlink:href="#stroked-trash"/></svg></svg></a>
					    	</td>
					    </tr>
					    </tbody>
					    </thead>
					</table>
				</div> -->
			</div>
		</div>
	</div><!--/.row-->	

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">Car List</div>
				<div class="panel-body">
					<?php echo form_open('Admin/Product/submitCarDetail');?>
					<div class="col-md-12">
						<div class="col-md-4" style="padding:0px;">
							<div class="form-group">
								<label>Car Number <span class="req-filled">*</span></label>
								<input  type="hidden" name="id" value="<?php echo $cardata['id_car'] ?>"></input>
								<input class="form-control" placeholder="Car Number" name="carnumber" required="">
							</div>
							<div class="form-group">
								<label>Car Year <span class="req-filled">*</span></label>
								<input class="form-control" placeholder="Car Year" name="caryear" required="">
							</div>
							<div class="form-group">
								<label>Status <span class="req-filled">*</span></label>
								<select class="form-control" name="isout">
									<option value="1">Available</option>
									<option value="0">Out</option>
								</select>
							</div>
							<br>
							<button type="submit" class='btn btn-primary' style="width: 200px; height:45px;" value='submit' name='submit_detail'>Add List Car</button>
						</div>
						<div class="col-md-8" >
							<div class="form-group">
								<label>Car List Description<span class="req-filled">*</span></label>
								<textarea class="form-control" rows="9" placeholder="Will be show on Home" name='description' required="">
								</textarea>		
							</div>
						</div>
					</div>
						
					<?php echo form_close();?>
				</div>
				<div class="panel-body">
					<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="false" data-show-toggle="false" data-show-columns="false" data-search="false" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
					    <thead>
					    <tr>
					        <th data-field="state" data-checkbox="true" >ID Car Package</th>
					        <th data-field="package" data-sortable="true">Car Number</th>
					        <th data-field="price"  data-sortable="true">Car Year</th>
					        <th data-field="priceper" data-sortable="true">Description</th>
					        <th data-field="discount" data-sortable="true">Status</th>
					        <th data-field="action" data-sortable="true">Action</th>
					    </tr>
					    <tbody>
					    <?php
					    	foreach ($cardetail as $key => $value) {
					    		echo '
					    		<tr>
					    			<td>'.$value['id_car_detail'].'</td>
							    	<td>'.$value['car_number'].'</td>
							    	<td>'.$value['car_year'].'</td>
							    	<td>'.$value['description'].'</td>
							    	<td>';
							    if($value['is_out']==1)
							    	echo 'Available';
							    else
							    	echo 'Out';
							    echo'</td>
							    	<td>
							    ';
						?>
							<a href="<?php echo base_url().'Admin/Product/deleteCarDetail/'.$id_car.'/'.$value['id_car_detail']?>" onclick="return confirm('Are you sure to delete?')"><svg class="glyph stroked trash action-small"><use xlink:href="#stroked-trash"/></svg></svg></a>
						<?php 
							    echo '
							    	</td>
							    </tr>
					    		';
					    	}
					    ?>
					    
					    </tbody>
					    </thead>
					</table>
				</div>
			</div>
		</div>
	</div><!--/.row-->	

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">Car Package</div>
				<div class="panel-body">
					<?php echo form_open('Admin/Product/insertCarPackage');?>
						<div class="col-md-12">
							<div class="form-group">
								<label>Package <span class="req-filled">*</span></label>
								<input type="hidden" name="id_car" value="<?php echo $id_car; ?>">
								<select class="form-control" name="id_package" required="">
								<option value="">Select Package</option>
								<?php
									foreach ($package as $key => $value) {
										echo "<option value='".$value["id_package"]."'>";
										echo $value['name_package'];
										echo "</option>";	
									}

								?>
								</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Price Per <span class="req-filled">*</span></label>
								<select class="form-control" name="price_per" required="">
									<option value="Hour">Hour</option>
									<option value="Day">Day</option>
									<option value="Month">Monthly</option>
									<option value="Year">Year</option>
								</select>
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Price <span class="req-filled">*</span></label>
								<input class="form-control" placeholder="Price" name="price" required="">
							</div>
						</div>
						<div class="col-md-4">
							<div class="form-group">
								<label>Discount </label>
								<input class="form-control" placeholder="Discount" name="discount" value="0">
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
							<label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
								<input type="submit" class="btn btn-info" value="Add Package" name="insertCarPackage">
							</div>
						</div>
					<?php echo form_close();?>
				</div>
				<div class="panel-body">
					<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="false" data-show-toggle="false" data-show-columns="false" data-search="false" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
					    <thead>
					    <tr>
					        <th data-field="state" data-checkbox="true" >ID Car Package</th>
					        <th data-field="package" data-sortable="true">Package</th>
					        <th data-field="price"  data-sortable="true">Price</th>
					        <th data-field="priceper" data-sortable="true">Price Per</th>
					        <th data-field="discount" data-sortable="true">Discount</th>
					        <th data-field="action" data-sortable="true">Action</th>
					    </tr>
					    <tbody>
					    <?php
					    	foreach ($carpackage as $key => $value) {
					    		echo '
					    		<tr>
					    			<td>'.$value['id_car_package'].'</td>
							    	<td>'.$value['name_package'].'</td>
							    	<td>'.$value['price'].'</td>
							    	<td>'.$value['price_per'].'</td>
							    	<td>'.$value['discount'].'</td>
							    	<td>
							    ';
						?>
							<a href="<?php echo base_url().'Admin/Product/deleteCarPackage/'.$id_car.'/'.$value['id_car_package']?>" onclick="return confirm('Are you sure to delete?')"><svg class="glyph stroked trash action-small"><use xlink:href="#stroked-trash"/></svg></svg></a>
						<?php 
							    echo '
							    	</td>
							    </tr>
					    		';
					    	}
					    ?>
					    
					    </tbody>
					    </thead>
					</table>
				</div>
			</div>
		</div>
	</div><!--/.row-->	
	<style type="text/css">
		
		
		.alertstyle{
			position: fixed;
			bottom: 0px;
			padding: 10px 30px 30px 20px;
			z-index: 999;

		}
		.contentalert h3,.contentalert p{
			color:#FFFFFF;
		}
		.remover,.contentalert{
			line-height: 40px;
			vertical-align: middle;
			top:10px;
		}
	</style>
		<div class='row'>
			
		
		<div class='alert-upload hidden alertstyle col-md-10 col-xs-12'>
			<div class='contentalert pull-left'>
				isi disini contentnya
			</div>
			<div class='pull-right'>
				<span class='glyphicon glyphicon-remove remover' style='cursor:pointer;' title='Delete'>
				</span>
			</div>
		</div>	
		</div>

</div>	<!--/.main-->	
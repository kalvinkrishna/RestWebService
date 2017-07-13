<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
			<li class="active">Product / Car Class</li>
		</ol>
	</div><!--/.row-->

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
				<div class="panel-heading">Add Car Class</div>
				<div class="panel-body" style="padding:20px 0px;">
					<?php echo form_open('Admin/Product/insertCarClass');?>
						<div class="col-md-10">
							<div class="form-group">
								<label>Car Class</label>
								<input class="form-control" placeholder="Car Class" name="car_class">
							</div>
						</div>
						<div class="col-md-2">
							<div class="form-group">
								<button value='submit' name='submitclass' class="btn btn-info " style="margin-top:25px; width: 100%;" >Submit</button>
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
				<div class="panel-heading">Car Classes List</div>
				<div class="panel-body">
					<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
					    <thead>
					    <tr>
					        <th data-field="state" data-checkbox="true" ></th>
					        <th data-field="id" data-sortable="true">Car Class</th>
					        <th data-field="action" data-sortable="true">Action</th>			
					    </tr>
					    </thead>
					    <tbody>
					    	 <?php 
								foreach ($class as $key => $value) {
									echo"
							    	<tr>
							    		<td>".$value["id_class"]."</td>
							    		<td>".$value['name_class']."</td>
							    		<td>";
									?>
										<a href="<?php echo base_url().'Admin/Product/deleteCarClass/'.$value['id_class']?>" onclick="return confirm('Are you sure to delete?')"><svg class="glyph stroked trash action-small"><use xlink:href="#stroked-trash"/></svg></svg></a>
									<?php 
									echo "
							    		</td>
							    	</tr>
							    	";
					    		}
					    	?>
					    </tbody>
					</table>
				</div>
			</div>
		</div>
	</div><!--/.row-->	

</div>	<!--/.main-->
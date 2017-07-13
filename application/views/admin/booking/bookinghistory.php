<div class="col-sm-9 col-sm-offset-3 col-lg-10 col-lg-offset-2 main">			
	<div class="row">
		<ol class="breadcrumb">
			<li><a href="#"><svg class="glyph stroked home"><use xlink:href="#stroked-home"></use></svg></a></li>
			<li class="active">History List</li>
		</ol>
	</div><!--/.row-->		

	<div class="row">
		<div class="col-lg-12">
			<div class="panel panel-default">
			<div class="panel-heading">History List</div>
				<div class="panel-body">
					<table data-toggle="table" data-url="tables/data1.json"  data-show-refresh="true" data-show-toggle="true" data-show-columns="true" data-search="true" data-select-item-name="toolbar1" data-pagination="true" data-sort-name="name" data-sort-order="desc">
					    <thead>
					    <tr>
					        <th data-field="id" data-checkbox="true" ></th>
					        <th data-field="name" data-sortable="true">Complete Name</th>
					        <th data-field="phone" data-sortable="true">Phone Number</th>
					        <th data-field="car" data-sortable="true">Car</th>
					        <th data-field="carnumber" data-sortable="true">Car Plate</th>
					        <th data-field="checkin" data-sortable="true">Check In</th>
					        <th data-field="checkout" data-sortable="true">Check Out</th>
					        <th data-field="status" data-sortable="true">Rent Status</th>
					        <th data-field="package" data-sortable="true">Package</th>
					        <th data-field="action" data-sortable="true">Action</th>
					    </tr>
					    </thead>
					    <tbody>
					    	 <?php 
								foreach ($booking as $key => $value) {
									echo"
							    	<tr>
							    		<td></td>
							    		<td>".$value['bname']."</td>
							    		<td>".$value['bphone']."</td>
							    		<td>".$value['name']."</td>
							    		<td>".$value['car_number']."</td>
							    		<td>".$value['vstartrental']."</td>
							    		<td>".$value['vreturnrental']."</td>
							    		<td>";
							    			
							    			switch ($value['book_status']) {
							    				case 'Take':
							    				echo "Belum Kembali";
							    					break;
							    				case 'Complete':
							    				echo "Complete";
							    				break;
							    				default:
							    					break;
							    			}
							    	echo"
							    		</td>
							    		<td>".$value['name_package']."</td>
							    		<td class='text-center'>

											<a href='".base_url().'Admin/Booking/detailhistory/'.$value["id_book"]."'><svg class='glyph stroked clipboard with paper action-small'><use xlink:href='#stroked-clipboard-with-paper'/></svg></a>
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
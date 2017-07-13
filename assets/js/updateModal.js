$(document).ready(function(){
	$("#myModal").on('show.bs.modal',function(e){
		var $modal = $(this),
		productId = e.relatedTarget.id;

		var $test = $modal.find('.myform').attr('action');
		$test = $test +"/"+productId;
		$modal.find('.myform').attr('action',$test);
		var baseurl = $modal.find('#baseUrl').val();
		//alert(baseurl);
		$.ajax({
			type: "POST",
			url: baseurl+'index.php/Admin/Product/update/product/',
			dataType: 'json',
			data : {productIds:productId},
			success:function(res){
				if(res){
					//alert(res[0].id_car);
					 var merk = "<label>Car Merk</label><input class='form-control' placeholder='Car Merk' name='car_merk' value='"+res[0].name+"'>"
					 $modal.find('.myform .modal-body').append(merk);
					 var tipe = "<label>Car Type</label><input class='form-control' placeholder='Car Type' name='car_type' value='"+res[0].name_type+"'>"
					 $modal.find('.myform .modal-body').append(tipe);
					 var seat = "<label>Seat</label><input class='form-control' placeholder='Car seat' name='car_seat' value='"+res[0].seat_capacity+"'>"
					 $modal.find('.myform .modal-body').append(seat);
					 var fuel = "<label>Fuel</label><input class='form-control' placeholder='Car fuel' name='car_fuel' value='"+res[0].fuel+"'>"
					 $modal.find('.myform .modal-body').append(fuel);
					 var tank = "<label>tank</label><input class='form-control' placeholder='Car tank' name='car_tank' value='"+res[0].tank_capacity+"'>"
					 $modal.find('.myform .modal-body').append(tank);
					 var plate = "<label>Car Plate</label><input class='form-control' placeholder='Car Plate' name='car_plate' value='"+res[0].plate+"'>"
					 $modal.find('.myform .modal-body').append(plate);
					
				}	
				else{
					alert("gagal");
				}
			}
		});
		
	});
});
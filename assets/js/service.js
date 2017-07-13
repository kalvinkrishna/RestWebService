$(document).ready(function(){

	$.ajax(
		{
			 method:"GET",
			 url : "http://moviecloud.ga/webservice/apiservice/Userbookdata/lastbook",
			 datatype:'json',
			 success:function(respone){
			 	//alert(respone[0].idbook);
			 	var data_size = (respone).length;
			 	$('.no-records-found').hide();
			 	for($i=0;$i<data_size;$i++){
				 	$("#table-body-service").append(
				 		'<tr>'+
				 			'<td>'+respone[$i].idbook+'</td>'+
				 			'<td>'+respone[$i].pelanggan+'</td>'+
				 			'<td>'+respone[$i].alamat+'</td>'+
				 		'</tr>'
				 	);
			 	}
			 }

		}
	);	
});
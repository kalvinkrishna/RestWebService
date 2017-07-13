$(document).ready(function(){
	var string ="";
	var base_url = $('.base_url').html();

	$("input[type='text'].tt-input").focusout(function(){
		$("#containerSearch").slideUp();
	});
	//data dari db disave ke array dulu baru bisa focusin
	// $("input[type='text'].tt-input").focusin(function(){
	// 	$("#containerSearch").slideDown();
	// });

	$(document).on("click","#containerSearch .caritem",function(){
		//$("#containerSearch").slideUp();
		//alert($(this).find(".carname").html());
		$('.tt-input').val($(this).find(".carname").html());
		//alert($(this).find(".carhid").html());
		$value=$(this).find(".carhid").html();
		$('.bookingproduct').attr("action",'product/detail/'+$value);
	});


	$("input[type='text'].tt-input").keyup(function(event) {
		//hapus code
		if(event.keyCode==8 && string.length>0){
			if($(this).val()==''){
				string="";
				$("#containerSearch").hide();
			}
			if(string.length<=1){
				string="";
			}
			string = string.substring(0,string.length-1);
			//alert(string);
		}
		else
			string += String.fromCharCode(event.which);
		

		if($(this).val()!=''){

			var formsData = new FormData();
			formsData.append('typingdata',string);
			//paste Ajax Here
			$.ajax({
				 method:"POST",
			     url:base_url+"product/findProduct",
			     contentType: false,
	             processData: false,
	             datatype:'json',
	             data:formsData,
	             success:function(datas){
	             	var data = jQuery.parseJSON(datas);
	             	console.dir(data);
	             	
	             //var lengths =Object.keys(data).length;
				//alert(Object.keys(data));
				$("#containerSearch").html("");
				for(var i in data.cars){
					$html = ""+
	             	"<div class='row caritem'>"+

	             		"<div class='col-md-6 col-md-offset-1'>"+
								"<span class='carname'>"+data.cars[i]['nama_mobil']+"</span>"+
								"<span class='carhid hidden'>"+data.cars[i]['id']+"</span>"+
									"<br>"+
								"<span class='carprice'> Rp."+
								data.cars[i]['price']+
								"</span>"+
						"</div>"+
						"<img class='imageassearch pull-right' src='"+base_url+"/assets/images/cars/"+data.image[i][Math.floor((Math.random()*data.image.length)+1)]['src']+"' alt='' >"+
					"</div>";

					$("#containerSearch").append($html);
				}
				// $x = 0;
				// for(var i in data.image){
				// 	$html = ""+data.image[i][0]['src']+"<br>";
				// 	$("#containerSearch").append($html);
				// }

				$("#containerSearch").slideDown( "slow" );

	            }
			});
		}

	});
});

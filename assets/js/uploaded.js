$(document).ready(function(){
	 var bodo=[];
	   var x,count=0;


	$('#button-Upload').on('click',function(){
		$('#uploadTrigger').trigger("click");
	});

	$('.remover').on('click',function(){
		$(this).parent().parent().addClass('hidden');
	});

	$("#uploadTrigger").on("change",function(){ 
    //readURL(this,$(this).attr("data-ids"));
    //var reader = new FileReader();
	    $app=
	    $("<div class='col-md-4' style='min-height:200px; margin-top:20px;'><img src='' class='image-responsive col-md-12' data-et='' class='new'></img><span class='glyphicon glyphicon-remove remove' style='position:absolute; right:0px; top:0px; cursor:pointer;' title='Delete'></span></div>");
	    $(".image-preview").append($app);
	    $path="Admin/Product/uploadCarImage";
	    reader(this,$app,$path);
  	});


	$('#button-Uploadprofile').on('click',function(){
		$('#uploadTriggerprofile').trigger("click");
	});


  	$("#uploadTriggerprofile").on("change",function(){ 
    //readURL(this,$(this).attr("data-ids"));
    //var reader = new FileReader();
	    $app=
	   $("<div class='col-md-4' style='min-height:200px; margin-top:20px;'><img src='' class='image-responsive col-md-12' data-et='' class='new'></img></div>");
	    $(".image-preview").replaceWith($app);
	    $path="Admin/Product/uploadPictureProfile";
	    reader(this,$app,$path);
  	});



	function reader(input,obj,pathe){
    
	    if(input.files&& input.files[0]){
	      bodo[x]=input.files[0]; 
	     // alert(bodo[x]);  
	      var reader=new FileReader();
	      reader.onload=function(e){
	        obj.children().attr("src",e.target.result);
	        obj.children().attr("data-et",x++);
	      }
	      $('.car_ids').html(input.files[0]);
	      count++;
	       var formsData = new FormData();
	       var base_url = $('.base_url').html();
		   var imagePath = base_url+"/assets/images";
		   var paths=pathe;
		   formsData.append('imagePath',imagePath);
		   formsData.append('GaleryFoto',true);
		   formsData.append('ID',$('.car_ids').attr("data-et"));
		   //kirimkan data Filenya ke array FormsData dan masuk ke controller Product/UploadCarImage
		   formsData.append('image',input.files[0]);
		   //alert(paths); //nama path
	       $.ajax({
		        method:"POST",
		        url:base_url+paths,
		        contentType: false,
                processData: false,
                datatype:'json',
		        data:formsData,
		        success:function(data){
		        	//alert(data);
		          var obj = jQuery.parseJSON(data);
					
		          //ngasilin view eror ketika ajax return result['trigger'] 
		          //belum bisa ngelempar object json_encodenya
		          if(obj.error){
		          	//alert(obj.error);
		          	$notif = $(".alert-upload");
		          	$notifcontent = $(".contentalert");
			        $hasil = "<h3>"+obj.error+"</h3>"
			        $notifcontent.html($hasil);
			        $notif.addClass('btn-warning');
			        $notif.removeClass('hidden');
		          }
		          if(obj.success){
		          	$notif = $(".alert-upload");
		          	$notifcontent = $(".contentalert");
			        $hasil = "<h3>"+obj.success.src+" behasil ditambahkan</h3>"
			        $notifcontent.html($hasil);
			        $notif.addClass('btn-success');
			        $notif.removeClass('hidden');
		          }
		        } 
      		});
	      reader.readAsDataURL(input.files[0]);
	      $countingHTML = count+"/"+count+"  image successfully uploaded";
	      $('.image-count').html($countingHTML);
	    }
  }
});
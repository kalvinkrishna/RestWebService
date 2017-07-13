<div class="personalinfo-container">
  <div class="container">
    <div class="col-md-12 booking-step-container">
      <div class="col-md-6">
        <h3 class="container-title search-result-title">Vehicle Information</h3>
      </div>
      <div class="col-md-6 pull-right booking-step">
        <ol class="breadcrumb pull-right">
          <li class="breadcrumb-item"><span class="badge">1</span> Personal Information</li>
          <li class="breadcrumb-item active"><span class="badge">2</span> Vehicle</li>
          <li class="breadcrumb-item"><span class="badge">3</span> Review</li>
        </ol>
      </div>
    </div>
    <div class="col-md-12 personal-info-form">
      <div class="col-md-8">
        <form class="form-order-detail" action="<?php echo base_url() ?>product/bookingconfirmation" method="post" style="margin-top:0px;">

          <select class="form-control" id="sel1" name='vtype' hidden="">
            <?php
              foreach ($class as $key => $value) {
                if($value['id_class']==$productdetail[0]['id_class'])
                  echo "<option value='".$value["id_class"]."' selected>";
                else
                   echo "<option value='".$value["id_class"]."'>";
                echo $value['name_class'];
                echo "</option>";
              }

            ?>
          </select>

          <select class="form-control" id="sel2" name='vmerk' hidden="">
              <?php
                foreach ($productc as $key => $value) {
                  if($value["id_car"]==$productdetail[0]['id_car'])
                    echo "<option value='".$value["id_car"]."' selected>";
                  else
                    echo "<option value='".$value["id_car"]."'>";
                  echo $value["name"];
                  echo "</option>";
                }
              ?>
            </select>
          <script type="text/javascript">
            
              //do Ajax vehicle type disini panggil method findMerk di Controller Product.

          </script>
          <!-- <div class="col-md-4"> 
            <div class="form-group">
              <label for="end_time">Quantity</label>
              <input class="date form-control" type="number" name='vquantity' required="">
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="sel3">With Driver</label>
              <select class="form-control" id="sel3" name='vdriver'>
                <option value="1">Yes</option>
                <option value="0">No</option>
              </select>
            </div>
          </div>
          <div class="col-md-4">
            <div class="form-group">
              <label for="sel4">With Insurance</label>
              <select class="form-control" id="sel4" name='vinsurance' >
                <option value="1">Yes</option>
                <option value="0">No</option>
              </select>
            </div>
          </div>-->
          <div class="col-md-6">
            <div class="form-group">
              <label for="end_time">Date Of Rental</label>
              <input class="form-control" id="check-in" type="text" value="19/10/2015" name='vdateRentalstart' readonly="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="end_time">Date Of Return</label>
              <input class="form-control" id="check-out" type="text" value="19/10/2015" name='vdateRentalReturn' readonly="">
            </div>
          </div>
          <link rel="stylesheet" href="<?php echo base_url();?>assets/css/datepicker.css" />
          <script src="<?php echo base_url();?>assets/js/bootstrap-datepicker.js"></script>
            <script>
                $(function() {
                $( "#datepicker,#datepicker1" ).datepicker();
                });

                $(document).ready(function(){
                    $('.delivery').on('change',function(){
                        if($(this).val()=='0'){
                          $('.deliveryaddress').addClass('hidden');
                          $('.deliveryaddress textarea').val(null);
                        }
                        else{
                           $('.deliveryaddress').removeClass('hidden');
                        }
                    });
                });
            </script>
          <div class="col-md-12">
            <div class="form-group">
              <label for="sel5">Delivery</label>
              <select class="form-control delivery" id="sel5" name='vdelivery'>
                <option value="1">Yes</option>
                <option value="0">No</option>
              </select>
            </div>
          </div>
          <div class="col-md-12 deliveryaddress">
            <div class="form-group">
              <label for="end_time">Address of Delivery</label>
              <textarea class="date form-control" type="text"  rows="3" name='vaddressdelivery'></textarea>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="end_time">Special Request</label>
              <textarea class="date form-control" type="text"  rows="3" name='vspesicialrequest' required=""></textarea>
            </div>
          </div>
          <div class="col-md-12">
            <a href="bookingconfirmation">
               <button type="submit" class="btn btn-success pull-right">Next</button>
            </a>
          </div>
        </form>
      </div>
      <div class="col-md-4" style="padding-top:25px;">
        <div class="panel panel-default">
          <div class="panel-body">
              <div class="col-md-4">
                <img class="thumb img-rounded" src="<?php echo base_url() ?>assets/images/cars/<?php echo $productimages[0]['src'];?>" alt="">
              </div>
              <div class="col-md-8">
                <p><strong><?php print_r($productdetail[0]['name']);?></strong></p>
                <small>Driver: <strong>NO</strong></small>
                <small>Tax Included: <strong>YES</strong></small>
              </div>
              <div class="col-md-12 price-info" style="margin-top:10px;">
                <h3 class="price">Rp <?php print_r(number_format($package[0]['price'], 0 ,'', '.' ));?> 
                <small>
                / <?php
                  switch($package[0]['price_per']){
                    case "Hour":
                      if($package[0]['name_package']=="Full Day tour")
                        echo "8 ";
                      echo "hours"; break;
                    case "Day":
                     echo "day"; break;
                    case "Month":
                     echo "month"; break;
                    default:
                     echo "";
                  }
        
                ?>  
                </small>

                </h3>
              </div>
          </div>
          <div class="panel-footer">Package: <strong><?php print_r($package[0]['name_package']);?></strong></div>
        </div>
      </div>
    </div>
  </div>
</div>

<script type="text/javascript">
  $(document).ready(function () {
    var checkin = localStorage.getItem("check-in");
    var checkout = localStorage.getItem("check-out");

    $('#check-in').val(checkin);
    $('#check-out').val(checkout);
  });
</script>

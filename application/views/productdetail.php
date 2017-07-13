<!-- portfolio -->
	<div id="portfolio" class="order-top-container">
		<div class="container">
			<div class="top-container">
			  <div class="col-md-12 top-container-inner">
			    <div class="col-md-12 order-detail-form">
              <h4 class="form-title">Rent <?php echo $productdetail[0]["name"];?> Now!</h4>
              <form class="form-order-detail" action="index.html" method="post">
                <div class="col-md-4" style="padding-right: 0px;">
                  <div class="form-group">
                    <label for="start_time">Check In</label>
                    <input class="date form-control height-45" id="check-in" type="text" placeholder="<?php echo date("d/m/Y"); ?>" required="">
                  </div>
                </div>
                <div class="col-md-4" style="padding-right: 0px;">
                  <div class="form-group">
                    <label for="end_time">Check Out</label>
                    <input class="date form-control height-45" id="check-out" type="text" placeholder="<?php echo date("d/m/Y"); ?>" required="">
                  </div>
                </div>
                <div class="col-md-2">
                 <label for="end_time"> </label>
                  <button type="submit" class="btn btn-success height-45" style="width: 100%;">Check Now!</button>
                </div>
              </form>

							<script>
									$(function() {
										$('#check-in').datetimepicker({
											minDate: moment()
										});
										$('#check-out').datetimepicker({
												useCurrent: false //Important! See issue #1075
										});
										$("#check-in").on("dp.change", function (e) {
												$('#check-out').data("DateTimePicker").minDate(e.date);
										});
										$("#check-out").on("dp.change", function (e) {
												$('#check-in').data("DateTimePicker").maxDate(e.date);
										});
									});
							</script>
            <!---/End-date-piker---->
			    </div>
			  </div>
			</div>
		</div>
	</div>

  <div class="info-container">
    <div class="container">
      <div class="col-md-12">
        <h3 class="container-title">Info <?php echo $productdetail[0]["name"];?></h3>
        <?php
          //print_r($productimages);
        ?>
        <div class="col-md-8 gallery-box">
          <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ol class="carousel-indicators">
              <?php
                  $x=0;
                  foreach ($productimages as $key => $value) {
                    # code...
                    if($x=0){
                      echo '<li data-target="#carousel-example-generic" data-slide-to="'.$x.'" class="active"></li>';
                    }
                    else{
                      echo '<li data-target="#carousel-example-generic" data-slide-to="'.$x.'"></li>';
                    }
                    $x++;
                  }
              ?>
            </ol>

            <!-- Wrapper for slides -->
            <div class="carousel-inner" role="listbox">

              <?php
                  $y=0;
                  foreach ($productimages as $key => $value) {
                    # code...
                    if($y==0){
                        echo '
                            <div class="item active">
                              <img src="'.base_url().'assets/images/cars/'.$value['src'].'" alt="...">
                              <div class="carousel-caption">
                              </div>
                            </div>
                        ';
                    }
                    else{
                        echo '
                            <div class="item">
                              <img src="'.base_url().'assets/images/cars/'.$value['src'].'" alt="...">
                              <div class="carousel-caption">
                              </div>
                            </div>
                        ';
                    }
                    $y++;
                  }

              ?>

            </div>

            <!-- Controls -->
            <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
              <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
              <span class="sr-only">Previous</span>
            </a>
            <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
              <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
              <span class="sr-only">Next</span>
            </a>
          </div>
        </div>

        <div class="col-md-4 info-box">
          <?php
              $fasilitas = [];
              foreach ($productdetail as $struct) {
                  
                  for($x=0;$x<5;$x++){
                    $a = $x+1;
                    $a = "$a";
                     if($struct["facility_"."$a"]!=""){
                        $fasilitas[$x] = $struct["facility_"."$a"];
                     }
                  }
              }
          ?>

          <h5><b>Facilities</b></h5>
          
          <?php
            foreach ($fasilitas as $key) {
              # code...
              echo ' <p><i class="fa fa-hand-o-right" aria-hidden="true"></i> '.$key.' (<b>Yes</b>)</p>';
            }
          ?>

          <br>
          <h5><b>Capacity</b></h5>
          <hr>
          <br>
          <table class="table-info" width="100%">
            <tr>
              <td><p>Seat</p></td>
              <td><p>: 1 Driver + <?php echo intval($productdetail[0]["seat_capacity"])-1; ?> passanger</p></td>
            </tr>
            <tr>
              <td><p>Tank</p></td>
              <td><p>: <?php echo $productdetail[0]["tank_capacity"]; ?> Liter</p></td>
            </tr>
            <tr>
              <td><p>Fuel</p></td>
              <td><p>: <?php echo $productdetail[0]["fuel"]; ?></p></td>
            </tr>
          </table>
        </div>
      </div>
    </div>
  </div>

  <div class="package-container">
    <div class="container">
      <h3 class="container-title">All Package Of <?php echo $productdetail[0]["name"]?></h3>
      <?php
          // print_r($package);
          foreach ($package as $key => $value) {    
      ?>
      <div class="col-md-12 package-item">
          <div class="col-md-2">
            <img src="<?php echo base_url() ?>assets/images/cars/<?php echo $productimages[rand(0,$y-1)]['src'];?>" alt="">
          </div>

          <div class="col-md-4 package-info">
            <h5><?php echo $value['name_package'];?></h5>
            <span><?php echo $value['description'];?></span>
            <p><span class="fa fa-user" aria-hidden="true"></span> &nbsp;Max. <?php echo intval($productdetail[0]["seat_capacity"])?> Passanger, &nbsp;
              <span class="fa fa-user" aria-hidden="true"></span> &nbsp;Max. 2 Cabin </p>
          </div>


          <div class="col-md-3 price-info">
            <span><a href="#">Price Including Tax</a></span>
            <h3 class="price">Rp <?php echo number_format($value['price'], 0 ,'', '.' );?></h3>
            <span>/ 
            <?php 
              switch($value['price_per']){
                case "Hour":
                  if($value['name_package']=="Full Day tour")
                    echo "8 ";
                  echo "hours"; break;
                case "Days":
                 echo "day"; break;
                case "Month":
                 echo "month"; break;
                default:
                 echo "day";
              }
            ?>
            </span>
            
            <?php
                if($value['name_package']=="Full Day tour"){
                  echo '<br><span class="price">extra hour: Rp 20.000/hour</span>';
                }
            ?>

          </div>
          <div class="col-md-3 price-info">
           
            <form action="<?php echo base_url();?>product/personalinfo" method="post" accept-charset="utf-8">
        
                <input type="text" name="ipackage" value="<?php echo $value["id_package"];?>" placeholder="" class='hidden'>
                <input type="text" name="icar" value="<?php echo $value["id_car"];?>" placeholder="" class='hidden'>
                <button type="submit" name="button" class="btn btn-md btn-danger">Order Now!</button>
            </form>
            
          </div>
      </div>
      <?php
            };
      ?>
    </div>
  </div>

  <div class="container-extra-info">
    <div class="container">
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#menu1">Information</a></li>
        <li><a data-toggle="tab" href="#menu2">Term &amp; Condition</a></li>
      </ul>

      <div class="tab-content">
        <div id="menu1" class="tab-pane fade in active tab-extra">
          <p>
            <?php echo $productdetail[0]["description"];?>
          </p>
         
        </div>
        <div id="menu2" class="tab-pane fade tab-extra">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
    </div>
  </div>
  <br><br>
<!-- //portfolio -->
<script type="text/javascript">
  $(document).ready(function () {
    var checkin = localStorage.getItem("check-in");
    var checkout = localStorage.getItem("check-out");

    $('#check-in').val(checkin);
    $('#check-out').val(checkout);
  });
</script>
<div class="personalinfo-container">
  <div class="container">
    <div class="col-md-12 booking-step-container">
      <div class="col-md-6">
        <h3 class="container-title search-result-title">Personal Information</h3>
      </div>
      <div class="col-md-6 pull-right booking-step">
        <ol class="breadcrumb pull-right">
          <li class="breadcrumb-item active"><span class="badge">1</span> Personal Information</li>
          <li class="breadcrumb-item"><span class="badge">2</span> Vehicle</li>
          <li class="breadcrumb-item"><span class="badge">3</span> Review</li>
        </ol>
      </div>
    </div>
    <div class="col-md-12 personal-info-form">
      <div class="col-md-8">
        <form class="form-order-detail" action="<?php echo base_url() ?>product/vehicle" method="post" style="margin-top:0px;">
          <div class="col-md-12">
            <div class="form-group">
              <label for="location">Complete Name</label>
              <input type="text" class="form-control" id="location" placeholder="Complete Name" name='bname' required="">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="start_time">Phone Number</label>
              <input class="date form-control" type="text" required="" placeholder="+62xxxxxxx" name='bphone'>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="end_time">Email</label>
              <input class="date form-control" type="email" required="" placeholder="xxxx@baliradianceinternational.com" name='bemail'>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="end_time">Permanent Residence</label>
              <textarea class="date form-control" type="text" required="" rows="3" name='bresidance'></textarea>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="end_time">License Number</label>
              <input class="date form-control" type="text" required="" name="blicense">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="end_time">Nation</label>
              <input class="date form-control" type="text" required="" name="bnation">
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="end_time">Passport Number</label>
              <input class="date form-control" type="text" required="" name="bpassport">
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="end_time">City</label>
              <input class="date form-control" type="text" required="" name='bcity'>
            </div>
          </div>
          <div class="col-md-6">
            <div class="form-group">
              <label for="sel1">Country</label>
              <select class="form-control" id="sel1" name='bcountry'>
                <option value="1">Aaland Island</option>
                <option value="2">Afganishtan</option>
                <option value="3">Algeria</option>
                <option value="4">Albania</option>
                <option value="5">Andora</option>
                <option value="6">Angola</option>
              </select>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="end_time">Company Name</label>
              <input class="date form-control" type="text" required="" name='bcompany'>
            </div>
          </div>
          <div class="col-md-12">
            <div class="form-group">
              <label for="end_time">Local Residence</label>
              <textarea class="date form-control" type="text" required="" rows="3" name='baddress'></textarea>
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-success pull-right">Next</button>
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
                    case "Days":
                     echo "day"; break;
                    case "Month":
                     echo "month"; break;
                    default:
                     echo "day";
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

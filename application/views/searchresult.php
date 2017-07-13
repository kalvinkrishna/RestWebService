<!-- portfolio -->


  <div class="package-container" style="margin-top:30px">
    <div class="container">
      <div class="col-md-12" style="padding:0px;">
        <div class="col-md-8"style="padding:0px;">
          <h3 class="container-title search-result-title">Semua Paket All New Toyota Avanza</h3>
          <p class="search-result-info">Pickup Time: Sabtu, 20 Mei 2017 | Checkout Time: Minggu, 21 Mei 2017</p>
        </div>
        <div class="col-md-4 price-info" style="padding:0px;">
          <button type="button" name="button" class="btn btn-md btn-primary" data-toggle="collapse" data-target="#colapse-form">Ganti Pencarian</button>
        </div>
      </div>
      <div class="col-md-12 collapse search-form-collapse" id="colapse-form">
        <form class="form-order-detail" action="index.html" method="post" style="margin-top:0px;">
          <div class="col-md-12">
            <div class="form-group">
              <label for="location">Lokasi Penjemputan</label>
              <input type="text" class="form-control" id="location" value="Terminal Domestik Bandara Internasional I Gusti Ngurah Rai">
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="start_time">Waktu Jemput</label>
              <input class="date form-control" id="check-in" type="text" placeholder="<?php echo date("d/m/Y"); ?>" required="">
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="end_time">Waktu Selesai</label>
              <input class="date form-control" id="check-out" type="text" placeholder="<?php echo date("d/m/Y"); ?>" required="">
            </div>
          </div>
          <div class="col-md-3">
            <div class="form-group">
              <label for="periode">Lama Sewa</label>
              <input type="text" class="form-control" id="periode" value="1 hari">
            </div>
          </div>
          <link rel="stylesheet" href="<?php echo base_url();?>assets/css/datepicker.css" />

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
                    calculateDateDiff();
                });
                $("#check-out").on("dp.change", function (e) {
                    $('#check-in').data("DateTimePicker").maxDate(e.date);
                    calculateDateDiff();
                });

                function calculateDateDiff() {
                  var date1 = $('#check-in').data("DateTimePicker").date();
                  var date2 = $('#check-out').data("DateTimePicker").date();
                  var diffDays = parseInt((date2 - date1) / (1000 * 60 * 60 * 24));
                  if (diffDays < 1)
                    diffDays = 1;
                  $('#periode').val(diffDays + " hari");
                }
              });
          </script>
          <div class="col-md-3">
            <div class="form-group">
              <label for="sel1">Jumlah Mobil</label>
              <select class="form-control" id="sel1">
                <option value="1">1</option>
                <option value="1">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
          </div>
          <div class="col-md-12">
            <button type="submit" class="btn btn-success pull-right">Cari Sekarang</button>
          </div>
        </form>
      </div>

      <?php foreach ($packages as $package) {?>
        <div class="col-md-12 package-item search-result-item">
            <div class="col-md-2">
              <img src="<?php echo base_url() ?>/assets/images/car-rental-toyota-all-new-avanza.png" alt="">
            </div>
            <div class="col-md-4 package-info">
              <h5><?php echo $package['name_package'] ?></h5>
              <span><?php echo $package['description'] ?></span>
              <br>
              <br>
              <p><span class="fa fa-user" aria-hidden="true"></span> &nbsp;Max. <?php echo $package['seat_capacity'] ?> Penumpang
            </div>
            <div class="col-md-3 price-info">
              <span><a href="#">Harga sudah termasuk pajak</a></span>
              <h3 class="price"><?php echo "Rp " . number_format(intval($package['price']),2,',','.'); ?></h3>
              <span>/<?php echo $package['price_per'] ?></span>
            </div>
            <div class="col-md-3 price-info">
              <a type="button" name="button" class="btn btn-md btn-danger"
              href="<?php echo base_url() ?>product/personalinfo">Pesan</a>
            </div>
        </div>
      <?php } ?>
    </div>
  </div>

  <div class="container-extra-info">
    <div class="container">
      <ul class="nav nav-tabs">
        <li class="active"><a data-toggle="tab" href="#menu1">Keterangan</a></li>
        <li><a data-toggle="tab" href="#menu2">Syarat &amp; Ketentuan</a></li>
      </ul>

      <div class="tab-content">
        <div id="menu1" class="tab-pane fade in active tab-extra">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div id="menu2" class="tab-pane fade tab-extra">
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>
    </div>
  </div>
<!-- //portfolio -->

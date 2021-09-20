<!-- Main content -->
<div class="content-wrapper">
  <br><br><br>
  <!-- Content area -->
  <div class="content">

    <!-- Dashboard content -->
    <div class="row">
      <div class="panel panel-flat">

          <div class="panel-body">
            <fieldset class="content-group">
              <legend class="text-bold">Input Data Terapi Obat</legend>
              <script>
		       var baseurl = "<?php echo base_url("index.php/"); ?>"; // Buat variabel baseurl untuk nanti di akses pada file config.js
               </script>
               <script src="<?php echo base_url("js/jquery.min.js"); ?>"></script> <!-- Load library jquery -->
               <script src="<?php echo base_url("js/config_obat_kia.js"); ?>"></script> <!-- Load file process.js -->
               
              <?php
              echo $this->session->flashdata('msg');
              ?>
            <form class="form-horizontal" action="" method="post">
              <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Kode Pasien</label>
                    <div class="col-lg-8">
                      <input type="search" name="kd_pasien" class="" id="kd_pasien" required maxlength="20"  placeholder="Tuliskan kode pasien"> <button type="button" id="btn-search">Cari</button> <span id="loading">LOADING...</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Id Terapi Obat</label>
                    <div class="col-lg-8">
                      <input type="text" name="id_terapi_obat" class="form-control" value="<?=$terapi_obat; ?>" maxlength="13">
                    </div>
                  </div>
                </div>
                </div>
  
              
               <div class="col-md-12">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label col-lg-2">Nama Lengkap</label>
                    <div class="col-lg-10">
                      <input type="text" name="nm_lengkap" class="form-control" id="nama" required maxlength="100">
                    </div>
                  </div>
                </div>
                </div>


            
              <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">No ibu</label>
                    <div class="col-lg-8">
                     <input type="text" name="ibu" class="form-control" id="ibu" required maxlength="15">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Tanggal Masuk</label>
                    <div class="col-lg-8 form-group">
                      <input type="text" name="tgl" class="form-control " id="tgl"  maxlength="15">
                    </div>
                  </div>
                </div>
               </div>
               
                <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Jumlah Obat</label>
                    <div class="col-lg-8 form-group">
                      <input type="text" name="jumlah" class="form-control" value=""  maxlength="15">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Id Poli Kia</label>
                    <div class="col-lg-8">
                      <input type="text" name="id_poli_kia" class="form-control" id="id_poli_kia" required maxlength="15">
                    </div>
                  </div>
                </div>
              </div>
              
              
              <br>
              <hr>
              <a href="poli_kia" class="btn btn-default">Beranda</a>
              <button type="submit" name="btnsimpan" class="btn btn-success" style="float:right;">Simpan</button>
             </div>
            </form>
            </fieldset>

          </div>

      </div>
    </div>
    <!-- /dashboard content -->
	
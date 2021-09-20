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
              <legend class="text-bold">Input Pemeriksaan Neonatus (6 Jam - 28 Hari)</legend>
              <script>
		       var baseurl = "<?php echo base_url("index.php/"); ?>"; // Buat variabel baseurl untuk nanti di akses pada file config.js
               </script>
               <script src="<?php echo base_url("js/config_karu_bayi.js"); ?>"></script> <!-- Load file process.js -->
               
              <?php
              echo $this->session->flashdata('msg');
              ?>
            <form class="form-horizontal" action="" method="post">
              <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">NO Bayi</label>
                    <div class="col-lg-8">
                      <input type="search" name="no_bayi" class="" id="no_bayi" placeholder="No Bayi"> <button type="button" id="btn-search">Cari</button> <span id="loading">LOADING...</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Id Neonatus</label>
                    <div class="col-lg-8">
                      <input type="text" name="id_neonatus" class="form-control" value="<?=$neo; ?>" maxlength="13">
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
                    <label class="control-label col-lg-4">Tanggal</label>
                    <div class="col-lg-8">
                     <input type="text" name="tgl" class="form-control daterange-single" required maxlength="15">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Jenis Kelamin</label>
                    <div class="col-lg-8">
                     <input type="text" name="j_kelamin" class="form-control" id="jenis" required maxlength="15">
                    </div>
                  </div>
                </div>
               </div>
               
                <div class="col-md-12">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label col-lg-2">Alamat</label>
                    <div class="col-lg-10">
                      <textarea name="alamat" class="form-control" id="alamat" rows="2" cols="20" required></textarea>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">No BPJS</label>
                    <div class="col-lg-8">
                      <input type="text" name="no_bpjs" class="form-control" id="bpjs" requird maxlength="15">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Umur</label>
                    <div class="col-lg-8">
                     <input type="text" name="umur" class="form-control" requird maxlength="15">
                    </div>
                  </div>
                </div>
               </div>
               
               <div class="col-md-12">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label col-lg-2">KN</label>
                    <div class="col-lg-10">
                     <textarea name="kn" class="form-control" id="" rows="2" cols="20" required></textarea>
                    </div>
                  </div>
                </div>
               </div>
               
                <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Nakes</label>
                    <div class="col-lg-8">
                      <select class="form-control" name="nakes">
                      <option value="">  ----  </option>
                      <option value="Dokter">Dokter</option>
                      <option value="Bidan">Bidan</option>
                      <option value="Perawat">Perawat</option>
                      </select>
                    </div>
                  </div>
                </div>
                 <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Asi Eksklusif</label>
                    <div class="col-lg-8">
                     <select class="form-control" name="ae">
                      <option value="">  ----  </option>
                      <option value="Ya">Ya</option>
                      <option value="Tidak">Tidak</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Pencegahan</label>
                    <div class="col-lg-8">
                       <select class="form-control" name="pencegahan">
                       <option value="">  ---  </option>
                       <option value="Vit K1">Vit K1</option>
                       <option value="Hep. B">Hep. B</option>
                       <option value="BCG">BCG</option>
                       <option value="Lain-lain">Lain-lain</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Integrasi Program</label> 
                    <div class="col-lg-8">
                      <select class="form-control" name="ip">
                       <option value="">  ---  </option>
                       <option value="Kontrimoksasol Profilaksis">Kontrimoksasol Profilaksis</option>
                       <option value="Pemberian Susu Formula">Pemberian Susu Formula</option>
                       </select>
                    </div>
                  </div>
                </div>
               </div>
              
              <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Diagnosis</label>
                    <div class="col-lg-8">
                        <select class="form-control" name="diagnosis">
                       <option value="">  ---  </option>
                       <option value="Pneumoni">Pneumoni</option>
                       <option value="Hipotermi">Hipotermi</option>
                       <option value="Ikterus">Ikterus</option>
                       <option value="Tetanus">Tetanus</option>
                       <option value="Infeksi">Infeksi</option>
                       <option value="Diare">Diare</option>
                       <option value="Hematologi">Hematologi</option>
                       <option value="Lain-lain">Lain-lain</option>
                       </select>
                    </div>
                  </div>
                </div>
                 <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Klasifikasi MTBM</label>
                    <div class="col-lg-8">
                      <select class="form-control" name="km">
                       <option value="">  ---  </option>
                       <option value="KPSB/IB">KPSB/IB</option>
                       <option value="KBBR &/MP. ASI">KBBR &/MP. ASI</option>
                       <option value="Tidak Ditemukan">Tidak Ditemukan</option>
                       <option value="Diare">Diare</option>
                       <option value="Ikterus">Ikterus</option>
                       <option value="Tidak Diperiksa">Tidak Diperiksa</option>
                       </select>
                    </div>
                  </div>
                </div>
               </div>
               
               <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Keadaan Pulang</label>
                    <div class="col-lg-8">
                      <select class="form-control" name="k_pulang">
                      <option value="">  ----  </option>
                      <option value="Hidup">Hidup</option>
                      <option value="Mati">Mati</option>
                      <option value="Dirujuk">Dirujuk</option>
                      </select>
                    </div>
                  </div>
                </div>
               <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Dirujuk Ke</label>
                    <div class="col-lg-8">
                      <select class="form-control" name="dirujuk">
                      <option value="">  ----   </option>
                      <option value="Puskesmas">Puskesmas</option>
                      <option value="RSIA/RSB">RSIA/RSB</option>
                      <option value="Rumah Sakit">Rumah Sakit</option>
                      </select>
                    </div>
                  </div>
                </div>
               </div>
           
               
              <br>
              <hr>
              <a href="poli_mtbs" class="btn btn-default">Beranda</a>
              <button type="submit" name="btnsimpan" class="btn btn-success" style="float:right;">Simpan</button>
              <a href="Poli_mtbs/data_pemeriksaan_neonatus" class="btn btn-primary" style="float:right;margin-right:10px;">
                Tabel Data Pemeriksaan Neonatus
              </a>
            </form>
            </fieldset>

          </div>

      </div>
    </div>
    <!-- /dashboard content -->

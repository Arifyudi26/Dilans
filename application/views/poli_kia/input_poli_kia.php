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
              <legend class="text-bold">Input Data Poli KIA</legend>
              <script src="<?php echo base_url("js/config_poli_kia.js"); ?>"></script> <!-- Load file process.js -->
              <?php
              echo $this->session->flashdata('msg');
              ?>
            <form class="form-horizontal" action="" method="post">
              <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Kode Pasien</label>
                    <div class="col-lg-8">
                      <input type="text" name="kd_pasien" class="" id="kd_pasien" required maxlength="20"> <button type="button" id="btn-search">Cari</button> <span id="loading">LOADING...</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Id Poli Kia</label>
                    <div class="col-lg-8">
                      <input type="text" name="id_poli_kia" class="form-control" value="<?=$kia; ?>" maxlength="13">
                    </div>
                  </div>
                </div>
                </div>
  
              
               <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Nama Lengkap</label>
                    <div class="col-lg-8">
                      <input type="text" name="nm_lengkap" class="form-control" id="nama" required maxlength="100">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">No IBu</label>
                    <div class="col-lg-8">
                      <input type="text" name="no_ibu" class="form-control" id="ibu" required maxlength="100">
                    </div>
                  </div>
                </div>
                </div>


            
              <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">NO BPJS</label>
                    <div class="col-lg-8">
                     <input type="text" name="bpjs" class="form-control" id="bpjs" required maxlength="15">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Tgl Masuk</label>
                    <div class="col-lg-8 form-group">
                      <input type="text" name="tgl" class="form-control daterange-single" value=""  maxlength="15">
                    </div>
                  </div>
                </div>
               </div>
               

              <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Cara Masuk</label>
                    <div class="col-lg-8">
                       <select class="form-control" name="cara_masuk" required>
                        <option value="">----</option>
                        <option value="Atas Permintaan Sendiri">Atas Permintaan Sendiri</option>
                        <option value="Rujukan Dokter">Rujukan Dokter</option>
                        <option value="Rujukan Bidan">Rujukan Bidan</option>
                        <option value="Rukun Dukun">Rukun Dukun</option>
                        <option value="Rujukan Polindes">Rujukan Polindes</option>
                        <option value="Rujukan Pustu">Rujukan Pustu</option>
                        <option value="Rujukan Puskesmas">Rujukan Puskesmas</option>
                        <option value="Rujukan Rumah Bersalin">Rujukan Rumah Bersalin</option>
                        <option value="Rujukan RS Ibu & anak">Rujukan RS Ibu & Anak</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Usia Klinis</label>
                    <div class="col-lg-8">
                     <input type="text" name="usia_klinis" class="form-control" value="" requird maxlength="15">
                    </div>
                  </div>
                </div>
               </div>
               
                <div class="col-md-12">
                 <div class="col-md-6">
                  <div class="form-group">
                   <label class="control-label col-lg-4">Trimester Ke</label>
                    <div class="col-lg-8">
                      <input type="text" name="trimester" class="form-control" value="" required maxlength="15">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                   <label class="control-label col-lg-4">Anamnesis</label>
                    <div class="col-lg-8">
                      <input type="text" name="anamnesis" class="form-control" value="" required maxlength="15">
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Berat Badan</label>
                    <div class="col-lg-8">
                       <input type="text" name="bb" class="form-control" value="" requird maxlength="15">
                    </div>
                  </div>
                </div>
                 <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Tekanan Darah</label>
                    <div class="col-lg-8">
                      <input type="text" name="td" class="form-control" value=""  maxlength="14">
                    </div>
                  </div>
                </div>
               </div>
              
              <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">LILA</label> 
                    <div class="col-lg-8">
                      <input type="text" name="lila" class="form-control" value="" requird maxlength="15">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">TFU</label>
                    <div class="col-lg-8">
                       <input type="text" name="tfu" class="form-control" value="" requird maxlength="15">
                    </div>
                  </div>
                </div>
               </div>
               
               <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Status Gizi</label>
                     <div class="col-lg-8">
                     <select class="form-control" name="status_gizi" required>
                     <option value=""> ---- </option>
                     <option value="KEK">KEK</option>
                     <option value="Normal">Normal</option>
                     </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Refleks Pattela</label>
                    <div class="col-lg-8">
                      <input type="text" name="rp" class="form-control" value="" required maxlength="15">
                    </div>
                  </div>
                </div>
               </div>
               
                <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Detak Jantung Janin</label>
                    <div class="col-lg-8">
                      <input type="text" name="djj" class="form-control" value="" required maxlength="15">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Berat janin</label>
                    <div class="col-lg-8">
                      <input type="text" name="berat_janin" class="form-control" value="" required maxlength="15">
                    </div>
                  </div>
                </div>
               </div>
               
               
                <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">KPL Terhadap PAP</label>
                    <div class="col-lg-8">
                     <select class="form-control" name="ktp" required>
                     <option value=""> ---- </option>
                     <option value="Masuk">Masuk</option>
                     <option value="Belum Masuk">Belum Masuk</option>
                     </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Presentasi</label>
                    <div class="col-lg-8">
                      <select class="form-control" name="presentasi" required>
                      <option value=""> ---- </option>
                     <option value="Kepala">Kepala</option>
                     <option value="Bokong/Sungsang">Bokong/Sungsang</option>
                     <option value="Letak Lintang/Obligue">Letak Lintang/Obligue</option>
                     </select>
                    </div>
                  </div>
                </div>
               </div>
               
                <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Jumlah Janin</label>
                    <div class="col-lg-8">
                       <select class="form-control" name="jj" required>
                       <option value=""> ---- </option>
                       <option value="Tunggal">Tunggal</option>
                       <option value="Ganda">Ganda</option>
                       </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Status Imunisasi</label>
                    <div class="col-lg-8">
                      <select class="form-control" name="si" required>
                      <option value=""> ---- </option>
                      <option value="T0">T0</option>
                      <option value="T1">T1</option>
                      <option value="T2">T2</option>
                      <option value="T3">T3</option>
                      <option value="T4">T4</option>
                      <option value="T5">T5</option> 
                      </select>
                    </div>
                  </div>
                </div>
               </div>
               
                <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Tgl Terdeteksi</label>
                    <div class="col-lg-8">
                      <input type="text" name="tgl_terdeteksi" class="form-control daterange-single" value="" required maxlength="15">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Terdeteksi Oleh</label>
                     <div class="col-lg-8">
                      <select class="form-control" name="terdeteksi" required>
                      <option value=""> ---- </option>
                      <option value="Pasien">Pasien</option>
                      <option value="Keluarga">Keluarga</option>
                      <option value="Masyarakat">Masyarakat</option>
                      <option value="Dukun">Dukun</option>
                      <option value="Dokter">Dokter</option>
                      <option value="Kader">Kader</option>
                      <option value="Bidan">Bidan</option>
                      <option value="Perawat">Perawat</option>
                      
                       </select>
                    </div>
                  </div>
                </div>
               </div> 
               
               <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Komplikasi</label>
                    <div class="col-lg-8">
                     <select class="form-control" name="komplikasi" required> 
                     <option value=""> ---- </option>
                     <option value="HDK">HDK</option>
                     <option value="Abortus">Abortus</option>
                     <option value="Perdarahan">Perdarahan</option>
                     <option value="Infeksi">Infeksi</option>
                     <option value="KPD">KPD</option>
                     <option value="Lain-lain">Lain-lain</option>
                     </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Dirujuk Ke</label>
                    <div class="col-lg-8">
                      <select class="form-control" name="dirujuk" required>
                      <option value=""> ---- </option>
                      <option value="Puskesmas">Puskesmas</option>
                      <option value="Ruang Bersalin">Ruang Bersalin</option>
                      <option value="RS Ibu & Anak">RS Ibu & Anak</option>
                      <option value="Rumah Sakit">Rumah Sakit</option>
                      </select>
                    </div>
                  </div>
                </div>
               </div>
               
               <div class="col-md-12">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label col-lg-2">Keadaan</label>
                    <div class="col-lg-10">
                      <select class="form-control" name="keadaan" required>
                      <option value=""> ---- </option>
                       <option value="Tib">Tiba</option>
                      <option value="Pulang">Pulang</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              
                <div class="col-md-12">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label col-lg-2">Keterangan</label>
                    <div class="col-lg-10">
                      <textarea name="ket" class="form-control" rows="2" cols="20" required></textarea>
                    </div>
                  </div>
                </div>
              </div>
               
               
               
              <br>
              <hr>
              <a href="poli_kia" class="btn btn-default">Beranda</a>
              <button type="submit" name="btnsimpan" class="btn btn-success" style="float:right;">Simpan</button>
              <a href="poli_kia/data_poli_kia" class="btn btn-primary" style="float:right;margin-right:10px;">
                Tabel Data Poli kia
              </a>
            </form>
            </fieldset>

          </div>

      </div>
    </div>
    <!-- /dashboard content -->

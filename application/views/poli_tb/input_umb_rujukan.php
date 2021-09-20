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
              <legend class="text-bold">Input Data Umpan Balik Rujukan Internal</legend>
              <script src="<?php echo base_url("js/config_umb_tb.js"); ?>"></script>
              <?php
              echo $this->session->flashdata('msg');
              ?>
            <form class="form-horizontal" action="" method="post">
              <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Kode Pasien</label>
                    <div class="col-lg-8">
                      <input type="search" name="kd_pasien" class="" id="kd_pasien"> <button type="button" id="btn-search">Cari</button> <span id="loading">LOADING...</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Id Umb Rujukan</label>
                    <div class="col-lg-8">
                      <input type="text" name="id_umb_rujukan" class="form-control" value="<?=$umb; ?>" maxlength="13">
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
                    <label class="control-label col-lg-4">Jenis Kelamin</label>
                    <div class="col-lg-8">
                     <input type="text" name="jenis_kelamin" class="form-control" id="jenis" required maxlength="15">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Umur</label>
                    <div class="col-lg-8">
                      <input type="text" name="umur" class="form-control" id="umur"  maxlength="15">
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
                    <label class="control-label col-lg-4">Poli Pengirim</label>
                    <div class="col-lg-8">
                     <select class="form-control" name="poli_pengirim">
                        <option value="">----</option>
                        <option value="Poli Umum">Poli Umum</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">No BPJS</label>
                    <div class="col-lg-8">
                      <input type="text" name="no_bpjs" class="form-control" id="no_bpjs" requird maxlength="15">
                    </div>
                  </div>
                </div>
               </div>
               
                <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Petugas Pengirim</label>
                    <div class="col-lg-8">
                       <input type="text" name="petugas" class="form-control" value="" requird maxlength="15">
                    </div>
                  </div>
                </div>
                 <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Tanggal</label>
                    <div class="col-lg-8">
                      <input type="text" name="tgl" class="form-control daterange-single" value=""  maxlength="14">
                    </div>
                  </div>
                </div>
               </div>
               
               <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Kepada Yth</label>
                    <div class="col-lg-8">
                     <select class="form-control" name="yth">
                        <option value="">----</option>
                        <option value="Dr.sugeng">Dr.Sugeng</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Poli Umpan Balik</label>
                    <div class="col-lg-8">
                      <input type="text" name="poli_umb" class="form-control" value="" requird maxlength="15">
                    </div>
                  </div>
                </div>
               </div>
               
               
                <div class="col-md-12">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label col-lg-2">Hasil Pemeriksaan</label>
                    <div class="col-lg-10">
                      <textarea name="hasil_pemeriksaan" class="form-control" rows="2" cols="20" required></textarea>
                    </div>
                  </div>
                </div>
              </div>
              
               <div class="col-md-12">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label col-lg-2">Tindakan / Terapi</label>
                    <div class="col-lg-10">
                      <textarea name="t_terapi" class="form-control" rows="2" cols="20" required></textarea>
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="col-md-12">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label col-lg-2">Id Rujukan</label>
                    <div class="col-lg-10">
                     <input type="text" name="id_rujukan" class="form-control" id="id_rujukan" required maxlength="50">
                    </div>
                  </div>
                </div>
               </div>
              
               
             
              <br>
              <hr>
              <a href="medrec" class="btn btn-default">Beranda</a>
              <button type="submit" name="btnsimpan" class="btn btn-success" style="float:right;">Simpan</button>
              <a href="medrec/data_umb_rujukan" class="btn btn-primary" style="float:right;margin-right:10px;">
                Tabel Data UMB Rujukan
              </a>
            </form>
            </fieldset>

          </div>

      </div>
    </div>
    <!-- /dashboard content -->

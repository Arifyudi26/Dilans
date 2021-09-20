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
              <legend class="text-bold">Input Data Formulir LAB Tuberculosis</legend>
              
              <?php
              echo $this->session->flashdata('msg');
              ?>
            <form class="form-horizontal" action="" method="post">
              <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Kode Pasien</label>
                    <div class="col-lg-8">
                      <input type="search" name="kd_pasien" class="" id="kd_pasien" placeholder="Tuliskan kode pasien"> <button type="button" id="btn-search">Cari</button> <span id="loading">LOADING...</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Id Poli Tb</label>
                    <div class="col-lg-8">
                      <input type="text" name="id_poli_tb" class="form-control" value="<?=$tb; ?>" maxlength="13">
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
                      <input type="text" name="umur" class="form-control" id="umur" required maxlength="15">
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
                    <label class="control-label col-lg-4">Klasifikasi Penyakit</label>
                    <div class="col-lg-8">
                     <select class="form-control" name="kp">
                     <option value=""> ---- </option>
                     <option value="Paru">Paru</option>
                     <option value="Ekstra Pru">Ekstra Paru</option>
                     </select>
                    </div>
                  </div>
                </div>
               </div>
               
               <legend class="text-bold">Alasan Pemeriksaan</legend>
               
                <div class="col-md-12">
                 <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Diagnosa</label>
                    <div class="col-lg-8">
                      <input type="text" name="diagnosa" class="form-control" required maxlength="15">
                    </div>
                  </div>
                </div>
                 <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Follow UP Pengobatan</label>
                    <div class="col-lg-8">
                       <input type="text" name="fup" class="form-control"  requird maxlength="15">
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Bulan Ke</label>
                    <div class="col-lg-8">
                       <input type="text" name="bulan_ke" class="form-control" requird maxlength="15">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">No.Reg.TB Kab</label> 
                    <div class="col-lg-8">
                      <input type="text" name="noreg" class="form-control" value="" requird maxlength="15">
                    </div>
                  </div>
                </div>
               </div>
              
              <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">No. Iden Sediaan</label>
                    <div class="col-lg-8">
                       <input type="text" name="nis" class="form-control" value="" requird maxlength="15">
                    </div>
                  </div>
                </div>
                 <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Tgl Pengambilan Dahak</label>
                    <div class="col-lg-8">
                      <input type="text" name="tpd" class="form-control daterange-single"  required maxlength="15">
                    </div>
                  </div>
                </div>
               </div>
               
               <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Tgl Pengiriman sediaan</label>
                    <div class="col-lg-8">
                      <input type="text" name="tps" class="form-control daterange-single" required maxlength="15">
                    </div>
                  </div>
                </div>
               <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Nama Pengambil Spesimen</label>
                    <div class="col-lg-8">
                      <input type="text" name="nps" class="form-control" value="" required maxlength="15">
                    </div>
                  </div>
                </div>
               </div>
               
               <legend class="text-bold">Secara Visual dahak Tampak</legend>
               
                <div class="col-md-12">
                 <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Nanah Lendir</label>
                    <div class="col-lg-8">
                    <select class="form-control" name="nl">
                    <option value=""> ---- </option>
                    <option value="Dahak Sewaktu Pertama">Dahak Sewaktu Pertama</option>
                    <option value="Dahak Pagi">Dahak Pagi</option>
                    <option value="Dahak Sewaktu Kedua">Dahak Sewaktu Kedua</option>
                    </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Bercak Darah</label>
                    <div class="col-lg-8">
                      <select class="form-control" name="bd">
                      <option value=""> ---- </option>
                    <option value="Dahak Sewaktu Pertama">Dahak Sewaktu Pertama</option>
                    <option value="Dahak Pagi">Dahak Pagi</option>
                    <option value="Dahak Sewaktu Kedua">Dahak Sewaktu Kedua</option>
                    </select>
                    </div>
                  </div>
                </div>
               </div>
               
               
                <div class="col-md-12">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label col-lg-2">Air Liur</label>
                    <div class="col-lg-10">
                    <select class="form-control" name="al">
                    <option value=""> ---- </option>
                    <option value="Dahak Sewaktu Pertama">Dahak Sewaktu Pertama</option>
                    <option value="Dahak Pagi">Dahak Pagi</option>
                    <option value="Dahak Sewaktu Kedua">Dahak Sewaktu Kedua</option>
                    </select>
                    </div>
                  </div>
                </div>
               </div>
               
              
               
              <br>
              <hr>
              <a href="poli_tb" class="btn btn-default">Beranda</a>
              <button type="submit" name="btnsimpan" class="btn btn-success" style="float:right;">Simpan</button>
              <a href="poli_tb/data_poli_tb" class="btn btn-primary" style="float:right;margin-right:10px;">
                Tabel Data Poli TB
              </a>
            </form>
            </fieldset>

          </div>

      </div>
    </div>
    <!-- /dashboard content -->

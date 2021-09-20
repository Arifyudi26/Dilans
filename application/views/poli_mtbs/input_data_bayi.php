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
              <legend class="text-bold">Input Kartu Bayi Dan Baita</legend>
              
              <?php
              echo $this->session->flashdata('msg');
              ?>
            <form class="form-horizontal" action="" method="post">
             <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Puskesmas</label>
                    <div class="col-lg-8">
                      <input type="text" name="puskes" class="form-control" id="" placeholder="Tuliskan tempat lahir" required maxlength="35" >
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Bidan</label>
                    <div class="col-lg-8">
                      <input type="text" name="bidan" class="form-control" value="" placeholder="Tuliskan yang membantu melahirkan" required maxlength="33">
                    </div>
                  </div>
                </div>
                </div>
  
             
              <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                   <label class="control-label col-lg-4">No Bayi</label>
                    <div class="col-lg-8">
                      <input type="text" name="no_bayi" class="form-control" value="" maxlength="13">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Nama Lengkap</label>
                    <div class="col-lg-8">
                      <input type="text" name="nama" class="form-control" value="" required maxlength="13">
                    </div>
                  </div>
                </div>
                </div>
                
               <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Nama Ibu</label>
                    <div class="col-lg-8">
                     <input type="text" name="nama_ibu" class="form-control" required maxlength="45">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Nama Ayah</label>
                    <div class="col-lg-8">
                      <input type="text" name="nama_ayah" class="form-control" required maxlength="45">
                    </div>
                  </div>
                </div>
               </div>
               
               <div class="col-md-12">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label col-lg-2">Alamat Lengkap</label>
                    <div class="col-lg-10">
                      <textarea name="alamat" class="form-control" id="alamat" rows="2" cols="20" required></textarea>
                    </div>
                  </div>
                </div>
              </div>
              
               <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Kabupaten</label>
                    <div class="col-lg-8">
                     <input type="text" name="kabupaten" class="form-control" required maxlength="45">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Provinsi</label>
                    <div class="col-lg-8">
                      <input type="text" name="provinsi" class="form-control" required maxlength="45">
                    </div>
                  </div>
                </div>
               </div>
               
                <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Tgl Lahir</label>
                    <div class="col-lg-8">
                     <input type="text" name="tgl_lahir" class="form-control datarange-single" required maxlength="45">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Jam Lahir</label>
                    <div class="col-lg-8">
                      <input type="text" name="jam_lahir" class="form-control" required maxlength="45">
                    </div>
                  </div>
                </div>
               </div>
            
            
              <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Jenis Kelamin</label>
                    <div class="col-lg-8">
                     <select class="form-control" name="j_kelamin">
                     <option value="">  ---  </option>
                     <option value="Laki-laki">Laki-laki</option>
                     <option value="Perempuan">Perempuan</option>
                     </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Berat Badan</label>
                    <div class="col-lg-8">
                      <input type="text" name="bb" class="form-control" required maxlength="15">
                    </div>
                  </div>
                </div>
               </div>

              <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Panjang</label>
                    <div class="col-lg-8">
                      <input type="text" name="panjang" class="form-control"  requird maxlength="15">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Golongan Darah</label>
                    <div class="col-lg-8">
                     <select class="form-control" name="gol_darah">
                     <option value="">  ---  </option>
                     <option value="Gol A">Gol A</option>
                     <option value="Gol B">Gol B</option>
                     <option value="Gol AB">Gol AB</option>
                     <option value="Gol O">Gol O</option>
                     </select>
                    </div>
                  </div>
                </div>
               </div>
               
               <div class="col-md-12">
                <div class="col-md-12">
                 <div class="form-group">
                  <label class="control-label col-lg-2">No BPJS </label>
                   <div class="col-lg-10">
                    <input type="text" name="bpjs" class="form-control" required maxlength="35" />
                   </div>
                  </div>
                 </div>
                </div>
               
                <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Buku Kia/KMS</label>
                    <div class="col-lg-8">
                    <select class="form-control" name="buku_kia">
                    <option value="">  ---  </option>
                     <option value="Memiliki">Memiliki</option>
                     <option value="Tidak Memiliki">Tidak Memiliki</option>
                    </select>
                    </div>
                  </div>
                </div>
                 <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Keadaan Lahir</label>
                    <div class="col-lg-8">
                    <select class="form-control" name="keadaan_lahir">
                     <option value="">  ---  </option>
                     <option value="Hidup">Hidup</option>
                     <option value="Mati">Mati</option>
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
                    <select class="form-control" name="komplikasi">
                    <option value="">  ---  </option>
                     <option value="Asfiksi">Asfiksi</option>
                     <option value="Hipotermi">Hipotermi</option>
                     <option value="Infeksi">Infeksi</option>
                     <option value="Tetanus">Tetanus</option>
                     <option value="BBLR">BBLR</option>
                     <option value="Lain-lain">Lain-lain</option>
                    </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Resusitasi</label> 
                    <div class="col-lg-8">
                    <select class="form-control" name="resusitasi">
                    <option value="">  ---  </option>
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
                    <label class="control-label col-lg-4">IMD</label>
                    <div class="col-lg-8">
                     <select class="form-control" name="imd">
                      <option value="">  ---  </option>
                      <option value="<1 jam"><1 jam</option>
                      <option value=">1 jam">>1 Jam</option>
                     </select>
                    </div>
                  </div>
                </div>
                 <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Pencegahan</label>
                    <div class="col-lg-8">
                      <select class="form-control" name="pencegahan">
                       <option value="">  ---  </option>
                       <option value="Vit K1">Vit K1</option>
                       <option value="Hep. B0">Hep. B0</option>
                       <option value="Salep Mata">Salep Mata</option>
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
                      <option value="">  ---  </option>
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
                     <option value="">  ---  </option>
                     <option value="Puskesmas">Puskesmas</option>
                     <option value="RSIA/RSB">RSIA/RSB</option>
                     <option value="Rumah Sakit">Rumah Sakit</option>
                     <option value="Lain-lain">Lain-lain</option>
                     </select>
                    </div>
                  </div>
                </div>
               </di
               
               
               
              ><br>
              <hr>
              <a href="poli_mtbs" class="btn btn-default">Beranda</a>
              <button type="submit" name="btnsimpan" class="btn btn-success" style="float:right;">Simpan</button>
              <a href="poli_mtbs/data_bayi" class="btn btn-primary" style="float:right;margin-right:10px;">
                Tabel Data bayi
              </a>
            </form>
            </fieldset>

          </div>

      </div>
    </div>
    <!-- /dashboard content -->

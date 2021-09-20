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
              <legend class="text-bold">Input Data Kartu Ibu</legend>
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
                    <label class="control-label col-lg-4">No Ibu</label>
                    <div class="col-lg-8">
                      <input type="text" name="no_ibu" class="form-control" value="<?=$ibu; ?>" maxlength="13">
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
                    <label class="control-label col-lg-4">Tempat Tgl Lahir</label>
                    <div class="col-lg-8">
                      <input type="text" name="tt_lahir" class="form-control" id="tt_lahir" required maxlength="100">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Umur</label>
                    <div class="col-lg-8">
                      <input type="text" name="umur" class="form-control" id="umur" required maxlength="100">
                    </div>
                  </div>
                </div>
                </div>


            
              <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Alamat Domisili</label>
                    <div class="col-lg-8">
                     <input type="text" name="alamat" class="form-control" id="alamat" required maxlength="15">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Agama</label>
                    <div class="col-lg-8 form-group">
                      <input type="text" name="agama" class="form-control" id="agama"  maxlength="15">
                    </div>
                  </div>
                </div>
               </div>
               

              <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Pendidikan</label>
                    <div class="col-lg-8">
                      <input type="text" name="pendidikan" class="form-control" id="pendidikan"  maxlength="15">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Pekerjaan</label>
                    <div class="col-lg-8">
                     <input type="text" name="pekerjaan" class="form-control" id="pekerjaan" requird maxlength="15">
                    </div>
                  </div>
                </div>
               </div>
               
                <div class="col-md-12">
                 <div class="col-md-6">
                  <div class="form-group">
                   <label class="control-label col-lg-4">Golongan Darah</label>
                    <div class="col-lg-8">
                      <input type="text" name="gol_darah" class="form-control" value="" required maxlength="15">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                   <label class="control-label col-lg-4">Nama Suami</label>
                    <div class="col-lg-8">
                      <input type="text" name="nama_suami" class="form-control" value="" required maxlength="15">
                    </div>
                  </div>
                </div>
              </div>

              <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">NO Telpon</label>
                    <div class="col-lg-8">
                       <input type="text" name="telpon" class="form-control" id="telpon" requird maxlength="15">
                    </div>
                  </div>
                </div>
                 <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Tgl Registrasi</label>
                    <div class="col-lg-8">
                      <input type="text" name="tgl_reg" class="form-control daterange-single" value=""  maxlength="14">
                    </div>
                  </div>
                </div>
               </div>
               
               <legend class="text-bold">Riwayat Obstetrik</legend>
              
              <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">No Bpjs</label> 
                    <div class="col-lg-8">
                      <input type="text" name="bpjs" class="form-control" id="bpjs" requird maxlength="15">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Gravida</label>
                    <div class="col-lg-8">
                       <input type="text" name="gravida" class="form-control" value="" requird maxlength="15">
                    </div>
                  </div>
                </div>
               </div>
               
               <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Partus</label>
                     <div class="col-lg-8">
                    <input type="text" name="partus" class="form-control" value="" requird maxlength="15">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Abortus</label>
                    <div class="col-lg-8">
                      <input type="text" name="abortus" class="form-control" value="" required maxlength="15">
                    </div>
                  </div>
                </div>
               </div>
               
                <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Hidup</label>
                    <div class="col-lg-8">
                      <input type="text" name="hidup" class="form-control" value="" required maxlength="15">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Tgl Periksa</label>
                    <div class="col-lg-8">
                      <input type="text" name="tgl_periksa" class="form-control daterange-single" value="" required maxlength="15">
                    </div>
                  </div>
                </div>
               </div>
               
               <legend class="text-bold">Pemeriksaan Bidan</legend>
               
                <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Tgl HPHT</label>
                    <div class="col-lg-8">
                     <input type="text" name="tgl_hpht" class="form-control daterange-single" value="" requird maxlength="15">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Taksiran Persalinan</label>
                    <div class="col-lg-8">
                     <input type="text" name="taksiran" class="form-control" value="" requird maxlength="15">
                    </div>
                  </div>
                </div>
               </div>
               
                <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">BB Sebelum Hamil</label>
                    <div class="col-lg-8">
                      <input type="text" name="bb_sblm_hamil" class="form-control" value="" requird maxlength="15">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Tinggi Badan</label>
                    <div class="col-lg-8">
                      <input type="text" name="tb" class="form-control" value="" requird maxlength="15">
                    </div>
                  </div>
                </div>
               </div>
               
              <div class="col-md-12">
               <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label col-lg-2">Riwayat Komplikasi Kebidanan</label>
                    <div class="col-lg-10">
                      <input type="text" name="rkk" class="form-control" value="" requird maxlength="15">
                    </div>
                  </div>
                </div>
               </div>
               
               <div class="col-md-12">
               <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label col-lg-2">Penyakit Kronis & Alergi</label>
                    <div class="col-lg-10">
                      <input type="text" name="pka" class="form-control" value="" requird maxlength="15">
                    </div>
                  </div>
                </div>
               </div>
               
               <legend class="text-bold">Rencana Bersalin</legend>
               
               <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Tgl Rencana Bersalin</label>
                    <div class="col-lg-8">
                      <input type="text" name="tgl_bersalin" class="form-control daterange-single" value="" required maxlength="15">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Penolong</label>
                     <div class="col-lg-8">
                      <select class="form-control" name="penolong" required>
                      <option value=""> ---- </option>
                      <option value="Dr.spesialis">Dr.Spesialis</option>
                      <option value="Keluarga">Keluarga</option>
                      <option value="Masyarakat">Masyarakat</option>
                      <option value="Dukun">Dukun</option>
                      <option value="Dr.umum">Dr.umum</option>
                      
                      <option value="Bidan">Bidan</option>
                      <option value="Tidak ada">Tidak ada</option>
                      
                       </select>
                    </div>
                  </div>
                </div>
               </div> 
               
               <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Tempat</label>
                    <div class="col-lg-8">
                     <select class="form-control" name="tempat" required> 
                     <option value=""> ---- </option>
                     <option value="Rumah">Rumah</option>
                     <option value="Poskesdes">poskesdes</option>
                     
                     <option value="Pustu">Pustu</option>
                     <option value="Puskesmas">Puskesmas</option>
                     <option value="Ruang Bersalin">Ruang Bersalin</option>
                     <option value="RS Ibu & Anak">RS Ibu & Anak</option>
                     <option value="Rumah Sakit">Rumah Sakit</option>
                     <option value="Lain-lain">Lain-lain</option>
                     </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Pendamping</label>
                    <div class="col-lg-8">
                      <select class="form-control" name="pendamping" required>
                      <option value=""> ---- </option>
                      <option value="Suami">Suami</option>
                      <option value="Keluarga">Keluarga</option>
                      <option value="Teman">Teman</option>
                      <option value="Tetangga">Rumah Sakit</option>
                      <option value="Lain-lain">Lain-lain</option>
                      <option value="Tidak ada">Tidak ada</option>
                      </select>
                    </div>
                  </div>
                </div>
               </div>
               
               <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Transpot</label>
                    <div class="col-lg-8">
                      <select class="form-control" name="Transpot" required>
                      <option value=""> ---- </option>
                       <option value="Suami">Suami</option>
                      <option value="Keluarga">Keluarga</option>
                      <option value="Teman">Teman</option>
                      <option value="Lain-lain">Lain-lain</option>
                      <option value="Tidak Ada">Tidak Ada</option>
                      </select>
                    </div>
                  </div>
                </div>
                 <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Pendonor</label>
                    <div class="col-lg-8">
                      <select class="form-control" name="Pendonor" required>
                      <option value=""> ---- </option>
                       <option value="Suami">Suami</option>
                      <option value="Keluarga">Keluarga</option>
                      <option value="Teman">Teman</option>
                      <option value="Lain-lain">Lain-lain</option>
                      <option value="Tidak Ada">Tidak Ada</option>
                      </select>
                    </div>
                  </div>
                </div>
              </div>
              
               <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Id Berobat</label>
                    <div class="col-lg-8">
                      <input type="text" name="id_berobat" class="form-control" required maxlength="15">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Id Poli Kia</label>
                    <div class="col-lg-8">
                      <input type="text" name="id_poli_kia" class="form-control" required maxlength="15">
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

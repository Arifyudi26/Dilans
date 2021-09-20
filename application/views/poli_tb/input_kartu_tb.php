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
              <legend class="text-bold">Kartu Pengobatan Pasien TB</legend>
              
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
                    <label class="control-label col-lg-4">No kartu PPTB</label>
                    <div class="col-lg-8">
                      <input type="text" name="id_kartu_tb" class="form-control" value="<?=$pptb; ?>" maxlength="13">
                    </div>
                  </div>
                </div>
                </div>
  
              
               <div class="col-md-12">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label col-lg-2">Nama Pasien TB</label>
                    <div class="col-lg-10">
                      <input type="text" name="nama" class="form-control" id="nama" required maxlength="100">
                    </div>
                  </div>
                </div>
                </div>
                

            
              <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Nik KTP</label>
                    <div class="col-lg-8">
                     <input type="text" name="ktp" class="form-control" id="nik" required maxlength="15">
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
                    <label class="control-label col-lg-4">Tempat Tgl Lahir</label>
                    <div class="col-lg-8">
                     <input type="text" name="tt_lahir" class="form-control" id="tt_lahir" required maxlength="30">
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
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Berat Badan</label>
                    <div class="col-lg-8">
                     <input type="text" name="bb" class="form-control" id="jenis" required maxlength="15">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Tinggi Badan</label>
                    <div class="col-lg-8">
                      <input type="text" name="tb" class="form-control" id="umur" required maxlength="15">
                    </div>
                  </div>
                </div>
               </div>
               
               <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Nama PMO</label>
                    <div class="col-lg-8">
                     <input type="text" name="nama_pmo" class="form-control" id="jenis" required maxlength="15">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Nama Faskes</label>
                    <div class="col-lg-8">
                      <input type="text" name="nama_faskes" class="form-control" id="umur" required maxlength="15">
                    </div>
                  </div>
                </div>
               </div>
              
               <div class="col-md-12">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label col-lg-2">Alamat PMO</label>
                    <div class="col-lg-10">
                     <input type="text" name="alamat_pmo" class="form-control" id="jenis" required maxlength="15">
                    </div>
                  </div>
                </div>
                </div>
                
                
                 <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">No Telpon PMO</label>
                    <div class="col-lg-8">
                     <input type="text" name="ntp" class="form-control" id="jenis" required maxlength="15">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Parut BCG</label>
                    <div class="col-lg-8">
                     <select class="form-control" name="parut">
                     <option value=""> ---- </option>
                     <option value="Ada">Ada</option>
                     <option value="Tidak Ada">Tidak Ada</option>
                     </select>
                    </div>
                  </div>
                </div>
               </div>
              

              <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                     <label class="control-label col-lg-4">Jumlah Skoring TB anak</label>
                    <div class="col-lg-8">
                      <input type="text" name="stb" class="form-control" id="bpjs" requird maxlength="15">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Tgl Masuk</label>
                    <div class="col-lg-8">
                      <input type="text" name="tgl_masuk" class="form-control daterange-single" id="bpjs" requird maxlength="15">
                    </div>
                  </div>
                </div>
               </div>
               
               
               
               <legend class="text-bold">Pemeriksaan</legend>
               
                <div class="col-md-12">
                 <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Hasil Pemeriksaan Uji</label>
                    <div class="col-lg-8">
                      <select class="form-control" name="hpu">
                      <option value=""> ---- </option>
                      <option value="1+">1+</option>
                      <option value="2+">2+</option>
                      <option value="3+">3+</option>
                      <option value="scanty">Scanty</option>
                      <option value="Neg">Neg</option>
                      </select>
                    </div>
                  </div>
                </div>
                 <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Uji Tuberkulin</label>
                    <div class="col-lg-8">
                       <input type="text" name="ut" class="form-control"  requird maxlength="15">
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4"> Foto Toraks Tgl</label>
                    <div class="col-lg-8">
                       <input type="text" name="tgl_toraks" class="form-control daterange-single" requird maxlength="15">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">No seri</label> 
                    <div class="col-lg-8">
                      <input type="text" name="ns" class="form-control" value="" requird maxlength="15">
                    </div>
                  </div>
                </div>
               </div>
              
              <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">FNAB Tanggal</label>
                    <div class="col-lg-8">
                       <input type="text" name="fnab_tgl" class="form-control daterange-single" value="" requird maxlength="15">
                    </div>
                  </div>
                </div>
                 <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Hasil FNAB</label>
                    <div class="col-lg-8">
                      <input type="text" name="hasil" class="form-control"  required maxlength="40">
                    </div>
                  </div>
                </div>
               </div>
               
               <div class="col-md-12">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label col-lg-2">Uji Selain dahak</label>
                    <div class="col-lg-10">
                      <select name="usd" class="form-control">
                      <option value=""> ---- </option>
                      <option value="MTB">MTB</option>
                      <option value="Bukan MTB">Bukan MTB</option>
                      </select>
                    </div>
                  </div>
                </div>
                </div>
               
               <legend class="text-bold">Kegiatan TB DM</legend>
               
                <div class="col-md-12">
                 <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Riwayat DM</label>
                    <div class="col-lg-8">
                    <select class="form-control" name="rd">
                    <option value=""> ---- </option>
                    <option value="Ya">Ya</option>
                    <option value="Tidak">Tidak</option>
                    </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Hasil Tes DM</label>
                    <div class="col-lg-8">
                      <select class="form-control" name="htd">
                      <option value=""> ---- </option>
                    <option value="Positif">Positif</option>
                    <option value="Negatif">Negatif</option>
                    </select>
                    </div>
                  </div>
                </div>
               </div>
               
               
                <div class="col-md-12">
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label col-lg-2">Terapi DM</label>
                    <div class="col-lg-10">
                    <select class="form-control" name="terapi_dm">
                    <option value=""> ---- </option>
                    <option value="OHO">OHO</option>
                    <option value="Tidak">Inj.Insulin</option>
                    </select>
                    </div>
                  </div>
                </div>
               </div>
               
               <legend class="text-bold">Tipe Diagnosis dan Klasifikasi pasien TB</legend>
               <div class="col-md-12">
                 <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Tipe Diagnosis</label>
                    <div class="col-lg-8">
                    <select class="form-control" name="tipe_diag">
                    <option value=""> ---- </option>
                    <option value="Terkonfirmasi Bakteriologis">Terkonfirmasi Bakteriologis</option>
                    <option value="Terdiagnosis klinis">Terdiagnosis klinis</option>
                    </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Klasifikasi Berdasarkan Lokasi Anatomi</label>
                    <div class="col-lg-8">
                      <select class="form-control" name="kbla">
                      <option value=""> ---- </option>
                      <option value="TB Paru">TB Paru</option>
                      <option value="TB Ekstraparu">TB Ekstraparu</option>
                      </select>
                    </div>
                  </div>
                </div>
               </div>
               
                <div class="col-md-12">
                 <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Klasifikasi Riwayat Pengobatan Sblmnya</label>
                    <div class="col-lg-8">
                    <select class="form-control" name="krps">
                    <option value=""> ---- </option>
                    <option value="Baru">Baru</option>
                    <option value="Diobati Setelah Gagal">Diobati Setelah Gagal</option>
                    <option value="Kambuh">Kambuh</option>
                    <option value="Diobati Setelah Putus Berobat">Diobati Setelah Putus Berobat</option>
                    <option value="Tidak Diketahui">tidak Diketahui</option>
                    <option value="lain-lain">Lain-lain</option>
                    </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Klasifikasi Berdasarkan Status HIV</label>
                    <div class="col-lg-8">
                      <select class="form-control" name="kbsh">
                      <option value=""> ---- </option>
                      <option value="Positif">Positif</option>
                      <option value="Negatif">Negatif</option>
                      <option value="Tidak Diketahui">Tidak Diketahui</option>
                      </select>
                    </div>
                  </div>
                </div>
               </div>
               
               <div class="col-md-12">
                 <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label col-lg-2">Dirujuk Oleh</label>
                    <div class="col-lg-10">
                    <select class="form-control" name="do">
                    <option value=""> ---- </option>
                    <option value="Inisiatif Pasien/Keluarga">Inisiatif Pasien/Keluarga</option>
                    <option value="Dokter peraktek">Dokter Peraktek</option>
                    <option value="Teman">Teman</option>
                    <option value="Lain-lain">Lain-lain</option>
                    </select>
                    </div>
                  </div>
                </div>
                </div>
                
              <legend class="text-bold">Pindahan Dari : </legend>
               <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Faskes Pindahan</label>
                    <div class="col-lg-8">
                     <input type="text" name="fp" value="" class="form-control" required maxlength="35" />
                    </div>
                  </div>
                </div>
                 <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Alamat Faskes</label>
                    <div class="col-lg-8">
                     <input type="text" name="alamat_faskes" value="" class="form-control" required maxlength="35" />
                    </div>
                  </div>
                </div>
               </div>
               
               <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Kabupaten/Kota</label>
                    <div class="col-lg-8">
                     <input type="text" name="kota" value="" class="form-control" required maxlength="35" />
                    </div>
                  </div>
                </div>
                 <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Provinsi</label>
                    <div class="col-lg-8">
                     <input type="text" name="provinsi" value="" class="form-control" required maxlength="35" />
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

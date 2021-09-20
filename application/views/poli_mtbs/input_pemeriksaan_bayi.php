
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
              <legend class="text-bold">Input Pemeriksaan Bayi (29 Hari - 1 Tahun)</legend>
              

              <?php
              echo $this->session->flashdata('msg');
              ?>
            <form class="form-horizontal" action="" method="post">
              <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Kode Pasien</label>
                    <div class="col-lg-8">
                      <input type="search" name="kd_pasien" class="" id="kd_pasien" placeholder="Tuliskan Kode pasien"> <button type="button" id="btn-search">Cari</button> <span id="loading">LOADING...</span>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Id Pem Bayi</label>
                    <div class="col-lg-8">
                      <input type="text" name="id_bayi" class="form-control" value="<?=$bayi; ?>" maxlength="13">
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
                     <input type="text" name="jenis" class="form-control" id="jenis" required maxlength="15">
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
                    <label class="control-label col-lg-4">Umur (B1)</label>
                    <div class="col-lg-8">
                     <input type="text" name="umurb1" class="form-control" required maxlength="15">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Umur (He)</label>
                    <div class="col-lg-8">
                      <input type="text" name="umurhe" class="form-control" required maxlength="15">
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
                <div class="col-md-12">
                  <div class="form-group">
                    <label class="control-label col-lg-2">Keluhan</label>
                    <div class="col-lg-10">
                      <textarea name="keluhan" class="form-control" id="keluhan" rows="2" cols="20" required></textarea>
                    </div>
                  </div>
                </div>
              </div>


              <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">No BPJS</label>
                    <div class="col-lg-8">
                      <input type="text" name="bpjs" class="form-control" id="bpjs" requird maxlength="15">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                   <label class="control-label col-lg-4">Asi Eksklusif</label>
                    <div class="col-lg-8">
                     <input type="text" name="ae" class="form-control" id="ae" required maxlength="15" />
                    </div>
                  </div>
                </div>
               </div>
               
                <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">MP ASI</label>
                    <div class="col-lg-8">
                     <input type="text" name="mp_asi" class="form-control" id="mp" required maxlength="15" />
                    </div>
                  </div>
                </div>
                 <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">SDI DTK</label>
                    <div class="col-lg-8">
                     <input type="text" name="sdi_dtk" class="form-control" id="sdi" required maxlength="15" />
                    </div>
                  </div>
                </div>
              </div>
              
              <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Berat Badan</label>
                    <div class="col-lg-8">
                     <input type="text" name="bb" class="form-control" id="bb" required maxlength="15">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Tinggi Badan</label>
                    <div class="col-lg-8">
                      <input type="text" name="tb" class="form-control" id="tb" required maxlength="15">
                    </div>
                  </div>
                </div>
               </div>
               
               <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Sistole</label>
                    <div class="col-lg-8">
                     <input type="text" name="st" class="form-control" id="st" required maxlength="15">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Diastole</label>
                    <div class="col-lg-8">
                      <input type="text" name="dt" class="form-control" id="dt" required maxlength="15">
                    </div>
                  </div>
                </div>
               </div>
               
               <div class="col-md-12">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Raspiratory Rate</label>
                    <div class="col-lg-8">
                     <input type="text" name="rr" class="form-control" id="rr" required maxlength="15">
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="control-label col-lg-4">Heart Rate</label>
                    <div class="col-lg-8">
                      <input type="text" name="hr" class="form-control" id="hr" required maxlength="15">
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
                  <label class="control-label col-lg-4">Status Gizi</label>
                   <div class="col-lg-8">
                   <select class="form-control" name="sg">
                    <option value="">   ----   </option>
                    <option value="Baik">baik</option>
                    <option value="Buruk">Buruk</option>
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
                       <option value="BCG">BCG</option>
                       <option value="DPT HB 1">DPT HB 1</option>
                       <option value="DPT HB 2">DPT HB 2</option>
                       <option value="DPT HB 3">DPT HB 3</option>
                       <option value="Polio 1">Polio 1</option>
                       <option value="Polio 2">Polio 2</option>
                       <option value="Polio 3">Polio 3</option>
                       <option value="Polio 4">Polio 4</option>
                       <option value="Campak">Campak</option>
                       <option value="Vit. A">Vit.A</option>
                      </select>
                    </div>
                  </div>
                </div>
                <div class="col-md-6">
                 <div class="form-group">
                  <label class="control-label col-lg-4">Tgl Masuk</label>
                   <div class="col-lg-8">
                   <input type="text" class="form-control daterange-single" name="tgl" value="" maxlength="15">
                   </div>
                  </div>
                 </div>
                </div>
                
                
                
               <div class="col-md-12">
                <div class="col-md-6">   
                  <div class="form-group">   
                    <label class="control-label col-lg-4">Integrasi Program</label> 
                    <div class="col-lg-8">  
                      <select class="form-control" name="ip">   
                       <option value="">  ---  </option>
                       <option value="Sorologi HIV">Sorologi HIV</option>
                       <option value="CD4">CD4</option>
                       <option value="Mendapatkan Kelambu">Mendapatkan Kelambu</option>
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
              <a href="poli_mtbs" class="btn btn-default">Beranda</a> 
              <button type="submit" name="btnsimpan" class="btn btn-success" style="float:right;">Simpan</button> 
              <a href="poli_mtbs/data_pemeriksaan_bayi" class="btn btn-primary" style="float:right;margin-right:10px;"> 
                Tabel Data Pemeriksaan bayi
              </a>
            </form>
            </fieldset>

          </div>

      </div>
    </div>
    <!-- /dashboard content -->

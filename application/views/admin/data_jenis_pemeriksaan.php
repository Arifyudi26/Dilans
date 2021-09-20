<?php
$un = $this->session->userdata('Puskesmas-sawah-besar@2017');
?>
<!-- Main content -->
<div class="content-wrapper">
  <br><br><br>
  <!-- Content area -->
  <div class="content">

    <div class="row">
      <!-- Basic datatable -->
      <div class="panel panel-default">
        <div class="panel-heading">
          <h1 class="panel-title">Tabel Informasi Data Jenis Pemeriksaan</h1>

          <div class="heading-elements">
            <ul class="icons-list">
              <li><a data-action="collapse"></a></li>
            </ul>
          </div>
        </div>
        <div class="panel panel-flat">
        <div class="panel-heading">
          <p><a class="btn btn-primary" href="<?php echo base_url('Admin/input_jenis_pemeriksaan');?>"><i class="glyphicon glyphicon-plus"></i> Tambah Dokter</a>

  			<a class="btn btn-danger" href="<?php echo base_url('Admin/cetak_jenis_pdf');?>" target="_blank"><i class="glyphicon glyphicon-print"></i> PDF</a>
			<a class="btn btn-success" href="<?php echo base_url('admin/cetak_jenis_excel');?>"><i class="glyphicon glyphicon-print"></i> Excel</a></p>
            </div>

        <table class="table datatable-basic" width="100%">
          <thead>
            <tr>
              <th width="30px;">No.</th>
              <th>Jenis Pemeriksaan</th>
              <th>Keterangan</th>
              <th>Action</th>
              <!--<th class="text-center" width="230"></th>-->
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($jenis as $baris) {
            ?>
              <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $baris->JENIS_PEMERIKSAAN; ?></td>
                <td><?php echo $baris->KETERANGAN; ?></td>
                 <td class="center">
        			 <form action="" method="post" id="delete">
           			 <input type="hidden" name="empty" value="empty">            
            		 <input type="hidden" name="id_dokter" value="<?php echo $baris->ID_JENIS; ?>">            
      				 </form>        
                     <a  data-toggle="modal" data-target="#tambah-data" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i> Edit</a> 
                     <button class="btn btn-danger" form="delete"><i class="glyphicon glyphicon-trash"></i> Delete</button>
        
      		  </td>
              </tr>
            <?php
            $no++;
            } ?>
          </tbody>
        </table>
      </div>
      <!-- /basic datatable -->
      
      <!-- Modal Tambah -->
	<div aria-hidden="true" aria-labelledby="myModalLabel" role="dialog" tabindex="-1" id="tambah-data" class="modal fade">
	    <div class="modal-dialog">
	        <div class="modal-content">
	            <div class="modal-header">
	                <button aria-hidden="true" data-dismiss="modal" class="close" type="button">X</button>
	                <legend class="text-bold">Edit data Dokter</legend>
	            </div>
	            <form class="" action="" method="post">
		            <div class="modal-body"> 
                           <div class="col-md-12">
                             <div class="col-md-12">
		                       <div class="form-group">
		                        <label class="control-label col-lg-2">Nama Dokter</label>
		                         <div class="col-lg-10">
		                            <input type="text" class="form-control" name="nama_dokter" placeholder="Nama Dokter" required maxlength="30">
		                        </div>
		                       </div>
                              </div>
                             </div>
                             
                     
                            
                           <div class="col-md-12">
                            <div class="col-md-6">
		                     <div class="form-group">
		                       <label class="control-label col-lg-4">Jenis Kelamin</label>
		                        <div class="col-lg-8">
		                        <select name="jenis" class="form-control">
                                <option value="">--pilih--</option>
                                <option value="Laki-laki">Laki-laki</option>
                                <option value="Perempuan">Perempuan</option>
                                </select>
		                        </div>
		                      </div>
                            </div>
                          <div class="form-group">
                            <div class="col-md-6">
		                      <label class="control-label col-lg-4">No Telpon</label>
		                        <div class="col-lg-8">
		                         <input type="text" class="form-control" name="telpon"  required maxlength="15">
		                        </div>
		                     </div>
		                   </div>
                         </div>
                         
                          <div class="col-md-12">
                            <div class="col-md-12">
		                     <div class="form-group">
		                       <label class="control-label col-lg-2">Alamat</label>
		                        <div class="col-lg-10">
		                         <input type="text" class="form-control" name="alamat"  required maxlength="15">
		                        </div>
		                      </div>
                            </div>
                            </div>
                          
                          <div class="col-md-12">   
                           <div class="col-md-6">
                            <div class="form-group">
		                      <label class="control-label col-lg-4">Title</label>
		                        <div class="col-lg-8">
		                         <input type="text" class="form-control" name="title" required maxlength="15">
		                        </div>
		                       </div>
		                      </div>
                              <div class="col-md-6">
                               <div class="form-group">
		                        <label class="control-label col-lg-4">Spesialist</label>
		                         <div class="col-lg-8">
		                          <input type="text" class="form-control" name="spesial" required maxlength="15">
		                          </div>
		                        </div>
                               </div>
                              </div>
                              
                           <div class="col-md-12">
                            <div class="col-md-6">
		                     <div class="form-group">
		                       <label class="control-label col-lg-4">Dokter Aktif</label>
		                        <div class="col-lg-8">
		                         <select name="dok_aktif" class="form-control">
                                 <option value="">----</option>
                                 <option value="Ya">Ya</option>
                                 <option value="Tidak">Tidak</option>
                                 </select>
		                        </div>
		                      </div>
                            </div>
                          <div class="form-group">
                            <div class="col-md-6">
		                      <label class="control-label col-lg-4">Dokter Luar</label>
		                        <div class="col-lg-8">
		                         <select name="dok_luar" class="form-control">
                                 <option value="">----</option>
                                 <option value="Ya">Ya</option>
                                 <option value="Tidak">Tidak</option>
                                 </select>
		                        </div>
		                       </div>
		                      </div>
                             </div>
                       
                        <div class="form-group input-group">
            			<input type="submit" name="submit" value="Simpan" class="btn btn-primary btn-md">
          			    </div>
                        </form>
		               </div>
                        <div class="modal-footer">
		                <button type="button" class="btn btn-warning" data-dismiss="modal"> Batal</button>
	        </div>
	    </div>
	</div>
	<!-- END Modal Tambah -->
      
      
    </div>
         


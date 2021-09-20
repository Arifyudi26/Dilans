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
          <h5 class="panel-title">Tabel Informasi Laboratorium</h5>

          <div class="heading-elements">
            <ul class="icons-list">
              <li><a data-action="collapse"></a></li>
            </ul>
          </div>
        </div>
         <div class="panel panel-flat">
        <div class="panel-heading">
          <p><a class="btn btn-primary" href="<?php echo base_url('Admin/input_lab');?>"><i class="glyphicon glyphicon-plus"></i> Tambah Data</a>

  			<a class="btn btn-danger" href="<?php echo base_url('Admin/cetak_lab_pdf');?>" target="_blank"><i class="glyphicon glyphicon-print"></i> PDF</a>
			<a class="btn btn-success" href="<?php echo base_url('Admin/cetak_lab_excel');?>"><i class="glyphicon glyphicon-print"></i> Excel</a></p>
            </div>

        <table class="table datatable-basic" width="100%">
          <thead>
            <tr>
              <th width="30px;">No.</th>
              <th>Pemeriksaan Lab</th>
              <th>Tarif</th>
              <th>Tgl Berlaku</th>
              <th>Keterangan</th>
              <th>Action</th>
              <!--<th class="text-center" width="230"></th>-->
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($lab as $baris) {
            ?>
              <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $baris->PEMERIKSAAN_LAB; ?></td>
                <td><?php echo $baris->TARIF; ?></td>
                <td><?php echo $baris->TGL_BERLAKU; ?></td>
                <td><?php echo $baris->KETERANGAN; ?></td>
                 <td class="center">
        			 <form action="" method="post" id="delete">
           			 <input type="hidden" name="empty" value="empty">            
            		 <input type="hidden" name="id_obat" value="<?php echo $baris->ID_DT_LAB; ?>">            
      				 </form>        
                     <a  data-toggle="modal" data-target="#tambah-data" class="btn btn-primary"><i class="glyphicon glyphicon-pencil"></i> Edit</a> 
                     <button class="btn btn-danger" form="delete"><i class="glyphicon glyphicon-trash"></i></button>
        
      		  </td>
              </tr>
            <?php
            $no++;
            } ?>
          </tbody>
        </table>
      </div>
      <!-- /basic datatable -->
    </div>

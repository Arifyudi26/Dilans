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
      <div class="panel panel-flat">
        <div class="panel-heading">
          <h5 class="panel-title">Tabel Informasi Data Obat</h5>

          <div class="heading-elements">
            <ul class="icons-list">
              <li><a data-action="collapse"></a></li>
            </ul>
          </div>
        </div>

        <table class="table datatable-basic" width="100%">
          <thead>
            <tr>
              <th width="30px;">No.</th>
              <th>ID Obat</th>
              <th>Nama Obat</th>
              <th>Satuan Obat</th>
              <th>Pilih Obat</th>
              <!--<th class="text-center" width="230"></th>-->
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($obat as $baris) {
            ?>
              <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $baris->ID_OBAT; ?></td>
                <td><?php echo $baris->NAMA_OBAT; ?></td>
                <td><?php echo $baris->SATUAN; ?></td>
                <td>
                  <button type="submit" class="btn btn-sm btn-success"><i class="glyphicon glyphicon-shopping-cart"></i> Add</button>
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

<?php
$un = $this->session->userdata('Puskesmas-sawah-besar@2017');
?>
<!-- Main content -->
<div class="content-wrapper">
  <br><br><br>
  <!-- Content area -->
  <div class="content">

    <!-- Dashboard content -->
    <div class="row">
      <div class="panel panel-flat">
        <img src="assets/images/login_cover.jpg" alt="Logo-Header" style="max-width:1100px;width:100%;max-height:200px;height:100%;">
      </div>
    </div>
    <!-- /dashboard content -->

    <div class="row">
      <!-- Basic datatable -->
      <div class="panel panel-flat">
        <div class="panel-heading">
          <h5 class="panel-title">Tabel Informasi Kartu Bayi dan Balita</h5>

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
              <th>No bayi</th>
              <th>Nama Lengkap</th>
              <th>Nama Ibu</th>
              <th>Nama Ayah</th>
              <th>Alamat</th>
              <th>Tgl Lahir</th>
              <th>Jam Lahir</th>
              <th>Jenis Kelamin</th>
              <th>Berat Badan</th>
              <th>Panjang</th>
              <th>Keadaan Lahir</th>
              <th>Keadaan Pulang</th>
              <th></th>
              <!--<th class="text-center" width="230"></th>-->
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($data_bayi as $baris) {
            ?>
              <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $baris->NO_BAYI; ?></td>
                <td><?php echo $baris->NAMA_LENGKAP; ?></td>
                <td><?php echo $baris->NAMA_IBU; ?></td>
                <td><?php echo $baris->NAMA_AYAH; ?></td>
                <td><?php echo $baris->ALAMAT; ?></td>
                <td><?php echo $baris->TGL_LAHIR; ?></td>
                <td><?php echo $baris->JAM_LAHIR; ?></td>
                <td><?php echo $baris->JENIS_KELAMIN; ?></td>
                <td><?php echo $baris->BERAT_BADAN; ?></td>
                <td><?php echo $baris->PANJANG_BAYI; ?></td>
                <td><?php echo $baris->KEADAAN_LAHIR; ?></td>
                <td><?php echo $baris->KEADAAN_PULANG; ?></td>
               
              </tr>
            <?php
            $no++;
            } ?>
          </tbody>
        </table>
      </div>
      <!-- /basic datatable -->
    </div>

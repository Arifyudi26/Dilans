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
          <h5 class="panel-title">Tabel Informasi Data Pemeriksaan Balita (1 Tahun - 5 Tahun)</h5>

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
              <th>Kode Pasien</th>
              <th>Nama Lengkap</th>
              <th>jenis Kelamin</th>
              <th>Umur</th>
              <th>Alamat</th>
              <th>Keluhan</th>
              <th>ASI Eksklusif</th>
              <th>MP ASI</th>
              <th>SDI DTK</th>
              <th>Diagnosis</th>
              <th>Status Gizi</th>
              <th>Vitamin A</th>
              <th>Tgl Masuk</th>
              <th>Integrasi Program</th>
              <th>Dirujuk ke</th>
              <th>Keterangan</th>
              <th></th>
              <!--<th class="text-center" width="230"></th>-->
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($balita as $baris) {
            ?>
              <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $baris->KODE_PASIEN; ?></td>
                <td><?php echo $baris->NAMA_LENGKAP; ?></td>
                <td><?php echo $baris->JENIS_KELAMIN; ?></td>
                <td><?php echo $baris->UMUR; ?></td>
                <td><?php echo $baris->ALAMAT; ?></td>
                <td><?php echo $baris->KELUHAN; ?></td>
                <td><?php echo $baris->ASI_EKSKLUSIF; ?></td>
                <td><?php echo $baris->MP_ASI; ?></td>
                <td><?php echo $baris->SDI_DK; ?></td>
                <td><?php echo $baris->DIAGNOSIS; ?></td>
                <td><?php echo $baris->STATUS_GIZI; ?></td>
                <td><?php echo $baris->VITAMIN_ANAK; ?></td>
                <td><?php echo $baris->TGL_PRIKSA; ?></td>
                <td><?php echo $baris->INTEGRASI_PROGRAM; ?></td>
                <td><?php echo $baris->DIRUJUK_KE; ?></td>
                 <td><?php echo $baris->KETERANGAN; ?></td>
               
              </tr>
            <?php
            $no++;
            } ?>
          </tbody>
        </table>
      </div>
      <!-- /basic datatable -->
    </div>

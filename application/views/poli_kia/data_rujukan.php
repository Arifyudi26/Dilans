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
          <h5 class="panel-title">Tabel Informasi Data Rujukan Internal</h5>

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
              <th>ID Rujukan</th>
              <th>Kode Pasien</th>
              <th>Nama Lengkap</th>
              <th>Jenis Kelamin</th>
              <th>Umur</th>
              <th>Alamat</th>
              <th>No BPJS</th>
              <th>Poli Pengirim</th>
              <th>Petugas Pengirim</th>
              <th>Tanggal</th>
              <th>Kepada yth</th>
              <th>Poli Rujukan</th>
              <th>Pemeriksaan</th>
              <th>Icd Sementara</th>
              <th>Terapi</th>
              <th></th>
              <!--<th class="text-center" width="230"></th>-->
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($rujukan as $baris) {
            ?>
              <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $baris->ID_RUJUKAN; ?></td>
                <td><?php echo $baris->KODE_PASIEN; ?></td>
                <td><?php echo $baris->NAMA_LENGKAP; ?></td>
                <td><?php echo $baris->JENIS_KELAMIN; ?></td>
                <td><?php echo $baris->UMUR; ?></td>
                <td><?php echo $baris->ALAMAT; ?></td>
                <td><?php echo $baris->NO_BPJS; ?></td>
                <td><?php echo $baris->POLI_PENGIRIM; ?></td>
                <td><?php echo $baris->PETUGAS_PENGIRIM; ?></td>
                <td><?php echo $baris->TANGGAL; ?></td>
                <td><?php echo $baris->KEPADA_YTH; ?></td>
                <td><?php echo $baris->POLI_RUJUKAN; ?></td>
                <td><?php echo $baris->PEMERIKSAAN; ?></td>
                <td><?php echo $baris->ICD_SEMENTARA; ?></td>
                <td><?php echo $baris->TERAPI; ?></td>
              </tr>
            <?php
            $no++;
            } ?>
          </tbody>
        </table>
      </div>
      <!-- /basic datatable -->
    </div>

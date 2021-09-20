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
          <h5 class="panel-title">Tabel Informasi Data Kartu TB</h5>

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
              <th>ID Kartu TB</th>
              <th>Kode Pasien</th>
              <th>Nama Lengkap</th>
              <th>Jenis Kelamin</th>
              <th>Alamat</th>
              <th>Nama PMO</th>
              <th>Alamat PMO</th>
              <th>No Telpon PMO</th>
              <th>Tgl Masuk</th>
              <th>Hasil Pemeriksaan Uji</th>
              <th>Uji Tuberkulin</th>
              <th>Hasil FNAB</th>
              <th>Uji Selain Dahak</th>
              <th>RiwayaT DM</th>
              <th>Hasil Tes DM</th>
              <th>Terapi DM</th>
              <th>Tipe Diagnosa</th>
              <th></th>
              <!--<th class="text-center" width="230"></th>-->
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($kartu_tb as $baris) {
            ?>
              <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $baris->KARTU_PPTB; ?></td>
                <td><?php echo $baris->KODE_PASIEN; ?></td>
                <td><?php echo $baris->NAMA_LENGKAP; ?></td>
                <td><?php echo $baris->JENIS_KELAMIN; ?></td>
                <td><?php echo $baris->ALAMAT; ?></td>
                <td><?php echo $baris->NAMA_PMO; ?></td>
                <td><?php echo $baris->ALAMAT_PMO; ?></td>
                <td><?php echo $baris->TELPON_PMO; ?></td>
                <td><?php echo $baris->TGL_MASUK; ?></td>
                <td><?php echo $baris->HASIL_PEM_UJI; ?></td>
                <td><?php echo $baris->UJI_TUBERKULIN; ?></td>
                <td><?php echo $baris->HASIL_FNAB; ?></td>
                <td><?php echo $baris->UJI_SELAIN_DAHAK; ?></td>
                <td><?php echo $baris->RIWAYAT_DM; ?></td>
                <td><?php echo $baris->HASIL_TES_DM; ?></td>
                <td><?php echo $baris->TERAPI_DM; ?></td>
                <td><?php echo $baris->TIPE_DIAGNOSIS; ?></td>
              </tr>
            <?php
            $no++;
            } ?>
          </tbody>
        </table>
      </div>
      <!-- /basic datatable -->
    </div>

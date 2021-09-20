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
          <h5 class="panel-title">Tabel Informasi Data Poli Gigi</h5>

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
              <th>ID Poli Kia</th>
              <th>Kode Pasien</th>
              <th>No Ibu</th>
              <th>Nama Lengkap</th>
              <th>No BPJS</th>
              <th>Tgl Pemeriksaan</th> 
              <th>Cara Masuk</th>
              <th>Usia Kelinis</th>
              <th>Terimester Ke</th>
              <th>Anamnesis</th>
              <th>Berat Badan</th>
              <th>Tekanan Darah</th>
              <th>LILA</th>
              <th>TFU</th>
              <th>Status Gizi</th>
              <th>Refleks Patella</th>
              <th>Detak Jantung Janin</th>
              <th>Berat Janin</th>
              <th>KPL Terhadap PAP</th>
              <th>Presentasi</th>
              <th>Jumlah Janin</th>
              <th>Status Imunisasi</th>
              <th>Tgl Terdetiksi</th>
              <th>Terdeteksi Oleh</th>
              <th>Komplikasi</th>
              <th>Di Rujuk </th>
              <th>Keadaan</th>
              <th>Keterangan</th>
              <th></th>
              <!--<th class="text-center" width="230"></th>-->
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($kia as $baris) {
            ?>
              <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $baris->ID_POLI_KIA; ?></td>
                <td><?php echo $baris->KODE_PASIEN; ?></td>
                <td><?php echo $baris->NO_IBU; ?></td>
                <td><?php echo $baris->NAMA_LENGKAP; ?></td>
                <td><?php echo $baris->NO_BPJS; ?></td>
                 <td><?php echo $baris->TGL_PEMERIKSAAN; ?></td>
                <td><?php echo $baris->CARA_MASUK; ?></td>
                <td><?php echo $baris->USIA_KLINIIS; ?></td>
                <td><?php echo $baris->TRIMESTER_KE; ?></td>
                <td><?php echo $baris->ANAMNESIS; ?></td>
                <td><?php echo $baris->BERAT_BADAN; ?></td>
                <td><?php echo $baris->TEKANAN_DARAH; ?></td>
                <td><?php echo $baris->LILA; ?></td>
                <td><?php echo $baris->TFU; ?></td>
                <td><?php echo $baris->STATUS_GIZI; ?></td>
                <td><?php echo $baris->REFLEKS_PATELLA; ?></td>
                <td><?php echo $baris->DETAK_JANTUNG_JANIN; ?></td>
                <td><?php echo $baris->T_BERAT_JANIN; ?></td>
                <td><?php echo $baris->KPL_TERHADAP_PAP; ?></td>
                <td><?php echo $baris->PRESENTASI; ?></td>
                <td><?php echo $baris->JUMLAH_JANIN; ?></td>
                <td><?php echo $baris->STATUS_IMUNISASI; ?></td>
                <td><?php echo $baris->TGL_TERDETEKSI; ?></td>
                <td><?php echo $baris->TERDETEKSI_OLEH; ?></td>
                <td><?php echo $baris->KOMPLIKASI; ?></td>
                <td><?php echo $baris->DIRUJUK_KE; ?></td>
                <td><?php echo $baris->KEADAAN; ?></td>
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

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
          <h5 class="panel-title">Tabel Informasi Data Pemeriksaan Neonatus (6 Jam - 28 Hari)</h5>

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
              <th>Id Neonatus</th>
              <th>Nama Lengkap</th>
              <th>Umur</th>
              <th>Tgl Masuk</th>
              <th>No BPJS</th>
              <th>KN</th>
              <th>Nakes</th>
              <th>ASI Eksklusif</th>
              <th>Pencegahan</th>
              <th>Integrasi Program</th>
              <th>Diagnosis</th>
              <th>Klasifikasi MTBM</th>
              <th>Keadaan Pulang</th>
              <th>Dirujuk ke</th>
              <th></th>
              <!--<th class="text-center" width="230"></th>-->
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($neonatus as $baris) {
            ?>
              <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $baris->ID_NEONATUS; ?></td>
                <td><?php echo $baris->NAMA_LENGKAP; ?></td>
                <td><?php echo $baris->UMUR; ?></td>
                <td><?php echo $baris->TGL_MASUK; ?></td>
                <td><?php echo $baris->NO_BPJS; ?></td>
                <td><?php echo $baris->KN; ?></td>
                <td><?php echo $baris->NAKES; ?></td>
                <td><?php echo $baris->ASI_EKSKLUSIF; ?></td>
                <td><?php echo $baris->PENCEGAHAN; ?></td>
                <td><?php echo $baris->INTEGRASI_PROGRAM; ?></td>
                <td><?php echo $baris->DIAGNOSIS; ?></td>
                 <td><?php echo $baris->KLASIFIKASI_MTBM; ?></td>
                  <td><?php echo $baris->KEADAAN_PULANG; ?></td>
                   <td><?php echo $baris->DIRUJUK_KE; ?></td>
               
              </tr>
            <?php
            $no++;
            } ?>
          </tbody>
        </table>
      </div>
      <!-- /basic datatable -->
    </div>

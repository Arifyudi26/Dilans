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
          <h5 class="panel-title">Tabel Informasi Data Poli TB</h5>

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
              <th>ID Poli TB</th>
              <th>Kode Pasien</th>
              <th>Nama Lengkap</th>
              <th>Jenis Kelamin</th>
              <th>Umur</th>
              <th>Alamat</th>
              <th>No BPJS</th>
              <th>K Penyakit</th>
              <th>Diagnosa</th>
              <th>Follow Up</th>
              <th>Bulan Ke</th>
              <th>No.reg TB</th>
              <th>NO Iden Sediaan</th>
              <th>Tgl Peng Dahak</th>
              <th>Tgl Peng Sediaan</th>
              <th>Nama Peng Spesimen</th>
              <th>Nanah Lendir</th>
              <th>Bercak Darah</th>
              <th>Air Liur</th>
              <th></th>
              <!--<th class="text-center" width="230"></th>-->
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($poli_tb as $baris) {
            ?>
              <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $baris->ID_POLI_TB; ?></td>
                <td><?php echo $baris->KODE_PASIEN; ?></td>
                <td><?php echo $baris->NAMA_LENGKAP; ?></td>
                <td><?php echo $baris->JENIS_KELAMIN; ?></td>
                <td><?php echo $baris->UMUR; ?></td>
                <td><?php echo $baris->ALAMAT; ?></td>
                <td><?php echo $baris->NO_BPJS; ?></td>
                <td><?php echo $baris->KLASIFIKASI_PENYAKIT; ?></td>
                <td><?php echo $baris->DIAGNOSA; ?></td>
                <td><?php echo $baris->FOLLOW_UP; ?></td>
                <td><?php echo $baris->BULAN_KE; ?></td>
                <td><?php echo $baris->NO_REG_TB; ?></td>
                <td><?php echo $baris->NO_IDEN_SEDIAAN; ?></td>
                <td><?php echo $baris->TGL_PENG_DAHAK; ?></td>
                <td><?php echo $baris->TGL_PENG_SEDIAAN; ?></td>
                <td><?php echo $baris->NAMA_PENG_SPESIMEN; ?></td>
                <td><?php echo $baris->NANAH_LENDIR; ?></td>
                <td><?php echo $baris->BERCAK_DARAH; ?></td>
                <td><?php echo $baris->AIR_LIUR; ?></td>
              </tr>
            <?php
            $no++;
            } ?>
          </tbody>
        </table>
      </div>
      <!-- /basic datatable -->
    </div>

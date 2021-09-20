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
          <h5 class="panel-title">Tabel Informasi Data Perkara Direktorat Kriminal Umum</h5>

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
              <th>No. Laporan Polisi (LP)</th>
              <th>Tanggal/Bln/Tahun</th>
              <th>Pasal / Perkara</th>
              <th>Penyidik</th>
              <th>Status Perkara</th>
              <!--<th class="text-center" width="230"></th>-->
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($perkara as $baris) {
            ?>
              <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $baris->nomor; ?></td>
                <td><?php echo $baris->tgl; ?></td>
                <td><?php echo $baris->pasal; ?></td>
                <td><?php echo $baris->penyidik; ?></td>
                <td><?php echo $baris->status; ?></td>
              </tr>
            <?php
            $no++;
            } ?>
          </tbody>
        </table>
      </div>
      <!-- /basic datatable -->
    </div>

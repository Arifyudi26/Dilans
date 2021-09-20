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
          <h5 class="panel-title">Tabel Informasi Data Kartu Ibu</h5>

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
              <th>No Ibu</th>
              <th>Kode Pasien</th>
              <th>Nama Lengkap</th>
              <th>Tempat Tgl Lahir</th>
              <th>Umur</th> 
              <th>Alamat Domisili</th>
              <th>Agama</th>
              <th>Pendidikan</th>
              <th>Pekerjaan</th>
              <th>Golongan Darah</th>
              <th>Nama Suami</th>
              <th>No Telpon</th>
              <th>Tgl Registrasi</th>
              <th>No Bpjs</th>
              <th>Gravida</th>
              <th>Partus</th>
              <th>Abortus</th>
              <th>Hidup</th>
              <th>Tgl Periksa</th>
              <th>Tgl HPHT</th>
              <th>Taksiran Bersalin</th>
              <th>BB Sblm Hamil</th>
              <th>Tinggi Badan</th>
              <th>Riwayat Komplikasi</th>
              <th>Penyakit Kronis/Alergi </th>
              <th>Tgl Ren Bersalin</th>
              <th>Penolong</th>
              <th>Tempat</th>
              <th>Pendamping</th>
              <th>Transportasi</th>
              <th>Pendonor</th>
              <th></th>
              <!--<th class="text-center" width="230"></th>-->
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($ibu as $baris) {
            ?>
              <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $baris->NO_IBU; ?></td>
                <td><?php echo $baris->KODE_PASIEN; ?></td>
                <td><?php echo $baris->NAMA_LENGKAP; ?></td>
                <td><?php echo $baris->TEMPAT_TGL_LAHIR; ?></td>
                 <td><?php echo $baris->UMUR; ?></td>
                <td><?php echo $baris->ALAMAT_DOMISILI; ?></td>
                <td><?php echo $baris->AGAMA; ?></td>
                <td><?php echo $baris->PENDIDIKAN; ?></td>
                <td><?php echo $baris->PEKERJAAN; ?></td>
                <td><?php echo $baris->GOL_DARAH; ?></td>
                <td><?php echo $baris->NAMA_SUAMI; ?></td>
                <td><?php echo $baris->NO_TELPON; ?></td>
                <td><?php echo $baris->TGL_REGISTRASI; ?></td>
                <td><?php echo $baris->NO_BPJS; ?></td>
                <td><?php echo $baris->GRAVIDA; ?></td>
                <td><?php echo $baris->PARTUS; ?></td>
                <td><?php echo $baris->ABORTUS; ?></td>
                <td><?php echo $baris->HIDUP; ?></td>
                <td><?php echo $baris->TGL_PERIKSA; ?></td>
                <td><?php echo $baris->TGL_HPHT; ?></td>
                <td><?php echo $baris->TAKSIRAN_BERSALIN; ?></td>
                <td><?php echo $baris->BB_SBLM_HAMIL; ?></td>
                <td><?php echo $baris->TINGGI_BADAN; ?></td>
                <td><?php echo $baris->RIWAYAT_KOMPLIKASI; ?></td>
                <td><?php echo $baris->PENYAKIT_KRONIS_ALERGI; ?></td>
                <td><?php echo $baris->TGL_REN_BERSALIN; ?></td>
                <td><?php echo $baris->PENOLONG; ?></td>
                 <td><?php echo $baris->TEMPAT; ?></td>
                  <td><?php echo $baris->PENDAMPING; ?></td>
                   <td><?php echo $baris->TRANSPORTASI; ?></td>
                    <td><?php echo $baris->PENDONOR; ?></td>
                   
              </tr>
            <?php
            $no++;
            } ?>
          </tbody>
        </table>
      </div>
      <!-- /basic datatable -->
    </div>

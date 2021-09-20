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
      <!-- Basic datatable -->
      <div class="panel panel-flat">
        <img src="assets/images/login_cover.jpg" alt="Logo-Header" style="max-width:1100px;width:100%;max-height:200px;height:100%;">
      </div>
      <div class="alert alert-warning alert-dismissible" role="alert">
         <button type="button" class="close" data-dismiss="alert" aria-label="Close">
           <span aria-hidden="true">&times; &nbsp;</span>
         </button>
         <strong>Selamat datang, <?php echo ucwords($un); ?>!</strong>.
          <link rel="icon" href="<?php echo base_url('assets/img/icon_puskes.png')?>">
      </div>
      <!-- /basic datatable -->
    </div>
    <!-- /dashboard content -->

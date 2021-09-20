<?php
$cek    = $user->result();
$nama   = $cek[0]->username;
$level  = $cek[0]->level;

$menu 		= strtolower($this->uri->segment(1));
$sub_menu = strtolower($this->uri->segment(2));
?>

<!DOCTYPE html>
<html lang="en">

<!-- Mirrored from demo.interface.club/limitless/layout_2/LTR/default/index.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 25 Apr 2017 11:59:08 GMT -->
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<base href="<?php echo base_url();?>"/>
     <link rel="icon" href="<?php echo base_url('assets/img/icon_puskes.png')?>">
	<title><?php echo ucwords($level); ?> | <?php echo ucwords($nama); ?></title>

	<!-- Global stylesheets -->
	<link href="assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
	<link href="assets/css/bootstrap.css" rel="stylesheet" type="text/css">
	<link href="assets/css/core.css" rel="stylesheet" type="text/css">
	<link href="assets/css/components.css" rel="stylesheet" type="text/css">
	<link href="assets/css/colors.css" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="assets/js/plugins/loaders/pace.min.js"></script>
     <script>
      var baseurl = "<?php echo base_url("index.php/"); ?>"; // Buat variabel baseurl untuk nanti di akses pada file config.js
      </script>
      <script type="text/javascript" src="assets/js/core/libraries/jquery.min.js"></script>
      <script src="<?php echo base_url("js/config_kartu_ibu.js"); ?>"></script> <!-- Load file process.js -->
	<script type="text/javascript" src="assets/js/core/libraries/bootstrap.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/loaders/blockui.min.js"></script>
	<!-- /core JS files -->

	<?php
	if ($sub_menu == "") {?>
	<!-- Theme JS files -->
	<script type="text/javascript" src="assets/js/plugins/visualization/d3/d3.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/visualization/d3/d3_tooltip.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/styling/switchery.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/styling/uniform.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/selects/bootstrap_multiselect.js"></script>
	<script type="text/javascript" src="assets/js/plugins/ui/moment/moment.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/daterangepicker.js"></script>

	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<script type="text/javascript" src="assets/js/pages/dashboard.js"></script>
	<!-- /theme JS files -->
	<?php
	} ?>

	<?php
	if ($sub_menu == "input_poli_kia") {
	?>
	<script type="text/javascript" src="assets/js/plugins/notifications/jgrowl.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/ui/moment/moment.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/daterangepicker.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/anytime.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/pickadate/picker.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/pickadate/picker.date.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/pickadate/picker.time.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/pickadate/legacy.js"></script>

	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<script type="text/javascript" src="assets/js/pages/picker_date.js"></script>
	<?php
	} ?>

	<?php
	if ($sub_menu == "data_poli_kia") {?>
	<!-- Theme JS files -->
	<script type="text/javascript" src="assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/selects/select2.min.js"></script>

	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<script type="text/javascript" src="assets/js/pages/datatables_basic.js"></script>
	<!-- /theme JS files -->
	<?php
	} ?>
    
    <?php
	if ($sub_menu == "input_terapi_obat") {
	?>
	<script type="text/javascript" src="assets/js/plugins/notifications/jgrowl.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/ui/moment/moment.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/daterangepicker.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/anytime.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/pickadate/picker.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/pickadate/picker.date.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/pickadate/picker.time.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/pickadate/legacy.js"></script>

	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<script type="text/javascript" src="assets/js/pages/picker_date.js"></script>
	<?php
	} ?>

	<?php
	if ($sub_menu == "data_obat") {?>
	<!-- Theme JS files -->
	<script type="text/javascript" src="assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/selects/select2.min.js"></script>

	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<script type="text/javascript" src="assets/js/pages/datatables_basic.js"></script>
	<!-- /theme JS files -->
	<?php
	} ?>
    
    <?php
	if ($sub_menu == "data_resep") {?>
	<!-- Theme JS files -->
	<script type="text/javascript" src="assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/selects/select2.min.js"></script>

	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<script type="text/javascript" src="assets/js/pages/datatables_basic.js"></script>
	<!-- /theme JS files -->
	<?php
	} ?>
    
    
        <?php
	if ($sub_menu == "input_kartu_ibu") {
	?>
	<script type="text/javascript" src="assets/js/plugins/notifications/jgrowl.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/ui/moment/moment.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/daterangepicker.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/anytime.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/pickadate/picker.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/pickadate/picker.date.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/pickadate/picker.time.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/pickadate/legacy.js"></script>

	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<script type="text/javascript" src="assets/js/pages/picker_date.js"></script>
	<?php
	} ?>

	<?php
	if ($sub_menu == "data_kartu_ibu") {?>
	<!-- Theme JS files -->
	<script type="text/javascript" src="assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/selects/select2.min.js"></script>

	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<script type="text/javascript" src="assets/js/pages/datatables_basic.js"></script>
	<!-- /theme JS files -->
	<?php
	} ?>
    
    
     <?php
	if ($sub_menu == "input_rujukan") {
	?>
	<script type="text/javascript" src="assets/js/plugins/notifications/jgrowl.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/ui/moment/moment.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/daterangepicker.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/anytime.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/pickadate/picker.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/pickadate/picker.date.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/pickadate/picker.time.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/pickadate/legacy.js"></script>

	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<script type="text/javascript" src="assets/js/pages/picker_date.js"></script>
	<?php
	} ?>

	<?php
	if ($sub_menu == "data_rujukan") {?>
	<!-- Theme JS files -->
	<script type="text/javascript" src="assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/selects/select2.min.js"></script>

	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<script type="text/javascript" src="assets/js/pages/datatables_basic.js"></script>
	<!-- /theme JS files -->
	<?php
	} ?>
    
      <?php
	if ($sub_menu == "input_umb_rujukan") {
	?>
	<script type="text/javascript" src="assets/js/plugins/notifications/jgrowl.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/ui/moment/moment.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/daterangepicker.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/anytime.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/pickadate/picker.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/pickadate/picker.date.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/pickadate/picker.time.js"></script>
	<script type="text/javascript" src="assets/js/plugins/pickers/pickadate/legacy.js"></script>

	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<script type="text/javascript" src="assets/js/pages/picker_date.js"></script>
	<?php
	} ?>

	<?php
	if ($sub_menu == "data_umb_rujukan") {?>
	<!-- Theme JS files -->
	<script type="text/javascript" src="assets/js/plugins/tables/datatables/datatables.min.js"></script>
	<script type="text/javascript" src="assets/js/plugins/forms/selects/select2.min.js"></script>

	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<script type="text/javascript" src="assets/js/pages/datatables_basic.js"></script>
	<!-- /theme JS files -->
	<?php
	} ?>
    
    


</head>
<body>

	<!-- Main navbar -->
	<div class="navbar navbar-default navbar-fixed-top header-highlight">
		<div class="navbar-header">
			<a class="navbar-brand" href=""><img src="assets/images/logo_icon_light.png" alt=""></a>

			<ul class="nav navbar-nav visible-xs-block">
				<li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
				<li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>
		</div>

		<div class="navbar-collapse collapse" id="navbar-mobile">
			<ul class="nav navbar-nav">
				<li><a class="sidebar-control sidebar-main-toggle hidden-xs"><i class="icon-paragraph-justify3"></i></a></li>
			</ul>

			<ul class="nav navbar-nav navbar-right">
				<li class="dropdown dropdown-user">
					<a class="dropdown-toggle" data-toggle="dropdown">
						<img src="foto/default.png" alt="">
						<span><?php echo ucwords($nama); ?></span>
						<i class="caret"></i>
					</a>

					<ul class="dropdown-menu dropdown-menu-right">
						<!--<li><a href="web/profile"><i class="icon-user"></i> Profile</a></li>
						<li class="divider"></li>-->
						<li><a href="web/logout"><i class="icon-switch2"></i> Logout</a></li>
					</ul>
				</li>
			</ul>
		</div>
	</div>
	<!-- /main navbar -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main sidebar -->
			<div class="sidebar sidebar-main sidebar-fixed">
				<div class="sidebar-content">

					<!-- User menu -->
					<div class="sidebar-user">
						<div class="category-content">
							<div class="media">
								<a href="web/profile" class="media-left"><img src="foto/default.png" class="img-circle img-sm" alt=""></a>
								<div class="media-body">
									<span class="media-heading text-semibold"><?php echo ucwords($nama); ?></span>
									<div class="text-size-mini text-muted">
										<i class="icon-pin text-size-small"></i> &nbsp;<?php echo $level; ?>
									</div>
								</div>
							</div>
						</div>
					</div>
					<!-- /user menu -->


					<!-- Main navigation -->
					<div class="sidebar-category sidebar-category-visible">
						<div class="category-content no-padding">
							<ul class="navigation navigation-main navigation-accordion">

								<!-- Main -->
								<li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
								<li class="<?php if ($sub_menu == "") { echo 'active';}?>"><a href="poli_kia"><i class="icon-home4"></i> <span>Beranda</span></a></li>
                                
                               <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-tasks"></i>Data Kartu Ibu <b class="caret"></b></a>
                               <ul class="dropdwon-menu">
                                
                                 <li class="<?php if ($sub_menu == "input_kartu_ibu") { echo 'active';}?>"><a href="poli_kia/input_kartu_ibu"><i class="icon-file-text3"></i> <span>Input Kartu Ibu</span></a></li>

								<li class="<?php if ($sub_menu == "data_kartu_ibu") { echo 'active';}?>"><a href="poli_kia/data_kartu_ibu"><i class="icon-table"></i> <span>Tabel Data Ibu </span></a></li>
                               </ul>
                               </li>
                               
                               <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-tasks"></i>Data Poli Kia<b class="caret"></b></a>
                              <ul class="dropdwon-menu">
                              <li class="<?php if ($sub_menu == "input_poli_kia") { echo 'active';}?>"><a href="poli_kia/input_poli_kia"><i class="icon-file-text3"></i> <span>Input Data Poli Kia </span></a></li>

								<li class="<?php if ($sub_menu == "data_poli_kia") { echo 'active';}?>"><a href="poli_kia/data_poli_kia"><i class="icon-table"></i> <span>Tabel Data Poli Kia </span></a></li>
                                </ul>
                                </li>
                               
                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-tasks"></i>Data Terapi Obat <b class="caret"></b></a>
                               <ul class="dropdwon-menu">
                                
                                 <li class="<?php if ($sub_menu == "data_obat") { echo 'active';}?>"><a href="poli_kia/data_obat"><i class="icon-file-text3"></i> <span>Data obat</span></a></li>

								<li class="<?php if ($sub_menu == "data_resep") { echo 'active';}?>"><a href="poli_kia/data_resep"><i class="icon-table"></i> <span>Tabel Resep Obat</span></a></li>
                               </ul>
                               </li>
                               
                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-tasks"></i>Data Rujukan Internal <b class="caret"></b></a>
                               <ul class="dropdwon-menu">
                                
                                 <li class="<?php if ($sub_menu == "input_rujukan") { echo 'active';}?>"><a href="poli_kia/input_rujukan"><i class="icon-file-text3"></i> <span>Input Data  Rujukan</span></a></li>

								<li class="<?php if ($sub_menu == "data_rujukan") { echo 'active';}?>"><a href="poli_kia/data_rujukan"><i class="icon-table"></i> <span>Tabel Data Rujukan</span></a></li>
                               </ul>
                               </li>
                               
                                <li class="dropdown"><a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="glyphicon glyphicon-tasks"></i>Data Umb Rujukan<b class="caret"></b></a>
                               <ul class="dropdwon-menu">
                                
                                 <li class="<?php if ($sub_menu == "input_umb_rujukan") { echo 'active';}?>"><a href="poli_kia/input_umb_rujukan"><i class="icon-file-text3"></i> <span>Input UMB Rujukan</span></a></li>

								<li class="<?php if ($sub_menu == "data_umb_rujukan") { echo 'active';}?>"><a href="poli_kia/data_umb_rujukan"><i class="icon-table"></i> <span>Tabel UMB Rujukan</span></a></li>
                               </ul>
                               </li>
                               
                                
								<!-- /main -->

								<!-- Master -->
								<!--<li class="navigation-header"><span>Data Master</span> <i class="icon-menu" title=""></i></li>
								<li class="<?php if ($sub_menu == "t_pengguna") { echo 'active';}?>">
									<a href="#"><i class="icon-stack2"></i> <span>Master</span></a>
									<ul>
										<li class="<?php if ($sub_menu == "t_pengguna") { echo 'active';}?>"><a href="web/t_pengguna">Tambah Pengguna</a></li>
									</ul>
								</li>-->
								<li><a href="web/logout"><i class="icon-switch2"></i> <span>Logout </span></a></li>

								<!-- /master -->

							</ul>
						</div>
					</div>
					<!-- /main navigation -->

				</div>
			</div>
			<!-- /main sidebar -->

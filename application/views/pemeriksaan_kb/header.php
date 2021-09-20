<?php
$cek    = $user->result();
$nama   = $cek[0]->username;
$level  = $cek[0]->level;

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no">

	<base href="<?php echo base_url();?>"/>
     <link rel="icon" href="<?php echo base_url('assets/img/icon_puskes.png')?>">
	<title><?php echo ucwords($level); ?> | <?php echo ucwords($nama); ?></title>
    
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/themes/default/easyui.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/custom/css/style.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/themes/icon.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/themes/mobile.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/bootstrap-3.3.6/dist/css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url();?>assets/font-awesome-4.5.0/css/font-awesome.css">

    <script type="text/javascript" src="<?= base_url();?>assets/jquery.min.js"></script>
    <script type="text/javascript" src="<?= base_url();?>assets/jquery.easyui.min.js"></script>
    <script type="text/javascript" src="<?= base_url();?>assets/jquery.easyui.mobile.js"></script>
    <script type="text/javascript" src="<?= base_url();?>assets/custom.js"></script>

    


</head>
<body>
                          
						

<?php
$un = $this->session->userdata('Puskesmas-sawah-besar@2017');
?>
<!-- Main content -->
<div class="content-wrapper">
  <br><br><br>
  <!-- Content area -->
  <div class="content">

    <div class="row">
      <!-- Basic datatable -->
      <div class="panel panel-default">
        <div class="panel-heading">
          <h5 class="panel-title">Tabel Informasi Data Obat <a class="btn btn-primary" href="<?php echo base_url('index.php/medrec/load_cart');?>"><i class="glyphicon glyphicon-plus"></i> Atur Resep</a></h5>
          
          <div class="heading-elements">
            <ul class="icons-list">
              <li><a data-action="collapse"></a></li>
            </ul>
          </div>
        </div>
        <head> 
         <form method="post" action="<?php echo base_url();?>medrec/tambah" method="POST" accept-charset="utf-8">
         </head>
        <table class="table datatable-basic" width="100%">
          <thead>
            <tr>
              <th width="30px;">No.</th>
              <th>ID Obat</th>
              <th>Nama Obat</th>
              <th>Satuan Obat</th>
              <th>Pilih Obat</th>
              <!--<th class="text-center" width="230"></th>--> 
            </tr>
          </thead>
          <tbody>
            <?php
            $no = 1;
            foreach ($obat as $baris) {
            ?>
              <tr>
                <td><?php echo $no; ?></td>
                <td><?php echo $baris->ID_OBAT; ?></td>
                <td><?php echo $baris->NAMA_OBAT; ?></td>
                <td><?php echo $baris->SATUAN; ?></td>
                <td>
                <button class="add_cart btn btn-success btn-block" data-obatid="<?php echo $baris->ID_OBAT;?>" data-obatnama="<?php echo $baris->NAMA_OBAT;?>" data-obatsatuan="<?php echo $baris->SATUAN;?>"> Add</button
                </td>
              </tr>
            <?php
            $no++;
            } ?>
          </tbody>
        </table>
        </form>
      </div>
      <!-- /basic datatable -->
      </div>
      
<script type="text/javascript" src="<?php echo base_url().'assets/js/jquery-2.2.3.min.js'?>"></script>
<script type="text/javascript" src="<?php echo base_url().'assets/js/bootstrap.js'?>"></script>
<script type="text/javascript">
	$(document).ready(function(){
		$('.add_cart').click(function(){
			var produk_id    = $(this).data("obatid");
			var produk_nama  = $(this).data("obatnama");
			var produk_satuan = $(this).data("obatsatuan");
			var obat_qty    = $('#' + obat_id).val();
			$.ajax({
				url : "<?php echo base_url();?>index.php/medrec/tambah",
				method : "POST",
				data : {obat_id: obat_id, obat_nama: obat_nama, obat_satuan: obat_satuan, obat_qty: obat_qty},
				success: function(data){
					$('#detail_cart').html(data);
				}
			});
		});
      
	  // Load shopping cart
		$('#detail_cart').load("<?php echo base_url();?>index.php/medrec/load_cart");

      
    </script>

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
      <div class="panel panel-flat">
        <div class="panel-heading">
          <h5 class="panel-title">Daftar Resep obat</h5>

          <div class="heading-elements">
            <ul class="icons-list">
              <li><a data-action="collapse"></a></li>
            </ul>
          </div>
        </div>
       <form action="<?php echo base_url()?>medrec/ubah_cart" method="post" name="frmObat" id="frmObat" class="form-horizontal" enctype="multipart/form-data">
       <?php
       $cart = $this->cart->contents()
       ?>
       <table class="table">
       <tr id= "main_heading">
       <td width="2%">No</td>
		<td width="10%">Id Obat</td>
		<td width="20%">Nama Obat</td>
		<td width="12%">Satuan</td>
		<td width="8%">Qty</td>
		<td width="18%">Aturan</td>
		<td width="18%">Keterangan</td>
		<td width="10%">Hapus</td>
		</tr>
		<?php
		$grand_total = 0;
		$no = 1;

		foreach ($cart as $obat):
		?>
        <input type="hidden" name="cart[<?php echo $obat['id'];?>][id]" value="<?php echo $obat['id'];?>" />
		<input type="hidden" name="cart[<?php echo $obat['id'];?>][rowid]" value="<?php echo $obat['rowid'];?>" />
        <input type="hidden" name="cart[<?php echo $obat['id'];?>][nama]" value="<?php echo $obat['name'];?>" />
        <input type="hidden" name="cart[<?php echo $obat['id'];?>][satuan]" value="<?php echo $obat['satuan'];?>" />
        <input type="hidden" name="cart[<?php echo $obat['id'];?>][qty]" value="<?php echo $obat['qty'];?>" />
		<tr>
		<td><?php echo $no++; ?></td>
		<td><?php echo $obat['id']; ?></td>
		<td><?php echo $obat['name']; ?></td>
		<td><?php echo $obat['satuan']; ?></td>
		<td><input type="text" class="form-control input-sm" name="cart[<?php echo $obat['id'];?>][qty]" value="<?php echo $obat['qty'];?>" /></td>
		<td><input type="text" class="form-control input-sm" name="cart[<?php echo $obat['id'];?>][aturan]" value="" /></td>
		<td><input type="text" class="form-control input-sm" name="cart[<?php echo $obat['id'];?>][ket]" value="" /></td>
        <td><a href="<?php echo base_url()?>medrec/hapus/<?php echo $obat['rowid'];?>" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a></td>
		<?php endforeach; ?>
		</tr>
        <tr>
        <td colspan="3"><b>Total Obat:  <?php echo number_format($grand_total); ?></b></td>
        <td colspan="4" align="right">
        <a data-toggle="modal" data-target="#myModal"  class ='btn btn-sm btn-danger'>Kosongkan obat</a>
        <button class='btn btn-sm btn-success'  type="submit">Update obat</button>
        <a href="<?php echo base_url()?>poli_lansia/input_terapi_obat"  class ='btn btn-sm btn-primary'>Proses obat</a>
        </tr>

        </table>
		<?php 
		?>
        </form>


  <!-- Modal Penilai -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-md">
      <!-- Modal content-->
      <div class="modal-content">
      	<form method="post" action="<?php echo base_url()?>medrec/hapus/all">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Konfirmasi</h4>
        </div>
        <div class="modal-body">
			Anda yakin akan hapus semua obat?
            
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-sm btn-primary" data-dismiss="modal">Tidak</button>
          <button type="submit" class="btn btn-sm btn-default">Ya</button>
        </div>
        
        </form>
      </div>
      
    </div>
  </div>
  <!--End Modal-->

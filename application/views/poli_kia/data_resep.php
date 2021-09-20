<h2>Daftar Resep Obat</h2>
<form action="<?php echo base_url()?>poli_kia/ubah_cart" method="post" name="frmObat" id="frmObat" class="form-horizontal" enctype="multipart/form-data">
<?php
    ($cart = $this->cart->contents())
   
		
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
// Create form and send all values in "shopping/update_cart" function.
$grand_total = 0;
$i = 1;

foreach ($cart as $item):
?>
<input type="hidden" name="cart[<?php echo $item['id'];?>][id_obat]" value="<?php echo $item['id_obat'];?>" />
<input type="hidden" name="cart[<?php echo $item['id'];?>][rowid]" value="<?php echo $item['rowid'];?>" />
<input type="hidden" name="cart[<?php echo $item['id'];?>][nama_obat]" value="<?php echo $item['nama_obat'];?>" />
<input type="hidden" name="cart[<?php echo $item['id'];?>][satuan_obat]" value="<?php echo $item['satuan_obat'];?>" />
<input type="hidden" name="cart[<?php echo $item['id'];?>][qty]" value="<?php echo $item['qty'];?>" />
<tr>
<td><?php echo $i++; ?></td>
<td><?php echo $item['id_obat']; ?></td>
<td><?php echo $item['nama_obat']; ?></td>
<td><?php echo $item['satuan_obat']; ?></td>
<td><input type="text" class="form-control input-sm" name="cart[<?php echo $item['id'];?>][qty]" value="<?php echo $item['qty'];?>" /></td>
<td><input type="text" class="form-control input-sm" name="cart[<?php echo $item['id'];?>][aturan]" value="" /></td>
<td><input type="text" class="form-control input-sm" name="cart[<?php echo $item['id'];?>][ket]" value="" /></td>
<td><a href="<?php echo base_url()?>medrec/hapus/<?php echo $item['rowid'];?>" class="btn btn-sm btn-danger"><i class="glyphicon glyphicon-remove"></i></a></td>
<?php endforeach; ?>
</tr>
<tr>
<td colspan="3"><b>Total Obat:  <?php echo number_format($grand_total); ?></b></td>
<td colspan="4" align="right">
<a data-toggle="modal" data-target="#myModal"  class ='btn btn-sm btn-danger'>Kosongkan Cart</a>
<button class='btn btn-sm btn-success'  type="submit">Update Cart</button>
<a href="<?php echo base_url()?>poli_kia/input_terapi_obat"  class ='btn btn-sm btn-primary'>Proses obat</a>
</tr>

</table>
</form>


  <!-- Modal Penilai -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog modal-md">
      <!-- Modal content-->
      <div class="modal-content">
      	<form method="post" action="<?php echo base_url()?>ambil_obat/hapus/all">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Konfirmasi</h4>
        </div>
        <div class="modal-body">
			Anda yakin mau mengosongkan Resep Obat?
            
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
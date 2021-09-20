             <script>
		       var baseurl = "<?php echo base_url("index.php/"); ?>"; // Buat variabel baseurl untuk nanti di akses pada file config.js
               </script>
               
        <form id="fm_pemeriksaan" action="<?= base_url().$menu_link->controller;?>/insert" method="post" enctype="multipart/form-data">
		    <table width="100%">
		    	<tr><td colspan="2" height="5"></td></tr>
		    	<tr>
		    		<td>
		    			<table width="85%" cellpadding="0" cellspacing="0">
                         <tr>
                            
                               <td width="100" ><label style="font-size:12px">No Faskes KB</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="nkfk" id="nkfk" value="<?=$group->NO_KD_FASKES_KB;?>" data-options="required:true" style="height:30px;width:130px"> <label style="font-size:12px">Noser kartu</label>  <input class="easyui-textbox" type="text" name="nsk" id="nsk" value="<?=$group->NO_SERI_KARTU;?>" data-options="required:true" style="height:30px;width:140px"></input> 					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
		    				<tr>

					            <td width="300" ><label style="font-size:12px">Kode Pasien</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="kd_pasien" id="kd_pasien" value="<?=$group->KODE_PASIEN;?>" data-options="required:true" style="height:30px;width:200px"></input> <a href="javascript:void(0)" class="easyui-linkbutton form-button" style="height:30px;" iconCls="icon-search" id="btn-search" onClick="search();">Cari</a>
                                			                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>

					            <td width="300" ><label style="font-size:12px">Nama Pasien</label></td>
					            <td >
                               <input name="nm_lengkap" class="form-control"  type="text" id="nama" value="<?=$group->NAMA_LENGKAP;?>" data-options="required:true" style="height:30px;width:300px">	
	            	           <input type="hidden" name="status" id="status" value="<?=$group->status;?>" style="height:15px;width:250px;"></input>
                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>

					            <td width="300" ><label style="font-size:12px">TT Lahir</label></td>
					            <td >
                                <input class="form-control" type="text" name="tt_lahir" id="tt_lahir" value="<?=$group->TEMPAT_TGL_LAHIR;?>" data-options="required:true" style="height:30px;width:300px"></input>					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>

					            <td width="300" ><label style="font-size:12px">Umur</label></td>
					            <td >
                                <input class="form-control" type="text" name="umur" id="umur" value="<?=$group->UMUR;?>" data-options="required:true" style="height:30px;width:300px"></input>					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>

					            <td width="300" ><label style="font-size:12px">Pendidikan</label></td>
					            <td >
                                <input class="form-control" type="text" name="pendidikan" id="pendidikan" value="<?=$group->PENDIDIKAN;?>" data-options="required:true" style="height:30px;width:300px"></input>					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>

					            <td width="300" ><label style="font-size:12px">Pekerjaan</label></td>
					            <td >
                                <input class="form-control" type="text" name="pekerjaan" id="pekerjaan" value="<?=$group->PEKERJAAN;?>" data-options="required:true" style="height:30px;width:300px"></input>					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             <tr>
					        	<td ><label style="font-size:12px">Alamat</label></td>
					    		<td >
					    			<input class="form-control" type="text" name="alamat" id="alamat" value="<?=$group->ALAMAT;?>" data-options="multiline:true" style="height:50px;width:350px"></input>
					    		</td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>

					            <td width="300" ><label style="font-size:12px">No Bpjs</label></td>
					            <td >
                                <input class="form-control" type="text"  name="bpjs" id="bpjs" value="<?=$group->NO_BPJS;?>" data-options="required:true" style="height:30px;width:300px"></input>					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             <tr>

					            <td width="300" ><label style="font-size:12px">Tahapan KS</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="tahapan" id="tahapan" value="<?=$group->TAHAPAN_KS;?>" data-options="required:true" style="height:30px;width:300px"></input>					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>

					            <td width="300" ><label style="font-size:12px">Nama Suami</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="ns" id="ns" value="<?=$group->NAMA_SUAMI;?>" data-options="required:true" style="height:25px;width:300px"></input>					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
            
					    </table>
					</td>
              

					<td align="" valign="top">
		    			<table width="50%" cellpadding="0" cellspacing="0">
		    				<tr>
		    					<td align="center" style="font-size:12px;background-color:#cccccc;width:200px;height:20px;border:1px solid black;text-valign:middle"><label >Id Pemeriksaan</label></td>
		    					<td align="center" style="font-size:12px;background-color:#cccccc;width:100px;height:20px;border:1px solid black;text-valign:middle"><label >Date</label></td>
		    				</tr>
		    				<tr><td colspan="2" height="2"></td></tr>
		    				<tr>
		    					<td align="right">
					    			<input class="easyui-textbox" name="id_pemeriksaan" id="id_pemeriksaan" value="<?=$group->ID_PEM_KB;?>" data-options="required:true" style="height:25px;width:200px" readonly="true"></input>
					    		</td>
					    		<td align="right">
					    			<input class="easyui-datebox" value="<?= $date_now;?>" data-options="editable:false" style="width:120px;height:25px" id="txt_date" name="txt_date">
					    		</td>
					    	</tr>
					    	<td width="100">&nbsp;</td>
		    			</table >
		    			<table width="80%" cellpadding="0" cellspacing="0">
                        <tr>
					            <td width="100"><label style="font-size:12px">Pendidikan Suami</label></td>
					            <td>
                                <select class="easyui-combobox"  id="pensum" name="pensum" style="height:30px;width:200px" data-options="required:true,value:'<?=$group->PENDIDIKAN_SUAMI;?>'">
                                <option value=""></option>
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                                <option value="SMA">SMA</option>
                                <option value="D1-Diploma 1">D1-Diploma 1</option>
                                <option value="D1-Diploma 2">D2-Diploma 2</option>
                                <option value="D3-Diploma 3">D3-Diploma 3</option>
                                <option value="S1-Strata 1">S1-Strata 1</option>
                                <option value="S2-Strata 2">S2-Strata 2</option>
                                <option value="S3-Strata 3">S3-Strata 3</option>
                                </select>              
                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             <tr>
					            <td width="100"><label style="font-size:12px">Pekerjaan Suami</label></td>
					            <td>
                               <select class="easyui-combobox" id="peksum" name="peksum" style="height:30px;width:200px" data-options="required:true,value:'<?=$group->PEKERJAAN_SUAMI;?>'">
                                <option value=""></option>
                                <option value="Pegawai Negri">Pegawai Negri</option>
                                <option value="Pegawai Swasta">Pegawai Swasta</option>
                                <option value="Pedagang">Pedagang</option>
                                </select>
                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             <tr>
					            <td width="100"><label style="font-size:12px">Jumlah Anak</label></td>
					            <td>
                                <input class="easyui-textbox" type="text" name="ja" id="ja" value="<?=$group->JUMLAH_ANAK;?>" data-options="required:true" style="height:30px;width:200px"></input>
                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             <tr>
					            <td width="100"><label style="font-size:12px">Umur Anak Terkecil</label></td>
					            <td>
                                <input class="easyui-textbox" type="text" name="uat" id="uat" value="<?=$group->UMUR_ANAK_TERKECIL;?>" data-options="required:true" style="height:30px;width:200px"></input>
                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             <tr>
					            <td width="100"><label style="font-size:12px">Status KB</label></td>
					            <td>
                               <select class="easyui-combobox"  id="sk" name="sk" style="height:30px;width:200px" data-options="required:true,value:'<?=$group->STATUS_KB;?>'">
                                <option value=""></option>
                                <option value="Baru Pertama Kali">Baru Pertama kali</option>
                                <option value="Berhenti Sesudah bersalin">Berhenti Sesudah bersalin</option>
                                <option value="Berhenti Sesudah Keguguran">Berhenti sesudah keguguran</option>
                                </select>              
                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             <tr>
					            <td width="100"><label style="font-size:12px">Cara KB Terakhir</label></td>
					            <td>
                              <select class="easyui-combobox" id="kt" name="kt" style="height:30px;width:200px" data-options="required:true,value:'<?=$group->CARA_KB_TERAKHIR;?>'">
                                <option value=""></option>
                                <option value="IUD">Baru Pertama kali</option>
                                <option value="Kondom">Berhenti Sesudah bersalin</option>
                                <option value="PILL">Berhenti sesudah keguguran</option>
                                <option value="MOW">MOW</option>
                                <option value="Implant">Implant</option>
                                <option value="Suntik">Suntik</option>
                                <option value="MOP">MOP</option>
                                </select>  
                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             <tr>
					            <td width="100"><label style="font-size:12px">Haid Terakhir Tgl</label></td>
					            <td>
                                <input class="easyui-datebox" type="text" name="htg" id="htg"  value="<?=$group->HAID_TERAKHIR_TGL;?>" data-options="required:true" style="height:25px;width:200px"></input>
                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             <tr>
					            <td width="100"><label style="font-size:12px">Dugaan Hamil</label></td>
					            <td>
                              <select class="easyui-combobox"  id="dh" name="dh" style="height:25px;width:200px" data-options="required:true,value:'<?=$group->DUGAAN_HAMIL;?>'">
                                <option value=""></option>
                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>
                                </select>             
                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            
                              <tr>

					            <td width="300" ><label style="font-size:12px">Berat Badan</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="bb" id="bb" value="<?=$group->BERAT_BADAN;?>" data-options="required:true" style="height:25px;width:200px"></input>                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             <tr>
					            <td width="100"><label style="font-size:12px">Tekanan darah</label></td>
					            <td>
                                <input class="easyui-textbox" type="text" name="td" id="td" value="<?=$group->TEKANAN_DARAH;?>" data-options="required:true" style="height:30px;width:200px"></input>
                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             
		    			</table>
		    		</td>
				</tr>
		    </table>
		</form>
	<div data-options="region:'south',title:'',iconCls:'icon-ok'" style="height:80px;border:none">
		 <table width="90%" cellpadding="0" cellspacing="0">
            <tr>
                <td>&nbsp;</td>
                <td align="right">
	                <a href="javascript:void(0)" class="easyui-linkbutton form-button save-button"  style="height:40px;" iconCls="icon-print" id="" onClick="save();">Print</a>
	                <!-- <a href="javascript:void(0)" class="easyui-linkbutton form-button" iconCls="icon-print" onclick="">Preview & Print</a> -->
	                <a href="javascript:void(0)" class="easyui-linkbutton form-button" iconCls="icon-cancel" style="height:40px;" onClick="parent.closePanel()">Cancel</a>	     
                </td>
             </tr>
         </table>
	</div>
</div>

<script type="text/javascript">
	
	function search(){
  $("#loading").show(); // Tampilkan loadingnya
  
  $.ajax({
        type: "POST", // Method pengiriman data bisa dengan GET atau POST
        url: baseurl + "Pem_poli_kb/search", // Isi dengan url/path file php yang dituju
        data: {kd : $("#kd_pasien").val()}, // data yang akan dikirim ke file proses
        dataType: "json",
        beforeSend: function(e) {
            if(e && e.overrideMimeType) {
                e.overrideMimeType("application/json;charset=UTF-8");
            }
    },
    success: function(response){ // Ketika proses pengiriman berhasil
            $("#loading").hide(); // Sembunyikan loadingnya
            
        if(response.status == "success"){ // Jika isi dari array status adalah success
        $("#nama").val(response.nama); // set textbox dengan id nama
		$("#umur").val(response.umur);
        $("#tt_lahir").val(response.tt_lahir); // set textbox dengan id jenis kelamin
		$("#pendidikan").val(response.pendidikan);
		$("#pekerjaan").val(response.pekerjaan)
		$("#alamat").val(response.alamat);
		$("#bpjs").val(response.bpjs);
      }else{ // Jika isi dari array status adalah failed
        $.messager.alert('warning','Data Tidak Ditemukan','warning');
      }
    },
        error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error
      alert(xhr.responseText);
        }
    });
}
$(document).ready(function(){
  $("#loading").hide(); // Sembunyikan loadingnya
  
    $("#btn-search").click(function(){ // Ketika user mengklik tombol Cari
        search(); // Panggil function search
    });
    
    $("#kd_pasien").keyup(function(){ // Ketika user menekan tombol di keyboard
    if(event.keyCode == 13){ // Jika user menekan tombol ENTER
      search(); // Panggil function search
    }
  });
});
	
	 function save(){
               save_data('fm_pemeriksaan');
			   }
	

    get_privillage('<?=$menu_link->MenuID;?>','dlg_<?=$menu_link->controller;?>','new');

</script>
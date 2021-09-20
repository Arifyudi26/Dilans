             </br>
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
					            <td width="300" ><label style="font-size:12px">Kode Pasien</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="kd_pasien" id="kd_pasien" data-options="required:true" style="height:35px;width:200px"></input> <a href="javascript:void(0)" class="easyui-linkbutton form-button" style="height:35px;" iconCls="icon-search" id="btn-search" onClick="search();">Cari</a>
                                			                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>

					            <td width="300" ><label style="font-size:12px">Nama Pasien</label></td>
					            <td >
                               <input name="nm_lengkap" class="form-control"  type="text" id="nama" data-options="required:true" style="height:35px;width:300px">	
	            	           <input type="hidden" name="status" id="status"  style="height:15px;width:250px;"></input>
	            	           <input type="hidden" name="id_pkb" id="id_pkb"  style="height:15px;width:250px;"></input>
                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                           
                            <tr>

					            <td width="300" ><label style="font-size:12px">Umur</label></td>
					            <td >
                                <input class="form-control" type="text" name="umur" id="umur"  data-options="required:true" style="height:35px;width:300px"></input>					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            
                            <tr>
					            <td width="300" ><label style="font-size:12px">No Bpjs</label></td>
					            <td >
                                <input class="form-control" type="text"  name="bpjs" id="bpjs"  data-options="required:true" style="height:35px;width:300px"></input>					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            
                             <tr>
					            <td width="300" ><label style="font-size:12px">Hiad terakhir</label></td>
					            <td >
                                <input class="form-control" type="text"  name="htt" id="htt"  data-options="required:true" style="height:35px;width:300px"></input>					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             <tr>

					            <td width="300" ><label style="font-size:12px">Berat Badan</label></td>
					            <td >
                                <input class="form-control" type="text" name="bb" id="bb"  data-options="required:true" style="height:35px;width:200px"></input>                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            
                            <tr>
                            
                               <td width="300" ><label style="font-size:12px">Tekanan Darah</label></td>
					            <td >
                                <input class="form-control" type="text" name="td" id="td"  data-options="required:true" style="height:35px;width:200px"></input> 					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             <tr>
					            <td width="300" ><label style="font-size:12px">Tgl Datang</label></td>
					            <td >
                                <input class="easyui-datebox" type="text"  name="tgld" id="tgld"  data-options="required:true" style="height:35px;width:200px"></input>					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             
            
					    </table>
					</td>
              

					<td align="" valign="top">
		    			<table width="90%" cellpadding="0" cellspacing="0">
		    				<tr>
		    					<td align="center" style="font-size:12px;background-color:#cccccc;width:250px;height:20px;border:1px solid black;text-valign:middle"><label >Id Kunjungan Kb</label></td>
		    					<td align="center" style="font-size:12px;background-color:#cccccc;width:250px;height:20px;border:1px solid black;text-valign:middle"><label >Date</label></td>
		    				</tr>
		    				<tr><td colspan="2" height="2"></td></tr>
		    				<tr>
		    					<td align="right">
					    			<input class="easyui-textbox" name="id_kkb" id="id_kkb" value="<?=$TransNumber;?>" data-options="required:true" style="height:25px;width:250px" readonly="true"></input>
					    		</td>
					    		<td align="right">
					    			<input class="easyui-datebox" value="<?= $date_now;?>" data-options="editable:false" style="width:180px;height:25px" id="txt_date" name="txt_date">
					    		</td>
					    	</tr>
					    	<td width="100">&nbsp;</td>
		    			</table >
		    			<table width="90%" cellpadding="0" cellspacing="0">
                            <tr>
                            
                               <td width="150" ><label style="font-size:12px">Komplikasi Berat</label></td>
					            <td >
					    			<input class="easyui-textbox" type="text" name="klb" id="klb" data-options="multiline:true,required:true" style="height:50px;width:280px"></input>
                             </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             <tr>
                               <td width="100" ><label style="font-size:12px">Kegagalan</label></td>
					            <td >
                               <select class="easyui-combobox" id="gagal" name="kegagalan" style="height:35px;width:280px" data-options="required:true">
                                <option value=""></option>
                                <option value="IUD">IUD</option>
                                <option value="Kondom">Kondom</option>
                                <option value="PILL">PIll</option>
                                <option value="MOW">MOW</option>
                                <option value="Implant">Implant</option>
                                <option value="Suntik">Suntik</option>
                                <option value="MOP">MOP</option>
                                </select>					                               
                                 </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             <tr>
                            
                               <td width="100" ><label style="font-size:12px">Pemeriksaan</label></td>
					            <td >
					    			<input class="easyui-textbox" type="text" name="pemeriksaan" id="pemeriksaan" data-options="multiline:true,required:true" style="height:70px;width:280px"></input>
                             </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>
                            
                               <td width="100" ><label style="font-size:12px">Tgl Kembali</label></td>
					            <td >
                                <input class="easyui-datebox" type="text" name="tgk" id="tgk"  data-options="required:true" style="height:35px;width:280px"></input> 					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             <tr>
					            <td width="50" ><label style="font-size:12px">Penanggung Jawab</label></td>
					            <td >
					            <select class="easyui-combogrid" style="width:280px;height:35px" id="pj" name="pj" data-options="
							            panelWidth: 500,
							            idField: 'NAMA_DOKTER',
							            textField: 'NAMA_DOKTER',
							            url: 'get_list_dokter',
							            method: 'get',
							            required:true,
							            columns: [[
							                {field:'ID_DOKTER',title:'Id Dokter',width:100},
							                {field:'NAMA_DOKTER',title:'Nama Dokter',width:150},
                                            {field:'SPESIALIST',title:'Spesialist',width:150},
							            ]],
							            fitColumns: true
							        ">
							    </select>
					            </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
		    			</table>
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
	                <a href="javascript:void(0)" class="easyui-linkbutton form-button save-button"  style="height:40px;" iconCls="icon-save" id="" onClick="save();">Save</a>
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
        url: baseurl + "Kunjungan_kb/search", // Isi dengan url/path file php yang dituju
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
		$("#bpjs").val(response.bpjs);
		$("#htt").val(response.htt);
		$("#bb").val(response.bb);
		$("#td").val(response.td);
		$("#id_pkb").val(response.id_pkb);
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
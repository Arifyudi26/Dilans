            <br>
             <script>
		       var baseurl = "<?php echo base_url("index.php/"); ?>"; // Buat variabel baseurl untuk nanti di akses pada file config.js
               </script>
               
        <form id="fm_umb" action="<?= base_url().$menu_link->controller;?>/insert" method="post" enctype="multipart/form-data">
		    <table width="100%">
		    	<tr><td colspan="2" height="5"></td></tr>
		    	<tr>
		    		<td>
		    			<table width="85%" cellpadding="0" cellspacing="0">
		    				<tr>

					            <td width="300" ><label style="font-size:12px">Kode Pasien</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="kd_pasien" id="kd_pasien" onKeyPress="search();" data-options="required:true" style="height:35px;width:200px"></input><a href="javascript:void(0)" class="easyui-linkbutton form-button" style="height:35px;" iconCls="icon-search" id="btn-search" onClick="search();">Cari</a>
                                			                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>

					            <td width="300" ><label style="font-size:12px">Nama Pasien</label></td>
					            <td >
                               <input name="nm_lengkap" class="form-control"  type="text"id="nama" data-options="required:true" style="height:35px;width:300px">	
	            	           <input type="hidden" name="status" id="status"  style="height:15px;width:250px;"></input>
                               <input type="hidden" name="id_poli" id="id_poli"  style="height:15px;width:250px;"></input>
                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>

					            <td width="300" ><label style="font-size:12px">Jenis Kelamin</label></td>
					            <td >
                                <input class="form-control" type="text" name="jenis" id="jenis"  data-options="required:true" style="height:35px;width:300px"></input>					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>

					            <td width="300" ><label style="font-size:12px">Umur</label></td>
					            <td >
                                <input class="form-control" type="text" name="umur" id="umur"  data-options="required:true" style="height:35px;width:300px"></input>					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             <tr>
					        	<td ><label style="font-size:12px">Alamat</label></td>
					    		<td >
					    			<textarea class="form-control" type="text" name="alamat" id="alamat" data-options="multiline:true" style="height:50px;width:350px"></textarea>
					    		</td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>

					            <td width="300" ><label style="font-size:12px">No Bpjs</label></td>
					            <td >
                                <input class="form-control" type="text"  name="bpjs" id="bpjs"  data-options="required:true" style="height:35px;width:300px"></input>					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>
					            <td width="200" ><label style="font-size:12px">Poli Pengirim</label></td>
					            <td >
					            <select class="easyui-combogrid" style="width:300px;height:35px" id="poli_pengirim" name="poli_pengirim" data-options="
							            panelWidth: 500,
							            idField: 'NAMA_UNIT',
							            textField: 'NAMA_UNIT',
							            url: 'get_list_poli',
							            method: 'get',
							            required:true,
							            columns: [[
							                {field:'ID_UNIT',title:'Id unit',width:100},
							                {field:'NAMA_UNIT',title:'Nama Unit',width:150},
							            ]],
							            fitColumns: true
							        ">
							    </select>
					            </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>

					            <td width="300" ><label style="font-size:12px">Petugas Pengirim</label></td>
					            <td >
					            <select class="easyui-combogrid" style="width:300px;height:35px" id="petugas" name="petugas" data-options="
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
                              <tr>

					            <td width="300" ><label style="font-size:12px">Kepada Yth</label></td>
					             <td >
					             <select class="easyui-combogrid" style="width:300px;height:35px" id="yth" name="yth" data-options="
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
					</td>
              

					<td align="" valign="top">
		    			<table width="50%" cellpadding="0" cellspacing="0">
		    				<tr>
		    					<td align="center" style="font-size:12px;background-color:#cccccc;width:200px;height:20px;border:1px solid black;text-valign:middle"><label >Id Umb Rujukan Lansia</label></td>
		    					<td align="center" style="font-size:12px;background-color:#cccccc;width:200px;height:20px;border:1px solid black;text-valign:middle"><label >Date</label></td>
		    				</tr>
		    				<tr><td colspan="2" height="2"></td></tr>
		    				<tr>
		    					<td align="right">
					    			<input class="easyui-textbox" name="id_umb_umum" id="id_umb_umum" value="<?=$TransNumber;?>" data-options="required:true" style="height:25px;width:200px" readonly="true"></input>
					    		</td>
					    		<td align="right">
					    			<input class="easyui-datebox" value="<?= $date_now;?>" data-options="editable:false" style="width:200px;height:25px" id="txt_date" name="txt_date">
					    		</td>
					    	</tr>
					    	<td width="100">&nbsp;</td>
		    			</table >
		    			<table width="85%" cellpadding="0" cellspacing="0">
                         <tr>
					            <td width="200" ><label style="font-size:12px">Poli UMB</label></td>
					            <td >
					      <select class="easyui-combogrid" style="width:300px;height:35px" id="poli_umb" name="poli_umb" data-options="
							            panelWidth: 500,
							            idField: 'NAMA_UNIT',
							            textField: 'NAMA_UNIT',
							            url: 'get_list_poli',
							            method: 'get',
							            required:true,
							            columns: [[
							                {field:'ID_UNIT',title:'Id unit',width:100},
							                {field:'NAMA_UNIT',title:'Nama Unit',width:150},
							            ]],
							            fitColumns: true
							        ">
							    </select>
								
                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                        <tr>
					        	<td ><label style="font-size:12px">Hasil Pemeriksaan</label></td>
					    		<td >
					    			<textarea class="easyui-textbox" type="text" name="hasil" id="hasil" data-options="multiline:true,required:true" style="height:85px;width:300px"></textarea>
					    		</td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                              <tr>
					        	<td ><label style="font-size:12px">Tindakan/Terapi</label></td>
					    		<td >
					    			<textarea class="easyui-textbox" type="text" name="terapi" id="terapi" data-options="multiline:true,required:true" style="height:85px;width:300px"></textarea>
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
	                <a href="javascript:void(0)" class="easyui-linkbutton form-button save-button"  style="height:40px;" iconCls="icon-save" id="" onClick="save()">Save</a>
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
        url: baseurl + "Umb_rujukan_lansia/search", // Isi dengan url/path file php yang dituju
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
        $("#jenis").val(response.jenis); // set textbox dengan id jenis kelamin
		$("#umur").val(response.umur);
		$("#alamat").val(response.alamat);
		$("#bpjs").val(response.bpjs);
		$("#id_poli").val(response.id_poli);
      }else{ // Jika isi dari array status adalah failed
       	 $.messager.alert('warning','Maaf Data tidak ditemukan!','warning');
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
    
});
	
	function save(){
               save_data('fm_umb');
			   }
	

    get_privillage('<?=$menu_link->MenuID;?>','dlg_<?=$menu_link->controller;?>','new');

</script>
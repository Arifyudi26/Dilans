             <script>
		       var baseurl = "<?php echo base_url("index.php/"); ?>"; // Buat variabel baseurl untuk nanti di akses pada file config.js
               </script>
               
        <form id="fm_pgizi" action="<?= base_url().$menu_link->controller;?>/insert" method="post" enctype="multipart/form-data">
		    <table width="100%">
		    	<tr><td colspan="2" height="5"></td></tr>
		    	<tr>
		    		<td>
		    			<table width="85%" cellpadding="0" cellspacing="0">
		    				<tr>

					            <td width="300" ><label style="font-size:12px">Kode Pasien</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="kd_pasien" id="kd_pasien" onKeyUp="btn-search" data-options="required:true" style="height:30px;width:200px"></input> <a href="javascript:void(0)" class="easyui-linkbutton form-button" style="height:30px;" iconCls="icon-search" id="btn-search" onClick="search();">Cari</a>
                                			                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>

					            <td width="300" ><label style="font-size:12px">Nama Pasien</label></td>
					            <td >
                               <input name="nm_lengkap" class="form-control"  type="text"id="nama" data-options="required:true" style="height:30px;width:300px">	
	            	           <input type="hidden" name="status" id="status"  style="height:15px;width:250px;"></input>
                               <input type="hidden" name="id_berobat" id="id_berobat"  style="height:15px;width:250px;"></input>
                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>

					            <td width="300" ><label style="font-size:12px">Tempat Tgl Lahir</label></td>
					            <td >
                                <input class="form-control" type="text" name="tt_lahir" id="tt_lahir"  data-options="required:true" style="height:30px;width:300px"></input>					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>

					           <td ><label style="font-size:12px">Alamat</label></td>
					    		<td >
					    			<input class="form-control" type="text" name="alamat" id="alamat" data-options="multiline:true,required:true" style="height:50px;width:350px"></input>
					    		</td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             <tr>

					            <td width="300" ><label style="font-size:12px">No Bpjs</label></td>
					            <td >
                                <input class="form-control" type="text" name="bpjs" id="bpjs"  data-options="required:true" style="height:30px;width:300px"></input>					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             <tr>
					        	<td ><label style="font-size:12px">Nama Ortu</label></td>
					    		<td >
                                <input class="easyui-textbox" type="text" name="no" id="no"  data-options="required:true" style="height:30px;width:300px"></input>						
                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>

					            <td width="300" ><label style="font-size:12px">Pekerjaan Ortu</label></td>
					            <td >
                                <input class="easyui-textbox" type="text"  name="po" id="po"  data-options="required:true" style="height:30px;width:300px"></input>					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             <tr>
					        	<td ><label style="font-size:12px">Anak Ke dari.?</label></td>
					    		<td >
                                <input class="easyui-textbox" type="text"  name="akd" id="akd"  data-options="required:true" style="height:30px;width:300px"></input>   		
                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             <tr>

					            <td width="300" ><label style="font-size:12px">Diagnosa Medis</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="diagnosa" id="diagnosa"  data-options="required:true" onfocus="choose_list_diagnosa();" style="height:30px;width:90px"><input class="easyui-textbox" type="text" name="deskripsi" id="deskripsi"  data-options="required:true" style="height:30px;width:180px"></input><a href="javascript:void(0)" class="easyui-linkbutton form-button" style="height:30px;" iconCls="icon-add" id="" onClick="cari();"></a>                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             <tr><td colspan="2" height="5"></td></tr>
                            <tr>

					            <td width="300" ><label style="font-size:12px">BB lahir</label></td>
					            <td >
                                <input class="easyui-textbox" type="text"  name="bbl" id="bbl"  data-options="required:true" style="height:30px;width:300px"></input>					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             
					    </table>
					</td>
              

					<td align="" valign="top">
		    			<table width="50%" cellpadding="0" cellspacing="0">
		    				<tr>
		    					<td align="center" style="font-size:12px;background-color:#cccccc;width:200px;height:20px;border:1px solid black;text-valign:middle"><label >Id Pem gizi Anak</label></td>
		    					<td align="center" style="font-size:12px;background-color:#cccccc;width:140px;height:20px;border:1px solid black;text-valign:middle"><label >Date</label></td>
		    				</tr>
		    				<tr><td colspan="2" height="2"></td></tr>
		    				<tr>
		    					<td align="right">
					    			<input class="easyui-textbox" name="id_pga" id="id_pga" value="<?=$TransNumber;?>" data-options="required:true" style="height:25px;width:200px" readonly="true"></input>
					    		</td>
					    		<td align="right">
					    			<input class="easyui-datebox" value="<?= $date_now;?>" data-options="editable:false" style="width:160px;height:25px" id="txt_date" name="txt_date">
					    		</td>
					    	</tr>
					    	<td width="100">&nbsp;</td>
		    			</table >
		    			<table width="80%" cellpadding="0" cellspacing="0">
                        <tr>
					        	<td width="300" ><label style="font-size:12px">PB lahir</label></td>
					    		<td >
                                <input class="easyui-textbox" type="text"  name="pbl" id="pbl"  data-options="required:true" style="height:30px;width:250px"></input>   		
                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                        <tr>
					            <td width="100"><label style="font-size:12px">Umur Kehamilan</label></td>
					            <td>
                                <input class="easyui-textbox" type="text" name="uk" id="uk"  data-options="required:true" style="height:30px;width:250px"></input>
                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                          <tr>

					            <td width="300" ><label style="font-size:12px">Kelahiran</label></td>
					            <td >
          					   <select class="easyui-combobox" style="width:250px;" id="kelahiran" name="kelahiran" data-options="required:true">
                                <option value=""></option>
                                <option value="Tunggal">Tunggal</option>
                                <option value="Kembar">Kembar</option>
                                </select>                               
                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             <tr>
					            <td width="100"><label style="font-size:12px">Tinggi Badan</label></td>
					            <td>
                                <input class="easyui-textbox" type="text" name="tb" id="tb"  data-options="required:true" style="height:30px;width:200px"></input>
                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                              <tr>

					            <td width="300" ><label style="font-size:12px">Berat Badan</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="bb" id="bb"  data-options="required:true" style="height:30px;width:200px"></input>                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>

					            <td width="300" ><label style="font-size:12px">IMT</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="imt" id="imt"  data-options="required:true" style="height:30px;width:250px"></input>    
                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>
                            
                               <td width="300" ><label style="font-size:12px">Biokimia</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="bio" id="bio"  data-options="required:true" style="height:30px;width:250px"></input> 					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             <tr>
					        	<td ><label style="font-size:12px">Fisik Klinis</label></td>
					    		<td >
					    			<input class="easyui-textbox" type="text" name="fk" id="fk" data-options="multiline:true,required:true" style="height:65px;width:250px"></input>
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

<!--  Dialog list item -->
<div id="dialog_list_item" class="easyui-dialog" title="List diagnosa" style="width:50%;height:500px;background-color:#F8F8F8;padding:5px;top:5px" closed="true" data-options="modal:true" buttons="#dialog_buttton_list_item">
    <form id="form_item" method="post" novalidate>
        <table width="97%" border="0">

        	<tr>
        		<td colspan="3" height="15"></td>
        	</tr>

            <tr>
                <td width="100" align="left" valign="middle"><label style="font-size:12px">Id Diagnosa</label></td>
                <td width="14"><b>:</b></td>

                <td colspan="2">
                    <input type="text" style="height:25px;width:300px" name="id_diagnosa" id="id_diagnosa" placeholder="< Id Diagnosa >" onkeyup="search_list_diagnosa();" />
                </td>
            </tr>
            <tr>
        		<td colspan="3" height="8"></td>
        	</tr>
            <tr>
                <td width="100" align="left" valign="middle"><label style="font-size:12px">Des ICD</label></td>
                <td><b>:</b></td>

                <td colspan="2">
                    <input type="text" style="height:25px;width:300px" name="des_icd" id="des_icd" placeholder="< Des icd >" onkeyup="search_list_diagnosa();" />
                </td>
            </tr>

            <tr>
        		<td colspan="3" height="15"></td>
        	</tr>
	
            <tr>
                <td colspan="3">
                    <table id="list_diagnosa" class="easyui-datagrid" 
                        url="<?= base_url().$menu_link->controller;?>/get_list_diagnosa" 
                        singleSelect="true"  pageSize="8" 
                        style="height:250px" data-options = "">
                        <thead>
                            <tr>
                                <th data-options="field:'ck',checkbox:true"></th>
                                <th field="ID_DIAGNOSA" data-options="field:'ID_DIAGNOSA',width:100" sortable="true">Id Diagnosa</th>
                                <th field="DESKRIPSI_ICD" data-options="field:'DESKRIPSI_ICD',width:185" sortable="true">Deskripsi ICD</th>
                                <th field="SUB_ICD" data-options="field:'SUB_ICD',width:170" sortable="true">Sub ICD</th>
                            </tr>
                        </thead>
                    </table>
                </td>
            </tr>
        </table>
    </form>
</div>

<!-- Dialog Button -->
<div id="dialog_buttton_list_item" style="border:none;height:80px">
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-ok" onClick="choose_list_diagnosa();">OK</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onClick="modal_close('dialog_list_item');">Cancel</a>
</div>

<script type="text/javascript">
	
	function search(){
  $("#loading").show(); // Tampilkan loadingnya
  
  $.ajax({
        type: "POST", // Method pengiriman data bisa dengan GET atau POST
        url: baseurl + "Pem_gizi_anak/search", // Isi dengan url/path file php yang dituju
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
		$("#tt_lahir").val(response.tt_lahir);
		$("#alamat").val(response.alamat);
		$("#bpjs").val(response.bpjs);
		$("#id_berobat").val(response.id_berobat);
      }else{ // Jika isi dari array status adalah failed
        		 $.messager.alert('warning','Data Tidak Ditemukan!','warning');
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
               save_data('fm_pgizi');
			   }
			   
	function cari() {
	       
	   	 var kd_pasien = $('#kd_pasien').val();
		 var nm_pasien = $('#nm_lengkap').val();
	     if(kd_pasien !='' && nm_pasien!=""){
        		$('#dialog_list_item').dialog('open');
        	}else{
        		 $.messager.alert('warning','Silahkan isi data dan pemeriksaan terlebih dahulu!','warning');
        	}
	}
	
	function search_list_diagnosa(){
    	$('#list_diagnosa').datagrid('reload',{
    		id_diagnosa 	: $('#id_diagnosa').val(),
    		des_icd 	: $('#des_icd').val(),
    	});

    }
	

   function choose_list_diagnosa(){

	  var row =  $('#list_diagnosa').datagrid('getChecked');
	  
	  var id_diagnosa 	='';
	  var diagnosa  = '';

        $.each(row, function( index,value) {
            id_diagnosa 	=(value.ID_DIAGNOSA);
			diagnosa    =(value.DESKRIPSI_ICD);
        });

        $('#diagnosa').textbox('setValue',id_diagnosa);
		$('#deskripsi').textbox('setValue',diagnosa);

	    modal_close('dialog_list_item');
	}

    get_privillage('<?=$menu_link->MenuID;?>','dlg_<?=$menu_link->controller;?>','new');

</script>
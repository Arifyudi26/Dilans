<?php
$un = $this->session->userdata('Puskesmas-sawah-besar@2017');
?>
<div class="easyui-layout" style="height:450px;width:100%">
	<div data-options="region:'east',split:true" title="Filter" style="width:20%;height:450px">
		<br>
		<p><input class="easyui-textbox" type="text" name="txt_id" id="txt_id" data-options="prompt:'Id Daftar Lab'" style="height:25px;width:200px"></p>
		<p><input class="easyui-textbox" type="text" name="txt_no" id="txt_no" data-options="prompt:'Kd pasien'" style="height:25px;width:200px"></p>
		<p><input class="easyui-textbox" type="text" name="txt_desc" id="txt_desc" data-options="prompt:'Nama Pasien'" style="height:25px;width:200px"></p>
		<p><label><input type="checkbox" name="chkdate" id="chkdate" onclick="change_date()"></label></p>
		<p><label style="width:50px;padding-left:10px"><b>From</b></label><input class="easyui-datebox" value="<?= $date_now;?>" data-options="disabled:true" style="width:120px" id="date_from" name="date_form"></p>
		<p><label style="width:50px;padding-left:10px"><b>To</b></label><input class="easyui-datebox" value="<?= $date_now;?>" data-options="disabled:true" style="width:120px" id="date_to" name="date_to"></p>
		<p><a href="javascript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-search'" style="width:80px;float:right" id="search" name="search" onclick="search_data()">Search</a></p>
	</div>
	<div data-options="region:'center',title:'List <?=$menu_link->MenuLabel;?>',iconCls:'icon-ok'" style="width:80%;height:450px">
		<table class="easyui-datagrid" title="" style="width:100%;height:397px" id="grid"
		        data-options="
		        rownumbers:true,
		        singleSelect:true,
		        pagination:true,
                pageSize:20,
		        url:'<?= base_url().$menu_link->controller;?>/ajax',
		        method:'get',
		        toolbar:toolbar,
			">
		    <thead>
		        <tr>
		            <th data-options="field:'ID_DAFTAR_LAB',width:120">Id daftar lab</th>
		            <th data-options="field:'KODE_PASIEN',width:120,align:'center'">Kd pasien</th>
		            <th data-options="field:'NAMA_LENGKAP',width:150">Nama Pasien</th>
                    <th data-options="field:'UMUR',width:150">Umur</th>
                    <th data-options="field:'ALAMAT',width:150">Alamat</th>
                    <th data-options="field:'NO_BPJS',width:150">No bpjs</th>
                     <th data-options="field:'TGL_MASUK',width:150">Tgl Masuk</th>
                     <th data-options="field:'nama',width:150">Nama Dokter</th>
                     <th data-options="field:'ID_DT_LAB',width:150">Id dt lab</th>
                     <th data-options="field:'PEMERIKSAAN_LAB',width:150">Pemeriksaan Lab</th>
                     <th data-options="field:'ID_BEROBAT',width:150">Id berobat</th>
		            <th data-options="field:'lev',width:150,align:'center'">Last User</th>
		            <th data-options="field:'CREATE_DATE',width:250,align:'center'">Date</th>
		            <th data-options="field:'status',width:250,align:'center'" hidden="true">Status</th>
		        </tr>
		    </thead>
		</table>
	</div>
</div>

<!--  Dialog list item -->
<div id="dialog_list_pasien" class="easyui-dialog" title="List pasien" style="width:50%;height:500px;background-color:#F8F8F8;padding:5px;top:5px" closed="true" data-options="modal:true" buttons="#dialog_buttton_list_pasien">
    <form id="form_pasien" method="post" novalidate>
        <table width="97%" border="0">
        	<tr>
        		<td colspan="3" height="15"></td>
        	</tr>
            <tr>
                <td width="100" align="left" valign="middle"><label style="font-size:12px">Kode pasien</label></td>
                <td width="14"><b>:</b></td>
                <td colspan="2">
                    <input type="text" style="height:25px;width:300px" name="kd_pasien" id="kd_pasien" placeholder="< kode pasien >" onKeyUp="search_list_pasien();" />
                </td>
            </tr>
            <tr>
        		<td colspan="3" height="8"></td>
        	</tr>
            <tr>
                <td width="100" align="left" valign="middle"><label style="font-size:12px">Nama pasien</label></td>
                <td><b>:</b></td>
                <td colspan="2">
                    <input type="text" style="height:25px;width:300px" name="nama" id="nama" placeholder="< nama pasien>" onKeyUp="search_list_pasien();" />
                </td>
            </tr>
            <tr>
        		<td colspan="3" height="15"></td>
        	</tr>
            <tr>
                <td colspan="3">
                    <table id="list_pasien" class="easyui-datagrid" 
                        url="<?= base_url().$menu_link->controller;?>/get_list_pasien" 
                        style="height:250px" data-options = "singleSelect:true,
                pageSize:8,">
                        <thead>
                            <tr>
                                <th data-options="field:'ck',checkbox:true"></th>
                                <th field="ID_BEROBAT" data-options="field:'ID_BEROBAT',width:100" sortable="true">Id Berobat</th>
                                <th field="KODE_PASIEN" data-options="field:'KODE_PASIEN',width:185" sortable="true">kode Pasien</th>
                                <th field="NAMA_LENGKAP" data-options="field:'NAMA_LENGKAP',width:170" sortable="true">Nama Pasien</th>
                                <th field="UMUR" data-options="field:'UMUR',width:170" sortable="true">Umur</th>
                                <th field="ALAMAT" data-options="field:'ALAMAT',width:170" sortable="true">alamat</th>
                                <th field="NO_BPJS" data-options="field:'NO_BPJS',width:170" sortable="true">Bpjs</th>
                            </tr>
                        </thead>
                    </table>
                </td>
            </tr>
        </table>
    </form>
</div>

<!-- Dialog Button -->
<div id="dialog_buttton_list_pasien" style="border:none;height:80px">
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-ok" onClick="choose_list_pasien();">OK</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onClick="modal_close('dialog_list_pasien');">Cancel</a>
</div>

<!--  Dialog list item -->
<div id="dialog_list_lab" class="easyui-dialog" title="List Pemeriksaan Lab" style="width:50%;height:500px;background-color:#F8F8F8;padding:5px;top:5px" closed="true" data-options="modal:true" buttons="#dialog_buttton_list_item">
    <form id="form_lab" method="post" novalidate>
        <table width="97%" border="0">
        	<tr>
        		<td colspan="3" height="15"></td>
        	</tr>
            <tr>
                <td width="100" align="left" valign="middle"><label style="font-size:12px">Id Dt Lab</label></td>
                <td width="14"><b>:</b></td>
                <td colspan="2">
                    <input type="text" style="height:25px;width:300px" name="id_dt_lab" id="id_dt_lab" placeholder="< Id Dt lab >" onKeyUp="search_list_lab();" />
                </td>
            </tr>
            <tr>
        		<td colspan="3" height="8"></td>
        	</tr>
            <tr>
                <td width="100" align="left" valign="middle"><label style="font-size:12px">Pemeriksaan Lab</label></td>
                <td><b>:</b></td>
                <td colspan="2">
                    <input type="text" style="height:25px;width:300px" name="pemeriksaan" id="pemeriksaan" placeholder="< pemeriksaan lab >" onKeyUp="search_list_lab();" />
                </td>
            </tr>
            <tr>
        		<td colspan="3" height="15"></td>
        	</tr>
            <tr>
                <td colspan="3">
                    <table id="list_lab" class="easyui-datagrid" 
                        url="<?= base_url().$menu_link->controller;?>/get_list_lab" 
                        style="height:250px" data-options = "singleSelect:true,
                pageSize:8,">
                        <thead>
                            <tr>
                                <th data-options="field:'ck',checkbox:true"></th>
                                <th field="ID_DT_LAB" data-options="field:'ID_DT_LAB',width:100" sortable="true">Id Dt_lab</th>
                                <th field="NAMA_PEMERIKSAAN" data-options="field:'NAMA_PEMERIKSAAN',width:185" sortable="true">Pemeriksaan Lab</th>
                                <th field="KETERANGAN" data-options="field:'KETERANGAN',width:170" sortable="true">Keterangan</th>
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
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-ok" onClick="choose_list_lab();">OK</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onClick="modal_close('dialog_list_lab');">Cancel</a>
</div>

<div id="dlg_lab" class="easyui-dialog" title="Form Pendaftaran laboratorium" style="width:450px;height:350px;padding:10px" closed="true" modal="true"
            data-options="
                iconCls: 'icon-save',
                toolbar: toolbar_2
            ">
    <form id="fm_lab" action="<?= base_url().$menu_link->controller;?>/insert" method="post" enctype="multipart/form-data">
       <table width="100%">
	          <tr>
	            <td width="150" valign="top">Kode Pasien</td>
	            <td>
	            	<input class="easyui-textbox" name="kd_pasien" id="kd_pasien1" data-options="required:true" onfocus="choose_list_pasien();" style="height:25px;width:180px"></input>  <a href="javascript:void(0)" class="easyui-linkbutton form-button" style="height:25px;" iconCls="icon-search" id="" onClick="show();">Cari</a>
	            	<input type="hidden" name="code" id="code" style="height:15px;width:250px;"></input>
	            	<input type="hidden" name="status" id="status"  style="height:15px;width:250px;"></input>
                    <input type="hidden" name="id_berobat" id="id_berobat"  style="height:15px;width:250px;"></input>
                     <input type="hidden" name="id_daftar" id="id_daftar" value="<?=$daftar;?>" style="height:15px;width:250px;"></input>
	            </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
            <tr>
	            <td width="150">Nama pasien</td> 
	            <td>
	            <input class="easyui-textbox" name="nm_lengkap" id="nm_lengkap" data-options="required:true" style="height:25px;width:250px"></input>
	            </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
            <tr>
	            <td width="50">Umur</td> 
	            <td>
	            <input class="easyui-textbox" name="umur" id="umur" data-options="required:true" style="height:25px;width:250px"></input>
	            </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
            <tr>
	            <td width="50">Alamat</td> 
	            <td>
  				<input class="easyui-textbox" type="text" name="alamat" id="alamat"  data-options="multiline:true,required:true" style="height:50px;width:250px"></input>	            </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
             <tr>
	            <td width="50" valign="top">No Bpjs</td>
	            <td>
	            	<input class="easyui-textbox" name="bpjs" id="bpjs"  data-options="required:true" style="width:250px;height:25px;"></input>
	            </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
           <tr>
	            <td width="50" valign="top">Tgl Masuk</td>
	            <td>
	            	<input class="easyui-datebox" name="tgl" id="tgl"  data-options="required:true" style="width:250px;height:25px;"></input>
	            </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
            <tr>
				 <td width="50" valign="top">Pemeriksaan Lab</td>
				   <td >
                    <input class="easyui-textbox" type="text" name="id_dt_lab" id="id_diagnosa"  data-options="required:true" onFocus="choose_list_lab();" style="height:25px;width:60px"><input class="easyui-textbox" type="text" name="pemeriksaan" id="diagnosa"  data-options="required:true" onFocus="choose_list_lab();" style="height:25px;width:160px"></input><a href="javascript:void(0)" class="easyui-linkbutton form-button" style="height:25px;" iconCls="icon-add" id="" onClick="cari();"></a>                              
                    </td>
				</tr>
				<tr><td colspan="2" height="5"></td></tr>
               <tr>
				<td width="50" valign="top">Nama Dokter</td>
				  <td >
				    <select class="easyui-combogrid" style="width:250px;height:25px" id="id_dokter" name="id_dokter" data-options="
				      panelWidth: 500,
				      idField: 'ID_DOKTER',
					  textField: 'NAMA_DOKTER',
					   url: '<?= base_url().$menu_link->controller;?>/get_list_dokter',
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
	</form>
</div>

<script type="text/javascript">
  
    function show() {
        		$('#dialog_list_pasien').dialog('open');
	         }
	
	function search_list_pasien(){
    	$('#list_pasien').datagrid('reload',{
    		kd_pasien 	: $('#kd_pasien').val(),
    		nama : $('#nama').val(),
    	});
    }

 function choose_list_pasien(){

	  var row       =  $('#list_pasien').datagrid('getChecked');
	  var id_diagnosa 	='';
	  var diagnosa  = '';
	  var um		='';
	  var alm		='';
	  var nbp		='';
	  var id_ber 	='';

        $.each(row, function( index,value) {
            id_diagnosa 	=(value.NAMA_LENGKAP);
			diagnosa    =(value.KODE_PASIEN);
			um			=(value.UMUR);
			alm			=(value.ALAMAT);
			nbp			=(value.NO_BPJS);
			id_ber		=(value.ID_BEROBAT);
        });

        $('#nm_lengkap').textbox('setValue',id_diagnosa);
		$('#kd_pasien1').textbox('setValue',diagnosa);
		$('#umur').textbox('setValue',um);
		$('#alamat').textbox('setValue',alm);
		$('#bpjs').textbox('setValue',nbp);
		$('#id_berobat').val(id_ber);

	    modal_close('dialog_list_pasien');
	}
		
    var toolbar = [{
        text:'Add',
        iconCls:'icon-add',
        disabled:false,
        handler:function(){
		  $('#status').val(1);
	      $('#dlg_lab').dialog('open');
        }
    },{
        text:'Edit',
        iconCls:'icon-edit',
        disabled:false,
        handler:function(){
        	var row = $('#grid').datagrid('getSelected');
        	if(row.status == 0){
		        $('#status').val(2);
	        	$('#code').val(row.ID_DAFTAR_LAB);
	        	$('#kd_pasien1').textbox('setValue',row.KODE_PASIEN);
				$('#nm_lengkap').textbox('setValue',row.NAMA_LENGKAP);
				$('#umur').textbox('setValue',row.UMUR);
				$('#alamat').textbox('setValue',row.ALAMAT);
				$('#bpjs').textbox('setValue',row.NO_BPJS);
				$('#tgl').textbox('setValue',row.TGL_MASUK);
				$('#id_diagnosa').textbox('setValue',row.ID_DT_LAB);
				$('#diagnosa').textbox('setValue',row.PEMERIKSAAN_LAB);
				$('#id_berobat').val(row.ID_BEROBAT);
	        	
	        	$('#dlg_lab').dialog('open');
	        }
        }
    },{
        text:'Delete',
        iconCls:'icon-remove',
        disabled:false,
        handler:function(){
        	var row = $('#grid').datagrid('getSelected');
        	if(row.status == 0){
    			$('#status').val(3);
	        	$('#code').val(row.ID_DAFTAR_LAB);
	        	$('#kd_pasien1').textbox('setValue',row.KODE_PASIEN);
				$('#nm_lengkap').textbox('setValue',row.NAMA_LENGKAP);
				$('#umur').textbox('setValue',row.UMUR);
				$('#alamat').textbox('setValue',row.ALAMAT);
				$('#bpjs').textbox('setValue',row.NO_BPJS);
				$('#tgl').textbox('setValue',row.TGL_MASUK);
				$('#id_diagnosa').textbox('setValue',row.ID_DT_LAB);
				$('#diagnosa').textbox('setValue',row.PEMERIKSAAN_LAB);
				$('#id_berobat').val(row.ID_BEROBAT);
				$('#id_dokter').combogrid('setValue',row.nama);
			
				save_data('fm_lab');
	        }
        }
    }];
	
	 var toolbar_2 = [{
            text:'Save',
            iconCls:'icon-save',
            disabled:false,
            handler:function(){
               save_data('fm_lab');
            }
        },'-',{
            text:'Refresh',
            iconCls:'icon-reload',
            handler:function(){
               $('#fm_lab').form('clear');
            }
        },'-',{
        	text:'Cancel',
            iconCls:'icon-cancel',
            handler:function(){
               $('#dlg_lab').dialog('close');
            }
        }];
//------------------------------------------------------------------------------------------------------------//
    function cari() {
	       
	   	 var kd_pasien = $('#kd_pasien1').val();
		 var nm_pasien = $('#nm_lengkap').val();
	     if(kd_pasien !='' && nm_pasien!=""){
        		$('#dialog_list_lab').dialog('open');
        	}else{
        		 $.messager.alert('warning','Silahkan isi data dan pemeriksaan terlebih dahulu!','warning');
        	}
	}
	
	function search_list_lab(){
    	$('#list_lab').datagrid('reload',{
    		id_dt_lab 	: $('#id_dt_lab').val(),
    		pemeriksaan : $('#pemeriksaan').val(),
    	});
    }
	
  function choose_list_lab(){

	  var row       =  $('#list_lab').datagrid('getChecked');
	  var id_diagnosa 	='';
	  var diagnosa  = '';

        $.each(row, function( index,value) {
            id_diagnosa 	=(value.ID_DT_LAB);
			diagnosa    =(value.NAMA_PEMERIKSAAN);
        });

        $('#id_diagnosa').textbox('setValue',id_diagnosa);
		$('#diagnosa').textbox('setValue',diagnosa);

	    modal_close('dialog_list_lab');
	}

     get_privillage('<?=$menu_link->MenuID;?>','dlg_<?=$menu_link->controller;?>','view');

</script>
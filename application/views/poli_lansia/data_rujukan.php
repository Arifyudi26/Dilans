<?php
$un = $this->session->userdata('Puskesmas-sawah-besar@2017');
?>
<div class="easyui-layout" style="height:450px;width:100%">
	<div data-options="region:'east',split:true" title="Filter" style="width:20%;height:450px">
		<br>
		<p><input class="easyui-textbox" type="text" name="txt_id" id="txt_id" data-options="prompt:'Id rujukan'" style="height:25px;width:200px"></p>
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
		        onDblClickRow:function(){
		        	var priedit 	= toolbar[1]['disabled'];
					var row 		= $('#grid').datagrid('getSelected');
					if(priedit == false){
        				parent.editPanel('Preview <?=$menu_link->MenuLabel;?>','<?=$menu_link->controller;?>/preview',row.ID_RUJUKAN_LANSIA);
        			}
				}
			">
		    <thead>
		        <tr>
		            <th data-options="field:'ID_RUJUKAN_LANSIA',width:120">Id Rujukan</th>
		            <th data-options="field:'KODE_PASIEN',width:120,align:'center'">Kd pasien</th>
		            <th data-options="field:'NAMA_LENGKAP',width:150">Nama Pasien</th>
                    <th data-options="field:'JENIS_KELAMIN',width:120">Jenis Kelamin</th>
                    <th data-options="field:'UMUR',width:150">Umur</th>
                    <th data-options="field:'ALAMAT',width:150">Alamat</th>
                    <th data-options="field:'NO_BPJS',width:150">NO BPJS</th>
                    <th data-options="field:'POLI_PENGIRIM',width:150">Poli Pengirim</th>
                    <th data-options="field:'PETUGAS_PENGIRIM',width:150">Petugas pengirim</th>
                    <th data-options="field:'TANGGAL',width:150">tanggal</th>
                    <th data-options="field:'KEPADA_YTH',width:150">Kepada Yth</th>
                    <th data-options="field:'POLI_RUJUKAN',width:150">Poli rujukan</th>
                    <th data-options="field:'PEMERIKSAAN',width:150">Pemeriksaan</th>
                    <th data-options="field:'ICD_SEMENTARA',width:150">Icd Sementara</th>
                    <th data-options="field:'TERAPI',width:150">Terapi</th>
                    <th data-options="field:'ID_POLI_LANSIA',width:150,align:'center'" hidden="true">Id Poli Lansia</th>
		            <th data-options="field:'lev',width:150,align:'center'">Last User</th>
		            <th data-options="field:'CREATE_DATE',width:250,align:'center'">Date</th>
		            <th data-options="field:'status',width:250,align:'center'" hidden="true">Status</th>
		        </tr>
		    </thead>
		</table>
	</div>
</div>

<!--  Dialog list item -->
<div id="dialog_list_diagnosa" class="easyui-dialog" title="List diagnosa" style="width:50%;height:500px;background-color:#F8F8F8;padding:5px;top:5px" closed="true" data-options="modal:true" buttons="#dialog_buttton_list_item">
    <form id="form_diagnosa" method="post" novalidate>
        <table width="97%" border="0">

        	<tr>
        		<td colspan="3" height="15"></td>
        	</tr>

            <tr>
                <td width="100" align="left" valign="middle"><label style="font-size:12px">Id Diagnosa</label></td>
                <td width="14"><b>:</b></td>

                <td colspan="2">
                    <input type="text" style="height:25px;width:300px" name="id_diagnosa" id="id_diagnosa" placeholder="< Id Diagnosa >" onKeyUp="search_list_diagnosa();" />
                </td>
            </tr>
            <tr>
        		<td colspan="3" height="8"></td>
        	</tr>
            <tr>
                <td width="100" align="left" valign="middle"><label style="font-size:12px">Des ICD</label></td>
                <td><b>:</b></td>

                <td colspan="2">
                    <input type="text" style="height:25px;width:300px" name="des_icd" id="des_icd" placeholder="< Des icd >" onKeyUp="search_list_diagnosa();" />
                </td>
            </tr>

            <tr>
        		<td colspan="3" height="15"></td>
        	</tr>
	
            <tr>
                <td colspan="3">
                    <table id="list_diagnosa" class="easyui-datagrid" 
                        url="<?= base_url().$menu_link->controller;?>/get_list_diagnosa" 
                        style="height:250px" data-options = "singleSelect:true,
                pageSize:8,">
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
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onClick="modal_close('dialog_list_diagnosa');">Cancel</a>
</div>


<!-- ================== dialog add barang ============================== -->
<div id="dlg_rujukan" class="easyui-dialog" title="Form Edit rujukan internal Lansia" style="width:800px;height:400px;padding:10px" closed="true" modal="true"
            data-options="
                iconCls: 'icon-save',
                toolbar: toolbar_2
            ">
    <form id="fm_rujukan" action="<?= base_url().$menu_link->controller;?>/update" method="post" enctype="multipart/form-data">
       <table width="100%">
		    	<tr><td colspan="2" height="5"></td></tr>
		    	<tr>
		    		<td>
	    <table cellpadding="5">
	        <tr>
	            <td width="50" valign="top">Kode Pasien</td>
	            <td>
	            	<input class="easyui-textbox" name="kd_pasien" id="kd_pasien" data-options="required:true" style="height:25px;width:250px"></input>
	            	<input type="hidden" name="code" id="code" style="height:15px;width:250px;"></input>
	            	<input type="hidden" name="status" id="status"  style="height:15px;width:250px;"></input>
                    <input type="hidden" name="id_poli_lansia" id="id_poli_lansia"  style="height:15px;width:250px;"></input>
	            </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
            <tr>
	            <td width="50">Nama pasien</td> 
	            <td>
	            <input class="easyui-textbox" name="nm_lengkap" id="nm_lengkap" data-options="required:true" style="height:25px;width:250px"></input>
	            </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
            <tr>
	            <td width="50">Jenis kelamin</td> 
	            <td>
	            <input class="easyui-textbox" name="jenis" id="jenis" data-options="required:true" style="height:25px;width:250px"></input>
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
  				<input class="easyui-textbox" type="text" name="alamat" id="alamat"  data-options="multiline:true" style="height:50px;width:250px"></input>	            </td>
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
	            <td width="50" valign="top">Poli pengirim</td>
	            <td>
				 <select class="easyui-combogrid" style="width:250px;height:25px" id="poli_pengirim" name="poli_pengirim" data-options="
				   panelWidth: 500,
				   idField: 'NAMA_UNIT',
				   textField: 'NAMA_UNIT',
				   url: '<?= base_url().$menu_link->controller;?>/get_list_poli',
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
	            <td width="120" valign="top">Petugas Pengirim</td>
	            <td>
                 <select class="easyui-combogrid" style="width:250px;height:25px" id="petugas" name="petugas" data-options="
				   panelWidth: 500,
				   idField: 'NAMA_DOKTER',
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
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
	    </table>
        </td>
        <td align="right" valign="top">
		   <table width="85%" cellpadding="0" cellspacing="0">
              <tr>
				<td width="50" valign="top">Tanggal</td>
				  <td >
				    <input class="easyui-datebox" type="text"  name="tgl" id="tgl"  data-options="required:true" style="height:25px;width:250px"></input>					
                  </td>
			  </tr>
			  <tr><td colspan="2" height="5"></td></tr>
               <tr>
				<td width="50" valign="top">Kepada Yth</td>
				  <td >
				    <select class="easyui-combogrid" style="width:250px;height:25px" id="yth" name="yth" data-options="
				      panelWidth: 500,
				      idField: 'NAMA_DOKTER',
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
              <tr>
			   <td width="50" valign="top">Poli Rujukan</td>
				<td >
                 <select class="easyui-combogrid" style="width:250px;height:25px" id="poli_rujukan" name="poli_rujukan" data-options="
				   panelWidth: 500,
				   idField: 'NAMA_UNIT',
				   textField: 'NAMA_UNIT',
				   url: '<?= base_url().$menu_link->controller;?>/get_list_poli',
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
				<td width="50" valign="top">Pemeriksaan</td>
				  <td >
					<textarea class="easyui-textbox" type="text" name="pemeriksaan" id="pemeriksaan" data-options="multiline:true" style="height:75px;width:250px"></textarea>
				  </td>
				</tr>
				<tr><td colspan="2" height="5"></td></tr>
                 <tr>
				   <td width="50" valign="top">Icd Sementara</td>
				   <td >
                    <input class="easyui-textbox" type="text" name="ID_DIAGNOSA" id="ID_DIAGNOSA"  data-options="required:true" onFocus="choose_list_diagnosa();" style="height:25px;width:60px"><input class="easyui-textbox" type="text" name="DESKRIPSI_ICD" id="DESKRIPSI_ICD"  data-options="required:true" onFocus="choose_list_diagnosa();" style="height:25px;width:160px"></input><a href="javascript:void(0)" class="easyui-linkbutton form-button" style="height:25px;" iconCls="icon-add" id="" onClick="cari();"></a>                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                <tr>
				  <td width="50" valign="top">Terapi</td>
					<td >
					  <textarea class="easyui-textbox" type="text" name="terapi" id="terapi" data-options="multiline:true" style="height:65px;width:250px"></textarea>
					</td>
				 </tr>
				 <tr><td colspan="2" height="5"></td></tr>
               </table>
               
              </td>
            </tr>
		</table>
	</form>
</div>



<script type="text/javascript">

    var toolbar = [{
        text:'Add',
        iconCls:'icon-add',
        disabled:false,
        handler:function(){
        	parent.addPanel('New <?= $menu_link->MenuLabel;?>','<?= $menu_link->controller;?>/add');
        }
    },{
        text:'Edit',
        iconCls:'icon-edit',
        disabled:false,
        handler:function(){
        	var row = $('#grid').datagrid('getSelected');
        	if(row.status == 0){
	        	$('#code').val(row.ID_RUJUKAN_LANSIA);
	        	$('#kd_pasien').textbox('setValue',row.KODE_PASIEN);
				$('#nm_lengkap').textbox('setValue',row.NAMA_LENGKAP);
				$('#jenis').textbox('setValue',row.JENIS_KELAMIN);
				$('#umur').textbox('setValue',row.UMUR);
				$('#alamat').textbox('setValue',row.ALAMAT);
				$('#bpjs').textbox('setValue',row.NO_BPJS);
				$('#poli_pengirim').textbox('setValue',row.POLI_PENGIRIM);
	        	$('#petugas').textbox('setValue',row.PETUGAS_PENGIRIM);
				$('#tgl').textbox('setValue',row.TANGGAL);
	        	$('#yth').textbox('setValue',row.KEPADA_YTH);
	        	$('#poli_rujukan').textbox('setValue',row.POLI_RUJUKAN);
	        	$('#pemeriksaan').textbox('setValue',row.PEMERIKSAAN);
				$('#ID_DIAGNOSA').textbox('setValue',row.ID_DIAGNOSA);
				$('#DESKRIPSI_ICD').textbox('setValue',row.ICD_SEMENTARA);
	        	$('#terapi').textbox('setValue',row.TERAPI);
				$('#id_poli_lansia').val(row.ID_POLI_LANSIA);
	        	
	        	$('#dlg_rujukan').dialog('open');
	        }
        }
    },{
        text:'Preview',
        iconCls:'icon-print',
        disabled:false,
        handler:function(){
        	var row 		= $('#grid').datagrid('getSelected');
        	parent.editPanel('Preview <?= $menu_link->MenuLabel;?>','<?= $menu_link->controller;?>/preview',row.ID_RUJUKAN_LANSIA);
        }
    },{
        text:'Delete',
        iconCls:'icon-remove',
        disabled:false,
        handler:function(){
        	var row = $('#grid').datagrid('getSelected');
        	if(row.TransStatus == 0){
    			suspend_data('<?= $menu_link->controller;?>/suspend_data','grid',row.ID_RUJUKAN_LANSIA);   
	        }
        }
    }];
	
	 var toolbar_2 = [{
            text:'Save',
            iconCls:'icon-save',
            disabled:false,
            handler:function(){
               save_data('fm_rujukan');
            }
        },'-',{
            text:'Refresh',
            iconCls:'icon-reload',
            handler:function(){
               $('#fm_rujukan').form('clear');
            }
        },'-',{
        	text:'Cancel',
            iconCls:'icon-cancel',
            handler:function(){
               $('#dlg_rujukan').dialog('close');
            }
        }];
		
		function cari() {
	       
	   	 var kd_pasien = $('#kd_pasien').val();
		 var nm_pasien = $('#nm_lengkap').val();
	     if(kd_pasien !='' && nm_pasien!=""){
        		$('#dialog_list_diagnosa').dialog('open');
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

	  var row       =  $('#list_diagnosa').datagrid('getChecked');
	  var id_diagnosa 	='';
	  var diagnosa  = '';

        $.each(row, function( index,value) {
            id_diagnosa 	=(value.ID_DIAGNOSA);
			diagnosa    =(value.DESKRIPSI_ICD);
        });

        $('#ID_DIAGNOSA').textbox('setValue',id_diagnosa);
		$('#DESKRIPSI_ICD').textbox('setValue',diagnosa);

	    modal_close('dialog_list_diagnosa');
	}
		

     get_privillage('<?=$menu_link->MenuID;?>','dlg_<?=$menu_link->controller;?>','view');

</script>
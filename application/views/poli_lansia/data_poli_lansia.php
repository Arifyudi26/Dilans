<?php
$un = $this->session->userdata('Puskesmas-sawah-besar@2017');
?>
<div class="easyui-layout" style="height:450px;width:100%">
	<div data-options="region:'east',split:true" title="Filter" style="width:20%;height:450px">
		<br>
		<p><input class="easyui-textbox" type="text" name="txt_id" id="txt_id" data-options="prompt:'Id Poli gigi'" style="height:25px;width:200px"></p>
		<p><input class="easyui-textbox" type="text" name="txt_no" id="txt_no" data-options="prompt:'Kd pasien'" style="height:25px;width:200px"></p>
		<p><input class="easyui-textbox" type="text" name="txt_desc" id="txt_desc" data-options="prompt:'Nama Pasien'" style="height:25px;width:200px"></p>
		<p><label><input type="checkbox" name="chkdate" id="chkdate" onClick="change_date()"></label></p>
		<p><label style="width:50px;padding-left:10px"><b>From</b></label><input class="easyui-datebox" value="<?= $date_now;?>" data-options="disabled:true" style="width:120px" id="date_from" name="date_form"></p>
		<p><label style="width:50px;padding-left:10px"><b>To</b></label><input class="easyui-datebox" value="<?= $date_now;?>" data-options="disabled:true" style="width:120px" id="date_to" name="date_to"></p>
	
		
		<p><a href="javascript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-search'" style="width:80px;float:right" id="search" name="search" onClick="search_data()">Search</a></p>
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
        				parent.editPanel('Preview <?=$menu_link->MenuLabel;?>','<?=$menu_link->controller;?>/preview',row.ID_POLI_LANSIA);
        			}
				}
			">
		    <thead>
		        <tr>
		            <th data-options="field:'ID_POLI_LANSIA',width:120">Id Poli Lansia</th>
		            <th data-options="field:'KODE_PASIEN',width:120,align:'center'">Kd pasien</th>
		            <th data-options="field:'NAMA_LENGKAP',width:150">Nama Pasien</th>
                    <th data-options="field:'JENIS_KELAMIN',width:120">Jenis Kelamin</th>
                    <th data-options="field:'UMUR',width:150">Umur</th>
                    <th data-options="field:'ALAMAT',width:150">Alamat</th>
                    <th data-options="field:'NO_BPJS',width:150">NO BPJS</th>
                    <th data-options="field:'TGL_MASUK',width:150">Tanggal</th>
                    <th data-options="field:'KELUHAN',width:150">Keluhan</th>
                    <th data-options="field:'TINGGI_BADAN',width:150">Tinggi Badan</th>
                    <th data-options="field:'BERAT_BADAN',width:150">Berat Badan</th>
                    <th data-options="field:'SISTOLE',width:150">Sistole</th>
                    <th data-options="field:'DIASISTOLE',width:150">Diastole</th>
                    <th data-options="field:'RASPIRATORY_RATE',width:150">Raspiratory Rate</th>
                    <th data-options="field:'HEART_RATE',width:150">Heart Rate</th>
                    <th data-options="field:'PD',width:150">PD</th>
                    <th data-options="field:'ID_DIAGNOSA',width:150">Id Diagnosa</th>
                    <th data-options="field:'DESKRIPSI_ICD',width:150">Deskripsi ICD</th>
                    <th data-options="field:'nama',width:150">Nama Dokter</th>
                    <th data-options="field:'ID_PEMERIKSAAN',width:150" hidden="true">Id Pemeriksaan</th>
		            <th data-options="field:'lev',width:150,align:'center'">Last User</th>
		            <th data-options="field:'CREATE_DATE',width:250,align:'center'">Create date</th>
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

<div id="dlg_poli_lansia" class="easyui-dialog" title="Form Edit poli Lansia" style="width:850px;height:400px;padding:10px" closed="true" modal="true"
            data-options="
                iconCls: 'icon-save',
                toolbar: toolbar_2
            ">
    <form id="fm_lansia" action="<?= base_url().$menu_link->controller;?>/update" method="post" enctype="multipart/form-data">
       <table width="100%">
         <tr><td colspan="2" height="5"></td></tr>
		  <tr>
		   <td>
	    <table cellpadding="5">
	        <tr>
	            <td width="100" valign="top">Kode Pasien</td>
	            <td>
	            	<input class="easyui-textbox" name="kd_pasien" id="kd_pasien" data-options="required:true" style="height:25px;width:250px"></input>
	            	<input type="hidden" name="code" id="code" style="height:15px;width:250px;"></input>
	            	<input type="hidden" name="status" id="status"  style="height:15px;width:250px;"></input>
                    <input type="hidden" name="id_pem" id="id_pem"  style="height:15px;width:250px;"></input>
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
	            <td width="50" valign="top">Tanggal</td>
	            <td>
	            	<input class="easyui-datebox" name="tgl" id="tgl"  data-options="required:true" style="width:250px;height:25px;"></input>
	            </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
            <tr>
	            <td width="50">Keluhan</td> 
	            <td>
  				<input class="easyui-textbox" type="text" name="keluhan" id="keluhan"  data-options="multiline:true" style="height:50px;width:250px"></input>	          
             </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
	    </table>
        </td>
        <td align="right" valign="top">
		   <table width="85%" cellpadding="0" cellspacing="0">
            <tr>
	            <td width="100" valign="top">Tinggi Badan</td>
	            <td>
	            	<input class="easyui-textbox" name="tb" id="tb"  data-options="required:true" style="width:250px;height:25px;"></input>
	            </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
            <tr>
	            <td width="50" valign="top">Berat badan</td>
	            <td>
	            	<input class="easyui-textbox" name="bb" id="bb"  data-options="required:true" style="width:250px;height:25px;"></input>
	            </td>

	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
              <tr>
				<td width="50" valign="top">Sistole</td>
				  <td >
				    <input class="easyui-textbox" type="text"  name="ss" id="ss"  data-options="required:true" style="height:25px;width:250px"></input>					
                  </td>
			  </tr>
			  <tr><td colspan="2" height="5"></td></tr>
               <tr>
				<td width="50" valign="top">Diastole</td>
				  <td >
				    <input class="easyui-textbox" type="text"  name="ds" id="ds"  data-options="required:true" style="height:25px;width:250px"></input>					
                  </td>
			  </tr>
			  <tr><td colspan="2" height="5"></td></tr>
               <tr>
				<td width="50" valign="top">Raspi Rate</td>
				  <td >
				    <input class="easyui-textbox" type="text"  name="rr" id="rr"  data-options="required:true" style="height:25px;width:250px"></input>					
                  </td>
			  </tr>
			  <tr><td colspan="2" height="5"></td></tr>
               <tr>
				<td width="50" valign="top">Heart rate</td>
				  <td >
				    <input class="easyui-textbox" type="text"  name="hr" id="hr"  data-options="required:true" style="height:25px;width:250px"></input>					
                  </td>
			  </tr>
			  <tr><td colspan="2" height="5"></td></tr>
              <tr>
	            <td width="50">pd</td> 
	            <td>
  				<input class="easyui-textbox" type="text" name="pd" id="pd"  data-options="multiline:true" style="height:50px;width:250px"></input>	           
                 </td>
	        </tr>
            <tr><td colspan="2" height="5"></td></tr>
            <tr>
				 <td width="50" valign="top">Diagnosa</td>
				   <td >
                    <input class="easyui-textbox" type="text" name="diagnosa" id="diagnosa"  data-options="required:true" onFocus="choose_list_diagnosa();" style="height:25px;width:60px"><input class="easyui-textbox" type="text" name="deskripsi" id="deskripsi"  data-options="required:true" onFocus="choose_list_diagnosa();" style="height:25px;width:160px"></input><a href="javascript:void(0)" class="easyui-linkbutton form-button" style="height:25px;" iconCls="icon-add" id="" onClick="cari();"></a>                              
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
	        	$('#code').val(row.ID_POLI_LANSIA);
	        	$('#kd_pasien').textbox('setValue',row.KODE_PASIEN);
				$('#nm_lengkap').textbox('setValue',row.NAMA_LENGKAP);
				$('#jenis').textbox('setValue',row.JENIS_KELAMIN);
				$('#umur').textbox('setValue',row.UMUR);
				$('#alamat').textbox('setValue',row.ALAMAT);
				$('#bpjs').textbox('setValue',row.NO_BPJS);
				$('#tgl').textbox('setValue',row.TGL_MASUK);
				$('#keluhan').textbox('setValue',row.KELUHAN);
				$('#tb').textbox('setValue',row.TINGGI_BADAN);
	        	$('#bb').textbox('setValue',row.BERAT_BADAN);
				$('#ss').textbox('setValue',row.SISTOLE);
	        	$('#ds').textbox('setValue',row.DIASISTOLE);
	        	$('#rr').textbox('setValue',row.RASPIRATORY_RATE);
	        	$('#hr').textbox('setValue',row.HEART_RATE);
				$('#pd').textbox('setValue',row.PD);
				$('#diagnosa').textbox('setValue',row.ID_DIAGNOSA);
				$('#deskripsi').textbox('setValue',row.DESKRIPSI_ICD);
				$('#id_dokter').textbox('setValue',row.nama);
				$('#id_pem').val(row.ID_PEMERIKSAAN);
				$('#status').val(row.status);
	        	
	        	$('#dlg_poli_lansia').dialog('open');
	        }
        }
    },{
        text:'Preview',
        iconCls:'icon-print',
        disabled:false,
        handler:function(){
        	var row 		= $('#grid').datagrid('getSelected');
        	parent.editPanel('Preview <?= $menu_link->MenuLabel;?>','<?= $menu_link->controller;?>/preview',row.ID_POLI_LANSIA);
        }
    },{
        text:'Delete',
        iconCls:'icon-remove',
        disabled:false,
        handler:function(){
        	var row = $('#grid').datagrid('getSelected');
        	if(row.TransStatus == 0){
    			suspend_data('<?= $menu_link->controller;?>/suspend_data','grid',row.ID_POLI_LANSIA);   
	        }
        }
    }];
	
	 var toolbar_2 = [{
            text:'Save',
            iconCls:'icon-save',
            disabled:false,
            handler:function(){
               save_data('fm_lansia');
            }
        },'-',{
            text:'Refresh',
            iconCls:'icon-reload',
            handler:function(){
               $('#fm_lansia').form('clear');
            }
        },'-',{
        	text:'Cancel',
            iconCls:'icon-cancel',
            handler:function(){
               $('#dlg_poli_lansia').dialog('close');
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

        $('#diagnosa').textbox('setValue',id_diagnosa);
		$('#deskripsi').textbox('setValue',diagnosa);

	    modal_close('dialog_list_diagnosa');
	}
		
		

     get_privillage('<?=$menu_link->MenuID;?>','dlg_<?=$menu_link->controller;?>','view');

</script>
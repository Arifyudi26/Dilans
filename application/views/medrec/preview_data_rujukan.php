            <br>
              <script>
		       var baseurl = "<?php echo base_url("index.php/"); ?>"; // Buat variabel baseurl untuk nanti di akses pada file config.js
               </script>
        <form id="fm_rujukan" action="<?= base_url().$menu_link->controller;?>/update" method="post" enctype="multipart/form-data">
		    <table width="100%">
		    	<tr><td colspan="2" height="5"></td></tr>
		    	<tr>
		    		<td>
		    			<table width="95%" cellpadding="0" cellspacing="0">
		    				<tr>
					            <td width="300" ><label style="font-size:12px">Kode Pasien</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="kd_pasien" id="kd_pasien" value="<?=$group->KODE_PASIEN;?>" onKeyUp="btn-search" data-options="required:true" style="height:30px;width:250px"></input>                    
                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>
					            <td width="300" ><label style="font-size:12px">Nama Pasien</label></td>
					            <td >
                               <input name="nm_lengkap" class="easyui-textbox"  type="text"id="nama" value="<?=$group->NAMA_LENGKAP;?>" data-options="required:true" style="height:30px;width:300px">	
	            	           <input type="hidden" name="status" id="status" value="<?=$group->status;?>" style="height:15px;width:250px;"></input>
                               <input type="hidden" name="id_poli_umum" id="id_poli_umum" value="<?=$group->ID_POLI_UMUM;?>"  style="height:15px;width:250px;"></input>
                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>
					            <td width="300" ><label style="font-size:12px">Jenis Kelamin</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="jenis" id="jenis" value="<?=$group->JENIS_KELAMIN;?>" data-options="required:true" style="height:30px;width:300px"></input>					                              
                               </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>
					            <td width="300" ><label style="font-size:12px">Umur</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="umur" id="umur" value="<?=$group->UMUR;?>" data-options="required:true" style="height:30px;width:300px"></input>					                                
                               </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             <tr>
					        	<td ><label style="font-size:12px">Alamat</label></td>
					    		<td >
             				<input class="easyui-textbox" type="text" name="alamat" id="alamat" value="<?=$group->ALAMAT;?>" data-options="multiline:true" style="height:50px;width:300px"></input>	            
                                </td>
					    		</td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>

					            <td width="300" ><label style="font-size:12px">No Bpjs</label></td>
					            <td >
                                <input class="easyui-textbox" type="text"  name="bpjs" id="bpjs" value="<?=$group->NO_BPJS;?>"  data-options="required:true" style="height:30px;width:300px"></input>					                               
                               </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>
					            <td width="200" ><label style="font-size:12px">Poli Pengirim</label></td>
					            <td >
					            <select class="easyui-combogrid" style="width:300px;height:30px" id="poli_pengirim" name="poli_pengirim" data-options="
							            panelWidth: 500,
							            idField: 'NAMA_UNIT',
                                        value : '<?=$group->POLI_PENGIRIM;?>',
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
					            <td width="300" ><label style="font-size:12px">Petugas Pengirim</label></td>
					            <td >
					            <select class="easyui-combogrid" style="width:300px;height:30px" id="petugas" name="petugas" data-options="
							            panelWidth: 500,
							            idField: 'NAMA_DOKTER',
                                        value : '<?=$group->PETUGAS_PENGIRIM;?>',
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
					            <td width="300" ><label style="font-size:12px">Kepada Yth</label></td>
					             <td >
					            <select class="easyui-combogrid" style="width:300px;height:30px" id="yth" name="yth" data-options="
							            panelWidth: 500,
							            idField: 'NAMA_DOKTER',
                                        value : '<?=$group->KEPADA_YTH;?>',
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
					            <td width="200" ><label style="font-size:12px">Poli Rujukan</label></td>
					            <td >
					            <select class="easyui-combogrid" style="width:300px;height:30px" id="poli_rujukan" name="poli_rujukan" data-options="
							            panelWidth: 500,
							            idField: 'NAMA_UNIT',
							            textField: 'NAMA_UNIT',
                                        value : '<?=$group->POLI_RUJUKAN;?>',
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
					    </table>
					</td>
					<td align="" valign="top">
		    			<table width="50%" cellpadding="0" cellspacing="0">
		    				<tr>
		    					<td align="center" style="font-size:12px;background-color:#cccccc;width:200px;height:20px;border:1px solid black;text-valign:middle"><label >Id Rujukan Umum</label></td>
		    					<td align="center" style="font-size:12px;background-color:#cccccc;width:200px;height:20px;border:1px solid black;text-valign:middle"><label >Date</label></td>
		    				</tr>
		    				<tr><td colspan="2" height="2"></td></tr>
		    				<tr>
		    					<td align="right">
					    			<input class="easyui-textbox" name="id_rujukan" id="id_rujukan" value="<?=$group->ID_RUJUKAN_UMUM;?>" data-options="required:true" style="height:25px;width:200px" readonly="true"></input>
					    		</td>
					    		<td align="right">
					    			<input class="easyui-datebox" value="<?= $date_now;?>" data-options="editable:false" style="width:200px;height:25px" id="txt_date" name="txt_date">
					    		</td>
					    	</tr>
					    	<td width="100">&nbsp;</td>
		    			</table >
		    			<table width="80%" cellpadding="0" cellspacing="0">
                        <tr>
					        	<td ><label style="font-size:12px">Pemeriksaan</label></td>
					    		<td >
					    			<input class="easyui-textbox" type="text" name="pemeriksaan" id="pemeriksaan" value="<?=$group->PEMERIKSAAN;?>"  data-options="multiline:true" style="height:80px;width:300px"></input>
					    		</td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             <tr>
					            <td width="300" ><label style="font-size:12px">Icd Sementara</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="ID_DIAGNOSA" id="ID_DIAGNOSA" value="<?=$group->ID_DIAGNOSA;?>"  data-options="required:true" onFocus="choose_list_diagnosa();" style="height:30px;width:90px"><input class="easyui-textbox" type="text" name="DESKRIPSI_ICD" id="DESKRIPSI_ICD" value="<?=$group->ICD_SEMENTARA;?>" data-options="required:true" onFocus="choose_list_diagnosa();" style="height:30px;width:180px"></input><a href="javascript:void(0)" class="easyui-linkbutton form-button" style="height:30px;" iconCls="icon-add" id="" onClick="cari();"></a>
                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                              <tr>
					        	<td ><label style="font-size:12px">Terapi</label></td>
					    		<td >
					    			<input class="easyui-textbox" type="text" name="terapi" id="terapi" value="<?=$group->TERAPI;?>" data-options="multiline:true" style="height:70px;width:300px"></input>
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
	                <a href="javascript:void(0)" class="easyui-linkbutton form-button" iconCls="icon-print" style="height:40px;" onclick="print_preview()">Preview & Print</a>
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
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onClick="modal_close('dialog_list_item');">Cancel</a>
</div>

<script type="text/javascript">

    function save(){
               save_data('fm_rujukan');
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
	  var row       =  $('#list_diagnosa').datagrid('getChecked');
	  var id_diagnosa 	='';
	  var diagnosa  = '';

        $.each(row, function( index,value) {
            id_diagnosa 	=(value.ID_DIAGNOSA);
			diagnosa    =(value.DESKRIPSI_ICD);
        });

        $('#ID_DIAGNOSA').textbox('setValue',id_diagnosa);
		$('#DESKRIPSI_ICD').textbox('setValue',diagnosa);

	    modal_close('dialog_list_item');
	}

	 function print_preview(){
    	var transaction_no = $('#id_rujukan').textbox('getValue');
        parent.editPanel('Print Preview <?= $menu_link->MenuLabel;?>','<?= $menu_link->controller;?>/print_preview',transaction_no);
    }
    get_privillage('<?=$menu_link->MenuID;?>','dlg_<?=$menu_link->controller;?>','new');

</script>
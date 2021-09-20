<?php
$un = $this->session->userdata('Puskesmas-sawah-besar@2017');
?>
<div class="easyui-layout" style="height:450px;width:100%">
	<div data-options="region:'east',split:true" title="Filter" style="width:20%;height:450px">
		<br>
		<p><input class="easyui-textbox" type="text" name="txt_id" id="txt_id" data-options="prompt:'Id umb rujukan'" style="height:25px;width:200px"></p>
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
        				parent.editPanel('Preview <?=$menu_link->MenuLabel;?>','<?=$menu_link->controller;?>/preview',row.ID_UMB_GIZI);
        			}
				}
			">
		    <thead>
		        <tr>
		            <th data-options="field:'ID_UMB_GIZI',width:120">Id Umb Rujukan</th>
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
                    <th data-options="field:'POLI_UMB',width:150">Poli Umb</th>
                    <th data-options="field:'HASIL_PEMERIKSAAN',width:150">Hasil Pemeriksaan</th>
                    <th data-options="field:'TINDAKAN_TERAPI',width:150">Tindakan/Terapi</th>
                    <th data-options="field:'ID_BEROBAT',width:150">Id Berobat</th>
		            <th data-options="field:'lev',width:150,align:'center'">Last User</th>
		            <th data-options="field:'CREATE_DATE',width:250,align:'center'">Date</th>
		            <th data-options="field:'status',width:250,align:'center'" hidden="true">Status</th>
		        </tr>
		    </thead>
		</table>
	</div>
</div>

<!-- ================== dialog add barang ============================== -->
<div id="dlg_umb" class="easyui-dialog" title="Form Edit umb rujukan GIGI" style="width:800px;height:400px;padding:10px" closed="true" modal="true"

            data-options="
                iconCls: 'icon-save',
                toolbar: toolbar_2
            ">
    <form id="fm_umb" action="<?= base_url().$menu_link->controller;?>/update" method="post" enctype="multipart/form-data">
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
                    <input type="hidden" name="id_poli" id="id_poli"  style="height:15px;width:250px;"></input>
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
			   <td width="50" valign="top">Poli UMB</td>
				<td >
				 <select class="easyui-combogrid" style="width:250px;height:25px" id="poli_umb" name="poli_umb" data-options="
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
				<td width="50" valign="top">Hasil Pemeriksaan</td>
				  <td >
					<textarea class="easyui-textbox" type="text" name="hasil" id="hasil" data-options="multiline:true" style="height:75px;width:250px"></textarea>
				  </td>
				</tr>
				<tr><td colspan="2" height="5"></td></tr>
                <tr>
				  <td width="50" valign="top">Tindakan/Terapi</td>
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
<!-- =================== end dialog edit vendor ============================== -->

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
	        	$('#code').val(row.ID_UMB_GIZI);
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
	        	$('#poli_umb').textbox('setValue',row.POLI_UMB);
	        	$('#hasil').textbox('setValue',row.HASIL_PEMERIKSAAN);
	        	$('#terapi').textbox('setValue',row.TINDAKAN_TERAPI);
				$('#id_poli').val(row.ID_BEROBAT);
	        	
	        	$('#dlg_umb').dialog('open');
	        }
        }
    },{
        text:'Preview',
        iconCls:'icon-print',
        disabled:false,
        handler:function(){
        	var row 		= $('#grid').datagrid('getSelected');
        	parent.editPanel('Preview <?= $menu_link->MenuLabel;?>','<?= $menu_link->controller;?>/preview',row.ID_UMB_GIZI);
        }
    },{
        text:'Delete',
        iconCls:'icon-remove',
        disabled:false,
        handler:function(){
        	var row = $('#grid').datagrid('getSelected');
        	if(row.TransStatus == 0){
    			suspend_data('<?= $menu_link->controller;?>/suspend_data','grid',row.ID_UMB_GIGI);   
	        }
        }
    }];
	
	 var toolbar_2 = [{
            text:'Save',
            iconCls:'icon-save',
            disabled:false,
            handler:function(){
               save_data('fm_umb');
            }
        },'-',{
            text:'Refresh',
            iconCls:'icon-reload',
            handler:function(){
               $('#fm_umb').form('clear');
            }
        },'-',{
        	text:'Cancel',
            iconCls:'icon-cancel',
            handler:function(){
               $('#dlg_umb').dialog('close');
            }
        }];

     get_privillage('<?=$menu_link->MenuID;?>','dlg_<?=$menu_link->controller;?>','view');

</script>
<div class="easyui-layout" style="height:450px;width:100%">
	<div data-options="region:'east',split:true" title="Filter" style="width:20%;height:450px">
		<br>
		<p><input class="easyui-textbox" type="text" name="txt_no" id="txt_no" data-options="prompt:'Id Nama Pemeriksaan'" style="height:25px;width:200px"></p>
		<p><input class="easyui-textbox" type="text" name="txt_desc" id="txt_desc" data-options="prompt:'Nama Pemeriksaan'" style="height:25px;width:200px"></p>
		<p><label><input type="checkbox" name="chkdate" id="chkdate" onclick="change_date()"></label></p>
		<p><label style="width:50px;padding-left:10px"><b>From</b></label><input class="easyui-datebox" value="<?= $date_now;?>" data-options="disabled:true" style="width:120px" id="date_from" name="date_form"></p>
		<p><label style="width:50px;padding-left:10px"><b>To</b></label><input class="easyui-datebox" value="<?= $date_now;?>" data-options="disabled:true" style="width:120px" id="date_to" name="date_to"></p>
		<br>
		<br>
		<p><a href="javascript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-search'" style="width:80px;float:right" id="search" name="search" onclick="search_data()">Search</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-print'" style="width:80px;float:right" id="print_data" name="print_data" onclick="print_data()">Print</a></p>
	</div>
	<div data-options="region:'center',title:'List Nama Pemeriksaan',iconCls:'icon-ok'" style="width:80%;height:450px">
		<table class="easyui-datagrid" title="" style="width:100%;height:397px" id="grid"
		        data-options="
		        rownumbers:true,
		        singleSelect:true,
		        pagination:true,
                pageSize:20,
		        url:'<?= base_url().$menu_link->controller;?>/ajax',
		        method:'get',
		        toolbar:toolbar">
		    <thead>
		        <tr>
		            <th data-options="field:'ID_NAMA_PEMERIKSAAN',width:150">Id Nama Pemeriksaan</th>
                    <th data-options="field:'unit',width:150">Nama Unit</th>
                    <th data-options="field:'jenis',width:150">Jenis Pemeriksaan</th>
		            <th data-options="field:'NAMA_PEMERIKSAAN',width:150,align:'center'">Nama Pemeriksaan</th>
                    <th data-options="field:'KETERANGAN',width:150">Keterangan</th>
		            <th data-options="field:'LAST_USER',width:150,align:'center'">Last User</th>
		            <th data-options="field:'CREATE_DATE',width:250,align:'center'">Date</th>
		            <th data-options="field:'status',width:250,align:'center'" hidden="true">Status</th>
		        </tr>
		    </thead>
		</table>
	</div>
</div>

<!-- ================== dialog add barang ============================== -->
<div id="dlg_nama" class="easyui-dialog" title="Form Nama Pemeriksaan" style="width:420px;height:300px;padding:10px" closed="true" modal="true"
            data-options="
                iconCls: 'icon-save',
                toolbar: toolbar_2
            ">
    <form id="fm_nama" action="<?= base_url().$menu_link->controller;?>/insert" method="post" enctype="multipart/form-data">
	    <table cellpadding="5">
	        <tr>
	            <td width="50" valign="top">Nama Pemeriksaan</td>
	            <td>
	            	<input class="easyui-textbox" name="nm_pemeriksaan" id="nm_pemeriksaan" value="" data-options="required:true" style="height:25px;width:250px"></input>
	            	<input type="hidden" name="id_nama" id="id_nama" style="height:15px;width:250px;"></input>
	            	<input type="hidden" name="status" id="status"  style="height:15px;width:250px;"></input>
	            </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
             <tr>
	            <td width="120" valign="top">Keterangan</td>
	            <td><input class="easyui-textbox" type="text" name="ket" id="ket" data-options="required:true,multiline:true" style="height:80px;width:250px"></input></td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
	       <tr>
	            <td width="50">Nama Unit</td>
	            
	            <td>
	            	<select class="easyui-combogrid" style="width:250px;height:25px" id="id_unit" name="id_unit" data-options="
				            panelWidth: 500,
				            idField: 'ID_UNIT',
				            textField: 'NAMA_UNIT',
				            url: 'get_list_unit',
				            method: 'get',
				            required:true,
				            columns: [[
				                {field:'ID_UNIT',title:'Id Unit',width:100},
				                {field:'NAMA_UNIT',title:'Nama Unit',width:150},
				            ]],
				            fitColumns: true
				        ">
				    </select>
	            </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
            <tr>
	            <td width="50">Jenis Pemeriksaan</td>
	            
	            <td>
	            	<select class="easyui-combogrid" style="width:250px;height:25px" id="id_jenis" name="id_jenis" data-options="
				            panelWidth: 500,
				            idField: 'ID_JENIS',
				            textField: 'JENIS_PEMERIKSAAN',
				            url: 'get_list_jenis',
				            method: 'get',
				            required:true,
				            columns: [[
				                {field:'ID_JENIS',title:'Id Jenis Pemeriksaan',width:100},
				                {field:'JENIS_PEMERIKSAAN',title:'Jenis Pemeriksaan',width:150},
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

    var toolbar = [{
        text:'Add',
        iconCls:'icon-add',
        disabled:false,
        handler:function(){
        	$('#status').val(1);
        	$('#dlg_nama').dialog('open');
        }
    },{
        text:'Edit',
        iconCls:'icon-edit',
        disabled:false,
        handler:function(){
        	var row = $('#grid').datagrid('getSelected');
        	if(row.status == 0){
	        	$('#status').val(2);
	        	$('#id_nama').val(row.ID_NAMA_PEMERIKSAAN);
	        	$('#nm_pemeriksaan').textbox('setValue',row.NAMA_PEMERIKSAAN);
	        	$('#ket').textbox('setValue',row.KETERANGAN);
	        	
	        	$('#dlg_nama').dialog('open');
	        }
        }
    },{
        text:'Delete',
        iconCls:'icon-remove',
        disabled:false,
        handler:function(){
        	var row = $('#grid').datagrid('getSelected');
        	if(row.status == 0){
	        	$.messager.confirm('Confirm', 'Apakah Anda yakin ?', function(r){
	                if (r){
			        	$('#status').val(3);
			        	$('#id_nama').val(row.ID_NAMA_PEMERIKSAAN);
			        	$('#nm_pemeriksaan').textbox('setValue',row.NAMA_PEMERIKSAAN);
			        	$('#ket').textbox('setValue',row.KETERANGAN);

			        	save_data('fm_nama');
	                }
	            });
	        }
        }
    }];

    var toolbar_2 = [{
            text:'Save',
            iconCls:'icon-save',
            disabled:false,
            handler:function(){
               save_data('fm_nama');
            }
        },'-',{
            text:'Refresh',
            iconCls:'icon-reload',
            handler:function(){
               $('#fm_nama').form('clear');
            }
        },'-',{
        	text:'Cancel',
            iconCls:'icon-cancel',
            handler:function(){
               $('#dlg_nama').dialog('close');
            }
        }];

        get_privillage('<?=$menu_link->MenuID;?>','dlg_<?=$menu_link->controller;?>','d');
</script>
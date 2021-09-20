<div class="easyui-layout" style="height:450px;width:100%">
	<div data-options="region:'east',split:true" title="Filter" style="width:20%;height:450px">
		<br>
		<p><input class="easyui-textbox" type="text" name="txt_no" id="txt_no" data-options="prompt:'Id Employee'" style="height:25px;width:200px"></p>
		<p><input class="easyui-textbox" type="text" name="txt_desc" id="txt_desc" data-options="prompt:'Nama Lengkap'" style="height:25px;width:200px"></p>
		<p><label><input type="checkbox" name="chkdate" id="chkdate" onclick="change_date()"></label></p>
		<p><label style="width:50px;padding-left:10px"><b>From</b></label><input class="easyui-datebox" value="<?= $date_now;?>" data-options="disabled:true" style="width:120px" id="date_from" name="date_form"></p>
		<p><label style="width:50px;padding-left:10px"><b>To</b></label><input class="easyui-datebox" value="<?= $date_now;?>" data-options="disabled:true" style="width:120px" id="date_to" name="date_to"></p>
		<br>
		<br>
		<p><a href="javascript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-search'" style="width:80px;float:right" id="search" name="search" onclick="search_data()">Search</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-print'" style="width:80px;float:right" id="print_data" name="print_data" onclick="print_data()">Print</a></p>
	</div>
	<div data-options="region:'center',title:'List Data Employee',iconCls:'icon-ok'" style="width:80%;height:450px">
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
		            <th data-options="field:'ID_EMPLOYEE',width:150">Id Employee</th>
                    <th data-options="field:'NAMA_LENGKAP',width:150">Nama Lengkap</th>
                    <th data-options="field:'ALAMAT',width:150">Alamat</th>
                    <th data-options="field:'level',width:150">Level</th>
		            <th data-options="field:'lev',width:150,align:'center'">Last User</th>
		            <th data-options="field:'CREATE_DATE',width:250,align:'center'">Date</th>
		            <th data-options="field:'status',width:250,align:'center'" hidden="true">Status</th>
		        </tr>
		    </thead>
		</table>
	</div>
</div>

<!-- ================== dialog add barang ============================== -->
<div id="dlg_emp" class="easyui-dialog" title="Form Employee " style="width:420px;height:300px;padding:10px" closed="true" modal="true"
            data-options="
                iconCls: 'icon-save',
                toolbar: toolbar_2
            ">
    <form id="fm_emp" action="<?= base_url().$menu_link->controller;?>/insert" method="post" enctype="multipart/form-data">
	    <table cellpadding="5">
	        <tr>
	            <td width="50" valign="top">Nama Lengkap</td>
	            <td>
	            	<input class="easyui-textbox" name="nama" id="nama" data-options="required:true" style="height:30px;width:250px"></input>
	            	<input type="hidden" name="code" id="code" style="height:15px;width:250px;"></input>
	            	<input type="hidden" name="status" id="status"  style="height:15px;width:250px;"></input>
                    <input type="hidden" name="id_user" id="id_user"  style="height:15px;width:250px;"></input>
	            </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
             <tr>
	            <td width="120" valign="top">Alamat</td>
	            <td><input class="easyui-textbox" type="text" name="alamat" id="alamat" data-options="required:true,multiline:true" style="height:60px;width:250px"></input></td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
            <tr>
	            <td width="50">Level</td>
	            
	            <td>
	            	<select class="easyui-combogrid" style="width:250px;height:25px" id="id_job" name="id_job" data-options="
				            panelWidth: 500,
				            idField: 'ID_JOB',
				            textField: 'LEVEL',
				            url: 'get_list_job',
				            method: 'get',
				            required:true,
				            columns: [[
				                {field:'ID_JOB',title:'Id job',width:100},
				                {field:'JOB_NAME',title:'Job Name',width:150},
                                {field:'LEVEL',title:'Level',width:150},
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
<!-- =================== end dialog edit vendor ============================== -->
<script type="text/javascript">

    var toolbar = [{
        text:'Add',
        iconCls:'icon-add',
        disabled:false,
        handler:function(){
        	$('#status').val(1);
        	$('#dlg_emp').dialog('open');
        }
    },{
        text:'Edit',
        iconCls:'icon-edit',
        disabled:false,
        handler:function(){
        	var row = $('#grid').datagrid('getSelected');
        	if(row.status == 0){
	        	$('#status').val(2);
	        	$('#code').val(row.ID_EMPLOYEE);
	        	$('#nama').textbox('setValue',row.NAMA_LENGKAP);
				$('#alamat').textbox('setValue',row.ALAMAT);
				$('#id_job').textbox('setValue',row.level);
	        	
	        	$('#dlg_emp').dialog('open');
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
			        	$('#code').val(row.ID_EMPLOYEE);
						$('#nama').textbox('setValue',row.NAMA_LENGKAP);
						$('#alamat').textbox('setValue',row.ALAMAT);
						$('#id_job').textbox('setValue',row.level);

			        	save_data('fm_job');
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
               save_data('fm_emp');
            }
        },'-',{
            text:'Refresh',
            iconCls:'icon-reload',
            handler:function(){
               $('#fm_emp').form('clear');
            }
        },'-',{
        	text:'Cancel',
            iconCls:'icon-cancel',
            handler:function(){
               $('#dlg_emp').dialog('close');
            }
        }];

        get_privillage('<?=$menu_link->MenuID;?>','dlg_<?=$menu_link->controller;?>','d');
</script>
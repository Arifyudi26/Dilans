<div class="easyui-layout" style="height:450px;width:100%">
	<div data-options="region:'east',split:true" title="Filter" style="width:20%;height:450px">
		<br>
		<p><input class="easyui-textbox" type="text" name="txt_no" id="txt_no" data-options="prompt:'ID_DOKTER'" style="height:25px;width:200px"></p>
		<p><input class="easyui-textbox" type="text" name="txt_desc" id="txt_desc" data-options="prompt:'NAMA_DOKTER'" style="height:25px;width:200px"></p>
		<p><label><input type="checkbox" name="chkdate" id="chkdate" onclick="change_date()"></label></p>
		<p><label style="width:50px;padding-left:10px"><b>From</b></label><input class="easyui-datebox" value="<?= $date_now;?>" data-options="disabled:true" style="width:120px" id="date_from" name="date_form"></p>
		<p><label style="width:50px;padding-left:10px"><b>To</b></label><input class="easyui-datebox" value="<?= $date_now;?>" data-options="disabled:true" style="width:120px" id="date_to" name="date_to"></p>
		<br>
		<!-- <p><input type="checkbox" name="chk_TransStatus" value="0"><label style="padding-left:10px">Aktiv</label></p>
		<p><input type="checkbox" name="chk_TransStatus" value="1"><label style="padding-left:10px">Remove</label></p> -->
		<br>
		<p>
			<a href="javascript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-search'" style="width:80px;float:right" id="search" name="search" onclick="search_data()">Search</a>
			<a href="javascript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-print'" style="width:80px;float:right" id="print_data" name="print_data" onclick="print_data()">Print</a>
		</p>
	</div>
	<div data-options="region:'center',title:'List Dokter',iconCls:'icon-ok'" style="width:80%;height:450px">
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
		            <th data-options="field:'ID_DOKTER',width:100">Id Dokter</th>
		            <th data-options="field:'NAMA_DOKTER',width:200">Nama Dokter</th>
		            <th data-options="field:'JENIS_KELAMIN',width:100,align:'center'">Jenis Kelamin</th>
		            <th data-options="field:'ALAMAT',width:250,align:'center'">Alamat</th>
		            <th data-options="field:'NO_TELPON',width:100,align:'center'">NO Telpon</th>
		            <th data-options="field:'TITLE',width:100,align:'center'">Title</th>
		            <th data-options="field:'SPESIALIST',width:150,align:'center'">Spesialist</th>
                    <th data-options="field:'lev',width:150,align:'center'">Last User</th>
		            <th data-options="field:'CREATE_DATE',width:250,align:'center'">Date</th>
		            <th data-options="field:'status',width:250,align:'center'" hidden="true">Status</th>
		        </tr>
		    </thead>
		</table>
	</div>
</div>

<!-- ================== dialog add barang ============================== -->
<div id="dlg_dokter" class="easyui-dialog" title="Form Dokter" style="width:420px;height:320px;padding:10px" closed="true" modal="true"
            data-options="
                iconCls: 'icon-save',
                toolbar: toolbar_2
            ">
    <form id="fm_dokter" action="<?= base_url().$menu_link->controller;?>/insert" method="post" enctype="multipart/form-data">
	    <table cellpadding="5">
	        <tr>
	            <td width="50" valign="top">Nama Dokter</td>
	            <td>
	            	<input class="easyui-textbox" name="nama_dokter" id="nama_dokter" data-options="required:true" style="height:25px;width:250px"></input>
	            	<input type="hidden" name="code" id="code" style="height:15px;width:250px;"></input>
                    <input type="hidden" name="status" id="status" style="height:15px;width:250px;"></input>
	            </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
             <tr>
	            <td width="50">Jenis Kelamin</td>
	            <td><input class="easyui-textbox" type="text" name="jenis" id="jenis" data-options="required:true" style="height:25px;width:250px"></input></td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
	        <tr>
	            <td width="120" valign="top">Alamat</td>
	            <td><input class="easyui-textbox" type="text" name="alamat" id="alamat" data-options="required:true,multiline:true" style="height:80px;width:250px"></input></td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
	        <tr>
	            <td width="120">No Telpon</td>
	            <td><input class="easyui-textbox" type="text" name="telpon" id="telpon" data-options="required:true" style="height:25px;width:250px"></input></td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
	        <tr>
	            <td width="120">Title</td>
	            <td><input class="easyui-textbox" type="text" name="title" id="title" data-options="required:true" style="height:25px;width:250px"></input></td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
	        <tr>
	            <td width="120">Spesialist</td>
	            <td><input class="easyui-textbox" type="text" name="spesial" id="spesial" data-options="required:true" style="height:25px;width:250px"></input></td>
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
        	$('#dlg_dokter').dialog('open');
        }
    },{
        text:'Edit',
        iconCls:'icon-edit',
        disabled:false,
        handler:function(){
        	var row = $('#grid').datagrid('getSelected');
        	if(row.status == 0){
				$('#status').val(2);
	        	$('#code').val(row.ID_DOKTER);
	        	$('#nama_dokter').textbox('setValue',row.NAMA_DOKTER);
	        	$('#jenis').textbox('setValue',row.JENIS_KELAMIN);
	        	$('#alamat').textbox('setValue',row.ALAMAT);
	        	$('#telpon').textbox('setValue',row.NO_TELPON);
	        	$('#title').textbox('setValue',row.TITLE);
				$('#spesial').textbox('setValue',row.SPESIALIST);

	        	$('#dlg_dokter').dialog('open');
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
			        	$('#code').val(row.ID_DOKTER);
			        	$('#nama_dokter').textbox('setValue',row.NAMA_DOKTER);
			        	$('#jenis').textbox('setValue',row.JENIS_KELAMIN);
			        	$('#alamat').textbox('setValue',row.ALAMAT);
			        	$('#telpon').textbox('setValue',row.NO_TELPON);
			        	$('#title').textbox('setValue',row.TITLE);
						$('#spesial').textbox('setValue',row.SPESIALIST);

			        	save_data('fm_dokter');
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
               save_data('fm_dokter');
            }
        },'-',{
            text:'Refresh',
            iconCls:'icon-reload',
            handler:function(){
               $('#fm_dokter').form('clear');
            }
        },'-',{
        	text:'Cancel',
            iconCls:'icon-cancel',
            handler:function(){
               $('#dlg_dokter').dialog('close');
            }
        }];

        get_privillage('<?=$menu_link->MenuID;?>','dlg_<?=$menu_link->controller;?>','d');

        function print_data(){
			var tgl1            = $('#date_from').datebox('getValue');
		    var tgl2            = $('#date_to').datebox('getValue');
		    var id_dokter      = $('#txt_no').textbox('getValue');
		    var nm_dokter    	= $('#txt_desc').textbox('getValue');
		    
		    if($('#chkdate').is(':checked')){
		        var start_date  = new Date(tgl1);
		        var end_date    = new Date(tgl2);
		        var startDate   = start_date.getFullYear()+ '/'+(start_date.getMonth()+1)+'/'+start_date.getDate();
		        var endDate     = end_date.getFullYear()+ '/'+(end_date.getMonth()+1)+'/'+end_date.getDate();
		        var TransStatus = [];

		        parent.printPanel('Preview Dokter Report','<?= $menu_link->controller;?>/print_data','v',startDate,endDate,TransStatus,'',id_dokter,'','',nm_dokter);
		    }else{
		    	var TransStatus = [];

		    	parent.printPanel('Preview Dokter Report','<?= $menu_link->controller;?>/print_data','v2','','',TransStatus,'',id_dokter,'','',nm_dokter);
		    }
		}

</script>
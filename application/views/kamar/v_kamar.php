<div class="easyui-layout" style="height:450px;width:100%">
	<div data-options="region:'east',split:true" title="Filter" style="width:20%;height:450px">
		<br>
		<p><input class="easyui-textbox" type="text" name="txt_no" id="txt_no" data-options="prompt:'Id kamar'" style="height:25px;width:200px"></p>
		<p><input class="easyui-textbox" type="text" name="txt_desc" id="txt_desc" data-options="prompt:'Nama Kamar'" style="height:25px;width:200px"></p>
		<p><label><input type="checkbox" name="chkdate" id="chkdate" onclick="change_date()"></label></p>
		<p><label style="width:50px;padding-left:10px"><b>From</b></label><input class="easyui-datebox" value="<?= $date_now;?>" data-options="disabled:true" style="width:120px" id="date_from" name="date_form"></p>
		<p><label style="width:50px;padding-left:10px"><b>To</b></label><input class="easyui-datebox" value="<?= $date_now;?>" data-options="disabled:true" style="width:120px" id="date_to" name="date_to"></p>
		<br>
		<br>
		<p><a href="javascript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-search'" style="width:80px;float:right" id="search" name="search" onclick="search_data()">Search</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-print'" style="width:80px;float:right" id="print_data" name="print_data" onclick="print_data()">Print</a></p>
	</div>
	<div data-options="region:'center',title:'List Kamar',iconCls:'icon-ok'" style="width:80%;height:450px">
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
		            <th data-options="field:'ID_KAMAR',width:150">Id Kamar</th>
                    <th data-options="field:'NO_KAMAR',width:150">No Kamar</th>
                    <th data-options="field:'NAMA_KAMAR',width:150">Nama Kamar</th>
                    <th data-options="field:'JUMLAH_BED',width:150">Jumlah Bed</th>
                    <th data-options="field:'TARIF',width:150">Tarif</th>
                    <th data-options="field:'KETERANGAN',width:150">Keterangan</th>
		            <th data-options="field:'lev',width:150,align:'center'">Last User</th>
		            <th data-options="field:'CREATE_DATE',width:250,align:'center'">Date</th>
		            <th data-options="field:'status',width:250,align:'center'" hidden="true">Status</th>
		        </tr>
		    </thead>
		</table>
	</div>
</div>

<!-- ================== dialog add barang ============================== -->
<div id="dlg_kamar" class="easyui-dialog" title="Form Kamar" style="width:420px;height:300px;padding:10px" closed="true" modal="true"
            data-options="
                iconCls: 'icon-save',
                toolbar: toolbar_2
            ">
    <form id="fm_kamar" action="<?= base_url().$menu_link->controller;?>/insert" method="post" enctype="multipart/form-data">
	    <table cellpadding="5">
	        <tr>
	            <td width="50" valign="top">No Kamar</td>
	            <td>
	            	<input class="easyui-textbox" name="no_kamar" id="no_kamar" value="<?=$no;?>" data-options="required:true" style="height:25px;width:100px"></input>
	            	<input type="hidden" name="code" id="code" style="height:15px;width:250px;"></input>
	            	<input type="hidden" name="status" id="status"  style="height:15px;width:250px;"></input>
	            </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
             <tr>
	            <td width="50" valign="top">Nama Kamar</td>
	            <td>
	            	<input class="easyui-textbox" name="nm_kamar" id="nm_kamar" data-options="required:true" style="height:25px;width:250px"></input>
	            </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
             <tr>
	            <td width="50" valign="top">Jumlah Bed</td>
	            <td>
	            	<input class="easyui-textbox" name="jm_bed" id="jm_bed" data-options="required:true" style="height:25px;width:250px"></input>
	            </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
             <tr>
	            <td width="50" valign="top">Tarif</td>
	            <td>
	            	<input class="easyui-textbox" name="tarif" id="tarif" data-options="required:true" style="height:25px;width:150px"></input>
	            </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
             <tr>
	            <td width="120" valign="top">Keterangan</td>
	            <td><input class="easyui-textbox" type="text" name="ket" id="ket" data-options="required:true,multiline:true" style="height:80px;width:250px"></input></td>
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
        	$('#dlg_kamar').dialog('open');
        }
    },{
        text:'Edit',
        iconCls:'icon-edit',
        disabled:false,
        handler:function(){
        	var row = $('#grid').datagrid('getSelected');
        	if(row.status == 0){
	        	$('#status').val(2);
	        	$('#code').val(row.ID_KAMAR);
	        	$('#no_kamar').textbox('setValue',row.NO_KAMAR);
	        	$('#nm_kamar').textbox('setValue',row.NAMA_KAMAR);
				$('#jm_bed').textbox('setValue',row.JUMLAH_BED);
				$('#tarif').textbox('setValue',row.TARIF);
				$('#ket').textbox('setValue',row.KETERANGAN);
	        	
	        	$('#dlg_kamar').dialog('open');
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
			        	$('#code').val(row.ID_KAMAR);
	        			$('#no_kamar').textbox('setValue',row.NO_KAMAR);
	        			$('#nm_kamar').textbox('setValue',row.NAMA_KAMAR);
						$('#jm_bed').textbox('setValue',row.JUMLAH_BED);
						$('#tarif').textbox('setValue',row.TARIF);
						$('#ket').textbox('setValue',row.KETERANGAN);

			        	save_data('fm_kamar');
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
               save_data('fm_kamar');
            }
        },'-',{
            text:'Refresh',
            iconCls:'icon-reload',
            handler:function(){
               $('#fm_kamar').form('clear');
            }
        },'-',{
        	text:'Cancel',
            iconCls:'icon-cancel',
            handler:function(){
               $('#dlg_kamar').dialog('close');
            }
        }];

        get_privillage('<?=$menu_link->MenuID;?>','dlg_<?=$menu_link->controller;?>','d');
		
		
		 function print_data(){
			var tgl1            = $('#date_from').datebox('getValue');
		    var tgl2            = $('#date_to').datebox('getValue');
		    var id_kamar      = $('#txt_no').textbox('getValue');
		    var nama_kamar    	= $('#txt_desc').textbox('getValue');
		    
		    if($('#chkdate').is(':checked')){
		        var start_date  = new Date(tgl1);
		        var end_date    = new Date(tgl2);
		        var startDate   = start_date.getFullYear()+ '/'+(start_date.getMonth()+1)+'/'+start_date.getDate();
		        var endDate     = end_date.getFullYear()+ '/'+(end_date.getMonth()+1)+'/'+end_date.getDate();
		        var TransStatus = [];

		        parent.printPanel('Preview Kamar Report','<?= $menu_link->controller;?>/print_data','v',startDate,endDate,TransStatus,'',id_kamar,'','',nama_kamar);
		    }else{
		    	var TransStatus = [];

		    	parent.printPanel('Preview Kamar Report','<?= $menu_link->controller;?>/print_data','v2','','',TransStatus,'',id_kamar,'','',nama_kamar);
		    }
		}
		
</script>
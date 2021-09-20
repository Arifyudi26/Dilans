<div class="easyui-layout" style="height:450px;width:100%">
	<div data-options="region:'east',split:true" title="Filter" style="width:20%;height:450px">
		<br>
		<p><input class="easyui-textbox" type="text" name="txt_no" id="txt_no" data-options="prompt:'Id Pem gizi Seimbang'" style="height:25px;width:200px"></p>
		<p><input class="easyui-textbox" type="text" name="txt_desc" id="txt_desc" data-options="prompt:'Pemberian makanan'" style="height:25px;width:200px"></p>
		<p><label><input type="checkbox" name="chkdate" id="chkdate" onclick="change_date()"></label></p>
		<p><label style="width:50px;padding-left:10px"><b>From</b></label><input class="easyui-datebox" value="<?= $date_now;?>" data-options="disabled:true" style="width:120px" id="date_from" name="date_form"></p>
		<p><label style="width:50px;padding-left:10px"><b>To</b></label><input class="easyui-datebox" value="<?= $date_now;?>" data-options="disabled:true" style="width:120px" id="date_to" name="date_to"></p>
		<br>
		<!-- <p><input type="checkbox" name="chk_TransStatus" value="0"><label style="padding-left:10px">Aktiv</label></p>
		<p><input type="checkbox" name="chk_TransStatus" value="1"><label style="padding-left:10px">Remove</label></p> -->
		<br>
		<p><a href="javascript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-search'" style="width:80px;float:right" id="search" name="search" onclick="search_data()">Search</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-print'" style="width:80px;float:right" id="print_data" name="print_data" onclick="print_data()">Print</a></p>
	</div>
	<div data-options="region:'center',title:'List Data Pemeriksaan Gizi Seimbang',iconCls:'icon-ok'" style="width:80%;height:450px">
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
		            <th data-options="field:'ID_GIZI_SMBNG',width:150">Id pem gizi Seimbang</th>
                    <th data-options="field:'PEMBERIAN_MAKANAN',width:170">Pemberian makanan</th>
                    <th data-options="field:'TARIF',width:130">Tarif</th>
		            <th data-options="field:'KETERANGAN',width:200,align:'center'">Keterangan</th>
		            <th data-options="field:'lev',width:130,align:'center'">Last User</th>
		            <th data-options="field:'CREATE_DATE',width:250,align:'center'">Date</th>
		            <th data-options="field:'status',width:250,align:'center'" hidden="true">Status</th>
		        </tr>
		    </thead>
		</table>
	</div>
</div>

<!-- ================== dialog add gizi seimbang ============================== -->
<div id="dlg_gizi" class="easyui-dialog" title="Form Pemberian Makanan (Gizi seimbang)" style="width:420px;height:300px;padding:10px" closed="true" modal="true"
            data-options="
                iconCls: 'icon-save',
                toolbar: toolbar_2
            ">
    <form id="fm_gizi" action="<?= base_url().$menu_link->controller;?>/insert" method="post" enctype="multipart/form-data">
	    <table cellpadding="5">
	        <tr>
	            <td width="50" valign="top">Pemberian Makanan</td>
	            <td>
	            	<input class="easyui-textbox" name="mkn" id="mkn" data-options="required:true" style="height:30px;width:250px"></input>
	            	<input type="hidden" name="code" id="code" style="height:15px;width:250px;"></input>
	            	<input type="hidden" name="status" id="status"  style="height:15px;width:250px;"></input>
	            </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
            <tr>
	            <td width="50" valign="top">Tarif</td> 
	            <td>
	            	<input class="easyui-textbox" name="tarif" id="tarif" data-options="required:true" style="height:30px;width:250px"></input>
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
<!-- =================== end dialog edit gizi seimbang ============================== -->
<script type="text/javascript">

    var toolbar = [{
        text:'Add',
        iconCls:'icon-add',
        disabled:false,
        handler:function(){
        	$('#status').val(1);
        	$('#dlg_gizi').dialog('open');
        }
    },{
        text:'Edit',
        iconCls:'icon-edit',
        disabled:false,
        handler:function(){
        	var row = $('#grid').datagrid('getSelected');
        	if(row.status == 0){
	        	$('#status').val(2);
	        	$('#code').val(row.ID_GIZI_SMBNG);
	        	$('#mkn').textbox('setValue',row.PEMBERIAN_MAKANAN);
				$('#tarif').textbox('setValue',row.TARIF);
				$('#ket').textbox('setValue',row.KETERANGAN);
	        	
	        	$('#dlg_gizi').dialog('open');
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
						$('#code').val(row.ID_GIZI_SMBNG);
						$('#mkn').textbox('setValue',row.PEMBERIAN_MAKANAN);
						$('#tarif').textbox('setValue',row.TARIF);
						$('#ket').textbox('setValue',row.KETERANGAN);
										
			        	save_data('fm_gizi');
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
               save_data('fm_gizi');
            }
        },'-',{
            text:'Refresh',
            iconCls:'icon-reload',
            handler:function(){
               $('#fm_gizi').form('clear');
            }
        },'-',{
        	text:'Cancel',
            iconCls:'icon-cancel',
            handler:function(){
               $('#dlg_gizi').dialog('close');
            }
        }];

        get_privillage('<?=$menu_link->MenuID;?>','dlg_<?=$menu_link->controller;?>','d');
		
			 function print_data(){
			var tgl1            = $('#date_from').datebox('getValue');
		    var tgl2            = $('#date_to').datebox('getValue');
		    var id_gizi     = $('#txt_no').textbox('getValue');
		    var gizi   	= $('#txt_desc').textbox('getValue');
		    
		    if($('#chkdate').is(':checked')){
		        var start_date  = new Date(tgl1);
		        var end_date    = new Date(tgl2);
		        var startDate   = start_date.getFullYear()+ '/'+(start_date.getMonth()+1)+'/'+start_date.getDate();
		        var endDate     = end_date.getFullYear()+ '/'+(end_date.getMonth()+1)+'/'+end_date.getDate();
		        var TransStatus = [];

		        parent.printPanel('Preview Pem Gizi Seimbang Report','<?= $menu_link->controller;?>/print_data','v',startDate,endDate,TransStatus,'',id_gizi,'','',gizi);
		    }else{
		    	var TransStatus = [];


		    	parent.printPanel('Preview Pem Gizi Seimbang Report','<?= $menu_link->controller;?>/print_data','v2','','',TransStatus,'',id_gizi,'','',gizi);
		    }
		}
		
		
</script>
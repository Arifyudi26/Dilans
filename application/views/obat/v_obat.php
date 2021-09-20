<div class="easyui-layout" style="height:450px;width:100%">
	<div data-options="region:'east',split:true" title="Filter" style="width:20%;height:450px">
		<br>
		<p><input class="easyui-textbox" type="text" name="txt_no" id="txt_no" data-options="prompt:'Id Obat'" style="height:25px;width:200px"></p>
		<p><input class="easyui-textbox" type="text" name="txt_desc" id="txt_desc" data-options="prompt:'Nama Obat'" style="height:25px;width:200px"></p>
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
	<div data-options="region:'center',title:'List Data Obat',iconCls:'icon-ok'" style="width:80%;height:450px">
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
		            <th data-options="field:'ID_OBAT',width:150">Id Obat</th>
                    <th data-options="field:'NAMA_OBAT',width:150">Nama Obat</th>
                    <th data-options="field:'SATUAN',width:150">Satuan obat</th>
		            <th data-options="field:'JENIS_OBAT',width:150,align:'center'">Jenis Obat</th>
                    <th data-options="field:'GENERIC',width:150">Generic</th>
                    <th data-options="field:'SUB_JENIS',width:150">Sub Jenis</th>
                    <th data-options="field:'MASA_BERLAKU',width:150">Masa Berlaku</th>
                    <th data-options="field:'STOK',width:150">Stok</th>
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
<div id="dlg_obat" class="easyui-dialog" title="Form Obat" style="width:420px;height:300px;padding:10px" closed="true" modal="true"
            data-options="
                iconCls: 'icon-save',
                toolbar: toolbar_2
            ">
    <form id="fm_obat" action="<?= base_url().$menu_link->controller;?>/insert" method="post" enctype="multipart/form-data">
	    <table cellpadding="5">
	        <tr>
	            <td width="50" valign="top">Nama obat</td>
	            <td>
	            	<input class="easyui-textbox" name="nm_obat" id="nm_obat"  data-options="required:true" style="height:25px;width:250px"></input>
	            	<input type="hidden" name="code" id="code" style="height:15px;width:250px;"></input>
	            	<input type="hidden" name="status" id="status"  style="height:15px;width:250px;"></input>
                    <input type="hidden" name="id_obat" id="id_obat" value="<?=$obat;?>" style="height:15px;width:250px;"></input>
	            </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
            <tr>
	            <td width="50">Satuan Obat</td> 
	            <td>
	            	<select class="easyui-combobox" style="width:250px;" id="satuan" name="satuan" data-options="required:true">
                    <option value=""></option>
                    <option value="Box">Box</option>
                    <option value="Batang">Batang</option>
                    <option value="Botol">Botol</option>
				    </select>
	            </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
            <tr>
	            <td width="50">Jenis Obat</td> 
	            <td>
	            	<select class="easyui-combobox" style="width:250px;" id="jenis" name="jenis" data-options="required:true">
                    <option value=""></option>
                    <option value="Alked">Alked</option>
				    </select>
	            </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
            <tr>
	            <td width="50">Generik</td> 
	            <td>
	            	<select class="easyui-combobox" style="width:250px;" id="generik" name="generik" data-options="required:true">
                    <option value=""></option>
                    <option value="Generik">Generic</option>
                    <option value="Non Generik">Non Generic</option>
				    </select>
	            </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
            <tr>
	            <td width="50">Sub Jenis</td> 
	            <td>
	            	<select class="easyui-combobox" style="width:250px;" id="sub_jenis" name="sub_jenis" data-options="required:true">
                    <option value=""></option>
                    <option value="Tablet">Tablet</option>
                    <option value="Pulvis">Pulvis</option>
                    <option value="Pil">Pil</option>
                    <option value="Kapsul">Kapsul</option>
                    <option value="Kaplet">Kaplet</option>
                    <option value="Larutan">Larutan</option>
                    <option value="Salep">Salep</option>
                    <option value="Suppositoria">Suppositoria</option>
                    <option value="Cair tetes">Cair Tetes</option>
                    <option value="Suntik">Suntik</option>
				    </select>
	            </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
             <tr>
	            <td width="50" valign="top">Masa Berlaku</td>
	            <td>
	            	<input class="easyui-datebox" name="masa_berlaku" id="masa_berlaku"  value="<?= $date_now;?>" data-options="required:true" style="width:200px;"></input>
	            </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
            <tr>
	            <td width="50" valign="top">Stok</td>
	            <td>
	            	<input class="easyui-textbox" type="text" name="stok" id="stok"  data-options="required:true" style="height:25px;width:200px"></input>
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
        	$('#dlg_obat').dialog('open');
        }
    },{
        text:'Edit',
        iconCls:'icon-edit',
        disabled:false,
        handler:function(){
        	var row = $('#grid').datagrid('getSelected');
        	if(row.status == 0){
	        	$('#status').val(2);
	        	$('#code').val(row.ID_OBAT);
	        	$('#nm_obat').textbox('setValue',row.NAMA_OBAT);
				$('#satuan').textbox('setValue',row.SATUAN);
				$('#jenis').textbox('setValue',row.JENIS_OBAT);
				$('#generik').textbox('setValue',row.GENERIC);
				$('#sub_jenis').textbox('setValue',row.SUB_JENIS);
				$('#masa_berlaku').textbox('setValue',row.MASA_BERLAKU);
				$('#stok').textbox('setValue',row.STOK);
	        	$('#ket').textbox('setValue',row.KETERANGAN);
	        	
	        	$('#dlg_obat').dialog('open');
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
			        	$('#code').val(row.ID_OBAT);
						$('#nm_obat').textbox('setValue',row.NAMA_OBAT);
						$('#satuan').textbox('setValue',row.SATUAN);
						$('#jenis').textbox('setValue',row.JENIS_OBAT);
						$('#generik').textbox('setValue',row.GENERIC);
						$('#sub_jenis').textbox('setValue',row.SUB_JENIS);
						$('#masa_berlaku').textbox('setValue',row.MASA_BERLAKU);
						$('#stok').textbox('setValue',row.STOK);
						$('#ket').textbox('setValue',row.KETERANGAN);

			        	save_data('fm_obat');
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
               save_data('fm_obat');
            }
        },'-',{
            text:'Refresh',
            iconCls:'icon-reload',
            handler:function(){
               $('#fm_obat').form('clear');
            }
        },'-',{
        	text:'Cancel',
            iconCls:'icon-cancel',
            handler:function(){
               $('#dlg_obat').dialog('close');
            }
        }];
        get_privillage('<?=$menu_link->MenuID;?>','dlg_<?=$menu_link->controller;?>','d');
		
		 function print_data(){
			var tgl1            = $('#date_from').datebox('getValue');
		    var tgl2            = $('#date_to').datebox('getValue');
		    var id_obat      = $('#txt_no').textbox('getValue');
		    var nama_obat    	= $('#txt_desc').textbox('getValue');
		    
		    if($('#chkdate').is(':checked')){
		        var start_date  = new Date(tgl1);
		        var end_date    = new Date(tgl2);
		        var startDate   = start_date.getFullYear()+ '/'+(start_date.getMonth()+1)+'/'+start_date.getDate();
		        var endDate     = end_date.getFullYear()+ '/'+(end_date.getMonth()+1)+'/'+end_date.getDate();
		        var TransStatus = [];
		        parent.printPanel('Preview Obat Report','<?= $menu_link->controller;?>/print_data','v',startDate,endDate,TransStatus,'',id_obat,'','',nama_obat);
		    }else{
		    	var TransStatus = [];

		    	parent.printPanel('Preview Obat Report','<?= $menu_link->controller;?>/print_data','v2','','',TransStatus,'',id_obat,'','',nama_obat);
		    }
		}
		
</script>
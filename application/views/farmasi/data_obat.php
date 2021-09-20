<div class="easyui-layout" style="height:450px;width:100%">
	<div data-options="region:'east',split:true" title="Filter" style="width:20%;height:450px">
		<br>
		<p><input class="easyui-textbox" type="text" name="txt_no" id="txt_no" data-options="prompt:'Id Obat'" style="height:25px;width:200px"></p>
		<p><input class="easyui-textbox" type="text" name="txt_desc" id="txt_desc" data-options="prompt:'Nama Obat'" style="height:25px;width:200px"></p>
		<p><label><input type="checkbox" name="chkdate" id="chkdate" onclick="change_date()"></label></p>
		<p><label style="width:50px;padding-left:10px"><b>From</b></label><input class="easyui-datebox" value="<?= $date_now;?>" data-options="disabled:true" style="width:120px" id="date_from" name="date_form"></p>
		<p><label style="width:50px;padding-left:10px"><b>To</b></label><input class="easyui-datebox" value="<?= $date_now;?>" data-options="disabled:true" style="width:120px" id="date_to" name="date_to"></p>
		<br>
		<br>
		<p><a href="javascript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-search'" style="width:80px;float:right" id="search" name="search" onclick="search_data()">Search</a>
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
	            	<input class="easyui-textbox" name="nm_obat" id="nm_obat" data-options="required:true" style="height:25px;width:250px"></input>
	            	<input type="hidden" name="code" id="code" style="height:15px;width:250px;"></input>
	            	<input type="hidden" name="status" id="status"  style="height:15px;width:250px;"></input>
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
	            	<input class="easyui-datebox" name="masa_berlaku" id="masa_berlaku"  value="<?= $date_now;?>" data-options="required:true" style="width:150px;"></input>
	            </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
            <tr>
	            <td width="50" valign="top">Stok</td>
	            <td>
	            	<input class="easyui-textbox" name="stok" id="stok"  data-options="required:true" style="height:25px;width:150px"></input>
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
</script>
<?php
$un = $this->session->userdata('Puskesmas-sawah-besar@2017');
?>
<div class="easyui-layout" style="height:450px;width:100%">
	<div data-options="region:'east',split:true" title="Filter" style="width:20%;height:450px">
		<br>
		<p><input class="easyui-textbox" type="text" name="txt_id" id="txt_id" data-options="prompt:'Id Daftar RB'" style="height:25px;width:200px"></p>
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
        				parent.editPanel('Preview <?=$menu_link->MenuLabel;?>','<?=$menu_link->controller;?>/preview',row.ID_DAFTAR_RB);
        			}
				}
			">
		    <thead>
		        <tr>
		            <th data-options="field:'ID_DAFTAR_RB',width:120,align:'center'">Id Daftar RB</th>
		            <th data-options="field:'KODE_PASIEN',width:120,align:'center'">Kd pasien</th>
		            <th data-options="field:'NAMA_LENGKAP',width:150,align:'center'">Nama Pasien</th>
                    <th data-options="field:'UMUR',width:150,align:'center'">Umur</th>
                    <th data-options="field:'ALAMAT',width:150,align:'center'">Alamat</th>
                    <th data-options="field:'NO_BPJS',width:150,align:'center'">NO BPJS</th>
                    <th data-options="field:'NAMA_SUAMI',width:150,align:'center'">Nama Suami</th>
                    <th data-options="field:'NO_TELPON',width:150,align:'center'">No Telpon</th>
                    <th data-options="field:'TGL_MASUK',width:150,align:'center'">Tgl Masuk</th>
                    <th data-options="field:'nama',width:150,align:'center'">Petugas</th>
                    <th data-options="field:'STATUS_RAWAT',width:115,align:'center'" formatter="formatRawat">Status</th>
                    <th data-options="field:'ID_BEROBAT',width:150,align:'center'">Id Berobat</th>
		            <th data-options="field:'lev',width:150,align:'center'">Last User</th>
		            <th data-options="field:'CREATE_DATE',width:250,align:'center'">Create date</th>
		            <th data-options="field:'status',width:250,align:'center'" hidden="true">Status</th>
              </tr>
		    </thead>
		</table>
	</div>
</div>

<script type="text/javascript">
   
   function formatRawat(status){
	if(status == 0){
		return 'Pasien Di Rawat';
	}else if(status == 1){
		return 'Pasien pulang';
	}
}


    var toolbar = [{
        text:'Add',
        iconCls:'icon-add',
        disabled:false,
        handler:function(){
        	parent.addPanel('New <?= $menu_link->MenuLabel;?>','<?= $menu_link->controller;?>/add');
        }
    },{
        text:'Prev & Edit',
        iconCls:'icon-edit',
        disabled:false,
        handler:function(){
        	var row 		= $('#grid').datagrid('getSelected');
        	parent.editPanel('Preview <?= $menu_link->MenuLabel;?>','<?= $menu_link->controller;?>/preview',row.ID_DAFTAR_RB);
        }
    },{
        text:'Delete',
        iconCls:'icon-remove',
        disabled:false,
        handler:function(){
        	var row = $('#grid').datagrid('getSelected');
        	var transaction_no = row.ID_DAFTAR_RB;
        	if(row.status == 0){
    			suspend_data('<?= $menu_link->controller;?>/suspend_data','grid',transaction_no);      
			   }  
	        }
        }];
     get_privillage('<?=$menu_link->MenuID;?>','dlg_<?=$menu_link->controller;?>','view');

</script>
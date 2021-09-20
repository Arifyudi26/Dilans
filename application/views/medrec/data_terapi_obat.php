<?php
$un = $this->session->userdata('Puskesmas-sawah-besar@2017');
?>
<div class="easyui-layout" style="height:450px;width:100%">
	<div data-options="region:'east',split:true" title="Filter" style="width:20%;height:450px">
		<br>
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
		        method:'get'
			">
		    <thead>
		        <tr>
		            <th data-options="field:'KODE_PASIEN',width:120,align:'center'">Kd pasien</th>
                    <th data-options="field:'NAMA_LENGKAP',width:120,align:'center'">Nama pasien</th>
                    <th data-options="field:'TANGGAL',width:120">Tanggal</th>                    
		            <th data-options="field:'ID_OBAT',width:150">Id obat</th>
                    <th data-options="field:'NAMA_OBAT',width:150">Nama Obat</th>
                    <th data-options="field:'SATUAN',width:150">Satuan</th>
                    <th data-options="field:'QTY',width:150">QTY</th>
                    <th data-options="field:'ATURAN',width:150">Aturan</th>
		            <th data-options="field:'KETERANGAN',width:150,align:'center'">Keterangan</th>
                    <th data-options="field:'nama',width:150">Last User</th>
		            <th data-options="field:'CREATE_DATE',width:250,align:'center'">Create date</th>
		            <th data-options="field:'status',width:250,align:'center'" hidden="true">Status</th>
		        </tr>
		    </thead>
		</table>
	</div>
</div>

<script type="text/javascript">
     get_privillage('<?=$menu_link->MenuID;?>','dlg_<?=$menu_link->controller;?>','view');
</script>
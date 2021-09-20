<?php
$un = $this->session->userdata('Puskesmas-sawah-besar@2017');
?>
<div class="easyui-layout" style="height:450px;width:100%">
	<div data-options="region:'east',split:true" title="Filter" style="width:20%;height:450px">
		<br>
		<p><input class="easyui-textbox" type="text" name="txt_id" id="txt_id" data-options="prompt:'Id Poli Umum'" style="height:25px;width:200px"></p>
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
        				parent.editPanel('Edit <?=$menu_link->MenuLabel;?>','<?=$menu_link->controller;?>/preview',row.ID_POLI_UMUM);
        			}
				}
			">
		    <thead>
		        <tr>
		            <th data-options="field:'ID_POLI_UMUM',width:120">Id Poli Umum</th>
		            <th data-options="field:'KODE_PASIEN',width:120,align:'center'">Kd pasien</th>
		            <th data-options="field:'NAMA_LENGKAP',width:150">Nama Pasien</th>
                    <th data-options="field:'JENIS_KELAMIN',width:120">Jenis Kelamin</th>
                    <th data-options="field:'UMUR',width:150">Umur</th>
                    <th data-options="field:'ALAMAT',width:150">Alamat</th>
                    <th data-options="field:'NO_BPJS',width:150">NO BPJS</th>
                    <th data-options="field:'TANGGAL',width:150">Tanggal</th>
                    <th data-options="field:'KELUHAN',width:150">Keluhan</th>
                    <th data-options="field:'TINGGI_BADAN',width:150">Tinggi Badan</th>
                    <th data-options="field:'BERAT_BADAN',width:150">Berat Badan</th>
                    <th data-options="field:'SISTOLE',width:150">Sistole</th>
                    <th data-options="field:'DIASISTOLE',width:150">Diastole</th>
                    <th data-options="field:'RASPIRATORY_RATE',width:150">Raspiratory Rate</th>
                    <th data-options="field:'HEART_RATE',width:150">Heart Rate</th>
                    <th data-options="field:'PD',width:150">PD</th>
                    <th data-options="field:'ID_DIAGNOSA',width:150">Id Diagnosa</th>
                    <th data-options="field:'DESKRIPSI_ICD',width:150">Deskripsi ICD</th>
                    <th data-options="field:'nama',width:150">Nama Dokter</th>
                    <th data-options="field:'ID_PEMERIKSAAN',width:150">Id Pemeriksaan</th>
		            <th data-options="field:'lev',width:150,align:'center'">Last User</th>
		            <th data-options="field:'CREATE_DATE',width:250,align:'center'">Create date</th>
		            <th data-options="field:'status',width:250,align:'center'" hidden="true">Status</th>
		        </tr>
		    </thead>
		</table>
	</div>
</div>


<script type="text/javascript">

    var toolbar = [{
        text:'Add',
        iconCls:'icon-add',
        disabled:false,
        handler:function(){
        	parent.addPanel('New <?= $menu_link->MenuLabel;?>','<?= $menu_link->controller;?>/add');
        }
    },{
        text:'Edit&Prev',
        iconCls:'icon-edit',
        disabled:false,
        handler:function(){
        	var row 		= $('#grid').datagrid('getSelected');
        	parent.editPanel('Edit <?= $menu_link->MenuLabel;?>','<?= $menu_link->controller;?>/preview',row.ID_POLI_UMUM);
        }
    },{
        text:'Delete',
        iconCls:'icon-remove',
        disabled:false,
        handler:function(){
        	var row = $('#grid').datagrid('getSelected');
			var transaction_no = row.ID_POLI_UMUM;
        	if(row.status == 0){
    			suspend_data('<?= $menu_link->controller;?>/suspend_data','grid',transaction_no);   
	        }
        }
    }];
		
		function cari() {
	       
	   	 var kd_pasien = $('#kd_pasien').val();
		 var nm_pasien = $('#nm_lengkap').val();
	     if(kd_pasien !='' && nm_pasien!=""){
        		$('#dialog_list_diagnosa').dialog('open');
        	}else{
        		 $.messager.alert('warning','Silahkan isi data dan pemeriksaan terlebih dahulu!','warning');
        	}
	}
	
	function search_list_diagnosa(){
    	$('#list_diagnosa').datagrid('reload',{
    		id_diagnosa 	: $('#id_diagnosa').val(),
    		des_icd 	: $('#des_icd').val(),
    	});

    }
	
  function choose_list_diagnosa(){

	  var row       =  $('#list_diagnosa').datagrid('getChecked');
	  var id_diagnosa 	='';
	  var diagnosa  = '';

        $.each(row, function( index,value) {
            id_diagnosa 	=(value.ID_DIAGNOSA);
			diagnosa    =(value.DESKRIPSI_ICD);
        });

        $('#diagnosa').textbox('setValue',id_diagnosa);
		$('#deskripsi').textbox('setValue',diagnosa);

	    modal_close('dialog_list_diagnosa');
	}
		
     get_privillage('<?=$menu_link->MenuID;?>','dlg_<?=$menu_link->controller;?>','view');

</script>
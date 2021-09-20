<div class="easyui-layout" style="height:450px;width:100%">
	<div data-options="region:'east',split:true" title="Filter" style="width:20%;height:450px">
		<br>
		<p><input class="easyui-textbox" type="text" name="txt_no" id="txt_no" data-options="prompt:'Id Ceklab'" style="height:25px;width:200px"></p>
		<p><input class="easyui-textbox" type="text" name="txt_desc" id="txt_desc" data-options="prompt:'pemeriksaan Lab'" style="height:25px;width:200px"></p>
		<p><label><input type="checkbox" name="chkdate" id="chkdate" onclick="change_date()"></label></p>
		<p><label style="width:50px;padding-left:10px"><b>From</b></label><input class="easyui-datebox" value="<?= $date_now;?>" data-options="disabled:true" style="width:120px" id="date_from" name="date_form"></p>
		<p><label style="width:50px;padding-left:10px"><b>To</b></label><input class="easyui-datebox" value="<?= $date_now;?>" data-options="disabled:true" style="width:120px" id="date_to" name="date_to"></p>
		<br>
		<br>
		<p><a href="javascript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-search'" style="width:80px;float:right" id="search" name="search" onclick="search_data()">Search</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-print'" style="width:80px;float:right" id="print_data" name="print_data" onclick="print_data()">Print</a></p>
	</div>
	<div data-options="region:'center',title:'List Data Cek Laboratorium',iconCls:'icon-ok'" style="width:80%;height:450px">
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
		            <th data-options="field:'ID_CEK_LAB',width:150">Id Cek Lab</th>
                    <th data-options="field:'PEMERIKSAAN_LAB',width:170">Pemeriksaan Lab</th>
                    <th data-options="field:'PRIKSA',width:130">Periksa</th>
                    <th data-options="field:'NILAI_NORMAL',width:130">Nilai Normal</th>
		            <th data-options="field:'SATUAN',width:200,align:'center'">Satuan</th>
            		<th data-options="field:'ID_DT_LAB',width:250,align:'center'">id_dt_lab</th>
		            <th data-options="field:'lev',width:130,align:'center'">Last User</th>
		            <th data-options="field:'CREATE_DATE',width:250,align:'center'">Date</th>
		            <th data-options="field:'status',width:250,align:'center'" hidden="true">Status</th>
		        </tr>
		    </thead>
		</table>
	</div>
</div>

<!--  Dialog list item -->
<div id="dialog_list_lab" class="easyui-dialog" title="List Pemeriksaan dan tarif Lab" style="width:50%;height:500px;background-color:#F8F8F8;padding:5px;top:5px" closed="true" data-options="modal:true" buttons="#dialog_buttton_list_lab">
    <form id="form_tlab" method="post" novalidate>
        <table width="97%" border="0">

        	<tr>
        		<td colspan="3" height="15"></td>
        	</tr>

            <tr>
                <td width="100" align="left" valign="middle"><label style="font-size:12px">Id dT Lab</label></td>
                <td width="14"><b>:</b></td>

                <td colspan="2">
                    <input type="text" style="height:25px;width:300px" name="id_dt_lab" id="id_dt_lab" placeholder="< Id Dt Lab >" onKeyUp="search_list_lab();" />
                </td>
            </tr>
            <tr>
        		<td colspan="3" height="8"></td>
        	</tr>
            <tr>
                <td width="100" align="left" valign="middle"><label style="font-size:12px">Nama Pemeriksaan</label></td>
                <td><b>:</b></td>

                <td colspan="2">
                    <input type="text" style="height:25px;width:300px" name="nama" id="nama" placeholder="< Nama pemeriksaan >" onKeyUp="search_list_lab();" />
                </td>
            </tr>

            <tr>
        		<td colspan="3" height="15"></td>
        	</tr>
	
            <tr>
                <td colspan="3">
                    <table id="list_lab" class="easyui-datagrid" 
                        url="<?= base_url().$menu_link->controller;?>/get_list_lab" 
                        style="height:250px" data-options = "singleSelect:true,
                pageSize:8,">
                        <thead>
                            <tr>
                                <th data-options="field:'ck',checkbox:true"></th>
                                <th field="ID_DT_LAB" data-options="field:'ID_DT_LAB',width:100" sortable="true">Id dt Lab</th>
                                <th field="NAMA_PEMERIKSAAN" data-options="field:'NAMA_PEMERIKSAAN',width:185" sortable="true">Pemeriksaan Lab</th>
                                <th field="TARIF" data-options="field:'TARIF',width:170" sortable="true">Alamat</th>
                            </tr>
                        </thead>
                    </table>
                </td>
            </tr>
        </table>
    </form>
</div>

<!-- Dialog Button -->
<div id="dialog_buttton_list_lab" style="border:none;height:80px">
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-ok" onClick="choose_list_lab();">OK</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onClick="modal_close('dialog_list_lab');">Cancel</a>
</div>
<!-------------------------form data pemeriksaan lab---->

<div id="dlg_lab" class="easyui-dialog" title="Form data pemeriksaan Lab" style="width:400px;height:320px;padding:10px" closed="true" modal="true"
            data-options="
                iconCls: 'icon-save',
                toolbar: toolbar_2
            ">
    <form id="fm_lab" action="<?= base_url().$menu_link->controller;?>/insert" method="post" enctype="multipart/form-data">
	    <table cellpadding="5">
               <tr>
				<td width="100" valign="top">Pemeriksaan Lab</td>
				  <td >
				     <input class="easyui-textbox" type="text" name="id_dt_lab" id="id_dt"  data-options="required:true" style="height:30px;width:60px"><input class="easyui-textbox" type="text" name="pem_lab" id="nm_pem"  data-options="required:true" style="height:30px;width:160px"></input><a href="javascript:void(0)" class="easyui-linkbutton form-button" style="height:30px;" iconCls="icon-add" id="" onClick="cari1();"></a>   					
                  </td>
			  </tr>
			  <tr><td colspan="2" height="5"></td></tr>
               <tr>
				<td width="50" valign="top">Periksa</td>
				  <td >
                 <input class="easyui-textbox" type="text" name="priksa" id="priksa" data-options="required:true" style="height:30px;width:250px"></input>
                 <input type="hidden" name="code" id="code" style="height:15px;width:250px;"></input>
                  <input type="hidden" name="status" id="status" style="height:15px;width:250px;"></input>
                  </td>
			  </tr>
			  <tr><td colspan="2" height="5"></td></tr>
               <tr>
				 <td width="50" valign="top">Nilai Normal</td>
				   <td >
                    <input class="easyui-textbox" type="text" name="n_normal" id="n_normal"  data-options="required:true" style="height:30px;width:250px"></input>
                    </td>
				</tr>
				<tr><td colspan="2" height="5"></td></tr>
               <tr>
				 <td width="50" valign="top">Satuan</td>
				   <td >
                    <input class="easyui-textbox" type="text" name="satuan" id="satuan"  data-options="required:true" style="height:30px;width:250px"></input>
                    </td>
				</tr>
				<tr><td colspan="2" height="5"></td></tr>
		</table>
	</form>
</div>

<script type="text/javascript">

 function search_list_lab(){
    	$('#list_lab').datagrid('reload',{
    		id_dt_lab 	: $('#id_dt_lab').val(),
    		nama 	: $('#nama').val(),
    	});

    }
	
	
	function cari1() {
	
	          		$('#dialog_list_lab').dialog('open');
	}
	
	

  function choose_list_lab(){

	  var row       =  $('#list_lab').datagrid('getChecked');
	  var id_em 	='';
	  var nama  = '';

        $.each(row, function( index,value) {
            id_em 	=(value.ID_DT_LAB);
			nama    =(value.NAMA_PEMERIKSAAN);
        });

        $('#id_dt').textbox('setValue',id_em);
		$('#nm_pem').textbox('setValue',nama);

	    modal_close('dialog_list_lab');
	}


    var toolbar = [{
        text:'Add',
        iconCls:'icon-add',
        disabled:false,
        handler:function(){
        	$('#status').val(1);
        	$('#dlg_lab').dialog('open');
        }
    },{
        text:'Edit',
        iconCls:'icon-edit',
        disabled:false,
        handler:function(){
        	var row = $('#grid').datagrid('getSelected');
        	if(row.status == 0){
	        	$('#status').val(2);
	        	$('#code').val(row.ID_CEK_LAB);
	        	$('#id_dt').textbox('setValue',row.ID_DT_LAB);
	        	$('#nm_pem').textbox('setValue',row.PEMERIKSAAN_LAB);
				$('#priksa').textbox('setValue',row.PRIKSA);
				$('#n_normal').textbox('setValue',row.NILAI_NORMAL);
				$('#satuan').textbox('setValue',row.SATUAN);
	        	
	        	$('#dlg_lab').dialog('open');
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
						$('#code').val(row.ID_CEK_LAB);
						$('#id_dt').textbox('setValue',row.ID_DT_LAB);
						$('#nm_pem').textbox('setValue',row.PEMERIKSAAN_LAB);
						$('#priksa').textbox('setValue',row.PRIKSA);
						$('#n_normal').textbox('setValue',row.NILAI_NORMAL);
						$('#satuan').textbox('setValue',row.SATUAN);
												
			        	save_data('fm_lab');
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
               save_data('fm_lab');
            }
        },'-',{
            text:'Refresh',
            iconCls:'icon-reload',
            handler:function(){
               $('#fm_lab').form('clear');
            }
        },'-',{
        	text:'Cancel',
            iconCls:'icon-cancel',
            handler:function(){
               $('#dlg_lab').dialog('close');
            }
        }];
		
        get_privillage('<?=$menu_link->MenuID;?>','dlg_<?=$menu_link->controller;?>','d');
</script>
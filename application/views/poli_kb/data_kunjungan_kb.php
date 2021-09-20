<?php
$un = $this->session->userdata('Puskesmas-sawah-besar@2017');
?>
<div class="easyui-layout" style="height:450px;width:100%">
	<div data-options="region:'east',split:true" title="Filter" style="width:20%;height:450px">
		<br>
		<p><input class="easyui-textbox" type="text" name="txt_id" id="txt_id" data-options="prompt:'Id kunjungan kb'" style="height:25px;width:200px"></p>
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
        				parent.editPanel('Preview <?=$menu_link->MenuLabel;?>','<?=$menu_link->controller;?>/preview',row.ID_KUNJUNGAN_KB);
        			}
				}
			">
		    <thead>
		        <tr>
		            <th data-options="field:'ID_KUNJUNGAN_KB',width:120">Id Poli Kb</th>
		            <th data-options="field:'KODE_PASIEN',width:120,align:'center'">Kd pasien</th>
		            <th data-options="field:'NAMA_LENGKAP',width:150">Nama Pasien</th>
                    <th data-options="field:'UMUR',width:150">Umur</th>
                    <th data-options="field:'NO_BPJS',width:150">NO Bpjs</th>
                    <th data-options="field:'TGL_DATANG',width:150">TgL Datang</th>
                    <th data-options="field:'HAID_TERAKHIR_TGL',width:150">Haid terakhir</th>
                    <th data-options="field:'BERAT_BADAN',width:150">Berat badan</th>
                    <th data-options="field:'TEKANAN_DARAH',width:150">Tekanan Darah</th>
                    <th data-options="field:'KOMPLIKASI_BERAT',width:150">Komplikasi</th>
                    <th data-options="field:'KEGAGALAN',width:150">Kegagalan</th>
                    <th data-options="field:'PEMERIKSAAN',width:150">Pemeriksaan</th>
                    <th data-options="field:'TGL_KEMBALI',width:150">TGL Kembali</th>
                    <th data-options="field:'PENANGGUNG_JAWAB',width:150">Penanggung Jawab</th>
                    <th data-options="field:'ID_PEM_KB',width:150">Id Pemeriksaan kb</th>
		            <th data-options="field:'lev',width:150,align:'center'">Last User</th>
		            <th data-options="field:'CREATE_DATE',width:250,align:'center'">Create date</th>
		            <th data-options="field:'status',width:250,align:'center'" hidden="true">Status</th>
              </tr>
		    </thead>
		</table>
	</div>
</div>

<div id="dlg_poli_kb" class="easyui-dialog" title="Form Edit Kunjungan Keluarga berencana" style="width:750px;height:350px;padding:10px" closed="true" modal="true"
            data-options="
                iconCls: 'icon-save',
                toolbar: toolbar_2
            ">
    <form id="fm_kb" action="<?= base_url().$menu_link->controller;?>/update" method="post" enctype="multipart/form-data">
       <table width="100%">
         <tr><td colspan="2" height="5"></td></tr>
		  <tr>
		   <td>
	    <table cellpadding="5">
	        <tr>
	            <td width="100" valign="top">Kode Pasien</td>
	            <td>
	            	<input class="easyui-textbox" name="kd_pasien" id="kd_pasien" data-options="required:true" style="height:25px;width:200px"></input>
	            	<input type="hidden" name="code" id="code" style="height:15px;width:250px;"></input>
	            	<input type="hidden" name="status" id="status"  style="height:15px;width:250px;"></input>
                    <input type="hidden" name="id_pkb" id="id_pkb"  style="height:15px;width:250px;"></input>
	            </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
            <tr>
	            <td width="50">Nama pasien</td> 
	            <td>
	            <input class="easyui-textbox" name="nm_lengkap" id="nm_lengkap" data-options="required:true" style="height:25px;width:200px"></input>
	            </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
             <tr>
               <td width="100" >Umur</td>
				<td >
                 <input class="easyui-textbox" type="text" name="umur" id="umur"  data-options="required:true" style="height:25px;width:200px"> 				                
                </td>
			 </tr>
			<tr><td colspan="2" height="5"></td></tr>  
            <tr>
	         <td width="50">No Bpjs</td> 
	           <td>
                <input class="easyui-textbox" type="text" name="bpjs" id="bpjs"  data-options="required:true" style="height:25px;width:200px"></input> 	                
               </td>
	          </tr>
	        <tr><td colspan="2" height="5"></td></tr>
              <tr>
               <td width="100" >Haid Terakhir</td>
				<td >
                 <input class="easyui-datebox" type="text" name="htt" id="htt"  data-options="required:true" style="height:25px;width:200px"></input>
                  </td>
				</tr>
			   <tr><td colspan="2" height="5"></td></tr>  
               <tr>
                <td width="100">Berat Badan</td>
                 <td>
                  <input class="easyui-textbox" type="text" name="bb" id="bb"  data-options="required:true" style="height:25px;width:200px">
                  </td>
                 </tr>
                <tr><td colspan="2" height="5"></td></tr>      
                <tr>
                 <td width="100" >Tekanan Darah</td>
				  <td >
                   <input class="easyui-textbox" type="text" name="td" id="td"  data-options="required:true" style="height:25px;width:200px">                     
                  </td>
				</tr>
			    <tr><td colspan="2" height="5"></td></tr> 
                 <tr>
                   <td width="100" >Tanggal datang</td>
				   <td >
                    <input class="easyui-datebox" type="text" name="tgd" id="tgd"  data-options="required:true" style="height:25px;width:200px"></input>
                   </td>
				  </tr>
			  <tr><td colspan="2" height="5"></td></tr>  
	      </table>
        </td>
        <td align="right" valign="top">
		   <table width="90%" cellpadding="0" cellspacing="0">
                            <tr>
                               <td width="150" >Komplikasi Berat</td>
					            <td >
					    			<input class="easyui-textbox" type="text" name="klb" id="klb" data-options="multiline:true,required:true" style="height:80px;width:250px"></input>
                                  </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr> 
                            <tr>
                               <td width="150" >Kegagalan</td>
					            <td >
                                <select class="easyui-combobox" id="gagalan" name="kegagalan" style="height:25px;width:250px" data-options="required:true">
                                <option value=""></option>
                                <option value="IUD">IUD</option>
                                <option value="Kondom">Kondom</option>
                                <option value="PILL">PIll</option>
                                <option value="MOW">MOW</option>
                                <option value="Implant">Implant</option>
                                <option value="Suntik">Suntik</option>
                                <option value="MOP">MOP</option>
                                </select>				              
                                </td>
					        </tr>
					    <tr><td colspan="2" height="5"></td></tr> 
                        <tr>
                               <td width="100" >Pemeriksaan</td>
					            <td >
					    			<input class="easyui-textbox" type="text" name="pemeriksaan" id="pemeriksaan" data-options="multiline:true,required:true" style="height:80px;width:250px"></input>
                                  </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr> 
                            <tr>
                               <td width="100" >Tanggal Kembali</td>
					            <td >
                                 <input class="easyui-datebox" type="text" name="tgk" id="tgk"  data-options="required:true" style="height:25px;width:250px"></input>
                                  </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr> 
                              <tr>
					            <td width="50" >Penanggung Jawab</td>
					            <td >
					            <select class="easyui-combogrid" style="width:250px;height:25px" id="pj" name="pj" data-options="
							            panelWidth: 500,
							            idField: 'NAMA_DOKTER',
							            textField: 'NAMA_DOKTER',
							            url: 'get_list_dokter',
							            method: 'get',
							            required:true,
							            columns: [[
							                {field:'ID_DOKTER',title:'Id Dokter',width:100},
							                {field:'NAMA_DOKTER',title:'Nama Dokter',width:150},
                                            {field:'SPESIALIST',title:'Spesialist',width:150},
							            ]],
							            fitColumns: true
							        ">
							    </select>
					            </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                   </table>
              </td>
            </tr>
		</table>
	</form>
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
        text:'Edit',
        iconCls:'icon-edit',
        disabled:false,
        handler:function(){
        	var row = $('#grid').datagrid('getSelected');
        	if(row.status == 0){
	        	$('#code').val(row.ID_KUNJUNGAN_KB);
	        	$('#kd_pasien').textbox('setValue',row.KODE_PASIEN);
				$('#nm_lengkap').textbox('setValue',row.NAMA_LENGKAP);
				$('#umur').textbox('setValue',row.UMUR);
				$('#bpjs').textbox('setValue',row.NO_BPJS);
				$('#htt').textbox('setValue',row.HAID_TERAKHIR_TGL);
				$('#td').textbox('setValue',row.TEKANAN_DARAH);
				$('#bb').textbox('setValue',row.BERAT_BADAN);
				$('#tgd').textbox('setValue',row.TGL_DATANG);
				$('#klb').textbox('setValue',row.KOMPLIKASI_BERAT);
				$('#gagalan').textbox('setValue',row.KEGAGALAN);
				$('#pemeriksaan').textbox('setValue',row.PEMERIKSAAN);
				$('#tgk').textbox('setValue',row.TGL_KEMBALI);
				$('#pj').textbox('setValue',row.PENANGGUNG_JAWAB);
				$('#id_pkb').val(row.ID_PEM_KB);
				$('#status').val(row.status);
	        	
	        	$('#dlg_poli_kb').dialog('open');
	        }
        }
    },{
        text:'Preview',
        iconCls:'icon-print',
        disabled:false,
        handler:function(){
        	var row 		= $('#grid').datagrid('getSelected');
        	parent.editPanel('Preview <?= $menu_link->MenuLabel;?>','<?= $menu_link->controller;?>/preview',row.ID_KUNJUNGAN_KB);
        }
    },{
        text:'Delete',
        iconCls:'icon-remove',
        disabled:false,
        handler:function(){
        	var row = $('#grid').datagrid('getSelected');
        	if(row.TransStatus == 0){
    			suspend_data('<?= $menu_link->controller;?>/suspend_data','grid',row.ID_POLI_LANSIA);   
	        }
        }
    }];
	
	 var toolbar_2 = [{
            text:'Save',
            iconCls:'icon-save',
            disabled:false,
            handler:function(){
               save_data('fm_kb');
            }
        },'-',{
            text:'Refresh',
            iconCls:'icon-reload',
            handler:function(){
               $('#fm_kb').form('clear');
            }
        },'-',{
        	text:'Cancel',
            iconCls:'icon-cancel',
            handler:function(){
               $('#dlg_poli_kb').dialog('close');
            }
        }];
		
		

     get_privillage('<?=$menu_link->MenuID;?>','dlg_<?=$menu_link->controller;?>','view');

</script>
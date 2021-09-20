 <br>   
 <script>
		       var baseurl = "<?php echo base_url("index.php/"); ?>"; // Buat variabel baseurl untuk nanti di akses pada file config.js
               </script>
      <form id="fm_kunjungan" action="<?= base_url().$menu_link->controller;?>/update" method="post" enctype="multipart/form-data">
		    <table width="100%">
		    	<tr><td colspan="2" height="5"></td></tr>
		    	<tr>
		    		<td>
		    			<table width="85%" cellpadding="0" cellspacing="0">
		    				<tr>
					            <td width="300" ><label style="font-size:12px">Kode Pasien</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="kd_pasien" id="kd_pasien" value="<?=$group->KODE_PASIEN;?>" data-options="required:true" style="height:30px;width:250px"></input>
                            </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>
					            <td width="300" ><label style="font-size:12px">Nama Pasien</label></td>
					            <td >
                               <input name="nm_lengkap" class="easyui-textbox"  type="text"id="nama" value="<?=$group->NAMA_LENGKAP;?>" data-options="required:true" style="height:30px;width:300px">			</td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>
					            <td width="300" ><label style="font-size:12px">Jenis Kelamin</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="jenis" id="jenis" value="<?=$group->JENIS_KELAMIN;?>" data-options="required:true" style="height:30px;width:300px"></input>					                                
                             </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>
					            <td width="300" ><label style="font-size:12px">Tempat Tgl Lahir</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="tt_lahir" id="tt_lahir" value="<?=$group->TEMPAT_TGL_LAHIR;?>" data-options="required:true" style="height:30px;width:300px"></input>					                                
                             </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>
					            <td width="300" ><label style="font-size:12px">Umur</label></td>
					            <td >
                                <input class="easyui-textbox" type="text"  name="umur" id="umur" value="<?=$group->UMUR;?>" data-options="required:true" style="height:30px;width:300px"></input>					                                
                               </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>
					            <td width="300" ><label style="font-size:12px">No telpon</label></td>
					            <td >
                                <input class="easyui-textbox" type="text"  name="telpon" id="telpon" value="<?=$group->NO_TELPON;?>" data-options="required:true" style="height:30px;width:300px"></input>					                                
                               </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             <tr>
					        	<td ><label style="font-size:12px">Alamat</label></td>
					    		<td >
					    			<input class="easyui-textbox" type="text" name="alamat" id="alamat" data-options="multiline:true,required:true" value="<?=$group->ALAMAT;?>" style="height:50px;width:350px"></input>
					    		</td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                              <tr>
					            <td width="300" ><label style="font-size:12px">No BPJS</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="bpjs" id="bpjs" value="<?=$group->NO_BPJS;?>" data-options="required:true" style="height:30px;width:300px"></input>					                               
                               </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                              <tr>
					            <td width="300" ><label style="font-size:12px">Faskes</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="faskes" id="faskes" value="<?=$group->FASKES;?>" data-options="required:true" style="height:30px;width:300px"></input>					                                
                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
					    </table>
					</td>
					<td align="" valign="top">
		    			<table width="50%" cellpadding="0" cellspacing="0">
		    				<tr>
		    					<td align="center" style="font-size:12px;background-color:#cccccc;width:250px;height:20px;border:1px solid black;text-valign:middle"><label >Id kunjungan</label></td>
		    					<td align="center" style="font-size:12px;background-color:#cccccc;width:150px;height:20px;border:1px solid black;text-valign:middle"><label >Date</label></td>
		    				</tr>
		    				<tr><td colspan="2" height="2"></td></tr>
		    				<tr>
		    					<td align="right">
					    			<input class="easyui-textbox" name="id_kunjungan" id="id_kunjungan" value="<?=$group->ID_BEROBAT;?>" data-options="required:true" style="height:25px;width:240px" readonly="true"></input>
					    			<input type="hidden" name="detail" id="detail" style="height:25px;width:300px"></input>
					    		</td>
					    		<td align="right">
					    			<input class="easyui-datebox" value="<?= $date_now;?>" data-options="editable:false" style="width:180px;height:25px" id="txt_date" name="txt_date">
					    		</td>
					    	</tr>
					    	<td width="100">&nbsp;</td>
		    			</table>
		    			<table>
                        <tr>
					            <td width="140" ><label style="font-size:12px">Nama Unit</label></td>
					            <td >
					            <select class="easyui-combogrid" style="width:280px;height:30px" id="id_unit" name="id_unit" data-options="
							            panelWidth: 500,
							            idField: 'ID_UNIT',
							            textField: 'NAMA_UNIT',
                                        value :'<?=$group->ID_UNIT;?>',
							            url: '<?= base_url().$menu_link->controller;?>/get_list_unit',
							            method: 'get',
							            required:true,
							            columns: [[
							                {field:'ID_UNIT',title:'Id Unit',width:100},
							                {field:'NAMA_UNIT',title:'Nama Unit',width:150},
							            ]],
							            fitColumns: true
							        ">
							    </select>
					            </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                              <tr>
					            <td width="100" ><label style="font-size:12px">Nama Dokter</label></td>
					            <td >
					            <select class="easyui-combogrid" style="width:280px;height:30px" id="id_dokter" name="id_dokter" data-options="
							            panelWidth: 500,
							            idField: 'ID_DOKTER',
							            textField: 'NAMA_DOKTER',
                                        value :'<?=$group->ID_DOKTER;?>',
							            url: '<?= base_url().$menu_link->controller;?>/get_list_dokter',
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
		    				<tr>
					            <td width="100" ><label style="font-size:12px">Id Nama pemeriksaan</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="id_priksa" id="id_priksa" value="<?=$group->ID_NAMA_PEMERIKSAAN;?>" data-options="required:true" style="height:30px;width:220px"><a href="javascript:void(0)" class="easyui-linkbutton form-button" style="height:30px;" iconCls="icon-search" id="btn-search" onClick="cari();">Cari</a></input>
                             </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
		    				<tr>
		    					<td width="100" ><label style="font-size:12px">Nama Pemeriksaan</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="pemeriksaan" id="nm_priksa" value="<?=$group->PEMERIKSAAN;?>" data-options="multiline:true,required:true" style="height:100px;width:280px"></input>
                                </td> 
		    				</tr>
                            <tr><td colspan="2" height="5"></td></tr>
                             <tr>
					            <td width="100" ><label style="font-size:12px">Biaya</label></td>
					            <td >
                                <input class="easyui-numberbox" name="biaya" id="biaya"  value="<?=$group->BIAYA;?>" data-options="required:true,precision:2,groupSeparator:'.',decimalSeparator:','" style="height:30px;width:280px"></input>					                               
                               </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
		    			</table>
		    		</td>
				</tr>
		    </table>
		</form>
	<div data-options="region:'south',title:'',iconCls:'icon-ok'" style="height:80px;border:none">
		 <table width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td>&nbsp;</td>
                <td align="right">
	                <a href="javascript:void(0)" class="easyui-linkbutton form-button save-button"  style="height:40px;" iconCls="icon-save" id="" onClick="save();">Save</a>
	                <a href="javascript:void(0)" class="easyui-linkbutton form-button" iconCls="icon-cancel" style="height:40px;" onClick="parent.closePanel()">Cancel</a>	     
                </td>
             </tr>
         </table>
	</div>
</div>

<!--  Dialog list item -->
<div id="dialog_list_item" class="easyui-dialog" title="List Nama Pemeriksaan" style="width:50%;height:500px;background-color:#F8F8F8;padding:5px;top:5px" closed="true" data-options="modal:true" buttons="#dialog_buttton_list_item">
    <form id="form_item" method="post" novalidate>
        <table width="97%" border="0">
        	<tr>
        		<td colspan="3" height="15"></td>
        	</tr>
            <tr>
                <td width="150" align="left" valign="middle"><label style="font-size:12px">Id Nama Pemeriksaan</label></td>
                <td width="14"><b>:</b></td>
                <td colspan="2">
                    <input type="text" style="height:25px;width:250px" name="id_priksa" id="id_priksa" placeholder="< Id Nama pemeriksaan >" onkeyup="search_list_priksa();" />
                </td>
            </tr>
            <tr>
        		<td colspan="3" height="8"></td>
        	</tr>
            <tr>
                <td width="150" align="left" valign="middle"><label style="font-size:12px">Nama Pemeriksaan</label></td>
                <td><b>:</b></td>
                <td colspan="2">
                    <input type="text" style="height:25px;width:250px" name="priksa" id="priksa" placeholder="< Nama Pemeriksaan >" onkeyup="search_list_priksa();" />
                </td>
            </tr>
            <tr>
        		<td colspan="3" height="15"></td>
        	</tr>
            <tr>
                <td colspan="3">
                    <table id="list_priksa" class="easyui-datagrid" 
                        url="<?= base_url().$menu_link->controller;?>/get_list_priksa" 
                        singleSelect="true"  pageSize="8" 
                        style="height:250px" data-options = "">
                        <thead>
                            <tr>
                                <th data-options="field:'ck',checkbox:true"></th>
                                <th field="ID_NAMA_PEMERIKSAAN" data-options="field:'ID_NAMA_PEMERIKSAAN',width:120" sortable="true">Id Nama Pemeriksaan</th>
                                <th field="NAMA_PEMERIKSAAN" data-options="field:'NAMA_PEMERIKSAAN',width:155" sortable="true">Nama Pemeriksaan</th>
                                <th field="jenis" data-options="field:'jenis',width:170" sortable="true">Jenis Pemeriksaan</th>
                            </tr>
                        </thead>
                    </table>
                </td>
            </tr>
        </table>
    </form>
</div>

<!-- Dialog Button -->
<div id="dialog_buttton_list_item" style="border:none;height:80px">
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-ok" onClick="choose_list_priksa();">OK</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onClick="modal_close('dialog_list_item');">Cancel</a>
</div>

<script type="text/javascript">
	
	function save(){
               save_data('fm_kunjungan');
			   }
	
    function cari() {
	       
	   	 var kd_pasien = $('#kd_pasien').val();
		 var nm_pasien = $('#nama').val();
	     if(kd_pasien !='' && nm_pasien!=""){
        		$('#dialog_list_item').dialog('open');
        	}else{
        		 $.messager.alert('warning','Silahkan isi Data pasin terlebih dahulu!','warning');
        	}
	}
	
	function search_list_priksa(){
    	$('#list_priksa').datagrid('reload',{
    		id_priksa 	: $('#id_priksa').val(),
    		priksa 	: $('#priksa').val(),
    	});

    }
	
   function choose_list_priksa(){

	  var row =  $('#list_priksa').datagrid('getChecked');
	  
	  var id_nama 	='';
	  var priksa  = '';

        $.each(row, function( index,value) {
		    id_nama		=(value.ID_NAMA_PEMERIKSAAN);
			priksa		=(value.NAMA_PEMERIKSAAN);
        });

        $('#id_priksa').textbox('setValue',id_nama);
		$('#nm_priksa').textbox('setValue',priksa);
       
	    modal_close('dialog_list_item');
	}
	
    get_privillage('<?=$menu_link->MenuID;?>','dlg_<?=$menu_link->controller;?>','new');
	
	function print_data(){
    	var transaction_no = $('#id_kunjungan').textbox('getValue');
        parent.editPanel('Print kunjungan <?= $menu_link->MenuLabel;?>','<?= $menu_link->controller;?>/print_kunjungan',transaction_no);
    }
		
</script>
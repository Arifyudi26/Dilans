            <br>
             <script>
		       var baseurl = "<?php echo base_url("index.php/"); ?>"; // Buat variabel baseurl untuk nanti di akses pada file config.js
               </script>
               
        <form id="fm_umum" action="<?= base_url().$menu_link->controller;?>/insert" method="post" enctype="multipart/form-data">
		    <table width="100%">
		    	<tr><td colspan="2" height="5"></td></tr>
		    	<tr>
		    		<td>
		    			<table width="85%" cellpadding="0" cellspacing="0">
		    				<tr>
					            <td width="300" ><label style="font-size:12px">Kode Pasien</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="kd_pasien" id="kd_pasien" onKeyUp="btn-search" data-options="required:true" style="height:30px;width:200px"></input> <a href="javascript:void(0)" class="easyui-linkbutton form-button" style="height:30px;" iconCls="icon-search" id="btn-search" onClick="cari1();">Cari</a>
                                 </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>
					            <td width="300" ><label style="font-size:12px">Nama Pasien</label></td>
					            <td >
                               <input name="nm_lengkap" class="easyui-textbox"  type="text"id="nama" data-options="required:true" style="height:30px;width:300px">	
	            	           <input type="hidden" name="status" id="status"  style="height:15px;width:250px;"></input>
                               <input type="hidden" name="id_pemeriksaan" id="id_pemeriksaan"  style="height:15px;width:250px;"></input>
                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>
					            <td width="300" ><label style="font-size:12px">Jenis Kelamin</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="jenis" id="jenis"  data-options="required:true" style="height:30px;width:300px"></input>					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>
					            <td width="300" ><label style="font-size:12px">Umur</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="umur" id="umur"  data-options="required:true" style="height:30px;width:300px"></input>					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             <tr>
					        	<td ><label style="font-size:12px">Alamat</label></td>
					    		<td >
					    			<textarea class="easyui-textbox" type="text" name="alamat" id="alamat" data-options="multiline:true,required:true" style="height:50px;width:350px"></textarea>
					    		</td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>
					            <td width="300" ><label style="font-size:12px">No Bpjs</label></td>
					            <td >
                                <input class="easyui-textbox" type="text"  name="bpjs" id="bpjs"  data-options="required:true" style="height:30px;width:300px"></input>					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             <tr>
					        	<td ><label style="font-size:12px">Keluhan</label></td>
					    		<td >
					    			<textarea class="easyui-textbox" type="text" name="keluhan" id="keluhan" data-options="multiline:true,required:true" style="height:60px;width:350px"></textarea>
					    		</td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             <tr>
					            <td width="100"><label style="font-size:12px">Tinggi Badan</label></td>
					            <td>
                                <input class="easyui-textbox" type="text" name="tb" id="tb"  data-options="required:true" style="height:30px;width:200px"></input>
                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                              <tr>
					            <td width="300" ><label style="font-size:12px">Berat Badan</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="bb" id="bb"  data-options="required:true" style="height:30px;width:200px"></input>                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
					    </table>
					</td>
					<td align="" valign="top">
		    			<table width="50%" cellpadding="0" cellspacing="0">
		    				<tr>
		    					<td align="center" style="font-size:12px;background-color:#cccccc;width:200px;height:20px;border:1px solid black;text-valign:middle"><label >Id Poli Umum</label></td>
		    					<td align="center" style="font-size:12px;background-color:#cccccc;width:140px;height:20px;border:1px solid black;text-valign:middle"><label >Date</label></td>
		    				</tr>
		    				<tr><td colspan="2" height="2"></td></tr>
		    				<tr>
		    					<td align="right">
					    			<input class="easyui-textbox" name="id_poli_umum" id="id_poli_umum" value="<?=$TransNumber;?>" data-options="required:true" style="height:25px;width:200px" readonly="true"></input>
					    		</td>
					    		<td align="right">
					    			<input class="easyui-datebox" value="<?= $date_now;?>" data-options="editable:false" style="width:160px;height:25px" id="txt_date" name="txt_date">
					    		</td>
					    	</tr>
					    	<td width="100">&nbsp;</td>
		    			</table >
		    			<table width="80%" cellpadding="0" cellspacing="0">
                        <tr>
					            <td width="100"><label style="font-size:12px">Sistole</label></td>
					            <td>
                                <input class="easyui-textbox" type="text" name="ss" id="ss"  data-options="required:true" style="height:30px;width:250px"></input>
                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                          <tr>
					            <td width="300" ><label style="font-size:12px">Diastole</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="ds" id="ds"  data-options="required:true" style="height:30px;width:250px"></input>                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>
					            <td width="300" ><label style="font-size:12px">Raspiratory Rate</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="rr" id="rr"  data-options="required:true" style="height:30px;width:250px"></input>    
                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>
                               <td width="300" ><label style="font-size:12px">Heart Rate</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="hr" id="hr"  data-options="required:true" style="height:30px;width:250px"></input> 					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             <tr>
					        	<td ><label style="font-size:12px">PD</label></td>
					    		<td >
					    			<input class="easyui-textbox" type="text" name="pd" id="pd" data-options="multiline:true,required:true" style="height:65px;width:250px"></input>
					    		</td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             <tr>
					            <td width="300" ><label style="font-size:12px">Diagnosa</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="diagnosa" id="diagnosa"  data-options="required:true" onfocus="choose_list_diagnosa();" style="height:30px;width:70px"><input class="easyui-textbox" type="text" name="deskripsi" id="deskripsi"  data-options="required:true" style="height:30px;width:150px"></input><a href="javascript:void(0)" class="easyui-linkbutton form-button" style="height:30px;" iconCls="icon-add" id="" onClick="cari();"></a>                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             <tr>
					            <td width="200" ><label style="font-size:12px">Nama Dokter</label></td>
					            <td >
					            <select class="easyui-combogrid" style="width:250px;height:30px" id="id_dokter" name="id_dokter" data-options="
							            panelWidth: 500,
							            idField: 'ID_DOKTER',
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
	<div data-options="region:'south',title:'',iconCls:'icon-ok'" style="height:80px;border:none">
		 <table width="90%" cellpadding="0" cellspacing="0">
            <tr>
                <td>&nbsp;</td>
                <td align="right">
	                <a href="javascript:void(0)" class="easyui-linkbutton form-button save-button"  style="height:40px;" iconCls="icon-save" id="" onClick="save()">Save</a>
	                <a href="javascript:void(0)" class="easyui-linkbutton form-button" iconCls="icon-cancel" style="height:40px;" onClick="parent.closePanel()">Cancel</a>	     
                </td>
             </tr>
         </table>
	</div>
</div>

<!--  Dialog list item -->
<div id="dialog_list_item" class="easyui-dialog" title="List diagnosa" style="width:50%;height:500px;background-color:#F8F8F8;padding:5px;top:5px" closed="true" data-options="modal:true" buttons="#dialog_buttton_list_item">
    <form id="form_item" method="post" novalidate>
        <table width="97%" border="0">
        	<tr>
        		<td colspan="3" height="15"></td>
        	</tr>
            <tr>
                <td width="100" align="left" valign="middle"><label style="font-size:12px">Id Diagnosa</label></td>
                <td width="14"><b>:</b></td>
                <td colspan="2">
                    <input type="text" style="height:25px;width:300px" name="id_diagnosa" id="id_diagnosa" placeholder="< Id Diagnosa >" onkeyup="search_list_diagnosa();" />
                </td>
            </tr>
            <tr>
        		<td colspan="3" height="8"></td>
        	</tr>
            <tr>
                <td width="100" align="left" valign="middle"><label style="font-size:12px">Des ICD</label></td>
                <td><b>:</b></td>
                <td colspan="2">
                    <input type="text" style="height:25px;width:300px" name="des_icd" id="des_icd" placeholder="< Des icd >" onkeyup="search_list_diagnosa();" />
                </td>
            </tr>
            <tr>
        		<td colspan="3" height="15"></td>
        	</tr>
            <tr>
                <td colspan="3">
                    <table id="list_diagnosa" class="easyui-datagrid" 
                        url="<?= base_url().$menu_link->controller;?>/get_list_diagnosa" 
                        singleSelect="true"  pageSize="8" 
                        style="height:250px" data-options = "">
                        <thead>
                            <tr>
                                <th data-options="field:'ck',checkbox:true"></th>
                                <th field="ID_DIAGNOSA" data-options="field:'ID_DIAGNOSA',width:100" sortable="true">Id Diagnosa</th>
                                <th field="DESKRIPSI_ICD" data-options="field:'DESKRIPSI_ICD',width:185" sortable="true">Deskripsi ICD</th>
                                <th field="SUB_ICD" data-options="field:'SUB_ICD',width:170" sortable="true">Sub ICD</th>
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
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-ok" onClick="choose_list_diagnosa();">OK</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onClick="modal_close('dialog_list_item');">Cancel</a>
</div>

<!--  Dialog list item -->
<div id="dialog_list_pasien" class="easyui-dialog" title="List data pasien" style="width:50%;height:500px;background-color:#F8F8F8;padding:5px;top:5px" closed="true" data-options="modal:true" buttons="#dialog_buttton_list_pasien">
    <form id="form_item" method="post" novalidate>
        <table width="97%" border="0">
        	<tr>
        		<td colspan="3" height="15"></td>
        	</tr>
            <tr>
                <td width="100" align="left" valign="middle"><label style="font-size:12px">Kode Pasien</label></td>
                <td width="14"><b>:</b></td>
                <td colspan="2">
                    <input type="text" style="height:25px;width:300px" name="kd_pasien1" id="kd_pasien1" placeholder="< kode pasien >" onKeyUp="search_list_pasien();" />
                </td>
            </tr>
            <tr>
        		<td colspan="3" height="8"></td>
        	</tr>
            <tr>
                <td width="100" align="left" valign="middle"><label style="font-size:12px">Nama Pasien</label></td>
                <td><b>:</b></td>
                <td colspan="2">
                    <input type="text" style="height:25px;width:300px" name="nama1" id="nama1" placeholder="< Nama pasien >" onKeyUp="search_list_pasien();" />
                </td>
            </tr>
            <tr>
        		<td colspan="3" height="15"></td>
        	</tr>
            <tr>
                <td colspan="3">
                    <table id="list_pasien" class="easyui-datagrid" 
                        url="<?= base_url().$menu_link->controller;?>/get_list_pasien" 
                        singleSelect="true"  pageSize="10" rownumbers="true" pagination="true"
                        style="height:250px" data-options = "">
                        <thead>
                            <tr>
                                <th data-options="field:'ck',checkbox:true"></th>
                                <th field="ID_PEMERIKSAAN" data-options="field:'ID_PEMERIKSAAN',width:185" sortable="true">Id Pemeriksaan</th>
                                <th field="KODE_PASIEN" data-options="field:'KODE_PASIEN',width:185" sortable="true">Kd pasien</th>
                                <th field="NAMA_LENGKAP" data-options="field:'NAMA_LENGKAP',width:170" sortable="true">Nama Lengkap</th>
                                <th field="JENIS_KELAMIN" data-options="field:'JENIS_KELAMIN',width:170" sortable="true">Jenis Kelamin</th>
                                <th field="UMUR" data-options="field:'UMUR',width:170" sortable="true">Umur</th>
                                <th field="ALAMAT" data-options="field:'ALAMAT',width:170" sortable="true">Alamat</th>
                                <th field="NO_BPJS" data-options="field:'NO_BPJS',width:170" sortable="true">NO Bpjs</th>
                                <th field="KELUHAN" data-options="field:'KELUHAN',width:170" sortable="true">Keluhan</th>
                                <th field="TINGGI_BADAN" data-options="field:'TINGGI_BADAN',width:170" sortable="true">Tinggi Badan</th>
                                <th field="BERAT_BADAN" data-options="field:'BERAT_BADAN',width:170" sortable="true">Berat Badan</th>
                                <th field="SISTOLE" data-options="field:'SISTOLE',width:170" sortable="true">Sistole</th>
                                <th field="DIASISTOLE" data-options="field:'DIASISTOLE',width:170" sortable="true">Diasistole</th>
                                <th field="RASPIRATORY_RATE" data-options="field:'RASPIRATORY_RATE',width:170" sortable="true">Raspiratory Rate</th>
                                <th field="HEART_RATE" data-options="field:'HEART_RATE',width:170" sortable="true">Heart Rate</th>

                            </tr>
                        </thead>
                    </table>
                </td>
            </tr>
        </table>
    </form>
</div>

<!-- Dialog Button -->
<div id="dialog_buttton_list_pasien" style="border:none;height:80px">
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-ok" onClick="choose_list_pasien();">OK</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onClick="modal_close('dialog_list_pasien');">Cancel</a>
</div>

<script type="text/javascript">
	
	function cari1() {
        		$('#dialog_list_pasien').dialog('open');
	}
	
	function search_list_pasien(){
    	$('#list_pasien').datagrid('reload',{
    		kd_pasien 	: $('#kd_pasien1').val(),
    		nama 	: $('#nama1').val(),
    	});
    }
	
   function choose_list_pasien(){
	  var row =  $('#list_pasien').datagrid('getChecked');
	  var kd 	='';
	  var nm  = '';
	  var js	='';
	  var um ='';
	  var alm ='';
	  var bp	='';
	  var kl	='';
	  var tinggi ='';
	  var berat	='';
	  var sis =''
	  var dis ='';
	  var raspi ='';
	  var heart ='';
	  var id	='';
	  
        $.each(row, function( index,value) {
            kd 	=(value.KODE_PASIEN);
			nm    =(value.NAMA_LENGKAP);
			js			=(value.JENIS_KELAMIN);
			um			=(value.UMUR);
			alm			=(value.ALAMAT);
			bp  		=(value.NO_BPJS);
			kl			=(value.KELUHAN);
			tinggi		=(value.TINGGI_BADAN);
			berat		=(value.BERAT_BADAN);
			sis			=(value.SISTOLE);
			dis			=(value.DIASISTOLE);
			raspi		=(value.RASPIRATORY_RATE);
			heart		=(value.HEART_RATE);
			id			=(value.ID_PEMERIKSAAN);
        });

        $('#kd_pasien').textbox('setValue',kd);
		$('#nama').textbox('setValue',nm);
		$('#jenis').textbox('setValue',js);
		$('#umur').textbox('setValue',um);
		$('#alamat').textbox('setValue',alm);
		$('#bpjs').textbox('setValue',bp);
		$('#keluhan').textbox('setValue',kl);
		$('#tb').textbox('setValue',tinggi);
		$('#bb').textbox('setValue',berat);
		$('#ss').textbox('setValue',sis);
		$('#ds').textbox('setValue',dis);
		$('#rr').textbox('setValue',raspi);
		$('#hr').textbox('setValue',heart);
		$('#id_pemeriksaan').val(id);
		
	    modal_close('dialog_list_pasien');
	}

	//------------------------------------------//
	function save(){
               save_data('fm_umum');
			   }
			   
	function cari() {
	   	 var kd_pasien = $('#kd_pasien').val();
		 var nm_pasien = $('#nm_lengkap').val();
	     if(kd_pasien !='' && nm_pasien!=""){
        		$('#dialog_list_item').dialog('open');
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
	  var row =  $('#list_diagnosa').datagrid('getChecked');
	  var id_diagnosa 	='';
	  var diagnosa  = '';

        $.each(row, function( index,value) {
            id_diagnosa 	=(value.ID_DIAGNOSA);
			diagnosa    =(value.DESKRIPSI_ICD);
        });

        $('#diagnosa').textbox('setValue',id_diagnosa);
		$('#deskripsi').textbox('setValue',diagnosa);

	    modal_close('dialog_list_item');
	}

    get_privillage('<?=$menu_link->MenuID;?>','dlg_<?=$menu_link->controller;?>','new');
</script>
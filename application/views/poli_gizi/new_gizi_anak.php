              
        <form id="fm_pgizi" action="<?= base_url().$menu_link->controller;?>/insert" method="post" enctype="multipart/form-data">
		    <table width="100%">
		    	<tr><td colspan="2" height="5"></td></tr>
		    	<tr>
		    		<td>
		    			<table width="85%" cellpadding="0" cellspacing="0">
		    				<tr>

					            <td width="300" ><label style="font-size:12px">Kode Pasien</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="kd_pasien" id="kode" onKeyUp="btn-search" data-options="required:true" style="height:25px;width:200px"></input> <a href="javascript:void(0)" class="easyui-linkbutton form-button" style="height:25px;" iconCls="icon-search" id="btn-search" onClick="cari1();">Cari</a>
                                			                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>

					            <td width="300" ><label style="font-size:12px">Nama Pasien</label></td>
					            <td >
                               <input name="nm_lengkap" class="easyui-textbox"  type="text"id="nama" data-options="required:true" style="height:25px;width:300px">	
	            	           <input type="hidden" name="status" id="status"  style="height:15px;width:250px;"></input>
                               <input type="hidden" name="id_pg_anak" id="id_pgizi"  style="height:15px;width:250px;"></input>
                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>

					            <td width="300" ><label style="font-size:12px">Tempat Tgl Lahir</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="tt_lahir" id="tt_lahir"  data-options="required:true" style="height:25px;width:300px"></input>					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>

					           <td ><label style="font-size:12px">Alamat</label></td>
					    		<td >
					    			<input class="easyui-textbox" type="text" name="alamat" id="almt" data-options="multiline:true,required:true" style="height:50px;width:350px"></input>
					    		</td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             <tr>

					            <td width="300" ><label style="font-size:12px">No Bpjs</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="bpjs" id="bpjs"  data-options="required:true" style="height:25px;width:300px"></input>					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             <tr>
					        	<td ><label style="font-size:12px">Nama Ortu</label></td>
					    		<td >
                                <input class="easyui-textbox" type="text" name="no" id="no"  data-options="required:true" style="height:25px;width:120px"> <label style="font-size:12px">Anak Ke</label>  <input class="easyui-textbox" type="text"  name="akd" id="akd"  data-options="required:true" style="height:25px;width:120px"></input>						
                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>

					            <td width="300" ><label style="font-size:12px">Pekerjaan Ortu</label></td>
					            <td >
                                <input class="easyui-textbox" type="text"  name="po" id="po"  data-options="required:true" style="height:25px;width:300px"></input>					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                         
                             <tr>
					            <td width="300" ><label style="font-size:12px">Diagnosa Medis</label></td>
					            <td >
                                <input class="easyui-textbox" type="text"  name="dm" id="dm"  data-options="required:true" style="height:25px;width:300px"></input>					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>
					            <td width="300" ><label style="font-size:12px">BB Lahir </label></td>
					            <td >
                                <input class="easyui-textbox" type="text"  name="bbl" id="bbl"  data-options="required:true" style="height:25px;width:120px"> <label style="font-size:12px">PB Lahir</label> <input class="easyui-textbox" type="text"  name="pbl" id="pbl"  data-options="required:true" style="height:25px;width:120px"></input>					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             <tr>
					            <td width="100"><label style="font-size:12px">Umur Kehamilan</label></td>
					            <td>
                                <input class="easyui-textbox" type="text" name="uk" id="uk"  data-options="required:true" style="height:25px;width:120px"> <label style="font-size:12px">Kelahiran</label><input class="easyui-textbox" type="text" name="kelahiran" id="kelahiran"  data-options="required:true" style="height:25px;width:120px"></input>
                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr> 
                             <tr>
					            <td width="100"><label style="font-size:12px">Tinggi Badan</label></td>
					            <td>
                                <input class="easyui-textbox" type="text" name="tb" id="tb"  data-options="required:true" style="height:25px;width:120px"> <label style="font-size:12px">Berat Bdn</label> <input class="easyui-textbox" type="text" name="bb" id="bb"  data-options="required:true" style="height:25px;width:120px"></input>
                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             <tr>
                            
                               <td width="300" ><label style="font-size:12px">IMT</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="imt" id="imt"  data-options="required:true" style="height:25px;width:120px"> <label style="font-size:12px">Biokimia</label>  <input class="easyui-textbox" type="text" name="bio" id="bio"  data-options="required:true" style="height:25px;width:120px"></input> 					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             <tr>
					        	<td ><label style="font-size:12px">Fisik Klinis</label></td>
					    		<td >
					    			<input class="easyui-textbox" type="text" name="fk" id="fk" data-options="multiline:true,required:true" style="height:25px;width:350px"></input>
					    		</td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
     
                       </table>
					</td>
              

					<td align="" valign="top">
		    			<table width="50%" cellpadding="0" cellspacing="0">
		    				<tr>
		    					<td align="center" style="font-size:12px;background-color:#cccccc;width:200px;height:20px;border:1px solid black;text-valign:middle"><label >Id Poli gizi Anak</label></td>
		    					<td align="center" style="font-size:12px;background-color:#cccccc;width:140px;height:20px;border:1px solid black;text-valign:middle"><label >Date</label></td>
		    				</tr>
		    				<tr><td colspan="2" height="2"></td></tr>
		    				<tr>
		    					<td align="right">
					    			<input class="easyui-textbox" name="id_pga" id="id_pga" value="<?=$TransNumber;?>" data-options="required:true" style="height:25px;width:200px" readonly="true"></input>
					    		</td>
					    		<td align="right">
					    			<input class="easyui-datebox" value="<?= $date_now;?>" data-options="editable:false" style="width:160px;height:25px" id="txt_date" name="txt_date">
					    		</td>
					    	</tr>
					    	<td width="100">&nbsp;</td>
		    			</table >
		    			<table width="80%" cellpadding="0" cellspacing="0">
                          <tr>
					            <td width="300" ><label style="font-size:12px">Asi Eksklusif</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="ae" id="ae"  data-options="required:true" style="height:25px;width:250px"></input>    
                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>
                               <td width="300" ><label style="font-size:12px">Mkn Selain Asi</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="msa" id="msa"  data-options="required:true" style="height:25px;width:250px"></input> 					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>
                               <td width="300" ><label style="font-size:12px">Alergi Makanan</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="am" id="am"  data-options="required:true" style="height:25px;width:250px"></input> 					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>
                               <td width="300" ><label style="font-size:12px">Makanan pokok</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="mp" id="mp"  data-options="required:true" style="height:25px;width:250px"></input> 					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>
                               <td width="300" ><label style="font-size:12px">Lauk hewani</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="lh" id="lh"  data-options="required:true" style="height:25px;width:250px"></input> 					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>
                               <td width="300" ><label style="font-size:12px">Lauk Nabati</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="lb" id="lb"  data-options="required:true" style="height:25px;width:250px"></input> 					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>
                               <td width="300" ><label style="font-size:12px">Sayur</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="sayur" id="sayur"  data-options="required:true" style="height:25px;width:250px"></input> 					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>
                               <td width="300" ><label style="font-size:12px">Buah</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="buah" id="buah"  data-options="required:true" style="height:25px;width:250px"></input> 					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>
                               <td width="300" ><label style="font-size:12px">Selingan</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="selingan" id="selingan"  data-options="required:true" style="height:25px;width:250px"></input> 					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>

					            <td width="300" ><label style="font-size:12px">Diagnosa</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="diagnosa" id="diagnosa"  data-options="required:true" onFocus="choose_list_diagnosa();" style="height:25px;width:70px"><input class="easyui-textbox" type="text" name="deskripsi" id="deskripsi"  data-options="required:true" style="height:25px;width:150px"></input><a href="javascript:void(0)" class="easyui-linkbutton form-button" style="height:25px;" iconCls="icon-add" id="" onClick="cari();"></a>                                </td>
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
	                <a href="javascript:void(0)" class="easyui-linkbutton form-button save-button"  style="height:25px;" iconCls="icon-save" id="" onClick="save()">Save</a>
	                <!-- <a href="javascript:void(0)" class="easyui-linkbutton form-button" iconCls="icon-print" onclick="">Preview & Print</a> -->
	                <a href="javascript:void(0)" class="easyui-linkbutton form-button" iconCls="icon-cancel" style="height:25px;" onClick="parent.closePanel()">Cancel</a>	     
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
                    <input type="text" style="height:25px;width:300px" name="id_diagnosa" id="id_diagnosa" placeholder="< Id Diagnosa >" onKeyUp="search_list_diagnosa();" />
                </td>
            </tr>
            <tr>
        		<td colspan="3" height="8"></td>
        	</tr>
            <tr>
                <td width="100" align="left" valign="middle"><label style="font-size:12px">Des ICD</label></td>
                <td><b>:</b></td>

                <td colspan="2">
                    <input type="text" style="height:25px;width:300px" name="des_icd" id="des_icd" placeholder="< Des icd >" onKeyUp="search_list_diagnosa();" />
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
<div id="dialog_list_pasien" class="easyui-dialog" title="List diagnosa" style="width:50%;height:500px;background-color:#F8F8F8;padding:5px;top:5px" closed="true" data-options="modal:true" buttons="#dialog_buttton_list_pasien">
    <form id="form_item" method="post" novalidate>
        <table width="97%" border="0">

        	<tr>
        		<td colspan="3" height="15"></td>
        	</tr>

            <tr>
                <td width="100" align="left" valign="middle"><label style="font-size:12px">Kode Pasien</label></td>
                <td width="14"><b>:</b></td>

                <td colspan="2">
                    <input type="text" style="height:25px;width:300px" name="kd_pasien" id="kd_pasien" placeholder="< kode pasien >" onKeyUp="search_list_pasien();" />
                </td>
            </tr>
            <tr>
        		<td colspan="3" height="8"></td>
        	</tr>
            <tr>
                <td width="100" align="left" valign="middle"><label style="font-size:12px">Nama Pasien</label></td>
                <td><b>:</b></td>

                <td colspan="2">
                    <input type="text" style="height:25px;width:300px" name="nama" id="nama" placeholder="< Nama pasien >" onKeyUp="search_list_pasien();" />
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
                                <th field="ID_PG_ANAK" data-options="field:'ID_PG_ANAK',width:100" sortable="true">Id PG anaka</th>
                                <th field="KODE_PASIEN" data-options="field:'KODE_PASIEN',width:185" sortable="true">Kd pasien</th>
                                <th field="NAMA_LENGKAP" data-options="field:'NAMA_LENGKAP',width:170" sortable="true">Nama Lengkap</th>
                                <th field="TEMPAT_TGL_LAHIR" data-options="field:'TEMPAT_TGL_LAHIR',width:170" sortable="true">TT Lahir</th>
                                <th field="ALAMAT" data-options="field:'ALAMAT',width:170" sortable="true">Alamat</th>
                                <th field="NO_BPJS" data-options="field:'NO_BPJS',width:170" sortable="true">NO Bpjs</th>
                                <th field="NAMA_ORTU" data-options="field:'NAMA_ORTU',width:170" sortable="true">Nama Ortu</th>
                                <th field="ANAK_KE_DARI" data-options="field:'ANAK_KE_DARI',width:170" sortable="true">Anak ke</th>
                                <th field="PEKERJAAN_ORTU" data-options="field:'PEKERJAAN_ORTU',width:170" sortable="true">Pekerjaan Ortu</th>
                                <th field="DIAGNOSA_MEDIS" data-options="field:'DIAGNOSA_MEDIS',width:170" sortable="true">Diagnosa Medis</th>
                                <th field="BB_LAHIR" data-options="field:'PB_LAHIR',width:170" sortable="true">BB Lahir</th>
                                <th field="PB_LAHIR" data-options="field:'PB_LAHIR',width:170" sortable="true">PB Lahir</th>
                                <th field="UMUR_KEHAMILAN" data-options="field:'UMUR_KEHAMILAN',width:170" sortable="true">Umur Kehamilan</th>
                                <th field="KELAHIRAN" data-options="field:'KELAHIRAN',width:170" sortable="true">Kelahiran</th>
                                <th field="TINGGI_BADAN" data-options="field:'TINGGI_BADAN',width:170" sortable="true">Tinggi Badan</th>
                                <th field="BERAT_BADAN" data-options="field:'BERAT_BADAN',width:170" sortable="true">Berat Badan</th>
                                <th field="IMT" data-options="field:'IMT',width:170" sortable="true">IMT</th>
                                <th field="BIOKIMIA" data-options="field:'BIOKIMIA',width:170" sortable="true">Biokimia</th>
                                <th field="FISIK_KLINIS" data-options="field:'FISIK_KLINIS',width:170" sortable="true">Fisik Klinis</th>

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
    		kd_pasien 	: $('#kd_pasien').val(),
    		nama 	: $('#nama').val(),
    	});

    }
	

   function choose_list_pasien(){

	  var row =  $('#list_pasien').datagrid('getChecked');
	  	  
	  var id_diagnosa 	='';
	  var diagnosa  = '';
	  var alamat	='';
	  var ttl ='';
	  var nbpjs ='';
	  var anak	='';
	  var pek_or ='';
	  var dim	='';
	  var bb ='';
	  var pb ='';
	  var umk ='';
	  var kl ='';
	  var tinggi ='';
	  var berat ='';
	  var pg	='';
	  var it	='';
	  var kmi	='';
	  var fis   =''

        $.each(row, function( index,value) {
            id_diagnosa 	=(value.KODE_PASIEN);
			diagnosa    =(value.NAMA_LENGKAP);
			alamat		=(value.ALAMAT);
			ttl			=(value.TEMPAT_TGL_LAHIR);
			nbpjs  		=(value.NO_BPJS);
			nm_or		=(value.NAMA_ORTU);
			anak		=(value.ANAK_KE_DARI);
			pek_or      =(value.PEKERJAAN_ORTU);
			dim			=(value.DIAGNOSA_MEDIS);
			bb			=(value.BB_LAHIR);
			pb			=(value.PB_LAHIR);
			umk			=(value.UMUR_KEHAMILAN);
			kl			=(value.KELAHIRAN);
			tinggi      =(value.TINGGI_BADAN);
			berat		=(value.BERAT_BADAN);
			pg			=(value.ID_PG_ANAK);
			it			=(value.IMT);
			kmi			=(value.BIOKIMIA);
			fis			=(value.FISIK_KLINIS);
        });

        $('#kode').textbox('setValue',id_diagnosa);
		$('#nama').textbox('setValue',diagnosa);
		$('#almt').textbox('setValue',alamat);
		$('#tt_lahir').textbox('setValue',ttl);
		$('#bpjs').textbox('setValue',nbpjs);
		$('#no').textbox('setValue',nm_or);
		$('#akd').textbox('setValue',anak);
		$('#po').textbox('setValue',pek_or);
		$('#dm').textbox('setValue',dim);
		$('#bbl').textbox('setValue',bb);
		$('#pbl').textbox('setValue',pb);
		$('#uk').textbox('setValue',umk);
		$('#kelahiran').textbox('setValue',kl);
		$('#tb').textbox('setValue',tinggi);
		$('#bb').textbox('setValue',berat);
		$('#id_gizi').textbox('setValue',pg);
		$('#imt').textbox('setValue',it);
		$('#bio').textbox('setValue',kmi);
		$('#fk').textbox('setValue',fis);
		
	    modal_close('dialog_list_pasien');
	}
	
	
	
	
	
	function save(){
               save_data('fm_pgizi');
			   }
			   
	function cari() {
	       
	   	 var kd_pasien = $('#kode').val();
		 var nm_pasien = $('#nama').val();
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
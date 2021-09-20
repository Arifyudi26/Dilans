              
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
                               <input type="hidden" name="id_pg_dewasa" id="id_pgizi"  style="height:15px;width:250px;"></input>
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
					            <td width="300" ><label style="font-size:12px">Agama</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="agama" id="agama"  data-options="required:true" style="height:25px;width:300px"></input>					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>
					            <td width="300" ><label style="font-size:12px">Pendidikan</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="pendidikan" id="pendidikan"  data-options="required:true" style="height:25px;width:300px"></input>					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>
					            <td width="300" ><label style="font-size:12px">Pekerjaan</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="pekerjaan" id="pekerjaan"  data-options="required:true" style="height:25px;width:300px"></input>					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             <tr>
					            <td width="300" ><label style="font-size:12px">No Bpjs</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="bpjs" id="bpjs"  data-options="required:true" style="height:25px;width:300px"></input>					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             <tr>
					            <td width="300" ><label style="font-size:12px">Diagnosa Medis</label></td>
					            <td >
                                <input class="easyui-textbox" type="text"  name="dm" id="dm"  data-options="required:true" style="height:25px;width:300px"></input>					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             <tr>
					            <td width="100"><label style="font-size:12px">Tinggi Badan</label></td>
					            <td>
                                <input class="easyui-textbox" type="text" name="tb" id="tb"  data-options="required:true" style="height:25px;width:120px"> <label style="font-size:12px">Berat Bdn</label><input class="easyui-textbox" type="text" name="bb" id="bb"  data-options="required:true" style="height:25px;width:120px"></input>
                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             <tr>
                               <td width="300" ><label style="font-size:12px">IMT</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="imt" id="imt"  data-options="required:true" style="height:25px;width:120px"> <label style="font-size:12px">LL Atas --</label>  <input class="easyui-textbox" type="text" name="lla" id="lla"  data-options="required:true" style="height:25px;width:120px"></input> 					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             <tr>
                               <td width="300" ><label style="font-size:12px">L Perut</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="lp" id="lp"  data-options="required:true" style="height:25px;width:120px"> <label style="font-size:12px">L Panggul</label><input class="easyui-textbox" type="text" name="lpg" id="lpg"  data-options="required:true" style="height:25px;width:120px"></input> 					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             <tr>
                               <td width="300" ><label style="font-size:12px">Status Gizi</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="sg" id="sg"  data-options="required:true" style="height:25px;width:120px"> <label style="font-size:12px">Biokimia </label>  <input class="easyui-textbox" type="text" name="bio" id="bio"  data-options="required:true" style="height:25px;width:120px"></input> 					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                           
     
                       </table>
					</td>
              

					<td align="" valign="top">
		    			<table width="50%" cellpadding="0" cellspacing="0">
		    				<tr>
		    					<td align="center" style="font-size:12px;background-color:#cccccc;width:200px;height:20px;border:1px solid black;text-valign:middle"><label >Id Poli gizi Dewasa</label></td>
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
					        	<td ><label style="font-size:12px">Kondisi Umum</label></td>
					    		<td >
					    			<input class="easyui-textbox" type="text" name="ku" id="ku" data-options="multiline:true,required:true" style="height:40px;width:250px"></input>
					    		</td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             <tr>
                               <td width="300" ><label style="font-size:12px">Tekanan Darah</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="td" id="td"  data-options="required:true" style="height:25px;width:90px"> <label style="font-size:12px">Suhu Tbh</label><input class="easyui-textbox" type="text" name="st" id="st"  data-options="required:true" style="height:25px;width:90px"></input> 					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             <tr>
					        	<td ><label style="font-size:12px">Klinis</label></td>
					    		<td >
					    			<input class="easyui-textbox" type="text" name="klinis" id="kli" data-options="multiline:true,required:true" style="height:25px;width:250px"></input>
					    		</td>
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
                                <th field="ID_PG_DEWASA" data-options="field:'ID_PG_ANAK',width:100" sortable="true">Id PG anaka</th>
                                <th field="KODE_PASIEN" data-options="field:'KODE_PASIEN',width:185" sortable="true">Kd pasien</th>
                                <th field="NAMA_LENGKAP" data-options="field:'NAMA_LENGKAP',width:170" sortable="true">Nama Lengkap</th>
                                <th field="TEMPAT_TGL_LAHIR" data-options="field:'TEMPAT_TGL_LAHIR',width:170" sortable="true">TT Lahir</th>
                                <th field="ALAMAT" data-options="field:'ALAMAT',width:170" sortable="true">Alamat</th>
                                <th field="AGAMA" data-options="field:'NAMA_ORTU',width:170" sortable="true">Pekerjaan</th>
                                <th field="PENDIDIKAN" data-options="field:'ANAK_KE_DARI',width:170" sortable="true">Pendidikan</th>
                                <th field="PEKERJAAN" data-options="field:'PEKERJAAN_ORTU',width:170" sortable="true">Pekerjaan</th>
                                <th field="NO_BPJS" data-options="field:'NO_BPJS',width:170" sortable="true">NO Bpjs</th>
                                <th field="DIAGNOSA_MEDIS" data-options="field:'DIAGNOSA_MEDIS',width:170" sortable="true">Diagnosa Medis</th>
                                <th field="TINGGI_BADAN" data-options="field:'TINGGI_BADAN',width:170" sortable="true">Tinggi Badan</th>
                                <th field="BERAT_BADAN" data-options="field:'BERAT_BADAN',width:170" sortable="true">Berat Badan</th>
                                <th field="IMT" data-options="field:'IMT',width:170" sortable="true">IMT</th>
                                <th field="LLA" data-options="field:'LLA',width:170" sortable="true">LLA</th>
                                <th field="LINGKAR_PERUT" data-options="field:'LINGKAR_PERUT',width:170" sortable="true">L Perut</th>
                                <th field="LINGKAR_PANGGUL" data-options="field:'LINGKAR_PANGGUL',width:170" sortable="true">L Panggul</th>
                                <th field="STATUS_GIZI" data-options="field:'STATUS_GIZI',width:170" sortable="true">Status Gizi</th>
                                <th field="BIOKIMIA" data-options="field:'BIOKIMIA',width:170" sortable="true">Biokimia</th>
                                <th field="KONDISI_UMUM" data-options="field:'KONDISI_UMUM',width:170" sortable="true">Kondisi Umum</th>
                                <th field="TEKANAN_DARAH" data-options="field:'TEKANAN_DARAH',width:170" sortable="true">Tekanan darah</th>
                                <th field="SUHU_TUBUH" data-options="field:'SUHU_TUBUH',width:170" sortable="true">Suhu Tubuh</th>
                                <th field="KLINIS" data-options="field:'KLINIS',width:170" sortable="true">Klinis</th>

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
	  var fis   ='';
	  var km	='';
	  var suhu  ='';
	  var tkn	='';

        $.each(row, function( index,value) {
            id_diagnosa 	=(value.KODE_PASIEN);
			diagnosa    =(value.NAMA_LENGKAP);
			alamat		=(value.ALAMAT);
			ttl			=(value.TEMPAT_TGL_LAHIR);
			nbpjs  		=(value.NO_BPJS);
			nm_or		=(value.AGAMA);
			anak		=(value.PENDIDIKAN);
			pek_or      =(value.PEKERJAAN);
			dim			=(value.DIAGNOSA_MEDIS);
			bb			=(value.LLA);
			pb			=(value.LINGKAR_PERUT);
			umk			=(value.LINGKAR_PANGGUL);
			kl			=(value.STATUS_GIZI);
			tinggi      =(value.TINGGI_BADAN);
			berat		=(value.BERAT_BADAN);
			pg			=(value.ID_PG_DEWASA);
			it 			=(value.IMT);
			kmi			=(value.BIOKIMIA);
			km			=(value.KONDISI_UMUM);
			fis			=(value.KLINIS);
			suhu		=(value.SUHU_TUBUH);
			tkn			=(value.TEKANAN_DARAH);
			
        });

        $('#kode').textbox('setValue',id_diagnosa);
		$('#nama').textbox('setValue',diagnosa);
		$('#almt').textbox('setValue',alamat);
		$('#tt_lahir').textbox('setValue',ttl);
		$('#bpjs').textbox('setValue',nbpjs);
		$('#agama').textbox('setValue',nm_or);
		$('#pendidikan').textbox('setValue',anak);
		$('#pekerjaan').textbox('setValue',pek_or);
		$('#dm').textbox('setValue',dim);
		$('#lla').textbox('setValue',bb);
		$('#lp').textbox('setValue',pb);
		$('#lpg').textbox('setValue',umk);
		$('#sg').textbox('setValue',kl);
		$('#tb').textbox('setValue',tinggi);
		$('#bb').textbox('setValue',berat);
		$('#id_pgizi').val(pg);
		$('#imt').textbox('setValue',it);
		$('#bio').textbox('setValue',kmi);
		$('#ku').textbox('setValue',km);
		$('#kli').textbox('setValue',fis);
		$('#st').textbox('setValue',suhu);
		$('#td').textbox('setValue',tkn);
		
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
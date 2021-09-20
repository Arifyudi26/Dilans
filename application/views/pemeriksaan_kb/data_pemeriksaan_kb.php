<?php
$un = $this->session->userdata('Puskesmas-sawah-besar@2017');
?>
<div class="easyui-layout" style="height:450px;width:100%">
	<div data-options="region:'east',split:true" title="Filter" style="width:20%;height:450px">
		<br>
		<p><input class="easyui-textbox" type="text" name="txt_id" id="txt_id" data-options="prompt:'Id Pemeriksaan'" style="height:25px;width:200px"></p>
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
        				parent.editPanel('Preview <?=$menu_link->MenuLabel;?>','<?=$menu_link->controller;?>/preview',row.ID_PEM_KB);
        			}
				}
			">
		    <thead>
		        <tr>
		            <th data-options="field:'ID_PEM_KB',width:120">Id pemeriksaan</th>
                    <th data-options="field:'NO_KD_FASKES_KB',width:120">Id kd Faskes Kb</th>
                    <th data-options="field:'NO_SERI_KARTU',width:120">No Seri Kartu</th>
		            <th data-options="field:'KODE_PASIEN',width:120,align:'center'">Kd pasien</th>
		            <th data-options="field:'NAMA_LENGKAP',width:150">Nama Pasien</th>
                    <th data-options="field:'TEMPAT_TGL_LAHIR',width:120">TT Lahir</th>
                    <th data-options="field:'UMUR',width:150">Umur</th>
                    <th data-options="field:'PENDIDIKAN',width:120">Pendidikan</th>
                    <th data-options="field:'PEKERJAAN',width:120">Pekerjaan</th>
                    <th data-options="field:'ALAMAT',width:150">Alamat</th>
                    <th data-options="field:'NO_BPJS',width:150">NO BPJS</th>
                    <th data-options="field:'TAHAPAN_KS',width:150">Tahapan KS</th>
                    <th data-options="field:'NAMA_SUAMI',width:150">Nama Suami</th>
                    <th data-options="field:'PENDIDIKAN_SUAMI',width:120">Pendidikan Suami</th>
                    <th data-options="field:'PEKERJAAN_SUAMI',width:120">Pekerjaan Suami</th>
                    <th data-options="field:'JUMLAH_ANAK',width:120">Jumlah Anak</th>
                    <th data-options="field:'UMUR_ANAK_TERKECIL',width:120">Umur Anak Terkecil</th>
                    <th data-options="field:'STATUS_KB',width:120">Status KB</th>
                    <th data-options="field:'CARA_KB_TERAKHIR',width:120">Cara Kb Terakhir</th>
                    <th data-options="field:'HAID_TERAKHIR_TGL',width:120">Haid terakhir</th>
                    <th data-options="field:'DUGAAN_HAMIL',width:120">Dugaan Hamil</th>
                    <th data-options="field:'BERAT_BADAN',width:150">Berat Badan</th>
                    <th data-options="field:'TEKANAN_DARAH',width:150">Tekanan Darah</th>
		            <th data-options="field:'lev',width:150,align:'center'">Last User</th>
		            <th data-options="field:'CREATE_DATE',width:250,align:'center'">Date</th>
		            <th data-options="field:'status',width:250,align:'center'" hidden="true">Status</th>
		        </tr>
		    </thead>
		</table>
	</div>
</div>

<!-- ================== dialog add barang ============================== -->
<div id="dlg_pemeriksaan" class="easyui-dialog" title="Form Edit Pemeriksaan umum" style="width:800px;height:400px;padding:10px" closed="true" modal="true"
            data-options="
                iconCls: 'icon-save',
                toolbar: toolbar_2

            ">
    <form id="fm_pemeriksaan" action="<?= base_url().$menu_link->controller;?>/update" method="post" enctype="multipart/form-data">
       <table width="100%">
		    	<tr><td colspan="2" height="5"></td></tr>
		    	<tr>
		    		<td>
	    <table cellpadding="5">
         <tr>
	            <td width="100" valign="top">No Faskes Kb</td>
	            <td>
  				<input class="easyui-textbox" type="text" name="nkfk" id="nkfk"  data-options="required:true" style="height:25px;width:250px"></input>	            
                </td>
                </td> 
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
             <tr>
	            <td width="50" valign="top">No Seri kartu</td>
	            <td>
  				<input class="easyui-textbox" type="text" name="nsk" id="nsk"  data-options="required:true" style="height:25px;width:250px"></input>	            
                </td>
                </td> 
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
	        <tr>
	            <td width="100" valign="top">Kode Pasien</td>
	            <td>
	            	<input class="easyui-textbox" name="kd_pasien" id="kd_pasien" data-options="required:true" style="height:25px;width:250px"></input>
	            	<input type="hidden" name="code" id="code" style="height:15px;width:250px;"></input>
	            	<input type="hidden" name="status" id="status"  style="height:15px;width:250px;"></input>
	            </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
            <tr>
	            <td width="50">Nama pasien</td> 
	            <td>
	            <input class="easyui-textbox" name="nm_lengkap" id="nm_lengkap" data-options="required:true" style="height:25px;width:250px"></input>
	            </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
            <tr>
	            <td width="50">TT Lahir</td> 
	            <td>
	            <input class="easyui-textbox" name="tt_lahir" id="tt_lahir" data-options="required:true" style="height:25px;width:250px"></input>
	            </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
            <tr>
	            <td width="50">Umur</td> 
	            <td>
	            <input class="easyui-textbox" name="umur" id="umur" data-options="required:true" style="height:25px;width:250px"></input>
	            </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
            <tr>
	            <td width="50">Pendidikan</td> 
	            <td>
	            <select class="easyui-combobox"  id="pendidikan" name="pendidikan" style="height:25px;width:250px" data-options="required:true">
                                <option value=""></option>
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                                <option value="SMA">SMA</option>
                                <option value="D1-Diploma 1">D1-Diploma 1</option>
                                <option value="D1-Diploma 2">D2-Diploma 2</option>
                                <option value="D3-Diploma 3">D3-Diploma 3</option>
                                <option value="S1-Strata 1">S1-Strata 1</option>
                                <option value="S2-Strata 2">S2-Strata 2</option>
                                <option value="S3-Strata 3">S3-Strata 3</option>
                                </select>              
	            </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
            <tr>
	            <td width="50">Pekerjaan</td> 
	            <td>
	           <select class="easyui-combobox" id="pekerjaan" name="pekerjaan" style="height:25px;width:250px" data-options="required:true">
                                <option value=""></option>
                                <option value="Pegawai Negri">Pegawai Negri</option>
                                <option value="Pegawai Swasta">Pegawai Swasta</option>
                                <option value="Pedagang">Pedagang</option>
                                </select>
	            </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
     
            <tr>
	            <td width="50">Alamat</td> 
	            <td>
  				<input class="easyui-textbox" type="text" name="alamat" id="alamat"  data-options="multiline:true" style="height:50px;width:250px"></input>	           
                 </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
             <tr>
	            <td width="50" valign="top">No Bpjs</td>
	            <td>
	            	<input class="easyui-textbox" name="bpjs" id="bpjs"  data-options="required:true" style="width:250px;height:25px;"></input>
	            </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
            <tr>
	            <td width="50" valign="top">Tahapan KS</td>
	            <td>
  				<input class="easyui-textbox" type="text" name="tahapan" id="tahapan"  data-options="required:true" style="height:25px;width:250px"></input>	            
                </td>
                </td> 
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
              <tr>
	            <td width="50" valign="top">Nama Suami</td>
	            <td>
  				<input class="easyui-textbox" type="text" name="ns" id="ns"  data-options="required:true" style="height:25px;width:250px"></input>	            
                </td>
                </td> 
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
            
	    </table>
        </td>
        <td align="right" valign="top"> 
		   <table width="85%" cellpadding="0" cellspacing="0">
          
             <tr>
	            <td width="50">Pendidikan Suami</td> 
	            <td>
	            <select class="easyui-combobox"  id="pensum" name="pensum" style="height:25px;width:250px" data-options="required:true">
                                <option value=""></option>
                                <option value="SD">SD</option>
                                <option value="SMP">SMP</option>
                                <option value="SMA">SMA</option>
                                <option value="D1-Diploma 1">D1-Diploma 1</option>
                                <option value="D1-Diploma 2">D2-Diploma 2</option>
                                <option value="D3-Diploma 3">D3-Diploma 3</option>
                                <option value="S1-Strata 1">S1-Strata 1</option>
                                <option value="S2-Strata 2">S2-Strata 2</option>
                                <option value="S3-Strata 3">S3-Strata 3</option>
                                </select>              
	            </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
            <tr>
	            <td width="50">Pekerjaan Suami</td> 
	            <td>
	           <select class="easyui-combobox" id="peksum" name="peksum" style="height:25px;width:250px" data-options="required:true">
                                <option value=""></option>
                                <option value="Pegawai Negri">Pegawai Negri</option>
                                <option value="Pegawai Swasta">Pegawai Swasta</option>
                                <option value="Pedagang">Pedagang</option>
                                </select>
	            </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
              <tr>
				<td width="150" valign="top">Jumlah Anak</td>
				  <td >
				    <input class="easyui-textbox" type="text"  name="ja" id="ja"  data-options="required:true" style="height:25px;width:250px"></input>					
                  </td>
			  </tr>
			  <tr><td colspan="2" height="5"></td></tr>
               <tr>
				<td width="50" valign="top">Umur Anak Terkecil</td>
				  <td >
				   <input class="easyui-textbox" type="text"  name="uat" id="uat"  data-options="required:true" style="height:25px;width:250px"></input>					
                  </td>
			  </tr>
			  <tr><td colspan="2" height="5"></td></tr>
              <tr>
			   <td width="50" valign="top">Status KB</td>
				<td >
				   <input class="easyui-textbox" type="text"  name="sk" id="sk"  data-options="required:true" style="height:25px;width:250px"></input>					
                </td>
			   </tr>
			   <tr><td colspan="2" height="5"></td></tr>
               <tr>
				<td width="50" valign="top">Cara Kb Terahir</td>
				  <td >
				   <input class="easyui-textbox" type="text"  name="kt" id="kt"  data-options="required:true" style="height:25px;width:250px"></input>					
				  </td>
				</tr>
				<tr><td colspan="2" height="5"></td></tr>
                 <tr>
				   <td width="50" valign="top">Haid Terakhir Tgl</td>
				   <td >
				   <input class="easyui-textbox" type="text"  name="htg" id="htg"  data-options="required:true" style="height:25px;width:250px"></input>					
                    </td>
				  </tr>
			     <tr><td colspan="2" height="5"></td></tr>
                <tr>
				  <td width="50" valign="top">Dugaan Hamil</td>
					<td >
				   <input class="easyui-textbox" type="text"  name="dh" id="dh"  data-options="required:true" style="height:25px;width:250px"></input>					
					</td>
				 </tr>
				 <tr><td colspan="2" height="5"></td></tr>
                 <tr>
				  <td width="50" valign="top">Berat Badan</td>
					<td >
				   <input class="easyui-textbox" type="text"  name="bb" id="bb"  data-options="required:true" style="height:25px;width:250px"></input>					
					</td>
				 </tr>
				 <tr><td colspan="2" height="5"></td></tr>
                 <tr>
				  <td width="50" valign="top">Tekanan darah</td>
					<td >
				   <input class="easyui-textbox" type="text"  name="td" id="td"  data-options="required:true" style="height:25px;width:250px"></input>					
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
	        	$('#code').val(row.ID_PEM_KB);
	        	$('#nkfk').textbox('setValue',row.NO_KD_FASKES_KB);
				$('#nsk').textbox('setValue',row.NO_SERI_KARTU);
	        	$('#kd_pasien').textbox('setValue',row.KODE_PASIEN);
				$('#nm_lengkap').textbox('setValue',row.NAMA_LENGKAP);
				$('#tt_lahir').textbox('setValue',row.TEMPAT_TGL_LAHIR);
				$('#umur').textbox('setValue',row.UMUR);
				$('#pendidikan').textbox('setValue',row.PENDIDIKAN);
				$('#pekerjaan').textbox('setValue',row.PEKERJAAN);
				$('#alamat').textbox('setValue',row.ALAMAT);
				$('#bpjs').textbox('setValue',row.NO_BPJS);
				$('#tahapan').textbox('setValue',row.TAHAPAN_KS);
				$('#ns').textbox('setValue',row.NAMA_SUAMI);
	        	$('#pensum').textbox('setValue',row.PENDIDIKAN_SUAMI);
				$('#peksum').textbox('setValue',row.PEKERJAAN_SUAMI);
	        	$('#ja').textbox('setValue',row.JUMLAH_ANAK);
	        	$('#uat').textbox('setValue',row.UMUR_ANAK_TERKECIL);
	        	$('#sk').textbox('setValue',row.STATUS_KB);
				$('#kt').textbox('setValue',row.CARA_KB_TERAKHIR);
				$('#htg').textbox('setValue',row.HAID_TERAKHIR_TGL);
				$('#dh').textbox('setValue',row.DUGAAN_HAMIL);
				$('#bb').textbox('setValue',row.BERAT_BADAN);
				$('#td').textbox('setValue',row.TEKANAN_DARAH);
				$('#status').val(row.status);
	        	
	        	$('#dlg_pemeriksaan').dialog('open');
	        }
        }
    },{
        text:'Preview',
        iconCls:'icon-print',
        disabled:false,
        handler:function(){
        	var row 		= $('#grid').datagrid('getSelected');
        	parent.editPanel('Preview <?= $menu_link->MenuLabel;?>','<?= $menu_link->controller;?>/preview',row.ID_PEM_KB);
        }
    },{
        text:'Delete',
        iconCls:'icon-remove',
        disabled:false,
        handler:function(){
        	var row = $('#grid').datagrid('getSelected');
        	if(row.TransStatus == 0){
    			suspend_data('<?= $menu_link->controller;?>/suspend_data','grid',row.ID_PEM_KB);   
	        }
        }
    }];
	
	 var toolbar_2 = [{
            text:'Save',
            iconCls:'icon-save',
            disabled:false,
            handler:function(){
               save_data('fm_pemeriksaan');
            }
        },'-',{
            text:'Refresh',
            iconCls:'icon-reload',
            handler:function(){
               $('#fm_pemeriksaan').form('clear');
            }
        },'-',{
        	text:'Cancel',
            iconCls:'icon-cancel',
            handler:function(){
               $('#dlg_pemeriksaan').dialog('close');
            }
        }];
	

     get_privillage('<?=$menu_link->MenuID;?>','dlg_<?=$menu_link->controller;?>','view');

</script>
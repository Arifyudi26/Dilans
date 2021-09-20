<div class="easyui-layout" style="height:450px;width:100%">
	<div data-options="region:'east',split:true" title="Filter" style="width:20%;height:450px">
		<br>
		<p><input class="easyui-textbox" type="text" name="txt_no" id="txt_no" data-options="prompt:'Kd pasien'" style="height:25px;width:200px"></p>
		<p><input class="easyui-textbox" type="text" name="txt_desc" id="txt_desc" data-options="prompt:'Nama pasien'" style="height:25px;width:200px"></p>
		<p><label><input type="checkbox" name="chkdate" id="chkdate" onclick="change_date()"></label></p>
		<p><label style="width:50px;padding-left:10px"><b>From</b></label><input class="easyui-datebox" value="<?= $date_now;?>" data-options="disabled:true" style="width:120px" id="date_from" name="date_form"></p>
		<p><label style="width:50px;padding-left:10px"><b>To</b></label><input class="easyui-datebox" value="<?= $date_now;?>" data-options="disabled:true" style="width:120px" id="date_to" name="date_to"></p>
		<br>
		<br>
		<p><a href="javascript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-search'" style="width:80px;float:right" id="search" name="search" onclick="search_data()">Search</a>
        <a href="javascript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-print'" style="width:80px;float:right" id="print_data" name="print_data" onclick="print_data()">Print</a></p>
	</div>
	<div data-options="region:'center',title:'List Data Pasien',iconCls:'icon-ok'" style="width:80%;height:450px">
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
		            <th data-options="field:'kd_pasien',width:150">Kode Pasien</th>
                    <th data-options="field:'NIK_KTP',width:150">Nik KTP</th>
                    <th data-options="field:'NAMA_LENGKAP',width:150">Nama Pasien</th>
                    <th data-options="field:'JENIS_KELAMIN',width:150">Jenis Kelamin</th>
		            <th data-options="field:'TEMPAT_TGL_LAHIR',width:150,align:'center'">Tt Lahir</th>
                    <th data-options="field:'UMUR',width:150">Umur</th>
                    <th data-options="field:'STATUS_MENIKAH',width:150">Status Menikah</th>
                    <th data-options="field:'AGAMA',width:150">Agama</th>
                    <th data-options="field:'NO_TELPON',width:150">NO Telpon</th>
                    <th data-options="field:'ALAMAT',width:150">Alamat</th>
                    <th data-options="field:'PENDIDIKAN',width:150">Pendidikan</th>
                    <th data-options="field:'PEKERJAAN',width:150">Pekerjaan</th>
                    <th data-options="field:'NO_BPJS',width:150">NO BPJS</th>
                    <th data-options="field:'FASKES',width:150">Faskes</th>
		            <th data-options="field:'lev',width:150,align:'center'">Last User</th>
		            <th data-options="field:'CREATE_DATE',width:250,align:'center'">Date</th>
		            <th data-options="field:'status',width:250,align:'center'" hidden="true">Status</th>
		        </tr>
		    </thead>
		</table>
	</div>
</div>

<!-- ================== dialog add pasien ============================== -->
<div id="dlg_pasien" class="easyui-dialog" title="Form Data Pasien" style="width:450px;height:400px;padding:10px" closed="true" modal="true"
            data-options="
                iconCls: 'icon-save',
                toolbar: toolbar_2
            ">
    <form id="fm_pasien" action="<?= base_url().$menu_link->controller;?>/insert" method="post" enctype="multipart/form-data">
	    <table cellpadding="5">
	        <tr>
	            <td width="50" valign="top">Nik KTP</td>
	            <td>
	            	<input class="easyui-textbox" name="ktp" id="ktp" data-options="required:true" style="height:25px;width:250px"></input>
	            	<input type="hidden" name="code" id="code" style="height:15px;width:250px;"></input>
	            	<input type="hidden" name="status" id="status"  style="height:15px;width:250px;"></input>
	            </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
             <tr>
	            <td width="50" valign="top">Nama Lengkap</td>
	            <td>
	            	<input class="easyui-textbox" name="nm_lengkap" id="nm_lengkap" data-options="required:true" style="height:25px;width:250px"></input>
	            </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
            <tr>
	            <td width="50">Jenis Kelamin</td> 
	            <td>
	            	<select class="easyui-combobox" style="width:150px;" id="jenis" name="jenis" data-options="required:true">
                    <option value=""></option>
                    <option value="Laki-laki">laki-laki</option>
                    <option value="Perempuan">Perempuan</option>
				    </select>
	            </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
             <tr>
	            <td width="50" valign="top">Tempat Tgl Lahir</td>
	            <td>
	            	<input class="easyui-textbox" name="tt_lahir" id="tt_lahir" data-options="required:true" style="height:25px;width:250px"></input>
               </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
            <tr>
	            <td width="50" valign="top">Umur</td>
	            <td>
	            	<input class="easyui-textbox" name="umur" id="umur" data-options="required:true" style="height:25px;width:150px"></input>
               </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
            <tr>
	            <td width="50">Status Menikah</td> 
	            <td>
	            	<select class="easyui-combobox" style="width:150px;" id="status_menikah" name="status_menikah" data-options="required:true">
                    <option value=""></option>
                    <option value="Kawin">kawin</option>
                    <option value="Belum Kawin">Belum Kawin</option>
				    </select>
	            </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
            <tr>
	            <td width="50">Agama</td> 
	            <td>
	            	<select class="easyui-combobox" style="width:150px;" id="agama" name="agama" data-options="required:true">
                    <option value=""></option>
                    <option value="Islam">Islam</option>
                    <option value="Kristen">Kristen</option>
                    <option value="Hindu">Hindu</option>
                    <option value="Budha">Budha</option>
                    <option value="Kongucu">Konguchu</option>
				    </select>
	            </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
             <tr>
	            <td width="50" valign="top">No Telpon</td>
	            <td>
	            	<input class="easyui-textbox" name="telpon" id="telpon" data-options="required:true" style="height:25px;width:250px"></input>
 	            </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
             <tr>
	            <td width="120" valign="top">Alamat</td>
	            <td><input class="easyui-textbox" type="text" name="alamat" id="alamat" data-options="required:true,multiline:true" style="height:80px;width:250px"></input></td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
            <tr>
	            <td width="50">Pendidikan</td> 
	            <td>
	            	<select class="easyui-combobox" style="width:250px;" id="pendidikan" name="pendidikan" data-options="required:true">
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
	            	<select class="easyui-combobox" style="width:250px;" id="pekerjaan" name="pekerjaan" data-options="required:true">
                    <option value=""></option>
                    <option value="Pegawai Negri">Pegawai Negri</option>
                    <option value="Pegawai Swasta">Pegawai Swasta</option>
                    <option value="Pedagang">Pedagang</option>
				    </select>
	            </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
             <tr>
	            <td width="50" valign="top">No BPJS</td>
	            <td>
	            	<input class="easyui-textbox" name="bpjs" id="bpjs"  data-options="required:true" style="width:250px;"></input>
	            </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
            <tr>
	            <td width="50" valign="top">Faskes</td>
	            <td>
	            	<input class="easyui-textbox" name="faskes" id="faskes"  data-options="required:true" style="height:25px;width:250px"></input>
	            </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
	    </table>
	</form>
</div>
<!-- =================== end dialog edit data pasien ============================== -->
<script type="text/javascript">

    var toolbar = [{
        text:'Add',
        iconCls:'icon-add',
        disabled:false,
        handler:function(){
        	$('#status').val(1);
        	$('#dlg_pasien').dialog('open');
        }
    },{
        text:'Edit',
        iconCls:'icon-edit',
        disabled:false,
        handler:function(){
        	var row = $('#grid').datagrid('getSelected');
        	if(row.status == 0){
	        	$('#status').val(2);
	        	$('#code').val(row.kd_pasien);
	        	$('#ktp').textbox('setValue',row.NIK_KTP);
				$('#nm_lengkap').textbox('setValue',row.NAMA_LENGKAP);
				$('#jenis').textbox('setValue',row.JENIS_KELAMIN);
				$('#tt_lahir').textbox('setValue',row.TEMPAT_TGL_LAHIR);
				$('#umur').textbox('setValue',row.UMUR);
				$('#status_menikah').textbox('setValue',row.STATUS_MENIKAH);
				$('#agama').textbox('setValue',row.AGAMA);
	        	$('#telpon').textbox('setValue',row.NO_TELPON);
				$('#alamat').textbox('setValue',row.ALAMAT);
				$('#pendidikan').textbox('setValue',row.PENDIDIKAN);
				$('#pekerjaan').textbox('setValue',row.PEKERJAAN);
				$('#bpjs').textbox('setValue',row.NO_BPJS);
				$('#faskes').textbox('setValue',row.FASKES);
	        	
		        	
	        	$('#dlg_pasien').dialog('open');
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
			        	$('#code').val(row.kd_pasien);
						$('#ktp').textbox('setValue',row.NIK_KTP);
						$('#nm_lengkap').textbox('setValue',row.NAMA_LENGKAP);
						$('#jenis').textbox('setValue',row.JENIS_KELAMIN);
						$('#tt_lahir').textbox('setValue',row.TEMPAT_TGL_LAHIR);
						$('#umur').textbox('setValue',row.UMUR);
						$('#status_menikah').textbox('setValue',row.STATUS_MENIKAH);
						$('#agama').textbox('setValue',row.AGAMA);
						$('#telpon').textbox('setValue',row.NO_TELPON);
						$('#alamat').textbox('setValue',row.ALAMAT);
						$('#pendidikan').textbox('setValue',row.PENDIDIKAN);
						$('#pekerjaan').textbox('setValue',row.PEKERJAAN);
						$('#bpjs').textbox('setValue',row.NO_BPJS);
						$('#faskes').textbox('setValue',row.FASKES);

			        	save_data('fm_pasien');
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
               save_data('fm_pasien');
            }
        },'-',{
            text:'Refresh',
            iconCls:'icon-reload',
            handler:function(){
               $('#fm_pasien').form('clear');
            }
        },'-',{
        	text:'Cancel',
            iconCls:'icon-cancel',
            handler:function(){
               $('#dlg_pasien').dialog('close');
            }
        }];

        get_privillage('<?=$menu_link->MenuID;?>','dlg_<?=$menu_link->controller;?>','d');
</script>
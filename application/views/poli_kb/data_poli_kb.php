<?php
$un = $this->session->userdata('Puskesmas-sawah-besar@2017');
?>
<div class="easyui-layout" style="height:450px;width:100%">
	<div data-options="region:'east',split:true" title="Filter" style="width:20%;height:450px">
		<br>
		<p><input class="easyui-textbox" type="text" name="txt_id" id="txt_id" data-options="prompt:'Id Poli kb'" style="height:25px;width:200px"></p>
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
        				parent.editPanel('Preview <?=$menu_link->MenuLabel;?>','<?=$menu_link->controller;?>/preview',row.ID_POLI_KB);
        			}
				}
			">
		    <thead>
		        <tr>
		            <th data-options="field:'ID_POLI_KB',width:120">Id Poli Kb</th>
                    <th data-options="field:'NO_KD_FASKES_KB',width:120,align:'center'">No KD Faskes KB</th>
                    <th data-options="field:'NO_SERI_KARTU',width:120,align:'center'">No Seri Kartu</th>
		            <th data-options="field:'KODE_PASIEN',width:120,align:'center'">Kd pasien</th>
		            <th data-options="field:'NAMA_LENGKAP',width:150">Nama Pasien</th>
                    <th data-options="field:'TEMPAT_TGL_LAHIR',width:120">TT Lahir</th>
                    <th data-options="field:'UMUR',width:150">Umur</th>
                    <th data-options="field:'PENDIDIKAN',width:150">Pendidikan</th>
                    <th data-options="field:'PEKERJAAN',width:150">Pekerjaan</th>
                    <th data-options="field:'ALAMAT',width:150">Alamat</th>
                    <th data-options="field:'NO_BPJS',width:150">NO BPJS</th>
                    <th data-options="field:'TAHAPAN_KS',width:150">Tahap KS</th>
                    <th data-options="field:'NAMA_SUAMI',width:150">Nama Suami</th>
                    <th data-options="field:'PENDIDIKAN_SUAMI',width:150">Pendidikan Suami</th>
                    <th data-options="field:'PEKERJAAN_SUAMI',width:150">Pekerjaan Suami</th>
                    <th data-options="field:'JUMLAH_ANAK',width:150">Jumlah Anak</th>
                    <th data-options="field:'UMUR_ANAK_TERKECIL',width:150">Umur Anak Terkecil</th>
                    <th data-options="field:'STATUS_KB',width:150">Status KB</th>
                    <th data-options="field:'CARA_KB_TERAKHIR',width:150">Kb Terakhir</th>
                    <th data-options="field:'HAID_TERAKHIR_TGL',width:150">Haid terakhir</th>
                    <th data-options="field:'DUGAAN_HAMIL',width:150">Dugaan Hamil</th>
                    <th data-options="field:'MENYUSUI',width:150">Menyusui</th>
                    <th data-options="field:'RPS',width:150">Riwayat Penyakit Sblm</th>
                    <th data-options="field:'KEADAAN_UMUM',width:150">Keadaan Umum</th>
                    <th data-options="field:'BERAT_BADAN',width:150">Berat badan</th>
                    <th data-options="field:'TEKANAN_DARAH',width:150">Tekanan Darah</th>
                    <th data-options="field:'POSISI_RAHIM',width:150">Posisi rahim</th>
                    <th data-options="field:'SPD',width:150">Iud dan Wow</th>
                    <th data-options="field:'PEMERIKSAAN_TAMBAHAN',width:150">Pemeriksaan Tmbhan</th>
                    <th data-options="field:'AKBD',width:150">Alat Kont</th>
                    <th data-options="field:'MJP',width:150">Metode yg di Pilih</th>
                    <th data-options="field:'TGL_DIPESAN',width:150">Tgl Dipesan</th>
                    <th data-options="field:'TGL_DILAYANI',width:150">Tgl Dilayani</th>
                    <th data-options="field:'TGL_DICABUT',width:150">Tgl Dicabut</th>
                    <th data-options="field:'PENANGGUNG_JAWAB',width:150">Penanggung Jawab</th>
                    <th data-options="field:'ID_PEM_KB',width:150" hidden="true">Id Pemeriksaan kb</th>
		            <th data-options="field:'lev',width:150,align:'center'">Last User</th>
		            <th data-options="field:'CREATE_DATE',width:250,align:'center'">Create date</th>
		            <th data-options="field:'status',width:250,align:'center'" hidden="true">Status</th>
              </tr>
		    </thead>
		</table>
	</div>
</div>

<div id="dlg_poli_kb" class="easyui-dialog" title="Form Edit poli Keluarga berencana" style="width:900px;height:400px;padding:10px" closed="true" modal="true"
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
	            	<input class="easyui-textbox" name="kd_pasien" id="kd_pasien" data-options="required:true" style="height:25px;width:330px"></input>
	            	<input type="hidden" name="code" id="code" style="height:15px;width:250px;"></input>
	            	<input type="hidden" name="status" id="status"  style="height:15px;width:250px;"></input>
                    <input type="hidden" name="id_pemkb" id="id_pemkb"  style="height:15px;width:250px;"></input>
	            </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
             <tr>
               <td width="50">NFaskes KB</label></td>
				<td >
                 <input class="easyui-textbox" type="text" name="nkfk" id="nkfkb"  data-options="required:true" style="height:25px;width:120px"> <label style="font-size:12px">Noser kartu</label>  <input class="easyui-textbox" type="text" name="nsk" id="nskb"  data-options="required:true" style="height:25px;width:130px"></input> 					                 </td>
				</tr>
			  <tr><td colspan="2" height="5"></td></tr>
            <tr>
	            <td width="50">Nama pasien</td> 
	            <td>
	            <input class="easyui-textbox" name="nm_lengkap" id="nm_lengkap" data-options="required:true" style="height:25px;width:330px"></input>
	            </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
            <tr>
	            <td width="50">TT Lahir</td> 
	            <td>
	            <input class="easyui-textbox" name="tt_lahir" id="tt_lahir" data-options="required:true" style="height:25px;width:330px"></input>
	            </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
             <tr>
               <td width="100" >Umur</td>
				<td >
                 <input class="easyui-textbox" type="text" name="umur" id="umur"  data-options="required:true" style="height:25px;width:130px"> <label style="font-size:12px">No BPJS -</label> <input class="easyui-textbox" type="text" name="bpjs" id="bpjs"  data-options="required:true" style="height:25px;width:130px"></input> 					                 </td>
			 </tr>
			<tr><td colspan="2" height="5"></td></tr> 
            <tr>
              <td width="100" >Pendidikan</td>
			    <td >
               <select class="easyui-combobox"  id="pendidikan" name="pendidikan" style="height:25px;width:130px" data-options="required:true">
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
                                </select> <label style="font-size:12px">Pekerjaan</label> <select class="easyui-combobox" id="pekerjaan" name="pekerjaan" style="height:25px;width:130px" data-options="required:true">
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
  				<input class="easyui-textbox" type="text" name="alamat" id="alamat"  data-options="multiline:true" style="height:40px;width:330px"></input>	           
                 </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
            <tr>
              <td width="100" >Tahapan KS</td>
			   <td >
                <input class="easyui-textbox" type="text" name="tks" id="tahapan"  data-options="required:true" style="height:25px;width:120px"> <label style="font-size:12px">Nama Suami</label><input class="easyui-textbox" type="text" name="ns" id="ns"  data-options="required:true" style="height:25px;width:130px"></input> 					                
                </td>
			</tr>
			<tr><td colspan="2" height="5"></td></tr>  
             <tr>
                <td width="100" >Pekerjaan Su</label></td>
				  <td >
                    <select class="easyui-combobox" id="peksum" name="peksum" style="height:25px;width:120px" data-options="required:true">
                                <option value=""></option>
                                <option value="Pegawai Negri">Pegawai Negri</option>
                                <option value="Pegawai Swasta">Pegawai Swasta</option>
                                <option value="Pedagang">Pedagang</option>
                                </select> <label style="font-size:12px">Pendidikan s</label><select class="easyui-combobox"  id="pensum" name="pensum" style="height:25px;width:130px" data-options="required:true">
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
               <td width="100" >Jumlah Anak</td>
				<td >
                 <input class="easyui-textbox" type="text" name="ja" id="ja"  data-options="required:true" style="height:25px;width:120px"> <label style="font-size:12px">Umur terkecil</label><input class="easyui-textbox" type="text" name="uat" id="uat"  data-options="required:true" style="height:25px;width:120px"></input> 					                </td>
			   </tr>
	    	 <tr><td colspan="2" height="5"></td></tr>  
              <tr>
               <td width="100" >Kb Terakhir</td>
				<td >
                               <select class="easyui-combobox" id="ckt" name="kt" style="height:25px;width:120px" data-options="required:true">
                                <option value=""></option>
                                <option value="IUD">IUD</option>
                                <option value="Kondom">Kondom</option>
                                <option value="PILL">PIll</option>
                                <option value="MOW">MOW</option>
                                <option value="Implant">Implant</option>
                                <option value="Suntik">Suntik</option>
                                <option value="MOP">MOP</option>
                                </select> <label style="font-size:12px">Status KB - --</label> <select class="easyui-combobox"  id="sk" name="sk" style="height:25px;width:120px" data-options="required:true">
                                <option value=""></option>
                                <option value="Baru Pertama Kali">Baru Pertama kali</option>
                                <option value="Berhenti Sesudah bersalin">Berhenti Sesudah bersalin</option>
                                <option value="Berhenti Sesudah Keguguran">Berhenti sesudah keguguran</option>
                                </select>              
                 </td>
				</tr>
		      <tr><td colspan="2" height="5"></td></tr>  
              <tr>
               <td width="100" >Haid Terakhir</td>
				<td >
                 <input class="easyui-datebox" type="text" name="ht" id="ht"  data-options="required:true" style="height:25px;width:120px"> <label style="font-size:12px">Diduga Hamil</label><select class="easyui-combobox"  id="dh" name="dh" style="height:25px;width:120px" data-options="required:true">
                                <option value=""></option>
                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>
                                </select>           				                              
                  </td>
				</tr>
			   <tr><td colspan="2" height="5"></td></tr>  
                <tr>
                 <td width="100" >Tkn Darah</td>
				  <td >
                   <input class="easyui-textbox" type="text" name="td" id="td"  data-options="required:true" style="height:25px;width:120px"> <label style="font-size:12px">Berat Badan - </label><input class="easyui-textbox" type="text" name="bb" id="bb"  data-options="required:true" style="height:25px;width:120px">                          
                  </td>
				</tr>
			<tr><td colspan="2" height="5"></td></tr> 
	    </table>
        </td>
        <td align="right" valign="top">
		   <table width="90%" cellpadding="0" cellspacing="0">
            <tr>
                            
                               <td width="100" ><label style="font-size:12px">Menyusui</label></td>
					            <td >
                                <select class="easyui-combobox"  id="menyusui" name="menyusui" style="height:25px;width:200px" data-options="required:true">
                                <option value=""></option>
                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>
                                </select>              
                               </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>  
                             <tr>
					        	<td  width="250"><label style="font-size:12px">Riwayat Penyakit</label></td>
					    		<td >
					    	    <select class="easyui-combobox" id="rp" name="rp" style="height:25px;width:200px" data-options="required:true">
                                <option value=""></option>
                                <option value="Sakit Kuning">Sakit kuning</option>
                                <option value="Pendarahan Divagina">Pendarahan divagina</option>
                                <option value="Keputihan yang lama">Keputihan Yang lama</option>
                                <option value="Tumor Payudara">Tumor Payudara</option>
                                <option value="Tumor Rahim">Tumor Rahim</option>
                                <option value="Tumor Induk Telur">Tumor Induk telur</option>
                                </select>
					    		</td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                              <tr>
                            
                               <td width="100" ><label style="font-size:12px">Keadaan Umum</label></td>
					            <td >
                               <select class="easyui-combobox" id="ku" name="ku" style="height:25px;width:200px" data-options="required:true">
                                <option value=""></option>
                                <option value="Baik">Baik</option>
                                <option value="Kurang Baik">Kurang Baik</option>
                                <option value="Tidak Baik">Tidak Baik</option>
                                </select> 
                               </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr> 
                           
                             <tr>
                               <td width="100" ><label style="font-size:12px">Posisi Rahim</label></td>
					            <td >
                                <select class="easyui-combobox" id="pr" name="pr" style="height:25px;width:200px" data-options="required:true">
                                <option value=""></option>
                                <option value="Retrofleksi">Retrofleksi</option>
                                <option value="Anterfleksi">Anterfleksi</option>
                                </select>
                                  </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>   
                             <tr>
                               <td width="100" ><label style="font-size:12px">Sblm Pemeriksaan IUD/MOW cek dalam</label></td>
					            <td >
                                <select class="easyui-combobox" id="spi" name="spi" style="height:25px;width:200px" data-options="required:true">
                                <option value=""></option>
                                <option value="Tanda-tanda Radang">Tanda-tanda radang</option>
                                <option value="Tumor Genekologi">Tumor genekologi</option>
                                </select> 
                                  </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>         
                             <tr>
                               <td width="100" ><label style="font-size:12px">Pemeriksaan Tambahan</label></td>
					            <td >
                                <select class="easyui-combobox" id="pt" name="pt" style="height:25px;width:200px" data-options="required:true">
                                <option value=""></option>
                                <option value="Tanda-tanda Diabetes">Tanda-tanda diabetes</option>
                                <option value="Kelainan pembekuan darah">Kelainan Pembekuaan Darah</option>
                                <option value="Radang Orchitis/epididymitis">Radang orchitis/epididymitis</option>
                                </select>
                                  </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>     
                             <tr>
                               <td width="100" ><label style="font-size:12px">Alat Kontrasepsi yg diperbolehkan</label></td>
					            <td >
                               <select class="easyui-combobox" id="akd" name="akd" style="height:25px;width:200px" data-options="required:true">
                                <option value=""></option>
                                <option value="IUD">IUD</option>
                                <option value="MOW">MOW</option>
                                <option value="MOP">MOP</option>
                                <option value="Kondom">Kondom</option>
                                <option value="Implant">Implant</option>
                                <option value="Suntik">Suntik</option>
                                <option value="PILL">PILL</option>
                                </select>
                                  </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>  
                            <tr>
                               <td width="100" ><label style="font-size:12px">Metodi atau Jenis yang dipilih</label></td>
					            <td >
                               <select class="easyui-combobox" id="mjd" name="mjd" style="height:25px;width:200px" data-options="required:true">
                                <option value=""></option>
                                <option value="IUD">IUD</option>
                                <option value="MOW">MOW</option>
                                <option value="MOP">MOP</option>
                                <option value="Kondom">Kondom</option>
                                <option value="Implant">Implant</option>
                                <option value="Suntik">Suntik</option>
                                <option value="PILL">PILL</option>
                                </select>                        
                                  </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>  
                             <tr>
                               <td width="100" ><label style="font-size:12px">Tanggal Dipesan</label></td>
					            <td >
                                 <input class="easyui-datebox" type="text" name="tgp" id="tgp"  data-options="required:true" style="height:25px;width:200px"></input>
                                  </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>  
                            <tr>
                               <td width="100" ><label style="font-size:12px">Tanggal Dilayani</label></td>
					            <td >
                                <input class="easyui-datebox" type="text" name="tgd" id="tgd"  data-options="required:true" style="height:25px;width:200px">                    
                                  </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr> 
                            <tr>
                               <td width="100" ><label style="font-size:12px">Tanggal Dicabut</label></td>
					            <td >
                                 <input class="easyui-datebox" type="text" name="tgc" id="tgc"  data-options="required:true" style="height:25px;width:200px" />                   
                                </td>
					        </tr>
					    <tr><td colspan="2" height="5"></td></tr> 
                  <tr>
				<td width="50"><label style="font-size:12px">Penanggung Jawab</label></td>
				  <td >
				    <select class="easyui-combogrid" style="width:200px;height:25px" id="pj" name="pj" data-options="
				      panelWidth: 500,
				      idField: 'ID_DOKTER',
					  textField: 'NAMA_DOKTER',
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
	        	$('#code').val(row.ID_POLI_KB);
	        	$('#kd_pasien').textbox('setValue',row.KODE_PASIEN);
				$('#nkfkb').textbox('setValue',row.NO_KD_FASKES_KB);
				$('#nskb').textbox('setValue',row.NO_SERI_KARTU);
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
	        	$('#ckt').textbox('setValue',row.CARA_KB_TERAKHIR);
				$('#sk').textbox('setValue',row.STATUS_KB);
				$('#ht').textbox('setValue',row.HAID_TERAKHIR_TGL);
				$('#dh').textbox('setValue',row.DUGAAN_HAMIL);
				$('#td').textbox('setValue',row.TEKANAN_DARAH);
				$('#bb').textbox('setValue',row.BERAT_BADAN);
				$('#menyusui').textbox('setValue',row.MENYUSUI);
				$('#rp').textbox('setValue',row.RPS);
				$('#ku').textbox('setValue',row.KEADAAN_UMUM);
				$('#pr').textbox('setValue',row.POSISI_RAHIM);
				$('#spi').textbox('setValue',row.SPD);
				$('#pt').textbox('setValue',row.PEMERIKSAAN_TAMBAHAN);
				$('#akd').textbox('setValue',row.AKBD);
				$('#mjd').textbox('setValue',row.MJP);
				$('#tgp').textbox('setValue',row.TGL_DIPESAN);
				$('#tgd').textbox('setValue',row.TGL_DILAYANI);
				$('#tgc').textbox('setValue',row.TGL_DICABUT);
				$('#pj').textbox('setValue',row.PENANGGUNG_JAWAB);
				$('#id_pemkb').val(row.ID_PEM_KB);
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
        	parent.editPanel('Preview <?= $menu_link->MenuLabel;?>','<?= $menu_link->controller;?>/preview',row.ID_POLI_KB);
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
        <form id="fm_kb" action="<?= base_url().$menu_link->controller;?>/insert" method="post" enctype="multipart/form-data">
		    <table width="100%">
		    	<tr><td colspan="2" height="5"></td></tr>
		    	<tr>
		    		<td>
		    			<table width="90%" cellpadding="0" cellspacing="0">
                        <tr>

					            <td width="100" ><label style="font-size:12px">Kode Pasien</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="kd_pasien" id="kode" onKeyUp="btn-search" data-options="required:true" style="height:25px;width:270px"></input> <a href="javascript:void(0)" class="easyui-linkbutton form-button" style="height:25px;" iconCls="icon-search" id="btn-search" onClick="cari();">Cari</a>
                                			                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                        <tr>
                            
                               <td width="100" ><label style="font-size:12px">No Faskes KB</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="nkfk" id="nkfkb"  data-options="required:true" style="height:25px;width:130px"> <label style="font-size:12px">Noser kartu</label>  <input class="easyui-textbox" type="text" name="nsk" id="nskb"  data-options="required:true" style="height:25px;width:140px"></input> 					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>

					            <td width="100" ><label style="font-size:12px">Nama Pasien</label></td>
					            <td >
                               <input name="nm_lengkap" class="easyui-textbox"  type="text"id="nama" data-options="required:true" style="height:25px;width:340px">	
	            	           <input type="hidden" name="status" id="status"  style="height:15px;width:250px;"></input>
                               <input type="hidden" name="id_pemkb" id="id_pemkb"  style="height:15px;width:250px;"></input>
                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>

					            <td width="100" ><label style="font-size:12px">Tem Tgl Lahir</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="tt_lahir" id="tt_lahir"  data-options="required:true" style="height:25px;width:340px"></input>					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>
                               <td width="100" ><label style="font-size:12px">Umur </label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="umur" id="umur"  data-options="required:true" style="height:25px;width:130px"> <label style="font-size:12px">No BPJS --</label> <input class="easyui-textbox" type="text" name="bpjs" id="bpjs"  data-options="required:true" style="height:25px;width:140px"></input> 					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr> 
                            
                             <tr>
                               <td width="100" ><label style="font-size:12px">Pendidikan</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="pendidikan" id="pendidikan"  data-options="required:true" style="height:25px;width:130px"> <label style="font-size:12px">Pekerjaan</label>  <input class="easyui-textbox" type="text" name="pekerjaan" id="pekerjaan"  data-options="required:true" style="height:25px;width:140px"></input> 					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>   
                            
                             <tr>
					        	<td ><label style="font-size:12px">Alamat</label></td>
					    		<td >
					    			<input class="easyui-textbox" type="text" name="alamat" id="alamat" data-options="multiline:true,required:true" style="height:50px;width:350px"></input>
					    		</td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                          
                             <tr>
                               <td width="100" ><label style="font-size:12px">Tahapan KS</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="tks" id="tahapan"  data-options="required:true" style="height:25px;width:130px"> <label style="font-size:12px">Nama Suami</label><input class="easyui-textbox" type="text" name="ns" id="ns"  data-options="required:true" style="height:25px;width:130px"></input> 					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>  
                          
                            <tr>
                            
                               <td width="100" ><label style="font-size:12px">kerjaan Suami</label></td>
					            <td >
                               <select class="easyui-combobox" id="peksum" name="peksum" style="height:25px;width:130px" data-options="required:true">
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
                               <td width="100" ><label style="font-size:12px">Jumlah Anak </label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="ja" id="ja"  data-options="required:true" style="height:25px;width:130px"> <label style="font-size:12px">Umur terkecil</label><input class="easyui-textbox" type="text" name="uat" id="uat"  data-options="required:true" style="height:25px;width:130px"></input> 					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>  
                            <tr>
                            
                               <td width="100" ><label style="font-size:12px">Kb Terakhir</label></td>
					            <td >
                               <select class="easyui-combobox" id="ckt" name="kt" style="height:25px;width:130px" data-options="required:true">
                                <option value=""></option>
                                <option value="IUD">IUD</option>
                                <option value="Kondom">Kondom</option>
                                <option value="PILL">PIll</option>
                                <option value="MOW">MOW</option>
                                <option value="Implant">Implant</option>
                                <option value="Suntik">Suntik</option>
                                <option value="MOP">MOP</option>
                                </select> <label style="font-size:12px">Status KB - --</label> <select class="easyui-combobox"  id="sk" name="sk" style="height:25px;width:130px" data-options="required:true">
                                <option value=""></option>
                                <option value="Baru Pertama Kali">Baru Pertama kali</option>
                                <option value="Berhenti Sesudah bersalin">Berhenti Sesudah bersalin</option>
                                <option value="Berhenti Sesudah Keguguran">Berhenti sesudah keguguran</option>
                                </select>              
                               </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>  
                             <tr>
                               <td width="100" ><label style="font-size:12px">Haid Terakhir</label></td>
					            <td >
                                <input class="easyui-datebox" type="text" name="ht" id="ht"  data-options="required:true" style="height:25px;width:130px"> <label style="font-size:12px">Diduga Hamil</label><select class="easyui-combobox"  id="dh" name="dh" style="height:25px;width:130px" data-options="required:true">
                                <option value=""></option>
                                <option value="Ya">Ya</option>
                                <option value="Tidak">Tidak</option>
                                </select>           				                              
                                  </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>  
                             <tr>
                               <td width="100" ><label style="font-size:12px">Tekanan darah</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="td" id="td"  data-options="required:true" style="height:25px;width:130px"> <label style="font-size:12px">Berat Badan - </label><input class="easyui-textbox" type="text" name="bb" id="bb"  data-options="required:true" style="height:25px;width:130px">                          
                                  </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>               
					    </table>
					</td>
              

					<td align="" valign="top">
		    			<table width="90%" cellpadding="0" cellspacing="0">
		    				<tr>
		    					<td align="center" style="font-size:12px;background-color:#cccccc;width:200px;height:20px;border:1px solid black;text-valign:middle"><label >Id Poli KB</label></td>
		    					<td align="center" style="font-size:12px;background-color:#cccccc;width:160px;height:20px;border:1px solid black;text-valign:middle"><label >Date</label></td>
		    				</tr>
		    				<tr><td colspan="2" height="2"></td></tr>
		    				<tr>
		    					<td align="right">
					    			<input class="easyui-textbox" name="id_poli_kb" id="id_poli_kb" value="<?=$TransNumber;?>" data-options="required:true" style="height:25px;width:250px" readonly="true"></input>
					    		</td>
					    		<td align="right">
					    			<input class="easyui-datebox" value="<?= $date_now;?>" data-options="editable:false" style="width:200px;height:25px" id="txt_date" name="txt_date">
					    		</td>
					    	</tr>
					    	<td width="100">&nbsp;</td>
		    			</table >
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
                                 <input class="easyui-datebox" type="text" name="tgp" id="tgp"  data-options="required:true" style="height:20px;width:200px"></input>
                                  </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>  
                            <tr>
                               <td width="100" ><label style="font-size:12px">Tanggal Dilayani</label></td>
					            <td >
                                <input class="easyui-datebox" type="text" name="tgd" id="tgd"  data-options="required:true" style="height:20px;width:200px">                    
                                  </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr> 
                            <tr>
                               <td width="100" ><label style="font-size:12px">Tanggal Dicabut</label></td>
					            <td >
                                 <input class="easyui-datebox" type="text" name="tgc" id="tgc"  data-options="required:true" style="height:20px;width:200px" />                   
                                  </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr> 
                             <tr>
					            <td width="50" ><label style="font-size:12px">Penanggung Jawab</label></td>
					            <td >
					            <select class="easyui-combogrid" style="width:200px;height:25px" id="pj" name="pj" data-options="
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
	<div data-options="region:'south',title:'',iconCls:'icon-ok'" style="height:80px;border:none">
		 <table width="90%" cellpadding="0" cellspacing="0">
            <tr>
                <td>&nbsp;</td>
                <td align="right">
	                <a href="javascript:void(0)" class="easyui-linkbutton form-button save-button"  style="height:30px;" iconCls="icon-save" id="" onClick="save()">Save</a>
	                <a href="javascript:void(0)" class="easyui-linkbutton form-button" iconCls="icon-cancel" style="height:30px;" onClick="parent.closePanel()">Cancel</a>	     
                </td>
             </tr>
         </table>
	</div>
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
                                <th field="ID_PEM_KB" data-options="field:'ID_PEM_KB',width:100" sortable="true">Id Pem KB</th>
                                <th field="NO_KD_FASKES_KB" data-options="field:'NO_KD_FASKES_KB',width:100" sortable="true">No Kd Faskes Kb</th>
                                <th field="NO_SERI_KARTU" data-options="field:'NO_SERI_KARTU',width:100" sortable="true">No Seri Kartu</th>
                                <th field="KODE_PASIEN" data-options="field:'KODE_PASIEN',width:185" sortable="true">Kd pasien</th>
                                <th field="NAMA_LENGKAP" data-options="field:'NAMA_LENGKAP',width:170" sortable="true">Nama Lengkap</th>
                                <th field="TEMPAT_TGL_LAHIR" data-options="field:'TEMPAT_TGL_LAHIR',width:170" sortable="true">TT Lahir</th>
                                <th field="UMUR" data-options="field:'UMUR',width:100" sortable="true">Umur</th>
                                <th field="PENDIDIKAN" data-options="field:'PENDIDIKAN',width:100" sortable="true">Pendidikan</th>
                                <th field="PEKERJAAN" data-options="field:'PEKERJAAN',width:100" sortable="true">Pekerjaan</th>
                                <th field="ALAMAT" data-options="field:'ALAMAT',width:170" sortable="true">Alamat</th>
                                <th field="NO_BPJS" data-options="field:'NO_BPJS',width:170" sortable="true">NO Bpjs</th>
                                <th field="TAHAPAN_KS" data-options="field:'TAHAPAN_KS',width:100" sortable="true">Tahapan Ks</th>
                                <th field="NAMA_SUAMI" data-options="field:'NAMA_SUAMI',width:100" sortable="true">Nama Suami</th>
                                <th field="PENDIDIKAN_SUAMI" data-options="field:'PENDIDIKAN_SUAMI',width:100" sortable="true">Pendidikan Suami</th>
                                <th field="PEKERJAAN_SUAMI" data-options="field:'PEKERJAAN_SUAMI',width:100" sortable="true">Pekerjaan Suami</th>
                                <th field="JUMLAH_ANAK" data-options="field:'JUMLAH_ANAK',width:100" sortable="true">Jumlah Anak</th>
                                <th field="UMUR_ANAK_TERKECIL" data-options="field:'UMUR_ANAK_TERKECIL',width:100" sortable="true">Umur Anak Terkecil</th>
                                <th field="STATUS_KB" data-options="field:'STATUS_KB',width:100" sortable="true">Status Kb</th>
                                <th field="CARA_KB_TERAKHIR" data-options="field:'CARA_KB_TERAKHIIR',width:100" sortable="true">Cara Kb Terakhir</th>
                                <th field="HAID_TERAKHIR_TGL" data-options="field:'HAID_TERAKHIR_TGL',width:100" sortable="true">Haid Terakhir Tgl</th>
                                <th field="DUGAAN_HAMIL" data-options="field:'DUGAAN_HAMIL',width:100" sortable="true">Dugaan Hamil</th>
                                <th field="BERAT_BADAN" data-options="field:'BERAT_BADAN',width:100" sortable="true">Berat Badan</th>
                                <th field="TEKANAN_DARAH" data-options="field:'TEKANAN_DARAH',width:100" sortable="true">Tekanan Darah</th>

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
	
	function save(){
               save_data('fm_kb');
			   }
			   
	function cari() {      
	   	
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
	  var kf		='';
	  var ks		='';
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
	  var kter ='';
	  var stkb	='';
	  var hter ='';
	  var dgh	='';
	  var tkd	='';
	  var id_pkb ='';
	 

        $.each(row, function( index,value) {
            id_diagnosa 	=(value.KODE_PASIEN);
			kf			=(value.NO_KD_FASKES_KB);
			ks			=(value.NO_SERI_KARTU);
			diagnosa    =(value.NAMA_LENGKAP);
			alamat		=(value.ALAMAT);
			ttl			=(value.TEMPAT_TGL_LAHIR);
			nbpjs  		=(value.NO_BPJS);
			nm_or		=(value.UMUR);
			anak		=(value.PENDIDIKAN);
			pek_or      =(value.PEKERJAAN);
			dim			=(value.TAHAPAN_KS);
			bb			=(value.NAMA_SUAMI);
			pb			=(value.PENDIDIKAN_SUAMI);
			umk			=(value.PEKERJAAN_SUAMI);
			kl			=(value.JUMLAH_ANAK);
			tinggi      =(value.UMUR_ANAK_TERKECIL);
			berat		=(value.BERAT_BADAN);
			kter		=(value.CARA_KB_TERAKHIR);
			stkb		=(value.STATUS_KB);
			hter		=(value.HAID_TERAKHIR_TGL);
			dgh			=(value.DUGAAN_HAMIL);
			tkd			=(value.TEKANAN_DARAH);
			id_pkb		=(value.ID_PEM_KB);
		
        });

        $('#kode').textbox('setValue',id_diagnosa);
		$('#nama').textbox('setValue',diagnosa);
		$('#alamat').textbox('setValue',alamat);
		$('#tt_lahir').textbox('setValue',ttl);
		$('#bpjs').textbox('setValue',nbpjs);
		$('#umur').textbox('setValue',nm_or);
		$('#pendidikan').textbox('setValue',anak);
		$('#pekerjaan').textbox('setValue',pek_or);
		$('#tahapan').textbox('setValue',dim);
		$('#ns').textbox('setValue',bb);
		$('#pensum').textbox('setValue',pb);
		$('#peksum').textbox('setValue',umk);
		$('#ja').textbox('setValue',kl);
		$('#uat').textbox('setValue',tinggi);
		$('#bb').textbox('setValue',berat);
		$('#nkfkb').textbox('setValue',kf);
		$('#nskb').textbox('setValue',ks);
		$('#ckt').textbox('setValue',kter);
		$('#sk').textbox('setValue',stkb);
		$('#ht').textbox('setValue',hter);
		$('#dh').textbox('setValue',dgh);
		$('#td').textbox('setValue',tkd);
		$('#id_pemkb').val(id_pkb);
		
	    modal_close('dialog_list_pasien');
	}
	

    get_privillage('<?=$menu_link->MenuID;?>','dlg_<?=$menu_link->controller;?>','new');

</script>
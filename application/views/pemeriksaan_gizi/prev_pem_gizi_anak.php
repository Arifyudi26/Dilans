
        <form id="fm_pgizi" action="<?= base_url().$menu_link->controller;?>/insert" method="post" enctype="multipart/form-data">
		    <table width="100%">
		    	<tr><td colspan="2" height="5"></td></tr>
		    	<tr>
		    		<td>
		    			<table width="85%" cellpadding="0" cellspacing="0">
		    				<tr>

					            <td width="300" ><label style="font-size:12px">Kode Pasien</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="kd_pasien" id="kd_pasien" value="<?=$group->KODE_PASIEN;?>" onKeyUp="btn-search" data-options="required:true" style="height:30px;width:220px"></input> 
                                			                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>

					            <td width="300" ><label style="font-size:12px">Nama Pasien</label></td>
					            <td >
                               <input name="nm_lengkap" class="easyui-textbox" value="<?=$group->NAMA_LENGKAP;?>" type="text"id="nama" data-options="required:true" style="height:30px;width:300px">	
	            	           <input type="hidden" name="status" id="status" value="<?=$group->status;?>" style="height:15px;width:250px;"></input>
                               <input type="hidden" name="id_berobat" id="id_berobat" value="<?=$group->ID_BEROBAT;?>" style="height:15px;width:250px;"></input>
                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>

					            <td width="300" ><label style="font-size:12px">Tempat Tgl Lahir</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="tt_lahir" id="tt_lahir" value="<?=$group->TEMPAT_TGL_LAHIR;?>" data-options="required:true" style="height:30px;width:300px"></input>					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>

					           <td ><label style="font-size:12px">Alamat</label></td>
					    		<td >
					    			<input class="easyui-textbox" type="text" name="alamat" id="alamat" value="<?=$group->ALAMAT;?>" data-options="multiline:true,required:true" style="height:50px;width:350px"></input>
					    		</td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             <tr>

					            <td width="300" ><label style="font-size:12px">No Bpjs</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="bpjs" id="bpjs" value="<?=$group->NO_BPJS;?>" data-options="required:true" style="height:30px;width:300px"></input>					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             <tr>
					        	<td ><label style="font-size:12px">Nama Ortu</label></td>
					    		<td >
                                <input class="easyui-textbox" type="text" name="no" id="no" value="<?=$group->NAMA_ORTU;?>" data-options="required:true" style="height:30px;width:300px"></input>						
                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>

					            <td width="300" ><label style="font-size:12px">Pekerjaan Ortu</label></td>
					            <td >
                                <input class="easyui-textbox" type="text"  name="po" id="po" value="<?=$group->PEKERJAAN_ORTU;?>" data-options="required:true" style="height:30px;width:300px"></input>					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             <tr>
					        	<td ><label style="font-size:12px">Anak Ke dari.?</label></td>
					    		<td >
                                <input class="easyui-textbox" type="text"  name="akd" id="akd" value="<?=$group->ANAK_KE_DARI;?>" data-options="required:true" style="height:30px;width:300px"></input>   		
                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             <tr>

					            <td width="300" ><label style="font-size:12px">Diagnosa Medis</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="diagnosa" id="diagnosa" value="<?=$group->ID_DIAGNOSA;?>" data-options="required:true" onFocus="choose_list_diagnosa();" style="height:30px;width:90px"><input class="easyui-textbox" type="text" name="deskripsi" id="deskripsi" value="<?=$group->DIAGNOSA_MEDIS;?>" data-options="required:true" style="height:30px;width:200px"></input>
                                                              </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             <tr><td colspan="2" height="5"></td></tr>
                            <tr>

					            <td width="300" ><label style="font-size:12px">BB lahir</label></td>
					            <td >
                                <input class="easyui-textbox" type="text"  name="bbl" id="bbl" value="<?=$group->BB_LAHIR;?>" data-options="required:true" style="height:30px;width:300px"></input>					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             
					    </table>
					</td>
              

					<td align="" valign="top">
		    			<table width="50%" cellpadding="0" cellspacing="0">
		    				<tr>
		    					<td align="center" style="font-size:12px;background-color:#cccccc;width:200px;height:20px;border:1px solid black;text-valign:middle"><label >Id Pem gizi Anak</label></td>
		    					<td align="center" style="font-size:12px;background-color:#cccccc;width:140px;height:20px;border:1px solid black;text-valign:middle"><label >Date</label></td>
		    				</tr>
		    				<tr><td colspan="2" height="2"></td></tr>
		    				<tr>
		    					<td align="right">
					    			<input class="easyui-textbox" name="id_pga" id="id_pga" value="<?=$group->ID_PG_ANAK;?>" data-options="required:true" style="height:25px;width:200px" readonly="true"></input>
					    		</td>
					    		<td align="right">
					    			<input class="easyui-datebox" value="<?= $date_now;?>" data-options="editable:false" style="width:160px;height:25px" id="txt_date" name="txt_date">
					    		</td>
					    	</tr>
					    	<td width="100">&nbsp;</td>
		    			</table >
		    			<table width="80%" cellpadding="0" cellspacing="0">
                        <tr>
					        	<td width="300" ><label style="font-size:12px">PB lahir</label></td>
					    		<td >
                                <input class="easyui-textbox" type="text"  name="pbl" id="pbl" value="<?=$group->PB_LAHIR;?>" data-options="required:true" style="height:30px;width:250px"></input>   		
                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                        <tr>
					            <td width="100"><label style="font-size:12px">Umur Kehamilan</label></td>
					            <td>
                                <input class="easyui-textbox" type="text" name="uk" id="uk" value="<?=$group->UMUR_KEHAMILAN;?>" data-options="required:true" style="height:30px;width:250px"></input>
                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                          <tr>

					            <td width="300" ><label style="font-size:12px">Kelahiran</label></td>
					            <td >
          					  <input class="easyui-textbox" type="text" name="kelahiran" id="kelahiran" value="<?=$group->KELAHIRAN;?>" data-options="required:true" style="height:30px;width:250px"></input>                          
                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             <tr>
					            <td width="100"><label style="font-size:12px">Tinggi Badan</label></td>
					            <td>
                                <input class="easyui-textbox" type="text" name="tb" id="tb" value="<?=$group->TINGGI_BADAN;?>" data-options="required:true" style="height:30px;width:200px"></input>
                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                              <tr>

					            <td width="300" ><label style="font-size:12px">Berat Badan</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="bb" id="bb" value="<?=$group->BERAT_BADAN;?>" data-options="required:true" style="height:30px;width:200px"></input>                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>

					            <td width="300" ><label style="font-size:12px">IMT</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="imt" id="imt" value="<?=$group->IMT;?>" data-options="required:true" style="height:30px;width:250px"></input>    
                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>
                            
                               <td width="300" ><label style="font-size:12px">Biokimia</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="bio" id="bio" value="<?=$group->BIOKIMIA;?>" data-options="required:true" style="height:30px;width:250px"></input> 					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             <tr>
					        	<td ><label style="font-size:12px">Fisik Klinis</label></td>
					    		<td >
					    			<input class="easyui-textbox" type="text" name="fk" id="fk" value="<?=$group->FISIK_KLINIS;?>" data-options="multiline:true,required:true" style="height:65px;width:250px"></input>
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
	                <a href="javascript:void(0)" class="easyui-linkbutton form-button"  style="height:40px;" iconCls="icon-print" id="" onClick="print_preview()">Print</a>
	                <!-- <a href="javascript:void(0)" class="easyui-linkbutton form-button" iconCls="icon-print" onclick="">Preview & Print</a> -->
	                <a href="javascript:void(0)" class="easyui-linkbutton form-button" iconCls="icon-cancel" style="height:40px;" onClick="parent.closePanel()">Cancel</a>	     
                </td>
             </tr>
         </table>
	</div>
</div>

<script type="text/javascript">
	
	
	 function print_preview(){
    	var transaction_no = $('#id_tou').textbox('getValue');
        parent.editPanel('Print Preview <?= $menu_link->MenuLabel;?>','<?= $menu_link->controller;?>/print_preview',transaction_no);
    }
    get_privillage('<?=$menu_link->MenuID;?>','dlg_<?=$menu_link->controller;?>','new');

</script>
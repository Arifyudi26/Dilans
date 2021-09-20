<div class="easyui-layout" style="height:500px;width:100%" id="layout_<?= $menu_link->controller;?>">
	<div data-options="region:'north',title:'',iconCls:'icon-ok'" style="width:80%;height:160px;border:none;overflow:hidden">
		<form id="fm_hasil" action="<?= base_url().$menu_link->controller;?>/update" method="post" enctype="multipart/form-data">
		    <table width="100%">
		    	<tr><td colspan="2" height="5"></td></tr>
		    	<tr>
		    		<td>
		    			<table width="80%" cellpadding="0" cellspacing="0">
		    				<tr>
					            <td width="300" ><label style="font-size:12px">Kode Pasien</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="kd_pasien" id="kd_pasien" value="<?=$group->KODE_PASIEN;?>" onKeyUp="btn-search" data-options="required:true" style="height:30px;width:200px"></input> 
                               </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>
					            <td width="300" ><label style="font-size:12px">Nama Pasien</label></td>
					            <td >
                               <input name="nm_lengkap" class="easyui-textbox"  type="text"id="nama" value="<?=$group->NAMA_LENGKAP;?>" data-options="required:true" style="height:30px;width:300px">	
	            	           <input type="hidden" name="status" id="status"  style="height:15px;width:250px;"></input>
                               <input type="hidden" name="id_poli" id="id_poli" value="<?=$group->ID_DAFTAR_LAB;?>" style="height:15px;width:250px;"></input>
                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>
					            <td width="300" ><label style="font-size:12px">Umur</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="umur" id="umur" value="<?=$group->UMUR;?>" data-options="required:true" style="height:30px;width:300px"></input>					                                
                              </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             <tr>
					            <td width="100" ><label style="font-size:12px">No Bpjs</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="bpjs" id="bpjs" value="<?=$group->NO_BPJS;?>" data-options="required:true" style="height:30px;width:250px"></input>					                               
                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
					    </table>
					</td>
					<td align="" valign="top">   
		    			<table width="20%" cellpadding="0" cellspacing="0">
		    				<tr>
		    					<td align="center" style="font-size:12px;background-color:#cccccc;width:200px;height:20px;border:1px solid black;text-valign:middle"><label >Id Pembayaran Lab</label></td>
		    					<td align="center" style="font-size:12px;background-color:#cccccc;width:200px;height:20px;border:1px solid black;text-valign:middle"><label >Date</label></td>
		    				</tr>
		    				<tr><td colspan="2" height="2"></td></tr>
		    				<tr>
		    					<td align="right">
					    			<input class="easyui-textbox" name="id_bayar" id="id_bayar" value="<?=$group->ID_PEMBAYARAN_LAB;?>" data-options="required:true" style="height:25px;width:200px" readonly="true"></input>
					    			<input type="hidden" name="detail" id="detail" style="height:25px;width:300px"></input>
					    		</td>
					    		<td align="right">
					    			<input class="easyui-datebox" value="<?= $date_now;?>" data-options="editable:false" style="width:200px;height:25px" id="txt_date" name="txt_date">
					    		</td>
					    	</tr>
					    	<td width="100">&nbsp;</td>
		    			</table>
		    			<table>
                          <tr>
					            <td width="100" ><label style="font-size:12px">Nama Dokter</label></td>
					            <td >
					            <select class="easyui-combogrid" style="width:250px;height:30px" id="id_dokter" name="id_dokter" data-options="
							            panelWidth: 500,
							            idField: 'ID_DOKTER',
							            textField: 'NAMA_DOKTER',
                                        value: '<?=$group->ID_DOKTER;?>',
							            url: '<?= base_url().$menu_link->controller;?>/get_list_dokter',
							            method: 'get',
							            required:true,
							            columns: [[
							                {field:'ID_DOKTER',title:'Id Dokter',width:100},
							                {field:'NAMA_DOKTER',title:'Nama dokter',width:150},
                                            {field:'SPESIALIST',title:'Spesialist',width:150},
							            ]],
							            fitColumns: true
							        ">
							    </select>
					            </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>
					            <td width="100" ><label style="font-size:12px">Total Biaya</label></td>
					            <td >
                               <input class="easyui-numberbox" data-options="required:true,precision:2,groupSeparator:'.',decimalSeparator:','" value="<?=$group->TOTAL_BIAYA;?>" style="width:150px;height:30px" id="total_by" name="total_by" readonly="true">			                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
		    					</td> 
		    				</tr> 
		    			</table>
		    		</td>
				</tr>
		        <tr><td colspan="2" height="5"></td></tr>
		    </table>
		</form>
	</div>
	<div data-options="region:'center',title:'',iconCls:'icon-ok'" style="width:80%;height:260px;border:none;overflow:hidden">
		<table class="easyui-edatagrid" title="" style="height:250px" id="grid_detail"
		        data-options="
		        rownumbers:true,
		        singleSelect:true,
		        pagination:false,
	            pageSize:50,
		        url:'<?= base_url().$menu_link->controller;?>/get_detail_blab/<?=$group->ID_PEMBAYARAN_LAB;?>',
		        method:'get',
		        ">
		    <thead>
		        <tr>
		            <th data-options="field:'ID_DT_LAB',width:150,align:'center'">Id Data lab</th>
		            <th data-options="field:'NAMA_PEMERIKSAAN',width:270,align:'center'">Nama Pemeriksaan</th>
                     <th data-options="field:'TARIF',width:200,align:'center'" formatter="formatRp" editor="{type:'numberbox',options:{min:1,precision:2,decimalSeparator:',',groupSeparator:'.',required:true}}">Tarif</th>
                     <th data-options="field:'KETERANGAN',width:300,align:'center'">Keterangan</th>
		        </tr>
		    </thead>
		</table>
	</div> 
	<div data-options="region:'south',title:'',iconCls:'icon-ok'" style="height:80px;border:none">
		 <table width="100%" cellpadding="0" cellspacing="0">
            <tr>
                <td>&nbsp;</td>
                <td align="right">
	                <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-help" onClick="" plain="true">Help</a>
	                <a href="javascript:void(0)" class="easyui-linkbutton form-button" iconCls="icon-print" onClick="print_preview()">Preview & Print</a>
	                <a href="javascript:void(0)" class="easyui-linkbutton form-button" iconCls="icon-cancel" onClick="parent.closePanel()">Cancel</a>	     
                </td>
             </tr>
         </table>
	</div>
</div>

<script type="text/javascript">
	
	function print_preview(){
    	var transaction_no = $('#id_bayar').textbox('getValue');
        parent.editPanel('Print Preview <?= $menu_link->MenuLabel;?>','<?= $menu_link->controller;?>/print_preview',transaction_no);
    }

    get_privillage('<?=$menu_link->MenuID;?>','dlg_<?=$menu_link->controller;?>','new');

</script>
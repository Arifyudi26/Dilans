 <script>
  var baseurl = "<?php echo base_url("index.php/"); ?>"; // Buat variabel baseurl untuk nanti di akses pada file config.js
       </script>
   <div class="easyui-layout" style="height:500px;width:100%" id="layout_<?= $menu_link->controller;?>">
	<div data-options="region:'north',title:'',iconCls:'icon-ok'" style="width:80%;height:180px;border:none;overflow:hidden">
		<form id="fm_rb" action="<?= base_url().$menu_link->controller;?>/update" method="post" enctype="multipart/form-data">
		    <table width="100%">
		    	<tr><td colspan="2" height="5"></td></tr>
		    	<tr>
		    		<td>
		    			<table width="80%" cellpadding="0" cellspacing="0">
		    				<tr>
					            <td width="300" ><label style="font-size:12px">Kode Pasien</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="kd_pasien" value="<?=$group->KODE_PASIEN;?>" id="kd_pasien" onKeyUp="btn-search" data-options="required:true" style="height:30px;width:200px"></input>
                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>
					            <td width="300" ><label style="font-size:12px">Nama Pasien</label></td>
					            <td >
                               <input name="nm_lengkap" class="easyui-textbox"  type="text"id="nama" value="<?=$group->NAMA_LENGKAP;?>" data-options="required:true" style="height:30px;width:300px">	
	            	           <input type="hidden" name="status" id="status"  style="height:15px;width:250px;"></input>
                               <input type="hidden" name="id_poli" id="id_poli" value="<?=$group->ID_DAFTAR_RB;?>"  style="height:15px;width:250px;"></input>
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
				          	   	<td width="300"><label style="font-size:12px">Alamat</label></td>
				 				  <td >
                    <input class="easyui-textbox" type="text" name="alamat" id="alamat" value="<?=$group->ALAMAT;?>" data-options="multiline:true,required:true" onFocus="" style="height:45px;width:300px"></input>                              
                    </td>
				</tr>
				<tr><td colspan="2" height="5"></td></tr>
			    </table>
					</td>
					<td align="" valign="top">   
		    			<table width="20%" cellpadding="0" cellspacing="0">
		    				<tr>
		    					<td align="center" style="font-size:12px;background-color:#cccccc;width:200px;height:20px;border:1px solid black;text-valign:middle"><label >Id Pulang Rb</label></td>
		    					<td align="center" style="font-size:12px;background-color:#cccccc;width:200px;height:20px;border:1px solid black;text-valign:middle"><label >Date</label></td>
		    				</tr>
		    				<tr><td colspan="2" height="2"></td></tr>
		    				<tr>
		    					<td align="right">
					    			<input class="easyui-textbox" name="id_pulang" id="id_pulang" value="<?=$group->ID_PULANG_RB;?>" data-options="required:true" style="height:25px;width:200px" readonly="true"></input>
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
					            <td width="100" ><label style="font-size:12px">No Bpjs</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="bpjs" id="bpjs" value="<?=$group->NO_BPJS;?>" data-options="required:true" style="height:30px;width:300px"></input>					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                          <tr>
					            <td width="100" ><label style="font-size:12px">Petugas</label></td>
					            <td >
					            <select class="easyui-combogrid" style="width:250px;height:30px" id="petugas" name="petugas" data-options="
							            panelWidth: 500,
							            idField: 'ID_EMPLOYEE',
							            textField: 'NAMA_LENGKAP',
                                        value :'<?=$group->ID_EMPLOYEE;?>',
							            url: '<?= base_url().$menu_link->controller;?>/get_list_petugas',
							            method: 'get',
							            required:true,
							            columns: [[
							                {field:'ID_EMPLOYEE',title:'Id Employe',width:100},
							                {field:'NAMA_LENGKAP',title:'Nama Lengkap',width:150},
                                            {field:'ALAMAT',title:'Alamat',width:150},
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
                               <input class="easyui-numberbox" value="<?=$group->TOTAL_BIAYA;?>" data-options="required:true,precision:2,groupSeparator:'.',decimalSeparator:','" style="width:150px;height:30px" id="total_by" name="total_by" readonly="true">						                                </td>
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
		<table class="easyui-edatagrid" title="" style="height:230px" id="grid_detail"
		        data-options="
		        rownumbers:true,
		        singleSelect:true,
		        pagination:false,
	            pageSize:50,
		        url:'<?= base_url().$menu_link->controller;?>/get_detail_prb/<?=$group->ID_PULANG_RB;?>',
		        method:'get',
		        onBeginEdit:function(rowIndex){
                    /*====================on beg in edit saat grid di klik maka tombol save disable===================*/
                    
                    /*=================================end============================================================*/
                    var editors = $('#grid_detail').edatagrid('getEditors', rowIndex);
			        var n1 = $(editors[0].target);
			        var n2 = $(editors[1].target);
			 		var n3 = $(editors[2].target);

			        n1.add(n2).numberbox({
			            onChange:function(){
			                var SUB_TOTAL 	= (n1.numberbox('getValue') * n2.numberbox('getValue'));
			                n3.numberbox('setValue',SUB_TOTAL);
			            }
			        })
                }, 
                 onEndEdit:function(indexRow,row,changes){
                    /*====================on beg in edit saat grid di klik maka tombol save disable===================*/
                   
                    /*=================================end============================================================*/
                }
		        ">
		    <thead>
		        <tr>
		            <th data-options="field:'ID_PENUNJANG',width:160,align:'center'">Id Penunjang</th>
		            <th data-options="field:'PENUNJANG',width:240,align:'center'">Penunjang</th>
                    <th data-options="field:'TARIF',width:170,align:'center'" formatter="formatRp" editor="{type:'numberbox',options:{min:0,precision:2,decimalSeparator:',',groupSeparator:'.',required:true,disabled:true}}">Tarif</th>
                    <th data-options="field:'SELAMA',width:170,align:'center'" formatter="formatRp" editor="{type:'numberbox',options:{min:0,precision:2,decimalSeparator:',',groupSeparator:'.',required:true,disabled:true}}">Selama</th>
                    <th data-options="field:'SUB_TOTAL',width:190,align:'center'" formatter="formatRp" editor="{type:'numberbox',options:{min:0,precision:2,decimalSeparator:',',groupSeparator:'.',required:true,disabled:true}}">SubTotal</th>
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
                </td> </tr>
         </table>
	</div>
</div>

<script type="text/javascript">

	function print_preview(){
    	var transaction_no = $('#id_pulang').textbox('getValue');
        parent.editPanel('Print Preview <?= $menu_link->MenuLabel;?>','<?= $menu_link->controller;?>/print_preview',transaction_no);
    }
    get_privillage('<?=$menu_link->MenuID;?>','dlg_<?=$menu_link->controller;?>','new');

</script>
 <script>
  var baseurl = "<?php echo base_url("index.php/"); ?>"; 
       </script>
<div class="easyui-layout" style="height:500px;width:100%" id="layout_<?= $menu_link->controller;?>">
	<div data-options="region:'north',title:'',iconCls:'icon-ok'" style="width:80%;height:200px;border:none;overflow:hidden">
		<form id="fm_rb" action="<?= base_url().$menu_link->controller;?>/insert" method="post" enctype="multipart/form-data">
		    <table width="100%">
		    	<tr><td colspan="2" height="5"></td></tr>
		    	<tr>
		    		<td>
		    			<table width="80%" cellpadding="0" cellspacing="0">
		    				<tr>
					            <td width="300" ><label style="font-size:12px">Kode Pasien</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="kd_pasien" id="kd_pasien" onKeyUp="btn-search" data-options="required:true" style="height:30px;width:200px"></input> <a href="javascript:void(0)" class="easyui-linkbutton form-button" style="height:30px;" iconCls="icon-search" id="" onClick="cari1();">Cari</a>
                               </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>
					            <td width="300" ><label style="font-size:12px">Nama Pasien</label></td>
					            <td >
                               <input name="nm_lengkap" class="easyui-textbox"  type="text"id="nama" data-options="required:true" style="height:30px;width:300px">	
	            	           <input type="hidden" name="status" id="status"  style="height:15px;width:250px;"></input>
                               <input type="hidden" name="id_poli" id="id_poli"  style="height:15px;width:250px;"></input>
                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>
					            <td width="300" ><label style="font-size:12px">Umur</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="umur" id="umur"  data-options="required:true" style="height:30px;width:300px"></input>					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             <tr>
				          	   	<td width="300"><label style="font-size:12px">Alamat</label></td>
				 				  <td >
                    <textarea class="easyui-textbox" type="text" name="alamat" id="alamat"  data-options="multiline:true,required:true" onFocus="" style="height:45px;width:300px"></textarea>                              
                    </td>
				</tr>
				<tr><td colspan="2" height="5"></td></tr>
                 <tr>
					            <td width="100" ><label style="font-size:12px">No Bpjs</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="bpjs" id="bpjs"  data-options="required:true" style="height:30px;width:300px"></input>					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
					    </table>
					</td>
					<td align="" valign="top">   
		    			<table width="20%" cellpadding="0" cellspacing="0">
		    				<tr>
		    					<td align="center" style="font-size:12px;background-color:#cccccc;width:200px;height:20px;border:1px solid black;text-valign:middle"><label >Id Daftar Rb</label></td>
		    					<td align="center" style="font-size:12px;background-color:#cccccc;width:200px;height:20px;border:1px solid black;text-valign:middle"><label >Date</label></td>
		    				</tr>
		    				<tr><td colspan="2" height="2"></td></tr>
		    				<tr>
		    					<td align="right">
					    			<input class="easyui-textbox" name="id_daftar" id="id_daftar" value="<?=$gigi;?>" data-options="required:true" style="height:25px;width:200px" readonly="true"></input>
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
					            <td width="100" ><label style="font-size:12px">Nama Suami</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="ns" id="ns"  data-options="required:true" style="height:30px;width:250px"></input>					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             <tr>
					            <td width="100" ><label style="font-size:12px">No telpon</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="tlp" id="tlp"  data-options="required:true" style="height:30px;width:250px"></input>					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>
					            <td width="100" ><label style="font-size:12px">Petugas</label></td>
					            <td >
					            <select class="easyui-combogrid" style="width:250px;height:30px" id="petugas" name="petugas" data-options="
							            panelWidth: 500,
							            idField: 'ID_EMPLOYEE',
							            textField: 'NAMA_LENGKAP',
							            url: 'get_list_petugas',
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
		<table class="easyui-edatagrid" title="" style="height:210px" id="grid_detail"
		        data-options="
		        rownumbers:true,
		        singleSelect:true,
		        pagination:false,
	            pageSize:50,
		        url:'',
		        method:'get',
		        toolbar:toolbar,
		        onBeginEdit:function(rowIndex){
                    /*====================on beg in edit saat grid di klik maka tombol save disable===================*/
                   
                    /*=================================end============================================================*/
                },
                onEndEdit:function(indexRow,row,changes){
                    /*====================on beg in edit saat grid di klik maka tombol save disable===================*/
                    
                    /*=================================end============================================================*/
                }
		        ">
		    <thead>
		        <tr>
		            <th data-options="field:'ID_PENUNJANG',width:160,align:'center'">Id Penunjang</th>
		            <th data-options="field:'PENUNJANG',width:300,align:'center'">Penunjang</th>
                    <th data-options="field:'KETERANGAN',width:470,align:'center'">Keterangan</th>
                    
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
	                <a href="javascript:void(0)" class="easyui-linkbutton form-button save-button" iconCls="icon-save" id="" onClick="save();">Save</a>
	                <a href="javascript:void(0)" class="easyui-linkbutton form-button" iconCls="icon-cancel" onClick="parent.closePanel()">Cancel</a>	     
                </td>
             </tr>
         </table>
	</div>
</div>

<!--  Dialog list kamar -->
<div id="dialog_list_kamar" class="easyui-dialog" title="List Penunjang Kamar" style="width:50%;height:500px;background-color:#F8F8F8;padding:5px;top:5px" closed="true" data-options="modal:true" buttons="#dialog_buttton_list_kamar">
    <form id="form_kamar" method="post" novalidate>
        <table width="97%" border="0">
        	<tr>
        		<td colspan="3" height="15"></td>
        	</tr>
            <tr>
                <td width="100" align="left" valign="middle"><label style="font-size:12px">Id Kamar</label></td>
                <td width="14"><b>:</b></td>
                <td colspan="2">
                    <input type="text" style="height:25px;width:300px" name="id_kamar" id="id_kamar" placeholder="< Id Kamar >" onKeyUp="search_list_kamar();" />
                </td>
            </tr>
            <tr>
        		<td colspan="3" height="8"></td>
        	</tr>
            <tr>
                <td width="100" align="left" valign="middle"><label style="font-size:12px">Nama Kamar</label></td>
                <td><b>:</b></td>
                <td colspan="2">
                    <input type="text" style="height:25px;width:300px" name="nm_kamar" id="nm_kamar" placeholder="< Nama kamar >" onKeyUp="search_list_kamar();" />
                </td>
            </tr>
            <tr>
        		<td colspan="3" height="15"></td>
        	</tr>
            <tr>
                <td colspan="3">
                    <table id="list_kamar" class="easyui-datagrid" 
                        url="<?= base_url().$menu_link->controller;?>/get_list_kamar" 
                        singleSelect="true" fitColumns="true"  pageSize="8" 
                        style="height:250px;width:100%" data-options = "
                        border:false,
                        view:scrollview,
                        onBeforeLoad:function(param){
				            if((typeof param.id_kamar == 'undefined')){
				               param.id_kamar = '';
				            }  
				            if((typeof param.nm_kamar == 'undefined')){
				               param.nm_kamar = '';
				            }  
					    }
                    ">
                        <thead>
                            <tr>
                            	<th data-options="field:'ck',checkbox:true"></th>
                                <th field="ID_KAMAR" data-options="field:'ID_KAMAR',width:120" sortable="true">Id Kamar</th>
                                <th field="NAMA_KAMAR" data-options="field:'NAMA_KAMAR',width:200" sortable="true">Nama Kamar</th>
                                <th field="KETERANGAN" data-options="field:'KETERANGAN',width:270" sortable="true">Keterangan</th>
                            </tr>
                        </thead>
                    </table>
                </td>
            </tr>
        </table>
    </form>
</div>

<!-- Dialog Button -->
<div id="dialog_buttton_list_kamar" style="border:none;height:80px">
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-ok" onClick="choose_list_kamar();">OK</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onClick="modal_close('dialog_list_kamar');">Cancel</a>
</div>

<!--  Dialog list partus -->
<div id="dialog_list_partus" class="easyui-dialog" title="List Penunjang Pertolongan Partus" style="width:50%;height:500px;background-color:#F8F8F8;padding:5px;top:5px" closed="true" data-options="modal:true" buttons="#dialog_buttton_list_partus">
    <form id="form_kamar" method="post" novalidate>
        <table width="97%" border="0">
        	<tr>
        		<td colspan="3" height="15"></td>
        	</tr>
            <tr>
                <td width="100" align="left" valign="middle"><label style="font-size:12px">Id partus</label></td>
                <td width="14"><b>:</b></td>
                <td colspan="2">
                    <input type="text" style="height:25px;width:300px" name="id_partus" id="id_partus" placeholder="< Id partus >" onKeyUp="search_list_partus();" />
                </td>
            </tr>
            <tr>
        		<td colspan="3" height="8"></td>
        	</tr>
            <tr>
                <td width="100" align="left" valign="middle"><label style="font-size:12px">Partus</label></td>
                <td><b>:</b></td>
                <td colspan="2">
                    <input type="text" style="height:25px;width:300px" name="partus" id="partus" placeholder="< partus >" onKeyUp="search_list_partus();" />
                </td>
            </tr>
            <tr>
        		<td colspan="3" height="15"></td>
        	</tr>
            <tr>
                <td colspan="3">
                    <table id="list_partus" class="easyui-datagrid" 
                        url="<?= base_url().$menu_link->controller;?>/get_list_partus" 
                        singleSelect="false" fitColumns="true"  pageSize="8" 
                        style="height:250px;width:100%" data-options = "
                        border:false,
                        view:scrollview,
                        onBeforeLoad:function(param){
				            if((typeof param.id_partus == 'undefined')){
				               param.id_partus = '';
				            }  
				            if((typeof param.partus == 'undefined')){
				               param.partus = '';
				            }  
					    }
                    ">
                        <thead>
                            <tr>
                            	<th data-options="field:'ck',checkbox:true"></th>
                                <th field="ID_PARTUS" data-options="field:'ID_PARTUS',width:120" sortable="true">Id Partus</th>
                                <th field="PARTUS" data-options="field:'PARTUS',width:200" sortable="true">Pertolongan Partus</th>
                                <th field="KETERANGAN" data-options="field:'KETERANGAN',width:270" sortable="true">Keterangan</th>
                               
                            </tr>
                        </thead>
                    </table>
                </td>
            </tr>
        </table>
    </form>
</div>

<!-- Dialog Button -->
<div id="dialog_buttton_list_partus" style="border:none;height:80px">
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-ok" onClick="choose_list_partus();">OK</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onClick="modal_close('dialog_list_partus');">Cancel</a>
</div>

<!--  Dialog list ibu -->
<div id="dialog_list_ibu" class="easyui-dialog" title="List Penunjang Pawatan ibu" style="width:50%;height:500px;background-color:#F8F8F8;padding:5px;top:5px" closed="true" data-options="modal:true" buttons="#dialog_buttton_list_ibu">
    <form id="form_ibu" method="post" novalidate>
        <table width="97%" border="0">
        	<tr>
        		<td colspan="3" height="15"></td>
        	</tr>
            <tr>
                <td width="100" align="left" valign="middle"><label style="font-size:12px">Id perawatan ibu</label></td>
                <td width="14"><b>:</b></td>
                <td colspan="2">
                    <input type="text" style="height:25px;width:300px" name="id_ibu" id="id_ibu" placeholder="< Id perawtan ibu >" onKeyUp="search_list_ibu();" />
                </td>
            </tr>
            <tr>
        		<td colspan="3" height="8"></td>
        	</tr>
            <tr>
                <td width="100" align="left" valign="middle"><label style="font-size:12px">Perawatan Ibu</label></td>
                <td><b>:</b></td>
                <td colspan="2">
                    <input type="text" style="height:25px;width:300px" name="p_ibu" id="p_ibu" placeholder="< perawatan ibu >" onKeyUp="search_list_ibu();" />
                </td>
            </tr>
            <tr>
        		<td colspan="3" height="15"></td>
        	</tr>
            <tr>
                <td colspan="3">
                    <table id="list_ibu" class="easyui-datagrid" 
                        url="<?= base_url().$menu_link->controller;?>/get_list_ibu" 
                        singleSelect="false" fitColumns="true"  pageSize="8" 
                        style="height:250px;width:100%" data-options = "
                        border:false,
                        view:scrollview,
                        onBeforeLoad:function(param){
				            if((typeof param.id_ibu == 'undefined')){
				               param.id_ibu = '';
				            }  
				            if((typeof param.p_ibu == 'undefined')){
				               param.p_ibu = '';
				            }  
					    }
                    ">
                        <thead>
                            <tr>
                            	<th data-options="field:'ck',checkbox:true"></th>
                                <th field="ID_PERAWATAN_IBU" data-options="field:'ID_PERAWATAN_IBU',width:120" sortable="true">Id Perawatan Ibu</th>
                                <th field="PERAWATAN_IBU" data-options="field:'PERAWATAN_IBU',width:200" sortable="true">Perawatan Ibu</th>
                                <th field="KETERANGAN" data-options="field:'KETERANGAN',width:270" sortable="true">Keterangan</th>
                               
                            </tr>
                        </thead>
                    </table>
                </td>
            </tr>
        </table>
    </form>
</div>

<!-- Dialog Button -->
<div id="dialog_buttton_list_ibu" style="border:none;height:80px">
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-ok" onClick="choose_list_ibu();">OK</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onClick="modal_close('dialog_list_ibu');">Cancel</a>
</div>

<!--  Dialog list bayi -->
<div id="dialog_list_bayi" class="easyui-dialog" title="List Penunjang Pawatan bayi" style="width:50%;height:500px;background-color:#F8F8F8;padding:5px;top:5px" closed="true" data-options="modal:true" buttons="#dialog_buttton_list_bayi">
    <form id="form_bayi" method="post" novalidate>
        <table width="97%" border="0">
        	<tr>
        		<td colspan="3" height="15"></td>
        	</tr>
            <tr>
                <td width="150" align="left" valign="middle"><label style="font-size:12px">Id perawatan bayi</label></td>
                <td width="14"><b>:</b></td>
                <td colspan="2">
                    <input type="text" style="height:25px;width:250px" name="id_bayi" id="id_bayi" placeholder="< Id perawtan bayi >" onKeyUp="search_list_bayi();" />
                </td>
            </tr>
            <tr>
        		<td colspan="3" height="8"></td>
        	</tr>
            <tr>
                <td width="150" align="left" valign="middle"><label style="font-size:12px">Perawatan bayi</label></td>
                <td><b>:</b></td>
                <td colspan="2">
                    <input type="text" style="height:25px;width:250px" name="p_bayi" id="p_bayi" placeholder="< perawatan bayi >" onKeyUp="search_list_bayi();" />
                </td>
            </tr>
            <tr>
        		<td colspan="3" height="15"></td>
        	</tr>
            <tr>
                <td colspan="3">
                    <table id="list_bayi" class="easyui-datagrid" 
                        url="<?= base_url().$menu_link->controller;?>/get_list_bayi" 
                        singleSelect="false" fitColumns="true"  pageSize="8" 
                        style="height:250px;width:100%" data-options = "
                        border:false,
                        view:scrollview,
                        onBeforeLoad:function(param){
				            if((typeof param.id_bayi == 'undefined')){
				               param.id_bayi = '';
				            }  
				            if((typeof param.p_bayi == 'undefined')){
				               param.p_bayi = '';
				            }  
					    }
                    ">
                        <thead>
                            <tr>
                            	<th data-options="field:'ck',checkbox:true"></th>
                                <th field="ID_PERAWATAN_BAYI" data-options="field:'ID_PERAWATAN_BAYI',width:120" sortable="true">Id Perawatan Bayi</th>
                                <th field="PERAWATAN_BAYI" data-options="field:'PERAWATAN_BAYI',width:200" sortable="true">Perawatan Bayi</th>
                                <th field="KETERANGAN" data-options="field:'KETERANGAN',width:270" sortable="true">Keterangan</th>
                            </tr>
                        </thead>
                    </table>
                </td>
            </tr>
        </table>
    </form>
</div>

<!-- Dialog Button -->
<div id="dialog_buttton_list_bayi" style="border:none;height:80px">
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-ok" onClick="choose_list_bayi();">OK</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onClick="modal_close('dialog_list_bayi');">Cancel</a>
</div>

<!--  Dialog list bersalin -->
<div id="dialog_list_bersalin" class="easyui-dialog" title="List Penunjang Tindakan Bersalin" style="width:50%;height:500px;background-color:#F8F8F8;padding:5px;top:5px" closed="true" data-options="modal:true" buttons="#dialog_buttton_list_bersalin">
    <form id="form_bersalin" method="post" novalidate>
        <table width="97%" border="0">
        	<tr>
        		<td colspan="3" height="15"></td>
        	</tr>
            <tr>
                <td width="100" align="left" valign="middle"><label style="font-size:12px">Id Tdk bersalin</label></td>
                <td width="14"><b>:</b></td>
                <td colspan="2">
                    <input type="text" style="height:25px;width:300px" name="id_bersalin" id="id_bersalin" placeholder="< Id Tdk bersalin >" onKeyUp="search_list_bersalin();" />
                </td>
            </tr>
            <tr>
        		<td colspan="3" height="8"></td>
        	</tr>
            <tr>
                <td width="100" align="left" valign="middle"><label style="font-size:12px">Perawatan bayi</label></td>
                <td><b>:</b></td>
                <td colspan="2">
                    <input type="text" style="height:25px;width:300px" name="bersalin" id="bersalin" placeholder="< Tindakan bersalin >" onKeyUp="search_list_bersalin();" />
                </td>
            </tr>
            <tr>
        		<td colspan="3" height="15"></td>
        	</tr>
            <tr>
                <td colspan="3">
                    <table id="list_bersalin" class="easyui-datagrid" 
                        url="<?= base_url().$menu_link->controller;?>/get_list_bersalin" 
                        singleSelect="false" fitColumns="true"  pageSize="8" 
                        style="height:250px;width:100%" data-options = "
                        border:false,
                        view:scrollview,
                        onBeforeLoad:function(param){
				            if((typeof param.id_bersalin == 'undefined')){
				               param.id_bersalin = '';
				            }  
				            if((typeof param.bersalin == 'undefined')){
				               param.bersalin = '';
				            }  
					    }
                    ">
                        <thead>
                            <tr>
                            	<th data-options="field:'ck',checkbox:true"></th>
                                <th field="ID_TDK_BERSALIN" data-options="field:'ID_TDK_BERSALIN',width:120" sortable="true">Id Tdk Bersalin</th>
                                <th field="TINDAKAN_BERSALIN" data-options="field:'TINDAKAN_BERSALIN',width:200" sortable="true">Tindakan Bersalin</th>
                                <th field="KETERANGAN" data-options="field:'KETERANGAN',width:270" sortable="true">Keterangan</th>
                            </tr>
                        </thead>
                    </table>
                </td>
            </tr>
        </table>
    </form>
</div>

<!-- Dialog Button -->
<div id="dialog_buttton_list_bersalin" style="border:none;height:80px">
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-ok" onClick="choose_list_bersalin();">OK</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onClick="modal_close('dialog_list_bersalin');">Cancel</a>
</div>

<!--  Dialog list bersalin -->
<div id="dialog_list_gizi" class="easyui-dialog" title="List Penunjang Pemberian Gizi Seimbang" style="width:50%;height:500px;background-color:#F8F8F8;padding:5px;top:5px" closed="true" data-options="modal:true" buttons="#dialog_buttton_list_gizi">
    <form id="form_gizi" method="post" novalidate>
        <table width="97%" border="0">
        	<tr>
        		<td colspan="3" height="15"></td>
        	</tr>
            <tr>
                <td width="150" align="left" valign="middle"><label style="font-size:12px">Id Gizi Seimbang</label></td>
                <td width="14"><b>:</b></td>
                <td colspan="2">
                    <input type="text" style="height:25px;width:250px" name="id_gizi" id="id_gizi" placeholder="< Id Gizi Seimbang >" onKeyUp="search_list_Gizi();" />
                </td>
            </tr>
            <tr>
        		<td colspan="3" height="8"></td>
        	</tr>
            <tr>
                <td width="150" align="left" valign="middle"><label style="font-size:12px">Pemberian Makanan</label></td>
                <td><b>:</b></td>
                <td colspan="2">
                    <input type="text" style="height:25px;width:250px" name="makan" id="makan" placeholder="< Pemberian Makanan >" onKeyUp="search_list_gizi();" />
                </td>
            </tr>
            <tr>
        		<td colspan="3" height="15"></td>
        	</tr>
            <tr>
                <td colspan="3">
                    <table id="list_gizi" class="easyui-datagrid" 
                        url="<?= base_url().$menu_link->controller;?>/get_list_gizi" 
                        singleSelect="false" fitColumns="true"  pageSize="8" 
                        style="height:250px;width:100%" data-options = "
                        border:false,
                        view:scrollview,
                        onBeforeLoad:function(param){
				            if((typeof param.id_gizi == 'undefined')){
				               param.id_gizi = '';
				            }  

				            if((typeof param.makan == 'undefined')){
				               param.makan = '';
				            }  
					    }

                    ">
                        <thead>
                            <tr>
                            	<th data-options="field:'ck',checkbox:true"></th>
                                <th field="ID_GIZI_SMBNG" data-options="field:'ID_GIZI_SMBNG',width:120" sortable="true">Id Gizi seimbang</th>
                                <th field="PEMBERIAN_MAKANAN" data-options="field:'PEMBERIAN_MAKANAN',width:200" sortable="true">Pemberian makanan</th>
                                <th field="KETERANGAN" data-options="field:'KETERANGAN',width:300" sortable="true">Keterangan</th>
                               
                            </tr>
                        </thead>
                    </table>
                </td>
            </tr>
        </table>
    </form>
</div>

<!-- Dialog Button -->
<div id="dialog_buttton_list_gizi" style="border:none;height:80px">
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-ok" onClick="choose_list_gizi();">OK</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onClick="modal_close('dialog_list_gizi');">Cancel</a>
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
                                <th field="ID_BEROBAT" data-options="field:'ID_BEROBAT',width:150" sortable="true">Id kunjungan</th>
                                <th field="KODE_PASIEN" data-options="field:'KODE_PASIEN',width:150" sortable="true">Kd pasien</th>
                                <th field="NAMA_LENGKAP" data-options="field:'NAMA_LENGKAP',width:170" sortable="true">Nama Lengkap</th>
                                <th field="UMUR" data-options="field:'UMUR',width:150" sortable="true">Umur</th>
                                <th field="ALAMAT" data-options="field:'ALAMAT',width:170" sortable="true">Alamat</th>
                                <th field="NO_BPJS" data-options="field:'NO_BPJS',width:170" sortable="true">No Bpjs</th>
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
	  var um ='';
	  var id	='';
	  var lab	='';
	  var nbp	='';
	  
        $.each(row, function( index,value) {
            kd 	=(value.KODE_PASIEN);
			nm    =(value.NAMA_LENGKAP);
			um			=(value.UMUR);
			id			=(value.ID_BEROBAT);
			lab			=(value.ALAMAT);
			nbp			=(value.NO_BPJS);
			
        });

        $('#kd_pasien').textbox('setValue',kd);
		$('#nama').textbox('setValue',nm);
		$('#umur').textbox('setValue',um);
		$('#alamat').textbox('setValue',lab);
		$('#bpjs').textbox('setValue',nbp);
		$('#id_poli').val(id);
		
	    modal_close('dialog_list_pasien');
	}

	$(document).ready(function(){
		$('#layout_<?= $menu_link->controller;?>').click(function(){
			var row         = $('#grid_detail').edatagrid('getRows');
			var ttl_row 	= row.length;

			if(ttl_row >0){
				$('#grid_detail').edatagrid('saveRow');
			}
		});
	});

    var toolbar = [{
        text:'Kamar',
        iconCls:'icon-add',
        handler:function(){
        	var kd_pasien = $('#ns').val();
        	var dokter = $('#tlp').val();

        	if(kd_pasien !='' && dokter!=""){
        		$('#dialog_list_kamar').dialog('open');
        	}else{
        		 $.messager.alert('warning','Silahkan isi Nama suami dan no telpon terlebih dahulu!','warning');
        	}
        }
    },{
        text:'Partus',
        iconCls:'icon-add',
        handler:function(){
        	var kd_pasien = $('#ns').val();
        	var dokter = $('#tlp').val();

        	if(kd_pasien !='' && dokter!=""){
        		$('#dialog_list_partus').dialog('open');
        	}else{
        		 $.messager.alert('warning','Silahkan isi Nama suami dan no telpon terlebih dahulu!','warning');
        	}
        }
    },{
        text:'P-Ibu',
        iconCls:'icon-add',
        handler:function(){
        	var kd_pasien = $('#ns').val();
        	var dokter = $('#tlp').val();

        	if(kd_pasien !='' && dokter!=""){
        		$('#dialog_list_ibu').dialog('open');
        	}else{
        		 $.messager.alert('warning','Silahkan isi Nama suami dan no telpon terlebih dahulu!','warning');
        	}
        }
    },{
        text:'P-Bayi',
        iconCls:'icon-add',
        handler:function(){
        	var kd_pasien = $('#ns').val();
        	var dokter = $('#tlp').val();

        	if(kd_pasien !='' && dokter!=""){
        		$('#dialog_list_bayi').dialog('open');
        	}else{
        		 $.messager.alert('warning','Silahkan isi Nama suami dan no telpon terlebih dahulu!','warning');
        	}
        }
    },{
        text:'T-Salin',
        iconCls:'icon-add',
        handler:function(){
        	var kd_pasien = $('#ns').val();
        	var dokter = $('#tlp').val();

        	if(kd_pasien !='' && dokter!=""){
        		$('#dialog_list_bersalin').dialog('open');
        	}else{
        		 $.messager.alert('warning','Silahkan isi Nama suami dan no telpon terlebih dahulu!','warning');
        	}
        }
    },{
        text:'P-Gizi',
        iconCls:'icon-add',
        handler:function(){
        	var kd_pasien = $('#ns').val();
        	var dokter = $('#tlp').val();

        	if(kd_pasien !='' && dokter!=""){
        		$('#dialog_list_gizi').dialog('open');
        	}else{
        		 $.messager.alert('warning','Silahkan isi Nama suami dan no telpon terlebih dahulu!','warning');
        	}
        }
    },{
        text:'Remove',
        iconCls:'icon-remove',
        handler:function(){
        	var row 		= $('#grid_detail').edatagrid('getSelected');
        	var row_index  	= $('#grid_detail').datagrid('getRowIndex', row);
        	$('#grid_detail').edatagrid('deleteRow', row_index);
        }
    }];
	
	//----------------------------------------------function kamar--------------------------------------------------------------//

    function search_list_kamar(){
    	$('#list_kamar').datagrid('reload',{
    		id_kamar 	: $('#id_kamar').val(),
    		nm_kamar 	: $('#nm_kamar').val(),
    	});

    }

    function choose_list_kamar(){

    	var fd          = $('#list_kamar').datagrid('getChecked');
	    var row         = $('#grid_detail').edatagrid('getRows');
	    var isready 	= 0;
	    var ind_fd		= row.length + 1;

	    $.each(fd, function(ind, value) {
	        var ID_KAMAR     	= value.ID_KAMAR;
	        var NAMA_KAMAR     	= value.NAMA_KAMAR;
			var KETERANGAN		= value.KETERANGAN;

	        $.each(row, function(ind,val){
	           if(val.ID_KAMAR == ID_KAMAR){
	                isready++;
	           }
	        });

	        if(isready < 1){
	            $('#grid_detail').edatagrid('appendRow',{
	                ID_PENUNJANG         	: ID_KAMAR,
        			PENUNJANG	            : NAMA_KAMAR,
					KETERANGAN				: KETERANGAN,
					
	            });

	        }

	        isready = 0;

	    });

	    modal_close('dialog_list_kamar');
    }


//----------------------------------------------function partus--------------------------------------------------------------//
  function search_list_partus(){
    	$('#list_partus').datagrid('reload',{
    		id_partus 	: $('#id_partus').val(),
    		partus 		: $('#partus').val(),
    	});

    }

    function choose_list_partus(){

    	var fd          = $('#list_partus').datagrid('getChecked');
	    var row         = $('#grid_detail').edatagrid('getRows');
	    var isready 	= 0;
	    var ind_fd		= row.length + 1;

	    $.each(fd, function(ind, value) {
	        var ID_PARTUS     	= value.ID_PARTUS;
	        var PARTUS     	= value.PARTUS;
			var KETERANGAN		= value.KETERANGAN;

	        $.each(row, function(ind,val){
	           if(val.ID_PARTUS == ID_PARTUS){
	                isready++;
	           }
	        });

	        if(isready < 1){
	            $('#grid_detail').edatagrid('appendRow',{
	                ID_PENUNJANG         	: ID_PARTUS,
        			PENUNJANG	            : PARTUS,
					KETERANGAN				: KETERANGAN,
					
	            });

	        }

	        isready = 0;

	    });

	    modal_close('dialog_list_partus');
    }
//-------------------------------------- function perawatan ibu-------------------------------------//
     function search_list_ibu(){
    	$('#list_partus').datagrid('reload',{
    		id_ibu 	: $('#id_ibu').val(),
    		p_ibu 		: $('#p_ibu').val(),
    	});

    }

    function choose_list_ibu(){

    	var fd          = $('#list_ibu').datagrid('getChecked');
	    var row         = $('#grid_detail').edatagrid('getRows');
	    var isready 	= 0;
	    var ind_fd		= row.length + 1;

	    $.each(fd, function(ind, value) {
	        var ID_PERAWATAN_IBU     	= value.ID_PERAWATAN_IBU;
	        var PERAWATAN_IBU     	= value.PERAWATAN_IBU;
			var KETERANGAN		= value.KETERANGAN;

	        $.each(row, function(ind,val){
	           if(val.ID_PERAWATAN_IBU == ID_PERAWATAN_IBU){
	                isready++;
	           }
	        });

	        if(isready < 1){
	            $('#grid_detail').edatagrid('appendRow',{
	                ID_PENUNJANG         	: ID_PERAWATAN_IBU,
        			PENUNJANG	            : PERAWATAN_IBU,
					KETERANGAN				: KETERANGAN,
					
	            });

	        }

	        isready = 0;

	    });

	    modal_close('dialog_list_ibu');
    }
   // -----------------------------------------------Function perawatan Bayi-----------------------------//
     function search_list_bayi(){
    	$('#list_bayi').datagrid('reload',{
    		id_bayi 	: $('#id_bayi').val(),
    		p_bayi 		: $('#p_bayi').val(),
    	});

    }

    function choose_list_bayi(){

    	var fd          = $('#list_bayi').datagrid('getChecked');
	    var row         = $('#grid_detail').edatagrid('getRows');
	    var isready 	= 0;
	    var ind_fd		= row.length + 1;

	    $.each(fd, function(ind, value) {
	        var ID_PERAWATAN_BAYI     	= value.ID_PERAWATAN_BAYI;
	        var PERAWATAN_BAYI     	= value.PERAWATAN_BAYI;
			var KETERANGAN		= value.KETERANGAN;

	        $.each(row, function(ind,val){
	           if(val.ID_PERAWATAN_BAYI == ID_PERAWATAN_BAYI){
	                isready++;
	           }
	        });

	        if(isready < 1){
	            $('#grid_detail').edatagrid('appendRow',{
	                ID_PENUNJANG         	: ID_PERAWATAN_BAYI,
        			PENUNJANG	            : PERAWATAN_BAYI,
					KETERANGAN				: KETERANGAN,
					
	            });

	        }

	        isready = 0;

	    });

	    modal_close('dialog_list_bayi');
    }
	//-----------------------------------------------function tindakan bersalin------------------------------//
	 function search_list_bersalin(){
    	$('#list_bersalin').datagrid('reload',{
    		id_bersalin 	: $('#id_bersalin').val(),
    		bersalin 		: $('#bersalin').val(),
    	});

    }

    function choose_list_bersalin(){

    	var fd          = $('#list_bersalin').datagrid('getChecked');
	    var row         = $('#grid_detail').edatagrid('getRows');
	    var isready 	= 0;
	    var ind_fd		= row.length + 1;

	    $.each(fd, function(ind, value) {
	        var ID_TDK_BERSALIN     	= value.ID_TDK_BERSALIN;
	        var TINDAKAN_BERSALIN   	= value.TINDAKAN_BERSALIN;
			var KETERANGAN		 		= value.KETERANGAN;

	        $.each(row, function(ind,val){
	           if(val.ID_TDK_BERSALIN == ID_TDK_BERSALIN){
	                isready++;
	           }
	        });

	        if(isready < 1){
	            $('#grid_detail').edatagrid('appendRow',{
	                ID_PENUNJANG         	: ID_TDK_BERSALIN,
        			PENUNJANG	            : TINDAKAN_BERSALIN,
					KETERANGAN				: KETERANGAN,
					
	            });

	        }

	        isready = 0;

	    });

	    modal_close('dialog_list_bersalin');
    }
	
	//-------------------------------------------------------function pemberian gizi seimbang--------------------------//
	 function search_list_gizi(){
    	$('#list_gizi').datagrid('reload',{
    		id_gizi 	: $('#id_gizi').val(),
    		makan 		: $('#makan').val(),
    	});

    }

    function choose_list_gizi(){

    	var fd          = $('#list_gizi').datagrid('getChecked');
	    var row         = $('#grid_detail').edatagrid('getRows');
	    var isready 	= 0;
	    var ind_fd		= row.length + 1;

	    $.each(fd, function(ind, value) {
	        var ID_GIZI_SMBNG     	= value.ID_GIZI_SMBNG;
	        var PEMBERIAN_MAKANAN   	= value.PEMBERIAN_MAKANAN;
			var KETERANGAN		 		= value.KETERANGAN;

	        $.each(row, function(ind,val){
	           if(val.ID_GIZI_SMBNG == ID_GIZI_SMBNG){
	                isready++;
	           }
	        });

	        if(isready < 1){
	            $('#grid_detail').edatagrid('appendRow',{
	                ID_PENUNJANG         	: ID_GIZI_SMBNG,
        			PENUNJANG	            : PEMBERIAN_MAKANAN,
					KETERANGAN				: KETERANGAN,
					
	            });

	        }

	        isready = 0;

	    });

	    modal_close('dialog_list_gizi');
    }


    function save(){
    	var rb 		= $('#grid_detail').edatagrid('getRows');
    	var detail1 		= JSON.stringify(rb);

    	$('#detail').val(detail1);
		
    		save_data('fm_rb');
    }

    get_privillage('<?=$menu_link->MenuID;?>','dlg_<?=$menu_link->controller;?>','new');

</script>
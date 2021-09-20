 <script>
  var baseurl = "<?php echo base_url("index.php/"); ?>"; // Buat variabel baseurl untuk nanti di akses pada file config.js
       </script>
<div class="easyui-layout" style="height:500px;width:100%" id="layout_<?= $menu_link->controller;?>">
	<div data-options="region:'north',title:'',iconCls:'icon-ok'" style="width:80%;height:170px;border:none;overflow:hidden">
		<form id="fm_resep" action="<?= base_url().$menu_link->controller;?>/insert" method="post" enctype="multipart/form-data">
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
				          	   	<td width="300"><label style="font-size:12px">Diagnosa</label></td>
				 				  <td >
                    <input class="easyui-textbox" type="text" name="diagnosa" id="deskripsi"  data-options="required:true" onFocus="choose_list_diagnosa();" style="height:30px;width:300px"></input>
                    </td>
				</tr>
				<tr><td colspan="2" height="5"></td></tr>
					    </table>
					</td>
					<td align="" valign="top"> 
		    			<table width="20%" cellpadding="0" cellspacing="0">
		    				<tr>
		    					<td align="center" style="font-size:12px;background-color:#cccccc;width:200px;height:20px;border:1px solid black;text-valign:middle"><label >Id Ambil Obat</label></td>
		    					<td align="center" style="font-size:12px;background-color:#cccccc;width:200px;height:20px;border:1px solid black;text-valign:middle"><label >Date</label></td>
		    				</tr>
		    				<tr><td colspan="2" height="2"></td></tr>
		    				<tr>
		    					<td align="right">
					    			<input class="easyui-textbox" name="id_resep" id="id_resep" value="<?=$gigi;?>" data-options="required:true" style="height:25px;width:200px" readonly="true"></input>
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
					            <td width="100" ><label style="font-size:12px">Poli Tujuan</label></td>
					            <td >
					            <select class="easyui-combogrid" style="width:250px;height:25px" id="poli" name="poli" data-options="
							            panelWidth: 500,
							            idField: 'ID_UNIT',
							            textField: 'NAMA_UNIT',
							            url: 'get_list_poli',
							            method: 'get',
							            required:true,
							            columns: [[
							                {field:'ID_UNIT',title:'Id unit',width:100},
							                {field:'NAMA_UNIT',title:'Nama Unit',width:150},
							            ]],
							            fitColumns: true
							        ">
							    </select>
					            </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                          <tr>
					            <td width="100" ><label style="font-size:12px">Petugas </label></td>
					            <td >
					            <select class="easyui-combogrid" style="width:250px;height:25px" id="petugas" name="petugas" data-options="
							            panelWidth: 500,
							            idField: 'ID_EMPLOYEE',
							            textField: 'NAMA_LENGKAP',
							            url: 'get_list_petugas',
							            method: 'get',
							            required:true,
							            columns: [[
							                {field:'ID_EMPLOYEE',title:'Id employee',width:100},
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
		    					<td>
		    							<label style="font-size:12px">Jumlah Obat</label>
				          		<td>	
					    			<input class="easyui-numberbox" data-options="required:true,precision:2,groupSeparator:'.',decimalSeparator:','" style="width:120px;height:25px" id="total_qty" name="total_qty" readonly="true">
					  			</td>	 
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
		<table class="easyui-edatagrid" title="" style="height:240px" id="grid_detail"
		        data-options="
		        rownumbers:true,
		        singleSelect:true,
		        pagination:false,
	            pageSize:50,
		        url:'<?= base_url().$menu_link->controller;?>/get_detail_resep',
		        method:'get',
		        toolbar:toolbar,
		        onBeginEdit:function(rowIndex){

                    /*====================on beg in edit saat grid di klik maka tombol save disable===================*/
                   
                    /*=================================end============================================================*/

                },
                onEndEdit:function(indexRow,row,changes){
                    /*====================on beg in edit saat grid di klik maka tombol save disable===================*/
                    
                    /*=================================end============================================================*/

                   	calculate_total();
                }

		        ">
		    <thead>
		        <tr>
		            <th data-options="field:'ID_OBAT',width:100">Id Obat</th>
		            <th data-options="field:'NAMA_OBAT',width:220">Nama Obat</th>
                    <th data-options="field:'SATUAN',width:120">Satuan Obat</th>
		            <th data-options="field:'QTY',width:100,align:'center'" formatter="formatRp" editor="{type:'numberbox',options:{min:1,precision:2,decimalSeparator:',',groupSeparator:'.',required:true}}">QTY</th>
                     <th data-options="field:'ATURAN',width:150,align:'center'" editor="{type:'textbox',options:{required:true}}">Aturan</th>
		            <th data-options="field:'KETERANGAN',width:250,align:'center'" editor="{type:'textbox',options:{required:true}}">Keterangan</th>
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

<!--  Dialog list item -->
<div id="dialog_list_obat" class="easyui-dialog" title="List Obat" style="width:50%;height:500px;background-color:#F8F8F8;padding:5px;top:5px" closed="true" data-options="modal:true" buttons="#dialog_buttton_list_obat">
    <form id="form_obat" method="post" novalidate>
        <table width="97%" border="0">
        	<tr>
        		<td colspan="3" height="15"></td>
        	</tr>
            <tr>
                <td width="100" align="left" valign="middle"><label style="font-size:12px">Id Obat</label></td>
                <td width="14"><b>:</b></td>

                <td colspan="2">
                    <input type="text" style="height:25px;width:300px" name="id_obat" id="id_obat" placeholder="< Id obat >" onKeyUp="search_list_obat();" />
                </td>
            </tr>
            <tr>
        		<td colspan="3" height="8"></td>
        	</tr>
            <tr>
                <td width="100" align="left" valign="middle"><label style="font-size:12px">Nama Obat</label></td>
                <td><b>:</b></td>
                <td colspan="2">
                    <input type="text" style="height:25px;width:300px" name="nama_obat" id="nama_obat" placeholder="< Nama Obat >" onKeyUp="search_list_obat();" />
                </td>
            </tr>
            <tr>
        		<td colspan="3" height="15"></td>
        	</tr>
            <tr>
                <td colspan="3">
                    <table id="list_obat" class="easyui-datagrid" 
                        url="<?= base_url().$menu_link->controller;?>/get_list_obat" 
                        singleSelect="false" fitColumns="true"  pageSize="8" 
                        style="height:250px" data-options = "
                        border:false,
                        view:scrollview,
                        onBeforeLoad:function(param){
				            if((typeof param.id_obat == 'undefined')){
				               param.id_obat = '';
				            }  
				            if((typeof param.nama_obat == 'undefined')){
				               param.nama_obat = '';
				            }  
					    }
                    ">
                        <thead>
                            <tr>
                            	<th data-options="field:'ck',checkbox:true"></th>
                                <th field="ID_OBAT" data-options="field:'ID_OBAT',width:100" sortable="true">Id Obat</th>
                                <th field="NAMA_OBAT" data-options="field:'NAMA_OBAT',width:185" sortable="true">Nama Obat</th>
                                <th field="SATUAN" data-options="field:'SATUAN',width:100" sortable="true">Satuan Obat</th>
                                <th field="STOK" data-options="field:'STOK',width:60" sortable="true">Stok</th>
                            </tr>
                        </thead>
                    </table>
                </td>
            </tr>
        </table>
    </form>
</div>

<!-- Dialog Button -->
<div id="dialog_buttton_list_obat" style="border:none;height:80px">
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-ok" onClick="choose_list_obat();">OK</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onClick="modal_close('dialog_list_obat');">Cancel</a>
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
                                <th field="ID_TU_OBAT" data-options="field:'ID_TU_OBAT',width:100" sortable="true">Id Resep</th>
                                <th field="KODE_PASIEN" data-options="field:'KODE_PASIEN',width:100" sortable="true">Kd pasien</th>
                                <th field="NAMA_LENGKAP" data-options="field:'NAMA_LENGKAP',width:150" sortable="true">Nama Lengkap</th>
                                <th field="UMUR" data-options="field:'UMUR',width:100" sortable="true">Umur</th>
                                <th field="DIAGNOSA" data-options="field:'DIAGNOSA',width:120" sortable="true">Diagnosa</th>
                                <th field="JUMLAH_OBAT" data-options="field:'JUMLAH_OBAT',width:100" sortable="true">Jumlah Obat</th>
                                <th field="status" data-options="field:'status',width:100" sortable="true">Status</th>
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
	  var fd =  $('#list_pasien').datagrid('getChecked');
	  var row         = $('#grid_detail').edatagrid('getRows');
	  
        $.each(fd, function( index,value) {
		
           var kd 	=(value.KODE_PASIEN);
		   var nm    =(value.NAMA_LENGKAP);
		   var um	  =(value.UMUR);
		   var id	  =(value.ID_TU_OBAT);
		   var diag	=(value.DIAGNOSA);
		   var status =(value.status);		
		   var jm	=(value.JUMLAH_OBAT);	
	
	   if(status == 0){

		 $('#grid_detail').datagrid('reload',{
		   id_resep 	: id
		   
		});

        $('#kd_pasien').textbox('setValue',kd);
		$('#nama').textbox('setValue',nm);
		$('#umur').textbox('setValue',um);
		$('#deskripsi').textbox('setValue',diag);
		$('#total_qty').textbox('setValue',jm);
		$('#id_poli').val(id);
		
	    }else{
		    	$.messager.alert('warning','Data sudah di suspend!. Silahkan pilih yang lain.','warning');
		    }

	    });
		
	    modal_close('dialog_list_pasien');
	}
//----------------- PASIEN-------------//

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
        text:'Add',
        iconCls:'icon-add',
        handler:function(){
        	var kd_pasien = $('#deskripsi').val();
        	var dokter = $('#poli').val();

        	if(kd_pasien !='' && dokter!=""){
        		$('#dialog_list_obat').dialog('open');
        	}else{
        		 $.messager.alert('warning','Silahkan Pilih Diagnosa dan Poli Tujuan terlebih dahulu!','warning');
        	}
        }
    },{
        text:'Remove',
        iconCls:'icon-remove',
        handler:function(){
        	var row 		= $('#grid_detail').edatagrid('getSelected');
        	var row_index  	= $('#grid_detail').datagrid('getRowIndex', row);
        	$('#grid_detail').edatagrid('deleteRow', row_index);
        	calculate_total();
        }
    }];

    function search_list_obat(){
    	$('#list_obat').datagrid('reload',{
    		id_obat 	: $('#id_obat').val(),
    		nama_obat 	: $('#nama_obat').val(),
    	});

    }

    function choose_list_obat(){

    	var fd          = $('#list_obat').datagrid('getChecked');
	    var row         = $('#grid_detail').edatagrid('getRows');
	    var isready 	= 0;
	    var ind_fd		= row.length + 1;

	    $.each(fd, function(ind, value) {
	        var ID_OBAT     	= value.ID_OBAT;
	        var NAMA_OBAT      	= value.NAMA_OBAT;
	        var SATUAN 			= value.SATUAN;

	        $.each(row, function(ind,val){
	           if(val.ID_OBAT == ID_OBAT){
	                isready++;
	           }
	        });

	        if(isready < 1){
	            $('#grid_detail').edatagrid('appendRow',{
	                ID_OBAT          	: ID_OBAT,
        			NAMA_OBAT           : NAMA_OBAT,
					SATUAN				: SATUAN,
        			QTY           		: 0
	            });
	        }

	        isready = 0;
	    });
	    modal_close('dialog_list_obat');
    }

    function calculate_total(){

    	var qty 	= 0;
        var item =  $('#grid_detail').edatagrid('getRows');

        $.each(item, function( index,value) {
            qty 	+= parseFloat(value.QTY);
        });

        $('#total_qty').numberbox('setValue',qty);
    }

    function save(){
    	var total_qty 	= $('#total_qty').numberbox('getValue');
    	var obat 		= $('#grid_detail').edatagrid('getRows');
    	var detail1 		= JSON.stringify(obat);

    	$('#detail').val(detail1);

    	if(total_qty >0){
    		save_data('fm_resep');
    	}else{
    		$.messager.alert('Warning','Total QTy tidak boleh nol','warning');
    	}
    }

    get_privillage('<?=$menu_link->MenuID;?>','dlg_<?=$menu_link->controller;?>','new');

</script>
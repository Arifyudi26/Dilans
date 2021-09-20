 <script>
  var baseurl = "<?php echo base_url("index.php/"); ?>"; // Buat variabel baseurl untuk nanti di akses pada file config.js
       </script>
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
                                <input class="easyui-textbox" type="text" name="kd_pasien" id="kd_pasien" value="<?=$group->KODE_PASIEN;?>" onKeyUp="btn-search" data-options="required:true" style="height:30px;width:200px"></input> <a href="javascript:void(0)" class="easyui-linkbutton form-button" style="height:30px;" iconCls="icon-search" id="" onClick="cari1();">Cari</a>
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
		        url:'<?= base_url().$menu_link->controller;?>/get_detail_lab/<?=$group->ID_PEMBAYARAN_LAB;?>',
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
	                <a href="javascript:void(0)" class="easyui-linkbutton form-button save-button" iconCls="icon-save" id="" onClick="save()">Save</a>
	                <a href="javascript:void(0)" class="easyui-linkbutton form-button" iconCls="icon-print" onClick="print_preview()">Preview & Print</a>
	                <a href="javascript:void(0)" class="easyui-linkbutton form-button" iconCls="icon-cancel" onClick="parent.closePanel()">Cancel</a>	     
                </td>
             </tr>
         </table>
	</div>
</div>
<!--  Dialog list item -->
<div id="dialog_list_lab" class="easyui-dialog" title="List Cek Satuan lab" style="width:50%;height:500px;background-color:#F8F8F8;padding:5px;top:5px" closed="true" data-options="modal:true" buttons="#dialog_buttton_list_lab">
    <form id="form_lab" method="post" novalidate>
        <table width="97%" border="0">
        	<tr>
        		<td colspan="3" height="15"></td>
        	</tr>
            <tr>
                <td width="100" align="left" valign="middle"><label style="font-size:12px">Id data lab</label></td>
                <td width="14"><b>:</b></td>
                <td colspan="2">
                    <input type="text" style="height:25px;width:300px" name="id_data" id="id_data" placeholder="< Id Data lab >" onKeyUp="search_list_lab();" />
                </td>
            </tr>
            <tr>
        		<td colspan="3" height="8"></td>
        	</tr>
            <tr>
                <td width="100" align="left" valign="middle"><label style="font-size:12px">Nama Pemeriksaan</label></td>
                <td><b>:</b></td>
                <td colspan="2">
                    <input type="text" style="height:25px;width:300px" name="pemeriksaan" id="pemeriksaan" placeholder="< Pemeriksaan lab >" onKeyUp="search_list_lab();" />
                </td>
            </tr>
            <tr>
        		<td colspan="3" height="15"></td>
        	</tr>
            <tr>
                <td colspan="3">
                    <table id="list_lab" class="easyui-datagrid" 
                        url="<?= base_url().$menu_link->controller;?>/get_list_lab" 
                        singleSelect="false" fitColumns="false"  pageSize="8" 
                        style="height:250px" data-options = "
                        border:false,
                        view:scrollview,
                        onBeforeLoad:function(param){
				            if((typeof param.id_data == 'undefined')){
				               param.id_data = '';
				            }  
				            if((typeof param.pemeriksaan == 'undefined')){
				               param.pemeriksaan = '';
				            }  
					    }
                    ">
                        <thead>
                            <tr>
                            	<th data-options="field:'ck',checkbox:true"></th>
                                <th field="ID_DT_LAB" data-options="field:'ID_DT_LAB',width:90" sortable="true">Id data Lab</th>
                                <th field="NAMA_PEMERIKSAAN" data-options="field:'NAMA_PEMERIKSAAN',width:155" sortable="true">Nama Pemerikaan</th>
                                <th field="TARIF" data-options="field:'TARIF',width:80" sortable="true">Tarif</th>
                                <th field="KETERANGAN" data-options="field:'KETERANGAN',width:150" sortable="true">keterangan</th>
                            </tr>
                        </thead>
                    </table>
                </td>
            </tr>
        </table>
    </form>
</div>

<!-- Dialog Button -->
<div id="dialog_buttton_list_lab" style="border:none;height:80px">
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-ok" onClick="choose_list_lab();">OK</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onClick="modal_close('dialog_list_lab');">Cancel</a>
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
                                <th field="ID_DAFTAR_LAB" data-options="field:'ID_DAFTAR_LAB',width:150" sortable="true">Id Daftar Lab</th>
                                <th field="KODE_PASIEN" data-options="field:'KODE_PASIEN',width:150" sortable="true">Kd pasien</th>
                                <th field="NAMA_LENGKAP" data-options="field:'NAMA_LENGKAP',width:170" sortable="true">Nama Lengkap</th>
                                <th field="UMUR" data-options="field:'UMUR',width:150" sortable="true">Umur</th>
                                <th field="PEMERIKSAAN_LAB" data-options="field:'PEMERIKSAAN_LAB',width:170" sortable="true">Pemeriksaan Lab</th>
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
	  var nbp	='';
	  
        $.each(row, function( index,value) {
            kd 	=(value.KODE_PASIEN);
			nm    =(value.NAMA_LENGKAP);
			um			=(value.UMUR);
			id			=(value.ID_DAFTAR_LAB);
			nbp			=(value.NO_BPJS);
		
        });

        $('#kd_pasien').textbox('setValue',kd);
		$('#nama').textbox('setValue',nm);
		$('#umur').textbox('setValue',um);
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
        text:'Add',
        iconCls:'icon-add',
        handler:function(){
        	var kd_pasien = $('#kd_pasien').val();
        	var dokter = $('#id_dokter').val();
        	if(kd_pasien !='' && dokter!=""){
        		$('#dialog_list_lab').dialog('open');
        	}else{
        		 $.messager.alert('warning','Silahkan isi data dan Dokter terlebih dahulu!','warning');
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

    function search_list_lab(){
    	$('#list_lab').datagrid('reload',{
    		id_data		 	: $('#id_data').val(),
    		pemeriksaan 	: $('#pemeriksaan').val(),
    	});
    }

    function choose_list_lab(){

    	var fd          = $('#list_lab').datagrid('getChecked');
	    var row         = $('#grid_detail').edatagrid('getRows');
	    var isready 	= 0;
	    var ind_fd		= row.length + 1;

	    $.each(fd, function(ind, value) {
	        var ID_DT_LAB     		 = value.ID_DT_LAB;
	        var NAMA_PEMERIKSAAN     = value.NAMA_PEMERIKSAAN;
			var TARIF			   	 = value.TARIF;
			var KETERANGAN			 = value.KETERANGAN;

	        $.each(row, function(ind,val){
	           if(val.ID_DT_LAB == ID_DT_LAB){
	                isready++;
	           }
	        });

	        if(isready < 1){
	            $('#grid_detail').edatagrid('appendRow',{
	                ID_DT_LAB         	: ID_DT_LAB,
        			NAMA_PEMERIKSAAN	: NAMA_PEMERIKSAAN,
					TARIF				: TARIF,
					KETERANGAN			: KETERANGAN,
	            });
	        }
	        isready = 0;
	    });
		  calculate_total();

	    modal_close('dialog_list_lab');
    }

      function calculate_total(){

    	var tarif 	= 0;
        var item =  $('#grid_detail').edatagrid('getRows');

        $.each(item, function( index,value) {
            tarif 	+= parseFloat(value.TARIF);
        });

        $('#total_by').numberbox('setValue',tarif);
    }


    function save(){
    	var lab 		= $('#grid_detail').edatagrid('getRows');
    	var detail1 		= JSON.stringify(lab);

    	$('#detail').val(detail1);
		
    		save_data('fm_hasil');
    }
	
		function print_preview(){
    	var transaction_no = $('#id_bayar').textbox('getValue');
        parent.editPanel('Print Preview <?= $menu_link->MenuLabel;?>','<?= $menu_link->controller;?>/print_preview',transaction_no);
    }

    get_privillage('<?=$menu_link->MenuID;?>','dlg_<?=$menu_link->controller;?>','new');

</script>
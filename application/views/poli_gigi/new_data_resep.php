
 <script>
  var baseurl = "<?php echo base_url("index.php/"); ?>"; // Buat variabel baseurl untuk nanti di akses pada file config.js
       </script>
<div class="easyui-layout" style="height:500px;width:100%" id="layout_<?= $menu_link->controller;?>">
	<div data-options="region:'north',title:'',iconCls:'icon-ok'" style="width:80%;height:160px;border:none;overflow:hidden">
		<form id="fm_resep" action="<?= base_url().$menu_link->controller;?>/insert" method="post" enctype="multipart/form-data">
		    <table width="100%">
		    	<tr><td colspan="2" height="5"></td></tr>
		    	<tr>
		    		<td>
		    			<table width="80%" cellpadding="0" cellspacing="0">
		    				<tr>

					            <td width="300" ><label style="font-size:12px">Kode Pasien</label></td>
					            <td >
                                <input class="easyui-textbox" type="text" name="kd_pasien" id="kd_pasien" onKeyUp="btn-search" data-options="required:true" style="height:30px;width:200px"></input> <a href="javascript:void(0)" class="easyui-linkbutton form-button" style="height:30px;" iconCls="icon-search" id="btn-search" onClick="search();">Cari</a>
                                			                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>

					            <td width="300" ><label style="font-size:12px">Nama Pasien</label></td>
					            <td >
                               <input name="nm_lengkap" class="form-control"  type="text"id="nama" data-options="required:true" style="height:30px;width:300px">	
	            	           <input type="hidden" name="status" id="status"  style="height:15px;width:250px;"></input>
                               <input type="hidden" name="id_poli" id="id_poli"  style="height:15px;width:250px;"></input>
                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                            <tr>

					            <td width="300" ><label style="font-size:12px">Umur</label></td>
					            <td >
                                <input class="form-control" type="text" name="umur" id="umur"  data-options="required:true" style="height:30px;width:300px"></input>					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
                             <tr>

					            <td width="300" ><label style="font-size:12px">Diagnosa</label></td>
					            <td >
                                <input class="form-control" type="text" name="diagnosa" id="diagnosa"  data-options="required:true" style="height:30px;width:300px"></input>					                                </td>
					        </tr>
					        <tr><td colspan="2" height="5"></td></tr>
  							 
					    </table>
					</td>
					<td align="" valign="top"> 
		    			<table width="20%" cellpadding="0" cellspacing="0">
		    				<tr>
		    					<td align="center" style="font-size:12px;background-color:#cccccc;width:200px;height:20px;border:1px solid black;text-valign:middle"><label >Id Resep Obat</label></td>
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
					            <td width="100" ><label style="font-size:12px">Nama Dokter</label></td>
					            <td >
					            <select class="easyui-combogrid" style="width:250px;height:30px" id="id_dokter" name="id_dokter" data-options="
							            panelWidth: 500,
							            idField: 'ID_DOKTER',
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
		<table class="easyui-edatagrid" title="" style="height:250px" id="grid_detail"
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
                                <th field="SATUAN" data-options="field:'SATUAN',width:70" sortable="true">Satuan Obat</th>
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

<script type="text/javascript">

   function search(){
  $("#loading").show(); // Tampilkan loadingnya
  
  $.ajax({
        type: "POST", // Method pengiriman data bisa dengan GET atau POST
        url: baseurl + "Resep_obat_gigi/search", // Isi dengan url/path file php yang dituju
        data: {kd : $("#kd_pasien").val()}, // data yang akan dikirim ke file proses
        dataType: "json",
        beforeSend: function(e) {
            if(e && e.overrideMimeType) {
                e.overrideMimeType("application/json;charset=UTF-8");
            }
    },
    success: function(response){ // Ketika proses pengiriman berhasil
            $("#loading").hide(); // Sembunyikan loadingnya
            
        if(response.status == "success"){ // Jika isi dari array status adalah success
        $("#nama").val(response.nama); // set textbox dengan id nama
		$("#umur").val(response.umur);
		$("#diagnosa").val(response.diagnosa);
		$("#id_poli").val(response.id_poli);
      }else{ // Jika isi dari array status adalah failed
        $.messager.alert('warning','Data Tidak Ditemukan','warning');
      }
    },
        error: function (xhr, ajaxOptions, thrownError) { // Ketika ada error
      alert(xhr.responseText);
        }
    });
}
$(document).ready(function(){
  $("#loading").hide(); // Sembunyikan loadingnya
  
    $("#btn-search").click(function(){ // Ketika user mengklik tombol Cari
        search(); // Panggil function search
    });
    
    $("#kd_pasien").keyup(function(){ // Ketika user menekan tombol di keyboard
    if(event.keyCode == 13){ // Jika user menekan tombol ENTER
      search(); // Panggil function search
    }
  });
});
  

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
        	var nm_lengkap = $('#nm_lengkap').val();

        	if(kd_pasien !='' && nm_lengkap!=""){
        		$('#dialog_list_obat').dialog('open');
        	}else{
        		 $.messager.alert('warning','Silahkan isi data dan pemeriksaan terlebih dahulu!','warning');
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
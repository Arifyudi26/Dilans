<?php
$un = $this->session->userdata('Puskesmas-sawah-besar@2017');
?>
<div class="easyui-layout" style="height:450px;width:100%">
	<div data-options="region:'east',split:true" title="Filter" style="width:20%;height:450px">
		<br>
		<p><input class="easyui-textbox" type="text" name="txt_id" id="txt_id" data-options="prompt:'Id gizi anak'" style="height:25px;width:200px"></p>
		<p><input class="easyui-textbox" type="text" name="txt_no" id="txt_no" data-options="prompt:'Kd pasien'" style="height:25px;width:200px"></p>
		<p><input class="easyui-textbox" type="text" name="txt_desc" id="txt_desc" data-options="prompt:'Nama Pasien'" style="height:25px;width:200px"></p>
		<p><label><input type="checkbox" name="chkdate" id="chkdate" onclick="change_date()"></label></p>
		<p><label style="width:50px;padding-left:10px"><b>From</b></label><input class="easyui-datebox" value="<?= $date_now;?>" data-options="disabled:true" style="width:120px" id="date_from" name="date_form"></p>
		<p><label style="width:50px;padding-left:10px"><b>To</b></label><input class="easyui-datebox" value="<?= $date_now;?>" data-options="disabled:true" style="width:120px" id="date_to" name="date_to"></p>
	
		
		<p><a href="javascript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-search'" style="width:80px;float:right" id="search" name="search" onclick="search_data()">Search</a></p>
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
        				parent.editPanel('Preview <?=$menu_link->MenuLabel;?>','<?=$menu_link->controller;?>/preview',row.ID_GIZI_ANAK);
        			}
				}
			">
		    <thead>
		        <tr>
		            <th data-options="field:'ID_GIZI_ANAK',width:120">Id Poli Gizi Anak</th>
		            <th data-options="field:'KODE_PASIEN',width:120,align:'center'">Kd pasien</th>
		            <th data-options="field:'NAMA_LENGKAP',width:150">Nama Pasien</th>
                    <th data-options="field:'TEMPAT_TGL_LAHIR',width:120">Jenis Kelamin</th>
                    <th data-options="field:'ALAMAT',width:150">Alamat</th>
                    <th data-options="field:'NO_BPJS',width:150">NO_BPJS</th>
                    <th data-options="field:'NAMA_ORTU',width:150">Nama Ortu</th>
                    <th data-options="field:'PEKERJAAN_ORTU',width:150">Pekerjaan Ortu</th>
                    <th data-options="field:'ANAK_KE',width:150">Anak Ke dari</th>
                    <th data-options="field:'DIAGNOSA_MEDIS',width:150">Diagnosa Medis</th>
                    <th data-options="field:'BB_LAHIR',width:150">BB Lahir</th>
                    <th data-options="field:'PB_LAHIR',width:150">PB Lahir</th>
                    <th data-options="field:'UMUR_KEHAMILAN',width:150">Umur Kehamilan</th>
                    <th data-options="field:'KELAHIRAN',width:150">kelahiran</th>
                    <th data-options="field:'BERAT_BADAN',width:150">Berat Badan</th>
                    <th data-options="field:'TINGGI_BADAN',width:150">Tinggi Badan</th>
                    <th data-options="field:'IMT',width:150">IMT</th>
                    <th data-options="field:'BIOKIMIA',width:150">Biokima</th>
                    <th data-options="field:'FISIK_KLINIS',width:150">Fisik Klinis</th>
                    <th data-options="field:'ASI_EKSEKUTIF',width:150">ASI Eksklusif</th>
                    <th data-options="field:'MKN_SELAIN_ASI',width:150">Mkn selain asi</th>
                    <th data-options="field:'ALERGI_MKNAN',width:150">Alergi Mknan</th>
                    <th data-options="field:'MAKANAN_POKOK',width:150">Makanan Pokok</th>
                    <th data-options="field:'LAUK_HEWANI',width:150">Lauk Hewani</th>
                    <th data-options="field:'LAUK_NABATI',width:150">Lauk Nabati</th>
                    <th data-options="field:'SAYUR',width:150">Sayur</th>
                    <th data-options="field:'BUAH',width:150">Buah</th>
                    <th data-options="field:'SELINGAN',width:150">Selingan</th>
                    <th data-options="field:'ID_DIAGNOSA',width:150">Id Diagnosa</th>
                    <th data-options="field:'DESKRIPSI_ICD',width:150">Deskripsi ICD</th>
                    <th data-options="field:'ID_PG_ANAK',width:150">Id Pg Anak</th>
		            <th data-options="field:'lev',width:150,align:'center'">Last User</th> 
		            <th data-options="field:'CREATE_DATE',width:250,align:'center'">Create date</th>
		            <th data-options="field:'status',width:250,align:'center'" hidden="true">Status</th>
		        </tr>
		    </thead>
		</table>
	</div>
</div>

<!--  Dialog list item -->
<div id="dialog_list_diagnosa" class="easyui-dialog" title="List diagnosa" style="width:50%;height:500px;background-color:#F8F8F8;padding:5px;top:5px" closed="true" data-options="modal:true" buttons="#dialog_buttton_list_item">
    <form id="form_diagnosa" method="post" novalidate>
        <table width="97%" border="0">

        	<tr>
        		<td colspan="3" height="15"></td>
        	</tr>

            <tr>
                <td width="100" align="left" valign="middle"><label style="font-size:12px">Id Diagnosa</label></td>
                <td width="14"><b>:</b></td>

                <td colspan="2">
                    <input type="text" style="height:25px;width:300px" name="id_diagnosa" id="id_diagnosa" placeholder="< Id Diagnosa >" onKeyUp="search_list_diagnosa();" />
                </td>
            </tr>
            <tr>
        		<td colspan="3" height="8"></td>
        	</tr>
            <tr>
                <td width="100" align="left" valign="middle"><label style="font-size:12px">Des ICD</label></td>
                <td><b>:</b></td>

                <td colspan="2">
                    <input type="text" style="height:25px;width:300px" name="des_icd" id="des_icd" placeholder="< Des icd >" onKeyUp="search_list_diagnosa();" />
                </td>
            </tr>

            <tr>
        		<td colspan="3" height="15"></td>
        	</tr>
	
            <tr>
                <td colspan="3">
                    <table id="list_diagnosa" class="easyui-datagrid" 
                        url="<?= base_url().$menu_link->controller;?>/get_list_diagnosa" 
                        style="height:250px" data-options = "singleSelect:true,
                pageSize:8,">
                        <thead>
                            <tr>
                                <th data-options="field:'ck',checkbox:true"></th>
                                <th field="ID_DIAGNOSA" data-options="field:'ID_DIAGNOSA',width:100" sortable="true">Id Diagnosa</th>
                                <th field="DESKRIPSI_ICD" data-options="field:'DESKRIPSI_ICD',width:185" sortable="true">Deskripsi ICD</th>
                                <th field="SUB_ICD" data-options="field:'SUB_ICD',width:170" sortable="true">Sub ICD</th>
                            </tr>
                        </thead>
                    </table>
                </td>
            </tr>
        </table>
    </form>
</div>

<!-- Dialog Button -->
<div id="dialog_buttton_list_item" style="border:none;height:80px">
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-ok" onClick="choose_list_diagnosa();">OK</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onClick="modal_close('dialog_list_diagnosa');">Cancel</a>
</div>

<!-- ================== dialog add poli Umum ============================== -->
<div id="dlg_poli_gizi" class="easyui-dialog" title="Form Edit poli Gizi Anak" style="width:850px;height:420px;padding:10px" closed="true" modal="true"
            data-options="
                iconCls: 'icon-save',
                toolbar: toolbar_2
            ">
    <form id="fm_gizi" action="<?= base_url().$menu_link->controller;?>/update" method="post" enctype="multipart/form-data">
       <table width="100%">
         <tr><td colspan="2" height="5"></td></tr>
		  <tr>
		   <td>
	    <table cellpadding="5">
	        <tr>
	            <td width="100" valign="top">Kode Pasien</td>
	            <td>
	            	<input class="easyui-textbox" name="kd_pasien" id="kd_pasien" data-options="required:true" style="height:25px;width:250px"></input>
	            	<input type="hidden" name="code" id="code" style="height:15px;width:250px;"></input>
	            	<input type="hidden" name="status" id="status"  style="height:15px;width:250px;"></input>
                    <input type="hidden" name="id_pg_anak" id="id_pg"  style="height:15px;width:250px;"></input>
	            </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
            <tr>
	            <td width="100">Nama pasien</td> 
	            <td>
	            <input class="easyui-textbox" name="nm_lengkap" id="nm_lengkap" data-options="required:true" style="height:25px;width:250px"></input>
	            </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
            <tr>
	            <td width="50">TT lahir</td> 
	            <td>
	            <input class="easyui-textbox" name="tt_lahir" id="tt_lahir" data-options="required:true" style="height:25px;width:250px"></input>
	            </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
            <tr>
	            <td width="50">Alamat</td> 
	            <td>
  				<input class="easyui-textbox" type="text" name="alamat" id="alamat"  data-options="multiline:true,required:true" style="height:50px;width:250px"></input>	            
                </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
             <tr>
	            <td width="50" valign="top">No Bpjs</td>
	            <td>
	            	<input class="easyui-textbox" name="bpjs" id="bpjs"  data-options="required:true" style="width:250px;height:25px;"></input>
	            </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
              <tr>
				<td width="50" valign="top">Nama Ortu</label></td>
				  <td >
                    <input class="easyui-textbox" type="text" name="no" id="no"  data-options="required:true" style="height:25px;width:90px"> <label style="font-size:12px">Anak Ke</label>  <input class="easyui-textbox" type="text"  name="akd" id="akd"  data-options="required:true" style="height:25px;width:100px"></input>						
                   </td>
				 </tr>
			 <tr><td colspan="2" height="5"></td></tr>
               <tr>

				 <td width="50" valign="top">Pekerjaan Ortu</label></td>
				  <td >
                   <input class="easyui-textbox" type="text"  name="po" id="po"  data-options="required:true" style="height:25px;width:250px"></input>					                 </td>
		   </tr>
		 <tr><td colspan="2" height="5"></td></tr>
             <tr>
				<td width="50" valign="top">Diagnosa Medis</td>
				  <td >
				    <input class="easyui-textbox" type="text"  name="dm" id="dm"  data-options="required:true" style="height:25px;width:250px"></input>					
                  </td>
			  </tr>
			  <tr><td colspan="2" height="5"></td></tr>
               <tr>
			     <td width="50" valign="top">BB Lahir </label></td>
				  <td >
                   <input class="easyui-textbox" type="text"  name="bbl" id="bbl"  data-options="required:true" style="height:25px;width:90px"> <label style="font-size:12px">PB Lahir</label> <input class="easyui-textbox" type="text"  name="pbl" id="pbl"  data-options="required:true" style="height:25px;width:100px"></input>					                  </td>
			    </tr>
				<tr><td colspan="2" height="5"></td></tr>
                 <tr>
			       <td width="50" valign="top">Umur Kehamilan</label></td>
					  <td>
                       <input class="easyui-textbox" type="text" name="uk" id="uk"  data-options="required:true" style="height:25px;width:90px"> <label style="font-size:12px">Kelahiran</label><input class="easyui-textbox" type="text" name="kelahiran" id="kelahiran"  data-options="required:true" style="height:25px;width:100px"></input>
                       </td>
				   </tr>
				  <tr><td colspan="2" height="5"></td></tr> 
                    <tr>
					  <td width="50" valign="top">Tinggi Badan</label></td>
					   <td>
                        <input class="easyui-textbox" type="text" name="tb" id="tb"  data-options="required:true" style="height:25px;width:90px"> <label style="font-size:12px">Berat Bdn</label><input class="easyui-textbox" type="text" name="bb" id="bb"  data-options="required:true" style="height:25px;width:100px"></input>
                        </td>
				 </tr>
			 <tr><td colspan="2" height="5"></td></tr>
              <tr>
                <td width="50" valign="top">IMT</label></td>
				 <td >
                  <input class="easyui-textbox" type="text" name="imt" id="imt"  data-options="required:true" style="height:25px;width:90px"> <label style="font-size:12px">Biokimia</label>  <input class="easyui-textbox" type="text" name="bio" id="bio"  data-options="required:true" style="height:25px;width:100px"></input> 					                   </td>
				  </tr>
			   <tr><td colspan="2" height="5"></td></tr>
                
	    </table>
        </td>
        <td align="right" valign="top">
		   <table width="100%" cellpadding="0" cellspacing="0">
            <tr>
				  <td width="50" valign="top">Fisik Klinis</label></td>
				  <td >
				 <input class="easyui-textbox" type="text" name="fk" id="fk" data-options="multiline:true,required:true" style="height:40px;width:250px"></input>
				 </td>
				</tr>
			 <tr><td colspan="2" height="5"></td></tr>
            <tr>
	            <td width="100" valign="top">Asi Eksekutif</td>
	            <td>
	            	<input class="easyui-textbox" name="ae" id="ae"  data-options="required:true" style="width:250px;height:25px;"></input>
	            </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
            <tr>
	            <td width="100" valign="top">Mkn Selain Asi</td>
	            <td>
	            	<input class="easyui-textbox" name="msa" id="msa"  data-options="required:true" style="width:250px;height:25px;"></input>
	            </td>
	        </tr>
	        <tr><td colspan="2" height="5"></td></tr>
              <tr>
				<td width="50" valign="top">Alergi Makanan</td>
				  <td >
				    <input class="easyui-textbox" type="text"  name="am" id="am"  data-options="required:true" style="height:25px;width:250px"></input>					
                  </td>
			  </tr>
			  <tr><td colspan="2" height="5"></td></tr>
               <tr>
				<td width="50" valign="top">Makanan pokok</td>
				  <td >
  				<input class="easyui-textbox" type="text" name="mp" id="mp"  data-options="required:true" style="height:50px;width:250px"></input>	            
                  </td>
			  </tr>
			  <tr><td colspan="2" height="5"></td></tr>
               <tr>
				<td width="50" valign="top">Lauk hewani</td>
				  <td >
				    <input class="easyui-textbox" type="text"  name="lh" id="lh"  data-options="required:true" style="height:25px;width:250px"></input>					
                  </td>
			  </tr>
			  <tr><td colspan="2" height="5"></td></tr>
               <tr>
				<td width="50" valign="top">Lauk Nabati</td>
				  <td >
				    <input class="easyui-textbox" type="text"  name="lb" id="lb"  data-options="required:true" style="height:25px;width:250px"></input>					
                  </td>
			  </tr>
			  <tr><td colspan="2" height="5"></td></tr>
              <tr>
				<td width="50" valign="top">Sayur</td>
				  <td >
				    <input class="easyui-textbox" type="text"  name="sayur" id="sayur"  data-options="required:true" style="height:25px;width:250px"></input>					
                  </td>
			  </tr>
			  <tr><td colspan="2" height="5"></td></tr>
              <tr>
				<td width="50" valign="top">Buah</td>
				  <td >
				    <input class="easyui-textbox" type="text"  name="buah" id="buah"  data-options="required:true" style="height:25px;width:250px"></input>					
                  </td>
			  </tr>
			  <tr><td colspan="2" height="5"></td></tr>
              <tr>
				<td width="50" valign="top">Selingan</td>
				  <td >
				    <input class="easyui-textbox" type="text"  name="selingan" id="selingan"  data-options="required:true" style="height:25px;width:250px"></input>					
                  </td>
			  </tr>
			  <tr><td colspan="2" height="5"></td></tr>
            <tr>
				 <td width="50" valign="top">Diagnosa</td>
				   <td >
                    <input class="easyui-textbox" type="text" name="diagnosa" id="diagnosa"  data-options="required:true" onFocus="choose_list_diagnosa();" style="height:25px;width:60px"><input class="easyui-textbox" type="text" name="deskripsi" id="deskripsi"  data-options="required:true" onFocus="choose_list_diagnosa();" style="height:25px;width:160px"></input><a href="javascript:void(0)" class="easyui-linkbutton form-button" style="height:25px;" iconCls="icon-add" id="" onClick="cari();"></a>                              
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
	        	$('#code').val(row.ID_GIZI_ANAK);
	        	$('#kd_pasien').textbox('setValue',row.KODE_PASIEN);
				$('#nm_lengkap').textbox('setValue',row.NAMA_LENGKAP);
				$('#tt_lahir').textbox('setValue',row.TEMPAT_TGL_LAHIR);
				$('#alamat').textbox('setValue',row.ALAMAT);
				$('#bpjs').textbox('setValue',row.NO_BPJS);
				$('#no').textbox('setValue',row.NAMA_ORTU);
	        	$('#po').textbox('setValue',row.PEKERJAAN_ORTU);
	        	$('#akd').textbox('setValue',row.ANAK_KE);
	        	$('#dm').textbox('setValue',row.DIAGNOSA_MEDIS);
				$('#bbl').textbox('setValue',row.BB_LAHIR);
				$('#pbl').textbox('setValue',row.PB_LAHIR);
				$('#uk').textbox('setValue',row.UMUR_KEHAMILAN);
				$('#kelahiran').textbox('setValue',row.KELAHIRAN);
			    $('#bb').textbox('setValue',row.BERAT_BADAN);
				$('#tb').textbox('setValue',row.TINGGI_BADAN);
				$('#imt').textbox('setValue',row.IMT);
				$('#bio').textbox('setValue',row.BIOKIMIA);
				$('#fk').textbox('setValue',row.FISIK_KLINIS);
				$('#ae').textbox('setValue',row.ASI_EKSEKUTIF);
				$('#msa').textbox('setValue',row.MKN_SELAIN_ASI);
				$('#am').textbox('setValue',row.ALERGI_MKNAN);
				$('#mp').textbox('setValue',row.MAKANAN_POKOK);
				$('#lh').textbox('setValue',row.LAUK_HEWANI);
				$('#lb').textbox('setValue',row.LAUK_NABATI);
				$('#sayur').textbox('setValue',row.SAYUR);
				$('#buah').textbox('setValue',row.BUAH);
				$('#selingan').textbox('setValue',row.SELINGAN);
				$('#diagnosa').textbox('setValue',row.ID_DIAGNOSA);
				$('#deskripsi').textbox('setValue',row.DESKRIPSI_ICD);
				$('#id_pg').val(row.ID_PG_ANAK);
				$('#status').val(row.status);
	        	
	        	$('#dlg_poli_gizi').dialog('open');
	        }
        }
    },{
        text:'Preview',
        iconCls:'icon-print',
        disabled:false,
        handler:function(){
        	var row 		= $('#grid').datagrid('getSelected');
        	parent.editPanel('Preview <?= $menu_link->MenuLabel;?>','<?= $menu_link->controller;?>/preview',row.ID_GIZI_ANAK);
        }
    },{
        text:'Delete',
        iconCls:'icon-remove',
        disabled:false,
        handler:function(){
        	var row = $('#grid').datagrid('getSelected');
        	if(row.TransStatus == 0){
    			suspend_data('<?= $menu_link->controller;?>/suspend_data','grid',row.ID_POLI_GIGI);   
	        }
        }
    }];
	
	 var toolbar_2 = [{
            text:'Save',
            iconCls:'icon-save',
            disabled:false,
            handler:function(){
               save_data('fm_gizi');
            }
        },'-',{
            text:'Refresh',
            iconCls:'icon-reload',
            handler:function(){
               $('#fm_gizi').form('clear');
            }
        },'-',{
        	text:'Cancel',
            iconCls:'icon-cancel',
            handler:function(){
               $('#dlg_poli_gizi').dialog('close');
            }
        }];
		
		
		function cari() {
	       
	   	 var kd_pasien = $('#kd_pasien').val();
		 var nm_pasien = $('#nm_lengkap').val();
	     if(kd_pasien !='' && nm_pasien!=""){
        		$('#dialog_list_diagnosa').dialog('open');
        	}else{
        		 $.messager.alert('warning','Silahkan isi data dan pemeriksaan terlebih dahulu!','warning');
        	}
	}
	
	function search_list_diagnosa(){
    	$('#list_diagnosa').datagrid('reload',{
    		id_diagnosa 	: $('#id_diagnosa').val(),
    		des_icd 	: $('#des_icd').val(),
    	});

    }
	

  function choose_list_diagnosa(){

	  var row       =  $('#list_diagnosa').datagrid('getChecked');
	  var id_diagnosa 	='';
	  var diagnosa  = '';

        $.each(row, function( index,value) {
            id_diagnosa 	=(value.ID_DIAGNOSA);
			diagnosa    =(value.DESKRIPSI_ICD);
        });

        $('#diagnosa').textbox('setValue',id_diagnosa);
		$('#deskripsi').textbox('setValue',diagnosa);

	    modal_close('dialog_list_diagnosa');
	}
		
		

     get_privillage('<?=$menu_link->MenuID;?>','dlg_<?=$menu_link->controller;?>','view');

</script>
<div class="easyui-layout" style="height:450px;width:100%">
    <div data-options="region:'center',title:'Data pelayanan',iconCls:'icon-ok'" style="width:100%;height:450px">
        <div class="list-group">
          <button type="button" class="list-group-item" onclick="$('#dialog_pasien').dialog('open')"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>&nbsp;&nbsp;Laporan data pasien</button>
          <button type="button" class="list-group-item" onclick="$('#dialog_kunjungan').dialog('open')"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>&nbsp;&nbsp;Laporan data kunjungan pasien</button>
           <button type="button" class="list-group-item" onclick="$('#dialog_periksa').dialog('open')"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>&nbsp;&nbsp;Laporan data pemeriksaan umum</button>
            <button type="button" class="list-group-item" onclick="$('#dialog_poli').dialog('open')"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>&nbsp;&nbsp;Laporan data poli umum</button>
             <button type="button" class="list-group-item" onclick="$('#dialog_resep').dialog('open')"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>&nbsp;&nbsp;Laporan data resep obat</button>
                <button type="button" class="list-group-item" onclick="$('#dialog_farmasi').dialog('open')"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>&nbsp;&nbsp;Laporan data farmasi</button>
       
        </div>
    </div>
</div>

<!--  Dialog list item -->
<div id="dialog_pasien" class="easyui-dialog" title="Laporan Pasien" style="width:30%;height:230px;background-color:#F8F8F8;padding:5px;top:5px" closed="true" data-options="modal:true" buttons="#dialog_buttton_list_p">
    <form id="" method="post" novalidate>
        <p><label style="width:100;margin-left:10px">From</label><input class="easyui-datebox" data-options="onSelect:fromDatepa" id="from_date_pa"></input></p>
        <p><label style="width:100;margin-left:10px">To</label><input class="easyui-datebox" data-options="onSelect:toDatepa" id="to_date_pa"></input></p>
  
       
    </form> 
</div>

<!-- Dialog Button -->
<div id="dialog_buttton_list_p" style="border:none;height:80px">
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-ok" onclick="print_pasien();">Print</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="modal_close('dialog_pasien');">Cancel</a>
</div>

<!--  Dialog list item -->
<div id="dialog_kunjungan" class="easyui-dialog" title="Laporan Kunjungan pasien" style="width:30%;height:230px;background-color:#F8F8F8;padding:5px;top:5px" closed="true" data-options="modal:true" buttons="#dialog_buttton_list_k">
    <form id="" method="post" novalidate>
        <p><label style="width:100;margin-left:10px">From</label><input class="easyui-datebox" data-options="onSelect:fromDatepk" id="from_date_pk"></input></p>
        <p><label style="width:100;margin-left:10px">To</label><input class="easyui-datebox" data-options="onSelect:toDatepk" id="to_date_pk"></input></p>
         
    </form> 
</div>

<!-- Dialog Button -->
<div id="dialog_buttton_list_k" style="border:none;height:80px">
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-ok" onclick="print_kunjungan();">Print</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="modal_close('dialog_kunjungan');">Cancel</a>
</div>

<!--  Dialog list item -->
<div id="dialog_periksa" class="easyui-dialog" title="Laporan Pemeriksaan pasien" style="width:30%;height:230px;background-color:#F8F8F8;padding:5px;top:5px" closed="true" data-options="modal:true" buttons="#dialog_buttton_list_pr">
    <form id="" method="post" novalidate>
        <p><label style="width:100;margin-left:10px">From</label><input class="easyui-datebox" data-options="onSelect:fromDatepr" id="from_date_pr"></input></p>
        <p><label style="width:100;margin-left:10px">To</label><input class="easyui-datebox" data-options="onSelect:toDatepr" id="to_date_pr"></input></p>
         
    </form> 
</div>

<!-- Dialog Button -->
<div id="dialog_buttton_list_pr" style="border:none;height:80px">
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-ok" onclick="print('pr');">Print</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="modal_close('dialog_periksa');">Cancel</a>
</div>

<!--  Dialog list item -->
<div id="dialog_poli" class="easyui-dialog" title="Laporan Poli umum" style="width:30%;height:230px;background-color:#F8F8F8;padding:5px;top:5px" closed="true" data-options="modal:true" buttons="#dialog_buttton_list_pl">
    <form id="" method="post" novalidate>
        <p><label style="width:100;margin-left:10px">From</label><input class="easyui-datebox" data-options="onSelect:fromDatepu" id="from_date_pu"></input></p>
        <p><label style="width:100;margin-left:10px">To</label><input class="easyui-datebox" data-options="onSelect:toDatepu" id="to_date_pu"></input></p>
         
    </form> 
</div>

<!-- Dialog Button -->
<div id="dialog_buttton_list_pl" style="border:none;height:80px">
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-ok" onclick="print('pu');">Print</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="modal_close('dialog_poli');">Cancel</a>
</div>

<!--  Dialog list item -->
<div id="dialog_resep" class="easyui-dialog" title="Laporan Resep obat" style="width:30%;height:230px;background-color:#F8F8F8;padding:5px;top:5px" closed="true" data-options="modal:true" buttons="#dialog_buttton_list_rs">
    <form id="" method="post" novalidate>
        <p><label style="width:100;margin-left:10px">From</label><input class="easyui-datebox" data-options="onSelect:fromDaters" id="from_date_rs"></input></p>
        <p><label style="width:100;margin-left:10px">To</label><input class="easyui-datebox" data-options="onSelect:toDaters" id="to_date_rs"></input></p>
         
    </form> 
</div>

<!-- Dialog Button -->
<div id="dialog_buttton_list_rs" style="border:none;height:80px">
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-ok" onclick="print('rs');">Print</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="modal_close('dialog_resep');">Cancel</a>
</div>

<!--  Dialog list item -->
<div id="dialog_farmasi" class="easyui-dialog" title="Laporan Farmasi" style="width:30%;height:230px;background-color:#F8F8F8;padding:5px;top:5px" closed="true" data-options="modal:true" buttons="#dialog_buttton_list_f">
    <form id="" method="post" novalidate>
        <p><label style="width:100;margin-left:10px">From</label><input class="easyui-datebox" data-options="onSelect:fromDatefa" id="from_date_fa"></input></p>
        <p><label style="width:100;margin-left:10px">To</label><input class="easyui-datebox" data-options="onSelect:toDatefa" id="to_date_fa"></input></p>
         
    </form> 
</div>

<!-- Dialog Button -->
<div id="dialog_buttton_list_f" style="border:none;height:80px">
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-ok" onclick="print('fa');">Print</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onclick="modal_close('dialog_farmasi');">Cancel</a>
</div>


<script type="text/javascript">

//-------------------------------pasien-------------------------//

function toDatepa(date){
    endDatepa     = Date.parse(date);
    if(startDatepa > endDatepa){
        alert('Start Date harus lebih dari End Date');
        $('#to_date_pa').datebox('setValue','');
    }
}

function fromDatepa(date){
    startDatepa       = Date.parse(date);
    $('#to_date_pa').datebox('setValue','');
}

//-------------------------------kunjungan-------------------------//
function toDatepk(date){
    endDatepk     = Date.parse(date);
    if(startDatepk > endDatepk){
        alert('Start Date harus lebih dari End Date');
        $('#to_date_pk').datebox('setValue','');
    }
}

function fromDatepk(date){
    startDatepk       = Date.parse(date);
    $('#to_date_pk').datebox('setValue','');
}

//-------------------------------pemeriksaan-------------------------//

function toDatepr(date){
    endDatepr     = Date.parse(date);
    if(startDatepr > endDatepr){
        alert('Start Date harus lebih dari End Date');
        $('#to_date_pr').datebox('setValue','');
    }
}

function fromDatepr(date){
    startDatepr       = Date.parse(date);
    $('#to_date_pr').datebox('setValue','');
}

//-------------------------------poli umum-------------------------//
function toDatepu(date){
    endDatepu     = Date.parse(date);
    if(startDatepu > endDatepu){
        alert('Start Date harus lebih dari End Date');
        $('#to_date_pu').datebox('setValue','');
    }
}

function fromDatepu(date){
    startDatepu       = Date.parse(date);
    $('#to_date_pu').datebox('setValue','');
}

//-------------------------------resep obat-------------------------//

function toDaters(date){
    endDaters     = Date.parse(date);
    if(startDaters > endDaters){
        alert('Start Date harus lebih dari End Date');
        $('#to_date_rs').datebox('setValue','');
    }
}

function fromDaters(date){
    startDaters       = Date.parse(date);
    $('#to_date_rs').datebox('setValue','');
}

//-------------------------------farmasi-------------------------//
function toDatefa(date){
    endDatefa     = Date.parse(date);
    if(startDatefa > endDatefa){
        alert('Start Date harus lebih dari End Date');
        $('#to_date_fa').datebox('setValue','');
    }
}

function fromDatefa(date){
    startDatefa       = Date.parse(date);
    $('#to_date_fa').datebox('setValue','');
}

function print_pasien(){
        var tgl1        = $('#from_date_pa').datebox('getValue');
        var tgl2        = $('#to_date_pa').datebox('getValue');     
        if(tgl1!='' && tgl2 !=''){
            var start_date  = new Date(tgl1);
            var end_date    = new Date(tgl2);
            var startDate   = start_date.getFullYear()+ '/'+(start_date.getMonth()+1)+'/'+start_date.getDate();
            var endDate     = end_date.getFullYear()+ '/'+(end_date.getMonth()+1)+'/'+end_date.getDate();

            parent.printPanel('Laporan Data Pasien','<?= $menu_link->controller;?>/print_pasien',startDate,endDate,'','');
			
	        }else{
            $.messager.alert('Warning','Silahkan pilih start date dan end date','warning');
        }
  }

function print(mn){
    if(mn =='pa'){
        var tgl1        = $('#from_date_pa').datebox('getValue');
        var tgl2        = $('#to_date_pa').datebox('getValue');     
        if(tgl1!='' && tgl2 !=''){
            var start_date  = new Date(tgl1);
            var end_date    = new Date(tgl2);
            var startDate   = start_date.getFullYear()+ '/'+(start_date.getMonth()+1)+'/'+start_date.getDate();
            var endDate     = end_date.getFullYear()+ '/'+(end_date.getMonth()+1)+'/'+end_date.getDate();

            parent.printPanel('Laporan Data Pasien','<?= $menu_link->controller;?>/print_pasien',mn,startDate,endDate,'','');

        }else{
            $.messager.alert('Warning','Silahkan pilih start date dan end date','warning');
        }
    }else if(mn=='po'){
        var tgl1        = $('#from_date_po').datebox('getValue');
        var tgl2        = $('#to_date_po').datebox('getValue');
        if(tgl1!='' && tgl2 !=''){
            var start_date  = new Date(tgl1);
            var end_date    = new Date(tgl2);
            var startDate   = start_date.getFullYear()+ '/'+(start_date.getMonth()+1)+'/'+start_date.getDate();
            var endDate     = end_date.getFullYear()+ '/'+(end_date.getMonth()+1)+'/'+end_date.getDate();

            parent.printPanel('Sales Order Report','<?= $menu_link->controller;?>/print_order',mn,startDate,endDate,'','');

        }else{
            $.messager.alert('Warning','Silahkan pilih start date dan end date','warning');
        }
    
     }
}

</script>

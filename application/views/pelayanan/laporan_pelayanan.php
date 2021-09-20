<div class="easyui-layout" style="height:450px;width:100%">
    <div data-options="region:'center',title:'Data pelayanan',iconCls:'icon-ok'" style="width:100%;height:450px">
        <div class="list-group">
          <button type="button" class="list-group-item" onclick="$('#dialog_pasien').dialog('open')"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>&nbsp;&nbsp;Laporan data pasien</button>
          <button type="button" class="list-group-item" onclick="$('#dialog_kunjungan').dialog('open')"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>&nbsp;&nbsp;Laporan data kunjungan pasien</button>
           <button type="button" class="list-group-item" onclick="$('#dialog_priksa').dialog('open')"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>&nbsp;&nbsp;Laporan data pemeriksaan umum</button>
            <button type="button" class="list-group-item" onclick="$('#dialog_poli').dialog('open')"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>&nbsp;&nbsp;Laporan data poli umum</button>
             <button type="button" class="list-group-item" onclick="$('#dialog_resep').dialog('open')"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>&nbsp;&nbsp;Laporan data resep obat</button>
       
        </div>
    </div>
</div>

<!--  Dialog list pasien -->
<div id="dialog_pasien" class="easyui-dialog" title="Data Pasien" style="width:30%;height:230px;background-color:#F8F8F8;padding:5px;top:5px" closed="true" data-options="modal:true" buttons="#dialog_buttton_list_pq">
    <form id="" method="post" novalidate>
        <p><label style="width:100;margin-left:10px">From</label><input class="easyui-datebox" data-options="onSelect:fromDatepq" id="from_date_pq"></input></p>
        <p><label style="width:100;margin-left:10px">To</label><input class="easyui-datebox" data-options="onSelect:toDatepq" id="to_date_pq"></input></p>
  
       
    </form> 
</div>

<!-- Dialog Button -->
<div id="dialog_buttton_list_pq" style="border:none;height:80px">
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-ok" onClick="print('pq');">Print</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onClick="modal_close('dialog_pasien');">Cancel</a>
</div>

<!--  Dialog list kunjungan -->
<div id="dialog_kunjungan" class="easyui-dialog" title="Data Kunjungan" style="width:30%;height:230px;background-color:#F8F8F8;padding:5px;top:5px" closed="true" data-options="modal:true" buttons="#dialog_buttton_list_po">
    <form id="" method="post" novalidate>
        <p><label style="width:100;margin-left:10px">From</label><input class="easyui-datebox" data-options="onSelect:fromDatepo" id="from_date_po"></input></p>
        <p><label style="width:100;margin-left:10px">To</label><input class="easyui-datebox" data-options="onSelect:toDatepo" id="to_date_po"></input></p>
         
    </form> 
</div>

<!-- Dialog Button -->
<div id="dialog_buttton_list_po" style="border:none;height:80px">
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-ok" onClick="print('po');">Print</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onClick="modal_close('dialog_kunjungan');">Cancel</a>
</div>

<!--  Dialog list pemeriksaan -->
<div id="dialog_priksa" class="easyui-dialog" title="Data Pemeriksaan" style="width:30%;height:230px;background-color:#F8F8F8;padding:5px;top:5px" closed="true" data-options="modal:true" buttons="#dialog_buttton_list_pr">
    <form id="" method="post" novalidate>
        <p><label style="width:100;margin-left:10px">From</label><input class="easyui-datebox" data-options="onSelect:fromDatepr" id="from_date_pr"></input></p>
        <p><label style="width:100;margin-left:10px">To</label><input class="easyui-datebox" data-options="onSelect:toDatepr" id="to_date_pr"></input></p>
         
    </form> 
</div>

<!-- Dialog Button -->
<div id="dialog_buttton_list_pr" style="border:none;height:80px">
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-ok" onClick="print('pr');">Print</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onClick="modal_close('dialog_priksa');">Cancel</a>
</div>

<!--  Dialog list poli -->
<div id="dialog_poli" class="easyui-dialog" title="Laporan Poli Umum" style="width:30%;height:230px;background-color:#F8F8F8;padding:5px;top:5px" closed="true" data-options="modal:true" buttons="#dialog_buttton_list_do">
    <form id="" method="post" novalidate>
        <p><label style="width:100;margin-left:10px">From</label><input class="easyui-datebox" data-options="onSelect:fromDatedo" id="from_date_do"></input></p>
        <p><label style="width:100;margin-left:10px">To</label><input class="easyui-datebox" data-options="onSelect:toDatedo" id="to_date_do"></input></p>
    </form> 
</div>

<!-- Dialog Button -->
<div id="dialog_buttton_list_do" style="border:none;height:80px">
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-ok" onClick="print('do');">Print</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onClick="modal_close('dialog_poli');">Cancel</a>
</div>

<!--  Dialog list resep -->
<div id="dialog_resep" class="easyui-dialog" title="Laporan Resep obat Umum" style="width:30%;height:230px;background-color:#F8F8F8;padding:5px;top:5px" closed="true" data-options="modal:true" buttons="#dialog_buttton_list_ri">
    <form id="" method="post" novalidate>
        <p><label style="width:100;margin-left:10px">From</label><input class="easyui-datebox" data-options="onSelect:fromDateri" id="from_date_ri"></input></p>
        <p><label style="width:100;margin-left:10px">To</label><input class="easyui-datebox" data-options="onSelect:toDateri" id="to_date_ri"></input></p>
    </form> 
</div>

<!-- Dialog Button -->
<div id="dialog_buttton_list_ri" style="border:none;height:80px">
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-ok" onClick="print('ri');">Print</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onClick="modal_close('dialog_resep');">Cancel</a>
</div>


<script type="text/javascript">

function toDatepq(date){
    endDatepq     = Date.parse(date);
    if(startDatepq > endDatepq){
        alert('Start Date harus lebih dari End Date');
        $('#to_date_pq').datebox('setValue','');
    }
}

function fromDatepq(date){
    startDatepq       = Date.parse(date);
    $('#to_date_pq').datebox('setValue','');
}

// ---------------------------kunjungan-------------------------------//
function toDatepo(date){
    endDatepo     = Date.parse(date);
    if(startDatepo > endDatepo){
        alert('Start Date harus lebih dari End Date');
        $('#to_date_po').datebox('setValue','');
    }
}

function fromDatepo(date){
    startDatepo       = Date.parse(date);
    $('#to_date_po').datebox('setValue','');
}
//------------------------------pemeriksaan-----------------------------//

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

//------------------------------poli umum-----------------------------//
function toDatedo(date){
    endDatedo     = Date.parse(date);
    if(startDatedo > endDatedo){
        alert('Start Date harus lebih dari End Date');
        $('#to_date_do').datebox('setValue','');
    }
}

function fromDatedo(date){
    startDatedo       = Date.parse(date);
    $('#to_date_do').datebox('setValue','');
}

//-------------------------------resep obat---------------------------------//
function toDateri(date){
    endDateri     = Date.parse(date);
    if(startDateri > endDateri){
        alert('Start Date harus lebih dari End Date');
        $('#to_date_ri').datebox('setValue','');
    }
}

function fromDateri(date){
    startDateri       = Date.parse(date);
    $('#to_date_ri').datebox('setValue','');
}


function print(mn){
    if(mn =='pq'){
        var tgl1        = $('#from_date_pq').datebox('getValue');
        var tgl2        = $('#to_date_pq').datebox('getValue');     
        if(tgl1!='' && tgl2 !=''){
            var start_date  = new Date(tgl1);
            var end_date    = new Date(tgl2);
            var startDate   = start_date.getFullYear()+ '/'+(start_date.getMonth()+1)+'/'+start_date.getDate();
            var endDate     = end_date.getFullYear()+ '/'+(end_date.getMonth()+1)+'/'+end_date.getDate();

            parent.printPanel('Laporan data pasien','<?= $menu_link->controller;?>/print_pasien',mn,startDate,endDate,'','');

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

            parent.printPanel('Laporan Kunjungan','<?= $menu_link->controller;?>/print_kunjungan',mn,startDate,endDate,'','');

        }else{
            $.messager.alert('Warning','Silahkan pilih start date dan end date','warning');
        }
     }
	 else if(mn=='pr'){
        var tgl1        = $('#from_date_pr').datebox('getValue');
        var tgl2        = $('#to_date_pr').datebox('getValue');
        if(tgl1!='' && tgl2 !=''){
            var start_date  = new Date(tgl1);
            var end_date    = new Date(tgl2);
            var startDate   = start_date.getFullYear()+ '/'+(start_date.getMonth()+1)+'/'+start_date.getDate();
            var endDate     = end_date.getFullYear()+ '/'+(end_date.getMonth()+1)+'/'+end_date.getDate();

            parent.printPanel('Laporan Pemeriksaan','<?= $menu_link->controller;?>/print_priksa',mn,startDate,endDate,'','');

        }else{
            $.messager.alert('Warning','Silahkan pilih start date dan end date','warning');
        }
     }
	else if(mn=='do'){
        var tgl1        = $('#from_date_do').datebox('getValue');
        var tgl2        = $('#to_date_do').datebox('getValue');
        if(tgl1!='' && tgl2 !=''){
            var start_date  = new Date(tgl1);
            var end_date    = new Date(tgl2);
            var startDate   = start_date.getFullYear()+ '/'+(start_date.getMonth()+1)+'/'+start_date.getDate();
            var endDate     = end_date.getFullYear()+ '/'+(end_date.getMonth()+1)+'/'+end_date.getDate();

            parent.printPanel('Laporan Poli Umum','<?= $menu_link->controller;?>/print_poli',mn,startDate,endDate,'','');

        }else{
            $.messager.alert('Warning','Silahkan pilih start date dan end date','warning');
        }
    }
   else if(mn=='ri'){
        var tgl1        = $('#from_date_ri').datebox('getValue');
        var tgl2        = $('#to_date_ri').datebox('getValue');
        if(tgl1!='' && tgl2 !=''){
            var start_date  = new Date(tgl1);
            var end_date    = new Date(tgl2);
            var startDate   = start_date.getFullYear()+ '/'+(start_date.getMonth()+1)+'/'+start_date.getDate();
            var endDate     = end_date.getFullYear()+ '/'+(end_date.getMonth()+1)+'/'+end_date.getDate();

            parent.printPanel('Laporan Resep obat','<?= $menu_link->controller;?>/print_resep',mn,startDate,endDate,'','');

        }else{
            $.messager.alert('Warning','Silahkan pilih start date dan end date','warning');
        }
    }
}
</script>

<div class="easyui-layout" style="height:450px;width:100%">
    <div data-options="region:'center',title:'Data Laboratorium',iconCls:'icon-ok'" style="width:100%;height:450px">
        <div class="list-group">
          <button type="button" class="list-group-item" onclick="$('#dialog_daftar').dialog('open')"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>&nbsp;&nbsp;Laporan pendaftaran Laboratorium</button>
          <button type="button" class="list-group-item" onclick="$('#dialog_hasil').dialog('open')"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>&nbsp;&nbsp;Laporan Hasil Laboratorium</button>
           <button type="button" class="list-group-item" onclick="$('#dialog_bayar').dialog('open')"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>&nbsp;&nbsp;Laporan Pembayaran Laboratorium</button>
       
        </div>
    </div>
</div>

<!--  Dialog list pasien -->
<div id="dialog_daftar" class="easyui-dialog" title="Data Pendaftaran Lab" style="width:30%;height:230px;background-color:#F8F8F8;padding:5px;top:5px" closed="true" data-options="modal:true" buttons="#dialog_buttton_list_pq">
    <form id="" method="post" novalidate>
        <p><label style="width:100;margin-left:10px">From</label><input class="easyui-datebox" data-options="onSelect:fromDatepq" id="from_date_pq"></input></p>
        <p><label style="width:100;margin-left:10px">To</label><input class="easyui-datebox" data-options="onSelect:toDatepq" id="to_date_pq"></input></p>
  
       
    </form> 
</div>

<!-- Dialog Button -->
<div id="dialog_buttton_list_pq" style="border:none;height:80px">
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-ok" onClick="print('pq');">Print</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onClick="modal_close('dialog_daftar');">Cancel</a>
</div>

<!--  Dialog list kunjungan -->
<div id="dialog_hasil" class="easyui-dialog" title="Data Hasil Lab" style="width:30%;height:230px;background-color:#F8F8F8;padding:5px;top:5px" closed="true" data-options="modal:true" buttons="#dialog_buttton_list_po">
    <form id="" method="post" novalidate>
        <p><label style="width:100;margin-left:10px">From</label><input class="easyui-datebox" data-options="onSelect:fromDatepo" id="from_date_po"></input></p>
        <p><label style="width:100;margin-left:10px">To</label><input class="easyui-datebox" data-options="onSelect:toDatepo" id="to_date_po"></input></p>
         
    </form> 
</div>

<!-- Dialog Button -->
<div id="dialog_buttton_list_po" style="border:none;height:80px">
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-ok" onClick="print('po');">Print</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onClick="modal_close('dialog_hasil');">Cancel</a>
</div>

<!--  Dialog list pemeriksaan -->
<div id="dialog_bayar" class="easyui-dialog" title="Data Pembayaran Lab" style="width:30%;height:230px;background-color:#F8F8F8;padding:5px;top:5px" closed="true" data-options="modal:true" buttons="#dialog_buttton_list_pr">
    <form id="" method="post" novalidate>
        <p><label style="width:100;margin-left:10px">From</label><input class="easyui-datebox" data-options="onSelect:fromDatepr" id="from_date_pr"></input></p>
        <p><label style="width:100;margin-left:10px">To</label><input class="easyui-datebox" data-options="onSelect:toDatepr" id="to_date_pr"></input></p>
         
    </form> 
</div>

<!-- Dialog Button -->
<div id="dialog_buttton_list_pr" style="border:none;height:80px">
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-ok" onClick="print('pr');">Print</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onClick="modal_close('dialog_bayar');">Cancel</a>
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

// ---------------------------hasil-------------------------------//
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
//------------------------------bayar-----------------------------//

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


function print(mn){
    if(mn =='pq'){
        var tgl1        = $('#from_date_pq').datebox('getValue');
        var tgl2        = $('#to_date_pq').datebox('getValue');     
        if(tgl1!='' && tgl2 !=''){
            var start_date  = new Date(tgl1);
            var end_date    = new Date(tgl2);
            var startDate   = start_date.getFullYear()+ '/'+(start_date.getMonth()+1)+'/'+start_date.getDate();
            var endDate     = end_date.getFullYear()+ '/'+(end_date.getMonth()+1)+'/'+end_date.getDate();

            parent.printPanel('Laporan Pendaftaran Lab ','<?= $menu_link->controller;?>/print_daftar_lab',mn,startDate,endDate,'','');

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

            parent.printPanel('Laporan Hasil Lab','<?= $menu_link->controller;?>/print_hasil_lab',mn,startDate,endDate,'','');

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

            parent.printPanel('Laporan Pembayaran Lab','<?= $menu_link->controller;?>/print_bayar_lab',mn,startDate,endDate,'','');

        }else{
            $.messager.alert('Warning','Silahkan pilih start date dan end date','warning');
        }
     }
}
</script>

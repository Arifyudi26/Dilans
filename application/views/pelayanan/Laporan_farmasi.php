<div class="easyui-layout" style="height:450px;width:100%">
    <div data-options="region:'center',title:'Data Farmasi',iconCls:'icon-ok'" style="width:100%;height:450px">
        <div class="list-group">
          <button type="button" class="list-group-item" onClick="$('#dialog_ambil').dialog('open')"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>&nbsp;&nbsp;Laporan Pengambilan Obat</button>
          <button type="button" class="list-group-item" onClick="$('#dialog_obat').dialog('open')"><span class="glyphicon glyphicon-book" aria-hidden="true"></span>&nbsp;&nbsp;Laporan Data Obat</button>
          
       
        </div>
    </div>
</div>

<!--  Dialog list item -->
<div id="dialog_ambil" class="easyui-dialog" title="Laporan Pengambilan Obat" style="width:30%;height:230px;background-color:#F8F8F8;padding:5px;top:5px" closed="true" data-options="modal:true" buttons="#dialog_buttton_list_pq">
    <form id="" method="post" novalidate>
        <p><label style="width:100;margin-left:10px">From</label><input class="easyui-datebox" data-options="onSelect:fromDatepq" id="from_date_pq"></input></p>
        <p><label style="width:100;margin-left:10px">To</label><input class="easyui-datebox" data-options="onSelect:toDatepq" id="to_date_pq"></input></p>
  
       
    </form> 
</div>

<!-- Dialog Button -->
<div id="dialog_buttton_list_pq" style="border:none;height:80px">
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-ok" onClick="print('pq');">Print</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onClick="modal_close('dialog_ambil');">Cancel</a>
</div>

<!--  Dialog list item -->
<div id="dialog_obat" class="easyui-dialog" title="Laporan Pulang Rb" style="width:30%;height:230px;background-color:#F8F8F8;padding:5px;top:5px" closed="true" data-options="modal:true" buttons="#dialog_buttton_list_po">
    <form id="" method="post" novalidate>
        <p><label style="width:100;margin-left:10px">From</label><input class="easyui-datebox" data-options="onSelect:fromDatepo" id="from_date_po"></input></p>
        <p><label style="width:100;margin-left:10px">To</label><input class="easyui-datebox" data-options="onSelect:toDatepo" id="to_date_po"></input></p>
         
    </form> 
</div>

<!-- Dialog Button -->
<div id="dialog_buttton_list_po" style="border:none;height:80px">
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-ok" onClick="print('po');">Print</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel" onClick="modal_close('dialog_obat');">Cancel</a>
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


function print(mn){
    if(mn =='pq'){
        var tgl1        = $('#from_date_pq').datebox('getValue');
        var tgl2        = $('#to_date_pq').datebox('getValue');     
        if(tgl1!='' && tgl2 !=''){
            var start_date  = new Date(tgl1);
            var end_date    = new Date(tgl2);
            var startDate   = start_date.getFullYear()+ '/'+(start_date.getMonth()+1)+'/'+start_date.getDate();
            var endDate     = end_date.getFullYear()+ '/'+(end_date.getMonth()+1)+'/'+end_date.getDate();

            parent.printPanel('Laporan pengambilan obat','<?= $menu_link->controller;?>/print_farmasi',mn,startDate,endDate,'','');

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

            parent.printPanel('Laporan data obat','<?= $menu_link->controller;?>/print_obat',mn,startDate,endDate,'','');

        }else{
            $.messager.alert('Warning','Silahkan pilih start date dan end date','warning');
        }
    
     }
}

</script>

<div class="easyui-layout" style="height:450px;width:100%">
    <div data-options="region:'east',split:true" title="Filter" style="width:20%;height:450px">
        <br>
        <p><input class="easyui-textbox" type="text" name="txt_no" id="txt_no" data-options="prompt:'id_user'"
                style="height:25px;width:200px"></p>
        <p><input class="easyui-textbox" type="text" name="txt_desc" id="txt_desc" data-options="prompt:'username'"
                style="height:25px;width:200px"></p>
        <p><label><input type="checkbox" name="chkdate" id="chkdate" onclick="change_date()"></label></p>
        <p><label style="width:50px;padding-left:10px"><b>From</b></label><input class="easyui-datebox"
                value="<?= $date_now; ?>" data-options="disabled:true" style="width:120px" id="date_from"
                name="date_form"></p>
        <p><label style="width:50px;padding-left:10px"><b>To</b></label><input class="easyui-datebox"
                value="<?= $date_now; ?>" data-options="disabled:true" style="width:120px" id="date_to" name="date_to">
        </p>
        <br>
        <!-- <p><input type="checkbox" name="chk_TransStatus" value="0"><label style="padding-left:10px">Aktiv</label></p>
		<p><input type="checkbox" name="chk_TransStatus" value="1"><label style="padding-left:10px">Remove</label></p> -->
        <br>
        <p>
            <a href="javascript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-search'"
                style="width:80px;float:right" id="search" name="search" onclick="search_data()">Search</a>
            <a href="javascript:void(0)" class="easyui-linkbutton" data-options="iconCls:'icon-print'"
                style="width:80px;float:right" id="print_data" name="print_data" onclick="print_data()">Print</a>
        </p>
    </div>
    <div data-options="region:'center',title:'List User',iconCls:'icon-ok'" style="width:80%;height:450px">
        <table class="easyui-datagrid" title="" style="width:100%;height:397px" id="grid" data-options="
		        rownumbers:true,
		        singleSelect:true,
		        pagination:true,
                pageSize:20,
		        url:'<?= base_url() . $menu_link->controller; ?>/ajax',
		        method:'get',
		        toolbar:toolbar">
            <thead>
                <tr>
                    <th data-options="field:'id_user',width:100">Id User</th>
                    <th data-options="field:'id_employee',width:150,align:'center'">id employe</th>
                    <th data-options="field:'username',width:150">Nama User</th>
                    <th data-options="field:'password',width:250,align:'center'">Password</th>
                    <th data-options="field:'id_job',width:150,align:'center'">Id job</th>
                    <th data-options="field:'level',width:150,align:'center'">Level</th>
                    <th data-options="field:'tgl_daftar',width:150,align:'center'">Tgl Daftar</th>
                    <th data-options="field:'terakhir_login',width:200,align:'center'">Terakhir Login</th>
                    <th data-options="field:'LAST_USER',width:150,align:'center'">last User</th>
                    <th data-options="field:'CREATE_DATE',width:150,align:'center'">Create date</th>
                    <th data-options="field:'status',width:150,align:'center'" hidden="true">status</th>
                </tr>
            </thead>
        </table>
    </div>
</div>

<!--  Dialog list item -->
<div id="dialog_list_employe" class="easyui-dialog" title="List diagnosa"
    style="width:50%;height:500px;background-color:#F8F8F8;padding:5px;top:5px" closed="true" data-options="modal:true"
    buttons="#dialog_buttton_list_employe">
    <form id="form_employe" method="post" novalidate>
        <table width="97%" border="0">

            <tr>
                <td colspan="3" height="15"></td>
            </tr>

            <tr>
                <td width="100" align="left" valign="middle"><label style="font-size:12px">Id Employee</label></td>
                <td width="14"><b>:</b></td>

                <td colspan="2">
                    <input type="text" style="height:25px;width:300px" name="id_employe" id="id_employe"
                        placeholder="< Id employee >" onKeyUp="search_list_employe();" />
                </td>
            </tr>
            <tr>
                <td colspan="3" height="8"></td>
            </tr>
            <tr>
                <td width="100" align="left" valign="middle"><label style="font-size:12px">Nama Lengkap</label></td>
                <td><b>:</b></td>

                <td colspan="2">
                    <input type="text" style="height:25px;width:300px" name="nama" id="nama"
                        placeholder="< Nama Lengkap >" onKeyUp="search_list_employe();" />
                </td>
            </tr>

            <tr>
                <td colspan="3" height="15"></td>
            </tr>

            <tr>
                <td colspan="3">
                    <table id="list_employe" class="easyui-datagrid"
                        url="<?= base_url() . $menu_link->controller; ?>/get_list_employe" style="height:250px"
                        data-options="singleSelect:true,
                pageSize:8,">
                        <thead>
                            <tr>
                                <th data-options="field:'ck',checkbox:true"></th>
                                <th field="ID_EMPLOYEE" data-options="field:'ID_EMPLOYEE',width:100" sortable="true">Id
                                    Employee</th>
                                <th field="NAMA_LENGKAP" data-options="field:'NAMA_LENGKAP',width:185" sortable="true">
                                    Nama</th>
                                <th field="ALAMAT" data-options="field:'ALAMAT',width:170" sortable="true">Alamat</th>
                            </tr>
                        </thead>
                    </table>
                </td>
            </tr>
        </table>
    </form>
</div>

<!-- Dialog Button -->
<div id="dialog_buttton_list_employe" style="border:none;height:80px">
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-ok" onClick="choose_list_employe();">OK</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel"
        onClick="modal_close('dialog_list_employe');">Cancel</a>
</div>


<!--  Dialog list item -->
<div id="dialog_list_level" class="easyui-dialog" title="List Job Level"
    style="width:50%;height:500px;background-color:#F8F8F8;padding:5px;top:5px" closed="true" data-options="modal:true"
    buttons="#dialog_buttton_list_item">
    <form id="form_level" method="post" novalidate>
        <table width="97%" border="0">

            <tr>
                <td colspan="3" height="15"></td>
            </tr>

            <tr>
                <td width="100" align="left" valign="middle"><label style="font-size:12px">Id job</label></td>
                <td width="14"><b>:</b></td>

                <td colspan="2">
                    <input type="text" style="height:25px;width:300px" name="id_job" id="id_job"
                        placeholder="< Id job >" onKeyUp="search_list_level();" />
                </td>
            </tr>
            <tr>
                <td colspan="3" height="8"></td>
            </tr>
            <tr>
                <td width="100" align="left" valign="middle"><label style="font-size:12px">Job Name</label></td>
                <td><b>:</b></td>

                <td colspan="2">
                    <input type="text" style="height:25px;width:300px" name="job_name" id="job_name"
                        placeholder="< job_name >" onKeyUp="search_list_level();" />
                </td>
            </tr>

            <tr>
                <td colspan="3" height="15"></td>
            </tr>

            <tr>
                <td colspan="3">
                    <table id="list_level" class="easyui-datagrid"
                        url="<?= base_url() . $menu_link->controller; ?>/get_list_level" style="height:250px"
                        data-options="singleSelect:true,
                pageSize:8,">
                        <thead>
                            <tr>
                                <th data-options="field:'ck',checkbox:true"></th>
                                <th field="ID_JOB" data-options="field:'ID_JOB',width:80" sortable="true">Id Job</th>
                                <th field="JOB_NAME" data-options="field:'JOB_NAME',width:150" sortable="true">Job Name
                                </th>
                                <th field="LEVEL" data-options="field:'LEVEL',width:100" sortable="true">Level</th>
                                <th field="JOB_DESC" data-options="field:'JOB_DESC',width:150" sortable="true">Job Desc
                                </th>
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
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-ok" onClick="choose_list_level();">OK</a>
    <a href="javascript:void(0)" class="easyui-linkbutton" iconCls="icon-cancel"
        onClick="modal_close('dialog_list_level');">Cancel</a>
</div>

<!-- ================== dialog add poli Umum ============================== -->
<div id="dlg_umum" class="easyui-dialog" title="Form User" style="width:400px;height:320px;padding:10px" closed="true"
    modal="true" data-options="
                iconCls: 'icon-save',
                toolbar: toolbar_2
            ">
    <form id="fm_user" action="<?= base_url() . $menu_link->controller; ?>/insert" method="post"
        enctype="multipart/form-data">
        <table cellpadding="5">
            <tr>
                <td width="100" valign="top">Username</td>
                <td>
                    <input class="easyui-textbox" type="text" name="id_employe" id="employe"
                        data-options="required:true" style="height:30px;width:60px"><input class="easyui-textbox"
                        type="text" name="username" id="nm_lengkap" data-options="required:true"
                        style="height:30px;width:160px"></input><a href="javascript:void(0)"
                        class="easyui-linkbutton form-button" style="height:30px;" iconCls="icon-add" id=""
                        onClick="cari1();"></a>
                </td>
            </tr>
            <tr>
                <td colspan="2" height="5"></td>
            </tr>
            <tr>
                <td width="50" valign="top">Password</td>
                <td>
                    <input class="easyui-textbox" type="text" name="pass" id="pass"
                        data-options="required:true,multiline:true" style="height:60px;width:250px"></input>
                    <input type="hidden" name="code" id="code" style="height:15px;width:250px;"></input>
                    <input type="hidden" name="status" id="status" style="height:15px;width:250px;"></input>
                </td>
            </tr>
            <tr>
                <td colspan="2" height="5"></td>
            </tr>
            <tr>
                <td width="50" valign="top">Level</td>
                <td>
                    <input class="easyui-textbox" type="text" name="id_job" id="idJob" data-options="required:true"
                        style="height:30px;width:60px"><input class="easyui-textbox" type="text" name="level"
                        id="joblev" data-options="required:true" style="height:30px;width:160px"></input><a
                        href="javascript:void(0)" class="easyui-linkbutton form-button" style="height:30px;"
                        iconCls="icon-add" id="" onClick="cari();"></a>
                </td>
            </tr>
            <tr>
                <td colspan="2" height="5"></td>
            </tr>
        </table>
    </form>
</div>

<!-- =================== end dialog edit user ============================== -->
<script type="text/javascript">
function search_list_employe() {
    $('#list_employe').datagrid('reload', {
        id_employe: $('#id_employe').val(),
        nama: $('#nama').val(),
    });

}


function cari1() {

    $('#dialog_list_employe').dialog('open');
}



function choose_list_employe() {

    var row = $('#list_employe').datagrid('getChecked');
    var id_em = '';
    var nama = '';

    $.each(row, function(index, value) {
        id_em = (value.ID_EMPLOYEE);
        nama = (value.NAMA_LENGKAP);
    });

    $('#employe').textbox('setValue', id_em);
    $('#nm_lengkap').textbox('setValue', nama);

    modal_close('dialog_list_employe');
}



var toolbar = [{
    text: 'Add',
    iconCls: 'icon-add',
    disabled: false,
    handler: function() {
        $('#status').val(1);
        $('#dlg_umum').dialog('open');
    }
}, {
    text: 'Edit',
    iconCls: 'icon-edit',
    disabled: false,
    handler: function() {
        var row = $('#grid').datagrid('getSelected');
        if (row.status == 0) {
            $('#status').val(2);
            $('#code').val(row.id_user);
            $('#employe').textbox('setValue', row.id_employee);
            $('#nm_lengkap').textbox('setValue', row.username);
            $('#pass').textbox('setValue', row.password);
            $('#idJob').textbox('setValue', row.id_job);
            $('#joblev').textbox('setValue', row.level);

            $('#dlg_umum').dialog('open');
        }
    }
}, {
    text: 'Delete',
    iconCls: 'icon-remove',
    disabled: false,
    handler: function() {
        var row = $('#grid').datagrid('getSelected');
        if (row.status == 0) {
            $.messager.confirm('Confirm', 'Apakah Anda yakin ?', function(r) {
                if (r) {
                    $('#status').val(3);
                    $('#code').val(row.id_user);
                    $('#employe').textbox('setValue', row.id_employee);
                    $('#nm_lengkap').textbox('setValue', row.username);
                    $('#pass').textbox('setValue', row.password);
                    $('#idJob').textbox('setValue', row.id_job);
                    $('#joblev').textbox('setValue', row.level);
                    save_data('fm_user');
                }
            });
        }
    }
}];

var toolbar_2 = [{
    text: 'Save',
    iconCls: 'icon-save',
    disabled: false,
    handler: function() {
        save_data('fm_user');
    }
}, '-', {
    text: 'Refresh',
    iconCls: 'icon-reload',
    handler: function() {
        $('#fm_user').form('clear');
    }
}, '-', {
    text: 'Cancel',
    iconCls: 'icon-cancel',
    handler: function() {
        $('#dlg_umum').dialog('close');
    }
}];

function cari() {

    var id_em = $('#employe').val();
    var username = $('#nm_lengkap').val();
    if (id_em != '' && username != "") {
        $('#dialog_list_level').dialog('open');
    } else {
        $.messager.alert('warning', 'Silahkan isi Id employe dan username terlebih dahulu!', 'warning');
    }


}

function search_list_level() {
    $('#list_level').datagrid('reload', {
        id_job: $('#id_job').val(),
        job_name: $('#job_name').val(),
    });

}


function choose_list_level() {
    var row = $('#list_level').datagrid('getChecked');
    var id_job1 = '';
    var level1 = '';

    $.each(row, function(index, value) {
        id_job1 = (value.ID_JOB);
        level1 = (value.LEVEL);
    });

    $('#idJob').textbox('setValue', id_job1);
    $('#joblev').textbox('setValue', level1);

    modal_close('dialog_list_level');
}
</script>
 <?php
$cek    = $user->result();
$nama   = $cek[0]->username;
$level  = $cek[0]->level;

?>

 <div class="easyui-panel" style="padding:5px;background-color:#ccccff;">
    <?php foreach($menu_group as $rm):?>
        <?php if($rm->MenuType == '0'):?>
            <a href="#" class="easyui-linkbutton" data-options="plain:true"><i class="<?= $rm->Icon;?>"></i> &nbsp; <?= $rm->MenuLabel;?></a>
        <?php else: ?>
            <a href="#" class="easyui-menubutton" data-options="menu:'#<?= $rm->MenuName;?>'"><i class="<?= $rm->Icon;?>"></i> &nbsp;<?= $rm->MenuLabel;?></a>
        <?php endif;?>
    <?php endforeach;?>
</div>

<?php foreach($menu_group as $rm):?>
    <div id="<?= $rm->MenuName;?>" style="width:170px;">
    <?php foreach($child_menu as $cm):?>
        <?php if($cm->ParentID == $rm->MenuID):?>
            <?php if($cm->MenuName == 'm_logout'):?>
                <a href="<?= base_url().$cm->MenuLink;?>" class="easyui-linkbutton" data-options="plain:true"  style="display:block;text-align:left"><i class="<?= $cm->Icon;?>"></i> &nbsp; <?= $cm->MenuLabel;?></a>   
            <?php else:?>
                    <a href="javascript:void(0)" class="easyui-linkbutton" data-options="plain:true" <?=($cm->View == 1)? "disabled='true'":"";?> onclick="addPanel('<?= $cm->MenuLabel;?>','<?= $cm->MenuLink;?>')" style="display:block;text-align:left"><i class="<?= $cm->Icon;?>"></i> &nbsp;<?= $cm->MenuLabel;?></a>
            <?php endif;?>
        <?php endif;?>
    <?php endforeach;?>
    </div>
<?php endforeach;?>

<div class="easyui-layout" style="height:610px;">
    <!--  <div data-options="region:'north'" style="height:50px"></div> -->
    <div data-options="region:'south',split:true" style="height:50px;">
        <div class="footer-left">
          </div>
        <div class="footer-right" style="float:right;padding:10px">
        <?php echo"Nama : ".ucwords($nama); ?> | <?php echo"Level : ".ucwords($level);?>
        </div>
    </div>  
    
 <div data-options="region:'west',split:true" title="Navigation" style="width:18%;">
        <div class="easyui-accordion" data-options="border:false">
            <?php foreach($menu_group as $rm):?>
                <div title="<?= $rm->MenuLabel;?>" style="overflow:auto;padding:10px;">
                    <?php foreach($child_menu as $cm):?>
                        <?php if($cm->ParentID == $rm->MenuID):?>
                            <?php if($cm->MenuName == 'm_logout'):?>
                                <a href="<?= base_url().$cm->MenuLink;?>" class="easyui-linkbutton" data-options="plain:true"  style="display:block;text-align:left"><i class="<?= $cm->Icon;?>"></i> &nbsp; <?= $cm->MenuLabel;?></a>   
                            <?php else:?>
                                <a href="javascript:void(0)" class="easyui-linkbutton" data-options="plain:true" <?=($cm->View == 1)? "disabled='true'":"";?> onclick="addPanel('<?= $cm->MenuLabel;?>','<?= $cm->MenuLink;?>')" style="display:block;text-align:left"><i class="<?= $cm->Icon;?>"></i> &nbsp;<?= $cm->MenuLabel;?></a>
                            <?php endif;?>
                        <?php endif;?>
                    <?php endforeach;?>
                </div>
            <?php endforeach;?>
        </div>
    </div>

     <div data-options="region:'center',title:'Puskesmas Kec.Sawah Besar ',iconCls:'icon-ok'" style="width:82%">
        <div class="easyui-tabs" data-options="fit:true,border:false,plain:true" id="tt">
            <div title="Dashboard" data-options="" style="padding:10px;">
                   <!--     <body>
            <img  src='assets/je.jpg' height="300px" align="center"></img>
            </body>-->
            <br>
    <div id="p" class="easyui-panel" title="Company Profile" style="width:100%;height:94%;padding:10px;background:#fafafa;" 
    data-options="iconCls:'',closable:true, collapsible:true,minimizable:true,maximizable:true">
    <p>Puskesmas Kec.Sawah Besar.</p>
    <p>Jl.mangga dua selatan .</p>
    <img  src='assets/Logo2.PNG' height="100px" align="center"></img>
    </div>
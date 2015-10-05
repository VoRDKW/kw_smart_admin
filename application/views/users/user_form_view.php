<script>
    jQuery(document).ready(function ($) {
        $("#SidebarMenu ul li").removeAttr('class');
        $("#btnUser").addClass("active");
    });
</script>

<!--<div class="form-group <? (form_error('VTID')) ? 'has-error' : '' ?>">                                  
                                <label for="" class="col-sm-4 control-label">ประเภทรถ</label>
                                <div class="col-sm-4">
<?php //echo $form['VTID'] ?>
                                </div>  
                                <div class="col-sm-4">
<?php //echo form_error('VTID', '<font color="error">', '</font>'); ?>
                                </div>
                            </div>-->
<div class="container-fluid">
    <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header"><?= $page_title ?></h1>            
        </div>
    </div>
    <div class="row">
        <?= $form['form_open'] ?>
        <div class="col-md-12">        
            <div class="form-group <?= (form_error('PersonalID')) ? 'has-error' : '' ?>">
                <label class="col-sm-2 control-label">เลขประจำตัวประชาชน :</label>
                <div class="col-sm-10">    
                    <?= $form['PersonalID'] ?>
                    <?php echo form_error('PersonalID', '<font color="error">', '</font>'); ?>
                </div>
            </div>
            <div class="form-group <?= (form_error('Username')) ? 'has-error' : '' ?>">
                <label class="col-sm-2 control-label">ชื่อผู้ใช้ :</label>
                <div class="col-sm-10">
                    <?= $form['Username'] ?>
                    <?php echo form_error('Username', '<font color="error">', '</font>'); ?>
                 </div>
            </div>
            <div class="form-group <?= (form_error('Password')) ? 'has-error' : '' ?>">
                <label class="col-sm-2 control-label">รหัสผ่าน :</label>
                <div class="col-sm-10">
                    <?= $form['Password'] ?>
                    <?php echo form_error('Password', '<font color="error">', '</font>'); ?>
                 </div>
            </div>
            <div class="form-group <?= (form_error('Fname')) ? 'has-error' : '' ?>">
                <label class="col-sm-2 control-label">ชื่อ :</label>
                <div class="col-sm-10">
                    <?= $form['Fname'] ?>
                    <?php echo form_error('Fname', '<font color="error">', '</font>'); ?>
                 </div>
            </div>
            <div class="form-group <?= (form_error('Lname')) ? 'has-error' : '' ?>">
                <label class="col-sm-2 control-label">นามสกุล :</label>
                <div class="col-sm-10">
                    <?= $form['Lname'] ?>
                    <?php echo form_error('Lname', '<font color="error">', '</font>'); ?>
                 </div>
            </div>
            <div class="form-group <?= (form_error('MobilePhone')) ? 'has-error' : '' ?>">
                <label class="col-sm-2 control-label">เบอร์โทรศัพท์ :</label>
                <div class="col-sm-10">
                    <?= $form['MobilePhone'] ?>
                    <?php echo form_error('MobilePhone', '<font color="error">', '</font>'); ?>
                </div>
            </div>
            <div class="form-group <?= (form_error('Email')) ? 'has-error' : '' ?>">
                <label class="col-sm-2 control-label">อีเมล :</label>
                <div class="col-sm-10">
                    <?= $form['Email'] ?>
                    <?php echo form_error('Email', '<font color="error">', '</font>'); ?>
                 </div>
            </div>
            <div class="form-group <?= (form_error('RoldID')) ? 'has-error' : '' ?>">
                <label class="col-sm-2 control-label">สถานะผู้ใช้ :</label>
                <div class="col-sm-10">
                    <?= $form['RoleID'] ?>
                    <?php echo form_error('RoleID', '<font color="error">', '</font>'); ?>
                 </div>
            </div>
            <div class="form-group <?= (form_error('ImageName')) ? 'has-error' : '' ?>">
                <label class="col-sm-2 control-label">รูปภาพ :</label>
                <div class="col-sm-10">
                    <?= $form['ImageName'] ?>
                    <?php echo form_error('ImageName', '<font color="error">', '</font>'); ?>
                 </div>
            </div>                                                                             
        </div>
        <div class="col-md-12 center">  
            <?php
            $save = array(
                'class' => "btn btn-lg btn-success",
                'title' => "บันทึกข้อมูล",
                'data-id' => "5",
                'data-title' => "บันทึกข้อมูล",
                'data-sub_title' => "",
                'data-info' => "ผู้ใช้งานระบบ",
                'data-toggle' => "modal",
                'data-target' => "#confirm",
                'data-href' => "",
                'data-form_id' => "form_user",
            );
            echo anchor('#', '<span class="fa fa-save">&nbsp;&nbsp;บันทึก</span>', $save)."&nbsp;";
            echo anchor("/user", '<i class="fa fa-lg fa-times"></i>&nbsp;ยกเลิก', array("class" => "btn btn-danger btn-lg"))
            ?>
        </div>
        <?= $form['form_close'] ?>
    </div>



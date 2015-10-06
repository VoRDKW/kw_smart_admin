<script>
    jQuery(document).ready(function ($) {
        $("#SidebarMenu ul li").removeAttr('class');
        $("#btnUser").addClass("active");
    });
</script>

<div class="container-fluid">
    <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
    <div class="row">
        <div class="col-md-12">
            <h2 class="page-header"><?= $page_title ?><small><?= $page_title_small ?></small></h2>            
        </div>
    </div>
    <div class="row">
        <?= $form['form_open'] ?>
        <div class="col-md-12">
            <div class="form-group <?= (form_error('PersonalID')) ? 'has-error' : '' ?>">
                <label class="col-sm-2 control-label">เลขที่บัตรประชาชน</label>
                <div class="col-sm-10">            
                    <?= $form['PersonalID'] ?>
                    <?php echo form_error('PersonalID', '<font color="error">', '</font>'); ?>
                </div>
            </div>
            <div class="form-group <?= (form_error('UserName')) ? 'has-error' : '' ?>">
                <label class="col-sm-2 control-label">ชื่อผู้ใช้ :</label>
                <div class="col-sm-10">
                    <?= $form['UserName'] ?>
                    <?php echo form_error('UserName', '<font color="error">', '</font>'); ?>
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
            <div class="form-group <?= (form_error('ImageUserID')) ? 'has-error' : '' ?>">
                <label class="col-sm-2 control-label">รูปภาพ :</label>
                <div class="col-sm-10">
                    <?= $form['ImageUserID'] ?>
                    <?php echo form_error('ImageUserID', '<font color="error">', '</font>'); ?>
                </div>
            </div>  
        </div>
        <div class="col-md-12 center">
            <button  type="submit" class="btn btn-success"><i class="fa fa-save fa-lg"></i>&nbsp;บันทึก</button>
            <a href="<?= base_url("user") ?>" type="reset" class="btn btn-danger"><i class="fa fa-times fa-lg"></i>&nbsp;ยกเลิก</a>
        </div>
        
        <?= $form['form_close'] ?>
    </div>
</div>


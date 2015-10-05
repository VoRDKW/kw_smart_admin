<script>
    jQuery(document).ready(function ($) {
        $("#SidebarMenu ul li").removeAttr('class');
        $("#btnBuilding").addClass("active");
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
        <div class="col-md-12">
            <form class="form-horizontal">           
                <div class="form-group <?= (form_error('PersonalID')) ? 'has-error' : '' ?>">
                    <label class="col-sm-2 control-label">เลขประจำตัวประชาชน :</label>
                    <div class="col-sm-10">    
                        <?=$form['PersonalID']?>
                         <?php echo form_error('PersonalID', '<font color="error">', '</font>'); ?>
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">ชื่อผู้ใช้ :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="UserName" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">รหัสผ่าน :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="Password" placeholder=" ">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">ชื่อ :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="Fname" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">นามสกุล :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="Lname" placeholder=" ">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">เบอร์โทรศัพท์ :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="MobilePhone" placeholder=" ">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">อีเมล :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="Email" placeholder="">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">สถานะผู้ใช้ :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="RoleID" placeholder=" ">
                    </div>
                </div>
                <div class="form-group">
                    <label class="col-sm-2 control-label">รูปภาพ :</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" name="ImageUserID" placeholder=" ">
                    </div>
                </div>                            
                <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                        <button type="submit" class="btn btn-primary">เพิ่มสมาชิก</button>
                        <button type="reset" class="btn btn-danger">รีเซ็ต</button>
                    </div>
                </div>
            </form>                               

        </div>
        <div class="row">
            <div class="col-md-12 center">            
                <?= anchor("/user", '<i class="fa fa-lg fa-times"></i>&nbsp;ยกเลิก', array("class" => "btn btn-danger btn-lg")) ?>
            </div>
        </div>

    </div>



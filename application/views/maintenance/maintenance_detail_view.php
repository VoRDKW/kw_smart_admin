<script>
    jQuery(document).ready(function ($) {
        $("#SidebarMenu ul li").removeAttr('class');
        $("#btnMaintenance").addClass("active");
    });
</script>

<div class="container-fluid">
    <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
    <div class="row">
        <div class="col-md-12">
            <h2 class="page-header"><?= $page_title ?><small><?= $page_title_small ?></small></h2>            
        </div>
        <div class="col-md-12">
            <div class="col-md-6">
                <div class="panel panel-default" style="box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);">                                                                               
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <?= $Job['JobName'] ?> 
                            <p class="pull-right">หมายเลขงานที่ : 001</p> 
                        </h3>                            
                    </div>
                    <div class="panel-body">
                        <div class="col-md-9">
                            <dl class="dl-horizontal">
                                <dt>วันที่แจ้ง :</dt>
                                <dd><?= $Job['CreateDate'] ?></dd>
                                <dt>ผู้แจ้ง :</dt>
                                <dd>นายชาติชาย สมหญิง</dd>
                                <dt>สถานที่ :</dt>
                                <dd>อาคาร 1 ห้อง 118 ชั้น 1</dd>
                                <dt>ปัญหาที่แจ้ง :</dt>
                                <dd>คอมเปิดไม่ติด มีปัญหาที่คอมเพสเซอร์ ขั้วระหว่างคาโอดและแอดโหนด เปิกปัญหาในการเชื่อมต่อ ไฟซ็อตระหว่างทาเดินไฟไปยังเมมเมอรี่</dd>                                                     
                            </dl>
                        </div>                                          
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">การแก้ปัญหา</h3>
                    </div>
                    <div class="panel-body">
                        <?= $form['form_open'] ?>
                        <div class="form-group <?= (form_error('SolveDetail')) ? 'has-error' : '' ?>">
                            <label for="">รายละเอียดการแก้ปัญหา</label>
                            <?= $form['SolveDetail'] ?>
                            <?php echo form_error('SolveDetail', '<font color="error">', '</font>'); ?> 
                        </div>
                        <div class="col-md-12 text-center">
                            <a href="<?= base_url("maintenance/update_status/" . $Job['JobID'] . "/2") ?>" class="btn btn-info">ดำเนินการ</a>
                            <a href="<?= base_url("maintenance/update_status/" . $Job['JobID'] . "/4") ?>" class="btn btn-danger">ไม่สามารถแก้ไขได้</a>
                            <button type="submit" class="btn btn-primary">ดำเนินการเสร็จสิ้น</button>
                        </div>
                        <?= $form['form_close'] ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">ข้อมูลผู้เเจ้ง</h3>
                    </div>
                    <div class="panel-body">
                        <dl class="dl-horizontal">
                            <dt>ชื่อ</dt>
                            <dd><?= $Member['Fname'] . '  ' . $Member['Lname'] ?></dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">รูปภาพ</h3>
                    </div>
                    <div class="panel-body">
                        <?php
                        foreach ($images as $image) {
                            ?>
                            <img height="200" src="<?= $img_src . $image['ImageThumbPath'] ?>"  class="img-thumbnail">
                        <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
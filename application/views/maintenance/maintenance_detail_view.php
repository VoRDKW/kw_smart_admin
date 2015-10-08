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
        <?php
        if ($Job['JobStatusID'] == 1) {
            $class = 'panel-warning';
            $loadicon = '<i class="fa fa-circle-o-notch fa-spin"></i>';
        } elseif ($Job['JobStatusID'] == 2) {
            $class = 'panel-info';
            $loadicon = '<i class="fa fa-spinner fa-pulse"></i>';
        } elseif ($Job['JobStatusID'] == 3) {
            $class = 'panel-success';
            $loadicon = '<i class="fa fa-check"></i>';
            $drop = 'hidden';
        } else {
            $class = 'panel-danger';
            $loadicon = '<i class="fa fa-ban"></i>';
        }
        ?>
        <div class="col-md-12">
            <div class="col-md-6">
                <div class="panel <?= $class?>" style="box-shadow: 0 2px 5px rgba(0, 0, 0, 0.15);">                                                                               
                    <div class="panel-heading">
                        <h3 class="panel-title"><?= $Job['JobName'] ?></h3> 
                        <p class="pull-right" style="margin-top:-15px;"><?= $Job['JobStatusName'].' '.$loadicon ?></p>                            
                    </div>
                    <div class="panel-body">
                        <div class="col-md-9">
                            <dl class="dl-horizontal">
                                <dt>หมายเลขงานที่ :</dt>
                                <dd><?= $Job['JobID'] ?></dd>
                                <dt>วันที่แจ้ง :</dt>
                                <dd><?= $Job['CreateDate'] ?></dd>                           
                                <dt>สถานที่ :</dt>
                                <dd>อาคาร 1 ห้อง 118 ชั้น 1</dd>
                                <dt>ปัญหาที่แจ้ง :</dt>
                                <dd><?= $Job['Detail'] ?></dd>                                                     
                            </dl>
                        </div>                                          
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel <?= $class?>">
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
        </div>
        <div class="col-md-12">            
            <div class="col-md-6">
                <div class="panel <?= $class?>">
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
            <div class="col-md-6">
                <div class="panel <?= $class?>">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a class="collapsed" data-toggle="collapse" href="#down-form"  aria-expanded="true" aria-controls="down-form">
                                ดำเนินการซ่อม
                            </a>
                        </h4>
                        <?php
                        if ($Job['JobStatusID'] == 2||$Job['JobStatusID'] == 3) {
                            $expand = 'in';
                        } else {
                            $expand = '';
                            ?>
                            <a href="<?= base_url("maintenance/update_status/" . $Job['JobID'] . "/2") ?>" style="color:white;margin-top:-24px" class="btn btn-info pull-right">ดำเนินการซ่อม</a>
                            <?php
                        }
                        ?> 
                    </div>
                    <div id="down-form" class="panel-collapse collapse <?= $expand ?>">
                        <div class="panel-body">
                            <?php if ($Job['SolveDetail'] == '') { ?>
                                <?= $form['form_open'] ?>
                                <div class="form-group <?= (form_error('SolveDetail')) ? 'has-error' : '' ?>">
                                    <label>รายละเอียดการแก้ปัญหา</label>
                                    <?= $form['SolveDetail'] ?>
                                    <?php echo form_error('SolveDetail', '<font color="error">', '</font>'); ?> 
                                </div>
                                <div class="pull-right">                            
                                    <a href="<?= base_url("maintenance/update_status/" . $Job['JobID'] . "/4") ?>" class="btn btn-danger">ไม่สามารถแก้ไขได้</a>
                                    <button type="submit" class="btn btn-success">ดำเนินการเสร็จสิ้น</button>
                                </div>
                                <?= $form['form_close'] ?>
                                <?php } else {
                                ?>
                                <dl class="dl-horizontal">
                                    <dt>การแก้ปัญหา :</dt>
                                    <dd><?= $Job['SolveDetail'] ?></dd>                                                                                   
                                </dl>
                                <?php
                            }
                            ?>
                        </div>
                    </div>
                </div>
                <a href="<?= base_url('maintenance')?>" class="btn btn-default pull-right"><i class="fa fa-reply"></i> กลับ</a>
            </div>
        </div>
    </div>
</div>
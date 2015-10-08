<script>
    jQuery(document).ready(function ($) {
        $("#SidebarMenu ul li").removeAttr('class');
        $("#btnMaintenance").addClass("active");

        $('.datepicker').datepicker({
            language: 'th-th',
            format: 'd MM yyyy'
        });
    });
</script>
<div class="container-fluid">
    <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
    <div class="row">
        <div class="col-md-12">
            <h2 class="page-header"><?= $page_title ?><small><?= $page_title_small ?></small></h2>            
        </div>
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <i class="fa fa-search"></i>&nbsp;
                    ค้นหา
                </div>
                <div class="panel-body">
                    <div class="col-md-12 text-center">
                        <?= $form['form_open'] ?>
                        <div class="form-group">
                            <label>สถานะ : </label>
                            <?= $form['JobStatusID'] ?>
                        </div>
                        <div class="form-group">
                            <label>&nbsp;วันที่ : </label>
                            <?= $form['CreateDate'] ?>
                        </div>

                        <button type="submit" class="btn btn-default"><i class="fa fa-fw fa-search"></i>&nbspแสดงข้อมูล</button>
                        <button type="reset" class="btn btn-default" value="Reset">ล้างข้อมูล</button>                
                        <?= $form['form_close'] ?>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <?php
            foreach ($data as $Job) {
                $JobID = $Job['JobID'];

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
                <div class="panel <?= $class ?>">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            หัวข้อ : <?= $Job['JobName'] ?>
                            <p class="pull-right"><?= $Job['JobStatusName'].' '.$loadicon ?></p>
                        </h3>                   
                    </div>
                    <div class="panel-body">
                        <div class="col-sm-12">
                            <dl class="dl-horizontal">         
                                    <dt>หมายเลขงานที่ :</dt>
                                    <dd> <?= $JobID ?></dd>
                                    <dt>วันที่แจ้ง :</dt>
                                    <dd><?= $Job['CreateDate'] ?></dd>
                                    <dt>ผู้แจ้ง :</dt>
                                    <dd><?= $Job['MemberID'] ?></dd>
                                    <dt>สถานที่ :</dt>
                                    <dd>อาคาร <?= $Job['BuildingID'] ?> ชั้น <?= $Job['Floor'] ?> ห้อง <?= $Job['RoomNO'] ?></dd>
                                    <dt>ปัญหาที่แจ้ง :</dt>
                                    <dd><?= $Job['Detail'] ?></dd>
                              </dl>
                        </div>
                        <div class="col-md-12">
                                <div class="right">
                                    <a href="<?= base_url("maintenance/prove/$JobID") ?>" class="btn btn-success <?php $drop ?>" type="submit">
                                        <i class="fa fa-fw fa-calendar-check-o"></i> 
                                        ซ่อมเดี๋ยวนี้
                                    </a>
                                </div>
                        </div>
                    </div>
                </div>
            <?php
            }
            ?>
        </div>
    </div>
</div>
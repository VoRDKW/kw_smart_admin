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
            
        </div>
        <div class="col-md-12">
            <?php
            foreach ($data as $Job) {
                $JobID = $Job['JobID'];
                ?>
                <div class="panel panel-danger">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            <?= $Job['CreateDate'] ?>
                            <p class="pull-right"><?= $Job['JobStatusName'] ?></p>
                        </h3>                   
                    </div>
                    <div class="panel-body">
                        <div class="col-md-9">
                            <dl class="dl-horizontal">
                                <dt>วันที่แจ้ง :</dt>
                                <dd>วันนี้ บ่ายๆๆ</dd>
                                <dt>ผู้แจ้ง :</dt>
                                <dd>นายชาติชาย สมหญิง</dd>
                                <dt>สถานที่ :</dt>
                                <dd>อาคาร 1 ห้อง 118 ชั้น 1</dd>
                                <dt>ปัญหาที่แจ้ง :</dt>
                                <dd>คอมเปิดไม่ติด มีปัญหาที่คอมเพสเซอร์ ขั้วระหว่างคาโอดและแอดโหนด เปิกปัญหาในการเชื่อมต่อ ไฟซ็อตระหว่างทาเดินไฟไปยังเมมเมอรี่</dd>
                            </dl>
                        </div>
                        <div class="col-md-3 right">
                            <p>หมายเลขงานที่ : <?= $JobID ?></p>
                            <p>สถานะ : ใหม่</p>
                        </div>
                        <div class="col-md-12">
                            <div class="right">
                                <a href="<?= base_url("maintenance/prove/$JobID") ?>" class="btn btn-success" type="submit">
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


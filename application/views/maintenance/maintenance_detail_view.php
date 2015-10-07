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
                        <h3 class="panel-title">หัวข้อ :</h3>                   
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
                            <p>หมายเลขงานที่ : 001</p>
                            <p>สถานะ : ใหม่</p>
                        </div>                   
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">ข้อมูลสถานที่</h3>
                    </div>
                    <div class="panel-body">
                        <dl class="dl-horizontal">
                            <dt></dt>
                            <dd></dd>
                        </dl>
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
                            <dt></dt>
                            <dd></dd>
                        </dl>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h3 class="panel-title">ไฟล์แนบ</h3>
                    </div>
                    <div class="panel-body">
                        <dl class="dl-horizontal">
                            <dt></dt>
                            <dd></dd>
                        </dl>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-12">
            <div class="panel panel-default">               
                <div class="panel-body right">
                    <button class="btn btn-success">บันทึก</button>
                    <button class="btn btn-default">กลับ</button>
                </div>
            </div>
        </div>
    </div>
</div>
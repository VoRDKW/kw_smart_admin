<script>
    jQuery(document).ready(function ($) {
        $("#SidebarMenu ul li").removeAttr('class');
        $("#btnMaintenance").addClass("active");
    });
</script>
<div class="container-fluid">
    <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
    <div class="row">
        <div class="pull-right">
            <a href="<?= base_url('maintenance/add') ?>" class="btn btn-success btn-lg "><i class="fa fa-lg fa-plus-circle"></i>&nbsp;เพิ่มงานซ่อม</a>              
        </div>
        <div class="col-md-12">
            <h2 class="page-header"><?= $page_title ?><small><?= $page_title_small ?></small></h2>            
        </div>
        <div class="col-md-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title">หัวข้อ :</h3>                   
                </div>
                <div class="panel-body">
                    <div class="col-md-9">

                    </div>
                    <div class="col-md-3">
                        <p>สถานะ : ใหม่</p>
                    </div>
                    <div class="col-md-12">
                        <div class="right">
                            <button class="btn btn-success" type="submit">ซ่อมเดี๋ยวนี้</button>                        
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


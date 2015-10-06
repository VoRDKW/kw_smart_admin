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
    </div>
    <div class="row">
        <div class="col-md-12">
            <form class="form-horizontal">
                <div class="form-group">
                    <label>หัวข้อ :</label>
                    <?= $form['JobName'] ?>
                    <?php echo form_error('JobName', '<font color="error">', '</font>'); ?>           
                </div>
                <div class="form-group">
                    <label>สถานที่ :</label>
                    <?= $form['RoomNo'] ?>
                    <?php echo form_error('RoomNo', '<font color="error">', '</font>'); ?>           
                </div>
                <div class="form-group">
                    <label>เลขที่กว. :</label>
                    <?= $form['NumberKWDevice'] ?>
                    <?php echo form_error('NumberKWDevice', '<font color="error">', '</font>'); ?>           
                </div>
                <div class="form-group">
                    <label>แนบรูปภาพ :</label>
                    <?= $form['ImageName'] ?>
                    <?php echo form_error('ImageName', '<font color="error">', '</font>'); ?>           
                </div>
                <div class="form-group">
                    <label>ปัญหาที่แจ้ง :</label>
                    <?= $form['JobDetail'] ?>
                    <?php echo form_error('JobDetail', '<font color="error">', '</font>'); ?>           
                </div>
                <div class="form-group">
                    <label>หมายเหตุ :</label>
                    <?= $form['Note'] ?>
                    <?php echo form_error('Note', '<font color="error">', '</font>'); ?>           
                </div>
            </form>
        </div>
    </div>
</div>


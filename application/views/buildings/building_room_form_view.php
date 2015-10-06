<script>
    jQuery(document).ready(function ($) {
        $("#SidebarMenu ul li").removeAttr('class');
        $("#btnBuilding").addClass("active");
    });
</script>
<script>
    jQuery(document).ready(function ($) {
        $("#SidebarMenu ul li").removeAttr('class');
        $("#btnBuilding").addClass("active");
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
            <div class="form-inline">
                <div class="form-group">
                    <label>อาคาร</label>
                    <?= $form['BuildingID'] ?>
                    <?php echo form_error('BuildingID', '<font color="error">', '</font>'); ?>
                </div>
                <div class="form-group">
                    <label>ชื่ออาคาร</label>
                    <?= $form['BuildingName'] ?>
                    <?php echo form_error('BuildingName', '<font color="error">', '</font>'); ?>
                </div>
                <div class="form-group">
                    <label>ชั้น</label>
                    <?= $form['NumberFloor'] ?>
                    <?php echo form_error('NumberFloor', '<font color="error">', '</font>'); ?>
                </div>
            </div>
            <div class="col-md-6">
                <div class="form-horizontal">
                    <div class="form-group">
                    <label>หมายเลขห้อง</label>
                    <?= $form['RoomNo'] ?>
                    <?php echo form_error('RoomNo', '<font color="error">', '</font>'); ?>
                </div>
                <div class="form-group">
                    <label>ชื่อห้อง</label>
                    <?= $form['RoomName'] ?>
                    <?php echo form_error('RoomName', '<font color="error">', '</font>'); ?>
                </div>
                <div class="form-group">
                    <label>จำนวนที่นั่ง</label>
                    <?= $form['NumberSeat'] ?>
                    <?php echo form_error('NumberSeat', '<font color="error">', '</font>'); ?>
                </div>
                </div>           
            </div>
            <div class="col-md-6">
                <div class="form-group">
                    <label>อื่นๆ</label>
                    <?= $form['RoomNote'] ?>
                    <?php echo form_error('BuildingName', '<font color="error">', '</font>'); ?>
                </div>
            </div>
            <div class="col-md-12">
                <a href="#" type="submit" class="btn btn-success">เพิ่ม</a>
                <a href="<?= base_url("building") ?>" type="reset" class="btn btn-danger">ยกเลิก</a>
            </div>
            <?= $form['form_close'] ?>
        </div>
    </div>

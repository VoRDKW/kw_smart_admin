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

            <div class="form-group">
                <label>หมายเลขอาคาร</label>
                <?= $form['BuildingNo'] ?>
                <?php echo form_error('BuildingNo', '<font color="error">', '</font>'); ?>
            </div>
            <div class="form-group">
                <label>ชื่ออาคาร</label>
                <?= $form['BuildingName'] ?>
                <?php echo form_error('BuildingName', '<font color="error">', '</font>'); ?>
            </div>
            <div class="form-group">
                <label>จำนวนชั้น</label>
                <?= $form['NumberFloor'] ?>
                <?php echo form_error('NumberFloor', '<font color="error">', '</font>'); ?>
            </div>
            <div class="form-group">
                <label>อื่นๆ</label>
                <?= $form['Note'] ?>
                <?php echo form_error('Note', '<font color="error">', '</font>'); ?>
            </div>           
        </div>
        <div class="col-md-12 center">
                <button  type="submit" class="btn btn-success">บันทึก</button>>
                <a href="<?=  base_url("building")?>" type="reset" class="btn btn-danger">ยกเลิก</a>
            </div>
        <?= $form['form_close'] ?>
    </div>
</div>
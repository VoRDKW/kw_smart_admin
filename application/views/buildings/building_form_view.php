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
            <h2 class="page-header"><?= $page_title ?><small><?=$page_title_small?></small></h2>            
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">เพิ่ม/แก้ไข อาคาร</h3>
                </div>
                <div class="panel-body">
                    <form class="form-inline">
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
                        <div class="form-group">
                            <a href="#" type="submit" class="btn btn-success">บันทึก</a>
                            <a href="#" type="reset" class="btn btn-danger">ยกเลิก</a>
                        </div>
                    </form>
                </div>
             </div>
        </div>
    </div>
</div>
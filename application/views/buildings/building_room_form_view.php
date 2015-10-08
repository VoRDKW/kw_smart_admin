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
        <div class="col-md-offset-1 col-md-10">                
            <div class="form-group">
                <label class="col-sm-2 control-label <?= (form_error('BuildingID')) ? 'has-error' : '' ?>">อาคาร:</label>
                <div class="col-sm-2">
                    <?= $form['BuildingID'] ?>
                    <?php echo form_error('BuildingID', '<font color="error">', '</font>'); ?>   
                </div>
                <label class="col-sm-2 control-label <?= (form_error('BuildingName')) ? 'has-error' : '' ?>">ชื่ออาคาร</label>
                <div class="col-sm-2">
                    <?= $form['BuildingName'] ?>
                    <?php echo form_error('BuildingName', '<font color="error">', '</font>'); ?>
                </div>
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label <?= (form_error('Floor')) ? 'has-error' : '' ?>">ชั้น</label>
                <div class="col-sm-2">
                    <?= $form['Floor'] ?>
                    <?php echo form_error('Floor', '<font color="error">', '</font>'); ?>
                </div>
                <label class="col-sm-2 control-label <?= (form_error('RoomNO')) ? 'has-error' : '' ?>">หมายเลขห้อง</label>
                <div class="col-sm-2">
                    <?= $form['RoomNO'] ?>
                    <?php echo form_error('RoomNO', '<font color="error">', '</font>'); ?>           
                </div>
            </div> 
            <div class="form-group">
                <label class="col-sm-2 control-label <?= (form_error('RoomName')) ? 'has-error' : '' ?>">ชื่อห้อง</label>
                <div class="col-sm-2">
                    <?= $form['RoomName'] ?>
                    <?php echo form_error('RoomName', '<font color="error">', '</font>'); ?>
                </div>  
                <label class="col-sm-2 control-label <?= (form_error('NumberSeat')) ? 'has-error' : '' ?>">จำนวนที่นั่ง</label>
                <div class="col-sm-2">
                    <?= $form['NumberSeat'] ?>
                    <?php echo form_error('NumberSeat', '<font color="error">', '</font>'); ?>
                </div>                       
            </div>
            <div class="form-group">
                <label class="col-sm-2 control-label <?= (form_error('RoomNote')) ? 'has-error' : '' ?>">อื่นๆ</label>
                <div class="col-sm-6">
                    <?= $form['RoomNote'] ?>
                    <?php echo form_error('RoomNote', '<font color="error">', '</font>'); ?>
                </div>                    
            </div>
        </div>
    </div><hr/>        
    <div class="col-md-12 center">
        <button  type="submit" class="btn btn-success"><i class="fa fa-save fa-lg"></i>&nbsp;บันทึก</button>
        <a href="<?= base_url("building") ?>" type="reset" class="btn btn-danger"><i class="fa fa-times fa-lg"></i>&nbsp;ยกเลิก</a>
    </div>
    <?= $form['form_close'] ?>
</div>
</div>

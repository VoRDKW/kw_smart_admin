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
        <div class="col-md-6">
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
                    <label>ปัญหาที่แจ้ง :</label>
                    <?= $form['JobDetail'] ?>
                    <?php echo form_error('JobDetail', '<font color="error">', '</font>'); ?>           
                </div>
                <div class="form-group">
                    <label>หมายเหตุ :</label>
                    <?= $form['Note'] ?>
                    <?php echo form_error('Note', '<font color="error">', '</font>'); ?>           
                </div>                
                <div class="form-group right">
                    <button class="btn btn-primary" type="submit"><i class="fa fa-fw fa-check"></i>เพิ่มงาน</button>
                    <button class="btn btn-danger" type="reset"><i class="fa fa-fw fa-times"></i>ยกเลิก</button>
                </div>
            </form>
        </div>
        <div class="col-md-6"
             <form class="form-horizontal">                 
                <div class="form-group">
                    <label>แนบรูปภาพ :</label>
                    <?= $form['ImageName'] ?>
                    <?php echo form_error('ImageName', '<font color="error">', '</font>'); ?>           
                </div>
                <img id="image"class="img-responsive"/>
            </form>
        </div>
    </div>
</div>
<script>
    document.getElementById("files").onchange = function () {
        var reader = new FileReader();

        reader.onload = function (e) {
            // get loaded data and render thumbnail.
            document.getElementById("image").src = e.target.result;
        };

        // read the image file as a data URL.
        reader.readAsDataURL(this.files[0]);
    };
</script>


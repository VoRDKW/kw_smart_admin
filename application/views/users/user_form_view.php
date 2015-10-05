<script>
    jQuery(document).ready(function ($) {
        $("#SidebarMenu ul li").removeAttr('class');
        $("#btnUser").addClass("active");
    });
</script>

<!--<div class="form-group <? (form_error('VTID')) ? 'has-error' : '' ?>">                                  
                                <label for="" class="col-sm-4 control-label">ประเภทรถ</label>
                                <div class="col-sm-4">
                                    <?php //echo $form['VTID'] ?>
                                </div>  
                                <div class="col-sm-4">
                                    <?php //echo form_error('VTID', '<font color="error">', '</font>'); ?>
                                </div>
                            </div>-->

<div class="container-fluid">
    <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
    <div class="row">
        <div class="col-md-12">
            <h1 class="page-header">เพิ่ม/แก้ไข ผู้ใช้งานระบบ</h1>            
        </div>
    </div>
    <div class="row">
        <div class="col-md-12 center">            
            <?=  anchor("/user",'<i class="fa fa-lg fa-times"></i>&nbsp;ยกเลิก',array("class"=>"btn btn-danger btn-lg"))?>
        </div>
    </div>
</div>



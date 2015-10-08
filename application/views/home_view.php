<script>
    jQuery(document).ready(function ($) {
        $("#mainmenu ul li").removeAttr('class');
        $("#btnRoute").addClass("active");
        $(".th-footer-bottom").addClass("hidden");
    });
</script>
<div class="container-fluid">
    <div class="row" style="height: 1024px;">
        <div class="col-md-12">
            <h1 class="page-header">หน้าหลัก ผู้ดูเเลระบบ</h1>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-fw fa-bars"></i>คิวงาน</h3>                    
                    <div class="col-xs-7 pull-right" style="margin-top:-25px">
                        <?= $form['form_open'] ?>
                        <div class="form-group">

                            <div class="col-xs-2">
                                <?= $form['JobStatusID'] ?>
                            </div>
                        </div>
                        <!--<button type="submit" class="btn btn-default col-xs-1"><i class="fa fa-fw fa-search"></i></button>-->                                      
                        <?= $form['form_close'] ?>              	
                    </div>                   
                </div>         
                <table class="table">                    
                    <thead>
                    <th class="center" width="20%">เลขที่งาน</th>
                    <th class="center" width="50%">หัวข้อ</th>
                    <th class="center" width="30%">สถานะ</th>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($Jobs as $Job) {
                        ?>
                    <a href="<?= base_url('maintenance/prove/$Job["JobID"]') ?>">
                        <tr>
                            <td class="text-center"><?= $Job['JobID'] ?></td>
                            <td class="text-center"><?= $Job['JobName'] ?></td>
                            <td class="text-center"><?= $Job['JobStatusName'] ?></td>
                        </tr>
                    </a>	
                    <?php } ?>
                    </tbody>
                </table>                
            </div>
        </div>
        <div class="col-md-6">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><i class="fa fa-fw fa-plus-square"></i>งานวันนี้</h3>
                </div>                
                <table class="table">                    
                    <thead>
                    <th class="center" width="20%">เลขที่งาน</th>
                    <th class="center" width="50%">หัวข้อ</th>
                    <th class="center" width="30%">สถานะ</th>
                    </thead>
                    <tbody> 
                        <tr>
                            <td class="text-center" colspan="3">- ไม่มีงานแจ้งซ่อมในวันนี้ -</td>
                        </tr>
                        </a>                     
                    </tbody>
                </table>         
            </div>
        </div>
    </div>
</div>

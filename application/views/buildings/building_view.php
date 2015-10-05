<script>
    jQuery(document).ready(function ($) {
        $("#SidebarMenu ul li").removeAttr('class');
        $("#btnBuilding").addClass("active");
    });
</script>

<div class="container-fluid">
    <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
    <div class="row">
        <div class="pull-right">
            <a href="<?= base_url('building/add_building') ?>" class="btn btn-success btn-lg "><i class="fa fa-lg fa-plus-circle"></i>&nbsp;อาคาร สถานที่</a>              
        </div>
        <div class="col-md-12">
            <h2 class="page-header"><?= $page_title ?><small><?= $page_title_small ?></small></h2>            
        </div>
    </div>
    <div class="row">
        <div class="panel panel-info">
            <div class="panel-heading">
                <h3 class="panel-title">อาคาร 3 ชื่ออาคาร </h3>

            </div>
            <div class="panel-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th style="width: 20%">หมายเลขห้อง</th>
                            <th style="width: 45%">ชื่อห้อง</th>
                            <th style="width: 15%">จำนวนที่นั่ง</th>
                            <th style="width: 20%"></th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td colspan="3"><strong>ชั้นที่ 1</strong></td>
                            <td class="text-center">
                                  <a href="<?= base_url('building/add_room') ?>" class="btn btn-default btn-sm "><i class="fa fa-lg fa-plus-square-o"></i>&nbsp;ห้อง</a>                            
                            </td>
                        </tr>
                        <tr>
                            <td class="text-center">123</td>
                            <td>ชื่อห้อง</td>
                            <td class="text-center">30</td>
                            <td class="text-center">
                                <i class="fa fa-edit"/>
                                &nbsp;
                                <i class="fa fa-trash"/>
                            </td>
                        </tr>
                    </tbody>
                </table>
                <hr/>
                <div class="col-md-12 text-right">

                <a class="btn btn-warning">แก้ไข</a>

            </div>
            </div>        
        </div>
    </div>
</div>
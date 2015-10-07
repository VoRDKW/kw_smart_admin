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
        <div class="col-md-12">
            <table class="table table-bordered">
                <thead class="table table-bordered">
                <th class="center" width="5%">ลำดับ</th>
                <th class="center" width="20%">รหัสงาน</th>
                <th class="center" width="30%">หัวข้อ</th>
                <th class="center" width="20%">วันที่แจ้งซ่อม</th>
                <th class="center" width="20%">สถานะ</th>
                <th class="center" width="5%"></th>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-center" colspan="6">- คุณยังไม่มีงานแจ้งซ่อมใดๆ -</td> 
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>


<script>
    jQuery(document).ready(function ($) {
        $("#SidebarMenu ul li").removeAttr('class');
        $("#btnUser").addClass("active");
    });
</script>

<div class="container-fluid">
    <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
    <div class="row">
        <div class="pull-right">
            <a href="<?= base_url('user/add') ?>" class="btn btn-success btn-lg "><i class="fa fa-lg fa-user-plus"></i>&nbsp;เพิ่มผู้ใช้งานระบบ</a>              
        </div>
        <div class="col-md-12">
            <h2 class="page-header"><?= $page_title ?><small><?= $page_title_small ?></small></h2>            
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <table class=" table table-hover">
                <thead>
                    <tr>
                        <th style="width: 15%">Username</th>
                        <th style="width: 15%">รหัสประจำตัวประชาชน</th>
                        <th style="width: 20%">E-mail</th>
                        <th style="width: 20%">ชื่อ-นามสกุล</th>
                        <th style="width: 15%">เข้าใช้งานล่าสุด</th>
                        <th style="width: 15%"></th>
                    </tr>
                </thead>
                <tbody>
                    <?php 
                    foreach ($data as $user) { 
                        $MemberID = $user['MemberID'];
                    ?>
                    <tr>
                        <td class="text-center"><?=$user['UserName']?></td>
                        <td class="text-center"><?=$user['PersonalID']?></td>
                        <td class="text-center"><?=$user['Email']?></td>
                        <td><?=$user['Fname'].' '.$user['Lname']?></td>
                        <td class="text-center"><?=$user['LastLogin']?></td>
                        <td class="text-center">
                           
                            <a href="<?=  base_url("user/edit/$MemberID")?>" class="btn btn-info btn-sm"><i class="fa fa-edit"></i></a>
                            &nbsp;
                            <a href="<?=  base_url("user/")?>" class="btn btn-danger btn-sm"><i class="fa fa-times"></i></a>
                            
                        </td>
                    </tr>
                    <?php } ?>
                </tbody>
            </table>
        </div>
    </div>
</div>

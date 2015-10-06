<script>
    jQuery(document).ready(function ($) {
        $("#SidebarMenu ul li").removeAttr('class');
        $("#btnUser").addClass("active");
    });
</script>
<div class="container-fluid">
    <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
    <div class="row">
        <div class="col-md-12">
            <div class="pull-right">
                <a href="<?= base_url('user/add') ?>" class="btn btn-success btn-lg "><i class="fa fa-lg fa-user-plus"></i>&nbsp;เพิ่มผู้ใช้ระบบ</a>              
            </div>
            <div class="page-header">
                <h2>ผู้ใช้งานระบบ<small>Subtext for header</small></h2>                
            </div>
        </div>
    </div>
    <div class="row">  
        <div class="col-md-12">       
            <form class="navbar-form right" role="search">
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="ค้นหาสมาชิก">
                </div>
                <button type="submit" class="btn btn-default">ค้นหา</button>
            </form>
        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <div class="media">
                <div class="media-left media-middle">
                    <a href="#">
                        <img class="media-object" src="..." alt="...">
                    </a>
                </div>
                <div class="media-body">
                    <h4 class="media-heading">Middle aligned media</h4>
                    <div class="col-md-12">
                        Cras sit amet nibh libero, in gravida nulla. Nulla vel metus scelerisque ante sollicitudin commodo. Cras purus odio, vestibulum in vulputate at, tempus viverra turpis. Fusce condimentum nunc ac nisi vulputate fringilla. Donec lacinia congue felis in faucibus.

Donec sed odio dui. Nullam quis risus eget urna mollis ornare vel eu leo. Cum sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus.
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">        

        <div class="col-md-12">
            <table class="table table-hover table-bordered center">
                <thead>
                <th>เลขประจำตัว</th>
                <th>ชื่อ-นามสกุล</th>
                <th>จัดการ</th>               
                </thead>
                <tbody>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="#"><i class="fa fa-fw  fa-pencil"></i></a>
                            <a href="#"><i class="fa fa-fw  fa-times"></i></a>
                        </td>                                   
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="#"><i class="fa fa-fw  fa-pencil"></i></a>
                            <a href="#"><i class="fa fa-fw  fa-times"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="#"><i class="fa fa-fw  fa-pencil"></i></a>
                            <a href="#"><i class="fa fa-fw  fa-times"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="#"><i class="fa fa-fw  fa-pencil"></i></a>
                            <a href="#"><i class="fa fa-fw  fa-times"></i></a>
                        </td>
                    </tr>
                    <tr>
                        <td></td>
                        <td></td>
                        <td>
                            <a href="#"><i class="fa fa-fw  fa-pencil"></i></a>
                            <a href="#"><i class="fa fa-fw  fa-times"></i></a>
                        </td>
                    </tr>
                </tbody>                           
            </table>
        </div>
    </div>
</div>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="keywords"
              content="">
        <meta name="description"
              content="">
        <meta name="author" content="VoRDcs">  
        <title><?php echo $title; ?></title>

        <!-- Favicons -->
        <link rel="apple-touch-icon-precomposed" sizes="144x144"
              href="<?= asset_url() ?>img/apple-touch-icon-144-precomposed.png<?= '?v=' . $version ?>">
        <link rel="shortcut icon" href="<?= asset_url() ?>img/favicon.ico<?= '?v=' . $version ?>">
        <!-- Bootstrap core CSS ans JS -->

        <?php echo js('pace.min.js?v=' . $version); ?>

        <?php echo css('bootstrap.css?v=' . $version); ?>
        <?php //echo css('bootflat.min.css?v=' . $version); ?>
        <?php echo css('pace.css?v=' . $version); ?>
        <?php echo css('label.min.css?v=' . $version); ?>
        <?php echo css('segment.min.css?v=' . $version); ?>
        <?php echo css('font-awesome.css?v=' . $version); ?>
        <?php echo css('animate.css?v=' . $version); ?>
        <?php //echo css('site.min.css?v=' . $version); ?>
        <?php echo css('sb-admin.css?v=' . $version); ?>
        <?php echo css('/plugins/morris.css?v=' . $version); ?>
        <?php echo css('custom_style.css?v=' . $version)?>
        <!-- js -->
        <?php echo js('jquery.js?v=' . $version); ?>
        <?php echo js('site.min.js?v=' . $version); ?>

        <!--time picker-->    
        <?php //echo css('bootstrap-timepicker.min.css?v=' . $version); ?>  
        <?php //echo js('bootstrap-timepicker.min.js?v=' . $version); ?> 

        <!--date picker-->    
        <?php echo css('datepicker.css?v=' . $version); ?>         
        <?php echo js('bootstrap-datepicker.js?v=' . $version); ?> 
        <!-- thai extension -->
        <?php echo js('bootstrap-datepicker-thai.js?v=' . $version); ?>  
        <?php echo js('/locales/bootstrap-datepicker.th.js?v=' . $version); ?>  
        
        <script type="text/javascript">
            $(window).scroll(function () {
                if ($(this).scrollTop() > $(window).height() / 2) {
                    $('#scroll-top').removeClass('hidden');
                } else {
                    $('#scroll-top').addClass('hidden');
                }
            });
            jQuery(window).load(function () {
                $('.alert').delay(3000).fadeOut();
            });
        </script>

    </head>
    <body>
        <div id="wrapper">

            <!-- Navigation -->
            <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
                <!-- Brand and toggle get grouped for better mobile display -->
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="<?=  base_url('home/')?>">ระบบแจ้งซ่อมบำรุงคอมพิวเตอร์</a>
                </div>
                <!-- Top Menu Items -->
                <ul class="nav navbar-right top-nav">
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown"><i class="fa fa-envelope"></i> <b class="caret"></b></a>
                        <ul class="dropdown-menu message-dropdown">
                            <li class="message-preview">
                                <a href="#">
                                    <div class="media">
                                        <span class="pull-left">
                                            <img class="media-object" src="http://placehold.it/50x50" alt="">
                                        </span>
                                        <div class="media-body">
                                            <h5 class="media-heading"><strong></strong>
                                            </h5>
                                            <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="message-preview">
                                <a href="#">
                                    <div class="media">
                                        <span class="pull-left">
                                            <img class="media-object" src="http://placehold.it/50x50" alt="">
                                        </span>
                                        <div class="media-body">
                                            <h5 class="media-heading"><strong>John Smith</strong>
                                            </h5>
                                            <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="message-preview">
                                <a href="#">
                                    <div class="media">
                                        <span class="pull-left">
                                            <img class="media-object" src="http://placehold.it/50x50" alt="">
                                        </span>
                                        <div class="media-body">
                                            <h5 class="media-heading"><strong>John Smith</strong>
                                            </h5>
                                            <p class="small text-muted"><i class="fa fa-clock-o"></i> Yesterday at 4:32 PM</p>
                                            <p>Lorem ipsum dolor sit amet, consectetur...</p>
                                        </div>
                                    </div>
                                </a>
                            </li>
                            <li class="message-footer">
                                <a href="#">Read All New Messages</a>
                            </li>
                        </ul>
                    </li>                    
                    <li class="dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                            <i class="fa fa-user"></i> 
                            <?= $UserLogin['Fname']?>
                            <b class="caret"></b>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="<?= base_url('user/view')?>"><i class="fa fa-fw fa-user"></i> Profile</a>
                            </li>

                            <li class="divider"></li>
                            <li>
                                <a href="<?= base_url('logout')?>"><i class="fa fa-fw fa-power-off"></i> Log Out</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <!-- Sidebar Menu Items - These collapse to the responsive navigation menu on small screens -->
                <div id="SidebarMenu" class="collapse navbar-collapse navbar-ex1-collapse" >
                    <ul class="nav navbar-nav side-nav">
                        <li id="btnHome" class="active">
                            <a href="<?= base_url('home/') ?>"><i class="fa fa-fw fa-dashboard"></i>&nbsp;Dashboard</a>
                        </li>                                           
                        <li>
                            <a href="javascript:;" data-toggle="collapse" data-target="#MaintenanceMenu"><i class="fa fa-fw fa-laptop"></i>&nbsp;แจ้งซ่อมบำรุงคอมพิวเตอร์<i class="fa fa-fw fa-caret-down"></i></a>
                            <ul id="MaintenanceMenu" class="collapse">
                                <li>
                                    <a href="<?= base_url('maintenance/') ?>">งานของฉัน</a>
                                </li>
<!--                                <li>
                                    <a href="<?= base_url('maintenance/history') ?>">ประวัติซ่อมบำรุง</a>
                                </li>-->
                            </ul>
                        </li>
                         <li id="btnBuilding">
                            <a href="<?= base_url('building/') ?>"><i class="fa fa-fw fa-institution"></i>&nbsp;อาคารสถานที่</a>
                        </li>
                         <li id="btnUser">
                            <a href="<?= base_url('user/') ?>"><i class="fa fa-fw fa-users"></i>&nbsp;ผู้ใช้งานระบบ</a>
                        </li>  
                    </ul>

                </div>
                <!-- /.navbar-collapse -->
            </nav>
            <div id="page-wrapper">

                <!-- Columns start at 50% wide on mobile and bump up to 33.3% wide on desktop -->
                <?php
                if (isset($debug) && $debug != NULL) {
                    echo '<div class="container-fluid" style="margin-top: 10px;">';
                    print '<pre>';
                    print_r($debug);
                    print '</pre>';
                    echo '</div>';
                }

                if (isset($alert) && $alert != NULL) {
                    if ($alert['alert_mode'] == 'success') {
                        echo '<div class="container alert alert-success animated pulse" style="margin-top: 60px;"><strong>สำเร็จ</strong> ';
                    } elseif ($alert['alert_mode'] == 'warning') {
                        echo '<div class="container alert alert-warning animated pulse" style="margin-top: 60px;"><strong>คำเตือน</strong> ';
                    } elseif ($alert['alert_mode'] == 'danger') {
                        echo '<div class="container alert alert-danger animated pulse" style="margin-top: 60px;"><strong>ผิดพลาด</strong> ';
                    } else {
                        echo '<div class="container alert alert-info animated pulse" style="margin-top: 60px;"><strong>เพิ่มเติม</strong> ';
                    }
                    echo $alert['alert_message'];
                    echo '</div>';
                }

                
                ?>
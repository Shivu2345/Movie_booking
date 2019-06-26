<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Movie Ticket Booking</title>

    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('assets/'); ?>images/logo1.png">
    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/');?>css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/');?>css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/');?>css/core.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/');?>css/components.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/');?>css/colors.css" rel="stylesheet" type="text/css">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="<?php echo base_url('assets/');?>js/plugins/loaders/pace.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/');?>js/core/libraries/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/');?>js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/');?>js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="<?php echo base_url('assets/');?>js/plugins/visualization/d3/d3.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/');?>js/plugins/visualization/d3/d3_tooltip.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/');?>js/plugins/forms/styling/switchery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/');?>js/plugins/forms/styling/uniform.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/');?>js/plugins/forms/selects/bootstrap_multiselect.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/');?>js/plugins/ui/moment/moment.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/');?>js/plugins/pickers/daterangepicker.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/');?>js/plugins/ui/nicescroll.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url('assets/');?>js/core/app.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/');?>js/pages/dashboard.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/');?>js/pages/layout_fixed_custom.js"></script>
    <!-- /theme JS files -->

</head>

<body class="navbar-top">

    <!-- Main navbar -->
    <div class="navbar navbar-inverse navbar-fixed-top">
        <div class="navbar-header">
            <a class="navbar-brand" href=""><img src="<?php echo base_url('assets');?>/images/logo1" height="100" width="25" alt="" style="margin-top: 5px;"></a><div style="padding-top: 10px; font-weight: bold; font-size: 20px; ">MOVIES</div>

            <ul class="nav navbar-nav visible-xs-block">
                <li><a data-toggle="collapse" data-target="#navbar-mobile"><i class="icon-tree5"></i></a></li>
                <li><a class="sidebar-mobile-main-toggle"><i class="icon-paragraph-justify3"></i></a></li>
            </ul>
        </div>

        <div class="navbar-collapse collapse" id="navbar-mobile">
            
            <ul class="nav navbar-nav navbar-right">
                <li class="dropdown language-switch">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?php echo base_url('assets');?>/images/flags/gb.png" class="position-left" alt="">
                        English
                        <span class="caret"></span>
                    </a>

                    <ul class="dropdown-menu">
                        <li><a class="deutsch"><img src="<?php echo base_url('assets');?>/images/flags/de.png" alt=""> Deutsch</a></li>
                        <li><a class="ukrainian"><img src="<?php echo base_url('assets');?>/images/flags/ua.png" alt=""> Українська</a></li>
                        <li><a class="english"><img src="<?php echo base_url('assets');?>/images/flags/gb.png" alt=""> English</a></li>
                        <li><a class="espana"><img src="<?php echo base_url('assets');?>/images/flags/es.png" alt=""> España</a></li>
                        <li><a class="russian"><img src="<?php echo base_url('assets');?>/images/flags/ru.png" alt=""> Русский</a></li>
                    </ul>
                </li>

                

                <li class="dropdown dropdown-user">
                    <a class="dropdown-toggle" data-toggle="dropdown">
                        <img src="<?php echo base_url('assets');?>/images/placeholder.jpg" alt="">
                        <span><?php $mysession = _useSession('admin_session');
                                    echo $mysession['username']; ?></span>
                        <i class="caret"></i>
                    </a>

                    <ul class="dropdown-menu dropdown-menu-right">
                        <li><a href="#"><i class="icon-user-plus"></i> My profile</a></li>
                        
                        <li><a href="<?php echo base_url('admin/login/logout'); ?>"><i class="icon-switch2"></i> Logout</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </div>
    <!-- /main navbar -->


    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main sidebar -->
            <div class="sidebar sidebar-main sidebar-fixed">
                <div class="sidebar-content">

                    <!-- User menu -->
                    <div class="sidebar-user">
                        <div class="category-content">
                            <div class="media">
                                <a href="#" class="media-left"><img src="<?php echo base_url('assets');?>/images/placeholder.jpg" class="img-circle img-sm" alt=""></a>
                                <div class="media-body">
                                    <span class="media-heading text-semibold">
                                        <?php $mysession = _useSession('admin_session');
                                            echo $mysession['username']; ?></span>
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- /user menu -->


                    <!-- Main navigation -->
                    <div class="sidebar-category sidebar-category-visible">
                        <div class="category-content no-padding">
                            <ul class="navigation navigation-main navigation-accordion">

                                <!-- Main -->
                                <li class="navigation-header"><span>Main</span> <i class="icon-menu" title="Main pages"></i></li>
                                <li><a href="<?php echo base_url('admin/dashboard'); ?>"><i class="icon-home4"></i> <span>Dashboard</span></a></li>
                                <li><a href="<?php echo base_url('admin/movies'); ?>"><i class="fa fa-film"></i> <span>Movies</span></a></li>
                                <!-- /main -->

                                <!-- Forms -->
                                    <!-- Removed by - shivu -->
                                <!-- /forms -->

                                <!-- Appearance -->
                                    <!-- Removed by - shivu -->
                                <!-- /appearance -->

                                <!-- Layout -->
                                    <!-- Removed by - shivu -->
                                <!-- /layout -->

                                <!-- Data visualization -->
                                    <!-- Removed by - shivu -->
                                <!-- /data visualization -->

                                <!-- Extensions -->
                                    <!-- Removed by - shivu -->
                                <!-- /extensions -->

                                <!-- Tables -->
                                    <!-- Removed by - shivu -->
                                <!-- /tables -->

                                <!-- Page kits -->
                                    <!-- Removed by - shivu -->
                                <!-- /page kits -->

                            </ul>
                        </div>
                    </div>
                    <!-- /main navigation -->

                </div>
            </div>
            <!-- /main sidebar -->


            <!-- Main content -->
            <div class="content-wrapper">

                <!-- Page header -->
                <div class="page-header page-header-default">
                    <div class="page-header-content">
                        <div class="page-title">
                            <h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Home</span> - Dashboard</h4>
                        </div>
                    </div>

                    <div class="breadcrumb-line">
                        <ul class="breadcrumb">
                            <li><a href="index.html"><i class="icon-home2 position-left"></i> Home</a></li>
                            <li class="active">Dashboard</li>
                        </ul>
                    </div>
                </div>
                <!-- /page header -->


                <!-- Content area -->
                <div class="content">

                    <!-- Main charts -->
                        <!-- Removed by - shivu -->
                    <!-- /main charts -->
<?php 
    if ($contents) 
    {
        echo $contents;
    }
?>

                    <!-- Dashboard content -->
                        <!-- Removed by - shivu -->
                    <!-- /dashboard content -->


                    <!-- Footer -->
                        <!-- Removed by - shivu -->
                    <!-- /footer -->

                </div>
                <!-- /content area -->

            </div>
            <!-- /main content -->

        </div>
        <!-- /page content -->

    </div>
    <!-- /page container -->

</body>
</html>

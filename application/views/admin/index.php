<!doctype html>
<html class="no-js" lang="en">

<head>
<meta charset="utf-8">
<meta http-equiv="x-ua-compatible" content="ie=edge">
<title>Movie Ticket Booking</title>
<meta name="description" content="">
<meta name="viewport" content="width=device-width, initial-scale=1">
<!-- favicon
============================================ -->
<link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
<!-- Google Fonts
============================================ -->
<link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
<!-- Bootstrap CSS
============================================ -->
<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/bootstrap.min.css">
<!-- Bootstrap CSS
============================================ -->
<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/font-awesome.min.css">
<!-- nalika Icon CSS
============================================ -->
<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/nalika-icon.css">
<!-- owl.carousel CSS
============================================ -->
<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/owl.carousel.css">
<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/owl.theme.css">
<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/owl.transitions.css">
<!-- animate CSS
============================================ -->
<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/animate.css">
<!-- normalize CSS
============================================ -->
<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/normalize.css">
<!-- meanmenu icon CSS
============================================ -->
<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/meanmenu.min.css">
<!-- main CSS
============================================ -->
<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/main.css">
<!-- morrisjs CSS
============================================ -->
<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/morrisjs/morris.css">
<!-- mCustomScrollbar CSS
============================================ -->
<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/scrollbar/jquery.mCustomScrollbar.min.css">
<!-- metisMenu CSS
============================================ -->
<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/metisMenu/metisMenu.min.css">
<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/metisMenu/metisMenu-vertical.css">
<!-- calendar CSS
============================================ -->
<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/calendar/fullcalendar.min.css">
<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/calendar/fullcalendar.print.min.css">
<!-- style CSS
============================================ -->
<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>style.css">
<!-- responsive CSS
============================================ -->
<link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/responsive.css">
<!-- modernizr JS
============================================ -->
<script src="<?php echo base_url('assets/'); ?>js/vendor/modernizr-2.8.3.min.js"></script>

<!-- round Button -->
<link href="<?php echo base_url('assets/')?>css/core.css" rel="stylesheet" type="text/css">
<link href="<?php echo base_url('assets/')?>css/components.css" rel="stylesheet" type="text/css">
<!-- /round Button -->

<!-- Notification -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
<!-- /Notification -->


</head>

<body>
<!--[if lt IE 8]>
<p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->

<div class="left-sidebar-pro">
<nav id="sidebar" class="">
<div class="sidebar-header">
<a href="index.html"><img class="main-logo" src="<?php echo base_url('assets/'); ?>img/Movie-Tickets.png" height="100" width="100" alt="" /></a>
<strong><img src="<?php echo base_url('assets/'); ?>img/logo/logosn.png" alt="" /></strong>
</div>
<div class="nalika-profile">
<div class="profile-dtl">
<h2><?php $mysession = _useSession('admin_session');
            echo $mysession['username']; ?></h2>
</div>

</div>
<div class="left-custom-menu-adp-wrap comment-scrollbar">
<nav class="sidebar-nav left-sidebar-menu-pro">
<ul class="metismenu" id="menu1">

<li id="removable">
<li><a title="Dashboard" href="<?php echo base_url('admin/dashboard'); ?>">
    <i class="icon nalika-home icon-wrap" aria-hidden="true"></i>
    <span class="mini-sub-pro">Dashboard</span></a></li>
<li><a title="Movie" href="<?php echo base_url('admin/movies'); ?>">
    <i class="fa fa-film icon-wrap" aria-hidden="true"></i>
    <span class="mini-sub-pro">Movies</span></a></li>
</ul>
</li>
</nav>
</div>
</nav>
</div>
<!-- Start Welcome area -->
<div class="all-content-wrapper">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="logo-pro">
<a href="index.html"><img class="main-logo" src="<?php echo base_url('assets/');?>img/logo/logo.png" alt="" /></a>
</div>
</div>
</div>
</div>
<div class="header-advance-area">
<div class="header-top-area">
<div class="container-fluid">
<div class="row">
<div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
<div class="header-top-wraper">
<div class="row">
<div class="col-lg-5 col-md-5 col-sm-12 col-xs-12 pull-right">
<div class="header-right-info">
<ul class="nav navbar-nav mai-top-nav header-right-menu">
<li class="nav-item">
<a href="#" data-toggle="dropdown" role="button" aria-expanded="false" class="nav-link dropdown-toggle">
<i class="icon nalika-user"></i>
<span class="admin-name"><?php echo $mysession['username']; ?></span>
<i class="icon nalika-down-arrow nalika-angle-dw"></i>
</a>
<ul role="menu" class="dropdown-header-top author-log dropdown-menu animated zoomIn">
<li><a href="#"><span class="icon nalika-user author-log-ic"></span> My Profile</a>
</li>
<li><a href="<?php echo base_url('admin/login/logout'); ?>"><span class="icon nalika-unlocked author-log-ic"></span> Log Out</a>
</li>
</ul>
</li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</div>
</div>

<!-- Mobile Menu end -->
<div class="breadcome-area">
<div class="container-fluid">

    <?php  
        if (isset($contents)) 
        {
            echo $contents;
        }
    ?>
    
</div>
</div>
</div>


</div>
<!-- jquery
============================================ -->
<script src="<?php echo base_url('assets/'); ?>js/vendor/jquery-1.12.4.min.js"></script>
<!-- bootstrap JS
============================================ -->
<script src="<?php echo base_url('assets/'); ?>js/bootstrap.min.js"></script>
<!-- wow JS
============================================ -->
<script src="<?php echo base_url('assets/'); ?>js/wow.min.js"></script>
<!-- price-slider JS
============================================ -->
<script src="<?php echo base_url('assets/'); ?>js/jquery-price-slider.js"></script>
<!-- meanmenuJS
============================================ -->
<script src="<?php echo base_url('assets/'); ?>js/jquery.meanmenu.js"></script>
<!-- owl.carousel JS
============================================ -->
<script src="<?php echo base_url('assets/'); ?>js/owl.carousel.min.js"></script>
<!-- sticky JS
============================================ -->
<script src="<?php echo base_url('assets/'); ?>js/jquery.sticky.js"></script>
<!-- scrollUp JS
============================================ -->
<script src="<?php echo base_url('assets/'); ?>js/jquery.scrollUp.min.js"></script>
<!-- mCustomScrollbar JS
============================================ -->
<script src="<?php echo base_url('assets/'); ?>js/scrollbar/jquery.mCustomScrollbar.concat.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>js/scrollbar/mCustomScrollbar-active.js"></script>
<!-- metisMenu JS
============================================ -->
<script src="<?php echo base_url('assets/'); ?>js/metisMenu/metisMenu.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>js/metisMenu/metisMenu-active.js"></script>
<!-- sparkline JS
============================================ -->
<script src="<?php echo base_url('assets/'); ?>js/sparkline/jquery.sparkline.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>js/sparkline/jquery.charts-sparkline.js"></script>
<!-- calendar JS
============================================ -->
<script src="<?php echo base_url('assets/'); ?>js/calendar/moment.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>js/calendar/fullcalendar.min.js"></script>
<script src="<?php echo base_url('assets/'); ?>js/calendar/fullcalendar-active.js"></script>
<!-- float JS
============================================ -->
<script src="<?php echo base_url('assets/'); ?>js/flot/jquery.flot.js"></script>
<script src="<?php echo base_url('assets/'); ?>js/flot/jquery.flot.resize.js"></script>
<script src="<?php echo base_url('assets/'); ?>js/flot/curvedLines.js"></script>
<script src="<?php echo base_url('assets/'); ?>js/flot/flot-active.js"></script>
<!-- plugins JS
============================================ -->
<script src="<?php echo base_url('assets/'); ?>js/plugins.js"></script>
<!-- main JS
============================================ -->
<script src="<?php echo base_url('assets/'); ?>js/main.js"></script>

<!-- Validation -->
<script src="<?php echo base_url('assets/'); ?>js/jquery.validate.min.js"></script>
<!-- /Validation -->
</body>

</html>
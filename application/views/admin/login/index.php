<!doctype html>
<html class="no-js" lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>Login | Movie Ticket Booking</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- favicon
		============================================ -->
    <link rel="shortcut icon" type="image/x-icon" href="<?php echo base_url('/');?>img/Movie-Tickets.png">
    
    <!-- Google Fonts
		============================================ -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,700,900" rel="stylesheet">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/bootstrap.min.css">
    <!-- Bootstrap CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/font-awesome.min.css">
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
    <!-- forms CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/form/all-type-forms.css">
    <!-- style CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>style.css">
    <!-- responsive CSS
		============================================ -->
    <link rel="stylesheet" href="<?php echo base_url('assets/'); ?>css/responsive.css">
    <!-- modernizr JS
		============================================ -->
    <script src="<?php echo base_url('assets/'); ?>js/vendor/modernizr-2.8.3.min.js"></script>

  <style type="text/css" media="screen">
        label.error
        {
            color:#F44336;
        }
  </style>
</head>

<body>
    <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
            <div class="col-md-4 col-md-4 col-sm-4 col-xs-12">
                <div class="text-center m-b-md custom-login">
                    <h3 style="color: white; margin-top: 15%;">LOGIN</h3>
                </div>
                <div class="hpanel">
                    <div class="panel-body">
                        <form action="<?php echo base_url('admin/login/process/'); ?>" id="loginForm" method="post">
                            <div class="form-group">
                                <label class="control-label" for="email">Email Id:</label>
                                <input type="text" placeholder="example@gmail.com" name="email" id="email" class="form-control" value="<?php if (get_cookie('cookie_email')) { echo get_cookie('cookie_email'); } ?>">
                            </div>
                            <div class="form-group">
                                <label class="control-label" for="password">Password:</label>
                                <input type="password"  placeholder="******" name="password" id="password" class="form-control" value="<?php if (get_cookie('cookie_password')) { echo get_cookie('cookie_password'); } ?>">
                            </div>
                            <div class="checkbox login-checkbox">
                                <label class="control-label" for="remember_me">
										<input type="checkbox" style="margin-left: 1px; margin-top: 3px;" name="remember_me" id="remember_me" <?php if (get_cookie('cookie_email')) { ?> checked="checked" <?php } ?>>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Remember me </label>
                            </div>
                            <input type="submit" id="login" name="login" class="btn btn-success btn-block loginbtn" value="Login">
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12"></div>
        </div>
    </div>

    <!-- jquery
		============================================ -->
    <script src="<?php echo base_url('assets/'); ?>js/vendor/jquery-1.12.4.min.js"></script>
    <script src="<?php echo base_url('assets/'); ?>js/jquery.validate.min.js"></script>
    <!-- bootstrap JS
		============================================ -->
    <script src="<?php echo base_url('assets/'); ?>js/bootstrap.min.js"></script>
    <!-- wow JS
		============================================ -->
    <script src="<?php echo base_url('assets/'); ?>js/wow.min.js"></script>
    <!-- price-slider JS
		============================================ -->
    <script src="<?php echo base_url('assets/'); ?>js/jquery-price-slider.js"></script>
    <!-- meanmenu JS
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
    <!-- tab JS
		============================================ -->
    <script src="<?php echo base_url('assets/'); ?>js/tab.js"></script>
    <!-- icheck JS
		============================================ -->
    <script src="<?php echo base_url('assets/'); ?>js/icheck/icheck.min.js"></script>
    <script src="<?php echo base_url('assets/'); ?>js/icheck/icheck-active.js"></script>
    <!-- plugins JS
		============================================ -->
    <script src="<?php echo base_url('assets/'); ?>js/plugins.js"></script>
    <!-- main JS
		============================================ -->
    <script src="<?php echo base_url('assets/'); ?>js/main.js"></script>
</body>

</html>

<!-- For validation -->
<script type="text/javascript">
    $(function() {
        $('#loginForm').validate({
            rules: {
                email: {
                  required: true,
                  email: true
                },
                password: {
                  required: true,
                  minlength: 8,
                  maxlength: 12
                },
            },
            messages: {
                email: {
                    required: 'Please Enter Email'
                    // required: 'Enter a valid email'
                    // number: 'Numbers are not allowed'
                },
                password: {
                    required: 'Please Enter Password',
                    minlength: 'Password must be at least 8 characters long',
                    maxlength: 'Password must be at least 12 characters long',
                }
            }
        });
    });
</script>
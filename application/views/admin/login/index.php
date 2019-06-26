<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

    <!-- Global stylesheets -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/'); ?>css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/'); ?>css/bootstrap.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/'); ?>css/core.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/'); ?>css/components.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url('assets/'); ?>css/colors.css" rel="stylesheet" type="text/css">
    <!-- /global stylesheets -->

    <!-- Core JS files -->
    <script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/loaders/pace.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/core/libraries/jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/core/libraries/bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/loaders/blockui.min.js"></script>
    <!-- /core JS files -->

    <!-- Theme JS files -->
    <script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/forms/validation/validate.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/plugins/forms/styling/uniform.min.js"></script>

    <script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/core/app.js"></script>
    <script type="text/javascript" src="<?php echo base_url('assets/'); ?>js/pages/login_validation.js"></script>
    <!-- /theme JS files -->
<style type="text/css" media="screen">
    body{
        background-image: url('<?php echo base_url('assets/images/bckgrnd.jpg'); ?>');
        background-repeat: no-repeat;
    }
</style>
</head>

<body class="login-container" >

    <!-- Page container -->
    <div class="page-container">

        <!-- Page content -->
        <div class="page-content">

            <!-- Main content -->
            <div class="content-wrapper">

                <!-- Content area -->
                <div class="content pb-20">

                    <!-- Form with validation -->
                    <form action="<?php echo base_url('admin/login/process/'); ?>" class="form-validate" id="loginForm" method="post">
                        <div class="panel panel-body login-form">
                            <div class="text-center">
                                <div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
                                <h5 class="content-group">Login to your account <small class="display-block">Your credentials</small></h5>
                            </div>

                            <div class="form-group has-feedback has-feedback-left">
                                <input type="text" class="form-control" placeholder="Email" name="email" required="required" value="<?php if (get_cookie('cookie_email')) { echo get_cookie('cookie_email'); } ?>">
                                <div class="form-control-feedback">
                                    <i class="icon-user text-muted"></i>
                                </div>
                            </div>

                            <div class="form-group has-feedback has-feedback-left">
                                <input type="password" class="form-control" placeholder="******" name="password" id="password" required="required" value="<?php if (get_cookie('cookie_password')) { echo get_cookie('cookie_password'); } ?>">
                                <div class="form-control-feedback">
                                    <i class="icon-lock2 text-muted"></i>
                                </div>
                            </div>

                            <div class="form-group login-options">
                                <div class="row">
                                    <div class="col-sm-6">
                                        <label class="checkbox-inline">
                                            <input type="checkbox" class="styled" name="remember_me" id="remember_me" <?php if (get_cookie('cookie_email')) { ?> checked="checked" <?php } ?>>
                                            Remember
                                        </label>
                                    </div>

                                    <div class="col-sm-6 text-right">
                                        <a href="login_password_recover.html">Forgot password?</a>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <input type="submit" class="btn bg-blue btn-block" id="login" name="login" value="Login">
                            </div>

                           <!--  <div class="content-divider text-muted form-group"><span>or sign in with</span></div>
                            <ul class="list-inline form-group list-inline-condensed text-center">
                                <li><a href="#" class="btn border-indigo text-indigo btn-flat btn-icon btn-rounded"><i class="icon-facebook"></i></a></li>
                                <li><a href="#" class="btn border-pink-300 text-pink-300 btn-flat btn-icon btn-rounded"><i class="icon-dribbble3"></i></a></li>
                                <li><a href="#" class="btn border-slate-600 text-slate-600 btn-flat btn-icon btn-rounded"><i class="icon-github"></i></a></li>
                                <li><a href="#" class="btn border-info text-info btn-flat btn-icon btn-rounded"><i class="icon-twitter"></i></a></li>
                            </ul>

                            <div class="content-divider text-muted form-group"><span>Don't have an account?</span></div>
                            <a href="login_registration.html" class="btn btn-default btn-block content-group">Sign up</a>
                            <span class="help-block text-center no-margin">By continuing, you're confirming that you've read our <a href="#">Terms &amp; Conditions</a> and <a href="#">Cookie Policy</a></span> -->
                        </div>
                    </form>
                    <!-- /form with validation -->

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

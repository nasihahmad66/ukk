<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url() ?>/assets/img/envelope.png" />
    <link rel="icon" type="image/png" href="<?php echo base_url() ?>/assets/img/envelope.png" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Sign In - Surat Menyurat</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <!-- CSS -->
    <link href="<?php echo base_url() ?>assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url() ?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>assets/dist/css/material-kit.css" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/dist/icon/icon.css" rel="stylesheet" />
    <!-- JS -->
    <script src="<?php echo base_url() ?>assets/vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/vendor/bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/dist/js/material.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/dist/js/material-kit.js" type="text/javascript"></script>

    <script src="<?php echo base_url() ?>assets/js/common.js" type="text/javascript"></script>

</head>

<body class="signup-page" style="">
    <div class="wrapper">
        <div class="header header-filter" style="background-image: url('<?php echo base_url() ?>/assets/img/background.jpg'); background-size: cover; background-position: top center;">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
                        <div class="card card-signup">
                            <form class="form" method="" action="">
                                <div class="header header-info text-center">
                                    <h3>Sign In</h3>
                                    <did class="divider"></did>
                                </div>
                                <div class="content">
                                    <div class="input-group">
                                        <span class="input-group-addon">
											<i class="material-icons">person</i>
										</span>
                                        <div class="form-group has-info bmd-form-group is-focused">
                                            <input type="text" id="username" class="form-control" placeholder="Username..">
                                            <span class="material-input"></span>
                                        </div>
                                    </div>
                                    <div class="input-group">
                                        <span class="input-group-addon">
											<i class="material-icons">lock_outline</i>
										</span>
                                        <div class="form-group has-info bmd-form-group is-focused">
                                            <input type="password" id="password" placeholder="Password..." class="form-control">
                                            <span class="material-input"></span>
                                        </div>
                                    </div>
                                </div>
                                <div class="footer text-center">
                                    <a href="javascript: login.doLogin()" class="btn btn-simple btn-info btn-lg">Get Started<div class="ripple-container"></div></a>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
<script type="text/javascript" src="<?php echo base_url() ?>assets/main/js/login.js"></script>
</html>

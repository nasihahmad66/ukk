<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url() ?>/assets/img/envelope.png" />
    <link rel="icon" type="image/png" href="<?php echo base_url() ?>/assets/img/envelope.png" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Nasih Ahmad Web</title>
    <meta content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" name="viewport">
    <meta name="viewport" content="width=device-width" />

    <link href="<?php echo base_url() ?>assets/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo base_url() ?>assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="<?php echo base_url() ?>assets/css/material-dashboard.css?v=1.2.0" rel="stylesheet" />
    <link href="<?php echo base_url() ?>assets/dist/icon/icon.css" rel="stylesheet" />

    <script src="<?php echo base_url() ?>assets/js/jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/bootstrap-datepicker.js"></script>
    <script src="<?php echo base_url() ?>assets/js/common.js" type="text/javascript"></script>
    <script type="text/javascript">var base_url='<?php echo base_url() ?>'</script>
</head>

<body>
    <div class="wrapper">
        <div class="sidebar" data-color="blue">
            <div class="logo">
                <a href="<?php echo base_url(); ?>dashboard" class="simple-text">
                    Nasih Ahmad
                </a>
            </div>
            <div class="sidebar-wrapper">
                <ul class="nav">
                    <?php 
                    if ($this->uri->segment(1) == "dashboard") {?>
                    <li class="active">
                    <?php }else{?>
                    <li>
                    <?php } ?>
                        <a href="<?php echo base_url(); ?>dashboard">
                            <i class="material-icons">dashboard</i>
                            <p>Dashboard</p>
                        </a>
                    </li>
                    <?php 
                    if ($this->uri->segment(1) == "surat_masuk" || $this->uri->segment(1) == "disposisi") {?>
                    <li class="active">
                    <?php }else{?>
                    <li>
                    <?php } ?>
                        <a href="<?php echo base_url(); ?>surat_masuk">
                            <i class="material-icons">inbox</i>
                            <p>Surat Masuk</p>
                        </a>
                    </li>
                    <?php 
                    if ($this->uri->segment(1) == "surat_keluar") {?>
                    <li class="active">
                    <?php }else{?>
                    <li>
                    <?php } ?>
                        <a href="<?php echo base_url(); ?>surat_keluar">
                            <i class="material-icons">send</i>
                            <p>Surat Keluar</p>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="main-panel">
            <nav class="navbar navbar-transparent navbar-absolute">
                <div class="container-fluid">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <a class="navbar-brand" href="<?php echo base_url().$this->uri->segment(1); ?>" id="headerTitle">Dashboard </a>
                    </div>
                    <div class="collapse navbar-collapse">
                        <ul class="nav navbar-nav navbar-right">
                            <li class="dropdown">
                                <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">person</i>
                                    <p class="hidden-lg hidden-md">Profile</p>
                                </a>
                                <ul class="dropdown-menu">
                                    <li>
                                        <a href="<?php echo base_url(); ?>login/DoLogout">Logout, <b><?php echo $this->session->userdata('nama_lengkap'); ?></b></a>
                                    </li>
                                </ul>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>
            <div class="content">
                <div class="container-fluid">
                    <?php 
                        $this->load->view($main_view);
                     ?>
                </div>
            </div>
            <footer class="footer">
                <div class="container-fluid">
                    <p class="copyright pull-right">
                        &copy;
                        <script>
                            document.write(new Date().getFullYear())
                        </script>
                        <a href="#">Nasih Ahmad</a>
                    </p>
                </div>
            </footer>
        </div>
    </div>
</body>
    <script src="<?php echo base_url() ?>assets/js/perfect-scrollbar.jquery.min.js"></script>
    <script src="<?php echo base_url() ?>assets/js/material.min.js" type="text/javascript"></script>
    <script src="<?php echo base_url() ?>assets/js/material-dashboard.js?v=1.2.0" type="text/javascript"></script>
    <!-- <script src="<?php echo base_url() ?>assets/js/material-kit.js" type="text/javascript"></script> -->
    <script type="text/javascript">
        $(function() {
            $("#headerTitle").text($('li.active')[0].childNodes[1].childNodes[3].innerHTML)
        })
    </script>
</html>
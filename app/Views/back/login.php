<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">
    <!-- Title Page-->
    <title>Login</title>
    <!-- Fontfaces CSS-->
    <link href="<?php echo base_url('public/back/css/font-face.css'); ?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('public/back/vendor/font-awesome-4.7/css/font-awesome.min.css'); ?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('public/back/vendor/font-awesome-5/css/fontawesome-all.min.css'); ?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('public/back/vendor/mdi-font/css/material-design-iconic-font.min.css'); ?>" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url('public/back/vendor/bootstrap-4.1/bootstrap.min.css'); ?>" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url('public/back/vendor/animsition/animsition.min.css'); ?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('public/back/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css'); ?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('public/back/vendor/wow/animate.css'); ?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('public/back/vendor/css-hamburgers/hamburgers.min.css'); ?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('public/back/vendor/slick/slick.css'); ?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('public/back/vendor/select2/select2.min.css'); ?>" rel="stylesheet" media="all">
    <link href="<?php echo base_url('public/back/vendor/perfect-scrollbar/perfect-scrollbar.css'); ?>" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url('public/back/css/theme.css'); ?>" rel="stylesheet" media="all">
    <style>
    div.page-content--bge5 {
    background-image: url('../public/back/images/image.jpg');
    }
    </style>
</head>
<body class="animsition">
    <div class="page-wrapper">
        <div class="page-content--bge5">
            <div class="container">
                <div class="login-wrap" >
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="<?php echo base_url('public/back/#'); ?>">
                                <img src="<?php echo base_url('public/back/images/logoo.png'); ?>" style="width:300px;height:85px;" >
                            </a>
                        </div>
                        <?php
                            if (!empty(session()->getFlashData('fail'))) : ?>
                                <div class="alert alert-danger" role="alert"><?= session()->getFlashData('fail'); ?></div>
                            <?php endif ?>
                         <?php
                            if (!empty(session()->getFlashData('success'))) : ?>
                                <div class="alert alert-success" role="alert"><?= session()->getFlashData('success'); ?></div>
                            <?php endif ?>
                        <div class="login-form">
                            <form action="<?=base_url('back/admin/loginCheck'); ?>" method="post">
                                <?=csrf_field();?>
                                <div class="form-group">
                                    <label>Email Adresi:</label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                               <span class="text-danger"><?= isset($validation) ? display_error($validation,'email'): '' ?></span>
                                </div>
                                <div class="form-group">
                                    <label>??ifre:</label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="??ifre">
                                    <span class="text-danger"><?= isset($validation) ? display_error($validation,'password'): '' ?></span>
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="remember">Beni Hat??rla
                                    </label>
                                    <label>
                                        <a style="color:darkorange;"  href="<?php echo base_url('public/back/'); ?>">??ifremi Unuttum</a>
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block  m-b-20" style="background-color:gray;" type="submit">Giri?? Yap</button>
                            </form>
                            <div class="register-link">
                                <p>
                                    Bir Hesab??n Yok Mu?
                                    <a style="color:darkorange;" href="<?php echo base_url('admin/register'); ?>">Kaydol</a>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Jquery JS-->
    <script src="<?php echo base_url('public/back/vendor/jquery-3.2.1.min.js'); ?>"></script>
    <!-- Bootstrap JS-->
    <script src="<?php echo base_url('public/back/vendor/bootstrap-4.1/popper.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/back/vendor/bootstrap-4.1/bootstrap.min.js'); ?>"></script>
    <!-- Vendor JS       -->
    <script src="<?php echo base_url('public/back/vendor/slick/slick.min.js'); ?>">
    </script>
    <script src="<?php echo base_url('public/back/vendor/wow/wow.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/back/vendor/animsition/animsition.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/back/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js'); ?>">
    </script>
    <script src="<?php echo base_url('public/back/vendor/counter-up/jquery.waypoints.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/back/vendor/counter-up/jquery.counterup.min.js'); ?>">
    </script>
    <script src="<?php echo base_url('public/back/vendor/circle-progress/circle-progress.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/back/vendor/perfect-scrollbar/perfect-scrollbar.js'); ?>"></script>
    <script src="<?php echo base_url('public/back/vendor/chartjs/Chart.bundle.min.js'); ?>"></script>
    <script src="<?php echo base_url('public/back/vendor/select2/select2.min.js'); ?>">
    </script>

    <!-- Main JS-->
    <script src="<?php echo base_url('public/back/js/main.js'); ?>"></script>

</body>

</html>
<!-- end document-->
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
    <title>Register</title>

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
                <div class="login-wrap">
                    <div class="login-content">
                        <div class="login-logo">
                            <a href="<?php echo base_url('public/back/'); ?>" style="color:darkorange;font-size:27px;"> Üye Kayıt Formu
                                
                            </a>
                        </div>
                         <?php
        if (!empty($form_errors)) { ?>
            <div class="alert alert-danger" role="alert">
                <?php echo $form_errors?>
            </div>
        <?php } ?>
                        <div class="login-form">
                            <form action="<?=base_url('back/admin/registerSave'); ?>" method="post">
                            <?=csrf_field();?>
                                <div class="form-group">
                                    <label>Kullanıcı Adı: </label>
                                    <input class="au-input au-input--full" type="text" name="name" placeholder="Kullanıcı Adı">
                                    <span class="text-danger"><?= isset($validation) ? display_error($validation,'name'): '' ?></span>
                                </div>
                                <div class="form-group">
                                    <label>Email Adresi: </label>
                                    <input class="au-input au-input--full" type="email" name="email" placeholder="Email">
                                 <span class="text-danger"><?= isset($validation) ? display_error($validation,'email'): '' ?></span>
                                </div>
                                <div class="form-group">
                                    <label>Şifre: </label>
                                    <input class="au-input au-input--full" type="password" name="password" placeholder="Şifre">
                                     <span class="text-danger"><?= isset($validation) ? display_error($validation,'password'): '' ?></span> 
                                </div>
                                <div class="form-group"> 
                                    <label>Şifre Tekrar: </label>
                                    <input class="au-input au-input--full" type="password" name="confirmpassword" placeholder="******">
                                     <span class="text-danger"><?= isset($validation) ? display_error($validation,'confirmpassword'): '' ?></span>
                                </div>
                                <div class="login-checkbox">
                                    <label>
                                        <input type="checkbox" name="aggree">Şartları ve politikayı kabul ediyorum
                                    </label>
                                </div>
                                <button class="au-btn au-btn--block   m-b-20" type="submit" style="background-color:gray;">Kaydol</button>
                                <div class="social-login-content">
                                    
                                </div>
                            </form>
                            <div class="register-link">
                                <p>
                                    Zaten Bir Hesabım Var
                                    <a href="<?php echo base_url('admin/login'); ?>" style="color:darkblue;">Giriş Yap</a>
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
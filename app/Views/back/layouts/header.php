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
    <title>Dashboard</title>

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

</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="logo" href="<?php echo base_url('public/back/index.html'); ?>">
                            <img src="<?php echo base_url('public/back/images/icon/logo.png'); ?>" alt="CoolAdmin" />
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li class="has-sub">
                            <a class="js-arrow" href="<?php echo base_url('public/back/#'); ?>">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="<?php echo base_url('public/back/index.html'); ?>">Dashboard 1</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('public/back/index2.html'); ?>">Dashboard 2</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('public/back/index3.html'); ?>">Dashboard 3</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('public/back/index4.html'); ?>">Dashboard 4</a>
                                </li>
                            </ul>
                        </li>
                        <li>
                            <a href="<?php echo base_url('public/back/chart.html'); ?>">
                                <i class="fas fa-chart-bar"></i>Charts</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('public/back/table.html'); ?>">
                                <i class="fas fa-table"></i>Tables</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('public/back/form.html'); ?>">
                                <i class="far fa-check-square"></i>Forms</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('public/back/calendar.html'); ?>">
                                <i class="fas fa-calendar-alt"></i>Calendar</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url('public/back/map.html'); ?>">
                                <i class="fas fa-map-marker-alt"></i>Maps</a>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="<?php echo base_url('public/back/#'); ?>">
                                <i class="fas fa-copy"></i>Pages</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="<?php echo base_url('public/back/login.html'); ?>">Login</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('public/back/register.html'); ?>">Register</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('public/back/forget-pass.html'); ?>">Forget Password</a>
                                </li>
                            </ul>
                        </li>
                        <li class="has-sub">
                            <a class="js-arrow" href="<?php echo base_url('public/back/#'); ?>">
                                <i class="fas fa-desktop"></i>UI Elements</a>
                            <ul class="navbar-mobile-sub__list list-unstyled js-sub-list">
                                <li>
                                    <a href="<?php echo base_url('public/back/button.html'); ?>">Button</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('public/back/badge.html'); ?>">Badges</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('public/back/tab.html'); ?>">Tabs</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('public/back/card.html'); ?>">Cards</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('public/back/alert.html'); ?>">Alerts</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('public/back/progress-bar.html'); ?>">Progress Bars</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('public/back/modal.html'); ?>">Modals</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('public/back/switch.html'); ?>">Switchs</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('public/back/grid.html'); ?>">Grids</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('public/back/fontawesome.html'); ?>">Fontawesome Icon</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url('public/back/typo.html'); ?>">Typography</a>
                                </li>
                            </ul>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
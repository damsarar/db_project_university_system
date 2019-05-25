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
    <title>Admin</title>

    <!-- Fontfaces CSS-->
    <link href="<?php echo base_url(); ?>/assets/admintemplate/css/font-face.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>/assets/admintemplate/vendor/font-awesome-4.7/css/font-awesome.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>/assets/admintemplate/vendor/font-awesome-5/css/fontawesome-all.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>/assets/admintemplate/vendor/mdi-font/css/material-design-iconic-font.min.css" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="<?php echo base_url(); ?>/assets/admintemplate/vendor/bootstrap-4.1/bootstrap.min.css" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="<?php echo base_url(); ?>/assets/admintemplate/vendor/animsition/animsition.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>/assets/admintemplate/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>/assets/admintemplate/vendor/wow/animate.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>/assets/admintemplate/vendor/css-hamburgers/hamburgers.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>/assets/admintemplate/vendor/slick/slick.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>/assets/admintemplate/vendor/select2/select2.min.css" rel="stylesheet" media="all">
    <link href="<?php echo base_url(); ?>/assets/admintemplate/vendor/perfect-scrollbar/perfect-scrollbar.css" rel="stylesheet" media="all">

    <!-- Main CSS-->
    <link href="<?php echo base_url(); ?>/assets/admintemplate/css/theme.css" rel="stylesheet" media="all">

</head>

<body class="animsition">
<div class="page-wrapper">
    <!-- HEADER DESKTOP-->
    <header class="header-desktop3 d-none d-lg-block">
        <div class="section__content section__content--p35">
            <div class="header3-wrap">
                <div class="header__logo">
                    <a href="#">
                        <img src="<?php echo base_url(); ?>/assets/admintemplate/images/icon/logo-white.png" alt="CoolAdmin" />
                    </a>
                </div>
                <div class="header__navbar">
                    <ul class="list-unstyled">
                        <li class="has-sub">
                            <a href="#">
                                <!--                                <i class="fas fa-tachometer-alt"></i>-->
                                Student
                                <span class="bot-line"></span></a>
                            <ul class="header3-sub-list list-unstyled">

                                <li>
                                    <a href="<?php echo base_url(); ?>index.php/admind/graduate">Graduate Students</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>index.php/admind/undergraduate">Undergraduate Students</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>index.php/admind/nonmatriculate">Non Matriculate Students</a>
                                </li>


                            </ul>

                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>index.php/admind/professor">
                                <!--                                <i class="fas fa-shopping-basket"></i>-->
                                <span class="bot-line"></span>Professor</a>
                        </li>
                        <li>
                            <a href="<?php echo base_url(); ?>index.php/admind/course">
                                <!--                                <i class="fas fa-trophy"></i>-->
                                <span class="bot-line"></span>Course</a>
                        </li>
                        <li class="has-sub">
                            <a href="<?php echo base_url(); ?>index.php/admind/department">
                                <!--                                <i class="fas fa-copy"></i>-->
                                <span class="bot-line"></span>Department</a>

                        </li>
                        <li class="has-sub">
                            <a href="<?php echo base_url(); ?>index.php/admind/book">
                                <!--                                <i class="fas fa-desktop"></i>-->
                                <span class="bot-line"></span>Book</a>
                        </li>
                        <li class="has-sub">
                            <a href="#">
                                <!--                                <i class="fas fa-tachometer-alt"></i>-->
                                Other Tables
                                <span class="bot-line"></span>
                            </a>
                            <ul class="header3-sub-list list-unstyled">
                                <li>
                                    <a href="<?php echo base_url(); ?>index.php/admind/coursesection">Course Section</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>index.php/admind/labsession">Lab Session</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>index.php/admind/bookcopy">Book Copy</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>index.php/admind/author">Author</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>index.php/admind/borrow">Borrowing</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>index.php/admind/enroll">Enroll</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>index.php/admind/companysession">Company Session</a>
                                </li>
                                <li>
                                    <a href="<?php echo base_url(); ?>index.php/admind/uses">Book Using Details</a>
                                </li>

                            </ul>
                        </li>

                    </ul>
                </div>
                <div class="header__tool">
<!--                    <div class="header-button-item has-noti js-item-menu">-->
<!--                        <i class="zmdi zmdi-notifications"></i>-->
<!--                        <div class="notifi-dropdown notifi-dropdown--no-bor js-dropdown">-->
<!--                            <div class="notifi__title">-->
<!--                                <p>You have 3 Notifications</p>-->
<!--                            </div>-->
<!--                            <div class="notifi__item">-->
<!--                                <div class="bg-c1 img-cir img-40">-->
<!--                                    <i class="zmdi zmdi-email-open"></i>-->
<!--                                </div>-->
<!--                                <div class="content">-->
<!--                                    <p>You got a email notification</p>-->
<!--                                    <span class="date">April 12, 2018 06:50</span>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="notifi__item">-->
<!--                                <div class="bg-c2 img-cir img-40">-->
<!--                                    <i class="zmdi zmdi-account-box"></i>-->
<!--                                </div>-->
<!--                                <div class="content">-->
<!--                                    <p>Your account has been blocked</p>-->
<!--                                    <span class="date">April 12, 2018 06:50</span>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="notifi__item">-->
<!--                                <div class="bg-c3 img-cir img-40">-->
<!--                                    <i class="zmdi zmdi-file-text"></i>-->
<!--                                </div>-->
<!--                                <div class="content">-->
<!--                                    <p>You got a new file</p>-->
<!--                                    <span class="date">April 12, 2018 06:50</span>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="notifi__footer">-->
<!--                                <a href="#">All notifications</a>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                    <div class="header-button-item js-item-menu">-->
<!--                        <i class="zmdi zmdi-settings"></i>-->
<!--                        <div class="setting-dropdown js-dropdown">-->
<!--                            <div class="account-dropdown__body">-->
<!--                                <div class="account-dropdown__item">-->
<!--                                    <a href="#">-->
<!--                                        <i class="zmdi zmdi-account"></i>Account</a>-->
<!--                                </div>-->
<!--                                <div class="account-dropdown__item">-->
<!--                                    <a href="#">-->
<!--                                        <i class="zmdi zmdi-settings"></i>Setting</a>-->
<!--                                </div>-->
<!--                                <div class="account-dropdown__item">-->
<!--                                    <a href="#">-->
<!--                                        <i class="zmdi zmdi-money-box"></i>Billing</a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                            <div class="account-dropdown__body">-->
<!--                                <div class="account-dropdown__item">-->
<!--                                    <a href="#">-->
<!--                                        <i class="zmdi zmdi-globe"></i>Language</a>-->
<!--                                </div>-->
<!--                                <div class="account-dropdown__item">-->
<!--                                    <a href="#">-->
<!--                                        <i class="zmdi zmdi-pin"></i>Location</a>-->
<!--                                </div>-->
<!--                                <div class="account-dropdown__item">-->
<!--                                    <a href="#">-->
<!--                                        <i class="zmdi zmdi-email"></i>Email</a>-->
<!--                                </div>-->
<!--                                <div class="account-dropdown__item">-->
<!--                                    <a href="#">-->
<!--                                        <i class="zmdi zmdi-notifications"></i>Notifications</a>-->
<!--                                </div>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </div>-->
                    <div class="account-wrap">
                        <div class="account-item account-item--style2 clearfix js-item-menu">
                            <div class="image">
                                <img src="<?php echo base_url(); ?>/assets/admintemplate/images/icon/admin_avatar.png" alt="Admin" />
                            </div>
                            <div class="content">
                                <a class="js-acc-btn" href="#">Admin</a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a href="#">
                                            <img src="<?php echo base_url(); ?>/assets/admintemplate/images/icon/admin_avatar2.png" alt="Admin" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                            <a href="#">Admin</a>
                                        </h5>
<!--                                        <span class="email">johndoe@example.com</span>-->
                                    </div>
                                </div>
<!--                                <div class="account-dropdown__body">-->
<!--                                    <div class="account-dropdown__item">-->
<!--                                        <a href="#">-->
<!--                                            <i class="zmdi zmdi-account"></i>Account</a>-->
<!--                                    </div>-->
<!--                                    <div class="account-dropdown__item">-->
<!--                                        <a href="#">-->
<!--                                            <i class="zmdi zmdi-settings"></i>Setting</a>-->
<!--                                    </div>-->
<!--                                    <div class="account-dropdown__item">-->
<!--                                        <a href="#">-->
<!--                                            <i class="zmdi zmdi-money-box"></i>Billing</a>-->
<!--                                    </div>-->
<!--                                </div>-->
                                <div class="account-dropdown__footer">
                                    <a href="#">
                                        <i class="zmdi zmdi-power"></i>Logout</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- END HEADER DESKTOP-->



    <!-- PAGE CONTENT-->
    <div class="page-content--bgf7">
<!--        <!-- BREADCRUMB-->
<!--        <section class="au-breadcrumb2">-->
<!--            <div class="container">-->
<!--                <div class="row">-->
<!--                    <div class="col-md-12">-->
<!--                        <div class="au-breadcrumb-content">-->
<!--                            <div class="au-breadcrumb-left">-->
<!--                                <span class="au-breadcrumb-span">You are here:</span>-->
<!--                                <ul class="list-unstyled list-inline au-breadcrumb__list">-->
<!--                                    <li class="list-inline-item active">-->
<!--                                        <a href="#">Home</a>-->
<!--                                    </li>-->
<!--                                    <li class="list-inline-item seprate">-->
<!--                                        <span>/</span>-->
<!--                                    </li>-->
<!--                                    <li class="list-inline-item">Dashboard</li>-->
<!--                                </ul>-->
<!--                            </div>-->
<!--                            <form class="au-form-icon--sm" action="" method="post">-->
<!--                                <input class="au-input--w300 au-input--style2" type="text" placeholder="Search for datas &amp; reports...">-->
<!--                                <button class="au-btn--submit2" type="submit">-->
<!--                                    <i class="zmdi zmdi-search"></i>-->
<!--                                </button>-->
<!--                            </form>-->
<!--                        </div>-->
<!--                    </div>-->
<!--                </div>-->
<!--            </div>-->
<!--        </section>-->
<!--        <!-- END BREADCRUMB-->

        <!-- WELCOME-->
        <section class="welcome p-t-10">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="title-4">Welcome back
                            <span>-----</span>
                        </h1>
                        <hr class="line-seprate">
                    </div>
                </div>
            </div>
        </section>
        <!-- END WELCOME-->






        <!-- COPYRIGHT-->
        <section class="p-t-60 p-b-20">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="copyright">
                            <p>Copyright © 2018 </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!-- END COPYRIGHT-->
    </div>

</div>

<!-- Jquery JS-->
<script src="<?php echo base_url(); ?>/assets/admintemplate/vendor/jquery-3.2.1.min.js"></script>
<!-- Bootstrap JS-->
<script src="<?php echo base_url(); ?>/assets/admintemplate/vendor/bootstrap-4.1/popper.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/admintemplate/vendor/bootstrap-4.1/bootstrap.min.js"></script>
<!-- Vendor JS       -->
<script src="<?php echo base_url(); ?>/assets/admintemplate/vendor/slick/slick.min.js">
</script>
<script src="<?php echo base_url(); ?>/assets/admintemplate/vendor/wow/wow.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/admintemplate/vendor/animsition/animsition.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/admintemplate/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
</script>
<script src="<?php echo base_url(); ?>/assets/admintemplate/vendor/counter-up/jquery.waypoints.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/admintemplate/vendor/counter-up/jquery.counterup.min.js">
</script>
<script src="<?php echo base_url(); ?>/assets/admintemplate/vendor/circle-progress/circle-progress.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/admintemplate/vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
<script src="<?php echo base_url(); ?>/assets/admintemplate/vendor/chartjs/Chart.bundle.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/admintemplate/vendor/select2/select2.min.js">
</script>

<!-- Main JS-->
<script src="<?php echo base_url(); ?>/assets/admintemplate/js/main.js"></script>

</body>

</html>
<!-- end document-->
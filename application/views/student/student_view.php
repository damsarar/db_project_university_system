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
    <title>Student Dashboard</title>

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
    <link href="<?php echo base_url(); ?>/assets/editformtemplate/styleform.css" rel="stylesheet" media="all">



    <style>
        .modal {
            display: none; /* Hidden by default */
            position: fixed; /* Stay in place */
            z-index: 1; /* Sit on top */
            left: 0;
            top: 0;
            width: 100%; /* Full width */
            height: 100%; /* Full height */
            overflow: auto; /* Enable scroll if needed */
            background-color: rgb(0,0,0); /* Fallback color */
            background-color: rgba(0,0,0,0.4); /* Black w/ opacity */
        }

        /* Modal Content/Box */
        .modal-content {
            background-color: #fefefe;
            margin: 15% auto; /* 15% from the top and centered */
            padding: 20px;
            border: 1px solid #888;
            width: 80%; /* Could be more or less, depending on screen size */
        }

        /* The Close Button */
        .close {
            color: #aaa;
            float: right;
            font-size: 28px;
            font-weight: bold;
        }

        .close{
            color: black;
            text-decoration: none;
            cursor: pointer;
        }


    </style>


</head>

<body class="animsition">
<div class="page-wrapper">
    <!-- HEADER DESKTOP-->
    <header class="header-desktop3 d-none d-lg-block">
        <div class="section__content section__content--p35">
            <div class="header3-wrap">
                <div class="header__logo">
                    <a href="<?php echo base_url(); ?>/index.php/admin">
                        <img src="<?php echo base_url(); ?>/assets/admintemplate/images/icon/uniportallogo.png" alt="CoolAdmin" />
                    </a>
                </div>
                <div class="header__navbar">
                    <ul class="list-unstyled">

                        <li class="has-sub">
                            <a href="<?php echo base_url(); ?>index.php/admind/book">
                                <!--                                <i class="fas fa-desktop"></i>-->
                                <span class="bot-line"></span>Book</a>
                        </li>

                        <li>
                            <a href="<?php echo base_url(); ?>index.php/studentrole/lab_session">Lab Session</a>
                        </li>



                    </ul>
                </div>
                <div class="account-wrap">
                    <div class="account-item account-item--style2 clearfix js-item-menu">
                        <div class="image">
                            <img src="<?php echo base_url(); ?>/assets/admintemplate/images/icon/studentavatar.jpg" alt="Admin" />
                        </div>
                        <div class="content">
                            <a class="js-acc-btn" href="#">Student</a>
                        </div>
                        <div class="account-dropdown js-dropdown">
                            <div class="info clearfix">
                                <div class="image">
                                    <a href="#">
                                        <img src="<?php echo base_url(); ?>/assets/admintemplate/images/icon/studentavatar.jpg" alt="Admin" />
                                    </a>
                                </div>
                                <div class="content">
                                    <h5 class="name">
                                        <a href="#">Student</a>
                                    </h5>
                                    <!--                                        <span class="email">johndoe@example.com</span>-->
                                </div>
                            </div>

                            <div class="account-dropdown__footer">
                                <a href="#">
                                    <i class="zmdi zmdi-power"></i>Logout</a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </header>
</div>

    <?php
    foreach($h as $key)
    {
        $val1= $key->SID;
        $val2= $key->Name;
        $val3= $key->Address;
        $val4= $key->Status;
        $val5= $key->Thesis_Option;
        $val6= $key->Undergraduate_Major;

    }
    ?>


        <!--Insert section-->
        <div class="container">
            <div id="" class="">
                <div class="modal-content">
                    <form class="well form-check-label" action="" method="post"  id="contact_form"  >
                        <fieldset>

                            <!-- Form Name -->
                            <legend>My Details</legend>

                            <!-- Text input-->

                            <div class="form-group">
                                <label class="col-md-4 control-label">Student ID :</label>
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group">
                                        <?php echo "<label>$val1 </label>"; ?>
                                    </div>
                                </div>
                            </div>

                            <!-- Text input-->

                            <div class="form-group">
                                <label class="col-md-4 control-label">Name :</label>
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group">
                                        <?php echo "<label>$val2 </label>"; ?>
                                    </div>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label">Address :</label>
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group">
                                        <?php echo "<label>$val3 </label>"; ?>
                                    </div>
                                </div>
                            </div>


                            <!-- Text input-->

                            <div class="form-group">
                                <label class="col-md-4 control-label">Status :</label>
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group">
                                        <?php echo "<label>$val4 </label>"; ?>
                                    </div>
                                </div>
                            </div>

                            <!-- Text input-->

                            <div class="form-group">
                                <label class="col-md-4 control-label">Thesis Option :</label>
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group">
                                        <?php echo "<label>$val5 </label>"; ?>
                                    </div>
                                </div>
                            </div>

                            <!-- Text input-->

                            <div class="form-group">
                                <label class="col-md-4 control-label">Undergraduate Major :</label>
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group">
                                        <?php echo "<label>$val6 </label>"; ?>
                                    </div>
                                </div>
                            </div>

                            <?php echo form_close(); ?><br/>


                </div>



            </div>
            </fieldset>
            </form>
        </div>




<!---->
<!--        <script>-->
<!---->
<!--            // Get the modal-->
<!--            var modaladd = document.getElementById('popup');-->
<!--            var modalupdate = document.getElementById('popup2');-->
<!---->
<!--            // Get the button that opens the modal-->
<!--            var btn = document.getElementById("btnadd");-->
<!--            var btn2 = document.getElementById("btnupdate");-->
<!---->
<!--            // Get the button that closes the modal-->
<!--            var btnclose1=document.getElementById('closeadd');-->
<!--            var btnclose2=document.getElementById('closeupdate');-->
<!---->
<!--            // When the user clicks on the button, open the modal-->
<!--            btn.onclick = function() {-->
<!--                modaladd.style.display = "block";-->
<!--            }-->
<!---->
<!--            // When the user clicks on <span> (x), close the modal-->
<!--            btnclose1.onclick = function() {-->
<!--                modaladd.style.display = "none";-->
<!--            }-->
<!---->
<!--            // When the user clicks anywhere outside of the modal, close it-->
<!--            window.onclick = function(event) {-->
<!--                if (event.target == modaladd) {-->
<!--                    modaladd.style.display = "none";-->
<!--                }-->
<!--            }-->
<!---->
<!---->
<!---->
<!--            btn2.onclick = function() {-->
<!--                modalupdate.style.display = "block";-->
<!--            }-->
<!---->
<!--            // When the user clicks on <span> (x), close the modal-->
<!--            btnclose2.onclick = function() {-->
<!--                modalupdate.style.display = "none";-->
<!--            }-->
<!---->
<!--            // When the user clicks anywhere outside of the modal, close it-->
<!--            window.onclick = function(event) {-->
<!--                if (event.target == modalupdate) {-->
<!--                    modalupdate.style.display = "none";-->
<!--                }-->
<!--            }-->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!---->
<!--        </script>-->




    </section>
    <!-- END DATA TABLE-->

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
    <script src="<?php echo base_url(); ?>/assets/editformtemplate/scrptingform.js"></script>
</body>

</html>
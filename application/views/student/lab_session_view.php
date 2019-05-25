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
    <title>Lab Session Details</title>

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

                        <li>
                            <a href="<?php echo base_url(); ?>index.php/studentrole/student">
                                <!--                                <i class="fas fa-shopping-basket"></i>-->
                                <span class="bot-line"></span>Student</a>
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
                                <a href="<?php echo base_url(); ?>/index.php/loginpage">
                                    <i class="zmdi zmdi-power"></i>Logout</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
    </header>




    <!-- DATA TABLE-->
    <section class="p-t-20">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="title-5 m-b-35">Lab Session Details</h3>

                    <div class="table-responsive table-responsive-data2">
                        <table class="table table-data2">
                            <thead>
                            <tr>
                                <th>Course Code</th>
                                <th>Graduate Student ID</th>
                                <th>Lab Session Number</th>
                                <th>Section Number</th>
                                <th>Lab Location</th>
                                <th>Semester</th>
                                <th>Time</th>
                                <th>Topic</th>
                                <th>Year</th>
                                <th></th>
                            </tr>
                            </thead>
                            <tbody>
                            <tr class="tr-shadow">

                            <?php
                            foreach ($h->result() as $row)
                            {
                                ?><tr>
                                <td><?php echo $row->Course_code;?></td>
                                <td><?php echo $row->Graduate_SID;?></td>
                                <td><?php echo $row->Lab_session_number;?></td>
                                <td><?php echo $row->Section_Number;?></td>
                                <td><?php echo $row->Lab_Location;?></td>
                                <td><?php echo $row->Semester;?></td>
                                <td><?php echo $row->Time;?></td>
                                <td><?php echo $row->Topic;?></td>
                                <td><?php echo $row->Year;?></td>

                                <td>
                                    <div class="table-data-feature">




                                    </div>
                                </td>
                                </tr>
                            <?php }
                            ?>



                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>




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
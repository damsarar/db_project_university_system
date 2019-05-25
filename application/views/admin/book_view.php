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
    <title>Book Details</title>

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


            </div>
        </div>
    </header>




    <!-- DATA TABLE-->
    <section class="p-t-20">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h3 class="title-5 m-b-35">Book Details</h3>
                    <div class="table-data__tool">

                        <div class="table-data__tool-right">
                            <button  class="au-btn au-btn-icon au-btn--green au-btn--small" id="btnadd">
                                <i class="zmdi zmdi-plus"></i>Add Book</button>
                            <button  class="au-btn au-btn-icon au-btn--blue2 au-btn--small" id="btnupdate">
                                <i class="zmdi zmdi-edit"></i>Update Book </button>

                        </div>

                    </div>
                    <div class="table-responsive table-responsive-data2">
                        <table class="table table-data2">
                            <thead>
                            <tr>
                                <th>ISBN</th>
                                <th>Name</th>
                                <th>Title</th>
                                <th>Author</th>
                                <th>Emp ID</th>
                                <th>Publisher</th>
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
                                <td><?php echo $row->ISBN;?></td>
                                <td><?php echo $row->Name;?></td>
                                <td><?php echo $row->Title;?></td>
                                <td><?php echo $row->Author;?></td>
                                <td><?php echo $row->Emp_Id;?></td>
                                <td><?php echo $row->Publisher;?></td>
                                <td><?php echo $row->Year;?></td>
                                <td>
                                    <div class="table-data-feature">

                                        <a href="<?php echo base_url();?>/index.php/admind/book/book_delete/<?php echo $row->ISBN?>">
                                            <button class="item" data-toggle="tooltip" data-placement="top" title="Delete" id="delete" onclick="return confirm('Are you sure you want to delete?')">
                                                <i class="zmdi zmdi-delete"></i>
                                            </button>
                                        </a>


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

        <!--Insert section-->
        <div class="container">
            <div id="popup" class="modal">
                <div class="modal-content">
                    <form class="well form-horizontal" action="<?php echo base_url();?>/index.php/admind/book/book_add" method="post"  id="contact_form"  >
                        <fieldset>

                            <!-- Form Name -->
                            <legend>Insert a New Book</legend>

                            <!-- Text input-->

                            <div class="form-group">
                                <!--                            <span class="close" id="closeadd">&times;</span>-->
                                <label class="col-md-4 control-label">ISBN</label>
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input  name="isbn"  class="form-control"  type="text">
                                    </div>
                                </div>
                            </div>

                            <!-- Text input-->

                            <div class="form-group">
                                <label class="col-md-4 control-label" >Name</label>
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input name="name"  class="form-control"  type="text">
                                    </div>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label">Title</label>
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                        <input name="title"  class="form-control"  type="text">
                                    </div>
                                </div>
                            </div>


                            <!-- Text input-->

                            <div class="form-group">
                                <label class="col-md-4 control-label">Author</label>
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                        <input name="author"  class="form-control" type="text">
                                    </div>
                                </div>
                            </div>

                            <!-- Text input-->

                            <div class="form-group">
                                <label class="col-md-4 control-label">Emp ID</label>
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                        <input name="empid"  class="form-control" type="text">
                                    </div>
                                </div>
                            </div>

                            <!-- Text input-->

                            <div class="form-group">
                                <label class="col-md-4 control-label">Publishere</label>
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                        <input name="publisher"  class="form-control"  type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Year</label>
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                        <input name="year"  class="form-control"  type="text">
                                    </div>
                                </div>
                            </div>



                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-warning" >Insert <span class="glyphicon glyphicon-send"></span></button>
                                    <button type="button" class="btn btn-danger" id="closeadd">Close <span class="glyphicon glyphicon-send"></span></button>
                                </div>
                            </div>

                            <?php echo form_close(); ?><br/>


                </div>



            </div>
            </fieldset>
            </form>
        </div>


        <!--Update section-->

        <div class="container">
            <div id="popup2" class="modal">
                <div class="modal-content">
                    <form class="well form-horizontal" action="<?php echo base_url();?>/index.php/admind/book/book_update" method="post"  id="contact_form"  >
                        <fieldset>

                            <!-- Form Name -->
                            <legend>Update Book Details</legend>

                            <!-- Text input-->

                            <div class="form-group">
                                <!--                            <span class="close" id="closeadd">&times;</span>-->
                                <label class="col-md-4 control-label">ISBN</label>
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input  name="isbn"  class="form-control"  type="text">
                                    </div>
                                </div>
                            </div>

                            <!-- Text input-->

                            <div class="form-group">
                                <label class="col-md-4 control-label" >Name</label>
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                                        <input name="name"  class="form-control"  type="text">
                                    </div>
                                </div>
                            </div>

                            <!-- Text input-->
                            <div class="form-group">
                                <label class="col-md-4 control-label">Title</label>
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                                        <input name="title"  class="form-control"  type="text">
                                    </div>
                                </div>
                            </div>


                            <!-- Text input-->

                            <div class="form-group">
                                <label class="col-md-4 control-label">Author</label>
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-earphone"></i></span>
                                        <input name="author"  class="form-control" type="text">
                                    </div>
                                </div>
                            </div>

                            <!-- Text input-->

                            <div class="form-group">
                                <label class="col-md-4 control-label">Emp ID</label>
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                        <input name="empid"  class="form-control" type="text">
                                    </div>
                                </div>
                            </div>

                            <!-- Text input-->

                            <div class="form-group">
                                <label class="col-md-4 control-label">Publishere</label>
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                        <input name="publisher"  class="form-control"  type="text">
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-4 control-label">Year</label>
                                <div class="col-md-4 inputGroupContainer">
                                    <div class="input-group">
                                        <span class="input-group-addon"><i class="glyphicon glyphicon-home"></i></span>
                                        <input name="year"  class="form-control"  type="text">
                                    </div>
                                </div>
                            </div>



                            <div class="form-group">
                                <label class="col-md-4 control-label"></label>
                                <div class="col-md-4">
                                    <button type="submit" class="btn btn-warning" >Update <span class="glyphicon glyphicon-send"></span></button>
                                    <button type="button" class="btn btn-danger" id="closeupdate">Close <span class="glyphicon glyphicon-send"></span></button>
                                </div>

                            </div>

                            <?php echo form_close(); ?><br/>


                </div>



            </div>
            </fieldset>
            </form>
        </div>



        <script>

            // Get the modal
            var modaladd = document.getElementById('popup');
            var modalupdate = document.getElementById('popup2');

            // Get the button that opens the modal
            var btn = document.getElementById("btnadd");
            var btn2 = document.getElementById("btnupdate");

            // Get the button that closes the modal
            var btnclose1=document.getElementById('closeadd');
            var btnclose2=document.getElementById('closeupdate');

            // When the user clicks on the button, open the modal
            btn.onclick = function() {
                modaladd.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            btnclose1.onclick = function() {
                modaladd.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modaladd) {
                    modaladd.style.display = "none";
                }
            }



            btn2.onclick = function() {
                modalupdate.style.display = "block";
            }

            // When the user clicks on <span> (x), close the modal
            btnclose2.onclick = function() {
                modalupdate.style.display = "none";
            }

            // When the user clicks anywhere outside of the modal, close it
            window.onclick = function(event) {
                if (event.target == modalupdate) {
                    modalupdate.style.display = "none";
                }
            }



        </script>




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
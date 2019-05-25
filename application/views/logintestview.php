<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {

    $user = $_POST['user'];
    $password = $_POST['password'];

    $Connection = mysqli_connect('localhost', 'root', '', 'university_project');

    if($Connection){

        // echo "We are Connected";
    }
    else{

        die("Database Connection Failed". mysqli_connect_error());

    }
// echo $user;
    $query = "select * from user_login where level = '$user'";

    $result = mysqli_query($Connection, $query);

    if (mysqli_num_rows($result) > 0) {
        // output data of each row

        while($row = mysqli_fetch_assoc($result)) {
            if($user == $row['level'] && $password == $row ['password']){
                 echo "Testinggggggggggggggggggggggggggggggggggg";
                switch ($user) {
                    case 1:
                        redirect(base_url('index.php/admin'));
                        break;
                    case 2:
                        header('Location:http://localhost/ProjectDB/admin.php');
                        break;
                    case 3:
                        header('Location: ');
                        break;
                    default:
                        break;
                }


            }
        }
    } else {

        echo "0 results";

    }

    mysqli_close($Connection);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Login Portal</title>
    <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url(); ?>/assets/loginformtemplate/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="<?php echo base_url(); ?>vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">

<div class="container">
    <div class="card card-login mx-auto mt-5">
        <div class="card-header">Login</div>
        <div class="card-body">
            <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
                <div class="form-group">
                    <label for="exampleInputEmail1">User</label>
                    <input class="form-control" id="username" name = "user" placeholder="Enter User">
                </div>
                <div class="form-group">
                    <label for="exampleInputPassword1">Password</label>
                    <input class="form-control" id="password" name ="password" type="password" placeholder="Password">
                </div>
                <input type="submit" class="btn btn-primary btn-block" name="submit" value="Login"></input>
                <!-- <a class="btn btn-primary btn-block" >Login</a> -->
                <!-- </form> -->
        </div>
    </div>
</div>
<!-- Bootstrap core JavaScript-->
<script src="<?php echo base_url(); ?>/assets/loginformtemplate/vendor/jquery/jquery-3.2.1.min.js"></script>
<script src="<?php echo base_url(); ?>/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Core plugin JavaScript-->
<script src="<?php echo base_url(); ?>/assets/vendor/jquery-easing/jquery.easing.min.js"></script>
</body>

</html>







<?php
if($_SERVER["REQUEST_METHOD"] == "POST") {

    $user = $_POST['username'];
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
                //echo "Testing";
                switch ($user) {
                    case "admin":
                        redirect(base_url('index.php/admin'));
                        break;
                    case "professor":
                        redirect(base_url('index.php/professorrole/professor'));
                        break;
                    case "student":
                        redirect(base_url('index.php/studentrole/student'));
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
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!--<link rel="icon" type="image/png" href="<?php echo base_url(); ?>/assets/template/images/icons/favicon.ico"/>-->
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/template/vendor/bootstrap/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/template/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/template/fonts/iconic/css/material-design-iconic-font.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/template/vendor/animate/animate.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/template/vendor/css-hamburgers/hamburgers.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/template/vendor/animsition/css/animsition.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/template/vendor/select2/select2.min.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/template/vendor/daterangepicker/daterangepicker.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/template/css/util.css">
	<link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>/assets/template/css/main.css">

</head>
<body>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('<?php echo base_url(); ?>/assets/template/images/bg-02.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form" method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
University Management System
</span>

					<div class="wrap-input100 validate-input" data-validate = "Enter username">
						<input class="input100" type="text" name="username" placeholder="username">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Enter password">
						<input class="input100" type="password" name="password" placeholder="Password">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>



					<div class="container-login100-form-btn">
						<button class="login100-form-btn" type="submit">
Login
						</button>
					</div>


				</form>
			</div>
		</div>
	</div>


	<div id="dropDownSelect1"></div>


	<script src="<?php echo base_url(); ?>/assets/template/vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/template/vendor/animsition/js/animsition.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/template/vendor/bootstrap/js/popper.js"></script>
	<script src="<?php echo base_url(); ?>/assets/template/vendor/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/template/vendor/select2/select2.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/template/vendor/daterangepicker/moment.min.js"></script>
	<script src="<?php echo base_url(); ?>/assets/template/vendor/daterangepicker/daterangepicker.js"></script>
	<script src="<?php echo base_url(); ?>/assets/template/vendor/countdowntime/countdowntime.js"></script>
	<script src="<?php echo base_url(); ?>/assets/template/js/main.js"></script>

</body>
</html>


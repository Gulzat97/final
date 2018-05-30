<!DOCTYPE html>
<html lang="en">
<head>
	<title>registrasiya</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->	
	<link rel="icon" type="image/png" href="regisfront/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="regisfront/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="regisfront/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="regisfront/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="regisfront/vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="regisfront/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="regisfront/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="regisfront/vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="regisfront/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="regisfront/css/util.css">
	<link rel="stylesheet" type="text/css" href="regisfront/css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">
	
	<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form"  action="save_user.php" method="post">
					<span class="login100-form-title p-b-43">
						Welcome
					</span>
					
					
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
                        <!-- 	<input class="input100" type="text" name="Login"> -->
                        <input type="text" class="input100" placeholder="Логин" name="login" size="15" maxlength="15" required>
						<!-- <span class="focus-input100"></span>
						<span class="label-input100">Login</span> -->
					</div>
					
					
					<div class="wrap-input100 validate-input" data-validate="Password is required">
                        <!--	<input class="input100" type="password" name="pass"> -->
                        <input type="password"  class="input100" placeholder="Пароль" name="password" size="15" maxlength="15" required>

                        <!--	<span class="focus-input100"></span>
                            <span class="label-input100">Password</span> -->
					</div>

					<div class="container-login100-form-btn">
                        <input class="login100-form-btn" type="submit" name="submit" value="registried">
					<!--	<button class="login100-form-btn"> Login </button> -->
					</div>
					
					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							or sign up using
						</span>
					</div>

					<div class="login100-form-social flex-c-m">
						<a href="#" class="login100-form-social-item flex-c-m bg1 m-r-5">
							<i class="fa fa-facebook-f" aria-hidden="true"></i>
						</a>

						<a href="#" class="login100-form-social-item flex-c-m bg2 m-r-5">
							<i class="fa fa-twitter" aria-hidden="true"></i>
						</a>
					</div>
				</form>

                <div class="login100-more" style="background-image: url('regisfront/images/bg-01.jpg');">
				</div>
			</div>
		</div>
	</div>

<!--===============================================================================================-->
	<script src="regisfront/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="regisfront/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="regisfront/vendor/bootstrap/js/popper.js"></script>
	<script src="regisfront/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="regisfront/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="regisfront/vendor/daterangepicker/moment.min.js"></script>
	<script src="regisfront/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="regisfront/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="regisfront/js/main.js"></script>

</body>
</html>
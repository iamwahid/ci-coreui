<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>PA'RASANGANTA</title>
<!--===============================================================================================-->	
	<link rel="icon" href="img2/pemprov.jpg" type="image/png">	
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/css/bootstrap.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #999999;">
	
	<div class="limiter">
		<div class="container-login100 row mx-0">
			<div class="login100-more d-none d-lg-block col-lg-8">
					<div class="row banner_content">
						<div class="banner_content-left-col col-sm-6 ">                      
							<h2>PA'RASANGANTA</h2>
							<p>Sistem Informasi Kepegawaian Daerah Provinsi Sulawesi Selatan</p>
						</div>
						<div>
							<a class="ghost" href="login_admin.html">Admin</a>
						</div>
					</div>
			</div>

			<div class="wrap-login100 p-l-50 p-r-50 p-t-72 p-b-50 m-0 col-sm col-md col-lg-4">
				<form class="login100-form validate-form" method="POST" action="<?=base_url('login/process')?>">
					<span class="login100-form-title p-b-59">
						Login
					</span>

					<div class="wrap-input100 text-center">
						<span class="logo"><img src="img2/pemprov.jpg" width="100px"></span>
					</div>

					<div class="wrap-input100 validate-input">
						<span class="label-input100">NIP / Nomor Register</span>
						<input class="input100" type="text" name="username" placeholder="NIP atau Nomor Register">
						<span class="focus-input100"></span>
					</div>
					<div class="flex-m w-full p-b-33">
						<div class="contact100-form-checkbox">
							<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
							<label class="label-checkbox100" for="ckb1">
								<span class="txt1">
									Remember me
								</span>
							</label>
						</div>

						
					</div>

					<div class="container-login100-form-btn">
						<div class="wrap-login100-form-btn">
							<div class="login100-form-bgbtn"></div>
							<button class="login100-form-btn">
								Login
							</button>
						</div>

						<a href="register.html" class="dis-block txt3 hov1 p-r-30 p-t-10 p-b-10 p-l-30">
							Register
							<i class="fa fa-long-arrow-right m-l-5"></i>
						</a>
					</div>
					<div class="mx-auto py-5 d-lg-none">
						<a class="btn btn-outline-warning" href="login_admin.html">Admin</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	
<!--===============================================================================================-->
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="js/main.js"></script>

</body>
</html>
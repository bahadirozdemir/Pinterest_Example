<!DOCTYPE html>
<html lang="en">
<head>
	<title>Pintereso</title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
<!--===============================================================================================-->
	<link rel="icon" type="image/png" href="giris/images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="giris/vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="giris/fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="giris/fonts/Linearicons-Free-v1.0.0/icon-font.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="giris/vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="giris/vendor/css-hamburgers/hamburgers.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="giris/vendor/animsition/css/animsition.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="giris/vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="giris/vendor/daterangepicker/daterangepicker.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="giris/css/util.css">
	<link rel="stylesheet" type="text/css" href="giris/css/main.css">
<!--===============================================================================================-->
</head>
<body style="background-color: #666666;">

	<div class="limiter">

		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form" action="{{route('checklogin')}}" method="post">
					@csrf
					<span class="login100-form-title p-b-43">
					 Pintereso'ya Hoş geldiniz
					</span>
					@if($errors->any())
					<div style="margin-left:10%;">
					<strong style="color:red;">Giriş Başarısız </strong>&nbsp;<text style="color:red;">{{$errors->first()}}</text>
				</div>
					@endif
					<div class="wrap-input100 validate-input" data-validate = "Valid email is required: ex@abc.xyz">
						<input class="input100" type="text" name="mailadres">
						<span class="focus-input100"></span>
						<span class="label-input100">E-Posta</span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Password is required">
						<input class="input100" type="password" name="pwd">
						<span class="focus-input100"></span>
						<span class="label-input100">Parola</span>
					</div>
					<div class="flex-sb-m w-full p-t-3 p-b-32">
						<div>
							<a href="#" class="txt1" style="float:right">
								Parolanızı mı unuttunuz?
							</a>
						</div>
					</div>
					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Giriş
						</button>
					</div>

					<div class="text-center p-t-46 p-b-20">
						<span class="txt2">
							veya kullanarak giriş yapın
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

				<div class="login100-more" style="background-image: url('giris/images/bg-01.jpg');">
				</div>
			</div>
		</div>
	</div>





<!--===============================================================================================-->
	<script src="giris/vendor/jquery/jquery-3.2.1.min.js"></script>
<!--===============================================================================================-->
	<script src="giris/vendor/animsition/js/animsition.min.js"></script>
<!--===============================================================================================-->
	<script src="giris/vendor/bootstrap/js/popper.js"></script>
	<script src="giris/vendor/bootstrap/js/bootstrap.min.js"></script>
<!--===============================================================================================-->
	<script src="giris/vendor/select2/select2.min.js"></script>
<!--===============================================================================================-->
	<script src="giris/vendor/daterangepicker/moment.min.js"></script>
	<script src="giris/vendor/daterangepicker/daterangepicker.js"></script>
<!--===============================================================================================-->
	<script src="giris/vendor/countdowntime/countdowntime.js"></script>
<!--===============================================================================================-->
	<script src="giris/js/main.js"></script>

</body>
</html>

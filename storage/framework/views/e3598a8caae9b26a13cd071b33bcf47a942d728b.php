<!--
<!DOCTYPE html>
<html lang="en">
<head>
	<title></title>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>

	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">

	<link rel="stylesheet" type="text/css" href="fonts/iconic/css/material-design-iconic-font.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
	
	<link rel="stylesheet" type="text/css" href="vendor/css-hamburgers/hamburgers.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/animsition/css/animsition.min.css">

	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
	
	<link rel="stylesheet" type="text/css" href="vendor/daterangepicker/daterangepicker.css">

	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">

</head>
<body>
	-->


	
	<?php $__env->startSection('content'); ?>

	<div class="limiter">
		<div class="container-login100" style="background-image: url('../projet/img/garbage-2729608640.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						Se connecter à votre compte
					</span>
							<div>	
						<select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
  								<option selected>Choisir votre profil</option>
  								<option value="1">Administration</option>
 								<option value="2">Employé</option>
  								<option value="3">Client</option>
						</select>
							</div><br />

					<div class="wrap-input100 validate-input" data-validate = "Entrez votre nom d'utilisateur">
						<input class="input100" type="text" name="username" placeholder="Entrez votre nom d'utilisateur">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate="Entrez votre mot de passe">
						<input class="input100" type="password" name="pass" placeholder="Entrez votre mot de passe">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>

					<div class="contact100-form-checkbox">
						<input class="input-checkbox100" id="ckb1" type="checkbox" name="remember-me">
						<label class="label-checkbox100" for="ckb1">
							Se souvenir de moi
						</label>
					</div>

					<div class="container-login100-form-btn">
						<button class="login100-form-btn">
							Connexion
						</button>
						<button class="login100-form-btn">
							S'inscrire
						</button>
					    </div>
					
					<div class="text-center p-t-20">
						<a class="txt1" href="#">
							Mot de passe oublié?
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>


<!--
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>

	<script src="vendor/animsition/js/animsition.min.js"></script>

	<script src="vendor/bootstrap/js/popper.js"></script>
	<script src="vendor/bootstrap/js/bootstrap.min.js"></script>

	<script src="vendor/select2/select2.min.js"></script>

	<script src="vendor/daterangepicker/moment.min.js"></script>
	<script src="vendor/daterangepicker/daterangepicker.js"></script>

	<script src="vendor/countdowntime/countdowntime.js"></script>

	<script src="js/main.js"></script>

</body>
</html>
-->

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.headpage', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/cesaire/Gestion-ordure/resources/views/layouts/login.blade.php ENDPATH**/ ?>
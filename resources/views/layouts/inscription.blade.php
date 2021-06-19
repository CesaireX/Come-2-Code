
@extends('layouts.headpage')
	
	@section('content')

	<div class="limiter">
		<div class="container-login100" style="background-image: url('images/garbage-2729608640.jpg');">
			<div class="wrap-login100">
				<form class="login100-form validate-form">
					<span class="login100-form-logo">
						<i class="zmdi zmdi-landscape"></i>
					</span>

					<span class="login100-form-title p-b-34 p-t-27">
						inscription
					</span>
						

					<div class="wrap-input100 validate-input" data-validate = "Entrez votre nom d'utilisateur">
						<input class="input100" type="text" name="username" placeholder="Nom">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Entrez votre nom d'utilisateur">
						<input class="input100" type="text" name="username" placeholder="Prenoms">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Entrez votre nom d'utilisateur">
						<input class="input100" type="text" name="tel" placeholder="Telephone">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate = "Entrez votre nom d'utilisateur">
						<input class="input100" type="text" name="username" placeholder="Adresse">
						<span class="focus-input100" data-placeholder="&#xf207;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Entrez votre mot de passe">
						<input class="input100" type="password" name="pass" placeholder=" Mot de passe">
						<span class="focus-input100" data-placeholder="&#xf191;"></span>
					</div>
					<div class="wrap-input100 validate-input" data-validate="Entrez votre mot de passe">
						<input class="input100" type="password" name="pass" placeholder=" Confirmer le mot de passe">
						<span class="focus-input100" data-placeholder="&#xf191;"></span></div>

                        <div class="wrap-input100 validate-input" data-validate="Entrez votre adresse email">
                            <input class="input100" type="email" name="email" placeholder="example@gmail.com ">
                            <span class="focus-input100" data-placeholder="&#xf191;"></span>
                        </div>
					
						
                            <div>
						<select class="form-select form-select-lg mb-3" aria-label=".form-select-lg example">
  								<option selected>Choisir votre profil</option>
  								<option value="1">Administration</option>
 								<option value="2">Employé</option>
                                 <option value="3">Client</option>
						</select>

						<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Valider
						</button>
						<button type="reset" class="login100-form-btn">
							Effacer
						</button>
					    </div>
                                </div>
				</form>
			</div>
		</div>
	</div>
	

	<div id="dropDownSelect1"></div>
	@endsection
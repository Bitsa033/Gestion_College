<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Gestion des Notes| Connexion</title>

		<!-- Font Awesome -->
		<link rel="stylesheet" href="template/plugins/fontawesome-free/css/all.min.css">
		<!-- Theme style -->
		<link rel="stylesheet" href="template/dist/css/adminlte.min.css">
		<style>
			.login-box {
				position: relative;
				bottom: 10%;
				right: 5%;
			}
		</style>
	</head>

	<body class="hold-transition login-page">
		<div class="login-box">
			<div class="login-logo">
				<a href=""><b>Connexion</b></a>
			</div>
			<!-- /.login-logo -->
			<div class="card">

				<div class="card-body login-card-body">
					
					<form method="post" action="{{ route('login') }}">
						@csrf
						<div class="input-group mb-3">
							<input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email"
								value="{{ old('email') }}" required autocomplete="email" autofocus>

								<div class="input-group-append">
									<div class="input-group-text">
										<span class="fas fa-envelope"></span>
									</div>
								</div>
								@error('email')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
						</div>
						<div class="input-group mb-3">
							<input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
								name="password" required autocomplete="current-password">

								<div class="input-group-append">
									<div class="input-group-text">
										<span class="fas fa-lock"></span>
									</div>
								</div>
								@error('password')
									<span class="invalid-feedback" role="alert">
										<strong>{{ $message }}</strong>
									</span>
								@enderror
						</div>
						<div class="row">
                            <div class="col-md-8">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label" for="remember">
                                        {{ __('Se souvenir de moi') }}
                                    </label>
                                </div>
                            </div>
                        </div>
						
						<br>
						<div class="row">
							<!-- /.col -->
							<div class="col-12">
								<button type="submit" class="btn btn-primary btn-block">Se connecter</button>
							</div>
							<!-- /.col -->
						</div>
					</form>

					
					<!-- /.social-auth-links -->

					<p class="mb-1">
						<a href="{{ route('password.request') }}">J'ai oublié mon mot de passe</a>
					</p>
					<p class="mb-0">
						<a href="{{ route('register') }}" class="text-center">Je n'ai pas de compte</a>
					</p>
				</div>
				<!-- /.login-card-body -->
			</div>
		</div>
		<!-- /.login-box -->


	</body>

</html>

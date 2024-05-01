<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Collège | Inscription</title>

		<!-- Font Awesome -->
		<link rel="stylesheet" href="../fontawesome-free/css/all.min.css">
		<!-- Theme style -->
		<link rel="stylesheet" href="../dist/css/adminlte.min.css">
		<style>
			.login-box {
				position: relative;
				bottom: 10%;
			}
		</style>
	</head>

	<body class="hold-transition login-page">
		<div class="login-box">
			<div class="login-logo">
				<a href=""><b>Gestion des Notes</b></a>
			</div>
			<!-- /.login-logo -->
			<div class="card">

				<div class="card-body login-card-body">

					<div class="mb-4">
						<p class="login-box-msg">Enregistrer-vous</p>
					</div>

					<form action="{{ route('register') }}" method="post">
                        @csrf
						<div class="input-group mb-3">
							<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
								value="{{ old('name') }}" required autocomplete="name" autofocus>

							<div class="input-group-append">
								<div class="input-group-text">
									<span class="fas fa-envelope"></span>
								</div>
							</div>
							@error('name')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
						<div class="input-group mb-3">
							<input id="surname" type="text" class="form-control @error('surname') is-invalid @enderror" name="surname"
								value="{{ old('surname') }}" required autocomplete="surname" autofocus>
							<div class="input-group-append">
								<div class="input-group-text">
									<span class="fas fa-lock"></span>
								</div>
							</div>

							@error('surname')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
						<div class="input-group mb-3">
							<input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone"
								value="{{ old('phone') }}" required autocomplete="phone" autofocus>

							<div class="input-group-append">
								<div class="input-group-text">
									<span class="fas fa-phone"></span>
								</div>
							</div>
							@error('phone')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>
						<div class="input-group mb-3">
							<input id="phone" type="text" class="form-control @error('adress') is-invalid @enderror" name="adress"
								value="{{ old('adress') }}" required autocomplete="phone" autofocus>

							<div class="input-group-append">
								<div class="input-group-text">
									<span class="fas fa-marker"></span>
								</div>
							</div>
							@error('adress')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror
						</div>

						<div class="input-group mb-3">
							<input id="email" type="text" class="form-control @error('email') is-invalid @enderror" name="email"
								value="{{ old('email') }}" required autocomplete="phone" autofocus>

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
								name="password" required autocomplete="new-password">

							<div class="input-group-append">
								<div class="input-group-text">
									<span class="fas fa-key"></span>
								</div>
							</div>
							@error('password')
								<span class="invalid-feedback" role="alert">
									<strong>{{ $message }}</strong>
								</span>
							@enderror


						</div>

                        <div class="input-group mb-3">
							<div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>

							<div class="input-group-append">
								<div class="input-group-text">
									<span class="fas fa-key"></span>
								</div>
							</div>
							
						</div>

						<div class="row">

							<!-- /.col -->
							<div class="col-12">
								<button type="submit" class="btn btn-primary btn-block">Créer mon compte</button>
							</div>
							<!-- /.col -->
						</div>
					</form>

					{# <div class="social-auth-links text-center mb-3">
								<p>- OU -</p>
								<a href="#" class="btn btn-block btn-primary">
										<i class="fab fa-facebook mr-2"></i> Se connecter avec Facebook
								</a>
								<a href="#" class="btn btn-block btn-warning">
										<i class="fab fa-google mr-2"></i> Se connecter avec Google
								</a>
						</div> #}
					<!-- /.social-auth-links -->

					<p class="mb-0">
						<a href="{{ path('app_login') }}" class="text-center">J'ai déja un compte</a>
					</p>
				</div>
				<!-- /.login-card-body -->
			</div>
		</div>
		<!-- /.login-box -->


	</body>

</html>

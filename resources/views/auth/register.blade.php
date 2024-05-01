<!DOCTYPE html>
<html lang="en">

	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Collège | Inscription</title>

		<!-- Font Awesome -->
		<link rel="stylesheet" href="template/plugins/fontawesome-free/css/all.min.css">
		<!-- Theme style -->
		<link rel="stylesheet" href="template/dist/css/adminlte.min.css">
		<style>
			.login-box {
				position: relative;
				top: 8%;
				right: 5%;
			}
		</style>
	</head>

	<body class="hold-transition login-page">
		<div class="login-box">
			<div class="login-logo">
				<a href=""><b>Inscription</b></a>
			</div>
			<!-- /.login-logo -->
			<div class="card">

				<div class="card-body login-card-body">

					<form action="{{ route('register') }}" method="post">
                        @csrf
						<div class="input-group mb-3">
							<input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name"
								value="{{ old('name') }}" placeholder="Nom" required autocomplete="name" autofocus>

							<div class="input-group-append">
								<div class="input-group-text">
									<span class="fas fa-user"></span>
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
								value="{{ old('surname') }}" placeholder="Prénom" required autocomplete="surname" autofocus>
							<div class="input-group-append">
								<div class="input-group-text">
									<span class="fas fa-user"></span>
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
								value="{{ old('phone') }}" placeholder="Contact" required autocomplete="phone" autofocus>

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
								value="{{ old('adress') }}" placeholder="Adresse" required autocomplete="phone" autofocus>

							<div class="input-group-append">
								<div class="input-group-text">
									<span class="fa fa-map-marker"></span>
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
								value="{{ old('email') }}" placeholder="Email" required autocomplete="phone" autofocus>

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
								name="password" placeholder="Mot de passe" required autocomplete="new-password">

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
                            <input id="password-confirm" placeholder="Confirmez le mot de passe" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
							
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

					<p class="mb-0">
						<a href="/" class="text-center">J'ai déja un compte</a>
					</p>
				</div>
				<!-- /.login-card-body -->
			</div>
		</div>
		<!-- /.login-box -->


	</body>

</html>

<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
<head>

	@include('meta.avanzada', array('title' => config('app.name', 'si no') . ' | Con sueños ',
																	'description' => 'Empresa de jovenes empredendores ',
																	'author' => '',
																	'keywords' => '',
																	'publisher' => '',
																	'image' => '',
																	'create_at' => '2013-09-17T05:59:00+01:00',
																	'update_at' => '2013-09-16T19:08:47+01:00'))
	@include('overall.core')

	<!-- Theme JS files -->
	<script type="text/javascript" src="assets/js/plugins/forms/styling/uniform.min.js"></script>

	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<script type="text/javascript" src="assets/js/pages/login.js"></script>
	<!-- /theme JS files -->

</head>

<body class="login-container">

	@include('overall.offnav')
				@component('inc.container')
				<!-- Advanced login -->
				<form method="POST" action="{{ route('login') }}">
					{{ csrf_field() }}

					<div class="panel panel-body login-form">

						<div class="text-center">
							<div class="icon-object border-slate-300 text-slate-300"><i class="icon-reading"></i></div>
							<h5 class="content-group">Ingrese a su cuenta <small class="display-block">Tus credenciales</small></h5>
						</div>

						<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback has-feedback-left">
							<input type="text" class="form-control" name="email" placeholder="Correo" value="{{ old('email') }}">
							<div class="form-control-feedback">
								<i class="icon-user text-muted"></i>
							</div>
							@if ($errors->has('email'))
									<span class="help-block">
											<strong>{{ $errors->first('email') }}</strong>
									</span>
							@endif
						</div>

						<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }} has-feedback has-feedback-left">
							<input type="password" class="form-control" name="password" placeholder="Contraseña">
							<div class="form-control-feedback">
								<i class="icon-lock2 text-muted"></i>
							</div>
							@if ($errors->has('password'))
									<span class="help-block">
											<strong>{{ $errors->first('password') }}</strong>
									</span>
							@endif
						</div>

						<div class="form-group login-options">
							<div class="row">
								<div class="col-sm-6">
									<label class="checkbox-inline">
										<input type="checkbox" class="styled" name="remember" {{ old('remember') ? 'checked' : '' }}> Recordarme
									</label>
								</div>

								<div class="col-sm-6 text-right">
									<a href="{{ route('password.request') }}">Olvido su contraseña?</a>
								</div>
							</div>
						</div>

						<div class="form-group">
							<button type="submit" class="btn bg-blue btn-block">Ingresar <i class="icon-arrow-right14 position-right"></i></button>
						</div>

						<div class="content-divider text-muted form-group"><span>O registrate con</span></div>

						<ul class="list-inline form-group list-inline-condensed text-center">
							<li><a href="#" class="btn border-indigo text-indigo btn-flat btn-icon btn-rounded"><i class="icon-facebook"></i></a></li>
							<li><a href="#" class="btn border-pink-300 text-pink-300 btn-flat btn-icon btn-rounded"><i class="icon-dribbble3"></i></a></li>
							<li><a href="#" class="btn border-slate-600 text-slate-600 btn-flat btn-icon btn-rounded"><i class="icon-github"></i></a></li>
							<li><a href="#" class="btn border-info text-info btn-flat btn-icon btn-rounded"><i class="icon-twitter"></i></a></li>
						</ul>

						<div class="content-divider text-muted form-group"><span>No tienes una cuenta?</span></div>

						<a href="{{ route('register') }}" class="btn btn-default btn-block content-group">Registrame</a>
						<span class="help-block text-center no-margin">Al continuar, estas confirmando que has leído nuestros <a href="#">Terminos &amp; Condiciones</a> y <a href="#">Politica de Cookie</a></span>
						
					</div>
				</form>
				<!-- /advanced login -->

				<!--
				<form class="form-horizontal" role="form" method="POST" action="{{ route('login') }}">
											{{ csrf_field() }}

											<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
													<label for="email" class="col-md-4 control-label">E-Mail Address</label>

													<div class="col-md-6">
															<input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus>

															@if ($errors->has('email'))
																	<span class="help-block">
																			<strong>{{ $errors->first('email') }}</strong>
																	</span>
															@endif
													</div>
											</div>

											<div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}">
													<label for="password" class="col-md-4 control-label">Password</label>

													<div class="col-md-6">
															<input id="password" type="password" class="form-control" name="password" required>

															@if ($errors->has('password'))
																	<span class="help-block">
																			<strong>{{ $errors->first('password') }}</strong>
																	</span>
															@endif
													</div>
											</div>

											<div class="form-group">
													<div class="col-md-6 col-md-offset-4">
															<div class="checkbox">
																	<label>
																			<input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> Remember Me
																	</label>
															</div>
													</div>
											</div>

											<div class="form-group">
													<div class="col-md-8 col-md-offset-4">
															<button type="submit" class="btn btn-primary">
																	Login
															</button>

															<a class="btn btn-link" href="{{ route('password.request') }}">
																	Forgot Your Password?
															</a>
													</div>
											</div>
									</form>
				-->

				@endcomponent



			@include('overall.footer')

</body>

</html>

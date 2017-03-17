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
	<script type="text/javascript" src="assets/js/core/app.js"></script>
	<!-- /theme JS files -->

</head>

<body class="login-container">

	@include('overall.offnav')

    @component('inc.container')

    @if (session('status'))
				<div class="alert alert-success alert-styled-left alert-arrow-left alert-bordered">
						<button type="button" class="close" data-dismiss="alert"><span>&times;</span><span class="sr-only">Close</span></button>
						<span class="text-semibold">Operación exitosa!</span> {{ session('status') }}
				</div>
    @endif

		<form method="POST" action="{{ route('password.email') }}">
            {{ csrf_field() }}
			<div class="panel panel-body login-form">
				<div class="text-center">
					<div class="icon-object border-warning text-warning"><i class="icon-spinner11"></i></div>
					<h5 class="content-group">Recuperación de Contrasreña <small class="display-block">We'll send you instructions in email</small></h5>
				</div>

				<div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} has-feedback">
					<input type="email" class="form-control" id="email" name="email" placeholder="Tu correo" value="{{ old('email') }}" required>
					<div class="form-control-feedback">
						<i class="icon-mail5 text-muted"></i>
					</div>
          @if ($errors->has('email'))
              <span class="help-block">
                  <strong>{{ $errors->first('email') }}</strong>
              </span>
          @endif
				</div>

				<button type="submit" class="btn bg-blue btn-block">Recuperar contraseña <i class="icon-arrow-right14 position-right"></i></button>
			</div>
		</form>

<!--
    <form class="form-horizontal" role="form" method="POST" action="{{ route('password.email') }}">
        {{ csrf_field() }}

        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
            <label for="email" class="col-md-4 control-label">E-Mail Address</label>

            <div class="col-md-6">
                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                @endif
            </div>
        </div>

        <div class="form-group">
            <div class="col-md-6 col-md-offset-4">
                <button type="submit" class="btn btn-primary">
                    Send Password Reset Link
                </button>
            </div>
        </div>
    </form>
-->
    @endcomponent

	@include('overall.footer')

</body>

</html>

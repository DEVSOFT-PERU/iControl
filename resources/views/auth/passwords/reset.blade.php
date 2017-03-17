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
		<!-- Password recovery -->
        <!--
		<form action="http://demo.interface.club/limitless/layout_4/LTR/default/index.html">
			<div class="panel panel-body login-form">
				<div class="text-center">
					<div class="icon-object border-warning text-warning"><i class="icon-spinner11"></i></div>
					<h5 class="content-group">Password recovery <small class="display-block">We'll send you instructions in email</small></h5>
				</div>

				<div class="form-group has-feedback">
					<input type="email" class="form-control" placeholder="Your email">
					<div class="form-control-feedback">
						<i class="icon-mail5 text-muted"></i>
					</div>
				</div>

				<button type="submit" class="btn bg-blue btn-block">Reset password <i class="icon-arrow-right14 position-right"></i></button>
			</div>
		</form>
        -->
		<!-- /password recovery -->


        @if (session('status'))
            <div class="alert alert-success">
                {{ session('status') }}
            </div>
        @endif

        <form class="form-horizontal" role="form" method="POST" action="{{ route('password.request') }}">
            {{ csrf_field() }}

            <input type="hidden" name="token" value="{{ $token }}">

            <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }}">
                <label for="email" class="col-md-4 control-label">E-Mail Address</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control" name="email" value="{{ $email or old('email') }}" required autofocus>

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

            <div class="form-group{{ $errors->has('password_confirmation') ? ' has-error' : '' }}">
                <label for="password-confirm" class="col-md-4 control-label">Confirm Password</label>
                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>

                    @if ($errors->has('password_confirmation'))
                        <span class="help-block">
                            <strong>{{ $errors->first('password_confirmation') }}</strong>
                        </span>
                    @endif
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-6 col-md-offset-4">
                    <button type="submit" class="btn btn-primary">
                        Reset Password
                    </button>
                </div>
            </div>
        </form>



    @endcomponent

	@include('overall.footer')

</body>

</html>

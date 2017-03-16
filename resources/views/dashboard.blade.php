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
	<script type="text/javascript" src="{{ URL::asset('assets/js/core/app.js') }}"></script>
	<!-- /theme JS files -->

	<!-- Devsoft JS files -->
	<script type="text/javascript" src="{{ URL::asset('js/app.js') }}"></script>
	<!-- /Devsoft JS files -->

</head>

<body>

	@include('overall.topnav')
	@include('overall.nav')

	<!-- Page header -->
	<div class="page-header">
		<div class="page-header-content">
			<div class="page-title">
				<h4>
					<i class="icon-arrow-left52 position-left"></i>
					<span class="text-semibold">Home</span> - Dashboard
					<small class="display-block">Buen día, {{ Auth::user()->name }}!</small>
				</h4>
			</div>

			<div class="heading-elements">
				<div class="heading-btn-group">
					<a href="#" class="btn btn-link btn-float has-text"><i class="icon-bars-alt text-primary"></i><span>Estadisticas</span></a>
					<a href="#" class="btn btn-link btn-float has-text"><i class="icon-calculator text-primary"></i> <span>Facturas</span></a>
					<a href="#" class="btn btn-link btn-float has-text"><i class="icon-calendar5 text-primary"></i> <span>Calendario</span></a>
				</div>
			</div>
		</div>
	</div>
	<!-- /page header -->

	@component('inc.container')

		@component('inc.panel', array('titulo'=>'Welcome to iControl'))
				Hola
		@endcomponent

		<!-- Dashboard content -->
		<div class="row">
			<div class="col-lg-5">

			</div>
		</div>
		<!-- /dashboard content -->

	@endcomponent

	@include('overall.footer')

</body>

</html>

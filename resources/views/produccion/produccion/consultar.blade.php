<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Limitless - Responsive Web Application Kit by Eugene Kopyov</title>

	<!-- Global stylesheets -->
	<link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
	<link href="{{ URL::asset('assets/css/icons/icomoon/styles.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ URL::asset('assets/css/bootstrap.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ URL::asset('assets/css/core.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ URL::asset('assets/css/components.css') }}" rel="stylesheet" type="text/css">
	<link href="{{ URL::asset('assets/css/colors.css') }}" rel="stylesheet" type="text/css">
	<!-- /global stylesheets -->

	<!-- Core JS files -->
	<script type="text/javascript" src="{{ URL::asset('assets/js/plugins/loaders/pace.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('assets/js/core/libraries/jquery.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('assets/js/core/libraries/bootstrap.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('assets/js/plugins/loaders/blockui.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('assets/js/plugins/ui/nicescroll.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('assets/js/plugins/ui/drilldown.js') }}"></script>
	<!-- /core JS files -->

	<!-- Theme JS files -->
	<script type="text/javascript" src="{{ URL::asset('assets/js/plugins/forms/selects/select2.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('assets/js/plugins/forms/styling/uniform.min.js') }}"></script>

	<script type="text/javascript" src="{{ URL::asset('assets/js/core/app.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('assets/js/pages/form_layouts.js') }}"></script>
	<!-- /theme JS files -->

</head>

<body>

	@include('overall.topnav') @include('overall.nav')


	<!-- Page header -->
	<div class="page-header">
		<div class="page-header-content">
			<div class="page-title">
				<h4><i class="icon-arrow-left52 position-left"></i> <span class="text-semibold">Form Layouts</span> - Vertical</h4>

				<ul class="breadcrumb breadcrumb-caret position-right">
					<li><a href="{{ route('dashboard') }}">Inicio</a></li>
					<li><a href="">Producción</a></li>
					<li><a href="">Registro</a></li>
					<li class="active">Producción</li>
				</ul>
			</div>

			<div class="heading-elements">
				<div class="heading-btn-group">
					<a href="#" class="btn btn-link btn-float has-text"><i class="icon-bars-alt text-primary"></i><span>Statistics</span></a>
					<a href="#" class="btn btn-link btn-float has-text"><i class="icon-calculator text-primary"></i> <span>Invoices</span></a>
					<a href="#" class="btn btn-link btn-float has-text"><i class="icon-calendar5 text-primary"></i> <span>Schedule</span></a>
				</div>
			</div>
		</div>
	</div>
	<!-- /page header -->


	<!-- Page container -->
	<div class="page-container">

		<!-- Page content -->
		<div class="page-content">

			<!-- Main content -->
			<div class="content-wrapper">

				<!-- Vertical form options -->
				<div class="row">
					<div class="col-md-12">

						<!-- Static mode -->
						<form action="#">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h5 class="panel-title">Static mode</h5>
									<div class="heading-elements">
										<ul class="icons-list">
											<li>
												<a data-action="collapse"></a>
											</li>
											<li>
												<a data-action="reload"></a>
											</li>
											<li>
												<a data-action="close"></a>
											</li>
										</ul>
									</div>
								</div>

								<div class="panel-body">
									<div class="form-group">
										<label class="text-semibold">Name:</label>
										<div class="form-control-static">Eugene Kopyov</div>
									</div>

									<div class="form-group">
										<label class="text-semibold">Password:</label>
										<input type="password" class="form-control" readonly="readonly" value="********">
									</div>

									<div class="form-group">
										<label class="text-semibold">Your state:</label>
										<select class="select" disabled="disabled">
											<optgroup label="Alaskan/Hawaiian Time Zone">
												<option value="AK">Alaska</option>
												<option value="HI">Hawaii</option>
											</optgroup>
											<optgroup label="Pacific Time Zone">
												<option value="CA">California</option>
												<option value="NV" selected="selected">Nevada</option>
												<option value="WA">Washington</option>
											</optgroup>
											<optgroup label="Mountain Time Zone">
												<option value="AZ">Arizona</option>
												<option value="CO">Colorado</option>
												<option value="WY">Wyoming</option>
											</optgroup>
											<optgroup label="Central Time Zone">
												<option value="AL">Alabama</option>
												<option value="AR">Arkansas</option>
												<option value="KY">Kentucky</option>
											</optgroup>
											<optgroup label="Eastern Time Zone">
												<option value="CT">Connecticut</option>
												<option value="DE">Delaware</option>
												<option value="FL">Florida</option>
											</optgroup>
										</select>
									</div>

									<div class="form-group">
										<label class="display-block text-semibold">Gender:</label>

										<label class="radio-inline disabled">
											<input type="radio" class="styled" name="gender" disabled="disabled" checked="checked">
											Male
										</label>

										<label class="radio-inline disabled">
											<input type="radio" class="styled" name="gender" disabled="disabled">
											Female
										</label>
									</div>

									<div class="form-group">
										<label class="text-semibold">Your avatar:</label>
										<div class="media no-margin-top">
											<div class="media-left">
												<a href="#"><img src="assets/images/demo/users/face10.jpg" style="width: 58px; height: 58px; border-radius: 2px;" alt=""></a>
											</div>

											<div class="media-body">
												<input type="file" class="file-styled">
												<span class="help-block">Accepted formats: gif, png, jpg. Max file size 2Mb</span>
											</div>
										</div>
									</div>

									<div class="form-group">
										<label class="text-semibold">Tags:</label>
										<select multiple="multiple" disabled="disabled" data-placeholder="Enter tags" class="select-icons">
											<optgroup label="Services">
												<option value="wordpress2" data-icon="wordpress2">Wordpress</option>
												<option value="tumblr2" data-icon="tumblr2">Tumblr</option>
												<option value="stumbleupon" data-icon="stumbleupon">Stumble upon</option>
												<option value="pinterest2" data-icon="pinterest2">Pinterest</option>
												<option value="lastfm2" data-icon="lastfm2">Lastfm</option>
											</optgroup>
											<optgroup label="File types">
												<option value="pdf" data-icon="file-pdf">PDF</option>
												<option value="word" data-icon="file-word">Word</option>
												<option value="excel" data-icon="file-excel">Excel</option>
												<option value="openoffice" data-icon="file-openoffice">Open office</option>
											</optgroup>
											<optgroup label="Browsers">
												<option value="chrome" data-icon="chrome" selected="selected">Chrome</option>
												<option value="firefox" data-icon="firefox" selected="selected">Firefox</option>
												<option value="safari" data-icon="safari">Safari</option>
												<option value="opera" data-icon="opera">Opera</option>
												<option value="IE" data-icon="IE">IE</option>
											</optgroup>
										</select>
									</div>

									<div class="form-group">
										<label class="text-semibold">Your message:</label>
										<div class="form-control-static">
											<p>One morning, when Gregor Samsa woke from troubled dreams, he found himself transformed in his bed into a horrible vermin. He lay on his armour-like back, and if he lifted his head a little he could see his brown belly, slightly domed and divided
												by arches into stiff sections. The bedding was hardly able to cover it and seemed ready to slide off any moment.</p>
											His many legs, pitifully thin compared with the size of the rest of him, waved about helplessly as he looked.
										</div>
									</div>

									<div class="text-right">
										<button type="submit" class="btn btn-primary">Submit form <i class="icon-arrow-right14 position-right"></i></button>
									</div>
								</div>
							</div>
						</form>
						<!-- /static mode -->

					</div>
				</div>
				<!-- /vertical form options -->

			</div>
			<!-- /main content -->

		</div>
		<!-- /page content -->

	</div>
	<!-- /page container -->


	<!-- Footer -->
	<div class="footer text-muted">
		&copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
	</div>
	<!-- /footer -->

</body>

</html>

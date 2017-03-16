<!DOCTYPE html>
<html lang="en">

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
	<script type="text/javascript" src="{{ URL::asset('assets/js/plugins/forms/selects/select2.min.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('assets/js/plugins/forms/styling/uniform.min.js') }}"></script>

	<script type="text/javascript" src="{{ URL::asset('assets/js/core/app.js') }}"></script>
	<script type="text/javascript" src="{{ URL::asset('assets/js/pages/form_layouts.js') }}"></script>
	<!-- /theme JS files -->

</head>

<body>

	@include('overall.topnav')
	@include('overall.nav')


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


@component('inc.container')

				<!-- Fieldset legend -->
				<div class="row">

					<div class="col-md-12">

						<!-- Advanced legend -->
						<form action="#">
							<div class="panel panel-flat">
								<div class="panel-heading">
									<h5 class="panel-title">Advanced legend</h5>
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
									<fieldset>
										<legend class="text-semibold">
											<i class="icon-file-text2 position-left"></i> Enter your information
											<a class="control-arrow" data-toggle="collapse" data-target="#demo1">
												<i class="icon-circle-down2"></i>
											</a>
										</legend>

										<div class="collapse in" id="demo1">
											<div class="form-group">
												<label>Enter your name:</label>
												<input type="text" class="form-control" placeholder="Eugene Kopyov">
											</div>

											<div class="form-group">
												<label>Enter your password:</label>
												<input type="password" class="form-control" placeholder="Your strong password">
											</div>

											<div class="form-group">
												<label>Repeat password:</label>
												<input type="password" class="form-control" placeholder="Repeat password">
											</div>

											<div class="form-group">
												<label>Your message:</label>
												<textarea rows="5" cols="5" class="form-control" placeholder="Enter your message here"></textarea>
											</div>
										</div>
									</fieldset>

									<fieldset>
										<legend class="text-semibold">
											<i class="icon-reading position-left"></i> Add personal details
											<a class="control-arrow" data-toggle="collapse" data-target="#demo2">
												<i class="icon-circle-down2"></i>
											</a>
										</legend>

										<div class="collapse in" id="demo2">
											<div class="form-group">
												<label>Your country:</label>
												<select data-placeholder="Select your country" class="select">
			                                        <option value="USA">USA</option>
			                                        <option value="United Kingdom">United Kingdom</option>
			                                        <option value="...">...</option>
			                                        <option value="Australia">Australia</option>
			                                    </select>
											</div>

											<div class="form-group">
												<label>Select your state:</label>
												<select data-placeholder="Select your state" class="select">
													<option></option>
													<optgroup label="Alaskan/Hawaiian Time Zone">
														<option value="AK">Alaska</option>
														<option value="HI">Hawaii</option>
													</optgroup>
													<optgroup label="Pacific Time Zone">
														<option value="CA">California</option>
														<option value="NV">Nevada</option>
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
												<label class="display-block">Gender:</label>

												<label class="radio-inline">
													<input type="radio" name="gender2" class="styled" checked="checked">
													Male
												</label>

												<label class="radio-inline">
													<input type="radio" name="gender2" class="styled">
													Female
												</label>
											</div>

											<div class="form-group">
												<label class="display-block">Your CV:</label>
												<input type="file" class="file-styled">
												<span class="help-block">Accepted formats: pdf, doc. Max file size 2Mb</span>
											</div>

											<div class="form-group">
												<label>About yourself:</label>
												<textarea rows="5" cols="5" placeholder="Few words about yourself..." class="form-control"></textarea>
											</div>
										</div>
									</fieldset>

									<div class="text-right">
										<button type="submit" class="btn btn-primary">Submit form <i class="icon-arrow-right14 position-right"></i></button>
									</div>
								</div>
							</div>
						</form>
						<!-- /a legend -->

					</div>
				</div>
				<!-- /fieldset legend -->


				<!-- 2 columns form -->
				<form action="#">
					<div class="panel panel-flat">
						<div class="panel-heading">
							<h5 class="panel-title">Multiple columns</h5>
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
							<div class="row">
								<div class="col-md-6">
									<fieldset>
										<legend class="text-semibold"><i class="icon-reading position-left"></i> Personal details</legend>

										<div class="form-group">
											<label>Enter your name:</label>
											<input type="text" class="form-control" placeholder="Eugene Kopyov">
										</div>

										<div class="form-group">
											<label>Enter your password:</label>
											<input type="password" class="form-control" placeholder="Your strong password">
										</div>

										<div class="form-group">
											<label>Select your state:</label>
											<select data-placeholder="Select your state" class="select">
												<option></option>
												<optgroup label="Alaskan/Hawaiian Time Zone">
													<option value="AK">Alaska</option>
													<option value="HI">Hawaii</option>
												</optgroup>
												<optgroup label="Pacific Time Zone">
													<option value="CA">California</option>
													<option value="NV">Nevada</option>
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
													<option value="WV">West Virginia</option>
												</optgroup>
											</select>
										</div>

										<div class="form-group">
											<label class="display-block">Attach screenshot:</label>
											<input type="file" class="file-styled">
										</div>

										<div class="form-group">
											<label>Your message:</label>
											<textarea rows="5" cols="5" class="form-control" placeholder="Enter your message here"></textarea>
										</div>
									</fieldset>
								</div>

								<div class="col-md-6">
									<fieldset>
										<legend class="text-semibold"><i class="icon-truck position-left"></i> Shipping details</legend>

										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>First name:</label>
													<input type="text" placeholder="Eugene" class="form-control">
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group">
													<label>Last name:</label>
													<input type="text" placeholder="Kopyov" class="form-control">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Email:</label>
													<input type="text" placeholder="eugene@kopyov.com" class="form-control">
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group">
													<label>Phone #:</label>
													<input type="text" placeholder="+99-99-9999-9999" class="form-control">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-6">
												<div class="form-group">
													<label>Country:</label>
													<select data-placeholder="Select your country" class="select">
						                            	<option></option>
						                                <option value="Cambodia">Cambodia</option>
						                                <option value="Cameroon">Cameroon</option>
						                                <option value="Canada">Canada</option>
						                                <option value="Cape Verde">Cape Verde</option>
						                            </select>
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group">
													<label>State/Province:</label>
													<input type="text" placeholder="Bayern" class="form-control">
												</div>
											</div>
										</div>

										<div class="row">
											<div class="col-md-3">
												<div class="form-group">
													<label>ZIP code:</label>
													<input type="text" placeholder="1031" class="form-control">
												</div>
											</div>

											<div class="col-md-3">
												<div class="form-group">
													<label>City:</label>
													<input type="text" placeholder="Munich" class="form-control">
												</div>
											</div>

											<div class="col-md-6">
												<div class="form-group">
													<label>Address line:</label>
													<input type="text" placeholder="Ring street 12" class="form-control">
												</div>
											</div>
										</div>

										<div class="form-group">
											<label>Additional message:</label>
											<textarea rows="5" cols="5" class="form-control" placeholder="Enter your message here"></textarea>
										</div>
									</fieldset>
								</div>
							</div>

							<div class="text-right">
								<button type="submit" class="btn btn-primary">Submit form <i class="icon-arrow-right14 position-right"></i></button>
							</div>
						</div>
					</div>
				</form>
				<!-- /2 columns form -->
@endcomponent

	<!-- Footer -->
	<div class="footer text-muted">
		&copy; 2015. <a href="#">Limitless Web App Kit</a> by <a href="http://themeforest.net/user/Kopyov" target="_blank">Eugene Kopyov</a>
	</div>
	<!-- /footer -->

</body>

</html>

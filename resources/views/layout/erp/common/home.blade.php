<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<meta name="description" content="Responsive Admin &amp; Dashboard Template based on Bootstrap 5">
	<meta name="author" content="AdminKit">
	<meta name="keywords" content="adminkit, bootstrap, bootstrap 5, admin, dashboard, template, responsive, css, sass, html, theme, front-end, ui kit, web">
	<!-- for Modal -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css">
	<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"></script>
	<!-- End Modal -->
	<link rel="shortcut icon" href="{{asset('assets')}}/img/icons/icon-48x48.png" />

	<title>Admin</title>

	<link href="{{asset('assets')}}/css/app.css" rel="stylesheet">
</head>

<body>
	<div class="wrapper">
		@include("layout.erp.common.sidebar")
		<div class="main">
			@include("layout.erp.common.navbar")

			@yield('page')
			@include("layout.erp.common.footer")
		</div>
	</div>

	<script src="{{asset('assets')}}/js/app.js"></script>
	<script src="{{asset('assets')}}/js/chartjs-dashboard.js"></script>
	<script src="{{asset('assets')}}/js/chartjs-dashboard-bar.js"></script>
	<script src="{{asset('assets')}}/js/chartjs-dashboard-pie.js"></script>
	<script src="{{asset('assets')}}/js/datetimepicker-dashboard.js"></script>
	<script src="{{asset('assets')}}/js/jsVectorMap.js"></script>
	<script src="{{asset('assets')}}/js/modal.js"></script>

</body>

</html>
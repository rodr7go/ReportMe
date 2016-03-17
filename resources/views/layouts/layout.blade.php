<!doctype html>
<html lang="es">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>@yield('title', 'Reportes')</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
	<meta name="viewport" content="width=device-width" />


	<!-- Bootstrap core CSS     -->
	<link href="/css/bootstrap.min.css" rel="stylesheet" />

	<!-- Animation library for notifications   -->
	<link href="/css/animate.min.css" rel="stylesheet"/>

	<!--  Light Bootstrap Table core CSS    -->
	<link href="/css/light-bootstrap-dashboard.css" rel="stylesheet"/>


	<!--  CSS for Demo Purpose, don't include it in your project     -->
	<link href="/css/demo.css" rel="stylesheet" />


	<!--     Fonts and icons     -->
	<link href="http://maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
	<link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300' rel='stylesheet' type='text/css'>
	<link href="/css/pe-icon-7-stroke.css" rel="stylesheet" />

	@yield('styles')

</head>


<body>
	<div class="wrapper">

		@include('layouts.menu')
		<div class="main-panel">
			@include('layouts.top-bar')
			<div class="content">
				<div class="container-fluid">
					@yield('content')
				</div>
			</div>
			@include('layouts.footer')
		</div>
	</div>


	<!--   Core JS Files   -->
	<script src="/js/jquery-1.10.2.js" type="text/javascript"></script>
	<script src="/js/bootstrap.min.js" type="text/javascript"></script>

	<!--  Checkbox, Radio & Switch Plugins -->
	<script src="/js/bootstrap-checkbox-radio-switch.js"></script>

	<!--  Charts Plugin -->
	<script src="/js/chartist.min.js"></script>

	<!--  Notifications Plugin    -->
	<script src="/js/bootstrap-notify.js"></script>

	<!--  Google Maps Plugin    -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=false"></script>

	<!-- Light Bootstrap Table Core javascript and methods for Demo purpose -->
	<script src="/js/light-bootstrap-dashboard.js"></script>

	<!-- Light Bootstrap Table DEMO methods, don't include it in your project! -->
	<script src="/js/demo.js"></script>

	<script type="text/javascript">
		$(document).ready(function(){

			demo.initChartist();

			$.notify({
				icon: 'pe-7s-gift',
				message: "Welcome to <b>Light Bootstrap Dashboard</b> - a beautiful freebie for every web developer."

			},{
				type: 'info',
				timer: 4000
			});

		});
	</script>

	@yield('scripts')
	
</body>

</html>

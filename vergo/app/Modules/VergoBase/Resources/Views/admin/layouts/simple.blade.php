<!DOCTYPE html>
<html lang="ru">
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<!-- Meta, title, CSS, favicons, etc. -->
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<title>
		@section('title')
			ICT Admin Panel |
		@show
	</title>

	<!-- Bootstrap core CSS -->

	<link href="{{$app['vergo_base.assets']->getPath('css/bootstrap.min.css')}}" rel="stylesheet">

	<link href="{{$app['vergo_base.assets']->getPath('fonts/css/font-awesome.min.css')}}" rel="stylesheet">
	<link href="{{$app['vergo_base.assets']->getPath('css/animate.min.css')}}" rel="stylesheet">

	<!-- Custom styling plus plugins -->
	<link href="{{$app['vergo_base.assets']->getPath('css/custom.css')}}" rel="stylesheet">
	<link href="{{$app['vergo_base.assets']->getPath('css/icheck/flat/green.css')}}" rel="stylesheet">


	<script src="{{$app['vergo_base.assets']->getPath('js/lib/jquery/jquery-2.1.3.min.js')}}"></script>

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>

<body style="background:#f8f8f8;">

<div class="">
	<div id="wrapper">
		@yield('content')
	</div>
</div>

</body>

</html>
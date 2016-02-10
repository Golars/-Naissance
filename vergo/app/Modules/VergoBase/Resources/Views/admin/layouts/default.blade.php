<!DOCTYPE html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
	<meta http-equiv="Content-Language" Content="ru">
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
	<link href="/css/bootstrap.min.css" rel="stylesheet">

	<link href="/fonts/css/font-awesome.min.css" rel="stylesheet">
	<link href="/css/animate.min.css" rel="stylesheet">

	<!-- Custom styling plus plugins -->
	<link href="/css/custom.css" rel="stylesheet">
	<link href="/css/icheck/flat/green.css" rel="stylesheet">
	<link href="/css/admin.css" rel="stylesheet">
	<link rel="stylesheet" href="/css/loader.css" >

	<script src="/js/lib/jquery/jquery-2.1.3.min.js"></script>

	<script type="text/javascript" src="/js/lib/underscore/underscore-min.js"></script>
	<!--[if lt IE 9]>
	<script src="../assets/js/ie8-responsive-file-warning.js"></script>
	<![endif]-->

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->
	<link rel="icon" href="/favicon.png"/>
	<link rel="icon" href="/favicon-32.png" sizes="32x32"/>
	<link rel="icon" href="/favicon-64.png" sizes="64x64"/>
	<!--[if IE]><link rel="shortcut icon" href="/favicon.png"><![endif]-->
	<!-- IE10 -->
	<meta name="msapplication-TileColor" content="#D83434">
	<meta name="msapplication-TileImage" content="/favicon.png">
	<link href="/css/loading.css" rel="stylesheet">
</head>

<body class="nav-md">

<div class="container body">

	<div class="main_container">

		<div class="col-md-3 left_col">
			<div class="left_col scroll-view">

				<div class="navbar nav_title" style="border: 0;">
					<a href="{{route('admin:index')}}" class="site_title"><i class="fa fa-globe"></i>
						<span>
							@section('baseName')
								VERGO Skillet
							@show
						</span>
					</a>
				</div>
				<div class="clearfix"></div>


				<!-- menu prile quick info -->
				<div class="profile">
					<div class="profile_pic">
						<img src="{{Request::user()->cover}}" alt="..." class="img-circle profile_img">
					</div>
					<div class="profile_info">
						<span>Здраствуйте,</span>
						<h2>{{Request::user()->getFullName()}}</h2>
					</div>
				</div>
				<!-- /menu prile quick info -->

				<br />

				<!-- sidebar menu -->
				@include('admin.layouts.menu')
				<!-- /sidebar menu -->

				<!-- /menu footer buttons -->
				<div class="sidebar-footer hidden-small">
					<a data-toggle="tooltip" data-placement="top" title="Settings">
						<span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
					</a>
					<a data-toggle="tooltip" data-placement="top" title="FullScreen">
						<span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
					</a>
					<a data-toggle="tooltip" data-placement="top" title="Lock">
						<span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
					</a>
					<a data-toggle="tooltip" data-placement="top" title="Logout">
						<span class="glyphicon glyphicon-off" aria-hidden="true"></span>
					</a>
				</div>
				<!-- /menu footer buttons -->
			</div>
		</div>

		<!-- top navigation -->
		<div class="top_nav">

			<div class="nav_menu">
				<nav class="" role="navigation">
					<div class="nav toggle">
						<a id="menu_toggle"><i class="fa fa-bars"></i></a>
					</div>

					<ul class="nav navbar-nav navbar-right">
						<li class="">
							<a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
								<img src="{{Request::user()->cover}}" alt="">{{Request::user()->getFullName()}}
								<span class=" fa fa-angle-down"></span>
							</a>
							<ul class="dropdown-menu dropdown-usermenu animated fadeInDown pull-right">
								<li><a href="/">  На Сайт</a></li>
								<li><a href="{{route('admin:logout')}}"><i class="fa fa-sign-out pull-right"></i> Выйти</a>
								</li>
							</ul>
						</li>
					</ul>
				</nav>
			</div>

		</div>
		<!-- /top navigation -->



		<!-- page content -->
		<div class="right_col" role="main">
			@yield('content')
			<!-- footer content -->
			<footer>
				<div class="">
					<p class="pull-right">IST Admin Panel by <a>JohnLarckin</a>. |
						for <span class="lead"> <i class="fa fa-university"></i> ICTNEWS</span>
					</p>
				</div>
				<div class="clearfix"></div>
			</footer>
			<!-- /footer content -->

		</div>
		<!-- /page content -->
	</div>


</div>

<div id="custom_notifications" class="custom-notifications dsp_none">
	<ul class="list-unstyled notifications clearfix" data-tabbed_notifications="notif-group">
	</ul>
	<div class="clearfix"></div>
	<div id="notif-group" class="tabbed_notifications"></div>
</div>

<div class="b-popup" id="loading">
	<div class="b-popup-content">
		<div class="sk-folding-cube">
			<div class="sk-cube1 sk-cube"></div>
			<div class="sk-cube2 sk-cube"></div>
			<div class="sk-cube4 sk-cube"></div>
			<div class="sk-cube3 sk-cube"></div>
			<b class="loadText">Загрузка</b>
		</div>
	</div>
</div>

<script src="/js/lib//nicescroll/jquery.nicescroll.min.js"></script>
<script src="/js/lib/bootstrap/bootstrap.min.js"></script>
<!-- icheck -->
<script src="/js/lib/icheck/icheck.min.js"></script>

<!-- sparkline -->
<script src="/js/lib/sparkline/jquery.sparkline.min.js"></script>

<!-- PNotify -->
<script type="text/javascript" src="/js/lib/notify/pnotify.core.js"></script>

<script src="/js/lib/custom.js"></script>

<script>

	$('form').on('submit',function(e){
		PopUpShow()
		function goTo(url){
			console.log(2)
//
		}
		var form = $(e.target);
		if(! form.hasClass('popup')) {
			console.log(form);
			return true;
		}
		var formData = new FormData();
		form.serializeArray().reduce(function(obj, item) {
			formData.append(item.name, item.value);
			return obj;
		}, {});
		_.each(form.find('input[type=file]'), function(file){
			if(file.files[0] != undefined) {
				console.log($(file).attr('name'), file.files[0]);
				formData.append($(file).attr('name'), file.files[0]);
			}
		})

		$.ajax({
			type: 'POST',
			url: form.attr('action'),
			data: formData,
			processData: false,
			contentType: false,
			success: function(res) {
				PopUpHide();
				var response = JSON.parse(res)
				new PNotify({
					title: 'Успех',
					text: 'Сохранение данных прошло успешно!',
					type: 'success'
				})

				if(response.goto != undefined) {
					console.log(1);
					setTimeout(function(){
						window.location.href = response.goto;
					}, 1000);
				}
			},
			error: function(res){
				PopUpHide()
				console.log(res)
				var errors = JSON.parse(res.responseText).errors || ['Данные не валидные'];
				new PNotify({
					title: 'Ошибка',
					text: errors.join("<br>"),
					type: 'error'
				})
				return false;
			}
		});

		return false;
	})
	$(document).ready(function () {PopUpHide()});
	//Функция отображения PopUp
	function PopUpShow(){
		$("#loading").fadeIn(500);
	}
	//Функция скрытия PopUp
	function PopUpHide(){
		$("#loading").fadeOut(500);
	}
</script>
</body>
</html>

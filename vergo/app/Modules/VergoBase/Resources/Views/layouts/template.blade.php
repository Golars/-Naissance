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
            Submit
        @show
    </title>

    <!-- Bootstrap core CSS -->
    <link href="/css/bootstrap.min.css" rel="stylesheet">
    <link href="/fonts/css/font-awesome.min.css" rel="stylesheet">
    <link href="/css/animate.min.css" rel="stylesheet">
    <link href="/css/vergo_css.css" rel="stylesheet">

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

</head>
<body>
@yield('content')
</body>
</html>


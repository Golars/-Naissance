<!DOCTYPE html>
<html>
    <head>
        <title>Laravel</title>

        <link href="https://fonts.googleapis.com/css?family=Lato:100" rel="stylesheet" type="text/css">

        <style>
            html, body {
                height: 100%;
            }

            body {
                margin: 0;
                padding: 0;
                width: 100%;
                display: table;
                font-weight: 100;
                font-family: 'Lato';
            }

            .container {
                text-align: center;
                display: table-cell;
                vertical-align: middle;
            }

            .content {
                text-align: center;
                display: inline-block;
            }

            .title {
                font-size: 96px;
            }
            .raz {
                 background: linear-gradient(#400040, #004000);  /* подробнее про градиенты */
                 -webkit-background-clip: text;  /* подробнее про background-clip */
                 color: transparent;
            }
        </style>
    </head>
    <body>
        <div class="container">
            <div class="content">
                <div class="title raz"><b>[ VERGO ]</b> @if(isset($module)) {{$module}} @else Module @endif</div>
            </div>
        </div>
    </body>
</html>

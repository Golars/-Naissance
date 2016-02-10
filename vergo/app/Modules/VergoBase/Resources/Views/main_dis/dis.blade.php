<!DOCTYPE html>
<html lang=en>
    <head>
        <meta charset=utf-8>
        <meta http-equiv=X-UA-Compatible content="IE=edge">
        <meta name=viewport content="width=device-width,initial-scale=1">
        <meta name=description content="">
        <meta name=keywords content="">
        <meta name=author content="">
        <title>Dis</title>
        <link rel="stylesheet" href="/css/bootstrap.min.css">
        <link rel="stylesheet" href="/css/bootstrap-theme.min.css">
        <link rel="stylesheet" href="/css/vergo.css">
        <link rel="stylesheet" href="/fonts/css/font-awesome.min.css">
        <script src="/js/lib/jquery/jquery-2.1.3.min.js"></script>
        <script src="/js/bootstrap.min.js"></script>
        <script src="/js/npm.js"></script>
        <script src="/js/lib/masonry/masonry.pkgd.min.js"></script>
        <script src="/js/lib/masonry/imagesloaded.pkgd.min.js"></script>
    </head>
    <body>
        <!-- Section Header -->
        <section id="header" class="container">
            <div class="row">
                 <div class="header">
                     <div class="title">
                         <div class="upper">Во что, вкладывает билл?</div>
                         <div class="smaller">Читай на КО*</div>
                     </div>
                     <div class="button">
                         <a href="#">
                             <span class="btn btn-default btn-lg btn-rounded">Узнать больше</span>
                         </a>
                     </div>
                 </div>
            </div>
        </section>
        <!-- Section Main -->
        <section id="main" class="container">
            <div class="row menu-set">
                <div class="col-md-3">
                    <img src="/img/yeap.png" class="img-responsive">
                </div>
                <div class="col-md-5 col-md-offset-3 unpadding" style="position: absolute">
                    <div class="col-md-3 smaller"><b><?php echo date('d F')?></b></div>
                    <div class="col-md-3 small text-right"><i class="fa fa-cloud green"></i> Ташкент</div>
                    <div class="col-md-6 small">+4..+6 дождь</div>
                </div>
                <div class="col-md-5 col-md-offset-4 text-right">
                    <div class="col-lg-5">
                        <a href="#">
                            <i class="fa fa-plus-circle green"></i> Отправить материал
                        </a>
                    </div>
                    <div class="col-lg-4">
                        <a href="#">
                            На русском
                        </a>
                    </div>
                    <div class="col-lg-3">
                        <a href="#">
                            Подписка
                        </a>
                    </div>
                </div>
                <div class="col-md-9 unpadding menu-list">
                    <ul class="list-inline">
                        <li class="text-uppercase">
                            <a href="#">
                                Наука
                            </a>
                        </li>
                        <li class="text-uppercase">
                            <a href="#">
                                Экономика
                            </a>
                        </li>
                        <li class="text-uppercase">
                            <a href="#">
                                Бизнес
                            </a>
                        </li>
                        <li class="text-uppercase">
                            <a href="#">
                                Мода
                            </a>
                        </li>
                        <li class="text-uppercase">
                            <a href="#">
                                Культура
                            </a>
                        </li>
                        <li class="text-uppercase">
                            <a href="#">
                                Видео
                            </a>
                        </li>
                        <li class="text-uppercase">
                            <a href="#">
                                Мода
                            </a>
                        </li>
                        <li class="">
                            <a href="#">
                                <span class="btn btn-default btn-rounded">Войти</span>
                            </a>
                        </li>
                        <li class="">
                            <a href="#">
                                <span class="btn btn-default btn-rounded">Регистрация</span>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <hr>
            <div class="row">
                <div class="grid">
                    {{--popular--}}
                    <div class="grid-item col-sm-3">
                        <div class="panel">
                            <div class="news_right_block">
                                <h4 class="col-md-6 unpadding sans">Популярное</h4>
                                <h5 class="col-md-5 col-md-offset-1 small green a">Просмотреть все</h5>
                                <div class="clearfix"></div>
                                <!-- Элементы foreach -->
                                    <a href="#" class="el">
                                        <div class="col-md-12 unpadding title_of_article">
                                            <div class="col-md-5 unpadding green text-uppercase a">
                                                Культура
                                            </div>
                                            <div class="col-md-4 a text-muted">
                                                <i class="fa fa-eye"></i> 52876
                                            </div>
                                            <div class="col-md-3 a text-muted">
                                                <i class="fa fa-comment-o"></i> 23
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                        <span class="name text">
                                            На сцене, в кадре жизни:
                                            Все о Михаиле Боярском
                                        </span>
                                        <span class="footer-article">Леонардо Ди Каприо, о Гесби.</span>
                                        <hr/>
                                    </a>
                                    <a href="#" class="el">
                                        <div class="col-md-12 unpadding title_of_article">
                                            <div class="col-md-5 unpadding green text-uppercase a">
                                                Кино
                                            </div>
                                            <div class="col-md-4 a text-muted">
                                                <i class="fa fa-eye"></i> 52876
                                            </div>
                                            <div class="col-md-3 a text-muted">
                                                <i class="fa fa-comment-o"></i> 23
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                            <span class="name text">
                                                Кажеться, весь мир перевернулся под ногами.
                                            </span>
                                        <span class="footer-article">Леонардо Ди Каприо, о Гесби.</span>
                                        <hr/>
                                    </a>
                                    <a href="#" class="el">
                                        <div class="col-md-12 unpadding title_of_article">
                                            <div class="col-md-5 unpadding green text-uppercase a">
                                                Еда
                                            </div>
                                            <div class="col-md-4 a text-muted">
                                                <i class="fa fa-eye"></i> 52876
                                            </div>
                                            <div class="col-md-3 a text-muted">
                                                <i class="fa fa-comment-o"></i> 23
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                                <span class="name text">
                                                    Куда пойти на выходных с ребенком, что бы не было скучно
                                                </span>
                                        <span class="footer-article">Леонардо Ди Каприо, о Гесби.</span>
                                        <hr/>
                                    </a>
                                    <a href="#" class="el">
                                        <div class="col-md-12 unpadding title_of_article">
                                            <div class="col-md-5 unpadding green text-uppercase a">
                                                Интервью
                                            </div>
                                            <div class="col-md-4 a text-muted">
                                                <i class="fa fa-eye"></i> 52876
                                            </div>
                                            <div class="col-md-3 a text-muted">
                                                <i class="fa fa-comment-o"></i> 23
                                            </div>
                                        </div>
                                        <div class="clearfix"></div>
                                                <span class="name text">
                                                    Морские ежи употребляют цитрусы только с водкой.
                                                </span>
                                        <span class="footer-article">Леонардо Ди Каприо, о Гесби.</span>
                                        <hr/>
                                    </a>
                                <!-- endforeach -->
                            </div>
                        </div>
                    </div>
                    {{--video--}}
                    <div class="grid-item col-sm-6">
                        {{--<img src="" class="img-responsive">--}}
                        <video class="img-responsive" controls="controls" poster="/img/video.png" style="height: 480px">
                            <source src="https://cs542304.vk.me/7/u12534244/videos/6401c47879.720.mp4">
                        </video>
                    </div>
                    {{--image--}}
                    <div class="grid-item col-sm-3">
                        <a href="#" class="el unpadding el-image">
                            <img src="/img/2.jpg" class="img-responsive">
                            <div class="col-md-12 unpadding title-image">
                                <div class="col-md-5 text-uppercase">
                                    Культура
                                </div>
                                <div class="col-md-4 small">
                                    <i class="fa fa-eye"></i> 52876
                                </div>
                                <div class="col-md-3 small">
                                    <i class="fa fa-comment-o"></i> 23
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- comment -->
                    <div class="grid-item col-sm-3">
                        <a href="#" class="el">
                            <div class="col-md-12 unpadding title_of_article">
                                <div class="col-md-7 unpadding">
                                    <img src="/img/ava.jpg" class="avatar img-circle" width="50px"> Alexander
                                </div>
                                <div class="col-md-5 a green text-right">
                                    21 December
                                </div>
                            </div>
                            <div class="clearfix"></div>
                                        <span class="name text">
                                            На сцене, в кадре жизни:
                                            Все о Михаиле Боярском
                                        </span>
                            <span class="footer-article">Леонардо Ди Каприо, о Гесби.</span>
                            <hr/>
                        </a>
                    </div>
                    <!-- info-->
                    <div class="grid-item col-sm-3">
                        <a href="#" class="el panel panel-body">
                            <div class="col-md-3">
                                <i class="fa fa-eye el-type"></i>
                            </div>
                            <div class="col-md-9">New Horizon сняло движение обьектов на поясе Картера</div>
                        </a>
                    </div>
                    <!-- image-->
                    <div class="grid-item col-sm-3">
                        <a href="#" class="el unpadding el-image">
                            <img src="/img/1.jpg" class="img-responsive">
                            <div class="col-md-12 unpadding title-image">
                                <div class="col-md-5 text-uppercase">
                                    Культура
                                </div>
                                <div class="col-md-4 small">
                                    <i class="fa fa-eye"></i> 52876
                                </div>
                                <div class="col-md-3 small">
                                    <i class="fa fa-comment-o"></i> 23
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- image-->
                    <div class="grid-item col-sm-3">
                        <a href="#" class="el unpadding el-image">
                            <img src="/img/3.jpg" class="img-responsive">
                            <div class="col-md-12 unpadding title-image">
                                <div class="col-md-5 text-uppercase">
                                    Культура
                                </div>
                                <div class="col-md-4 small">
                                    <i class="fa fa-eye"></i> 52876
                                </div>
                                <div class="col-md-3 small">
                                    <i class="fa fa-comment-o"></i> 23
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- comment -->
                    <div class="grid-item col-sm-3">
                        <a href="#" class="el">
                            <div class="col-md-12 unpadding title_of_article">
                                <div class="col-md-7 unpadding">
                                    <img src="/img/ava-a.jpg" class="avatar img-circle" width="50px"> Alexander
                                </div>
                                <div class="col-md-5 a green text-right">
                                    21 December
                                </div>
                            </div>
                            <div class="clearfix"></div>
                                        <span class="name text">
                                            На сцене, в кадре жизни:
                                            Все о Михаиле Боярском
                                        </span>
                            <span class="footer-article">Леонардо Ди Каприо, о Гесби.</span>
                            <hr/>
                        </a>
                    </div>
                    <!-- comment -->
                    <div class="grid-item col-sm-3">
                        <a href="#" class="el">
                            <div class="col-md-12 unpadding title_of_article">
                                <div class="col-md-7 unpadding">
                                    <img src="/img/ava.jpg" class="avatar img-circle" width="50px"> Alexander
                                </div>
                                <div class="col-md-5 a green text-right">
                                    21 December
                                </div>
                            </div>
                            <div class="clearfix"></div>
                                        <span class="name text">
                                            На сцене, в кадре жизни:
                                            Все о Михаиле Боярском
                                        </span>
                            <span class="footer-article">Леонардо Ди Каприо, о Гесби.</span>
                            <hr/>
                        </a>
                    </div>
                    <!-- comment -->
                    <div class="grid-item col-sm-3">
                        <a href="#" class="el">
                            <div class="col-md-12 unpadding title_of_article">
                                <div class="col-md-7 unpadding">
                                    <img src="/img/ava-a-a.jpg" class="avatar img-circle" width="50px"> Alexander
                                </div>
                                <div class="col-md-5 a green text-right">
                                    21 December
                                </div>
                            </div>
                            <div class="clearfix"></div>
                                        <span class="name text">
                                            На сцене, в кадре жизни:
                                            Все о Михаиле Боярском
                                        </span>
                            <span class="footer-article">Леонардо Ди Каприо, о Гесби.</span>
                            <hr/>
                        </a>
                    </div>
                    <!-- comment -->
                    <div class="grid-item col-sm-3">
                        <a href="#" class="el">
                            <div class="col-md-12 unpadding title_of_article">
                                <div class="col-md-7 unpadding">
                                    <img src="/img/ava-a.jpg" class="avatar img-circle" width="50px"> Alexander
                                </div>
                                <div class="col-md-5 a green text-right">
                                    21 December
                                </div>
                            </div>
                            <div class="clearfix"></div>
                                        <span class="name text">
                                            На сцене, в кадре жизни:
                                            Все о Михаиле Боярском
                                        </span>
                            <span class="footer-article">Леонардо Ди Каприо, о Гесби.</span>
                            <hr/>
                        </a>
                    </div>
                    <!-- info-->
                    <div class="grid-item col-sm-3">
                        <a href="#" class="el panel panel-body">
                            <div class="col-md-3">
                                <i class="fa fa-eye el-type"></i>
                            </div>
                            <div class="col-md-9">New Horizon сняло движение обьектов на поясе Картера</div>
                        </a>
                    </div>
                    <!-- image-->
                    <div class="grid-item col-sm-6">
                        <a href="#" class="el unpadding el-image">
                            <img src="/img/3.png" class="img-responsive">
                            <div class="col-md-12 unpadding title-image">
                                <div class="col-md-5 text-uppercase">
                                    Культура
                                </div>
                                <div class="col-md-4 small">
                                    <i class="fa fa-eye"></i> 52876
                                </div>
                                <div class="col-md-3 small">
                                    <i class="fa fa-comment-o"></i> 23
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- info-->
                    <div class="grid-item col-sm-3">
                        <a href="#" class="el panel panel-body">
                            <div class="col-md-3">
                                <i class="fa fa-eye el-type"></i>
                            </div>
                            <div class="col-md-9">New Horizon сняло движение обьектов на поясе Картера</div>
                        </a>
                    </div>
                    <!--image -->
                    <div class="grid-item col-sm-3">
                        <a href="#" class="el unpadding el-image">
                            <img src="/img/6.jpg" class="img-responsive">
                            <div class="col-md-12 unpadding title-image">
                                <div class="col-md-5 text-uppercase">
                                    Культура
                                </div>
                                <div class="col-md-4 small">
                                    <i class="fa fa-eye"></i> 52876
                                </div>
                                <div class="col-md-3 small">
                                    <i class="fa fa-comment-o"></i> 23
                                </div>
                            </div>
                        </a>
                    </div>
                    <!-- info-->
                    <div class="grid-item col-sm-3">
                        <a href="#" class="el panel panel-body">
                            <div class="col-md-3">
                                <i class="fa fa-eye el-type"></i>
                            </div>
                            <div class="col-md-9">New Horizon сняло движение обьектов на поясе Картера</div>
                        </a>
                    </div>
                    <!-- info-->
                    <div class="grid-item col-sm-3">
                        <a href="#" class="el panel panel-body">
                            <div class="col-md-3">
                                <i class="fa fa-eye el-type"></i>
                            </div>
                            <div class="col-md-9">New Horizon сняло движение обьектов на поясе Картера</div>
                        </a>
                    </div>
                    <!-- image -->
                    <div class="grid-item col-sm-3">
                        <a href="#" class="el unpadding el-image">
                            <img src="/img/4.jpg" class="img-responsive">
                            <div class="col-md-12 unpadding title-image">
                                <div class="col-md-5 text-uppercase">
                                    Культура
                                </div>
                                <div class="col-md-4 small">
                                    <i class="fa fa-eye"></i> 52876
                                </div>
                                <div class="col-md-3 small">
                                    <i class="fa fa-comment-o"></i> 23
                                </div>
                            </div>
                        </a>
                    </div>
                    {{--popular--}}
                    <div class="grid-item col-sm-3">
                        <div class="panel">
                            <div class="news_right_block">
                                <h4 class="col-md-6 unpadding sans">Популярное</h4>
                                <h5 class="col-md-5 col-md-offset-1 small green a">Просмотреть все</h5>
                                <div class="clearfix"></div>
                                <!-- Элементы foreach -->
                                <a href="#" class="el">
                                    <div class="col-md-12 unpadding title_of_article">
                                        <div class="col-md-5 unpadding green text-uppercase a">
                                            Культура
                                        </div>
                                        <div class="col-md-4 a text-muted">
                                            <i class="fa fa-eye"></i> 52876
                                        </div>
                                        <div class="col-md-3 a text-muted">
                                            <i class="fa fa-comment-o"></i> 23
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                        <span class="name text">
                                            На сцене, в кадре жизни:
                                            Все о Михаиле Боярском
                                        </span>
                                    <span class="footer-article">Леонардо Ди Каприо, о Гесби.</span>
                                    <hr/>
                                </a>
                                <a href="#" class="el">
                                    <div class="col-md-12 unpadding title_of_article">
                                        <div class="col-md-5 unpadding green text-uppercase a">
                                            Кино
                                        </div>
                                        <div class="col-md-4 a text-muted">
                                            <i class="fa fa-eye"></i> 52876
                                        </div>
                                        <div class="col-md-3 a text-muted">
                                            <i class="fa fa-comment-o"></i> 23
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                            <span class="name text">
                                                Кажеться, весь мир перевернулся под ногами.
                                            </span>
                                    <span class="footer-article">Леонардо Ди Каприо, о Гесби.</span>
                                    <hr/>
                                </a>
                                <a href="#" class="el">
                                    <div class="col-md-12 unpadding title_of_article">
                                        <div class="col-md-5 unpadding green text-uppercase a">
                                            Еда
                                        </div>
                                        <div class="col-md-4 a text-muted">
                                            <i class="fa fa-eye"></i> 52876
                                        </div>
                                        <div class="col-md-3 a text-muted">
                                            <i class="fa fa-comment-o"></i> 23
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                                <span class="name text">
                                                    Куда пойти на выходных с ребенком, что бы не было скучно
                                                </span>
                                    <span class="footer-article">Леонардо Ди Каприо, о Гесби.</span>
                                    <hr/>
                                </a>
                                <a href="#" class="el">
                                    <div class="col-md-12 unpadding title_of_article">
                                        <div class="col-md-5 unpadding green text-uppercase a">
                                            Интервью
                                        </div>
                                        <div class="col-md-4 a text-muted">
                                            <i class="fa fa-eye"></i> 52876
                                        </div>
                                        <div class="col-md-3 a text-muted">
                                            <i class="fa fa-comment-o"></i> 23
                                        </div>
                                    </div>
                                    <div class="clearfix"></div>
                                                <span class="name text">
                                                    Морские ежи употребляют цитрусы только с водкой.
                                                </span>
                                    <span class="footer-article">Леонардо Ди Каприо, о Гесби.</span>
                                    <hr/>
                                </a>
                                <!-- endforeach -->
                            </div>
                        </div>
                    </div>
                    <!-- info-->
                    <div class="grid-item col-sm-3">
                        <a href="#" class="el panel panel-body">
                            <div class="col-md-3">
                                <i class="fa fa-eye el-type"></i>
                            </div>
                            <div class="col-md-9">New Horizon сняло движение обьектов на поясе Картера</div>
                        </a>
                    </div>
                    <!-- comment -->
                    <div class="grid-item col-sm-3">
                        <a href="#" class="el">
                            <div class="col-md-12 unpadding title_of_article">
                                <div class="col-md-7 unpadding">
                                    <img src="/img/ava-a-a.jpg" class="avatar img-circle" width="50px"> Alexander
                                </div>
                                <div class="col-md-5 a green text-right">
                                    21 December
                                </div>
                            </div>
                            <div class="clearfix"></div>
                                        <span class="name text">
                                            На сцене, в кадре жизни:
                                            Все о Михаиле Боярском
                                        </span>
                            <span class="footer-article">Леонардо Ди Каприо, о Гесби.</span>
                            <hr/>
                        </a>
                    </div>
                    <!-- comment -->
                    <div class="grid-item col-sm-3">
                        <a href="#" class="el">
                            <div class="col-md-12 unpadding title_of_article">
                                <div class="col-md-7 unpadding">
                                    <img src="/img/ava.jpg" class="avatar img-circle" width="50px"> Alexander
                                </div>
                                <div class="col-md-5 a green text-right">
                                    21 December
                                </div>
                            </div>
                            <div class="clearfix"></div>
                                        <span class="name text">
                                            На сцене, в кадре жизни:
                                            Все о Михаиле Боярском
                                        </span>
                            <span class="footer-article">Леонардо Ди Каприо, о Гесби.</span>
                            <hr/>
                        </a>
                    </div>
                    <!-- comment -->
                    <div class="grid-item col-sm-3">
                        <a href="#" class="el">
                            <div class="col-md-12 unpadding title_of_article">
                                <div class="col-md-7 unpadding">
                                    <img src="/img/ava-a.jpg" class="avatar img-circle" width="50px"> Alexander
                                </div>
                                <div class="col-md-5 a green text-right">
                                    21 December
                                </div>
                            </div>
                            <div class="clearfix"></div>
                                        <span class="name text">
                                            На сцене, в кадре жизни:
                                            Все о Михаиле Боярском
                                        </span>
                            <span class="footer-article">Леонардо Ди Каприо, о Гесби.</span>
                            <hr/>
                        </a>
                    </div>
                </div>
            </div>
        </section>
        <!-- Section Bottom menu -->
        <section id="bottom-menu" class="container">
            <div class="row menu-set">
                <div class="col-md-2">
                    <img src="/img/yeap.png" class="img-responsive">
                </div>
                <div class="col-md-7 menu-list-alt">
                    <ul class="list-inline">
                        <li class="text-uppercase">
                            <a href="#">
                                Наука
                            </a>
                        </li>
                        <li class="text-uppercase">
                            <a href="#">
                                Экономика
                            </a>
                        </li>
                        <li class="text-uppercase">
                            <a href="#">
                                Бизнес
                            </a>
                        </li>
                        <li class="text-uppercase">
                            <a href="#">
                                Мода
                            </a>
                        </li>
                        <li class="text-uppercase">
                            <a href="#">
                                Культура
                            </a>
                        </li>
                        <li class="text-uppercase">
                            <a href="#">
                                Видео
                            </a>
                        </li>
                        <li class="text-uppercase">
                            <a href="#">
                                Мода
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="col-md-3 menu-list-alt">
                    <div class="col-md-6">
                        <a href="#">
                            <img class="img-responsive border-lank" src="/img/apple.png">
                        </a>
                    </div>
                    <div class="col-md-6">
                        <a href="#">
                            <img class="img-responsive border-lank" src="/img/play.png">
                        </a>
                    </div>
                </div>
            </div>
        </section>
        {{--Section Footer--}}
        <section id="footer" class="container">
            <div class="row">
                <div class="col-md-2 col-sm-6 unpadding">
                    <div class="col-md-12"><p class="foot-title">Подписка</p></div>
                    <div class="col-md-12 foot-menu unpadding">
                        <div class="col-md-5">
                            <a href="#">
                                Для вас
                            </a>
                        </div>
                        <div class="col-md-7">
                            <a href="#">
                                Подписка+
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 unpadding">
                    <div class="col-md-12"><p class="foot-title">Сервисы</p></div>
                    <div class="col-md-12 foot-menu unpadding">
                        <div class="col-md-7">
                            <a href="#">
                                Отправить материал
                            </a>
                        </div>
                        <div class="col-md-5">
                            <a href="#">
                                Колумнисты
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 col-sm-6 unpadding">
                    <div class="col-md-12"><p class="foot-title">Реклама</p></div>
                    <div class="col-md-12 foot-menu unpadding">
                        <div class="col-md-6">
                            <a href="#">
                                Баннеры
                            </a>
                        </div>
                        <div class="col-md-6">
                            <a href="#">
                                Статьи
                            </a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-md-offset-2 col-sm-6 col-sm-offset-0 unpadding foot-menu">
                    <div class="col-md-8">
                    <ul class="list-inline">
                        <li class="add-padding">
                            <a href="">
                                <i class="fa fa-twitter"></i>
                            </a>
                        </li>
                        <li class="add-padding">
                            <a href="">
                                <i class="fa fa-vk"></i>
                            </a>
                        </li>
                        <li class="add-padding">
                            <a href="">
                                <i class="fa fa-facebook"></i>
                            </a>
                        </li>
                    </ul>
                    </div>
                    <div class="col-md-4">
                        <span class="circle age16">16+</span>
                    </div>
                </div>
            </div>
        </section>
    </body>
<script>
    $(document).ready(function(){
        $('.title-image').hide();
    })
    // init Masonry
    var $grid = $('.grid').masonry({
        // options...
    });
    // layout Masonry after each image loads
    $grid.imagesLoaded().progress( function() {
        $grid.masonry('layout');
    });
    $('.el-image').on('mousemove',function(){
//        $('.title-image').removeClass('hidden')
        $(this).find('.title-image').fadeIn(300);
//        $('.title-image').fadeIn(300);
    })
    $('.el-image').on('mouseleave',function($this){
//        $('.title-image').addClass('hidden')
        $(this).find('.title-image').fadeOut(300);
//        $('.title-image').fadeOut(300);
    })
</script>
</html>
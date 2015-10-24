<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Businessempresarial.net</title>
    <link rel="apple-touch-icon" sizes="57x57" href="{{ asset('apple-touch-icon-57x57.png') }}">
    <link rel="apple-touch-icon" sizes="60x60" href="{{ asset('apple-touch-icon-60x60.png') }}">
    <link rel="apple-touch-icon" sizes="72x72" href="{{ asset('apple-touch-icon-72x72.png') }}">
    <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('apple-touch-icon-76x76.png') }}">
    <link rel="apple-touch-icon" sizes="114x114" href="{{ asset('apple-touch-icon-114x114.png') }}">
    <link rel="apple-touch-icon" sizes="120x120" href="{{ asset('apple-touch-icon-120x120.png') }}">
    <link rel="apple-touch-icon" sizes="144x144" href="{{ asset('apple-touch-icon-144x144.png') }}">
    <link rel="apple-touch-icon" sizes="152x152" href="{{ asset('apple-touch-icon-152x152.png')}}">
    <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('apple-touch-icon-180x180.png') }}">
    <link rel="icon" type="image/png" href="{{ asset('favicon-32x32.png') }}" sizes="32x32">
    <link rel="icon" type="image/png" href="{{ asset('android-chrome-192x192.png') }}" sizes="192x192">
    <link rel="icon" type="image/png" href="{{ asset('favicon-96x96.png') }}" sizes="96x96">
    <link rel="icon" type="image/png" href="{{ asset('favicon-16x16.png') }}" sizes="16x16">
    <link rel="manifest" href="{{ asset('manifest.json') }}">
    <meta name="msapplication-TileColor" content="#da532c">
    <meta name="msapplication-TileImage" content="{{ asset('mstile-144x144.png') }}">
    <meta name="theme-color" content="#ffffff">
    <!-- Bootstrap -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/stylesheet.min.css') }}"/>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<!--HEADER-->
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!--LOGOTIPO-->
                <a class="logo" href="index.html">
                </a>
                <!--fecha-->
                <div class="fecha">
                    LIMA, LUNES 31 DE AGOSTO DEL 2015
                </div>
                <!--nombre de edición-->
                <div class="edicion">
                    EDICIÓN 417 DE BUSINESS EMPRESARIAL DEL 31 DE AGOSTO AL 6 DE SEPTIEMBRE DEL 2015

                    Educación Perú
                </div>
                <!--REDES SOCIALES-->
                <div class="social">
                    <ul class="social">
                        <li> <a class="" href="" title="facebook"><i class="fb"></i></a></li>
                        <li> <a class="" href="" title="tewtter"><i class="tw"></i></a></li>
                        <li> <a class="" href="" title="google"><i class="go"></i></a></li>
                        <li> <a class="" href="" title="youtube"><i class="yo"></i></a></li>
                    </ul>
                </div>
                <!--Search-->
                <div class="search-top">
                    <form role="form" id="search_form_" action="javascript:;" method="POST" accept-charset="utf-8">
                        <div class="alert alert-success smsgbox" style="display: none; margin: auto;">
                            <i class="icon-check-sign"></i> Thank you
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                <input type="text" id="sendsearch" class="form-search" placeholder="Buscar..." data-trigger="manual" data-placement="top" data-original-title="" title="">
							<span class="input-group-btn">
								<button class="btn btn_search" type="button"><span class="glyphicon glyphicon-search"></span></button>
							</span>
                            </div>
                        </div>
                    </form>
                </div>


                <!--MENU-->
                <nav class="navbar navbar-default">

                    <!-- Brand and toggle get grouped for better mobile display -->
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                        <!--<a class="navbar-brand" href="#">Brand</a>-->
                    </div>

                    <!-- Collect the nav links, forms, and other content for toggling -->
                    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                        <ul class="nav navbar-nav">
                            <li class="active"><a href="#">PORTADA <span class="sr-only">(current)</span></a></li>
                            <li><a href="#">PORTADA</a></li>
                            <li><a href="#">EMPRESAS & NEGOCIOS</a></li>
                            <li><a href="#">LANZAMIENTOS</a></li>
                            <li><a href="#">ENTREVISTA</a></li>
                            <li><a href="#">CASOS DE EXITO</a></li>
                            <li><a href="#">COLUMNISTA DE LA SEMANA</a></li>
                            <li><a href="#">PRODUCTOS PREMIUM</a></li>
                            <li><a href="#">TURISMO & GASTRONOMIA</a></li>
                            <li><a href="#">MOVIDA EMPRESARIAL</a></li>
                            <li><a href="#">AGENDA& PUBLICACIONES</a></li>
                            <li><a href="#">MODA & BELLEZA</a></li>
                            <li><a href="#">EDICIóN IMPRESA</a></li>
                            <li><a href="#">EDICIONES ANTERIORES</a></li>
                            <li><a href="#">VIDEOS</a></li>
                            <li><a href="#">CONTÁCTENOS</a></li>

                        </ul>


                    </div><!-- /.navbar-collapse -->

                </nav>

            </div>
        </div>


    </div>
</header>
<!--CUERPO-->
<section>
    <div class="container">
        <div class="row pb">
            @yield('content')
            {{--COLUMNA RIGHT PUBLICITIES--}}
            @include('boxes.right')
        </div>
    </div>
</section>
<!--FOOTER-->
<footer>
    <div class="container">
        <p class="pt pb">
            www.businessempresarial.net es una publicación de V & W Comunicadores Asociados SRL. <br/>
            No está afiliada a ninguna institución gubernamental, sino es una entidad comercial. <br/>
            Todos los derechos reservados ® 2010
        </p>
    </div>
</footer>
<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
<script type="text/javascript" src="{{ asset('lib/jquery.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/scrollspy.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/dropdown.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/collapse.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/tooltip.min.js') }}"></script>
<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="{{ asset('js/bootstrap.min.js') }}"></script>
<script>
    $('#carrusel-empresas').carousel({
        interval: 4000
    });

    $('#carrusel-lanzamientos').carousel({
        interval: 3000

    });

    $('.nota-resumen-mini').hover(function(){
        $(this).find('.carousel-caption').stop().animate({top: 0});
    },function(){
        $(this).find('.carousel-caption').stop().animate({top:200});
    });
</script>

</body>
</html>
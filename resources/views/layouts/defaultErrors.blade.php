<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Businessempresarial.net</title>
    <meta name="keywords" content="Businessempresarial es una publicación de V & W Comunicadores Asociados SRL. No está afiliada a ninguna institución gubernamental, sino es una entidad comercial"/>
    <meta name="description" content="Empresas y negocios, lanzamientos, entrevista, casos de exito, articulo de la semana, productos premium, turismo y gastronomía, movida empresarial, agenda y publicación, moda y belleza,  edición impresa, video, contáctenos"/>
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
    @yield('stylesheet')
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
@yield('scriptSocial')

<!--HEADER-->
<header>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <!--LOGOTIPO-->
                <a class="logo" href="http://www.businessempresarial.net" title="Businessempresarial">
                </a>
                <!--fecha-->
                <div class="fecha">
                    <span id="fecha"></span>
                </div>
                <!--nombre de edición-->
                <div class="edicion">

                    {{ $edition[0]->description }}
                    {{--EDICIÓN 417 DE BUSINESS EMPRESARIAL DEL 31 DE AGOSTO AL 6 DE SEPTIEMBRE DEL 2015--}}
                </div>
                <!--REDES SOCIALES-->
                <div class="social">
                    <ul class="social">
                        <li> <a class="" href="https://www.facebook.com/Business-Empresarial-105970562807701/?fref=ts" target="_blank" title="facebook"><i class="fb"></i></a></li>
                        <li> <a class="" href="https://twitter.com/bempresarial?lang=es" target="_blank" title="tewtter"><i class="tw"></i></a></li>
                        <li> <a class="" href="https://plus.google.com/104566427608736798077" target="_blank" title="google"><i class="go"></i></a></li>
                        <li> <a class="" href="https://www.youtube.com/channel/UCTSwlwC0TWdBnj-TkvJe4YA" target="_blank"  title="youtube"><i class="yo"></i></a></li>
                    </ul>
                </div>
                <!--Search-->
                <div class="search-top">
                    {!!   Form::open(['route' =>['note_search_show_path',$edition[0]->id],  'method' => 'GET', 'role' => 'form', 'class' => 'form-horizontal','accept-charset'=>'utf-8' , 'id' => 'search_form_' , 'validate']) !!}
                    {{--<form role="form" id="search_form_" action="javascript:;" method="POST" accept-charset="utf-8">--}}
                        <div class="alert alert-success smsgbox" style="display: none; margin: auto;">
                            <i class="icon-check-sign"></i> Thank you
                        </div>
                        <div class="form-group">
                            <div class="input-group">
                                {{--<input type="text" id="sendsearch" class="form-search" placeholder="Buscar..." data-trigger="manual" data-placement="top" data-original-title="" title="">--}}
                                {!!   Form::text('textsearch', ' ', ['class' => 'form-search','id' => 'sendsearch','placeholder'=>'Buscar...','data-trigger'=>'manual', 'data-placement'=>'top', 'data-original-title'=>'', 'title'=>'']) !!}
							<span class="input-group-btn">
								<button class="btn btn_search" type="submit"><span class="glyphicon glyphicon-search"></span></button>
							</span>
                            </div>
                        </div>
                    {!!   Form::close() !!}
                    {{--</form>--}}
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
            <!--TERCERA COLUMNA de publicidad-->
            <div class="col-md-3">
                <!-- fila de edicion impresa-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="nota-resumen">
                            <div class="title">
                                <h4>EDICIÓN IMPRESA</h4>
                            </div>
                            <div>
                                <a href="http://www.businessempresarial.net/edicion_impresa/index.html" target="_blank"> {!! Html::image('media/publicity/edicion_impresa.jpg','',array('class' => 'img-responsive img-publicidad')) !!} </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Publicidad 1-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="nota-resumen">
                            <div class="title">
                                <h4>PUBLICIDAD</h4>
                            </div>
                            <div>
                                <a href="http://www.mitsubishi-motors.com.pe" target="_blank"> {!! Html::image('media/publicity/mitsu_328x352.gif','',array('class' => 'img-responsive img-publicidad')) !!} </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Publicidad 1-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="nota-resumen">
                            <div class="title">
                                <h4>PUBLICIDAD</h4>
                            </div>
                            <div>
                                <a href="https://www.schneider-electric.com/tools/registration/promo/PY/ls/getpromo/43771b/" target="_blank"> {!! Html::image('media/publicity/gif-252x235-prefab.gif','',array('class' => 'img-responsive img-publicidad')) !!} </a>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Publicidad 1-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="nota-resumen">
                            <div class="title">
                                <h4>PUBLICIDAD</h4>
                            </div>
                            <div>
                                <a href="#"> {!! Html::image('media/publicity/publicidad4.jpg','',array('class' => 'img-responsive img-publicidad')) !!} </a>
                            </div>
                        </div>
                    </div>
                </div>



                @yield('article')

            </div>

        </div>

        @yield('social')
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
{{--<script type="text/javascript" src="{{ asset('lib/jquery.min.js') }}"></script>--}}
{!! Html::script('lib/jquery.min.js')  !!}
{!! Html::script('js/scrollspy.min.js') !!}
{!! Html::script('js/dropdown.min.js') !!}
{!! Html::script('js/collapse.min.js') !!}
{!! Html::script('js/tooltip.min.js') !!}
{!! Html::script('js/dateTime.min.js') !!}
{!! Html::script('js/bootstrap.min.js') !!}
@yield('scriptPlugin')
<script>

    $(window).load(function () {
        hora();
        var fecha_formato=fecha();
        $("#fecha").html(fecha_formato);
    });

</script>


<script>
    (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
            m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
    })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

    ga('create', 'UA-1106934-2', 'auto');
    ga('send', 'pageview');

</script>

</body>
</html>
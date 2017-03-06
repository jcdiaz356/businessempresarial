@extends('layouts.default')


@section('stylesheet')
        <!-- StyleSheey mapagoogle-->
<link rel="stylesheet" href="{{ asset('css/mapa-styles.min.css') }}"/>

@stop

@section('scriptSocial')

@stop

@section('content')
    <div class="col-md-9">
        <!--PRIMERA FILA EMPRESA, ENTREVISTA, PUBLICIDAD-->
        <div class="row">
            <!--PRIMERA COLUMNA-->
            <div class="col-md-12">
                <!--IMAGEN O VIDEO-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="nota-resumen">
                            <div class="title">
                                <h4>Contáctenos</h4>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row pt">
                    <div class="col-md-12 ">
                        <address>
                            <strong>DIRECTOR EJECUTIVO</strong><br>
                            Walter Alva Salazar<br>
                            Celular: 94967-9076 <br>
                            walva@businessempresarial.net
                        </address>
                        <address>
                            <strong>DIRECTORA PERIODÍSTICA</strong><br>
                            Verónica Julca Vargas<br>
                            Celular:  99774-4848 <br>
                            vjulca@businessempresarial.net
                        </address>

                        {{--<address>--}}
                        {{--<strong>COORDINADORA GENERAL DE PRENSA</strong><br>--}}
                        {{--Alexandra Minaya<br>--}}
                        {{--<a href="mailto:#">vjulca@businessempresarial.net</a>--}}
                        {{--</address>--}}

                        <address>
                            <strong>OFICINA DE REDACCIÓN</strong><br>
                            Av. El Sol Cuadra 1 Condominio Floresta Sur Edificio J Dpto. 504, Chorrillos<br>
                            {{--<strong>TELÉFONO</strong><br>--}}
                            <abbr title="Phone">Teléfono:</abbr> (511) 251-8960
                        </address>

                        {{--<address>--}}
                            {{--<strong>COMENTARIOS, SUSCRIPCIONES Y PUBLICIDAD</strong><br>--}}

                            {{--informes@businessempresarial.net--}}
                        {{--</address>--}}
                    </div>

                </div>


                <div class="row">
                    <div class="col-md-12">
                        <!---->
                        <!-- MAPA CANVAS -->
                        <div id="map_canvas">
                            <!-- css3 preLoading-->
                            <div class="mapPerloading"> <span>Cargando</span>
                                <span class="l-1"></span>
                                <span class="l-2"></span>
                                <span  class="l-3"></span>
                                <span class="l-4"></span>
                                    <span class="l-5">
                                    </span>
                                <span class="l-6"></span>
                            </div>
                        </div>
                        <!-- END MAPA CANVAS -->
                    </div>
                </div>


            </div>
        </div>
    </div>

@stop

@section('scriptPlugin')

        <!-- google maps -->


    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
    {!! Html::script('lib/infobox.min.js')  !!}
    {!! Html::script('js/script-mapa.js')  !!}

    <!--  end google maps -->
    <script>

    </script>
@stop
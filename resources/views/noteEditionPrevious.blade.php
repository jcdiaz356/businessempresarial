@extends('layouts.editionsPrevious')

@section('scriptSocial')
    <script type="text/javascript" src="//s7.addthis.com/js/300/addthis_widget.js#pubid=ra-4e4da40b4ac4de57" async="async"></script>
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
                                <h4>{!! $note->category->name !!}</h4>
                            </div>
                            <div>
                                <div id="carrusel-empresas"   class="carousel slide" >
                                    <!-- Indicators -->
                                    <ol class="carousel-indicators">
                                        @foreach($note->medias as $index =>$media)
                                            <li data-target="#carrusel-empresas" data-slide-to="0" class="@if ($index == 0) {{ "active" }} @endif "></li>
                                        @endforeach
                                    </ol>
                                    <!-- Wrapper for slides -->
                                    <div class="carousel-inner" role="listbox">
                                        @foreach($note->medias as $index =>$media)
                                            <div class="item  @if ($index == 0) {{ "active" }} @endif ">
                                                <a href="#">{!!  Html::image('/media/images/'.$media->file,  strip_tags($note->title)  ) !!} </a>
                                                <div class="carousel-caption">
                                                    {{--<a href="#"> SSK continúa implementando con éxito Programa de Seguridad Preventiva en sus obras</a>--}}
                                                </div>
                                            </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>


                            <h3>{!! $note->title !!} </h3>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <!-- Go to www.addthis.com/dashboard to customize your tools -->
                        <div class="addthis_native_toolbox"></div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                        <p>{!! $note->content !!}</p>
                    </div>

                </div>
            </div>
        </div>
    </div>
@stop

@section('scriptPlugin')
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
@stop
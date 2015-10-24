@extends('layouts.default')

@section('content')
    <div class="col-md-9">
        <!--PRIMERA FILA EMPRESA, ENTREVISTA, PUBLICIDAD-->
        <div class="row">
            <!--PRIMERA COLUMNA-->
            <div class="col-md-6">
                <!--EMPRESAS-->
                <div class="row">
                    <div class="col-md-12">
                        <div class="nota-resumen">
                            <div class="title">
                                <h4>EMPRESAS & NEGOCIOS</h4>
                            </div>
                            <div>

                            <div id="carrusel-empresas"   class="carousel slide" >
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    @foreach($notesCompany as $index =>$note)
                                        <li class="@if ($active->note_id === $note->id) {{ "active" }} @endif " data-target="#carrusel-empresas" data-slide-to="{{$index}}"></li>
                                    @endforeach
                                </ol>
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    @foreach($notesCompany as $note)
                                        <div class="item  @if ($active->note_id === $note->id) {{ "active" }} @endif" >
                                            @foreach($note->medias as $media)
                                             <img src="{{ URL::to('/media/images/'.$media->file) }}" alt="negocios">
                                            @endforeach
                                            <div class="carousel-caption">
                                                <a href="{{ route('note_show_path',$note->id) }}"> {{ $note->title }}</a>
                                            </div>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>
            </div>
    </div>
<!--PUBLICIDAD-->
    <div class="row pt">
    <div class="col-md-12">
    <a href="#"><img class="img-responsive img-publicidad" src="img/publicidad1.jpg" alt=""/></a>
    </div>
    </div>
    </div>
<!--SEGUNDA COLUMNA-->
    <div class="col-md-6">
    <!--LANZAMIENTO-->
    <div class="row">
        <div class="col-md-12">
        <div class="nota-resumen">
        <div class="title">
            <h4> lanzamientos</h4>
        </div>
        <div>
            <div id="carrusel-lanzamientos"   class="carousel slide" >
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    @foreach($notesReleases as $index =>$note)
                        <li class="@if ($index == 0) {{ "active" }} @endif " data-target="#carrusel-lanzamientos" data-slide-to="{{$index}}"></li>
                    @endforeach

                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    @foreach($notesReleases as $index => $note)
                        <div class="item  @if ($index == 0) {{ "active" }} @endif " >
                            @foreach($note->medias as $index =>$media)
                                @if($index == 0)
                                <img src="{{ URL::to('/media/images/'.$media->file) }}" alt="negocios">
                                @endif
                            @endforeach
                            <div class="carousel-caption">
                                <a href="{{ route('note_show_path',$note->id) }}"> {{ $note->title }}</a>
                            </div>
                        </div>
                    @endforeach

                </div>
                <!-- Controls -->
                <!--<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">-->
                <!--<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>-->
                <!--<span class="sr-only">Previous</span>-->
                <!--</a>-->
                <!--<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">-->
                <!--<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>-->
                <!--<span class="sr-only">Next</span>-->
                <!--</a>-->
            </div>
        </div>
        </div>
        </div>
    </div>
    <!--PUBLICIDAD-->
    <div class="row pt">
    <div class="col-md-12">
    <a href="#"><img class="img-responsive img-publicidad" src="img/publicidad2.jpg" alt=""/></a>
    </div>
    </div>
    </div>
    </div>

<!--SEGUNDA FILA ENTREVISTA CASO DE EXITO-->
<div class="row">
<!--PRIMERA COLUMNA-->
    <div class="col-md-6">
        <!--ENTREVISTA-->
        <div class="row">
            <div class="col-md-12">
                <div class="nota-resumen">
                    <div class="title">
                        <h4> ENTREVISTA</h4>
                    </div>
                    <div>
                        <div class="carousel slide" >
                            <!-- Wrapper for slides -->
                            <div class="carousel-inner" role="listbox">
                                <div class="item active">
{{--{{$notesInterview[0]}}--}}
                                    {{--{{ $notesInterview[0]->medias }}--}}

                                    @foreach($notesInterview as $index => $note)

                                        @foreach($note->medias as $i =>$media)
                                            @if($i == 0)

                                                <img src="{{ URL::to('/media/images/'.$media->file) }}" alt="negocios">
                                            @endif
                                            {{--{{$media->file}}--}}
                                        @endforeach
                                            <div class="carousel-caption">
                                                <a href="#">{{ strip_tags($note->title)  }}</a>
                                            </div>
                                    @endforeach



                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <!--PUBLICIDAD-->
        <div class="row pt">
            <div class="col-md-12">
                <a href="#"><img class="img-responsive img-publicidad" src="img/publicidad2.jpg" alt=""/></a>
            </div>
        </div>
    </div>
<div class="col-md-6">
<!--CASOS DE EXITO-->
<div class="row">
<div class="col-md-12">
<div class="nota-resumen">
<div class="title">
    <h4> CASOS DE EXITO</h4>
</div>
<div>
    <div class="carousel slide" >
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <a href="#"><img src="img/imagen5.jpg" alt="negocios"></a>
                <div class="carousel-caption">
                    <a href="#">La Internet de las Cosas (IoT) + grandes ideas del Big Data: los datos tienen una historia que contar</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<!--PUBLICIDAD-->
<div class="row pt">
<div class="col-md-12">
<a href="#"><img class="img-responsive img-publicidad" src="img/publicidad2.jpg" alt=""/></a>
</div>
</div>
</div>
</div>

<!--TERCERA FILA TURISMO & GASTRONOMIA, MODA & BELLEZA -->
<div class="row">
<!--PRIMERA COLUMNA-->
<div class="col-md-6">
<!--ENTREVISTA-->
<div class="row">
<div class="col-md-12">
<div class="nota-resumen">
<div class="title">
    <h4> TURISMO & GASTRONOMIA</h4>
</div>
<div>
    <div class="carousel slide" >
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <a href="#"><img src="img/imagen6.jpg" alt="negocios"></a>
                <div class="carousel-caption">
                    <a href="#">La Internet de las Cosas (IoT) + grandes ideas del Big Data: los datos tienen una historia que contar</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

</div>
<div class="col-md-6">
<!--CASOS DE EXITO-->
<div class="row">
<div class="col-md-12">
<div class="nota-resumen">
<div class="title">
    <h4>MODA & BELLEZA</h4>
</div>
<div>
    <div class="carousel slide" >
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <a href="#"><img src="img/imagen7.jpg" alt="negocios"></a>
                <div class="carousel-caption">
                    <a href="#">La Internet de las Cosas (IoT) + grandes ideas del Big Data: los datos tienen una historia que contar</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
</div>
</div>


<!--CUARTA FILA VIDEO, AGENDA , MOVIDA EMPRESARIAL -->
<div class="row">
<!--PRIMERA COLUMNA-->
<div class="col-md-8">
<!--BUSINESSEMPRESARIAL TV-->
<div class="row">
<div class="col-md-12">
<div class="nota-resumen">
<div class="title">
    <h4>BUSINESSEMPRESARIAL TV</h4>
</div>
<div>
    <div class="embed-responsive embed-responsive-16by9">
        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/_Q-p-zkydLQ" allowfullscreen></iframe>
    </div>
</div>
</div>
</div>
</div>

</div>
<div class="col-md-4">
<!--AGENDA & PUBLICACIÓN-->
<div class="row">
<div class="col-md-12">
<div class="nota-resumen-mini">
<div class="title">
    <h4>AGENDA & PUBLICACIÓN</h4>
</div>
<div>
    <div class="carousel slide" >
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <a class="anima1" href="#"><img src="img/imagen2.jpg" alt="negocios"></a>
                <div class="carousel-caption">
                    <a href="#">La Internet de las Cosas (IoT) + grandes ideas del Big Data: los datos tienen una historia que contar</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>
<!-- MOVIDA EMPRESARIAL -->
<div class="row">
<div class="col-md-12">
<div class="nota-resumen-mini">
<div class="title">
    <h4>MOVIDA EMPRESARIAL </h4>
</div>
<div>
    <div class="carousel slide" >
        <!-- Wrapper for slides -->
        <div class="carousel-inner" role="listbox">
            <div class="item active">
                <a href="#"><img src="img/imagen2.jpg" alt="negocios"></a>
                <div class="carousel-caption">
                    <a href="#">La Internet de las Cosas (IoT) + grandes ideas del Big Data: los datos tienen una historia que contar</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
</div>

</div>
</div>
</div>
@stop
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
                                    @foreach($notesCompany as $index=>$note)
                                        <div class="item  @if ($active->note_id === $note->id) {{ "active" }} @endif" >
                                            @foreach($note->medias as $index =>$media)
                                                @if($index==0)
                                                <img src="{{ URL::to('/media/images/'.$media->file) }}" alt="{!! strip_tags($note->title) !!}" title="{!! strip_tags($note->title) !!}">
                                                @endif
                                            @endforeach
                                            <div class="carousel-caption">
                                                <a href="{{ route('note_show_path',[$note->edition_id,$note->category_id,$note->id]) }}"> {{ $note->title }}</a>
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
                {{------------------------------------Publicidad EMERSON-------------------------------------}}
                {{--<A HREF="https://ad.doubleclick.net/ddm/jump/N3120.2176501REVISTABUSINESS/B9368118.127413943;sz=534x160;ord=[timestamp]?" target="_blank">--}}

                    {{--<IMG class="img-responsive img-publicidad" SRC="https://ad.doubleclick.net/ddm/ad/N3120.2176501REVISTABUSINESS/B9368118.127413943;sz=534x160;ord=[timestamp];dc_lat=;dc_rdid=;tag_for_child_directed_treatment=?" BORDER=0  ALT="Advertisement">--}}
                {{--</A>--}}

                {{--<a href="http://info.emersonnetworkpower.com/CALA-DSE-SP"  target="_blank">--}}
                    {{--<img class="img-responsive img-publicidad" src="media/publicity/emerson_left.jpg" alt=""/>--}}
                {{--</a> --}}
                {{--<a href="http://www.sheratonlima.com/es"  target="_blank">--}}
                    {{--<img class="img-responsive img-publicidad" src="media/publicity/sheraton-534px-x-160-px.gif" alt=""/>--}}
                {{--</a>--}}
                <a href="http://www.ipae.pe/"  target="_blank">
                    <img class="img-responsive img-publicidad" src="media/publicity/ipae-h.jpg" alt=""/>
                </a>

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
                                <img src="{{ URL::to('/media/images/'.$media->file) }}" alt="{!! strip_tags($note->title) !!}" title="{!! strip_tags($note->title) !!}">
                                @endif
                            @endforeach
                            <div class="carousel-caption">
                                <a href="{{ route('note_show_path',[$note->edition_id,$note->category_id,$note->id]) }}"> {{ $note->title }}</a>
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
                {{--------------------------------publicidad Schneider-----------------------------------}}
                {{--<a href="https://www.schneider-electric.com/tools/registration/promo/PY/ls/getpromo/43771b/"  target="_blank">--}}
                    {{--<img class="img-responsive img-publicidad" src="media/publicity/gift-Prefab-534x160.gif" alt=""/>--}}
                {{--</a>--}}

                <a href="http://www.natura.com.pe/portal-maquillaje/?utm_source=businessempresarial&utm_campaign=BCUNA&utm_medium=banner"  target="_blank">
                    <img class="img-responsive img-publicidad" src="media/publicity/534x160.gif" alt=""/>
                </a>
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
                                                <img src="{{ URL::to('/media/images/'.$media->file) }}" alt="{!! strip_tags($note->title) !!}" title="{!! strip_tags($note->title) !!}">
                                            @endif
                                            {{--{{$media->file}}--}}
                                        @endforeach
                                            <div class="carousel-caption">
                                                <a href="{{ route('note_show_path',[$note->edition_id,$note->category_id,$note->id]) }}">{{ strip_tags($note->title)  }}</a>
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
                {{-------------------------------------------------pupblicidad----------------------------------------------------}}
                {{--<a href="http://www.mitsubishi-motors.com.pe "  target="_blank"><img class="img-responsive img-publicidad" src="media/publicity/mitsu_534x160.gif" alt=""/></a>--}}
                <a href="http://www.belmond.com/es/miraflores-park-lima/meetings_and_events_lima"  target="_blank"><img class="img-responsive img-publicidad" src="media/publicity/belmond_Banner_Business_Empresarial_534x160.gif" alt=""/></a>
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
                                    @foreach($notesSuccessStories as $index => $note)
                                        @foreach($note->medias as $i =>$media)
                                            @if($i == 0)
                                                <img src="{{ URL::to('/media/images/'.$media->file) }}" alt="{!! strip_tags($note->title) !!}" title="{!! strip_tags($note->title) !!}">
                                            @endif
                                        @endforeach
                                        <div class="carousel-caption">
                                            <a href="{{ route('note_show_path',[$note->edition_id,$note->category_id,$note->id]) }}">{{ strip_tags($note->title)  }}</a>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{--<!--PUBLICIDAD-->--}}
            <div class="row pt">
                <div class="col-md-12">
                    {{--<a href="http://www.everis.com" target="_blank"><img class="img-responsive img-publicidad" src="media/publicity/AF_banner-everis_534x160-px-animado.gif" alt=""/></a>--}}
                    <a href="http://www.emersonnetworkpower.com/es-CALA/Products/ACPower/RackmountUPS/Pages/Video_Liebert_GXT4.aspx" target="_blank"><img class="img-responsive img-publicidad" src="media/publicity/REG-FY16-Q2-Ad-Liebert-GXT4.jpg" alt=""/></a>
                </div>
            </div>
    </div>
</div>

<!--TERCERA FILA TURISMO & GASTRONOMIA, MODA & BELLEZA -->
<div class="row">
<!--PRIMERA COLUMNA-->
    <div class="col-md-6">
    <!--TURISMO & GASTRONOMIA-->
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
                        @foreach($notesTourismGastronomy as $index => $note)
                            @foreach($note->medias as $i =>$media)
                                @if($i == 0)
                                    <img src="{{ URL::to('/media/images/'.$media->file) }}" alt="{!! strip_tags($note->title) !!}" title="{!! strip_tags($note->title) !!}">
                                @endif
                                {{--{{$media->file}}--}}
                            @endforeach
                            <div class="carousel-caption">
                                <a href="{{ route('note_show_path',[$note->edition_id,$note->category_id,$note->id]) }}">{{ strip_tags($note->title)  }}</a>
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
                <a href="http://destinationsguide.copaair.com/es/BZE/" target="_blank"><img class="img-responsive img-publicidad" src="media/publicity/copa_belize_staticbanner_awareness_534x160ES.jpg" alt=""/></a>
            </div>
     </div>



    </div>
<div class="col-md-6">
    <!--MODA & BELLEZA-->
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
                                @foreach($notesStyleBbeauty as $index => $note)
                                    @foreach($note->medias as $i =>$media)
                                        @if($i == 0)
                                            <img src="{{ URL::to('/media/images/'.$media->file) }}" alt="{!! strip_tags($note->title) !!}" title="{!! strip_tags($note->title) !!}">
                                        @endif
                                        {{--{{$media->file}}--}}
                                    @endforeach
                                    <div class="carousel-caption">
                                        <a href="{{ route('note_show_path',[$note->edition_id,$note->category_id,$note->id]) }}">{{ strip_tags($note->title)  }}</a>
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
            {{--<a href="http://www.everis.com" target="_blank"><img class="img-responsive img-publicidad" src="media/publicity/publicidad1.jpg" alt=""/></a>--}}
            {{-- --------------------PUBLICIDAD PALOALTO- --------------------------------------}}
            {{--<a href="http://www.distecna.pe/" target="_blank">--}}
                {{--<img class="img-responsive img-publicidad" src="media/publicity/paloalto_banner1.gif" alt=""/>--}}
            {{--</a>--}}
            <a href="https://www.schneider-electric.com/tools/registration/promo/PY/ls/getpromo/43771b/"  target="_blank">
            <img class="img-responsive img-publicidad" src="media/publicity/gift-Prefab-534x160.gif" alt=""/>
            </a>

        </div>
    </div>
</div>
</div>
<!--CUARTA FILA VIDEO, AGENDA , MOVIDA EMPRESARIAL -->
<div class="row">
<!--PRIMERA COLUMNA-->
<div class="col-md-8">
    {{--PUBLICIDAD--}}
    <div class="row pt">
        <div class="col-md-12">
            <a href="http://www.sheratonlima.com/es" target="_blank"><img class="img-responsive img-publicidad" src="media/publicity/sheraton-534px-x-160-px.gif" alt=""/></a>
        </div>
    </div>

    {{--PUBLICIDAD--}}
    <div class="row pt">
        <div class="col-md-12">
            <a href="http://www.distecna.pe/" target="_blank">
                <img class="img-responsive img-publicidad" src="media/publicity/paloalto_banner1.gif" alt=""/>
            </a>
        </div>
    </div>


<!--BUSINESSEMPRESARIAL TV-->
    <div class="row">
        <div class="col-md-12">
            <div class="nota-resumen">
                <div class="title">
                    <h4>BUSINESSEMPRESARIAL TV</h4>
                </div>
                <div>
                    <div class="embed-responsive-video-interior embed-responsive embed-responsive-16by9">
                        <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/vWQwforrKuw" allowfullscreen></iframe>
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
                                    @foreach($notesSiaryPublication as $index => $note)
                                        @foreach($note->medias as $i =>$media)
                                            @if($i == 0)
                                                <img src="{{ URL::to('/media/images/'.$media->file) }}" alt="{!! strip_tags($note->title) !!}" title="{!! strip_tags($note->title) !!}"">
                                            @endif
                                            {{--{{$media->file}}--}}
                                        @endforeach
                                        <div class="carousel-caption">
                                            {{--<a href="{{ route('note_show_path',[$note->edition_id,$note->category_id,$note->id]) }}">{{ strip_tags($note->title)  }}</a>--}}
                                            <a href="{{route('note_publication_agenda_show_path',[$note->edition_id,$note->category_id]) }}">{{ strip_tags($note->title)  }}</a>
                                        </div>
                                    @endforeach
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
                                    @foreach($notesMoveBusiness as $index => $note)
                                        @foreach($note->medias as $i =>$media)
                                            @if($i == 0)
                                                <img src="{{ URL::to('/media/images/'.$media->file) }}" alt="{!! strip_tags($note->title) !!}" title="{!! strip_tags($note->title) !!}"">
                                            @endif
                                            {{--{{$media->file}}--}}
                                        @endforeach
                                        <div class="carousel-caption">
                                            <a href="{{ route('note_show_path',[$note->edition_id,$note->category_id,$note->id]) }}">{{ strip_tags($note->title)  }}</a>
                                        </div>
                                    @endforeach
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
@section('article')
    <!-- Articulo de la Semana-->
    <div class="row">
        <div class="col-md-12">
            <div class="nota-resumen">
                <div class="title">
                    <h4>ARTICULO DE LA SEMANA</h4>
                </div>
                <div>
                    <div  class="columnista" >
                        @foreach($notesWeekArticle as $index => $note)
                            <div class="media">
                                @foreach($note->medias as $i =>$media)
                                    @if($i == 0)
                                        <div class="media-left">
                                            <a href="{{ route('note_show_path',[$note->edition_id,$note->category_id,$note->id]) }}">
                                                <img class="media-object img-circle" src="{{ URL::to('/media/images/'.$media->file) }}" alt="{!! strip_tags($note->title) !!}" title="{!! strip_tags($note->title) !!}">
                                            </a>
                                        </div>
                                    @endif
                                @endforeach
                                <div class="media-body">
                                    <h5 class="media-heading"><a href="{{ route('note_show_path',[$note->edition_id,$note->category_id,$note->id]) }}"> {!! strip_tags($note->title) !!} </a></h5>
                                    <p> <a href="{{ route('note_show_path',[$note->edition_id,$note->category_id,$note->id]) }}"> {!!   str_limit(strip_tags($note->content), $limit = 100, $end = '...')  !!} </a> </p>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
            </div>
        </div>
    </div>
@stop


@section('social')

    {{-- SOCIAL--}}
    <div class="row">
        <div class="col-md-4">
            <!-- Publicidad Facebook-->
            <div class="row pt pb">
                <div class="col-md-12">
                    <div>

                        <a href="https://www.facebook.com/Business-Empresarial-105970562807701/?fref=ts" target="_blank"> {!! Html::image('img/facebook-publicidad.jpg','',array('class' => 'img-responsive img-publicidad')) !!} </a>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-4">
            <!-- FACEBOOK-->
            <div class="row pt pb">
                <div class="col-md-12">
                    <div>
                        <a href="https://twitter.com/bempresarial?lang=es" target="_blank">{!!  Html::image('img/twitter-publicidad.jpg','', array('class' => 'img-responsive img-publicidad')) !!} </a>
                    </div>
                </div>
            </div>

        </div>
        <div class="col-md-4">
            <!-- Publicidad Youtube-->
            <div class="row pt pb">
                <div class="col-md-12">
                    <div>
                        <a href="https://www.youtube.com/channel/UCTSwlwC0TWdBnj-TkvJe4YA" target="_blank">{!!  Html::image('img/youtube-publicidad.jpg','', array('class' => 'img-responsive img-publicidad')) !!} </a>

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
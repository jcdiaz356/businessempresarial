@extends('layouts.default')



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
                                <h4>   Resultado de busqueda  </h4>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12">

                        {{--@foreach($notesSearch as $index =>$noteSearch)--}}
                            {{--<div class="row">--}}


                                {{--<div class="col-md-12">--}}
                                    {{--<div  class="pb mb pt">--}}
                                        {{--<span class="badge">{{ $index + 1 }}</span>   {!! $noteSearch->title !!}--}}
                                    {{--</div>--}}
                                {{--</div>--}}
                            {{--</div>--}}

                        {{--@endforeach--}}


                        @foreach($notesSearch as $index =>$noteSearch)
                            <div class="bs-callout bs-callout-danger"  >
                                <div class="row">
                                    <div class="col-md-2">
                                        @foreach($noteSearch->medias as $i =>$media)
                                            @if($i == 0)
                                                <a href="{{ route('note_show_path',[$noteSearch->edition_id,$noteSearch->category_id,$noteSearch->id]) }}" target="_blank"> <img class="img-responsive" src="{{ URL::to('/media/images/'.$media->file) }}" alt="negocios"> </a>
                                            @endif
                                            {{--{{$media->file}}--}}
                                        @endforeach

                                    </div>
                                    <div class="col-md-10">
                                        <!--<span class="badge">4</span>-->
                                        <h5><a class="text-danger" href="{{ route('note_show_path',[$noteSearch->edition_id,$noteSearch->category_id,$noteSearch->id]) }}" target="_blank">{!! $noteSearch->title !!}</a></h5>
                                        <p>{!! str_limit(strip_tags($noteSearch->content), $limit = 100, $end = '...') !!}</p>
                                    </div>
                                    {{--<div class="col-md-1">--}}
                                        {{--<span class="badge">{{ $index + 1 }}</span>--}}
                                    {{--</div>--}}
                                </div>
                            </div>


                        @endforeach


                        {{--<div class="row">--}}
                            {{--<div class="col-md-2">--}}
                                {{--{!! $notesSearch  !!}--}}
                            {{--</div>--}}
                        {{--</div>--}}

                    </div>


                </div>

            </div>
        </div>
    </div>
@stop
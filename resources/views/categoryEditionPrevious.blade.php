@extends('layouts.editionsPrevious')

@section('content')
    <div class="col-md-9">
        <!--PRIMERA FILA EMPRESA, ENTREVISTA, PUBLICIDAD-->
        <div class="row">
            <!--PRIMERA COLUMNA-->
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-12">
                        @foreach($notes as $index =>$note)
                            @if ($index == 0)
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="title">
                                        <h4>{{ $note->category->name}}</h4>
                                    </div>
                                </div>
                            </div>
                            @endif
                        @endforeach

                            @foreach($notes as $index =>$note)
                                <div class="bs-callout bs-callout-danger"  >
                                    <div class="row">
                                        <div class="col-md-2">
                                            @foreach($note->medias as $i =>$media)
                                                @if($i == 0)
                                                    <a href="{{ route('note_show_path_editions_previous',[$note->edition_id,$note->category_id,$note->id]) }}"> <img class="img-responsive" src="{{ URL::to('/media/images/'.$media->file) }}" alt="negocios"> </a>
                                                @endif
                                                {{--{{$media->file}}--}}
                                            @endforeach

                                        </div>
                                        <div class="col-md-10">
                                            <!--<span class="badge">4</span>-->
                                            <h5><a class="text-danger" href="{{ route('note_show_path_editions_previous',[$note->edition_id,$note->category_id,$note->id]) }}">{!! $note->title !!}</a></h5>
                                            <p>{!! str_limit(strip_tags($note->content), $limit = 100, $end = '...') !!}</p>
                                        </div>
                                        {{--<div class="col-md-1">--}}
                                            {{--<span class="badge">{{ $index + 1 }}</span>--}}
                                        {{--</div>--}}
                                    </div>
                                </div>


                            @endforeach


                    </div>

                </div>

                <div class="row">

                    <div class="col-md-12">

                        {!! $notes  !!}
                    </div>
                </div>
            </div>
        </div>
    </div>

@stop
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
                                <h4>   EDICIONES ANTERIORES  </h4>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-12">

                        @foreach($editionsPrevious as $index =>$editionsPreviou)
                            @if($index > 0)
                            <div class="row">


                                <div class="col-md-12">
                                    <div  class="pb mb pt">
                                        <span class="badge">{{ $index + 1 }}</span>  <a href="{{ route('home_editions_previous',[$editionsPreviou->id]) }}" target="_blank">  {!! $editionsPreviou->description !!} </a>
                                    </div>
                                </div>
                            </div>
                            @endif

                        @endforeach

                            <div class="row">

                                <div class="col-md-12">

                                    {!! $editionsPrevious  !!}
                                </div>
                            </div>

                    </div>


                </div>

            </div>
        </div>
    </div>
@stop
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
                                <h4>   AGENDA & PUBLICACIONES  </h4>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="row">
                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Agenda</h4>
                            </div>
                        </div>


                        @foreach($agendas as $index =>$agenda)
                            <div class="row pb">
                                <div class="col-md-12">



                                            <div  class="pb mb pt pr pl" style="background-color: #e3e3e3">
                                                <div class="row "  >
                                                    <div class="col-md-12" >
                                                        {!! $agenda->content !!}
                                                    </div>
                                                </div>

                                            </div>


                                </div>
                            </div>
                        @endforeach



                    </div>

                    <div class="col-md-6">
                        <div class="row">
                            <div class="col-md-12">
                                <h4>Publicaciones</h4>
                            </div>
                        </div>

                                @foreach($publications as $index =>$publication)
                                    <div class="row pb">
                                        <div class="col-md-12 pb">



                                                    <div  class="pb mb pt pl pr"   style="background-color: #e3e3e3">
                                                        <div class="row ">
                                                            <div class="col-md-12">
                                                                    @foreach($publication->medias as $index =>$media)
                                                                        @if($index==0)
                                                                            <img  class="img-responsive img-content" src="{{ URL::to('/media/images/'.$media->file) }}" alt="negocios">
                                                                        @endif
                                                                    @endforeach
                                                                    {!! $publication->content !!}
                                                            </div>
                                                        </div>

                                                    </div>


                                        </div>
                                    </div>
                                @endforeach


                        {{--<div class="row">--}}
                            {{--<div class="col-md-12" >--}}
                                {{--<div  class="pb pt mb">--}}
                                    {{--<img class="img-responsive img-content"  src="" alt="">--}}
                                    {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit.--}}
                                    {{--A accusamus atque deleniti doloremque error facilis hic inventore,--}}
                                    {{--quas quidem recusandae rerum saepe sed! Ad consequatur, iusto minus modi neque qui!--}}
                                    {{--Lorem ipsum dolor sit amet, consectetur adipisicing elit. Animi aperiam autem consequuntur dolores earum ex excepturi,--}}
                                    {{--ipsam ipsum iusto necessitatibus officia reprehenderit sapiente suscipit! Blanditiis culpa ipsam nesciunt quisquam vero.--}}
                                {{--</div>--}}
                            {{--</div>--}}
                        {{--</div>--}}
                    </div>

                </div>

            </div>
        </div>
    </div>
@stop
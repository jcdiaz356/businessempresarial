@extends('layouts.default')

@section('stylesheet')

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
                                <h4>Videos</h4>
                            </div>
                        </div>
                    </div>
                </div>





                <div class="row">
                    <div class="col-md-12">
                        <!-- Publicidad Youtube-->

                        <div class="row pt pb">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12 pb">
                                        <div class="embed-responsive embed-responsive-16by9">


                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/zHWSWjY6L1U" allowfullscreen></iframe>


                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12 pb">
                                        <div class="embed-responsive  embed-responsive-16by9">

                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/f_liV1AJY7s" allowfullscreen></iframe>



                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>


                        <div class="row pt pb">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12 pb">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/kjnn6AZaCkA" allowfullscreen></iframe>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12 pb">
                                        <div class="embed-responsive  embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/iFBMr1Crc_w-4" allowfullscreen></iframe>

                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row pt pb">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12 pb">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/vQ5JvRbq5" allowfullscreen></iframe>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12 pb">
                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/y-jc6irnD8k" allowfullscreen></iframe>


                                            </div>
                                    </div>
                                </div>

                            </div>
                        </div>

                        <div class="row pt pb">
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12 pb">

                                        <div class="embed-responsive embed-responsive-16by9">
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/jpVnkmwzJRU" allowfullscreen></iframe>

                                        </div>
                                    </div>
                                </div>

                            </div>
                            <div class="col-md-6">
                                <div class="row">
                                    <div class="col-md-12 pb">
                                        <div class="embed-responsive embed-responsive-16by9">
                                           {{--SIN VIDEO--}}
                                            <iframe class="embed-responsive-item" src="https://www.youtube.com/embed/oT0mHvJFXDQ" allowfullscreen></iframe>


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

@section('scriptPlugin')



@stop
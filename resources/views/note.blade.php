@extends('layouts.default')



@section('content')

    <h1> {{$note->title}}</h1>

    <p>{{$note->content}}</p>

@stop
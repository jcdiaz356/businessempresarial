@extends('layouts.default')



@section('content')

    <h1> Estas son las notas</h1>
    <ul>


    @foreach($notes as $note)

      {{--<li><a href="/notes/{{$note->id}}">  {{$note->title}}   -  {{$note->category->name}}</a></li>--}}
      <li><a href="{{ route('note_show_path',$note->id) }}">  {{$note->title}}   -  {{$note->category->name}}</a></li>
    @endforeach

    </ul>


    <h1>Categorias</h1>
    @foreach($categories as $category)

        {{--<li><a href="/notes/{{$note->id}}">  {{$note->title}}   -  {{$note->category->name}}</a></li>--}}
        <p>  {{$category->name}}  </p>
        <br>

    @endforeach

    <p> {{$edition[0]->name}}</p>
    @stop
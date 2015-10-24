@extends('layouts.default')



@section('content')
    <div class="col-md-9">
        <h1> Estas son las notas</h1>


        <ul>
        @foreach($notes as $note)

          {{--<li><a href="/notes/{{$note->id}}">  {{$note->title}}   -  {{$note->category->name}}</a></li>--}}
         <li>  <a href="{{ route('note_show_path',$note->id) }}">  {!!html_entity_decode($note->title)!!}   -  {{$note->category->name}}</a></li>

        @endforeach
        </ul>



        <h1>Categorias</h1>
        @foreach($categories as $category)

            {{--<li><a href="/notes/{{$note->id}}">  {{$note->title}}   -  {{$note->category->name}}</a></li>--}}
            <p>  {{($category->name)}} </p>
            <br>

        @endforeach

        <p><a href="#"> {{$edition->name}}  - {{$edition->id}}</a></p>

    </div>
@stop
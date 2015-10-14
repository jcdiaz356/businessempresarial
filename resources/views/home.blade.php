@extends('layouts.default')



@section('content')

    <h1> Estas son las notas</h1>
    <ul>


    @foreach($notes as $note)

      <li>  {{$note->title}}   -  {{$note->category->name}}</li>
    @endforeach

    </ul>
    @stop
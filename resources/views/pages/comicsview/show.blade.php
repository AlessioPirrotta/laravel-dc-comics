@extends('layouts.app')

@section('title', ' Dc | Read Show')

@section('main')

<main>
    <h2>{{$comic->title}}</h2>
    {{($comic->description)}}
</main>

@endsection



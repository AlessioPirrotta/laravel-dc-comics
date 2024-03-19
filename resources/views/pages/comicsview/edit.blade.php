@extends('layouts.app')

@section('title', ' Dc | Read Edit')

@section('main')

<main>
    <h2>Edita Fumetto</h2>
    <div class="container">
        <form class="d-flex flex-column" action="{{ route('comics.update',$comic->id) }}" method="POST">

            @csrf

            @method('PUT')

            <label for="title">Titolo:</label>
            <input type="text" id="title" name="title" placeholder="Title" value="{{old('title')?? $comic->title}}">

            <label for="description">Descrizione:</label>
            <textarea id="description" name="description" placeholder="Description">{{old('description')?? $comic->description}}</textarea>

            <label for="thumb">Link copertina:</label>
            <input type="text" id="thumb" name="thumb" placeholder="Thumb" value="{{old('thumb')?? $comic->thumb}}">

            <label for="price">Prezzo</label>
            <input type="text" id="price" name="price" placeholder="Price" value="{{old('thumb')?? $comic->thumb}}">

            <label for="series">Serie:</label>
            <input type="text" id="series" name="series" placeholder="Series" value="{{old('series')?? $comic->series}}">

            <label for="sale_date">Data</label>
            <input type="text" id="sale_date" name="sale_date" placeholder="AAAA-MM-DD" value="{{old('sale_date')?? $comic->sale_date}}">

            <label for="type">Genere</label>
            <input type="text" id="type" name="type" placeholder="Type" value="{{old('type')?? $comic->type}}">
            <div class="d-flex justify-content-center">

                <button style="width: 20%" class="btn btn-warning my-3" type="submit">Crea</button>
            </div>

        </form>

    </div>
</main>

@endsection

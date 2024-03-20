@extends('layouts.app')

@section('title', ' Dc | Read Create')

@section('main')

<main>
    <h2>Crea Nuovo Fumetto</h2>
    <div class="container">
        @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
        <form class="d-flex flex-column" action="{{ route('comics.store') }}" method="POST">

            @csrf

            <label for="title">Titolo:</label>
            <input type="text" id="title" name="title" placeholder="Title" required>

            <label for="description">Descrizione:</label>
            <textarea id="description" name="description" placeholder="Description"></textarea>

            <label for="thumb">Link copertina:</label>
            <input type="text" id="thumb" name="thumb" placeholder="Thumb">

            <label for="price">Prezzo</label>
            <input type="text" id="price" name="price" placeholder="Price">

            <label for="series">Serie:</label>
            <input type="text" id="series" name="series" placeholder="Series">

            <label for="sale_date">Data</label>
            <input type="text" id="sale_date" name="sale_date" placeholder="AAAA-MM-DD">

            <label for="type">Genere</label>
            <input type="text" id="type" name="type" placeholder="Type">
            <div class="d-flex justify-content-center">

                <button style="width: 20%" class="btn btn-warning my-3" type="submit">Crea</button>
            </div>

        </form>

    </div>
</main>

@endsection

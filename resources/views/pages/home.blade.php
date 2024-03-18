@extends('layouts.App')

@section('title', 'Pagina di Benvenuto')
@section('main')
<main>
    <div class="position-relative bg-dark">

        <div id="jumbo">

            <img width="100%"  src="{{ Vite::asset('resources/img/jumbotron.jpg') }}" alt="" class="logo">
        </div>
        <div class="container text-light d-flex bg-dark py-5">
            <div class="d-flex justify-content-center flex-wrap">
                @foreach ($comics as $item)
                <div id="card" class="col-2">
                    <figure>
                        <img class="" src={{$item['thumb']}} alt="">
                    </figure>
                    <p>{{$item['title']}}</p>


                </div>
                @endforeach
            </div>



        </div>
        <div class="d-flex justify-content-center">
            <button>LOAD MORE</button>
            <button id="cur">CURRENT SERIES</button>

        </div>
    </div>
</main>

@endsection

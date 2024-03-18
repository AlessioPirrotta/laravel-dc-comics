@extends('layouts.app')

@section('title', ' Dc | Read Index')

@section('main')

<main>
    <h2>Index Dc</h2>
    <table class="table table-primary my-4">
        @foreach ($comics as $item)
                    <tr class="slide">

                        <td class="uppercase">
                            <a href="{{ route('comics.show', ['comic' => $item['id']]) }}">
                                {{ $item['title'] }}
                            </a>
                        </td>
                        <td class="uppercase">{{ $item['price'] }}</td>
                        <td class="uppercase">{{ $item['series'] }}</td>
                        <td class="uppercase">{{ $item['thumb'] }}</td>
                        <td class="uppercase">{{ $item['sale_date'] }}</td>
                        <td class="uppercase">{{ $item['type'] }}</td>
                    </tr>
        @endforeach
    </table>

</main>

@endsection

@extends('layouts.app')

@section('title', ' Dc | Read Index')

@section('main')

<main>
    <h2>Index Dc</h2>
    <table class="table table-primary my-4">

        <a href="{{route('comics.create')}}" class="btn btn-primary ms-2" role="button">Crea Fumetto</a>

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
                        <td>


                            <a style="width:100px" href="{{route('comics.edit', $item->id)}}" type="submit" class="btn btn-primary">
                                Edit</a>


                            <form action="{{route('comics.destroy', $item->id)}}" method="POST">
                                @csrf
                                @method('DELETE')
                                <button style="width:100px"  type="submit" class="btn btn-danger">Delete</a>
                            </form>
                        </td>

                    </tr>
        @endforeach
    </table>

</main>

@endsection

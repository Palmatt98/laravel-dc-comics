@extends('layouts.app')

@section('content')
    <div class="container">
        <h1>Lista delle paste</h1>
        <table class="table w-100">
            <thead>
                <tr>
                    <th>id</th>
                    <th>title</th>
                    <th>descrizione</th>
                    <th>immagine</th>
                    <th>prezzo</th>
                    <th>Data di uscita</th>
                    <th>Azioni</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($comic_book as $item)
                    <tr>
                        <th>{{ $item->id }}</th>
                        <td>{{ $item->title }}</td>
                        <td>{{ $item->description }}</td>
                        <td class="poster">
                            <img class="w-100" src="{{ $item->thumb }}" alt="">
                        </td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->sale_date }}</td>
                        <td>
                            <div>
                                <a href="{{route('dc_comics.show', ['dc_comic' => $item->id])}}">
                                    <button class="btn btn-success">Dettagli</button>
                                </a>
                
                            </div>
                        </td>
                    </tr>
                @endforeach

        </table>
    </div>
@endsection

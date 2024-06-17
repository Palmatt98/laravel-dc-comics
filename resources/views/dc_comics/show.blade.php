@extends('layouts.app')

@section('content')
    <div class="container">
        <h1 class="mb-5">Dettaglio fumetto</h1>
        <div class="mb-3">
            <p>
                <strong>Titolo:</strong>
                {{ $dc_comic->title }}
            </p>
        </div>
        <div class="mb-3">
            <p>
                <strong>Descrizione:</strong>
                {{ $dc_comic->description }}
            </p>
        </div>
        <div class="mb-3">
            <p>
                <strong>Data di uscita:</strong>
                {{ $dc_comic->sale_date }}
            </p>
        </div>
        <div class="mb-3">
            <p>
                <strong>Prezzo:</strong>
                €{{ $dc_comic->price }}
            </p>
        </div>
        <div class="mb-3">
            <p>
                <strong>Poster:</strong>
            </p>
            <img src="{{ $dc_comic->thumb }}" alt="immagine poster">
        </div>
    </div>
@endsection

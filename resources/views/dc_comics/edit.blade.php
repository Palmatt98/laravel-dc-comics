@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>Modifica il fumetto</h1>
        <form action="{{ route('dc_comics.update', ['dc_comic' => $dc_comic->id]) }}" method="POST">
            @csrf
            @method("PUT")

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $dc_comic->title }}">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <input type="text" class="form-control" id="description" name='description' value="{{ $dc_comic->description }}">
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">URL immagine</label>
                <input type="text" class="form-control" id="thumb" name='thumb' value="{{ $dc_comic->thumb }}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="price" name='price' value="{{ $dc_comic->price }}">
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Data di uscita</label>
                <input type="date" class="form-control" id="sale_date" name='sale_date' value="{{ $dc_comic->sale_date }}">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

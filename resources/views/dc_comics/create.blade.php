@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>Crea un nuovo fumetto</h1>
        <form action="{{ route('dc_comics.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input type="text" class="form-control" id="title" name="title">
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <input type="text" class="form-control" id="description" name='description'>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">URL immagine</label>
                <input type="text" class="form-control" id="thumb" name='thumb'>
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input type="text" class="form-control" id="price" name='price'>
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Data di uscita</label>
                <input type="date" class="form-control" id="sale_date" name='sale_date'>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

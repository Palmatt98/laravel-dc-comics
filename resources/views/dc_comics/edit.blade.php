@extends('layouts.app')

@section('content')
    <div class="container">

        <h1>Modifica il fumetto</h1>
        @if ($errors->any())
            <div>
                @foreach ($errors->all() as $error)
                    <div class="alert alert-danger" role="alert">
                        {{ $error }}
                    </div>
                @endforeach
            </div>
        @endif
        <form action="{{ route('dc_comics.update', ['dc_comic' => $dc_comic->id]) }}" method="POST">
            @csrf
            @method("PUT")

            <div class="mb-3">
                <label for="title" class="form-label">Titolo</label>
                <input 
                    type="text" 
                    id="title" 
                    name="title" 
                    value="{{ $dc_comic->title }}"
                    class="
                        form-control
                        @error('title')
                            is-invalid
                        @enderror
                    "
                >

                @error('title')
                    <div id="title-error" class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Descrizione</label>
                <input 
                    type="text" 
                    id="description" 
                    name='description' 
                    value="{{ $dc_comic->description }}"
                    class="
                        form-control
                        @error('description')
                            is-invalid
                        @enderror
                    "
                >

                @error('description')
                    <div id="description-error" class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">URL immagine</label>
                <input type="text" class="form-control" id="thumb" name='thumb' value="{{ $dc_comic->thumb }}">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo</label>
                <input 
                    type="text" 
                    id="price" 
                    name='price' 
                    value="{{ $dc_comic->price }}"
                    class="
                        form-control
                        @error('price')
                            is-invalid
                        @enderror
                    "
                >

                @error('price')
                    <div id="price-error" class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Data di uscita</label>
                <input 
                    type="date" 
                    id="sale_date" 
                    name='sale_date' 
                    value="{{ $dc_comic->sale_date }}"
                    class="
                        form-control
                        @error('sale_date')
                            is-invalid
                        @enderror
                    "
                >

                @error('sale_date')
                    <div id="sale_date-error" class="invalid-feedback">
                        {{ $message }}
                    </div>
                @enderror
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
@endsection

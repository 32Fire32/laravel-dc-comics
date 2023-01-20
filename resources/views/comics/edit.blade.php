@extends('layout.main')
@section('page-content')
    <div class="container">
        <h1>Modifica: {{ $comic->title }}</h1>
        <form action="{{ route('comics.update', $comic) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Titolo*</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $comic->title }}" required>
            </div>
            <div class="mb-3">
                <label for="description">Descrizione</label>
                <textarea class="form-control" rows="3" placeholder="Leave a description here" id="description"
                    name="description">{{ $comic->description }}</textarea>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Url immagine</label>
                <input type="text" value="{{ $comic->thumb }}" class="form-control" id="thumb" name="thumb">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo*</label>
                <input type="number" value="{{ $comic->price }}" class="form-control" id="price" name="price"
                    required>
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie*</label>
                <input type="text" value="{{ $comic->series }}" class="form-control" id="series" name="series"
                    required>
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Data*</label>
                <input type="date" value="{{ $comic->sale_date }}" class="form-control" id="sale_date" name="sale_date"
                    required>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Tipologia*</label>
                <input type="text" value="{{ $comic->type }}" class="form-control" id="type" name="type"
                    required>
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </form>
    </div>
@endsection

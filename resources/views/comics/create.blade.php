@extends('layout.main')
@section('page-content')
    <div class="container">
        <h1>Inserisci un nuovo fumetto</h1>
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo*</label>
                <input type="text" class="form-control @error('title') is-invalid @enderror" id="title" name="title"
                    value="{{ old('title') }}" required>
            </div>
            @error('title')
                <div class="alert alert-danger">{{ $message }} </div>
            @enderror
            <div class="mb-3">
                <label for="description">Descrizione</label>
                <textarea class="form-control @error('description') is-invalid @enderror " rows="3"
                    placeholder="Leave a description here" id="description" name="description">{{ old('description') }}</textarea>
            </div>
            @error('description')
                <div class="alert alert-danger">{{ $message }} </div>
            @enderror
            <div class="mb-3">
                <label for="thumb" class="form-label">Url immagine</label>
                <input type="text" class="form-control @error('thumb') is-invalid @enderror" id="thumb"
                    name="thumb" value="{{ old('thumb') }}">
            </div>
            @error('thumb')
                <div class="alert alert-danger">{{ $message }} </div>
            @enderror
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo*</label>
                <input type="number" class="form-control @error('price') is-invalid @enderror" id="price"
                    step="0.01" name="price" value="{{ old('price') }}" required>
            </div>
            @error('price')
                <div class="alert alert-danger">{{ $message }} </div>
            @enderror
            <div class="mb-3">
                <label for="series" class="form-label">Serie*</label>
                <input type="text" class="form-control @error('series') is-invalid @enderror" id="series"
                    name="series" value="{{ old('series') }}" required>
            </div>
            @error('series')
                <div class="alert alert-danger">{{ $message }} </div>
            @enderror
            <div class="mb-3">
                <label for="sale_date" class="form-label">Data*</label>
                <input type="date" class="form-control @error('sale_date') is-invalid @enderror" id="sale_date"
                    name="sale_date" value="{{ old('sale_date') }}" required>
            </div>
            @error('sale_date')
                <div class="alert alert-danger">{{ $message }} </div>
            @enderror
            <div class="mb-3">
                <label for="type" class="form-label">Tipologia*</label>
                <input type="text" class="form-control @error('type') is-invalid @enderror" id="type" name="type"
                    value="{{ old('type') }}" required>
            </div>
            @error('type')
                <div class="alert alert-danger">{{ $message }} </div>
            @enderror
            <button type="submit" class="btn btn-primary">Save</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </form>
    </div>
@endsection

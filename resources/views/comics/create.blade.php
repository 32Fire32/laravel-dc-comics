@extends('layout.main')
@section('page-content')
    <div class="container">
        <h1>Inserisci un nuovo fumetto</h1>
        <form action="{{ route('comics.store') }}" method="POST">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Titolo*</label>
                <input type="text" class="form-control" id="title" name="title" required>
            </div>
            <div class="form-floating">
                <textarea class="form-control" placeholder="Leave a description here" id="description" name="description"></textarea>
                <label for="description">Descrizione</label>
            </div>
            <div class="mb-3">
                <label for="thumb" class="form-label">Url immagine</label>
                <input type="text" class="form-control" id="thumb" name="thumb">
            </div>
            <div class="mb-3">
                <label for="price" class="form-label">Prezzo*</label>
                <input type="number" class="form-control" id="price" name="price" required>
            </div>
            <div class="mb-3">
                <label for="series" class="form-label">Serie*</label>
                <input type="text" class="form-control" id="series" name="series" required>
            </div>
            <div class="mb-3">
                <label for="sale_date" class="form-label">Data*</label>
                <input type="date" class="form-control" id="sale_date" name="sale_date" required>
            </div>
            <div class="mb-3">
                <label for="type" class="form-label">Tipologia*</label>
                <input type="text" class="form-control" id="type" name="type" required>
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
            <button type="reset" class="btn btn-secondary">Reset</button>
        </form>
    </div>
@endsection
